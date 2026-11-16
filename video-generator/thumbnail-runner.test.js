const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const crypto = require('node:crypto');
const { EventEmitter, once } = require('node:events');
const { PassThrough } = require('node:stream');
const { createRunner } = require('./local-runner');
const { initialize, runBatch, retryThumbnails } = require('./quiz-batch');
const { checksum, exportThumbnail } = require('./video-export');
const approved = () => ({ ...structuredClone(require('./five-seconds/sample.json')), video: { id: 1, number: 11, display_number: 5, title: 'Approved video', language: 'fr' }, render_options: { thumbnail: { version: 1, hook: 'Approved hook', locale: 'fr' } } });
const sleep = () => new Promise(resolve => setTimeout(resolve, 10));
async function waitFor(callback) { for (let n = 0; n < 400; n++) { const result = await callback(); if (result) return result; await sleep(); } throw Error('Thumbnail lifecycle assertion timed out.'); }
function tools() {
  const calls = []; let fail = false;
  const api = {
    calls, fail: value => { fail = value; },
    suggest: doc => ({ spec: doc.render_options.thumbnail, suggestions: [{ hook: 'Approved hook', supporting: '' }] }),
    renderThumbnail: async (document, options) => {
      calls.push(structuredClone(document)); if (fail) throw Error('Controlled thumbnail failure');
      const file = path.join(options.outputDir, `${options.outputBase}-thumbnail.jpg`);
      fs.mkdirSync(options.outputDir, { recursive: true });
      const bytes = `mock JPEG ${document.render_options.thumbnail.hook}`;
      if (!fs.existsSync(file)) fs.writeFileSync(file, bytes, { flag: 'wx' }); else assert.equal(fs.readFileSync(file, 'utf8'), bytes);
      return { path: file, width: 1280, height: 720, bytes: Buffer.byteLength(bytes), sha256: await checksum(file) };
    },
    verifyThumbnail: file => { assert.match(fs.readFileSync(file, 'utf8'), /^mock JPEG /); },
  };
  return api;
}
async function fixture(t) {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-thumbnail-runner-')), operation = crypto.randomUUID(), thumbs = tools();
  const reports = [], authorizations = []; let workers = 0, state = 'reserved';
  const usage = () => ({ operation_id: operation, token: 'a'.repeat(64), attempt: 1, lease_seconds: 900, status: state });
  const runtime = createRunner({ port: 0, handleSignals: false, outputDir: path.join(root, 'output'), jobDir: path.join(root, 'jobs'), thumbnails: thumbs,
    verifyVideo: file => assert.equal(fs.readFileSync(file, 'utf8'), 'verified MP4'),
    transport: async (url, request) => {
      const body = JSON.parse(request.body);
      if (url.pathname.endsWith('/authorize')) {
        authorizations.push(body.purpose);
        return { ok: true, json: async () => ({ data: body.purpose === 'thumbnail' ? { admin_id: 1 } : { admin_id: 1, usage: usage() } }) };
      }
      reports.push(body); if (body.event === 'complete') state = 'used';
      return { ok: true, json: async () => ({ data: usage() }) };
    },
    spawnWorker: (_exe, args) => {
      assert.ok(args.includes('--skip-thumbnail'), 'the coordinator must confirm video usage before starting its thumbnail');
      workers++; const child = new EventEmitter(); child.stdout = new PassThrough(); child.stderr = new PassThrough();
      setImmediate(() => {
        const document = JSON.parse(fs.readFileSync(args[1], 'utf8')), facts = document.type?.startsWith('facts-');
        const output = facts ? args[2] : args[args.indexOf('--output-dir') + 1];
        fs.writeFileSync(path.join(output, facts ? 'video.mp4' : 'approved-video.mp4'), 'verified MP4');
        if (facts) fs.writeFileSync(path.join(output, 'metadata.json'), JSON.stringify({ actualDuration: 10, width: 1080, height: 1920 }));
        child.emit('close', 0);
      });
      return child;
    },
  });
  if (!runtime.server.listening) await once(runtime.server, 'listening');
  t.after(async () => { runtime.shutdown(); await new Promise(resolve => runtime.server.close(resolve)); fs.rmSync(root, { recursive: true, force: true }); });
  const base = `http://127.0.0.1:${runtime.server.address().port}`;
  const post = (route, document, key) => fetch(base + route, { method: 'POST', headers: { 'Content-Type': 'application/json', ...(key ? { 'X-Maroquiz-Job-Key': key } : { 'X-Maroquiz-Render-Ticket': 'b'.repeat(64) }) }, body: JSON.stringify(document || {}) });
  const get = async key => (await (await fetch(`${base}/jobs/${operation}`, { headers: { 'X-Maroquiz-Job-Key': key } })).json()).data;
  return { root, operation, thumbs, reports, authorizations, post, get, get workers() { return workers; } };
}

