const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const os = require('node:os');
const crypto = require('node:crypto');
const { spawnSync } = require('node:child_process');
const { initialize, runBatch, validateBatch } = require('./quiz-batch');
const { exportDirectory, exportVideo, verifyVideo, checksum } = require('./video-export');
const { languageOf } = require('./presentation');
const { outputReceipts } = require('./content-usage');
const { buildTimeline } = require('./render');
const doc = () => ({ type: 'quiz-batch', videos: [18, 19].map(n => ({ video: { id: n, number: n, title: `Video ${n}` }, subject: { slug: 'sante-ar' }, questions: [{ id: n, text: 'ما دور ECG بنسبة 98%؟', choices: ['A','B','C','D'].map(label => ({ label, text: 'اختيار' })), correct_answer: { label: 'C' } }] })) });
function fixture(t) {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-quiz-batch-'));
  t.after(() => fs.rmSync(root, { recursive: true, force: true }));
  const output = path.join(root, 'output'), dest = path.join(root, 'export with spaces');
  const job = { id: crypto.randomUUID(), status: 'queued' };
  initialize(job, doc(), output, dest);
  const sequence = [];
  const verify = file => { if (fs.readFileSync(file, 'utf8') !== 'valid mp4') throw Error('Invalid streams'); };
  const dependencies = { save() {}, verifyVideo: verify, recordProgress: async () => sequence.push('usage'), finished: async () => {},
    render: async (_job, item) => { sequence.push(`render-${item.sequence}`); if (item.sequence === 19) assert.equal(job.items[0].exportStatus, 'completed'); fs.mkdirSync(path.dirname(path.join(output, item.source)), { recursive: true }); fs.writeFileSync(path.join(output, item.source), 'valid mp4'); },
  };
  return { root, output, dest, job, dependencies, sequence, verify };
}
test('metadata wins over script detection; timelines preserve internal correct labels and Arabic text', () => {
  const document = doc().videos[0];
  assert.equal(languageOf(document), 'ar');
  assert.equal(languageOf({ ...document, language: 'fr' }), 'fr');
  assert.equal(languageOf({ ...document, video: { ...document.video, language: 'en' } }), 'en');
  const { segments } = buildTimeline(document);
  assert.ok(segments.every(s => s.scene.language === 'ar'));
  assert.equal(segments.find(s => s.scene.phase === 'reveal').scene.correctLabel, 'C');
  assert.equal(segments[0].scene.welcome, 'مرحباً');
  assert.equal(buildTimeline({ ...document, language: 'fr' }).segments[0].scene.welcome, 'welcome');
});
test('strict render → verify → usage → export order; restart skips valid completed sources', async t => {
  const f = fixture(t); await runBatch(f.job, f.output, f.dependencies);
  assert.equal(f.job.status, 'completed');
  assert.deepEqual(f.sequence, ['render-18', 'usage', 'render-19', 'usage']);
  assert.equal(outputReceipts({ ...f.job, type: 'quiz-batch' }, f.output)[0].source_ids.length, 2);
  const restored = JSON.parse(JSON.stringify(f.job));
  await runBatch(restored, f.output, { ...f.dependencies, render: async () => assert.fail('must not rerender') });
  assert.equal(restored.status, 'completed');
  assert.equal(fs.readdirSync(f.dest).length, 2);
});
test('render failure pauses; explicit resume retains completed files and retries only failed item', async t => {
  const f = fixture(t); const render = f.dependencies.render;
  f.dependencies.render = async (...args) => { if (args[1].sequence === 19) throw Error('FFmpeg failed'); return render(...args); };
  await runBatch(f.job, f.output, f.dependencies);
  assert.equal(f.job.status, 'failed'); assert.equal(f.job.items[0].exportStatus, 'completed');
  assert.match(f.job.items[1].error, /FFmpeg/);
  f.dependencies.render = render;
  await runBatch(f.job, f.output, f.dependencies);
  assert.equal(f.job.status, 'completed');
  assert.equal(f.sequence.filter(s => s === 'render-18').length, 1);
});
test('export collision preserves both source and unrelated destination; retry exports without rendering', async t => {
  const f = fixture(t); fs.writeFileSync(path.join(f.dest, f.job.items[0].filename), 'unrelated');
  await runBatch(f.job, f.output, f.dependencies);
  assert.equal(f.job.items[0].renderStatus, 'completed'); assert.equal(f.job.items[0].exportStatus, 'failed');
  assert.equal(fs.readFileSync(path.join(f.dest, f.job.items[0].filename), 'utf8'), 'unrelated');
  assert.ok(fs.existsSync(path.join(f.output, f.job.items[0].source)));
  // The test user resolves the collision explicitly; production never deletes user files.
  fs.unlinkSync(path.join(f.dest, f.job.items[0].filename));
  await runBatch(f.job, f.output, f.dependencies);
  assert.equal(f.job.status, 'completed'); assert.equal(f.sequence.filter(s => s === 'render-18').length, 1);
});
test('cancel stops later work; interrupted valid source reconciles without rerender; tampering blocks resume', async t => {
  const f = fixture(t);
  const first = f.job.items[0]; fs.mkdirSync(path.dirname(path.join(f.output, first.source)), { recursive: true }); fs.writeFileSync(path.join(f.output, first.source), 'valid mp4'); first.renderStatus = 'running';
  f.dependencies.recordProgress = async () => { f.job.status = 'cancelled'; };
  await runBatch(f.job, f.output, f.dependencies);
  assert.equal(f.job.status, 'cancelled'); assert.deepEqual(f.sequence, []);
  assert.equal(f.job.items[1].renderStatus, 'cancelled');
  fs.writeFileSync(path.join(f.output, first.source), 'tampered');
  await runBatch(f.job, f.output, f.dependencies);
  assert.equal(f.job.status, 'failed'); assert.match(f.job.error, /previously verified/);
});
test('destination validation rejects traversal and symlinks; duplicate proposals rejected', t => {
  const f = fixture(t);
  assert.throws(() => exportDirectory('../unsafe'), /absolute/);
  assert.throws(() => exportDirectory('/'), /dedicated/);
  fs.symlinkSync(f.dest, path.join(f.root, 'linked'));
  assert.throws(() => exportDirectory(path.join(f.root, 'linked')), /symbolic/);
  const duplicate = doc(); duplicate.videos[1] = duplicate.videos[0]; assert.throws(() => validateBatch(duplicate), /duplicate/);
  const repeated = doc(); repeated.videos[1].questions = repeated.videos[0].questions; assert.throws(() => validateBatch(repeated), /repeated/);
});
test('missing configured export directory or stopped worker cannot run a second render', async t => {
  const f = fixture(t);
  f.job.exportDir = '../invalid';
  await runBatch(f.job, f.output, f.dependencies);
  assert.equal(f.job.status, 'failed'); assert.deepEqual(f.sequence, []);
  f.job.exportDir = f.dest; f.job.workerPid = process.pid;
  await runBatch(f.job, f.output, f.dependencies);
  assert.match(f.job.error, /still alive/); assert.deepEqual(f.sequence, []);
});
test('real short MP4 passes video/audio FFprobe and checksum export; corrupt or silent media fails', async t => {
  const f = fixture(t), sample = path.join(f.root, 'sample.mp4');
  const ffmpeg = spawnSync('ffmpeg', ['-hide_banner', '-loglevel', 'error', '-f', 'lavfi', '-i', 'color=c=orange:s=160x90:r=10', '-f', 'lavfi', '-i', 'sine=frequency=440', '-t', '0.3', '-c:v', 'libx264', '-pix_fmt', 'yuv420p', '-c:a', 'aac', '-movflags', '+faststart', sample], { encoding: 'utf8' });
  assert.equal(ffmpeg.status, 0, ffmpeg.stderr); assert.ok(verifyVideo(sample));
  const exported = await exportVideo(sample, f.dest, 'tiny-video-018-ar.mp4');
  assert.equal(exported.sha256, await checksum(sample)); assert.equal(await checksum(exported.path), exported.sha256);
  await exportVideo(sample, f.dest, 'tiny-video-018-ar.mp4');
  assert.equal(fs.readdirSync(f.dest).length, 1);
  const silent = path.join(f.root, 'silent.mp4');
  const silentRender = spawnSync('ffmpeg', ['-hide_banner', '-loglevel', 'error', '-f', 'lavfi', '-i', 'color=c=orange:s=160x90:r=10', '-t', '0.1', '-c:v', 'libx264', silent], { encoding: 'utf8' });
  assert.equal(silentRender.status, 0, silentRender.stderr);
  assert.throws(() => verifyVideo(silent), /video and audio/);
  assert.ok(verifyVideo(silent, false)); // Facts with both audio categories disabled remain valid.
  fs.writeFileSync(sample, 'broken'); assert.throws(() => verifyVideo(sample), /FFprobe/);
});

