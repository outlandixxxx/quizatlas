const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const crypto = require('node:crypto');
const { initialize, validateBatch, runBatch, publicBatch } = require('../video-generator/quiz-batch');
const { outputReceipts } = require('../video-generator/content-usage');
const { exportDirectory, checksum } = require('../video-generator/video-export');
const document = (type = 'facts-short') => ({ type: 'facts-batch', videos: [1, 2, 3].map(id => ({ type, language: 'ar', major: { id: 4, name: 'العلوم' }, video: { title: `حقيقة ${id}` }, facts: [{ id, subject_id: 5, subject_name: 'الفيزياء', text: `حقيقة علمية ${id}`, detail: '', source_url: null }], render_options: { quality: 'draft', orientation: 'vertical', music: true, sfx: true, musicVolume: .6 } })) });
function fixture(t, type) {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-facts-batch-'));
  t.after(() => fs.rmSync(root, { force: true, recursive: true }));
  const output = path.join(root, 'output'), destination = path.join(root, 'Facts with spaces');
  const job = { id: crypto.randomUUID(), type: 'facts-batch', status: 'queued' };
  const doc = document(type); initialize(job, doc, output, destination);
  const events = [];
  const dependencies = { save() {}, finished: async () => {}, verifyVideo: file => assert.equal(fs.readFileSync(file, 'utf8'), 'verified mp4'),
    recordProgress: async (_job, item) => { events.push(`used-${item.sequence}`); assert.equal(outputReceipts({ ...job, items: [item] }, output, false)[0].source_ids[0], item.sequence); },
    render: async (_job, item, approved) => {
      if (item.sequence > 1) assert.equal(job.items[item.sequence - 2].exportStatus, 'completed');
      assert.deepEqual(approved, doc.videos[item.sequence - 1]);
      events.push(`render-${item.sequence}`); const file = path.join(output, item.source);
      fs.mkdirSync(path.dirname(file), { recursive: true }); fs.writeFileSync(file, 'verified mp4');
    },
  };
  return { root, output, destination, job, doc, events, dependencies };
}
for (const profile of ['facts-short', 'facts-long']) test(`${profile}: sequential verified rendering, fact receipts, separate export and restart`, async t => {
  const f = fixture(t, profile); await runBatch(f.job, f.output, f.dependencies);
  assert.equal(f.job.status, 'completed'); assert.deepEqual(f.events, ['render-1', 'used-1', 'render-2', 'used-2', 'render-3', 'used-3']);
  for (const item of f.job.items) {
    assert.match(item.filename, new RegExp(`^facts-.*${profile}.*ar-.*\\.mp4$`));
    assert.equal(await checksum(path.join(f.destination, item.filename)), item.sha256);
  }
  assert.deepEqual(outputReceipts(f.job, f.output)[0].source_ids, [1, 2, 3]);
  assert.equal(publicBatch(f.job).exported, 3);
  await runBatch(JSON.parse(JSON.stringify(f.job)), f.output, { ...f.dependencies, render: () => assert.fail('must retain completed MP4') });
  assert.equal(fs.readdirSync(f.destination).length, 3);
});
test('fact failure releases only unfinished receipts; retry preserves successful videos', async t => {
  const f = fixture(t), render = f.dependencies.render;
  f.dependencies.render = async (...args) => { if (args[1].sequence === 2) throw Error('encoder failed'); return render(...args); };
  await runBatch(f.job, f.output, f.dependencies);
  assert.equal(f.job.status, 'failed'); assert.match(f.job.error, /encoder failed/);
  assert.deepEqual(outputReceipts(f.job, f.output, false)[0].source_ids, [1]);
  assert.equal(f.job.items[1].renderStatus, 'failed');
  await runBatch(f.job, f.output, { ...f.dependencies, render });
  assert.equal(f.job.status, 'completed'); assert.equal(f.events.filter(e => e === 'render-1').length, 1);
});
test('export-only retry preserves source, refuses collisions and never re-encodes', async t => {
  const f = fixture(t); const item = f.job.items[0], file = path.join(f.destination, item.filename);
  fs.writeFileSync(file, 'unrelated video');
  await runBatch(f.job, f.output, f.dependencies);
  assert.equal(f.job.status, 'failed'); assert.equal(item.renderStatus, 'completed'); assert.equal(item.exportStatus, 'failed');
  assert.equal(fs.readFileSync(file, 'utf8'), 'unrelated video'); assert.ok(fs.existsSync(path.join(f.output, item.source)));
  fs.unlinkSync(file); // Only the test fixture resolves its own collision.
  await runBatch(f.job, f.output, f.dependencies);
  assert.equal(f.job.status, 'completed'); assert.equal(f.events.filter(e => e === 'render-1').length, 1);
  assert.ok(fs.readdirSync(f.destination).every(name => name.endsWith('.mp4')));
});
test('stop remaining and reconcile an interrupted verified MP4 without rendering again', async t => {
  const f = fixture(t); const item = f.job.items[0], source = path.join(f.output, item.source);
  fs.mkdirSync(path.dirname(source), { recursive: true }); fs.writeFileSync(source, 'verified mp4'); item.renderStatus = 'running';
  const progress = f.dependencies.recordProgress;
  await runBatch(f.job, f.output, { ...f.dependencies, recordProgress: async (...args) => { await progress(...args); f.job.status = 'cancelled'; } });
  assert.equal(f.job.status, 'cancelled'); assert.equal(f.job.items[1].renderStatus, 'cancelled');
  await runBatch(f.job, f.output, f.dependencies);
  assert.equal(f.job.status, 'completed'); assert.ok(!f.events.includes('render-1'));
  fs.writeFileSync(source, 'tampered'); await runBatch(f.job, f.output, f.dependencies);
  assert.equal(f.job.status, 'failed'); assert.match(f.job.error, /previously verified/);
});
test('rejects duplicate facts, duplicate text, mixed profiles, invalid short content and nested queues', () => {
  for (const mutate of [d => d.videos.push(d.videos[0]), d => d.videos[1].facts[0].text = d.videos[0].facts[0].text, d => d.videos[1].type = 'facts-long', d => d.videos[0].facts[0].text = 'x'.repeat(501), d => d.videos[0] = d]) {
    const d = document(); mutate(d); assert.throws(() => validateBatch(d));
  }
});
test('Facts configuration stays separate from VIDEO_EXPORT_DIR; unsafe/missing drive cannot be created', t => {
  const f = fixture(t); const previous = process.env.VIDEO_EXPORT_DIR;
  process.env.VIDEO_EXPORT_DIR = f.destination;
  try { assert.throws(() => exportDirectory('../unsafe', 'facts'), /FACT_VIDEO_EXPORT_DIR/); }
  finally { if (previous === undefined) delete process.env.VIDEO_EXPORT_DIR; else process.env.VIDEO_EXPORT_DIR = previous; }
  if (process.platform === 'linux') {
    const mounts = fs.readFileSync('/proc/self/mountinfo', 'utf8');
    if (!mounts.includes(' /mnt/z ')) assert.throws(() => exportDirectory('/mnt/z/MaroQuiz/Facts', 'facts'), /not mounted/);
  }
});
