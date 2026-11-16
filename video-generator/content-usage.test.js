const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const crypto = require('node:crypto');
const { EventEmitter, once } = require('node:events');
const { PassThrough } = require('node:stream');
const { UsageChannel, outputReceipts, fileReceipt } = require('./content-usage');
const { createRunner } = require('./local-runner');
const id = () => crypto.randomUUID();
const cred = operation_id => ({ operation_id, token: 'a'.repeat(64), attempt: 1, lease_seconds: 900, status: 'reserved', roots: [operation_id] });
const hash = buffer => crypto.createHash('sha256').update(buffer).digest('hex');
const temporary = () => fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-usage-node-'));

test('report capabilities bind operation, attempt and output; HTTP failures remain retryable', async () => {
  const job = { id: id() }; job.usage = cred(job.id);
  const calls = [];
  const channel = new UsageChannel(new URL('http://127.0.0.1:8000/api/v1/'), async (url, options) => {
    calls.push({ url: String(url), options });
    return { ok: true, json: async () => ({ data: { ...cred(job.id), status: 'used' } }) };
  });
  await channel.send(job, 'complete', [{ kind: 'video', name: 'video.mp4', sha256: 'b'.repeat(64), bytes: 100 }]);
  assert.equal(calls[0].url, 'http://127.0.0.1:8000/api/v1/local-render/usage');
  assert.equal(calls[0].options.headers.Authorization, undefined);
  assert.equal(JSON.parse(calls[0].options.body).operation_id, job.id);
  assert.equal(job.usage.status, 'used');
  const offline = new UsageChannel(new URL('http://127.0.0.1:8000/'), async () => { throw Error('offline'); });
  await assert.rejects(offline.send(job, 'complete'), error => error.permanent === false);
  assert.equal(job.usage.token, 'a'.repeat(64));
});

test('revision receipts map actual successful pages and PDFs without double-counting source IDs', () => {
  const root = temporary();
  try {
    const png = Buffer.from('verified fixture image');
    fs.mkdirSync(path.join(root, 'quiz')); fs.writeFileSync(path.join(root, 'quiz/001.png'), png);
    fs.writeFileSync(path.join(root, 'input.json'), JSON.stringify({ quizzes: [{ source: { quiz: { id: 10 }, notes: [{ question_id: 11 }, { question_id: 12 }] } }] }));
    const manifest = { status: 'failed', quizzes: [{ quizId: 10, folder: 'quiz', pages: [[{ sourceQuestionIds: [11] }]], images: [{ page: 1, file: '001.png', hash: hash(png), status: 'completed' }] }] };
    fs.writeFileSync(path.join(root, 'manifest.json'), JSON.stringify(manifest));
    const job = { type: 'revision-batch' };
    assert.deepEqual(outputReceipts(job, root, false)[0].source_ids, [11]);
    assert.throws(() => outputReceipts(job, root, true), /incomplete/);
    const pdf = Buffer.from('%PDF fixture'); fs.writeFileSync(path.join(root, 'book.pdf'), pdf);
    manifest.status = 'completed'; manifest.book = { file: 'book.pdf', hash: hash(pdf), status: 'completed' };
    fs.writeFileSync(path.join(root, 'manifest.json'), JSON.stringify(manifest)); fs.writeFileSync(path.join(root, 'catalogue.zip'), 'fixture zip');
    assert.deepEqual(outputReceipts(job, root, true)[0].source_ids, [11, 12]);
    fs.writeFileSync(path.join(root, 'quiz/001.png'), 'tampered');
    assert.throws(() => outputReceipts(job, root, true), /checksum/);
    assert.throws(() => fileReceipt(root, '../outside'), /Invalid/);
  } finally { fs.rmSync(root, { recursive: true, force: true }); }
});

