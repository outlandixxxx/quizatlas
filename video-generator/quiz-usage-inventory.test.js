const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const crypto = require('node:crypto');
const { collectInventory, writeInventory } = require('./quiz-usage-inventory');

function fixture(t) {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-inventory-'));
  const jobDir = path.join(root, 'jobs'), outputDir = path.join(root, 'output');
  fs.mkdirSync(jobDir); fs.mkdirSync(outputDir);
  t.after(() => fs.rmSync(root, { recursive: true, force: true }));
  const state = (id, value) => fs.writeFileSync(path.join(jobDir, `${id}.state.json`), JSON.stringify({ id, type: 'quiz', status: 'failed', title: 'Saved quiz', createdAt: '2026-11-03T10:00:00Z', ...value }));
  const output = (id, file, contents) => { const name = path.join(outputDir, id, file); fs.mkdirSync(path.dirname(name), { recursive: true }); fs.writeFileSync(name, contents); return name; };
  const input = (id, document, name = 'input.json') => output(id, name, JSON.stringify(document));
  return { root, jobDir, outputDir, state, output, input, collect: () => collectInventory({ jobDir, outputDir, runnerResponds: async () => false }) };
}
const document = (id, question) => ({ video: { id, title: `Video ${id}` }, questions: [{ id: question }] });

test('inventories every persisted quiz conservatively without exposing capabilities or changing source files', async t => {
  const f = fixture(t), failed = crypto.randomUUID(), withVideo = crypto.randomUUID(), legacy = crypto.randomUUID(), orphan = crypto.randomUUID(), facts = crypto.randomUUID(), batch = crypto.randomUUID();
  f.state(failed, { usage: { operation_id: failed, token: 'PRIVATE_TOKEN' }, key: 'PRIVATE_KEY' });
  const failedInput = f.input(failed, document(19, 101)), before = fs.readFileSync(failedInput);
  f.state(withVideo, {}); f.input(withVideo, document(20, 102)); f.output(withVideo, 'final.mp4', 'unvalidated media preserved');
  f.state(legacy, { status: 'completed' }); // No source assignment survives: uncertain, never automatic cleanup.
  f.output(orphan, 'orphan.mp4', 'orphan media');
  f.state(facts, { type: 'facts-short' }); f.input(facts, { type: 'facts-short', facts: [{ id: 1 }] });
  f.input('preview-comparison', document(0, 999)); f.output('preview-comparison', 'preview.mp4', 'comparison');
  f.state(batch, { type: 'quiz-batch', items: [
    { videoId: 21, sourceIds: [103], title: 'Completed batch item', renderStatus: 'completed', folder: '001', source: '001/video.mp4' },
    { videoId: 22, sourceIds: [104], title: 'Unrendered batch item', renderStatus: 'waiting', folder: '002', source: '002/video.mp4' },
  ] });
  f.output(batch, '001/video.mp4', 'retained completed media');
  const inventory = await f.collect();
  assert.equal(inventory.version, 1); assert.equal(inventory.runner_stopped, true);
  assert.equal(inventory.records.find(record => record.video_set_id === 19).status, 'no_output');
  assert.equal(inventory.records.find(record => record.video_set_id === 20).status, 'uncertain');
  const completed = inventory.records.find(record => record.video_set_id === 21);
  assert.equal(completed.status, 'success'); assert.equal(completed.has_input, false); assert.deepEqual(completed.source_ids, [103]);
  assert.equal(inventory.records.find(record => record.video_set_id === 22).status, 'no_output');
  assert.ok(inventory.unknown_records.some(record => record.job_id === legacy && record.reason === 'completed_state_missing_source_mapping'));
  assert.ok(inventory.unknown_records.some(record => record.job_id === orphan && record.reason === 'unmapped_mp4_preserve'));
  assert.ok(inventory.ignored_records.some(record => record.video_set_id === 0));
  assert.ok(inventory.ignored_records.some(record => record.job_id === facts));
  assert.equal(inventory.records.some(record => record.source_ids.includes(999)), false);
  assert.equal(JSON.stringify(inventory).includes('PRIVATE_TOKEN'), false); assert.equal(JSON.stringify(inventory).includes('PRIVATE_KEY'), false);
  for (const record of [...inventory.records, ...inventory.unknown_records]) { assert.ok(Object.hasOwn(record, 'created_at')); assert.ok(Object.hasOwn(record, 'title')); }
  assert.deepEqual(fs.readFileSync(failedInput), before);
  const destination = path.join(f.root, 'inventory.json'), hash = writeInventory(destination, inventory);
  assert.equal(hash, crypto.createHash('sha256').update(fs.readFileSync(destination)).digest('hex'));
  assert.match(fs.readFileSync(destination + '.sha256', 'utf8'), new RegExp(`^${hash}  inventory.json\\n$`));
  assert.equal(fs.statSync(destination).mode & 0o777, 0o600); assert.equal(fs.statSync(destination + '.sha256').mode & 0o777, 0o600);
  assert.throws(() => writeInventory(destination, inventory), /EEXIST/);
});

