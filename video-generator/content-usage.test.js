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
  const runtime = createRunner({ port: 0, outputDir: path.join(root, 'outputs'), jobDir: path.join(root, 'jobs'), transport,
    spawnWorker: (_exe, args) => {
      workers++; const child = new EventEmitter(); child.stdout = new PassThrough(); child.stderr = new PassThrough(); children.push(child);
      const output = args[args.indexOf('--output-dir') + 1];
      setImmediate(() => {
        if (outcome === 'hold') return;
        if (outcome === 'fail') child.stderr.write('Controlled render failure.');
        if (outcome === 'success') fs.writeFileSync(path.join(output, 'test-video.mp4'), Buffer.from('ftyp verified mock-worker output'));
        child.emit('close', outcome === 'success' ? 0 : 1);
      });
      return child;
    }, killWorker: child => setImmediate(() => child.emit('close', 1)), handleSignals: false,
  });
  if (!runtime.server.listening) await once(runtime.server, 'listening');
  const base = `http://127.0.0.1:${runtime.server.address().port}`;
  t.after(async () => { runtime.shutdown(); await new Promise(resolve => runtime.server.close(resolve)); fs.rmSync(root, { recursive: true, force: true }); });
  const start = () => fetch(base + '/jobs', { method: 'POST', headers: { 'Content-Type': 'application/json', 'X-Maroquiz-Render-Ticket': 'a'.repeat(64) }, body: JSON.stringify({ video: { title: 'Test video' }, questions: [{ text: 'Question?', choices: [{ label: 'A' }, { label: 'B' }], correct_answer: { label: 'A' } }] }) });
  const poll = async key => {
    const result = await fetch(base + '/jobs/' + operation, { headers: { 'X-Maroquiz-Job-Key': key } });
    return (await result.json()).data;
  };
  return { start, poll, reports, operation, root, base, runtime, transport,
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
    spawnWorker: () => { throw Error('Restart must never render again.'); } });
  t.after(async () => { resumed.shutdown(); await new Promise(resolve => resumed.server.close(resolve)); });
  if (!resumed.server.listening) await once(resumed.server, 'listening');
  const url = `http://127.0.0.1:${resumed.server.address().port}/jobs/${f.operation}`;
  await waitFor(async () => (await (await fetch(url, { headers: { 'X-Maroquiz-Job-Key': data.accessKey } })).json()).data.status === 'completed');
  const state = JSON.parse(fs.readFileSync(path.join(f.root, 'jobs', f.operation + '.state.json')));
  assert.equal(state.usage.pending, null); assert.equal(state.usage.status, 'used'); assert.equal(f.workers, 1);
  resumed.shutdown(); await new Promise(resolve => resumed.server.close(resolve));
});