test('single quiz receipts require a complete positive unique approved question mapping', () => {
  const root = temporary();
  try {
    const bytes = Buffer.from('verified fixture MP4'); fs.writeFileSync(path.join(root, 'video.mp4'), bytes);
    const job = { type: 'quiz', videoFile: 'video.mp4', verifiedOutput: { sha256: hash(bytes) } };
    fs.writeFileSync(path.join(root, 'input.json'), JSON.stringify({ questions: [{ id: 11 }, { id: 12 }] }));
    assert.deepEqual(outputReceipts(job, root, false)[0].source_ids, [11, 12]);
    assert.deepEqual(outputReceipts(job, root, true)[0].source_ids, [11, 12]);
    for (const sourceIds of [[], [11, 11], [11, null], [11, 0], [11, -1], [11, '12']]) {
      assert.throws(() => outputReceipts({ ...job, sourceIds }, root, false), error => error.code === 'USAGE_EVIDENCE_UNCERTAIN');
    }
    fs.unlinkSync(path.join(root, 'input.json'));
    assert.throws(() => outputReceipts(job, root, false), error => error.code === 'USAGE_EVIDENCE_UNCERTAIN');
    assert.deepEqual(outputReceipts({ ...job, sourceIds: [11, 12] }, root, false)[0].source_ids, [11, 12]);
  } finally { fs.rmSync(root, { recursive: true, force: true }); }
});

async function fixture(t, { outcome = 'success', reportsOffline = false, initialStatus = 'reserved', retryGate } = {}) {
  const root = temporary(), operation = id(); let workers = 0;
  let serverStatus = initialStatus, attempt = 1;
  const reports = [], children = [];
  const transport = async (url, options) => {
    const input = JSON.parse(options.body);
    if (url.pathname.endsWith('/authorize')) return { ok: true, json: async () => ({ data: { admin_id: 1, usage: { ...cred(operation), status: serverStatus, attempt } } }) };
    reports.push(input);
    if (reportsOffline && input.event === 'complete') throw Error('offline');
    if (input.event === 'retry') { if (retryGate) await retryGate; attempt++; }
    serverStatus = input.event === 'complete' ? 'used' : input.event === 'cancel' ? 'released' : input.event === 'fail' ? 'failed' : 'reserved';
    return { ok: true, json: async () => ({ data: { ...cred(operation), status: serverStatus, attempt } }) };
  };
  const verify = file => assert.equal(fs.readFileSync(file, 'utf8'), 'ftyp verified mock-worker output');
  const runtime = createRunner({ port: 0, outputDir: path.join(root, 'outputs'), jobDir: path.join(root, 'jobs'), transport, verifyVideo: verify,
    spawnWorker: (_exe, args) => {
      workers++; const child = new EventEmitter(); child.stdout = new PassThrough(); child.stderr = new PassThrough(); children.push(child);
      const output = args[args.indexOf('--output-dir') + 1];
      setImmediate(() => {
        if (outcome === 'hold' || outcome === 'cancel-finalized') return;
        if (outcome === 'fail') child.stderr.write('Controlled render failure.');
        if (outcome === 'success' || outcome === 'finalized-failure') fs.writeFileSync(path.join(output, 'test-video.mp4'), Buffer.from('ftyp verified mock-worker output'));
        if (outcome === 'invalid-output') fs.writeFileSync(path.join(output, 'test-video.mp4'), 'unfinished encoding');
        child.emit('close', ['success', 'invalid-output', 'missing-output'].includes(outcome) ? 0 : 1);
      });
      return child;
    }, killWorker: child => setImmediate(() => {
      if (outcome === 'cancel-finalized') fs.writeFileSync(path.join(root, 'outputs', operation, 'test-video.mp4'), 'ftyp verified mock-worker output');
      child.emit('close', 1);
    }), handleSignals: false,
  });
  if (!runtime.server.listening) await once(runtime.server, 'listening');
  const base = `http://127.0.0.1:${runtime.server.address().port}`;
  t.after(async () => { runtime.shutdown(); await new Promise(resolve => runtime.server.close(resolve)); fs.rmSync(root, { recursive: true, force: true }); });
  const start = () => fetch(base + '/jobs', { method: 'POST', headers: { 'Content-Type': 'application/json', 'X-Maroquiz-Render-Ticket': 'a'.repeat(64) }, body: JSON.stringify({ video: { title: 'Test video' }, questions: [{ id: 11, text: 'Question?', choices: [{ label: 'A' }, { label: 'B' }], correct_answer: { label: 'A' } }] }) });
  const poll = async key => {
    const result = await fetch(base + '/jobs/' + operation, { headers: { 'X-Maroquiz-Job-Key': key } });
    return (await result.json()).data;
  };
  return { start, poll, reports, operation, root, base, runtime, transport, verify,
    reconnect: () => { reportsOffline = false; }, get workers() { return workers; } };
}
async function waitFor(fn) {
  const deadline = Date.now() + 5000;
  while (Date.now() < deadline) { const result = await fn(); if (result) return result; await new Promise(resolve => setTimeout(resolve, 10)); }
  throw Error('Lifecycle assertion timed out.');
}