for (const type of ['quiz-batch', 'facts-batch']) test(`${type}: HTTP persistence, duplicate protection, cancel and restart`, async t => {
  const document = doc();
  if (type === 'facts-batch') {
    document.type = type; document.videos = document.videos.map(video => ({ type: 'facts-long', language: 'ar', video: video.video, major: { id: 1, name: 'Science' }, facts: [{ id: video.video.id, subject_id: 2, subject_name: 'Physics', text: `حقيقة ${video.video.id}`, detail: '', source_url: null }], render_options: { quality: 'draft', orientation: 'vertical', music: true, sfx: true, musicVolume: .6 } }));
  }
  const { EventEmitter, once } = require('node:events');
  const { PassThrough } = require('node:stream');
  const { createRunner } = require('./local-runner');
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-queue-http-'));
  const operation = crypto.randomUUID(); let status = 'reserved', attempt = 1, workers = 0, hold = true;
  const credentials = () => ({ operation_id: operation, token: 'a'.repeat(64), attempt, lease_seconds: 900, status });
  const config = { port: 0, handleSignals: false, outputDir: path.join(root, 'output'), jobDir: path.join(root, 'jobs'), exportDir: path.join(root, 'export'), factExportDir: path.join(root, 'Facts'),
    verifyVideo: file => { assert.equal(fs.readFileSync(file, 'utf8'), 'valid mp4'); },
    transport: async (url, options) => {
      const body = JSON.parse(options.body);
      if (url.pathname.endsWith('/authorize')) return { ok: true, json: async () => ({ data: { admin_id: 1, usage: credentials() } }) };
      if (body.event === 'retry') { attempt++; status = 'reserved'; }
      if (body.event === 'cancel') status = 'released';
      if (body.event === 'fail') status = 'failed';
      if (body.event === 'complete') status = 'used';
      if (body.event === 'progress') { assert.equal(body.output[0].kind, 'video'); assert.ok(!body.output[0].name.includes('/')); }
      return { ok: true, json: async () => ({ data: credentials() }) };
    },
    spawnWorker: (_exe, args, options) => {
      assert.equal(options.shell, false); workers++;
      const child = new EventEmitter(); child.stdout = new PassThrough(); child.stderr = new PassThrough();
      const input = JSON.parse(fs.readFileSync(args[1], 'utf8'));
      const dir = type === 'facts-batch' ? args[2] : args[args.indexOf('--output-dir') + 1];
      setImmediate(() => {
        if (hold && input.video.number === 19) return;
        fs.writeFileSync(path.join(dir, type === 'facts-batch' ? 'video.mp4' : `video-${input.video.number}.mp4`), 'valid mp4'); child.emit('close', 0);
      });
      return child;
    },
    killWorker: child => setImmediate(() => child.emit('close', 1)),
  };
  let runtime = createRunner(config), base;
  async function listen() { if (!runtime.server.listening) await once(runtime.server, 'listening'); base = `http://127.0.0.1:${runtime.server.address().port}`; }
  async function close() { runtime.shutdown(); await new Promise(resolve => runtime.server.close(resolve)); }
  t.after(async () => { await close(); fs.rmSync(root, { recursive: true, force: true }); });
  await listen();
  const start = () => fetch(base + '/jobs', { method: 'POST', headers: { 'Content-Type': 'application/json', 'X-Maroquiz-Render-Ticket': 'a'.repeat(64) }, body: JSON.stringify(document) });
  const first = await (await start()).json(); assert.equal(first.data.type, type);
  const headers = { 'X-Maroquiz-Job-Key': first.data.accessKey };
  const get = async () => (await (await fetch(`${base}/jobs/${operation}`, { headers })).json()).data;
  async function until(predicate) { for (let n = 0; n < 200; n++) { const job = await get(); if (predicate(job)) return job; await new Promise(resolve => setTimeout(resolve, 10)); } assert.fail('queue did not reach expected state'); }
  const repeated = await (await start()).json(); assert.equal(repeated.data.id, operation);
  await until(job => job.batch.items[0].exportStatus === 'completed' && workers === 2);
  assert.throws(() => createRunner(config), /Another local batch runner/);
  assert.equal(workers, 2); // Only the two sequential workers, despite a repeated start.
  assert.equal((await fetch(`${base}/jobs/${operation}`)).status, 403);
  await fetch(`${base}/jobs/${operation}/cancel`, { method: 'POST', headers });
  await until(job => job.status === 'cancelled');
  for (let n = 0; n < 100 && status !== 'released'; n++) await new Promise(resolve => setTimeout(resolve, 10));
  assert.equal(status, 'released');
  await close();
  hold = false; runtime = createRunner(config); await listen();
  const restored = await get(); assert.equal(restored.batch.items[0].exportStatus, 'completed');
  const retry = await fetch(`${base}/jobs/${operation}/retry`, { method: 'POST', headers }); assert.equal(retry.status, 202, await retry.text());
  const completed = await until(job => job.status === 'completed');
  assert.equal(completed.batch.exported, 2); assert.equal(workers, 3);
  assert.equal(fs.readdirSync(type === 'facts-batch' ? config.factExportDir : config.exportDir).length, 2);
});

