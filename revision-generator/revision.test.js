const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const { spawnSync } = require('node:child_process');
const { validateRevisionJob, identity, hash } = require('./job-schema');
const { writeZip } = require('./zip');
const document = () => ({ type: 'revision-batch', format_version: 'revision-batch-v1', major: { id: 7, name: 'SVT', slug: 'svt' }, subject: { id: 169, name: 'Biochemistry', slug: 'biochemistry' }, quizzes: [{ source: { major: { id: 7, name: 'SVT', slug: 'svt' }, subject: { id: 169, name: 'Biochemistry', slug: 'biochemistry' }, quiz: { id: 1599, title: 'Controlled renderer test', difficulty: 'Beginner' }, notes: [{ question_id: 1, order: 1, explanation: 'Source exacte.' }], meta: { total_explanations: 1, exported_at: 'now', format_version: '1.1' } }, version: 1, paragraphs: [{ id: 'p1', text: 'Source exacte.', sourceQuestionIds: [1] }], issues: [] }] });

test('schema enforces complete mappings, unique quizzes and bounded safe fields without requiring approval', () => {
  const valid = document(); assert.equal(validateRevisionJob(valid), valid);
  const changed = structuredClone(valid); changed.quizzes[0].source.meta.exported_at = 'later'; assert.equal(identity(valid), identity(changed));
  changed.quizzes[0].paragraphs[0].text += ' edit'; assert.notEqual(identity(valid), identity(changed));
  const missing = document(); missing.quizzes[0].paragraphs[0].sourceQuestionIds = []; assert.throws(() => validateRevisionJob(missing), /mapping/);
  const duplicate = document(); duplicate.quizzes.push(duplicate.quizzes[0]); assert.throws(() => validateRevisionJob(duplicate), /duplicate/);
  assert.throws(() => validateRevisionJob({ ...document(), output: '../../escape' }), /Unsupported/);
});

test('ZIP round trips bytes and stable folders and rejects traversal', () => {
  const folder = fs.mkdtempSync(path.join(os.tmpdir(), 'revision-zip-test-'));
  try {
    const data = path.join(folder, 'data'); fs.writeFileSync(data, Buffer.from([1, 5, 255]));
    const zip = path.join(folder, 'test.zip'); writeZip(zip, [{ name: 'subject-169/001-quiz-1599/001.png', path: data }]);
    const result = spawnSync('python3', ['-c', 'import zipfile,sys; z=zipfile.ZipFile(sys.argv[1]); assert z.testzip() is None; assert z.read(z.namelist()[0])==bytes([1,5,255])', zip]);
    assert.equal(result.status, 0, String(result.stderr));
    assert.throws(() => writeZip(path.join(folder, 'bad.zip'), [{ name: '../escape', path: data }]), /Unsafe/);
  } finally { fs.rmSync(folder, { recursive: true, force: true }); }
});

test('measured pagination preserves long mixed text, fixed font, draft outputs and retries unchanged images', { timeout: 120000 }, async () => {
  const { render } = require('./job-render');
  const folder = fs.mkdtempSync(path.join(os.tmpdir(), 'revision-render-test-'));
  const doc = document();
  doc.quizzes[0].paragraphs[0].text = ('Une condition conservée à 70 °C. العربية و x² <script>neverRun()</script>\n').repeat(100);
  try {
    const manifest = await render(doc, folder), record = manifest.quizzes[0];
    assert.ok(record.pages.length > 1);
    assert.equal(record.pages.flat().map(s => s.text).join(''), doc.quizzes[0].paragraphs[0].text);
    assert.equal(record.pages[1][0].number, 1); assert.equal(record.pages[1][0].continued, true);
    assert.ok(record.images.every(i => i.status === 'completed' && i.fontSize === '28px'));
    const first = path.join(folder, record.folder, record.images[0].file), firstMtime = fs.statSync(first).mtimeMs, firstHash = hash(fs.readFileSync(first));
    const last = record.images.at(-1); fs.unlinkSync(path.join(folder, record.folder, last.file)); last.status = 'failed'; manifest.status = 'failed';
    fs.writeFileSync(path.join(folder, 'manifest.json'), JSON.stringify(manifest));
    const retry = await render(doc, folder);
    assert.equal(retry.status, 'completed'); assert.equal(fs.statSync(first).mtimeMs, firstMtime); assert.equal(hash(fs.readFileSync(first)), firstHash);
    const check = spawnSync('python3', ['-c', 'import zipfile,json,sys; z=zipfile.ZipFile(sys.argv[1]); assert z.testzip() is None; i=json.loads(z.read(next(n for n in z.namelist() if n.endswith("catalogue-index.json")))); assert i["draft"] is True; assert len([n for n in z.namelist() if n.endswith(".png")])==i["quizzes"][0]["imageCount"]', path.join(folder, 'catalogue.zip')]);
    assert.equal(check.status, 0, String(check.stderr));
  } finally { fs.rmSync(folder, { recursive: true, force: true }); }
});