test('thumbnail options and previews use only read-only tickets and never allocate jobs, usage or numbers', async t => {
  const f = await fixture(t), document = approved();
  const options = await f.post('/thumbnails/options', document); assert.equal(options.status, 200);
  assert.equal((await options.json()).data.spec.hook, 'Approved hook');
  const preview = await f.post('/thumbnails/preview', document); assert.equal(preview.status, 200);
  assert.equal(preview.headers.get('content-type'), 'image/jpeg'); assert.match(await preview.text(), /^mock JPEG /);
  await waitFor(() => fs.readdirSync(path.join(f.root, 'output', '.thumbnail-previews')).length === 0);
  f.thumbs.fail(true); assert.equal((await f.post('/thumbnails/preview', document)).status, 422);
  assert.equal(fs.readdirSync(path.join(f.root, 'output', '.thumbnail-previews')).length, 0);
  assert.deepEqual(f.authorizations, ['thumbnail', 'thumbnail', 'thumbnail']); assert.deepEqual(f.reports, []); assert.equal(f.workers, 0);
  assert.equal(fs.readdirSync(path.join(f.root, 'jobs')).length, 0); assert.equal(document.video.display_number, 5);
});

for (const type of ['facts-short', 'facts-long']) test(`${type}: failed thumbnail retries preserve normalized facts, palette and finished video`, async t => {
  const f = await fixture(t), document = { type, language: 'fr', video: { title: 'Fact review' }, major: { id: 1, name: 'Physics', slug: 'physics' },
    facts: [{ id: 81, text: 'La lumière se propage dans le vide.', detail: '', source_url: null }],
    render_options: { quality: 'draft', orientation: type === 'facts-short' ? 'vertical' : 'horizontal', music: false, sfx: false, musicVolume: 0 } };
  document.render_options.thumbnail = require('./thumbnails').suggest(document).spec;
  f.thumbs.fail(true);
  const response = await f.post('/jobs', document); assert.equal(response.status, 202, await response.clone().text());
  const { data } = await response.json();
  await waitFor(async () => { const job = await f.get(data.accessKey); return job.status === 'completed' && job.thumbnailStatus === 'failed' && !job.thumbnailRunning; });
  const mp4 = path.join(f.root, 'output', f.operation, 'video.mp4'), before = fs.statSync(mp4), reports = f.reports.length;
  f.thumbs.fail(false);
  assert.equal((await f.post(`/jobs/${f.operation}/thumbnail-retry`, {}, data.accessKey)).status, 202);
  await waitFor(async () => { const job = await f.get(data.accessKey); return job.thumbnailStatus === 'completed' && !job.thumbnailRunning; });
  assert.equal(f.workers, 1); assert.equal(f.reports.length, reports);
  assert.equal(fs.statSync(mp4).ino, before.ino); assert.equal(fs.statSync(mp4).mtimeMs, before.mtimeMs);
  assert.equal(f.thumbs.calls.at(-1).major.slug, 'physics');
  assert.deepEqual(f.thumbs.calls.at(-1).render_options.thumbnail, document.render_options.thumbnail);
});

test('restart marks only interrupted batch thumbnail work failed and preserves completed video state', async t => {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-thumbnail-restart-')), id = crypto.randomUUID(), key = 'b'.repeat(64);
  const jobs = path.join(root, 'jobs'); fs.mkdirSync(jobs);
  fs.writeFileSync(path.join(jobs, `${id}.state.json`), JSON.stringify({ id, key, type: 'quiz-batch', status: 'completed', thumbnailRunning: true,
    items: [{ videoId: 19, renderStatus: 'completed', exportStatus: 'completed', thumbnailStatus: 'running', thumbnailExportStatus: 'waiting' }] }));
  const runtime = createRunner({ port: 0, handleSignals: false, outputDir: path.join(root, 'output'), jobDir: jobs });
  t.after(async () => { runtime.shutdown(); await new Promise(resolve => runtime.server.close(resolve)); fs.rmSync(root, { recursive: true, force: true }); });
  if (!runtime.server.listening) await once(runtime.server, 'listening');
  const job = (await (await fetch(`http://127.0.0.1:${runtime.server.address().port}/jobs/${id}`, { headers: { 'X-Maroquiz-Job-Key': key } })).json()).data;
  assert.equal(job.status, 'completed'); assert.equal(job.thumbnailRunning, false); assert.equal(job.batch.thumbnails.failed, 1);
  assert.equal(job.batch.items[0].renderStatus, 'completed'); assert.equal(job.batch.items[0].exportStatus, 'completed');
});

