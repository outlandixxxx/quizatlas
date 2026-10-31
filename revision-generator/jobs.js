const fs = require('node:fs');
const path = require('node:path');
const { hash, VERSION } = require('./job-schema');
const OUTPUT = path.join(__dirname, 'output');
const outputDir = id => path.join(OUTPUT, id);
function fingerprint() {
  return hash([VERSION, ...['template.js', 'pagination.js', 'job-render.js', 'zip.js', 'book-template.js', 'book-pagination.js', 'book-render.js', 'book-verify.js', 'corrected-content.js', 'corrected-dom.js', 'corrected-pagination.js', 'corrected-images.js', 'package-lock.json', 'assets/PatrickHand-Regular.ttf', '../fact-generator/assets/fonts/Cairo.ttf', '../frontend/src/assets/images/maroquiz-logo-192.webp'].map(name => hash(fs.readFileSync(path.join(__dirname, name))))]);
}
function atomicJson(file, data) { fs.writeFileSync(file + '.partial', JSON.stringify(data, null, 2)); fs.renameSync(file + '.partial', file); }
function readManifest(id) { try { return JSON.parse(fs.readFileSync(path.join(outputDir(id), 'manifest.json'), 'utf8')); } catch { return null; } }
function publicProgress(id, jobStatus) {
  const m = readManifest(id); if (!m) return null;
  return {
    mode: m.mode || 'png',
    contentMode: m.contentMode || 'explanations',
    book: m.book ? { status: jobStatus === 'cancelled' && m.book.status === 'running' ? 'cancelled' : m.book.status, error: m.book.error, pageCount: m.book.pageCount, plannedPages: m.book.plannedPages, ready: m.book.status === 'completed' && fs.existsSync(path.join(outputDir(id), m.book.file)), bytes: m.book.bytes } : null,
    draft: true, totalQuizzes: m.quizzes.length, completedQuizzes: m.quizzes.filter(q => q.status === 'completed').length,
    totalImages: m.mode === 'pdf' ? 0 : m.quizzes.every(q => q.pages) ? m.quizzes.reduce((sum, q) => sum + q.pages.length, 0) : null,
    completedImages: m.quizzes.reduce((sum, q) => sum + (q.images || []).filter(i => i.status === 'completed').length, 0),
    catalogueReady: fs.existsSync(path.join(outputDir(id), 'catalogue.zip')),
    partial: m.status !== 'completed',
    quizzes: m.quizzes.map(q => ({ quizId: q.quizId, title: q.title, status: jobStatus === 'cancelled' && !['completed', 'failed'].includes(q.status) ? 'cancelled' : q.status, error: q.error, sourceCount: q.sourceCount,
      imageCount: q.pages?.length ?? null, zipReady: fs.existsSync(path.join(outputDir(id), q.folder, 'quiz.zip')),
      images: (q.images || []).map(image => ({ page: image.page, status: jobStatus === 'cancelled' && image.status === 'running' ? 'cancelled' : image.status, error: image.error })) })),
  };
}
function artifact(id, key) {
  const m = readManifest(id); if (!m) return null;
  if (key === 'pdf') {
    const b = m.book;
    if (b?.status !== 'completed' || !/^maroquiz-[a-z0-9-]+\.pdf$/.test(b.file || '')) return null;
    const file = path.join(outputDir(id), b.file);
    return fs.existsSync(file) && hash(fs.readFileSync(file)) === b.hash ? { file, mime: 'application/pdf' } : null;
  }
  if (key === 'catalogue') return { file: path.join(outputDir(id), 'catalogue.zip'), mime: 'application/zip' };
  if (key === 'index') return { file: path.join(outputDir(id), 'catalogue-index.json'), mime: 'application/json' };
  const match = /^(quiz|image)-(\d+)(?:-(\d+))?$/.exec(key); if (!match) return null;
  const q = m.quizzes.find(q => q.quizId === Number(match[2])); if (!q) return null;
  if (match[1] === 'quiz' && !match[3]) return { file: path.join(outputDir(id), q.folder, 'quiz.zip'), mime: 'application/zip' };
  const image = q.images?.find(i => i.page === Number(match[3]) && i.status === 'completed');
  return image ? { file: path.join(outputDir(id), q.folder, image.file), mime: 'image/png' } : null;
}
module.exports = { outputDir, fingerprint, atomicJson, readManifest, publicProgress, artifact };
