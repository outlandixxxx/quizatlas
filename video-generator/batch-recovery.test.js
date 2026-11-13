const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const os = require('node:os');
const crypto = require('node:crypto');
const { EventEmitter, once } = require('node:events');
const { PassThrough } = require('node:stream');
const { initialize } = require('./quiz-batch');
const { createRunner } = require('./local-runner');
const digest = data => crypto.createHash('sha256').update(data).digest('hex');
const pause = () => new Promise(resolve => setTimeout(resolve, 10));

function fixture(t, type) {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-recovery-'));
  const id = crypto.randomUUID(), key = 'b'.repeat(64);
  const outputDir = path.join(root, 'output'), jobDir = path.join(root, 'jobs');
  const output = path.join(outputDir, id); fs.mkdirSync(jobDir);
  const videos = Array.from({ length: 10 }, (_, index) => {
    const number = 24 + index;
    const base = { video: { id: number, number, title: `Video ${number}` }, language: 'ar' };
    const sources = Array.from({ length: 20 }, (_, n) => number * 20 + n);
    return type === 'quiz-batch' ? { ...base, subject: { id: 279, slug: 'sciences-education' }, questions: sources.map(id => ({ id, text: `سؤال ${id}`, choices: ['A','B','C','D'].map(label => ({ label, text: 'جواب' })), correct_answer: { label: 'C' } })) }
      : { ...base, type: 'facts-long', major: { id: 1, name: 'Science' }, facts: sources.map(id => ({ id, subject_id: 2, subject_name: 'Physics', text: `حقيقة ${id}`, detail: '', source_url: null })), render_options: { quality: 'draft', orientation: 'vertical', music: true, sfx: true, musicVolume: .6 } };
  });
  const job = { id, key, type, status: 'running', stage: 'encoding', workerPid: null, adminId: 1,
    usage: { operation_id: id, attempt: 1, token: 'a'.repeat(64), status: 'reserved', lease_seconds: 900, deadline: Date.now() - 1000 } };
  initialize(job, { type, videos }, output, path.join(root, 'export'));
  const assets = new Map();
  for (const item of job.items.slice(0, 8)) {
    const file = path.join(output, item.source); fs.mkdirSync(path.dirname(file), { recursive: true });
    const bytes = `valid video ${item.sequence}`;
    fs.writeFileSync(file, bytes); fs.writeFileSync(path.join(job.exportDir, item.filename), bytes);
    item.renderStatus = item.exportStatus = 'completed'; item.sha256 = digest(bytes);
    item.exportPath = path.join(job.exportDir, item.filename);
    for (const extra of ['thumbnail.png', 'metadata.json']) fs.writeFileSync(path.join(output, item.folder, extra), `retained ${extra}`);
    for (const asset of [file, item.exportPath, path.join(output, item.folder, 'thumbnail.png'), path.join(output, item.folder, 'metadata.json')]) {
      const stat = fs.statSync(asset); assets.set(asset, { hash: digest(fs.readFileSync(asset)), mtime: stat.mtimeMs, ino: stat.ino });
    }
  }
  job.items[8].renderStatus = 'running'; job.items[9].renderStatus = 'cancelled';
  const stateFile = path.join(jobDir, `${id}.state.json`); fs.writeFileSync(stateFile, JSON.stringify(job));
  let remoteStatus = 'failed', attempt = 1, failure = null, interrupt = true;
  const rendered = [], reports = [], used = new Set(job.items.slice(0, 8).flatMap(item => item.sourceIds));
  const credentials = () => ({ operation_id: id, attempt, token: 'a'.repeat(64), status: remoteStatus, lease_seconds: 900 });
  const config = { port: 0, handleSignals: false, outputDir, jobDir,
    verifyVideo: file => assert.match(fs.readFileSync(file, 'utf8'), /^valid video/),
    transport: async (_url, options) => {
      const body = JSON.parse(options.body); reports.push(body);
      const rejected = message => ({ ok: false, status: 409, json: async () => ({ message }) });
      if (failure) return rejected(failure);
      if (body.attempt !== attempt) return rejected('Stale generation capability.');
      if (body.event === 'retry') { attempt++; remoteStatus = 'reserved'; }
      else if (remoteStatus !== 'reserved') return rejected('This reservation was released.');
      if (body.event === 'progress' || body.event === 'complete') for (const receipt of body.output) receipt.source_ids.forEach(id => used.add(id));
      if (body.event === 'fail') remoteStatus = 'failed';
      if (body.event === 'complete') { assert.equal(used.size, 200); remoteStatus = 'used'; }
      return { ok: true, json: async () => ({ data: credentials() }) };
    },
    spawnWorker: (_exe, args, options) => {
      assert.equal(options.shell, false);
      const document = JSON.parse(fs.readFileSync(args[1], 'utf8'));
      const sequence = document.video.number;
      assert.ok(sequence === 32 || sequence === 33, 'completed videos must never spawn a worker');
      if (sequence === 33) assert.equal(rendered.at(-1), 32);
      const folder = type === 'facts-batch' ? args[2] : args[args.indexOf('--output-dir') + 1];
      const child = new EventEmitter(); child.stdout = new PassThrough(); child.stderr = new PassThrough();
      setImmediate(() => {
        child.stdout.write('Encoding with FFmpeg\n');
        if (interrupt) { interrupt = false; child.emit('close', null, 'SIGKILL'); return; }
        rendered.push(sequence);
        fs.writeFileSync(path.join(folder, type === 'facts-batch' ? 'video.mp4' : `video-${sequence}.mp4`), `valid video ${sequence}`);
        child.emit('close', 0, null);
      });
      return child;
    },
  };
  let runtime, base;
  const headers = { 'X-Maroquiz-Job-Key': key, 'Content-Type': 'application/json' };
  async function open() { runtime = createRunner(config); if (!runtime.server.listening) await once(runtime.server, 'listening'); base = `http://127.0.0.1:${runtime.server.address().port}`; }
  async function close() { if (runtime) { runtime.shutdown(); await new Promise(resolve => runtime.server.close(resolve)); runtime = null; } }
  const get = async () => (await (await fetch(`${base}/jobs/${id}`, { headers })).json()).data;
  const retry = (prepare = false) => fetch(`${base}/jobs/${id}/retry`, { method: 'POST', headers, body: JSON.stringify({ prepare_only: prepare }) });
  async function until(predicate) { for (let n = 0; n < 300; n++) { const value = await get(); if (predicate(value)) return value; await pause(); } assert.fail('Recovery did not reach the expected state.'); }
  async function settled() { for (let n = 0; n < 300; n++) { if (!fs.existsSync(path.join(jobDir, 'quiz-batch.lock'))) return; await pause(); } assert.fail('Worker lock retained'); }
  function preserved() { for (const [file, expected] of assets) { const stat = fs.statSync(file); assert.equal(digest(fs.readFileSync(file)), expected.hash); assert.equal(stat.mtimeMs, expected.mtime); assert.equal(stat.ino, expected.ino); } }
  t.after(async () => { await close(); fs.rmSync(root, { recursive: true, force: true }); });
  return { open, close, get, retry, until, settled, preserved, reports, rendered, stateFile, failure: message => { failure = message; } };
}

