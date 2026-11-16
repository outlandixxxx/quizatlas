const { test } = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const { buildEvidence } = require('./quiz-video-scope-evidence');
const id = '11111111-1111-4111-8111-111111111111';

function fixture(run) {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'quiz-scope-'));
  const jobs = path.join(root, 'jobs'), output = path.join(root, 'output');
  fs.mkdirSync(jobs); fs.mkdirSync(output); fs.mkdirSync(path.join(output, id));
  const state = { id, type: 'quiz', status: 'completed', usage: { operation_id: id, token: 'private-capability' }, key: 'private-job-key' };
  const document = { video: { id: 5, template: 'niveau-concours', language: 'ar' }, questions: [{ id: 1, text: 'نص محفوظ' }] };
  fs.writeFileSync(path.join(jobs, id + '.state.json'), JSON.stringify(state));
  fs.writeFileSync(path.join(output, id, 'input.json'), JSON.stringify(document));
  try { run({ jobs, output, state, document }); } finally { fs.rmSync(root, { recursive: true, force: true }); }
}

test('scope evidence retains the original approval and excludes runner secrets without modifying files', () => fixture(({ jobs, output, document }) => {
  const before = fs.readFileSync(path.join(output, id, 'input.json'), 'utf8');
  const evidence = buildEvidence(jobs, output);
  assert.deepEqual(evidence.operations, [{ operation_id: id, document }]);
  assert.ok(!JSON.stringify(evidence).includes('private-'));
  assert.equal(fs.readFileSync(path.join(output, id, 'input.json'), 'utf8'), before);
}));

test('active quiz jobs refuse collection, and missing inputs are reported without guessing a template', () => fixture(({ jobs, output, state }) => {
  fs.unlinkSync(path.join(output, id, 'input.json'));
  const evidence = buildEvidence(jobs, output);
  assert.equal(evidence.operations.length, 0); assert.equal(evidence.skipped.length, 1);
  fs.writeFileSync(path.join(jobs, id + '.state.json'), JSON.stringify({ ...state, status: 'running' }));
  assert.throws(() => buildEvidence(jobs, output), /active quiz generation/);
}));

test('scope collection excludes Facts and revision jobs', () => fixture(({ jobs, output, state }) => {
  for (const type of ['facts-short', 'facts-batch', 'revision-batch']) {
    fs.writeFileSync(path.join(jobs, id + '.state.json'), JSON.stringify({ ...state, type, status: 'running' }));
    assert.equal(buildEvidence(jobs, output).operations.length, 0);
  }
}));
