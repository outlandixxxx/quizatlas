const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const os = require('node:os');
const { validateRevisionJob, identity, hash } = require('./job-schema');
const { render } = require('./job-render');
const { entries } = require('./corrected-content');

function fixture(quizzes = 1, output = 'both') {
  const major = { id: 4, name: 'Mathematics', slug: 'mathematics' }, subject = { id: 99, name: 'Abstract Algebra — SYNTHETIC TEST FIXTURE', slug: 'abstract-algebra' };
  return { type: 'revision-batch', format_version: 'revision-batch-v1', content_mode: 'corrected-questions', output_mode: output, language: 'fr', major, subject,
    quizzes: Array.from({ length: quizzes }, (_, index) => {
      const quizId = 900000 + index;
      const questions = ['single_choice', 'multiple_choice', 'true_false', 'true_false'].map((type, n) => {
        const id = quizId * 10 + n, truths = n === 2 ? ['Vrai', true] : ['Faux', false];
        return { question_id: id, quiz_id: quizId, order: n + 1, type,
          question: ['Quel SQL conserve x < 3 et x² ? <script>neverRun()</script>', 'Quels éléments appartiennent à cet ensemble ?', 'Cette proposition est-elle vraie ?', 'هل العبارة صحيحة؟'][n],
          correct_answers: (type === 'multiple_choice' ? ['Élément A', 'عنصر B'] : [type === 'true_false' ? truths[0] : 'SELECT * FROM t\nWHERE x < 3;']).map((text, a) => ({ choice_id: id * 10 + a + 1, question_id: id, order: a + 1, text, truth_value: type === 'true_false' ? truths[1] : null })) };
      });
      const source = { major, subject, quiz: { id: quizId, title: `SYNTHETIC type fixture ${index + 1}` }, notes: questions.map(q => ({ question_id: q.question_id, order: q.order, explanation: 'Une explication originale préservée à 70 °C. العربية و ATP.' })), meta: { total_explanations: questions.length, format_version: '1.1' }, correction: { format_version: 'corrected-questions-v1', questions, issues: [] } };
      return { source, version: 1, paragraphs: source.notes.map(n => ({ id: 'p' + n.question_id, text: n.explanation, sourceQuestionIds: [n.question_id] })), issues: [] };
    }) };
}
test('corrected contracts bind mode, type, complete answers, truth values, ownership and individual mappings', () => {
  const doc = fixture(); validateRevisionJob(doc);
  const old = structuredClone(doc); delete old.content_mode; delete old.quizzes[0].source.correction; validateRevisionJob(old); assert.notEqual(identity(old), identity(doc));
  for (const change of [d => d.content_mode = 'unknown', d => d.quizzes[0].source.correction.issues.push({ code: 'missing_answer' }),
    d => d.quizzes[0].source.correction.questions[0].quiz_id++, d => d.quizzes[0].source.correction.questions.reverse(),
    d => d.quizzes[0].source.correction.questions[1].correct_answers = [], d => d.quizzes[0].source.correction.questions[0].correct_answers.push(d.quizzes[0].source.correction.questions[1].correct_answers[0]),
    d => d.quizzes[0].source.correction.questions[2].correct_answers[0].truth_value = false,
    d => d.quizzes[0].source.correction.questions[0].correct_answers[0].question_id++,
    d => d.quizzes[0].paragraphs[0].sourceQuestionIds.push(d.quizzes[0].paragraphs[1].sourceQuestionIds[0])]) {
    const bad = structuredClone(doc); change(bad); assert.throws(() => validateRevisionJob(bad));
  }
  const edited = structuredClone(doc); edited.quizzes[0].paragraphs[0].text = 'An explicit explanation edit.';
  assert.notEqual(identity(doc), identity(edited)); assert.deepEqual(edited.quizzes[0].source.correction, doc.quizzes[0].source.correction);
  assert.deepEqual(entries(doc.quizzes[0], 'ar')[1].parts.filter(p => p.role === 'answer').map(p => p.text), ['Élément A', 'عنصر B']);
  assert.equal(entries(doc.quizzes[0], 'ar')[3].parts[1].text, 'خطأ'); assert.equal(entries(doc.quizzes[0], 'en')[2].parts[1].text, 'True');
});

test('corrected PNG/PDF render every question and all answers at fixed sizes and retain valid formats on retry', { timeout: 180000 }, async () => {
  const output = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-corrected-test-'));
  try {
    const doc = fixture(), manifest = await render(doc, output);
    assert.equal(manifest.contentMode, 'corrected-questions'); assert.equal(manifest.status, 'completed');
    assert.ok(manifest.quizzes[0].images.length > 1); assert.equal(manifest.book.verification.embeddedFonts, true);
    const content = entries(doc.quizzes[0], 'fr'), segments = manifest.quizzes[0].pages.flat();
    for (const [e, entry] of content.entries()) for (const [part, data] of entry.parts.entries()) {
      assert.equal(segments.filter(s => s.e === e && s.part === part).map(s => data.text.slice(s.start, s.end)).join(''), data.text);
    }
    const pdf = path.join(output, manifest.book.file), first = path.join(output, manifest.quizzes[0].folder, '001.png');
    assert.equal(fs.readFileSync(first).readUInt32BE(16), 1080); assert.equal(fs.readFileSync(first).readUInt32BE(20), 1350);
    const pdfTime = fs.statSync(pdf).mtimeMs, pngTime = fs.statSync(first).mtimeMs, bytes = hash(fs.readFileSync(pdf));
    fs.unlinkSync(path.join(output, manifest.quizzes[0].folder, manifest.quizzes[0].images.at(-1).file));
    await render(doc, output); assert.equal(fs.statSync(pdf).mtimeMs, pdfTime); assert.equal(hash(fs.readFileSync(pdf)), bytes); assert.equal(fs.statSync(first).mtimeMs, pngTime);
    fs.writeFileSync(pdf, '%PDF-corrupt'); await render(doc, output); assert.equal(fs.statSync(first).mtimeMs, pngTime);
  } finally { fs.rmSync(output, { recursive: true, force: true }); }
});

test('long question, answer and explanation continuations and multi-quiz contents preserve every exact slice', { timeout: 180000 }, async () => {
  const output = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-corrected-long-test-'));
  try {
    const doc = fixture(2); doc.language = 'ar';
    const q = doc.quizzes[0].source.correction.questions[0];
    q.question = ('Quel opérateur conserve x² < 3 ? العربية و ATP.\n').repeat(45);
    q.correct_answers[0].text = ('SELECT * FROM t WHERE x < 3;\n').repeat(50);
    doc.quizzes[0].paragraphs[0].text = ('Une condition importante reste exacte. لا حذف للشروحات.\n').repeat(65);
    const result = await render(doc, output); assert.equal(result.status, 'completed');
    assert.ok(result.quizzes[0].images.length > 4); assert.ok(result.book.pageCount > 4); assert.equal(result.book.verification.contentsLinks, 2);
    const plan = JSON.parse(fs.readFileSync(path.join(output, 'book-layout.json'))), parts = plan.pages.flatMap(p => p.items || []).filter(p => p.type === 'corrected');
    for (let qIndex = 0; qIndex < doc.quizzes.length; qIndex++) for (const [e, entry] of entries(doc.quizzes[qIndex], doc.language).entries()) for (const [part, source] of entry.parts.entries()) {
      const pieces = parts.filter(s => s.q === qIndex && s.e === e && s.part === part);
      assert.equal(pieces.map(s => source.text.slice(s.start, s.end)).join(''), source.text);
    }
  } finally { fs.rmSync(output, { recursive: true, force: true }); }
});
