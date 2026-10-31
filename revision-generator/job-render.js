const fs = require('node:fs');
const path = require('node:path');
const { chromium } = require('../video-generator/node_modules/playwright');
const { validateRevisionJob, identity, hash } = require('./job-schema');
const { fingerprint, atomicJson } = require('./jobs');
const { template, setHeader, paint } = require('./template');
const { paginate } = require('./pagination');
const { corrected, entries } = require('./corrected-content');
const { writeZip } = require('./zip');
const slug = text => String(text).normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '').slice(0, 65) || 'notes';
async function render(document, output) {
  validateRevisionJob(document); fs.mkdirSync(output, { recursive: true });
  const signature = hash([identity(document), fingerprint()]), manifestFile = path.join(output, 'manifest.json');
  let manifest;
  try { const saved = JSON.parse(fs.readFileSync(manifestFile, 'utf8')); if (saved.signature === signature) manifest = saved; } catch {}
  if (!manifest) manifest = {
    formatVersion: 'revision-catalogue-v1', signature, draft: true, mode: document.output_mode || 'png', contentMode: document.content_mode || 'explanations', major: document.major, subject: document.subject,
    quizzes: document.quizzes.map((q, index) => ({ order: index + 1, quizId: q.source.quiz.id, title: q.source.quiz.title,
      folder: `${String(index + 1).padStart(3, '0')}-quiz-${q.source.quiz.id}-${slug(q.source.quiz.title)}`,
      sourceCount: q.source.notes.length, sourceQuestionIds: q.source.notes.map(n => n.question_id),
      sourceHash: hash({ ...q.source, meta: { ...q.source.meta, exported_at: undefined } }),
      draftVersion: q.version, draftHash: hash(q.paragraphs), mappings: q.paragraphs.map(p => ({ paragraphId: p.id, sourceQuestionIds: p.sourceQuestionIds })),
      reviewStatus: 'draft', issues: q.issues, status: 'queued', pages: null, images: [] })),
  };
  const png = manifest.mode !== 'pdf', pdf = manifest.mode !== 'png';
  if (pdf) manifest.book ||= { status: 'queued' };
  manifest.status = 'running';
  const save = () => atomicJson(manifestFile, manifest);
  const progress = (message, quizId, image, stage = 'images') => {
    manifest.stage = stage; save(); process.stdout.write('REVISION_PROGRESS ' + JSON.stringify({ stage, message, currentQuiz: quizId, currentImage: image }) + '\n');
  };
  progress(png ? 'Preparing draft images…' : 'Preparing draft book…', undefined, undefined, png ? 'images' : 'book_layout');
  const browser = await chromium.launch({ headless: true, args: ['--disable-dev-shm-usage'] });
  try {
    if (png) {
    const renderer = corrected(document) ? require('./corrected-images') : { template, setHeader, paint, paginate };
    const page = await browser.newPage({ viewport: { width: 1080, height: 1350 }, deviceScaleFactor: 1 });
    await page.route('**/*', route => route.abort());
    await page.setContent(renderer.template()); await page.evaluate(() => document.fonts.ready);
    for (const [index, quiz] of document.quizzes.entries()) {
      const record = manifest.quizzes[index]; record.status = 'running'; record.error = null;
      const folder = path.join(output, record.folder); fs.mkdirSync(folder, { recursive: true });
      try {
        await renderer.setHeader(page, document, quiz);
        const content = corrected(document) ? entries(quiz, document.language || 'fr') : null;
        if (!record.pages) record.pages = await renderer.paginate(page, quiz.paragraphs);
        for (const [pageIndex, segments] of record.pages.entries()) {
          const file = `${String(pageIndex + 1).padStart(3, '0')}.png`, filePath = path.join(folder, file);
          let image = record.images[pageIndex];
          if (image?.status === 'completed' && fs.existsSync(filePath) && hash(fs.readFileSync(filePath)) === image.hash) continue;
          image = { page: pageIndex + 1, file, status: 'running', hash: null, error: null }; record.images[pageIndex] = image;
          progress(`Quiz ${index + 1}/${document.quizzes.length} · image ${pageIndex + 1}/${record.pages.length}`, record.quizId, pageIndex + 1);
          try {
            const check = await renderer.paint(page, segments, pageIndex + 1, record.pages.length);
            if (!check.fits || check.texts.some((text, i) => text !== (content ? content[segments[i].e].parts[segments[i].part].text.slice(segments[i].start, segments[i].end) : segments[i].text))) throw Error('Image bounds or exact source text verification failed.');
            const png = await page.screenshot({ type: 'png', animations: 'disabled' });
            if (png.readUInt32BE(16) !== 1080 || png.readUInt32BE(20) !== 1350) throw Error('Revision image dimensions differ from 1080 × 1350.');
            fs.writeFileSync(filePath + '.partial', png); fs.renameSync(filePath + '.partial', filePath);
            Object.assign(image, { status: 'completed', hash: hash(png), fontSize: check.fontSize });
          } catch (error) { image.status = 'failed'; image.error = error.message; }
          progress('Draft image processed.', record.quizId, pageIndex + 1);
        }
        record.status = record.images.length === record.pages.length && record.images.every(i => i.status === 'completed') ? 'completed' : 'failed';
        if (record.status === 'failed') record.error = 'Some images failed. Retry failed outputs.';
        else {
          atomicJson(path.join(folder, 'quiz-index.json'), indexRecord(record));
          writeZip(path.join(folder, 'quiz.zip'), [
            { name: 'quiz-index.json', path: path.join(folder, 'quiz-index.json') },
            ...record.images.map(i => ({ name: i.file, path: path.join(folder, i.file) })),
          ]);
        }
      } catch (error) { record.status = 'failed'; record.error = error.message; }
      progress(`Quiz ${index + 1}/${document.quizzes.length} processed.`, record.quizId);
    }
    await page.close();
    }
    if (pdf) {
      const { renderBook } = require('./book-render');
      await renderBook(document, output, browser, manifest.book, signature, (stage, message) => progress(message, undefined, undefined, stage));
      if (!png) for (const record of manifest.quizzes) { record.status = manifest.book.status; record.error = manifest.book.error; }
    }
  } finally { await browser.close(); }
  manifest.status = manifest.quizzes.every(q => q.status === 'completed') && (!pdf || manifest.book.status === 'completed') ? 'completed' : 'failed'; save();
  const catalogue = { formatVersion: manifest.formatVersion, draft: true, mode: manifest.mode, contentMode: manifest.contentMode, status: manifest.status, partial: manifest.status !== 'completed', major: manifest.major, subject: manifest.subject, book: manifest.book, quizzes: manifest.quizzes.map(indexRecord) };
  const indexPath = path.join(output, 'catalogue-index.json'); atomicJson(indexPath, catalogue);
  const subjectFolder = `subject-${document.subject.id}-${slug(document.subject.slug)}`;
  writeZip(path.join(output, 'catalogue.zip'), [
    { name: `${subjectFolder}/catalogue-index.json`, path: indexPath },
    ...(manifest.book?.status === 'completed' ? [{ name: `${subjectFolder}/${manifest.book.file}`, path: path.join(output, manifest.book.file) }] : []),
    ...manifest.quizzes.flatMap(q => q.images.filter(i => i.status === 'completed').map(i => ({ name: `${subjectFolder}/${q.folder}/${i.file}`, path: path.join(output, q.folder, i.file) }))),
  ]);
  progress(manifest.status === 'completed' ? 'Draft outputs ready.' : 'Partial draft outputs ready; retry failed formats.', undefined, undefined, manifest.status === 'completed' ? 'completed' : 'failed');
  if (manifest.status !== 'completed') throw Error('One or more outputs failed. Successful unchanged outputs are retained for retry.');
  return manifest;
}
function indexRecord(q) {
  const { pages, ...record } = q;
  return { ...record, imageCount: pages?.length ?? null, sourceCoverage: 'all sources mapped; educational review still required' };
}
if (require.main === module) render(JSON.parse(fs.readFileSync(process.argv[2], 'utf8')), process.argv[3]).catch(error => { console.error(error.message); process.exitCode = 1; });
module.exports = { render };