test('live retained workers and a responding local runner both refuse inventory', async t => {
  const f = fixture(t), id = crypto.randomUUID();
  f.state(id, { workerPid: process.pid });
  await assert.rejects(f.collect(), /PID is still alive/);
  f.state(id, { workerPid: null });
  await assert.rejects(collectInventory({ jobDir: f.jobDir, outputDir: f.outputDir, runnerResponds: async () => true }), /runner responds/);
});

test('unmapped media remains uncertain while frame-only failed work proves no MP4 without opening frames', async t => {
  const f = fixture(t), id = crypto.randomUUID(), extra = crypto.randomUUID();
  f.state(id, { type: 'quiz-batch' }); f.input(id, { type: 'quiz-batch', videos: [document(31, 111)] });
  f.output(id, 'unmapped.mp4', 'unknown video');
  fs.writeFileSync(path.join(f.jobDir, `${extra}.json`), JSON.stringify(document(32, 112)));
  f.output(extra, '.frames-partial/unfinished.jpg', 'unfinished frames');
  const inventory = await f.collect();
  assert.equal(inventory.records.find(record => record.video_set_id === 31).status, 'uncertain');
  const record = inventory.records.find(record => record.video_set_id === 32);
  assert.equal(record.status, 'no_output'); assert.equal(record.has_state, false); assert.equal(record.has_input, true);
  assert.deepEqual(record.scan_issues, []);
  assert.equal(fs.readFileSync(path.join(f.outputDir, extra, '.frames-partial/unfinished.jpg'), 'utf8'), 'unfinished frames');
  f.output(extra, '.frames-partial/encoded.mp4', 'unvalidated encoding');
  assert.equal((await f.collect()).records.find(record => record.video_set_id === 32).status, 'uncertain');
  fs.unlinkSync(path.join(f.outputDir, extra, '.frames-partial/encoded.mp4'));
  f.output(extra, '.frames-partial/unknown.bin', 'unknown retained data');
  assert.equal((await f.collect()).records.find(record => record.video_set_id === 32).status, 'uncertain');
  await assert.rejects(collectInventory({ jobDir: path.join(f.root, 'missing'), outputDir: f.outputDir, runnerResponds: async () => false }), /must exist/);
});

test('explicitly reviewed comparison outputs require markers and cannot hide UUID jobs or generation inputs', async t => {
  const f = fixture(t), review = 'five-seconds-polish-20261109', id = crypto.randomUUID();
  f.output(review, 'canva-comparison.mp4', 'review media');
  f.output(review, 'comparison.json', '{}'); f.output(review, 'verification.json', '{}');
  assert.ok((await f.collect()).unknown_records.some(record => record.reason === 'unmapped_mp4_preserve'));
  const options = { jobDir: f.jobDir, outputDir: f.outputDir, runnerResponds: async () => false, reviewDirs: [review] };
  const inventory = await collectInventory(options);
  assert.equal(inventory.unknown_records.length, 0);
  assert.ok(inventory.ignored_records.some(record => record.reviewed_dir === review && record.reason === 'explicitly_reviewed_comparison_without_generation_input_or_state'));
  await assert.rejects(collectInventory({ ...options, reviewDirs: [id] }), /non-UUID/);
  await assert.rejects(collectInventory({ ...options, reviewDirs: ['../outside'] }), /non-UUID/);
  f.input(review, document(41, 141));
  await assert.rejects(collectInventory(options), /cannot contain generation inputs/);
  await assert.rejects(collectInventory({ ...options, reviewDirs: ['missing-comparison'] }), /missing or unsafe/);
});