test('thumbnail failure preserves completed MP4 and usage; retry reads the frozen approved spec without rendering video', async t => {
  const f = await fixture(t); f.thumbs.fail(true);
  const document = approved(), started = await f.post('/jobs', document); assert.equal(started.status, 202);
  const { data } = await started.json();
  await waitFor(async () => { const current = await f.get(data.accessKey); return current.status === 'completed' && current.thumbnailStatus === 'failed' && !current.thumbnailRunning; });
  const mp4 = path.join(f.root, 'output', f.operation, 'approved-video.mp4'), before = fs.statSync(mp4);
  const count = f.reports.length; document.render_options.thumbnail.hook = 'Changed after approval';
  f.thumbs.fail(false);
  const retried = await f.post(`/jobs/${f.operation}/thumbnail-retry`, {}, data.accessKey); assert.equal(retried.status, 202);
  const completed = await waitFor(async () => { const current = await f.get(data.accessKey); return current.thumbnailStatus === 'completed' && !current.thumbnailRunning && current; });
  assert.equal(completed.status, 'completed'); assert.ok(completed.videoUrl); assert.ok(completed.thumbnailUrl);
  assert.equal(f.thumbs.calls.at(-1).render_options.thumbnail.hook, 'Approved hook');
  assert.equal(f.workers, 1); assert.equal(f.reports.length, count);
  assert.equal(fs.statSync(mp4).ino, before.ino); assert.equal(fs.statSync(mp4).mtimeMs, before.mtimeMs);
  assert.equal(fs.readFileSync(mp4, 'utf8'), 'verified MP4');
  assert.equal((await f.post(`/jobs/${f.operation}/thumbnail-retry`, {}, 'wrong-key')).status, 403);
});

test('sequential batches export matching JPEG sidecars and retry only missing thumbnails without usage or video work', async t => {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-thumbnail-batch-')); t.after(() => fs.rmSync(root, { recursive: true, force: true }));
  const job = { id: crypto.randomUUID(), type: 'quiz-batch', status: 'queued' }, output = path.join(root, 'output'), thumbs = tools();
  const videos = [1, 2].map(id => { const document = approved(); document.video.id = id; document.video.number = id; document.video.title = `Video ${id}`; document.questions[0].id = id; return document; });
  initialize(job, { type: 'quiz-batch', videos }, output, path.join(root, 'export'));
  let renders = 0, reports = 0; thumbs.fail(true);
  const dependencies = { save() {}, thumbnails: thumbs, verifyVideo: file => assert.equal(fs.readFileSync(file, 'utf8'), 'verified MP4'),
    render: async (_job, item) => { renders++; const file = path.join(output, item.source); fs.mkdirSync(path.dirname(file), { recursive: true }); fs.writeFileSync(file, 'verified MP4'); },
    recordProgress: async () => { reports++; }, finished: async () => {},
  };
  await runBatch(job, output, dependencies);
  assert.equal(job.status, 'completed'); assert.equal(renders, 2); assert.equal(reports, 2);
  assert.ok(job.items.every(item => item.renderStatus === 'completed' && item.exportStatus === 'completed' && item.thumbnailStatus === 'failed'));
  const videoHashes = await Promise.all(job.items.map(item => checksum(path.join(job.exportDir, item.filename))));
  thumbs.fail(false); await retryThumbnails(job, output, dependencies);
  assert.ok(job.items.every(item => item.thumbnailStatus === 'completed' && item.thumbnailExportStatus === 'completed'));
  for (const item of job.items) { assert.equal(item.thumbnailFilename, `${path.basename(item.filename, '.mp4')}-thumbnail.jpg`); assert.ok(fs.existsSync(path.join(job.exportDir, item.thumbnailFilename))); }
  const thumbnailRenders = thumbs.calls.length;
  await retryThumbnails(job, output, dependencies); assert.equal(thumbs.calls.length, thumbnailRenders);
  assert.equal(renders, 2); assert.equal(reports, 2);
  assert.deepEqual(await Promise.all(job.items.map(item => checksum(path.join(job.exportDir, item.filename)))), videoHashes);
});

test('thumbnail export is atomic, checksum verified, idempotent and never overwrites collisions', async t => {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-thumbnail-export-')); t.after(() => fs.rmSync(root, { recursive: true, force: true }));
  const source = path.join(root, 'thumbnail.jpg'), destination = path.join(root, 'exports'); fs.writeFileSync(source, 'mock JPEG original');
  const verify = file => assert.match(fs.readFileSync(file, 'utf8'), /^mock JPEG /), hash = await checksum(source);
  const result = await exportThumbnail(source, destination, 'video-thumbnail.jpg', hash, () => true, verify);
  const before = fs.statSync(result.path); await exportThumbnail(source, destination, 'video-thumbnail.jpg', hash, () => true, verify);
  assert.equal(fs.statSync(result.path).ino, before.ino);
  fs.writeFileSync(source, 'mock JPEG different');
  await assert.rejects(exportThumbnail(source, destination, 'video-thumbnail.jpg', await checksum(source), () => true, verify), /collision/);
  assert.equal(fs.readFileSync(result.path, 'utf8'), 'mock JPEG original');
  await assert.rejects(exportThumbnail(source, destination, '../escape.jpg', null, () => true, verify), /Unsafe/);
});
