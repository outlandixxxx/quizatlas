const http = require('node:http');
const fs = require('node:fs');
const path = require('node:path');
const crypto = require('node:crypto');
const { spawn, spawnSync } = require('node:child_process');
const { validateFactsJob } = require('../fact-generator/job-schema');
const { validateRevisionJob, identity: revisionIdentity, hash: revisionHash } = require('../revision-generator/job-schema');
const revisionJobs = require('../revision-generator/jobs');
const ROOT = __dirname;
const PORT = Number(process.env.MAROQUIZ_RUNNER_PORT || 3777);
const OUTPUT_DIR = path.join(ROOT, 'output');
const JOB_DIR = path.join(ROOT, '.local-jobs');
const RENDER_TIMEOUT_MS = 12 * 60 * 60 * 1000;
// Fixed trusted API; no address supplied by requests is ever fetched.
const API = new URL(process.env.MAROQUIZ_LOCAL_API_URL || 'http://127.0.0.1:8000/api/v1/');
if (!['http:', 'https:'].includes(API.protocol) || !['localhost', '127.0.0.1', '[::1]'].includes(API.hostname) || API.username || API.password) throw new Error('The development API must use loopback.');
const allowedOrigins = new Set((process.env.MAROQUIZ_ALLOWED_ORIGINS || 'http://localhost:4200,http://127.0.0.1:4200').split(',').map(v => v.trim()).filter(Boolean));
for (const dir of [OUTPUT_DIR, JOB_DIR]) fs.mkdirSync(dir, { recursive: true });
const jobs = new Map();
const children = new Map();
const terminal = job => ['completed', 'failed', 'cancelled'].includes(job.status);
function save(job) { revisionJobs.atomicJson(path.join(JOB_DIR, `${job.id}.state.json`), job); }
const jobOutput = job => job.type === 'revision-batch' ? revisionJobs.outputDir(job.id) : path.join(OUTPUT_DIR, job.id);
function restoreJobs() {
for (const file of fs.readdirSync(JOB_DIR).filter(file => /^[a-f0-9-]{36}\.state\.json$/.test(file))) {
  try {
    const job = JSON.parse(fs.readFileSync(path.join(JOB_DIR, file), 'utf8'));
    if (!/^[a-f0-9-]{36}$/.test(job.id)) continue;
    if (!terminal(job)) { job.status = 'failed'; job.error = 'The local runner was interrupted. Start a new render.'; save(job); }
    jobs.set(job.id, job);
  } catch { /* Ignore incomplete state files. */ }
}
}
function sendJson(res, status, body) { res.writeHead(status, { 'Content-Type': 'application/json; charset=utf-8', 'Cache-Control': 'no-store' }); res.end(JSON.stringify(body)); }
function summary(job) {
  if (job.type === 'revision-batch') return { id: job.id, title: job.title, type: job.type, status: job.status, stage: job.stage, progress: job.progress, message: job.message, error: job.error, accessKey: job.key, createdAt: job.createdAt, revision: revisionJobs.publicProgress(job.id, job.status) };
  const artifact = name => job.status === 'completed' && fs.existsSync(path.join(OUTPUT_DIR, job.id, name === 'download' ? job.videoFile : name === 'thumbnail' ? job.thumbnailFile : name === 'metadata' ? 'metadata.json' : job.chaptersFile || 'missing')) ? `/jobs/${job.id}/${name}?key=${job.key}` : null;
  return { id: job.id, title: job.title, type: job.type, status: job.status, stage: job.stage, progress: job.progress, message: job.message, error: job.error, accessKey: job.key, estimatedDuration: job.estimatedDuration, actualDuration: job.actualDuration, width: job.width, height: job.height, createdAt: job.createdAt, videoUrl: artifact('download'), thumbnailUrl: artifact('thumbnail'), metadataUrl: artifact('metadata'), chaptersUrl: artifact('chapters') };
}
function slugify(value) { return String(value).normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '').slice(0, 70) || 'maroquiz-video'; }
async function readJson(req) {
  let size = 0; const chunks = [];
  for await (const chunk of req) { size += chunk.length; if (size > 2 * 1024 * 1024) throw new Error('JSON exceeds 2 MB.'); chunks.push(chunk); }
  const raw = Buffer.concat(chunks);
  req.contentHash = crypto.createHash('sha256').update(raw).digest('hex');
  return JSON.parse(raw.toString('utf8'));
}
async function authorize(req) {
  const ticket = req.headers['x-maroquiz-render-ticket'];
  if (typeof ticket !== 'string' || !/^[a-f0-9]{64}$/.test(ticket)) throw new Error('An authenticated administrator render ticket is required.');
  const response = await fetch(new URL('local-render/authorize', API), { method: 'POST', headers: { 'Content-Type': 'application/json', Accept: 'application/json' }, body: JSON.stringify({ ticket, content_hash: req.contentHash }), signal: AbortSignal.timeout(10000), redirect: 'error' });
  if (!response.ok) throw new Error('Render authorization failed. Sign in as an administrator and retry.');
  const body = await response.json();
  if (!Number.isSafeInteger(body.data?.admin_id)) throw new Error('Invalid render authorization response.');
  return body.data.admin_id;
}
function killTree(child) {
  if (process.platform === 'win32') spawnSync('taskkill', ['/PID', String(child.pid), '/T', '/F'], { windowsHide: true, timeout: 10000 });
  else {
    try { process.kill(-child.pid, 'SIGTERM'); } catch {}
    const force = setTimeout(() => { try { process.kill(-child.pid, 'SIGKILL'); } catch {} }, 5000);
    force.unref();
  }
}
function start(job, document, options) {
  const output = jobOutput(job);
  const input = path.join(output, 'input.json');
  fs.mkdirSync(output, { recursive: true });
  fs.writeFileSync(input, JSON.stringify(document, null, 2));
  const args = job.type === 'revision-batch' ? [path.join(ROOT, '../revision-generator/job-render.js'), input, output] : job.type === 'quiz'
    ? [path.join(ROOT, 'render.js'), input, '--output-dir', output, ...(options.profile === 'draft' ? ['--draft'] : []), ...(options.fps ? ['--fps', String(options.fps)] : [])]
    : [path.join(ROOT, '../fact-generator/job-render.js'), input, output];
  const child = spawn(process.execPath, args, { cwd: ROOT, stdio: ['ignore', 'pipe', 'pipe'], shell: false, detached: process.platform !== 'win32', windowsHide: true });
  children.set(job.id, child);
  job.status = 'running'; job.error = null; job.message = 'Initializing template…'; save(job);
  let stderr = '', pending = '';
  const watchdog = setTimeout(() => { job.status = 'failed'; job.error = 'Render exceeded its watchdog time limit.'; save(job); killTree(child); }, job.type === 'quiz' ? 3 * 60 * 60 * 1000 : RENDER_TIMEOUT_MS);
  child.stdout.on('data', chunk => {
    const text = chunk.toString(); pending += text;
    const lines = pending.split('\n'); pending = lines.pop().slice(-4000);
    for (const line of lines) if (line.startsWith('FACTS_PROGRESS ')) {
      try { const update = JSON.parse(line.slice(15)); if (!terminal(job)) Object.assign(job, update); } catch {}
    }
    for (const line of lines) if (line.startsWith('REVISION_PROGRESS ')) {
      try { const update = JSON.parse(line.slice('REVISION_PROGRESS '.length)); if (!terminal(job)) { job.stage = update.stage; job.message = update.message; } } catch {}
    }
    const matches = [...text.matchAll(/Rendering frames:\s*\d+\/\d+\s*\((\d+)%\)/g)];
    if (matches.length) { job.progress = Number(matches.at(-1)[1]); job.stage = 'frames'; job.message = `Rendering frames: ${job.progress}%`; }
    if (/Encoding with FFmpeg/.test(text)) { job.stage = 'encoding'; job.progress = null; job.message = 'Encoding with FFmpeg…'; }
  });
  child.stderr.on('data', chunk => { stderr = (stderr + chunk).slice(-4000); });
  child.on('error', error => { job.error = error.message; job.status = 'failed'; save(job); });
  child.on('close', code => {
    clearTimeout(watchdog); children.delete(job.id);
    if (job.status === 'cancelled' || (job.status === 'failed' && job.error)) { save(job); return; }
    if (job.type === 'revision-batch') {
      const manifest = revisionJobs.readManifest(job.id);
      job.status = code === 0 && manifest?.status === 'completed' ? 'completed' : 'failed';
      job.stage = job.status; job.progress = job.status === 'completed' ? 100 : null;
      job.error = job.status === 'failed' ? stderr || 'Revision generation failed; retry failed outputs.' : null;
      job.message = job.status === 'completed' ? 'Draft outputs ready.' : 'Some outputs failed; successful formats are retained.';
      save(job); return;
    }
    const video = path.join(output, job.videoFile);
    if (code !== 0 || !fs.existsSync(video) || fs.statSync(video).size === 0) { job.status = 'failed'; job.error = stderr || `Renderer exited with code ${code}.`; job.message = 'Video rendering failed.'; }
    else {
      job.status = 'completed'; job.stage = 'completed'; job.progress = 100; job.message = 'MP4 ready.';
      if (job.type !== 'quiz') {
        try { const metadata = JSON.parse(fs.readFileSync(path.join(output, 'metadata.json'), 'utf8')); Object.assign(job, { actualDuration: metadata.actualDuration, width: metadata.width, height: metadata.height }); }
        catch { job.status = 'failed'; job.error = 'Render metadata or MP4 verification is missing.'; }
      }
    }
    save(job);
  });
}
function serveFile(req, res, file, action) {
  const size = fs.statSync(file).size;
  const headers = { 'Content-Type': action === 'download' ? 'video/mp4' : action === 'thumbnail' ? (file.endsWith('.png') ? 'image/png' : 'image/jpeg') : action === 'metadata' ? 'application/json' : 'text/plain; charset=utf-8', 'Content-Disposition': `${action === 'download' && new URL(req.url, 'http://localhost').searchParams.has('preview') ? 'inline' : 'attachment'}; filename="${path.basename(path.dirname(file))}-${path.basename(file)}"`, 'Accept-Ranges': 'bytes', 'Cache-Control': 'no-store', 'Referrer-Policy': 'no-referrer', 'X-Content-Type-Options': 'nosniff' };
  let start = 0, end = size - 1;
  if (req.headers.range) {
    const match = /^bytes=(\d+)-(\d*)$/.exec(req.headers.range);
    if (!match) { res.writeHead(416, { 'Content-Range': `bytes */${size}` }); return res.end(); }
    start = Number(match[1]); end = match[2] ? Math.min(Number(match[2]), end) : end;
    if (start > end || start >= size) { res.writeHead(416, { 'Content-Range': `bytes */${size}` }); return res.end(); }
    headers['Content-Range'] = `bytes ${start}-${end}/${size}`;
  }
  headers['Content-Length'] = end - start + 1;
  res.writeHead(req.headers.range ? 206 : 200, headers);
  const stream = fs.createReadStream(file, { start, end });
  stream.on('error', () => res.destroy()); res.on('close', () => stream.destroy()); stream.pipe(res);
}
function serveRevisionFile(res, file, mime, preview = false) {
  res.writeHead(200, { 'Content-Type': mime, 'Content-Length': fs.statSync(file).size, 'Content-Disposition': `${preview && mime === 'application/pdf' ? 'inline' : 'attachment'}; filename="${path.basename(file)}"`, 'Cache-Control': 'no-store', 'Referrer-Policy': 'no-referrer', 'X-Content-Type-Options': 'nosniff' });
  const stream = fs.createReadStream(file); stream.on('error', () => res.destroy()); res.on('close', () => stream.destroy()); stream.pipe(res);
}
const server = http.createServer(async (req, res) => {
  if (![`127.0.0.1:${PORT}`, `localhost:${PORT}`, `[::1]:${PORT}`].includes(req.headers.host)) return sendJson(res, 403, { message: 'Invalid local runner host.' });
  const origin = req.headers.origin;
  if (origin && !allowedOrigins.has(origin)) return sendJson(res, 403, { message: 'Website origin is not allowed.' });
  if (origin) { res.setHeader('Access-Control-Allow-Origin', origin); res.setHeader('Vary', 'Origin'); res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS'); res.setHeader('Access-Control-Allow-Headers', 'Content-Type, X-Maroquiz-Local-Runner, X-Maroquiz-Render-Ticket, X-Maroquiz-Job-Key'); }
  if (req.method === 'OPTIONS') { res.writeHead(204); return res.end(); }
  const url = new URL(req.url, `http://127.0.0.1:${PORT}`);
  if (req.method === 'GET' && url.pathname === '/health') return sendJson(res, 200, { status: 'ok', renderer: 'Maroquiz local video generator', profiles: ['quiz', 'facts-short', 'facts-long', 'revision-batch'], revisionOutputs: ['png', 'pdf', 'both'], revisionContentModes: ['explanations', 'corrected-questions'] });
  if (req.method === 'POST' && ['/jobs', '/estimate'].includes(url.pathname)) {
    if (!String(req.headers['content-type'] || '').startsWith('application/json')) return sendJson(res, 415, { message: 'Content-Type must be application/json.' });
    try {
      const data = await readJson(req);
      let adminId;
      try { adminId = await authorize(req); } catch (error) { return sendJson(res, 403, { message: error.message }); }
      const type = data.type || 'quiz';
      let document = data, config, options = data.render_options || {};
      if (type === 'revision-batch' && url.pathname === '/jobs') { document = validateRevisionJob(data); }
      else if (['facts-short', 'facts-long'].includes(type)) { config = validateFactsJob(data); document = config.doc; }
      else if (type === 'quiz' && url.pathname === '/jobs') {
        if (typeof data.video?.title !== 'string' || !data.video.title.trim() || data.video.title.length > 255 || !Array.isArray(data.questions) || !data.questions.length || data.questions.length > 300) throw new Error('Quiz JSON requires a title and questions.');
        for (const question of data.questions) if (typeof question.text !== 'string' || !Array.isArray(question.choices) || question.choices.length < 2 || !question.correct_answer?.label) throw new Error('Invalid quiz question.');
        options = { profile: options.profile === 'draft' ? 'draft' : 'final', fps: Number.isInteger(options.fps) && options.fps >= 15 && options.fps <= 60 ? options.fps : undefined };
        delete document.render_options;
      } else throw new Error('Unsupported job type.');
      if (url.pathname === '/estimate') return sendJson(res, 200, { data: { estimatedDuration: config.estimatedDuration, shortTooLong: config.shortTooLong, width: config.width, height: config.height, factIds: document.facts.map(f => f.id), scenes: config.scenes.length } });
      const revisionKey = type === 'revision-batch' ? revisionHash([adminId, revisionIdentity(document), revisionJobs.fingerprint()]) : null;
      if (revisionKey) {
        const existing = [...jobs.values()].find(job => job.revisionKey === revisionKey);
        if (existing) return sendJson(res, 200, { data: summary(existing) });
      }
      if (children.size || [...jobs.values()].some(job => !terminal(job))) return sendJson(res, 409, { message: 'A render is already running. Finish or cancel it first.' });
      const id = crypto.randomUUID();
      if (type === 'revision-batch') {
        const job = { id, key: crypto.randomBytes(32).toString('hex'), adminId, revisionKey, title: document.subject.name, type, status: 'queued', stage: 'initializing', progress: null, error: null, createdAt: new Date().toISOString() };
        jobs.set(id, job); start(job, document, options);
        return sendJson(res, 202, { data: summary(job) });
      }
      const slug = slugify(document.video.title);
      const job = { id, key: crypto.randomBytes(32).toString('hex'), adminId, title: document.video.title, type, status: 'queued', stage: 'initializing', progress: null, error: null, createdAt: new Date().toISOString(), estimatedDuration: config?.estimatedDuration, width: config?.width, height: config?.height, videoFile: type === 'quiz' ? `${slug}.mp4` : 'video.mp4', thumbnailFile: type === 'quiz' ? `${slug}-thumbnail.png` : 'thumbnail.jpg', chaptersFile: type === 'quiz' ? `${slug}-chapters.txt` : null };
      jobs.set(id, job); start(job, document, options);
      return sendJson(res, 202, { data: summary(job) });
    } catch (error) { return sendJson(res, 422, { message: error.message }); }
  }
  const match = /^\/jobs\/([a-f0-9-]{36})(?:\/(download|thumbnail|chapters|metadata|cancel|retry|revision\/(?:pdf|catalogue|index|quiz-\d+|image-\d+-\d+)))?$/.exec(url.pathname);
  if (match) {
    const job = jobs.get(match[1]);
    if (!job) return sendJson(res, 404, { message: 'Job not found.' });
    const key = req.headers['x-maroquiz-job-key'] || url.searchParams.get('key') || '';
    if (typeof key !== 'string' || !/^[a-f0-9]{64}$/.test(key) || key.length !== job.key.length || !crypto.timingSafeEqual(Buffer.from(key), Buffer.from(job.key))) return sendJson(res, 403, { message: 'Job access key required.' });
    const action = match[2];
    if (job.type === 'revision-batch' && req.method === 'POST' && action === 'retry') {
      if (children.size) return sendJson(res, 409, { message: 'The renderer is still stopping or processing another job. Wait a few seconds, then retry.' });
      if (!['failed', 'cancelled'].includes(job.status) || children.size || [...jobs.values()].some(other => !terminal(other))) return sendJson(res, 409, { message: 'Finish or cancel active work before retrying.' });
      try { const input = JSON.parse(fs.readFileSync(path.join(jobOutput(job), 'input.json'), 'utf8')); validateRevisionJob(input); start(job, input, {}); }
      catch (error) { return sendJson(res, 422, { message: error.message }); }
      return sendJson(res, 202, { data: summary(job) });
    }
    if (job.type === 'revision-batch' && req.method === 'GET' && action?.startsWith('revision/')) {
      const artifact = revisionJobs.artifact(job.id, action.slice('revision/'.length));
      if (!artifact || !fs.existsSync(artifact.file)) return sendJson(res, 404, { message: 'This revision output is not ready.' });
      return serveRevisionFile(res, artifact.file, artifact.mime, url.searchParams.has('preview'));
    }
    if (req.method === 'POST' && action === 'cancel') {
      if (!terminal(job)) { job.status = 'cancelled'; job.stage = 'cancelled'; job.progress = null; job.message = 'Rendering cancelled.'; save(job); const child = children.get(job.id); if (child) killTree(child); }
      return sendJson(res, 200, { data: summary(job) });
    }
    if (req.method === 'GET' && !action) return sendJson(res, 200, { data: summary(job) });
    if (req.method === 'GET' && action !== 'cancel') {
      if (job.type === 'revision-batch') return sendJson(res, 404, { message: 'Use revision artifact downloads.' });
      if (job.status !== 'completed') return sendJson(res, 409, { message: 'Output is not ready.' });
      const name = action === 'download' ? job.videoFile : action === 'thumbnail' ? job.thumbnailFile : action === 'metadata' ? 'metadata.json' : job.chaptersFile;
      const file = name && path.join(OUTPUT_DIR, job.id, name);
      if (!file || !fs.existsSync(file)) return sendJson(res, 404, { message: 'Output not found.' });
      return serveFile(req, res, file, action);
    }
  }
  return sendJson(res, 404, { message: 'Endpoint not found.' });
});
server.requestTimeout = 30000;
server.on('error', error => { console.error(error.code === 'EADDRINUSE' ? `Port ${PORT} is already in use. A runner may already be running.` : error.message); process.exitCode = 1; });
server.listen(PORT, '127.0.0.1', () => { restoreJobs(); console.log(`MaroQuiz local runner: http://127.0.0.1:${PORT}\nTrusted API: ${API.href}\nPress Ctrl+C to stop.`); });
function shutdown() { for (const [id, child] of children) { const job = jobs.get(id); if (!terminal(job)) { job.status = 'failed'; job.error = 'Runner stopped during rendering.'; save(job); } killTree(child); } server.close(); }
process.on('SIGINT', shutdown); process.on('SIGTERM', shutdown);
