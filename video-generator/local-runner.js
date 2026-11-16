const http = require('node:http');
const fs = require('node:fs');
const path = require('node:path');
const crypto = require('node:crypto');
const { spawn, spawnSync } = require('node:child_process');
const { validateFactsJob } = require('../fact-generator/job-schema');
const { validateRevisionJob, identity: revisionIdentity, hash: revisionHash } = require('../revision-generator/job-schema');
const revisionJobs = require('../revision-generator/jobs');
const quizBatches = require('./quiz-batch');
const { UsageChannel, credentials, outputReceipts, fileReceipt } = require('./content-usage');
const { verifyVideo } = require('./video-export');
function createRunner(configuration = {}) {
const ROOT = __dirname;
const videoBatch = job => ['quiz-batch', 'facts-batch'].includes(job.type);
let PORT = configuration.port ?? Number(process.env.MAROQUIZ_RUNNER_PORT || 3777);
const OUTPUT_DIR = configuration.outputDir || path.join(ROOT, 'output');
const JOB_DIR = configuration.jobDir || path.join(ROOT, '.local-jobs');
const RENDER_TIMEOUT_MS = 12 * 60 * 60 * 1000;
// Fixed trusted API; no address supplied by requests is ever fetched.
const API = new URL(configuration.api || process.env.MAROQUIZ_LOCAL_API_URL || 'http://127.0.0.1:8000/api/v1/');
if (!['http:', 'https:'].includes(API.protocol) || !['localhost', '127.0.0.1', '[::1]'].includes(API.hostname) || API.username || API.password) throw new Error('The development API must use loopback.');
const allowedOrigins = new Set((process.env.MAROQUIZ_ALLOWED_ORIGINS || 'http://localhost:4200,http://127.0.0.1:4200').split(',').map(v => v.trim()).filter(Boolean));
for (const dir of [OUTPUT_DIR, JOB_DIR]) fs.mkdirSync(dir, { recursive: true });
const existingBatchLock = path.join(JOB_DIR, 'quiz-batch.lock');
if (fs.existsSync(existingBatchLock)) {
  const owner = JSON.parse(fs.readFileSync(existingBatchLock, 'utf8'));
  let alive = true;
  try { process.kill(owner.pid, 0); } catch (error) { alive = error.code !== 'ESRCH'; }
  if (alive) throw Error('Another local batch runner owns this job directory. Stop it before starting a new runner.');
}
const jobs = new Map();
const children = new Map();
const starting = new Set();
const batchWorkers = new Set();
const thumbnailWorkers = new Set();
const busy = () => children.size || starting.size || batchWorkers.size || thumbnailWorkers.size || [...jobs.values()].some(job => !terminal(job) || ((videoBatch(job) || job.type === 'quiz') && quizBatches.workerAlive(job)));
const terminal = job => ['completed', 'failed', 'cancelled'].includes(job.status);
function save(job) {
  const file = path.join(JOB_DIR, `${job.id}.state.json`);
  const temporary = file + '.' + crypto.randomBytes(8).toString('hex') + '.tmp';
  fs.writeFileSync(temporary, JSON.stringify(job, null, 2), { flag: 'wx', mode: 0o600 });
  fs.renameSync(temporary, file);
}
const jobOutput = job => job.type === 'revision-batch' ? revisionJobs.outputDir(job.id) : path.join(OUTPUT_DIR, job.id);
const thumbnailTools = () => configuration.thumbnails || require('./thumbnails');
async function generateSingleThumbnail(job, document) {
  if (!document.render_options?.thumbnail) return;
  const root = jobOutput(job), tools = thumbnailTools(), base = path.basename(job.videoFile, '.mp4');
  job.thumbnailFile = `${base}-thumbnail.jpg`; job.thumbnailStatus = 'running'; job.thumbnailError = null; save(job);
  try {
    const rendered = await tools.renderThumbnail(document, { outputDir: root, outputBase: base });
    if (path.resolve(rendered.path) !== path.resolve(root, job.thumbnailFile)) throw Error('Thumbnail renderer returned an unexpected output path.');
    await tools.verifyThumbnail(rendered.path, document.render_options.thumbnail);
    const receipt = fileReceipt(root, job.thumbnailFile, job.thumbnailSha256);
    job.thumbnailSha256 = receipt.sha256; job.thumbnailStatus = 'completed'; job.thumbnailError = null;
  } catch (error) { job.thumbnailStatus = 'failed'; job.thumbnailError = error.message; }
  save(job);
}
async function thumbnailWork(job, document) {
  thumbnailWorkers.add(job.id); job.thumbnailRunning = true; save(job);
  try {
    if (videoBatch(job)) await quizBatches.retryThumbnails(job, jobOutput(job), { save, thumbnails: configuration.thumbnails });
    else await generateSingleThumbnail(job, document || JSON.parse(fs.readFileSync(path.join(jobOutput(job), 'input.json'), 'utf8')));
  } catch (error) { job.thumbnailStatus = 'failed'; job.thumbnailError = error.message; }
  finally { thumbnailWorkers.delete(job.id); job.thumbnailRunning = false; save(job); }
}
function reportFinishedWorker(job, document) {
  if (!job.usage) save(job);
  queueUsage(job); void flushUsage(job);
  if (document.render_options?.thumbnail && (job.status === 'completed' || job.usage?.pending?.event === 'complete')) void thumbnailWork(job, document);
}
function cleanPreviewDirectory(directory) {
  if (!directory) return;
  for (const name of ['preview-thumbnail.jpg', 'preview-thumbnail.jpg.json']) {
    try { fs.unlinkSync(path.join(directory, name)); } catch (error) { if (error.code !== 'ENOENT') return; }
  }
  try { fs.rmdirSync(directory); } catch { /* Leave any unexpected files intact. */ }
}
function verifyQuizOutput(job) {
  const root = jobOutput(job);
  (configuration.verifyVideo || verifyVideo)(path.join(root, job.videoFile));
  const expected = job.verifiedOutput?.sha256 || job.usage?.pending?.output?.[0]?.sha256;
  job.verifiedOutput = fileReceipt(root, job.videoFile, expected);
}
function retainInterruptedQuizOutputs(job) {
  if (job.type === 'quiz') {
    try { verifyQuizOutput(job); return true; } catch { return false; }
  }
  if (job.type === 'quiz-batch') for (const item of job.items) {
    if (item.renderStatus === 'completed') continue;
    try {
      (configuration.verifyVideo || verifyVideo)(path.join(jobOutput(job), item.source));
      const receipt = fileReceipt(jobOutput(job), item.source, item.sha256);
      item.sha256 = receipt.sha256; item.renderStatus = 'completed'; item.renderedAt ||= new Date().toISOString();
    } catch { /* Unfinished frames or an invalid MP4 are not completed output. */ }
  }
  return false;
}
function restoreJobs() {
for (const file of fs.readdirSync(JOB_DIR).filter(file => /^[a-f0-9-]{36}\.state\.json$/.test(file))) {
  try {
    const job = JSON.parse(fs.readFileSync(path.join(JOB_DIR, file), 'utf8'));
    if (!/^[a-f0-9-]{36}$/.test(job.id)) continue;
    if (job.thumbnailRunning || job.thumbnailStatus === 'running') {
      job.thumbnailRunning = false;
      if (job.thumbnailStatus === 'running') { job.thumbnailStatus = 'failed'; job.thumbnailError = 'Thumbnail generation was interrupted. Retry the thumbnail independently.'; }
      save(job);
    }
    if (videoBatch(job)) for (const item of job.items || []) {
      if (item.thumbnailStatus === 'running' || item.thumbnailExportStatus === 'running') {
        if (item.thumbnailStatus === 'running') item.thumbnailStatus = 'failed';
        if (item.thumbnailExportStatus === 'running') item.thumbnailExportStatus = 'failed';
        item.thumbnailError = 'Thumbnail processing was interrupted. Retry the thumbnail independently.';
        save(job);
      }
    }
    if (job.status !== 'completed' && (videoBatch(job) || job.type === 'quiz') && quizBatches.workerAlive(job)) {
      job.status = 'failed'; job.error = 'A retained renderer is still running. Stop it before recovering this job.';
      // Never release a lease or reconcile a file while its writer may still own it.
      if (job.usage) job.usage.pending = null;
      save(job); jobs.set(job.id, job); continue;
    }
    if (job.type === 'quiz' && job.usage?.pending?.event === 'complete') {
      try { verifyQuizOutput(job); job.usage.pending.output = outputReceipts(job, jobOutput(job)); save(job); }
      catch { job.status = 'failed'; job.error = 'Retained quiz output verification failed. Outputs were preserved.'; job.verifiedOutput = null; queueUsage(job); }
    }
    if (videoBatch(job) && job.usage?.pending?.event === 'complete') {
      try {
        outputReceipts(job, jobOutput(job));
        for (const item of job.items) {
          (configuration.verifyVideo || verifyVideo)(path.join(jobOutput(job), item.source), item.requireAudio !== false);
          (configuration.verifyVideo || verifyVideo)(path.join(job.exportDir, item.filename), item.requireAudio !== false);
          fileReceipt(job.exportDir, item.filename, item.sha256);
        }
      } catch {
        job.usage.pending = null; job.status = 'failed';
        job.error = 'Retained batch verification failed. Restore the recorded source/export files before resuming.';
        queueUsage(job); save(job);
      }
    }
    if (!terminal(job) && job.usage?.pending?.event !== 'complete') {
      const completedQuiz = retainInterruptedQuizOutputs(job);
      job.status = completedQuiz ? 'completed' : 'failed'; job.error = completedQuiz ? null : 'The local runner was interrupted. Retry the retained job.';
      if (job.usage) queueUsage(job);
      save(job);
    }
    if (videoBatch(job) && terminal(job)) {
      for (const item of job.items) {
        if (item.renderStatus === 'running') item.renderStatus = 'interrupted';
        if (item.exportStatus === 'running') item.exportStatus = 'interrupted';
      }
      save(job);
    }
    jobs.set(job.id, job);
  } catch { /* Ignore incomplete state files. */ }
}
}
function sendJson(res, status, body) { res.writeHead(status, { 'Content-Type': 'application/json; charset=utf-8', 'Cache-Control': 'no-store' }); res.end(JSON.stringify(body)); }
function summary(job) {
  if (videoBatch(job)) return { id: job.id, title: job.title, type: job.type, status: job.status, stage: job.stage, progress: job.progress, message: job.message, error: job.error, accessKey: job.key, thumbnailRunning: !!job.thumbnailRunning, batch: quizBatches.publicBatch(job) };
  if (job.type === 'revision-batch') return { id: job.id, title: job.title, type: job.type, status: job.status, stage: job.stage, progress: job.progress, message: job.message, error: job.error, accessKey: job.key, usage_roots: job.usage?.roots || [], createdAt: job.createdAt, revision: revisionJobs.publicProgress(job.id, job.status) };
  const artifact = name => job.status === 'completed' && (name !== 'thumbnail' || !job.thumbnailStatus || job.thumbnailStatus === 'completed') && fs.existsSync(path.join(OUTPUT_DIR, job.id, name === 'download' ? job.videoFile : name === 'thumbnail' ? job.thumbnailFile : name === 'metadata' ? 'metadata.json' : job.chaptersFile || 'missing')) ? `/jobs/${job.id}/${name}?key=${job.key}` : null;
  return { id: job.id, title: job.title, type: job.type, status: job.status, stage: job.stage, progress: job.progress, message: job.message, error: job.error, accessKey: job.key, usage_roots: job.usage?.roots || [], thumbnailStatus: job.thumbnailStatus, thumbnailError: job.thumbnailError, thumbnailRunning: !!job.thumbnailRunning, estimatedDuration: job.estimatedDuration, actualDuration: job.actualDuration, width: job.width, height: job.height, createdAt: job.createdAt, videoUrl: artifact('download'), thumbnailUrl: artifact('thumbnail'), metadataUrl: artifact('metadata'), chaptersUrl: artifact('chapters') };
}
function slugify(value) { return String(value).normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '').slice(0, 70) || 'maroquiz-video'; }
async function readJson(req) {
  let size = 0; const chunks = [];
  for await (const chunk of req) { size += chunk.length; if (size > 2 * 1024 * 1024) throw new Error('JSON exceeds 2 MB.'); chunks.push(chunk); }
  const raw = Buffer.concat(chunks);
  req.contentHash = crypto.createHash('sha256').update(raw).digest('hex');
  return JSON.parse(raw.toString('utf8'));
}
async function authorize(req, purpose) {
  const ticket = req.headers['x-maroquiz-render-ticket'];
  if (typeof ticket !== 'string' || !/^[a-f0-9]{64}$/.test(ticket)) throw new Error('An authenticated administrator render ticket is required.');
  const response = await (configuration.transport || fetch)(new URL('local-render/authorize', API), { method: 'POST', headers: { 'Content-Type': 'application/json', Accept: 'application/json' }, body: JSON.stringify({ ticket, content_hash: req.contentHash, purpose }), signal: AbortSignal.timeout(10000), redirect: 'error' });
  if (!response.ok) throw Object.assign(Error(response.status === 409 ? 'Content is reserved or already used. Refresh content availability.' : 'Render authorization failed. Sign in as an administrator and retry.'), { status: response.status });
  const body = await response.json();
  if (!Number.isSafeInteger(body.data?.admin_id)) throw new Error('Invalid render authorization response.');
  return body.data;
}
function killTree(child) {
  if (configuration.killWorker) return configuration.killWorker(child);
  if (process.platform === 'win32') spawnSync('taskkill', ['/PID', String(child.pid), '/T', '/F'], { windowsHide: true, timeout: 10000 });
  else {
    try { process.kill(-child.pid, 'SIGTERM'); } catch {}
    const force = setTimeout(() => { try { process.kill(-child.pid, 'SIGKILL'); } catch {} }, 5000);
    force.unref();
  }
}
const usageChannel = new UsageChannel(API, configuration.transport || fetch);
const reporting = new Set();
function queueUsage(job) {
  if (!job.usage) return;
  let event = job.status === 'completed' ? 'complete' : job.status === 'cancelled' ? 'cancel' : 'fail';
  if (event !== 'complete' && !children.has(job.id) && !quizBatches.workerAlive(job)) {
    // A stopped renderer can have finalized its MP4 just before cancellation,
    // an export failure or a runner shutdown. Keep that verified use recorded.
    retainInterruptedQuizOutputs(job);
  }
  let output = [];
  try { output = outputReceipts(job, jobOutput(job), event === 'complete'); }
  catch (error) {
    if (error.code === 'USAGE_EVIDENCE_UNCERTAIN') {
      job.status = 'failed'; job.stage = 'usage_uncertain'; job.error = error.message;
      job.usage.pending = null; job.usage.confirmed = false; job.usage.evidenceRequired = true;
      save(job); return; // Never release verified media whose question mapping needs review.
    }
    if (event === 'complete') { event = 'fail'; job.status = 'failed'; job.error = 'Generated output verification failed.'; }
  }
  // A verified final MP4 is a completed single-quiz result even if the worker
  // stopped or cancellation arrived just after publication. Reconcile it once;
  // never offer a retry that could render over that retained successful output.
  if (job.type === 'quiz' && job.verifiedOutput && output.length) { event = 'complete'; job.error = null; }
  job.usage.pending = { event, output };
  job.usage.confirmed = false;
  if (event === 'complete') { job.status = 'running'; job.stage = 'usage_reporting'; job.message = 'Recording the verified output…'; }
  save(job);
}
function stopExpired(job) {
  job.status = 'failed'; job.stage = 'failed';
  job.error = 'The usage reservation could not be maintained. Outputs are retained; reconnect and review availability before retrying.';
  save(job);
  const child = children.get(job.id);
  if (child) killTree(child);
  else if (!job.usage.pending) queueUsage(job);
}
async function flushUsage(job) {
  if (!job.usage || job.usage.evidenceRequired || reporting.has(job.id) || starting.has(job.id)) return;
  const pending = job.usage.pending;
  if (!pending && terminal(job)) return;
  if (!pending && Date.now() - (job.usage.lastHeartbeat || 0) < 60000 && Date.now() < job.usage.deadline) return;
  reporting.add(job.id);
  try {
    if (Date.now() >= job.usage.deadline && !pending) { stopExpired(job); return; }
    const event = pending?.event || 'heartbeat';
    await usageChannel.send(job, event, pending?.output || []);
    job.usage.lastHeartbeat = Date.now();
    if (pending) {
      job.usage.pending = null; job.usage.confirmed = true;
      if (event === 'complete') { job.status = 'completed'; job.stage = 'completed'; job.progress = 100; job.error = null; job.message = 'Verified outputs ready.'; }
    }
    save(job);
  } catch (error) {
    if (error.permanent || Date.now() >= job.usage.deadline) {
      if (!terminal(job)) stopExpired(job);
      if (!children.has(job.id)) { job.usage.pending = null; job.usage.confirmed = false; save(job); }
    }
    // Transient failures retain the durable pending event. No output is deleted.
  } finally { reporting.delete(job.id); }
}
const usageTimer = setInterval(() => { for (const job of jobs.values()) void flushUsage(job); }, 15000);
usageTimer.unref();