test('restart verifies retained pending-completion exports before reporting success', async t => {
  const { once } = require('node:events');
  const { createRunner } = require('./local-runner');
  const f = fixture(t); await runBatch(f.job, f.output, f.dependencies);
  const outputBase = path.join(f.root, 'retained-output'); fs.mkdirSync(outputBase);
  const retained = path.join(outputBase, f.job.id); fs.renameSync(f.output, retained); f.output = retained;
  const reports = [];
  const key = 'b'.repeat(64);
  f.job.type = 'quiz-batch'; f.job.key = key; f.job.adminId = 1; f.job.status = 'running';
  f.job.usage = { operation_id: f.job.id, token: 'a'.repeat(64), attempt: 1, lease_seconds: 900, status: 'reserved', deadline: Date.now() + 900000,
    pending: { event: 'complete', output: outputReceipts(f.job, f.output) } };
  const jobDir = path.join(f.root, 'jobs'); fs.mkdirSync(jobDir);
  fs.writeFileSync(path.join(jobDir, f.job.id + '.state.json'), JSON.stringify(f.job));
  fs.writeFileSync(f.job.items[0].exportPath, 'tampered exported file');
  const runtime = createRunner({ port: 0, jobDir, outputDir: outputBase, verifyVideo: f.verify, handleSignals: false,
    transport: async (_url, options) => { const body = JSON.parse(options.body); reports.push(body.event); return { ok: true, json: async () => ({ data: { ...f.job.usage, status: 'failed' } }) }; },
  });
  t.after(() => runtime.shutdown());
  if (!runtime.server.listening) await once(runtime.server, 'listening');
  const result = await fetch(`http://127.0.0.1:${runtime.server.address().port}/jobs/${f.job.id}`, { headers: { 'X-Maroquiz-Job-Key': key } });
  const job = (await result.json()).data;
  assert.equal(job.status, 'failed'); assert.match(job.error, /Retained batch verification failed/);
  assert.ok(!reports.includes('complete'));
});