test('successful worker output is reported before completion and repeated starts reuse one job', async t => {
  const f = await fixture(t); const response = await f.start(); const { data } = await response.json();
  const done = await waitFor(async () => { const job = await f.poll(data.accessKey); return job.status === 'completed' && job; });
  assert.equal(done.id, f.operation); assert.equal(done.usage, undefined);
  assert.ok(f.reports.some(report => report.event === 'complete' && report.output[0].sha256));
  assert.deepEqual(f.reports.find(report => report.event === 'complete').output[0].source_ids, [11]);
  await f.start(); assert.equal(f.workers, 1);
  const state = fs.statSync(path.join(f.root, 'jobs', f.operation + '.state.json'));
  assert.equal(state.mode & 0o777, 0o600);
});

test('offline completion stays durably pending and artifacts are not falsely published', async t => {
  const f = await fixture(t, { reportsOffline: true }); const { data } = await (await f.start()).json();
  await waitFor(() => f.reports.some(report => report.event === 'complete'));
  const job = await f.poll(data.accessKey); assert.equal(job.status, 'running'); assert.equal(job.stage, 'usage_reporting');
  const download = await fetch(f.base + '/jobs/' + f.operation + '/download?key=' + data.accessKey); assert.equal(download.status, 409);
  const saved = JSON.parse(fs.readFileSync(path.join(f.root, 'jobs', f.operation + '.state.json')));
  assert.equal(saved.usage.pending.event, 'complete');
  assert.ok(fs.existsSync(path.join(f.root, 'outputs', f.operation, 'test-video.mp4')));
});

test('cancellation waits for the worker to stop before releasing reservations', async t => {
  const f = await fixture(t, { outcome: 'hold' }); const { data } = await (await f.start()).json();
  const response = await fetch(f.base + '/jobs/' + f.operation + '/cancel', { method: 'POST', headers: { 'X-Maroquiz-Job-Key': data.accessKey } });
  assert.equal(response.status, 200);
  await waitFor(() => f.reports.some(report => report.event === 'cancel'));
  assert.equal((await f.poll(data.accessKey)).status, 'cancelled');
});

test('worker failure releases the reservation without reporting a completed output', async t => {
  const f = await fixture(t, { outcome: 'fail' }); const { data } = await (await f.start()).json();
  await waitFor(() => f.reports.some(report => report.event === 'fail'));
  const job = await f.poll(data.accessKey);
  assert.equal(job.status, 'failed'); assert.match(job.error, /Controlled render failure/);
  assert.equal(f.reports.some(report => report.event === 'complete'), false);
});

for (const outcome of ['missing-output', 'invalid-output']) test(`${outcome}: a successful exit cannot consume quiz questions without verified media`, async t => {
  const f = await fixture(t, { outcome }); const { data } = await (await f.start()).json();
  await waitFor(() => f.reports.some(report => report.event === 'fail'));
  const job = await f.poll(data.accessKey);
  assert.equal(job.status, 'failed');
  assert.equal(f.reports.some(report => report.event === 'complete' || report.event === 'progress'), false);
  assert.deepEqual(f.reports.find(report => report.event === 'fail').output, []);
  if (outcome === 'invalid-output') assert.equal(fs.readFileSync(path.join(f.root, 'outputs', f.operation, 'test-video.mp4'), 'utf8'), 'unfinished encoding');
});

for (const outcome of ['finalized-failure', 'cancel-finalized']) test(`${outcome}: reconcile the finalized quiz MP4 as completed and retry without rendering or overwriting`, async t => {
  const f = await fixture(t, { outcome }); const { data } = await (await f.start()).json();
  const event = outcome === 'cancel-finalized' ? 'cancel' : 'fail';
  if (event === 'cancel') {
    const cancelled = await fetch(`${f.base}/jobs/${f.operation}/cancel`, { method: 'POST', headers: { 'X-Maroquiz-Job-Key': data.accessKey } });
    assert.equal(cancelled.status, 200);
  }
  await waitFor(() => f.reports.some(report => report.event === 'complete'));
  const report = f.reports.find(report => report.event === 'complete');
  assert.equal(report.output[0].sha256, hash(Buffer.from('ftyp verified mock-worker output')));
  assert.deepEqual(report.output[0].source_ids, [11]);
  assert.equal(f.reports.some(report => report.event === 'fail' || report.event === 'cancel'), false);
  await waitFor(async () => (await f.poll(data.accessKey)).status === 'completed');
  const output = path.join(f.root, 'outputs', f.operation, 'test-video.mp4'), before = fs.statSync(output);
  const retry = await f.start(); assert.equal(retry.status, 200);
  assert.equal((await retry.json()).data.status, 'completed'); assert.equal(f.workers, 1);
  const after = fs.statSync(output); assert.equal(after.ino, before.ino); assert.equal(after.mtimeMs, before.mtimeMs);
  assert.equal(fs.readFileSync(output, 'utf8'), 'ftyp verified mock-worker output');
  assert.equal(f.reports.filter(report => report.event === 'complete').length, 1);
});