function launch(job, document, options) {
  try { start(job, document, options); }
  catch (error) {
    job.status = 'failed'; job.error = 'The local worker could not start.';
    try { queueUsage(job); } catch { /* A full/unwritable disk is also bounded by the server lease. */ }
    void flushUsage(job);
    throw error;
  }
}
function launchBatch(job) {
  // A separate runner on another port must not use the same job directory concurrently.
  const lock = path.join(JOB_DIR, 'quiz-batch.lock');
  if (fs.existsSync(lock)) {
    const owner = JSON.parse(fs.readFileSync(lock, 'utf8'));
    let alive = true;
    try { process.kill(owner.pid, 0); } catch (error) { alive = error.code !== 'ESRCH'; }
    if (alive) throw Error('Another batch worker owns this job directory. Stop it before retrying.');
    fs.unlinkSync(lock);
  }
  fs.writeFileSync(lock, JSON.stringify({ pid: process.pid, id: job.id }), { flag: 'wx', mode: 0o600 });
  batchWorkers.add(job.id);
  job.status = 'running'; job.error = null;
  try { save(job); } catch (error) { batchWorkers.delete(job.id); fs.unlinkSync(lock); throw error; }
  void quizBatches.runBatch(job, jobOutput(job), {
    children, save, killTree, spawnWorker: configuration.spawnWorker, verifyVideo: configuration.verifyVideo, thumbnails: configuration.thumbnails,
    async recordProgress(_job, item) {
      if (job.usage.status === 'used') return; // A lost final acknowledgement may be replayed after reconciliation.
      const deadline = Date.now() + 15000;
      while (reporting.has(job.id)) { if (Date.now() > deadline) throw Error('Usage reporting is busy. Retry after it reconnects.'); await new Promise(resolve => setTimeout(resolve, 50)); }
      reporting.add(job.id);
      try { await usageChannel.send(job, 'progress', outputReceipts({ ...job, items: [item] }, jobOutput(job), false)); save(job); }
      finally { reporting.delete(job.id); }
    },
    async finished() {
      try { queueUsage(job); await flushUsage(job); }
      finally { batchWorkers.delete(job.id); try { fs.unlinkSync(lock); } catch (error) { if (error.code !== 'ENOENT') console.error('Batch lock could not be released:', error.message); } }
    },
  }).catch(error => { job.status = 'failed'; job.error = error.message; save(job); });
}
function start(job, document, options) {
  if (videoBatch(job)) return launchBatch(job);
  const output = jobOutput(job);
  const input = path.join(output, 'input.json');
  fs.mkdirSync(output, { recursive: true });
  fs.writeFileSync(input, JSON.stringify(document, null, 2));
  const args = job.type === 'revision-batch' ? [path.join(ROOT, '../revision-generator/job-render.js'), input, output] : job.type === 'quiz'
    ? [path.join(ROOT, 'render.js'), input, '--output-dir', output, '--skip-thumbnail', ...(options.profile === 'draft' ? ['--draft'] : []), ...(options.fps ? ['--fps', String(options.fps)] : [])]
    : [path.join(ROOT, '../fact-generator/job-render.js'), input, output, '--skip-thumbnail'];
  const child = (configuration.spawnWorker || spawn)(process.execPath, args, { cwd: ROOT, stdio: ['ignore', 'pipe', 'pipe'], shell: false, detached: process.platform !== 'win32', windowsHide: true });
  children.set(job.id, child);
  if (job.type === 'quiz') job.workerPid = child.pid || null;
  job.status = 'running'; job.error = null; job.message = 'Initializing template…'; save(job);
  let stderr = '', pending = '';
  const watchdog = setTimeout(() => { job.status = 'failed'; job.error = 'Render exceeded its watchdog time limit.'; save(job); killTree(child); }, job.type === 'quiz' ? 3 * 60 * 60 * 1000 : RENDER_TIMEOUT_MS);
  child.stdout.on('data', chunk => {
    const text = chunk.toString(); pending += text;
    const lines = pending.split('\n'); pending = lines.pop().slice(-4000);
    for (const line of lines) if (line.startsWith('FACTS_PROGRESS ')) {
      try { const update = JSON.parse(line.slice(15)); if (!terminal(job)) for (const key of ['stage', 'progress', 'message', 'estimatedDuration', 'actualDuration', 'width', 'height']) if (Object.hasOwn(update, key)) job[key] = update[key]; } catch {}
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
    if (job.type === 'quiz') job.workerPid = null;
    if (job.status === 'cancelled' || (job.status === 'failed' && job.error)) { reportFinishedWorker(job, document); return; }
    if (job.type === 'revision-batch') {
      const manifest = revisionJobs.readManifest(job.id);
      job.status = code === 0 && manifest?.status === 'completed' ? 'completed' : 'failed';
      job.stage = job.status; job.progress = job.status === 'completed' ? 100 : null;
      job.error = job.status === 'failed' ? stderr || 'Revision generation failed; retry failed outputs.' : null;
      job.message = job.status === 'completed' ? 'Outputs ready.' : 'Some outputs failed; successful formats are retained.';
      reportFinishedWorker(job, document); return;
    }
    const video = path.join(output, job.videoFile);
    if (code !== 0 || !fs.existsSync(video) || fs.statSync(video).size === 0) { job.status = 'failed'; job.error = stderr || `Renderer exited with code ${code}.`; job.message = 'Video rendering failed.'; }
    else {
      job.status = 'completed'; job.stage = 'completed'; job.progress = 100; job.message = 'MP4 ready.';
      if (job.type === 'quiz') {
        try { verifyQuizOutput(job); }
        catch { job.status = 'failed'; job.stage = 'failed'; job.progress = null; job.error = 'Generated MP4 verification failed. Outputs were preserved.'; }
      } else {
        try { const metadata = JSON.parse(fs.readFileSync(path.join(output, 'metadata.json'), 'utf8')); Object.assign(job, { actualDuration: metadata.actualDuration, width: metadata.width, height: metadata.height }); }
        catch { job.status = 'failed'; job.error = 'Render metadata or MP4 verification is missing.'; }
      }
    }
    reportFinishedWorker(job, document);
  });
}
function serveFile(req, res, file, action, cleanup) {
  const size = fs.statSync(file).size;
  const headers = { 'Content-Type': action === 'download' ? 'video/mp4' : action === 'thumbnail' ? (file.endsWith('.png') ? 'image/png' : 'image/jpeg') : action === 'metadata' ? 'application/json' : 'text/plain; charset=utf-8', 'Content-Disposition': `${action === 'download' && new URL(req.url, 'http://localhost').searchParams.has('preview') ? 'inline' : 'attachment'}; filename="${path.basename(path.dirname(file))}-${path.basename(file)}"`, 'Accept-Ranges': 'bytes', 'Cache-Control': 'no-store', 'Referrer-Policy': 'no-referrer', 'X-Content-Type-Options': 'nosniff' };
  let start = 0, end = size - 1;
  if (req.headers.range) {
    const match = /^bytes=(\d+)-(\d*)$/.exec(req.headers.range);
    if (!match) { res.writeHead(416, { 'Content-Range': `bytes */${size}` }); res.end(); cleanup?.(); return; }
    start = Number(match[1]); end = match[2] ? Math.min(Number(match[2]), end) : end;
    if (start > end || start >= size) { res.writeHead(416, { 'Content-Range': `bytes */${size}` }); res.end(); cleanup?.(); return; }
    headers['Content-Range'] = `bytes ${start}-${end}/${size}`;
  }
  headers['Content-Length'] = end - start + 1;
  res.writeHead(req.headers.range ? 206 : 200, headers);
  const stream = fs.createReadStream(file, { start, end });
  stream.on('error', () => res.destroy()); stream.once('close', () => cleanup?.()); res.on('close', () => stream.destroy()); stream.pipe(res);
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
  if (req.method === 'GET' && url.pathname === '/health') return sendJson(res, 200, { status: 'ok', renderer: 'Maroquiz local video generator', profiles: ['quiz-batch', 'facts-batch', 'quiz', 'facts-short', 'facts-long', 'revision-batch'], quizTemplates: ['long', 'five-seconds', 'defi-du-jour', 'niveau-concours'], revisionOutputs: ['png', 'pdf', 'both'], revisionContentModes: ['explanations', 'corrected-questions'] });
  if (req.method === 'POST' && ['/thumbnails/options', '/thumbnails/preview'].includes(url.pathname)) {
    if (!String(req.headers['content-type'] || '').startsWith('application/json')) return sendJson(res, 415, { message: 'Content-Type must be application/json.' });
    let previewId, previewDirectory, previewStreaming = false;
    try {
      const document = await readJson(req);
      try { await authorize(req, 'thumbnail'); } catch (error) { return sendJson(res, error.status || 403, { message: error.message }); }
      if (url.pathname === '/thumbnails/options') return sendJson(res, 200, { data: thumbnailTools().suggest(document) });
      if (busy()) return sendJson(res, 409, { message: 'Finish the active local render before previewing a thumbnail.' });
      previewId = `thumbnail-preview-${crypto.randomUUID()}`; starting.add(previewId);
      const outputDir = path.join(OUTPUT_DIR, '.thumbnail-previews', previewId);
      previewDirectory = outputDir;
      fs.mkdirSync(outputDir, { recursive: true, mode: 0o700 });
      const rendered = await thumbnailTools().renderThumbnail(document, { outputDir, outputBase: 'preview' });
      if (path.resolve(rendered.path) !== path.join(outputDir, 'preview-thumbnail.jpg')) throw Error('Unexpected thumbnail preview output path.');
      await thumbnailTools().verifyThumbnail(rendered.path, document.render_options?.thumbnail);
      previewStreaming = true;
      return serveFile(req, res, rendered.path, 'thumbnail', () => cleanPreviewDirectory(outputDir));
    } catch (error) { previewStreaming = false; return sendJson(res, 422, { message: error.message }); }
    finally { if (previewId) starting.delete(previewId); if (!previewStreaming) cleanPreviewDirectory(previewDirectory); }
  }
  if (req.method === 'POST' && ['/jobs', '/estimate'].includes(url.pathname)) {
    if (!String(req.headers['content-type'] || '').startsWith('application/json')) return sendJson(res, 415, { message: 'Content-Type must be application/json.' });
    let authorization;
    try {
      const data = await readJson(req);
      try { authorization = await authorize(req, url.pathname === '/estimate' ? 'estimate' : 'render'); } catch (error) { return sendJson(res, error.status || 403, { message: error.message }); }
      const adminId = authorization.admin_id;
      const type = data.type || 'quiz';
      let document = data, config, options = data.render_options || {};
      if (type === 'facts-batch' && url.pathname === '/estimate') {
        quizBatches.validateBatch(data);
        const plans = data.videos.map(validateFactsJob);
        config = { ...plans[0], estimatedDuration: plans.reduce((sum, p) => sum + p.estimatedDuration, 0), shortTooLong: plans.some(p => p.shortTooLong), scenes: plans.flatMap(p => p.scenes) };
        document = { ...data, facts: data.videos.flatMap(v => v.facts) };
      }
      else if (['quiz-batch', 'facts-batch'].includes(type) && url.pathname === '/jobs') { quizBatches.validateBatch(data); options = { profile: options.profile === 'draft' ? 'draft' : 'final', fps: Number.isInteger(options.fps) && options.fps >= 15 && options.fps <= 60 ? options.fps : undefined }; }
      else if (type === 'revision-batch' && url.pathname === '/jobs') { document = validateRevisionJob(data); }
      else if (['facts-short', 'facts-long'].includes(type)) { config = validateFactsJob(data); document = config.doc; }
      else if (type === 'quiz' && url.pathname === '/jobs') {
        require('./quiz-templates').shortTemplate(data)?.validate(data);
        if (typeof data.video?.title !== 'string' || !data.video.title.trim() || data.video.title.length > 255 || !Array.isArray(data.questions) || !data.questions.length || data.questions.length > 300) throw new Error('Quiz JSON requires a title and questions.');
        for (const question of data.questions) if (typeof question.text !== 'string' || !Array.isArray(question.choices) || question.choices.length < 2 || !question.correct_answer?.label) throw new Error('Invalid quiz question.');
        options = { profile: options.profile === 'draft' ? 'draft' : 'final', fps: Number.isInteger(options.fps) && options.fps >= 15 && options.fps <= 60 ? options.fps : undefined };
        // Other quiz templates have only worker CLI options. Niveau also has
        // approved presentation/audio settings that must survive single jobs
        // and restart/retry, just as they do in a batch snapshot.
        if (document.video?.template !== 'niveau-concours') {
          const thumbnail = document.render_options?.thumbnail;
          delete document.render_options;
          if (thumbnail) document.render_options = { thumbnail };
        }
      } else throw new Error('Unsupported job type.');
      if (url.pathname === '/estimate') return sendJson(res, 200, { data: { estimatedDuration: config.estimatedDuration, shortTooLong: config.shortTooLong, width: config.width, height: config.height, factIds: document.facts.map(f => f.id), scenes: config.scenes.length } });
      const usage = credentials(authorization.usage, authorization.usage?.operation_id);
      usage.deadline = Date.now() + usage.lease_seconds * 1000;
      const revisionKey = type === 'revision-batch' ? revisionHash([adminId, revisionIdentity(document), revisionJobs.fingerprint()]) : null;
      const existing = jobs.get(usage.operation_id);
      if (existing) {
        if (existing.adminId !== adminId) throw Error('The job belongs to another administrator.');
        if (existing.usage?.evidenceRequired) return sendJson(res, 409, { message: 'Verified output question mapping needs review before this operation can resume.' });
        if (['failed', 'cancelled'].includes(existing.status) && (usage.status !== 'used' || existing.type === 'quiz')) {
          if ((!videoBatch(existing) && existing.usage?.pending) || reporting.has(existing.id)) return sendJson(res, 409, { message: 'Reconnect usage reporting before retrying this job.' });
          if (busy()) return sendJson(res, 409, { message: 'Finish active work before retrying.' });
          starting.add(existing.id);
          try {
            existing.usage = usage;
            if (videoBatch(existing)) await quizBatches.recover(existing, jobOutput(existing), { usageChannel, outputReceipts, save, verifyVideo: configuration.verifyVideo });
            else if (usage.status !== 'reserved' && usage.status !== 'used') await usageChannel.send(existing, 'retry');
            if (existing.type === 'quiz' && retainInterruptedQuizOutputs(existing)) {
              existing.status = 'completed'; queueUsage(existing);
              starting.delete(existing.id); await flushUsage(existing);
              return sendJson(res, 200, { data: summary(existing) });
            }
            if (usage.status === 'used') return sendJson(res, 409, { message: 'This operation already finished; restore its retained verified output instead of rendering it again.' });
            existing.usage.pending = null; existing.usage.confirmed = false;
            launch(existing, document, options);
          } finally { starting.delete(existing.id); }
        }
        return sendJson(res, 200, { data: summary(existing) });
      }
      const id = usage.operation_id;
      if (busy()) {
        // Another request may be reclaiming this very operation. Never cancel its lease.
        if (!starting.has(id) && usage.status === 'reserved') await usageChannel.send({ id, usage }, 'cancel');
        return sendJson(res, 409, { message: 'A render is already running. Finish or cancel it first.' });
      }
      starting.add(id);
      try {
      if (['failed', 'released'].includes(usage.status)) await usageChannel.send({ id, usage }, 'retry');
      if (usage.status !== 'reserved') throw Error('This operation already finished. Use its retained output or review availability.');
      if (['quiz-batch', 'facts-batch'].includes(type)) {
        const job = { id, usage, key: crypto.randomBytes(32).toString('hex'), adminId, title: type === 'facts-batch' ? 'Approved fact video batch' : 'Approved quiz video batch', type, options, status: 'queued', stage: 'preparing', createdAt: new Date().toISOString() };
        quizBatches.initialize(job, document, jobOutput(job), type === 'facts-batch' ? configuration.factExportDir : require('./quiz-templates').shortTemplate(document.videos[0]) ? configuration.shortExportDir : configuration.exportDir);
        jobs.set(id, job); launch(job, document, options);
        return sendJson(res, 202, { data: summary(job) });
      }
      if (type === 'revision-batch') {
        const job = { id, usage, key: crypto.randomBytes(32).toString('hex'), adminId, revisionKey, title: document.subject.name, type, status: 'queued', stage: 'initializing', progress: null, error: null, createdAt: new Date().toISOString() };
        jobs.set(id, job); launch(job, document, options);
        return sendJson(res, 202, { data: summary(job) });
      }
      const slug = slugify(document.video.title);
      const job = { id, usage, key: crypto.randomBytes(32).toString('hex'), adminId, title: document.video.title, type, ...(type === 'quiz' ? { sourceIds: document.questions.map(question => question.id) } : {}), status: 'queued', stage: 'initializing', progress: null, error: null, createdAt: new Date().toISOString(), estimatedDuration: config?.estimatedDuration, width: config?.width, height: config?.height, videoFile: type === 'quiz' ? `${slug}.mp4` : 'video.mp4', thumbnailFile: document.render_options?.thumbnail ? `${type === 'quiz' ? slug : 'video'}-thumbnail.jpg` : type === 'quiz' ? `${slug}-thumbnail.png` : 'thumbnail.jpg', ...(document.render_options?.thumbnail ? { thumbnailStatus: 'waiting', thumbnailError: null } : {}), chaptersFile: type === 'quiz' ? `${slug}-chapters.txt` : null };
      jobs.set(id, job); launch(job, document, options);
      return sendJson(res, 202, { data: summary(job) });
      } finally { starting.delete(id); }
    } catch (error) {
      if (authorization?.usage?.status === 'reserved' && !jobs.has(authorization.usage.operation_id)) {
        try { await usageChannel.send({ id: authorization.usage.operation_id, usage: authorization.usage }, 'fail'); } catch { /* Bounded lease recovery covers an unreachable API. */ }
      }
      return sendJson(res, 422, { message: error.message });
    }
  }
  const match = /^\/jobs\/([a-f0-9-]{36})(?:\/(download|thumbnail|thumbnail-retry|chapters|metadata|cancel|retry|revision\/(?:pdf|catalogue|index|quiz-\d+|image-\d+-\d+)))?$/.exec(url.pathname);
  if (match) {
    const job = jobs.get(match[1]);
    if (!job) return sendJson(res, 404, { message: 'Job not found.' });
    const key = req.headers['x-maroquiz-job-key'] || url.searchParams.get('key') || '';
    if (typeof key !== 'string' || !/^[a-f0-9]{64}$/.test(key) || key.length !== job.key.length || !crypto.timingSafeEqual(Buffer.from(key), Buffer.from(job.key))) return sendJson(res, 403, { message: 'Job access key required.' });
    const action = match[2];
    if (req.method === 'POST' && action === 'thumbnail-retry') {
      if (job.type === 'revision-batch' || !['completed', 'failed'].includes(job.status) || busy() || reporting.has(job.id)) return sendJson(res, 409, { message: 'Finish active work before retrying the retained thumbnail.' });
      try {
        const document = JSON.parse(fs.readFileSync(path.join(jobOutput(job), 'input.json'), 'utf8'));
        if (!videoBatch(job) && (!document.render_options?.thumbnail || job.status !== 'completed')) return sendJson(res, 409, { message: 'A completed video and approved thumbnail specification are required.' });
        void thumbnailWork(job, document);
        return sendJson(res, 202, { data: summary(job) });
      } catch { return sendJson(res, 422, { message: 'The retained approved thumbnail input could not be read.' }); }
    }
    if (videoBatch(job) && req.method === 'POST' && action === 'retry') {
      if (reporting.has(job.id) || busy()) return sendJson(res, 409, { message: 'Wait for the current worker and usage reporting to finish before resuming.' });
      if (!['failed', 'cancelled'].includes(job.status)) return sendJson(res, 409, { message: 'Only interrupted batches can resume.' });
      starting.add(job.id);
      try {
        const options = String(req.headers['content-type'] || '').startsWith('application/json') ? await readJson(req) : {};
        if (options.prepare_only !== undefined && typeof options.prepare_only !== 'boolean') throw Error('prepare_only must be a boolean.');
        await quizBatches.recover(job, jobOutput(job), { usageChannel, outputReceipts, save, verifyVideo: configuration.verifyVideo });
        if (!options.prepare_only) launchBatch(job);
      } catch (error) { return sendJson(res, error.status || 422, { message: error.message }); }
      finally { starting.delete(job.id); }
      return sendJson(res, 202, { data: summary(job) });
    }
    if (job.type === 'revision-batch' && req.method === 'POST' && action === 'retry') {
      if (job.usage?.pending || reporting.has(job.id)) return sendJson(res, 409, { message: 'Reconnect usage reporting before retrying this job.' });
      if (children.size || starting.size || batchWorkers.size) return sendJson(res, 409, { message: 'The renderer is still stopping or processing another job. Wait a few seconds, then retry.' });
      if (!['failed', 'cancelled'].includes(job.status) || children.size || [...jobs.values()].some(other => !terminal(other))) return sendJson(res, 409, { message: 'Finish or cancel active work before retrying.' });
      starting.add(job.id);
      try { const input = JSON.parse(fs.readFileSync(path.join(jobOutput(job), 'input.json'), 'utf8')); validateRevisionJob(input); if (job.usage) { await usageChannel.send(job, 'retry'); job.usage.pending = null; job.usage.confirmed = false; save(job); } launch(job, input, {}); }
      catch (error) { return sendJson(res, 422, { message: error.message }); }
      finally { starting.delete(job.id); }
      return sendJson(res, 202, { data: summary(job) });
    }
    if (job.type === 'revision-batch' && req.method === 'GET' && action?.startsWith('revision/')) {
      if (job.usage && job.status !== 'completed') {
        try {
          const output = outputReceipts(job, jobOutput(job), false);
          if (job.status === 'running' && output.length) { await usageChannel.send(job, 'progress', output); save(job); }
          else if (!job.usage.confirmed) return sendJson(res, 503, { message: 'Usage reporting must reconnect before these outputs can be downloaded.' });
        } catch { return sendJson(res, 503, { message: 'This partial output cannot yet be safely released.' }); }
      }
      const artifact = revisionJobs.artifact(job.id, action.slice('revision/'.length));
      if (!artifact || !fs.existsSync(artifact.file)) return sendJson(res, 404, { message: 'This revision output is not ready.' });
      return serveRevisionFile(res, artifact.file, artifact.mime, url.searchParams.has('preview'));
    }
    if (req.method === 'POST' && action === 'cancel') {
      if (videoBatch(job) && job.status === 'failed' && (job.usage?.pending || reporting.has(job.id))) return sendJson(res, 409, { message: 'Wait for usage reporting to finish before stopping this batch.' });
      if (!terminal(job) || (videoBatch(job) && job.status === 'failed')) { job.status = 'cancelled'; job.stage = 'cancelled'; job.progress = null; job.message = 'Rendering cancelled.'; if (videoBatch(job)) for (const item of job.items) if (item.renderStatus === 'waiting') item.renderStatus = 'cancelled'; save(job); const child = children.get(job.id); if (child) killTree(child); else if (!batchWorkers.has(job.id)) { queueUsage(job); void flushUsage(job); } }
      return sendJson(res, 200, { data: summary(job) });
    }
    if (req.method === 'GET' && !action) return sendJson(res, 200, { data: summary(job) });
    if (req.method === 'GET' && action !== 'cancel') {
      if (['revision-batch', 'quiz-batch', 'facts-batch'].includes(job.type)) return sendJson(res, 404, { message: 'Use revision artifact downloads.' });
      if (job.status !== 'completed') return sendJson(res, 409, { message: 'Output is not ready.' });
      if (action === 'thumbnail' && job.thumbnailStatus && job.thumbnailStatus !== 'completed') return sendJson(res, 409, { message: 'The thumbnail is not ready. The completed video is preserved.' });
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
server.listen(PORT, '127.0.0.1', () => { PORT = server.address().port; restoreJobs(); for (const job of jobs.values()) void flushUsage(job); console.log(`MaroQuiz local runner: http://127.0.0.1:${PORT}\nTrusted API: ${API.href}\nPress Ctrl+C to stop.`); });
function shutdown() { clearInterval(usageTimer); for (const id of batchWorkers) { const job = jobs.get(id); job.status = 'cancelled'; job.error = 'Runner stopped; resume the retained batch.'; save(job); } for (const [id, child] of children) { const job = jobs.get(id); if (!terminal(job)) { job.status = 'failed'; job.error = 'Runner stopped during rendering.'; save(job); } killTree(child); } server.close(); }
if (configuration.handleSignals ?? (require.main === module)) {
  process.on('SIGINT', shutdown); process.on('SIGTERM', shutdown);
}
return { server, shutdown };
}
if (require.main === module) createRunner();
module.exports = { createRunner };
