const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const crypto = require('node:crypto');
const { EventEmitter, once } = require('node:events');
const { PassThrough } = require('node:stream');
const { createRunner } = require('../local-runner');
const { buildTimeline } = require('../render');

test('single HTTP jobs retain approved language and presentation settings when CLI options are separated', async t => {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-niveau-http-'));
  const operation = crypto.randomUUID(), token = 'a'.repeat(64), input = structuredClone(require('../five-seconds/sample.json'));
  input.video.template = 'niveau-concours'; input.video.language = 'ar'; input.video.title = 'Niveau HTTP';
  input.questions[0].language = 'ar'; input.questions[0].text = 'ما اللغة المستخدمة لتنسيق صفحات الويب؟';
  input.render_options = { profile: 'final', niveau: { extra_animations: true, narration: true, music: true, sfx: false } };
  let workerDocument;
  const credentials = { operation_id: operation, token, attempt: 1, lease_seconds: 900, status: 'reserved' };
  const runtime = createRunner({ port: 0, handleSignals: false, outputDir: path.join(root, 'output'), jobDir: path.join(root, 'jobs'),
    transport: async (url, options) => ({ ok: true, json: async () => ({ data: url.pathname.endsWith('/authorize') ? { admin_id: 1, usage: credentials } : { ...credentials, status: JSON.parse(options.body).event === 'fail' ? 'failed' : 'reserved' } }) }),
    spawnWorker: (_exe, args, options) => {
      assert.equal(options.shell, false);
      workerDocument = JSON.parse(fs.readFileSync(args[1], 'utf8'));
      const child = new EventEmitter(); child.stdout = new PassThrough(); child.stderr = new PassThrough();
      setImmediate(() => child.emit('close', 1)); // No actual renderer/media or content reservation.
      return child;
    },
  });
  t.after(async () => { runtime.shutdown(); await new Promise(resolve => runtime.server.close(resolve)); fs.rmSync(root, { recursive: true, force: true }); });
  if (!runtime.server.listening) await once(runtime.server, 'listening');
  const response = await fetch(`http://127.0.0.1:${runtime.server.address().port}/jobs`, { method: 'POST', headers: { 'Content-Type': 'application/json', 'X-Maroquiz-Render-Ticket': token }, body: JSON.stringify(input) });
  assert.equal(response.status, 202, await response.text());
  assert.deepEqual(workerDocument.render_options, input.render_options);
  assert.equal(workerDocument.questions[0].language, 'ar');
  assert.equal(buildTimeline(workerDocument).segments[0].scene.settings.narration, false);
  assert.equal(buildTimeline(workerDocument).segments[0].scene.settings.extra_animations, false);
  assert.equal(buildTimeline(workerDocument).segments[0].cues.length, 11);
  await new Promise(resolve => setTimeout(resolve, 30));
});