test('partial batch receipts contain only durably completed videos, never prepared or failed questions', () => {
  const root = temporary();
  try {
    const completed = Buffer.from('verified completed fixture'); fs.writeFileSync(path.join(root, 'completed.mp4'), completed);
    fs.writeFileSync(path.join(root, 'failed.mp4'), 'partial encoding');
    const job = { type: 'quiz-batch', items: [
      { renderStatus: 'completed', exportStatus: 'failed', source: 'completed.mp4', sourceIds: [11, 12], sha256: hash(completed) },
      { renderStatus: 'running', source: 'failed.mp4', sourceIds: [13] },
      { renderStatus: 'failed', source: 'failed.mp4', sourceIds: [14] },
      { renderStatus: 'waiting', source: 'waiting.mp4', sourceIds: [15] },
      { renderStatus: 'cancelled', source: 'cancelled.mp4', sourceIds: [16] },
    ] };
    assert.deepEqual(outputReceipts(job, root, false)[0].source_ids, [11, 12]);
    assert.throws(() => outputReceipts(job, root, true), /incomplete/);
  } finally { fs.rmSync(root, { recursive: true, force: true }); }
});

test('concurrent retries of an operation missing local state start one worker without cancelling its lease', async t => {
  let release; const retryGate = new Promise(resolve => { release = resolve; });
  const f = await fixture(t, { initialStatus: 'failed', retryGate });
  const first = f.start();
  await waitFor(() => f.reports.some(report => report.event === 'retry'));
  const second = await f.start();
  assert.equal(second.status, 409); assert.equal(f.reports.some(report => report.event === 'cancel'), false);
  release();
  const { data } = await (await first).json();
  await waitFor(async () => (await f.poll(data.accessKey)).status === 'completed');
  assert.equal(f.workers, 1); assert.equal(f.reports.filter(report => report.event === 'retry').length, 1);
});

test('a retained completion outbox reconnects after runner restart without rendering again', async t => {
  const f = await fixture(t, { reportsOffline: true }); const { data } = await (await f.start()).json();
  await waitFor(() => f.reports.some(report => report.event === 'complete'));
  await new Promise(resolve => setImmediate(resolve));
  f.runtime.shutdown(); await new Promise(resolve => f.runtime.server.close(resolve));
  f.reconnect();
  const resumed = createRunner({ port: 0, outputDir: path.join(f.root, 'outputs'), jobDir: path.join(f.root, 'jobs'), transport: f.transport, handleSignals: false,
    verifyVideo: f.verify,
    spawnWorker: () => { throw Error('Restart must never render again.'); } });
  t.after(async () => { resumed.shutdown(); await new Promise(resolve => resumed.server.close(resolve)); });
  if (!resumed.server.listening) await once(resumed.server, 'listening');
  const url = `http://127.0.0.1:${resumed.server.address().port}/jobs/${f.operation}`;
  await waitFor(async () => (await (await fetch(url, { headers: { 'X-Maroquiz-Job-Key': data.accessKey } })).json()).data.status === 'completed');
  const state = JSON.parse(fs.readFileSync(path.join(f.root, 'jobs', f.operation + '.state.json')));
  assert.equal(state.usage.pending, null); assert.equal(state.usage.status, 'used'); assert.equal(f.workers, 1);
  resumed.shutdown(); await new Promise(resolve => resumed.server.close(resolve));
});