for (const type of ['quiz-batch', 'facts-batch']) test(`${type}: shutdown at 8/10, stale reservation, preparation, SIGKILL and restart resume only remaining videos`, async t => {
  const f = fixture(t, type); await f.open();
  const restored = await f.until(job => job.status === 'failed');
  assert.equal(restored.batch.exported, 8); assert.equal(restored.batch.interrupted, 1); assert.equal(restored.batch.cancelled, 1);
  await pause(); // Let the rejected old failure report settle before the explicit recovery.
  const prepare = await f.retry(true); assert.equal(prepare.status, 202, await prepare.text());
  const prepared = await f.get(); assert.equal(prepared.stage, 'paused'); assert.equal(prepared.batch.waiting, 2);
  assert.equal(f.rendered.length, 0); f.preserved();
  assert.ok(f.reports.some(report => report.event === 'retry' && report.attempt === 1));
  assert.ok(f.reports.some(report => report.event === 'progress' && report.attempt === 2 && report.output[0].source_ids.length === 160));
  const response = await f.retry(); assert.equal(response.status, 202, await response.text());
  const interrupted = await f.until(job => job.status === 'failed' && /SIGKILL/.test(job.error || ''));
  assert.equal(interrupted.batch.exported, 8); await f.settled();
  await f.close(); await f.open(); await pause();
  const resumed = await f.retry(); assert.equal(resumed.status, 202, await resumed.text());
  const completed = await f.until(job => job.status === 'completed'); await f.settled();
  assert.deepEqual(f.rendered, [32, 33]); assert.equal(completed.batch.exported, 10); assert.equal(completed.batch.failed, 0);
  assert.equal(completed.batch.waiting, 0); assert.equal(completed.batch.cancelled, 0); f.preserved();
});

test('retired operation is rejected with its actual reason and cannot launch a worker', async t => {
  const f = fixture(t, 'quiz-batch'); f.failure('This historical quiz-video operation was reset. Prepare a new batch.');
  await f.open(); await pause();
  const response = await f.retry(); assert.equal(response.status, 409);
  assert.match((await response.json()).message, /historical quiz-video operation was reset/);
  assert.deepEqual(f.rendered, []); f.preserved();
});
