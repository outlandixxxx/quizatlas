const fs = require('node:fs');
const path = require('node:path');
const { hash } = require('./job-schema');
const { corrected } = require('./corrected-content');
const { mount, assemble } = require('./book-template');
const { paginateBook } = require('./book-pagination');
const { verifyBook } = require('./book-verify');
const { atomicJson } = require('./jobs');
const slug = value => String(value).normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '').slice(0, 60) || 'revision';
async function renderBook(document, output, browser, record, signature, progress) {
  const name = document.quizzes.length === 1 ? `quiz-${document.quizzes[0].source.quiz.id}-${slug(document.quizzes[0].source.quiz.title)}` : `subject-${document.subject.id}-${slug(document.subject.name)}`;
  const file = `maroquiz-${corrected(document) ? 'corrected-questions-' : ''}${name}-${signature.slice(0, 12)}.pdf`, target = path.join(output, file);
  if (record.status === 'completed' && record.signature === signature && fs.existsSync(target) && hash(fs.readFileSync(target)) === record.hash) {
    progress('book_ready', 'Verified unchanged PDF retained.'); return;
  }
  Object.assign(record, { status: 'running', file, signature, error: null, pageCount: null });
  const page = await browser.newPage();
  try {
    await page.route('**/*', route => route.abort());
    progress('book_layout', 'Preparing A4 pages and contents…');
    await mount(page, document);
    const plan = await paginateBook(page, document), layout = await assemble(page, plan.pages);
    for (const [index, pageLayout] of layout.entries()) for (const r of pageLayout.regions) {
      const length = r.end - r.start;
      // assemble checks the actual DOM text as well as the page bounds.
      if (length <= 0) throw Error(`Empty paragraph segment on page ${index + 1}.`);
    }
    Object.assign(record, { plannedPages: plan.pages.length, chapters: plan.chapters, tocPages: plan.tocPages });
    progress('book_print', `Generating ${plan.pages.length} A4 pages…`);
    await page.pdf({ path: target + '.partial', format: 'A4', preferCSSPageSize: true, printBackground: true, tagged: true, outline: true, margin: { top: 0, right: 0, bottom: 0, left: 0 } });
    progress('book_verify', 'Verifying PDF pages, text, fonts and contents…');
    const verification = await verifyBook(target + '.partial', plan, layout, document);
    fs.renameSync(target + '.partial', target);
    atomicJson(path.join(output, 'book-layout.json'), { signature, pageNumbering: 'physical PDF pages; unnumbered cover is page 1', chapters: plan.chapters, pages: plan.pages, regions: layout.map(p => p.regions) });
    Object.assign(record, { status: 'completed', pageCount: verification.pageCount, bytes: fs.statSync(target).size, hash: hash(fs.readFileSync(target)), verification });
    progress('book_ready', 'Draft PDF ready.');
  } catch (error) {
    record.status = 'failed'; record.error = error.message;
    if (fs.existsSync(target + '.partial')) fs.unlinkSync(target + '.partial');
    progress('book_failed', error.message);
  } finally { await page.close(); }
}
module.exports = { renderBook };