for (const interrupted of ['verified-before-state-save', 'corrupt-completion', 'still-running-worker', 'missing-source-mapping', 'failed-state-retained-output']) test(`runner restart handles ${interrupted} without consuming unfinished questions or discarding verified output`, async t => {
  const f = await fixture(t, { reportsOffline: true }); const { data } = await (await f.start()).json();
  await waitFor(() => f.reports.some(report => report.event === 'complete'));
  await new Promise(resolve => setImmediate(resolve));
  f.runtime.shutdown(); await new Promise(resolve => f.runtime.server.close(resolve));
  const stateFile = path.join(f.root, 'jobs', f.operation + '.state.json');
  const state = JSON.parse(fs.readFileSync(stateFile, 'utf8'));
  if (interrupted === 'verified-before-state-save') {
    state.status = 'running'; state.usage.pending = null; delete state.verifiedOutput; delete state.sourceIds;
  } else if (interrupted === 'corrupt-completion') {
    fs.writeFileSync(path.join(f.root, 'outputs', f.operation, 'test-video.mp4'), 'unfinished encoding');
  } else if (interrupted === 'missing-source-mapping') {
    delete state.sourceIds; fs.unlinkSync(path.join(f.root, 'outputs', f.operation, 'input.json'));
  } else if (interrupted === 'failed-state-retained-output') {
    state.status = 'failed'; state.usage.pending = null; delete state.verifiedOutput;
  } else state.workerPid = process.pid;
  fs.writeFileSync(stateFile, JSON.stringify(state)); f.reports.length = 0; f.reconnect();
  const resumed = createRunner({ port: 0, outputDir: path.join(f.root, 'outputs'), jobDir: path.join(f.root, 'jobs'), transport: f.transport,
    handleSignals: false, verifyVideo: f.verify, spawnWorker: () => { throw Error('Restart must never launch a replacement worker.'); } });
  t.after(async () => { resumed.shutdown(); await new Promise(resolve => resumed.server.close(resolve)); });
  if (!resumed.server.listening) await once(resumed.server, 'listening');
  const get = async () => (await (await fetch(`http://127.0.0.1:${resumed.server.address().port}/jobs/${f.operation}`, { headers: { 'X-Maroquiz-Job-Key': data.accessKey } })).json()).data;
  const retry = () => fetch(`http://127.0.0.1:${resumed.server.address().port}/jobs`, { method: 'POST', headers: { 'Content-Type': 'application/json', 'X-Maroquiz-Render-Ticket': 'a'.repeat(64) },
    body: JSON.stringify({ video: { title: 'Test video' }, questions: [{ id: 11, text: 'Question?', choices: [{ label: 'A' }, { label: 'B' }], correct_answer: { label: 'A' } }] }) });
  if (interrupted === 'verified-before-state-save') {
    await waitFor(async () => (await get()).status === 'completed');
    assert.ok(f.reports.some(report => report.event === 'complete' && report.output[0].sha256));
    assert.deepEqual(f.reports.find(report => report.event === 'complete').output[0].source_ids, [11]);
    assert.equal(f.reports.some(report => report.event === 'fail' || report.event === 'cancel'), false);
  } else if (interrupted === 'corrupt-completion') {
    await waitFor(() => f.reports.some(report => report.event === 'fail'));
    assert.equal((await get()).status, 'failed');
    assert.equal(f.reports.some(report => report.event === 'complete'), false);
    assert.deepEqual(f.reports.find(report => report.event === 'fail').output, []);
    assert.equal(fs.readFileSync(path.join(f.root, 'outputs', f.operation, 'test-video.mp4'), 'utf8'), 'unfinished encoding');
  } else if (interrupted === 'failed-state-retained-output') {
    assert.equal((await get()).status, 'failed');
    const output = path.join(f.root, 'outputs', f.operation, 'test-video.mp4'), before = fs.statSync(output);
    const response = await retry(); assert.equal(response.status, 200);
    assert.equal((await response.json()).data.status, 'completed');
    assert.equal(fs.statSync(output).ino, before.ino); assert.equal(fs.statSync(output).mtimeMs, before.mtimeMs);
    assert.ok(f.reports.some(report => report.event === 'complete' && report.output[0].source_ids[0] === 11));
  } else {
    assert.equal((await get()).status, 'failed'); assert.deepEqual(f.reports, []);
    if (interrupted === 'missing-source-mapping') assert.equal((await get()).stage, 'usage_uncertain');
    const response = await retry(); assert.equal(response.status, 409);
    assert.deepEqual(f.reports, []);
  }
  assert.equal(f.workers, 1);
  resumed.shutdown(); await new Promise(resolve => resumed.server.close(resolve));
});
