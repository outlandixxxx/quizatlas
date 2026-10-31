const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const os = require('node:os');
const { render } = require('./job-render');
const { hash, validateRevisionJob, identity } = require('./job-schema');
function book(mode = 'pdf', count = 1) {
  const major = { id: 7, name: 'Sciences', slug: 'sciences' }, subject = { id: 169, name: 'Révision scientifique', slug: 'revision' };
  return { type: 'revision-batch', format_version: 'revision-batch-v1', major, subject, output_mode: mode, language: 'fr',
    quizzes: Array.from({ length: count }, (_, index) => {
      const text = `Explication ${index + 1} : une condition conservée à 70 °C, x² < y. Les éléments restent ordonnés.`;
      return { source: { major, subject, quiz: { id: 1599 + index, title: 'Chapitre ' + (index + 1) }, notes: [{ question_id: index + 1, order: 1, explanation: text }], meta: { total_explanations: 1, format_version: '1.1' } }, version: 1, paragraphs: [{ id: 'p1', text, sourceQuestionIds: [index + 1] }], issues: [] };
    }) };
}
test('output contracts retain legacy defaults and reject unsupported formats and languages', () => {
  const doc = book(); validateRevisionJob(doc); const png = book('png'); assert.notEqual(identity(doc), identity(png));
  delete png.output_mode; delete png.language; validateRevisionJob(png);
  assert.throws(() => validateRevisionJob({ ...doc, output_mode: 'html' }), /mode/);
  assert.throws(() => validateRevisionJob({ ...doc, language: 'xx' }), /language/i);
  doc.quizzes[0].paragraphs = []; assert.throws(() => validateRevisionJob(doc), /Invalid/i);
});
test('single A4 PDF is searchable; multi-chapter contents and combined outputs retain verified bytes on retry', { timeout: 180000 }, async () => {
  const folder = fs.mkdtempSync(path.join(os.tmpdir(), 'revision-book-test-'));
  try {
    const single = await render(book(), path.join(folder, 'single'));
    assert.equal(single.status, 'completed'); assert.equal(single.book.pageCount, 2); assert.equal(single.book.tocPages, 0);
    assert.equal(single.book.verification.searchable, true); assert.equal(single.quizzes[0].images.length, 0);
    const { verifyBook } = require('./book-verify');
    const plan = JSON.parse(fs.readFileSync(path.join(folder, 'single/book-layout.json'))), altered = book();
    altered.quizzes[0].paragraphs[0].text = 'This text never appeared in the PDF.';
    await assert.rejects(verifyBook(path.join(folder, 'single', single.book.file), plan, plan.regions.map(regions => ({ regions })), altered), /text verification/);
    const doc = book('both', 3), out = path.join(folder, 'both');
    let result = await render(doc, out);
    assert.equal(result.book.tocPages, 1); assert.equal(result.book.verification.contentsLinks, 3);
    assert.equal(result.book.pageCount, 3); assert.deepEqual(result.book.chapters.map(c => c.quizId), [1599, 1600, 1601]);
    assert.ok(result.book.chapters.every(c => c.page === 3)); // Natural flow: no forced quiz page breaks.
    const pdf = path.join(out, result.book.file), image = path.join(out, result.quizzes[0].folder, '001.png');
    const pdfTime = fs.statSync(pdf).mtimeMs, imageTime = fs.statSync(image).mtimeMs;
    fs.unlinkSync(path.join(out, result.quizzes[2].folder, '001.png'));
    result = await render(doc, out); assert.equal(fs.statSync(pdf).mtimeMs, pdfTime); assert.equal(fs.statSync(image).mtimeMs, imageTime);
    fs.writeFileSync(pdf, 'corrupt'); result = await render(doc, out);
    assert.equal(result.book.hash, hash(fs.readFileSync(pdf))); assert.equal(fs.statSync(image).mtimeMs, imageTime);
    assert.notEqual(result.book.file, single.book.file);
  } finally { fs.rmSync(folder, { recursive: true, force: true }); }
});
test('long mixed Arabic text continues exactly at fixed print sizes with multi-page contents', { timeout: 180000 }, async () => {
  const folder = fs.mkdtempSync(path.join(os.tmpdir(), 'revision-book-rtl-test-'));
  try {
    const doc = book('pdf', 32); doc.language = 'ar';
    doc.quizzes[1].paragraphs[0].text = '« شمس » (soleil) commence par ش (shīn), le son « ch ».';
    doc.quizzes[0].paragraphs[0].text = ('الشرح الأصلي محفوظ مع المصطلح ATP ودرجة 70 °C. Une condition exacte.\n').repeat(90);
    const result = await render(doc, folder);
    assert.equal(result.status, 'completed'); assert.ok(result.book.tocPages > 1);
    assert.ok(result.book.verification.verifiedSegments > 32); assert.ok(result.book.verification.bidiSegments > 0);
    const layout = JSON.parse(fs.readFileSync(path.join(folder, 'book-layout.json')));
    const parts = layout.pages.flatMap(p => p.items || []).filter(i => i.type === 'paragraph' && i.q === 0);
    assert.equal(parts.map(p => doc.quizzes[0].paragraphs[0].text.slice(p.start, p.end)).join(''), doc.quizzes[0].paragraphs[0].text);
    assert.ok(parts.slice(1).every(p => p.continued));
  } finally { fs.rmSync(folder, { recursive: true, force: true }); }
});

test('a first paragraph that fits alone keeps its chapter heading when moved to a fresh page', { timeout: 120000 }, async () => {
  const { chromium } = require('../video-generator/node_modules/playwright');
  const { mount, measure } = require('./book-template');
  const doc = book('pdf', 2), folder = fs.mkdtempSync(path.join(os.tmpdir(), 'revision-book-heading-test-'));
  const browser = await chromium.launch({ headless: true });
  let found = false;
  try {
    const page = await browser.newPage(); await page.route('**/*', r => r.abort()); await mount(page, doc);
    for (let count = 50; count < 130; count++) {
      const text = 'Une explication conserve sa condition. '.repeat(count);
      await page.evaluate(text => { window.__book.quizzes[1].paragraphs[0] = text; }, text);
      const paragraph = { type: 'paragraph', q: 1, p: 0, start: 0, end: text.length, continued: false };
      if (await measure(page, { kind: 'content', items: [paragraph] }) && !await measure(page, { kind: 'content', items: [{ type: 'chapter', q: 1 }, paragraph] })) {
        doc.quizzes[1].paragraphs[0].text = text; found = true; break;
      }
    }
  } finally { await browser.close(); }
  try {
    assert.equal(found, true, 'A near-page-size fixture was measured.');
    await render(doc, folder);
    const layout = JSON.parse(fs.readFileSync(path.join(folder, 'book-layout.json')));
    assert.ok(layout.pages.filter(p => p.kind === 'content').every(p => p.items.at(-1).type === 'paragraph'));
    assert.ok(layout.pages.some(p => p.items?.[0]?.type === 'chapter' && p.items[0].q === 1));
  } finally { fs.rmSync(folder, { recursive: true, force: true }); }
});
