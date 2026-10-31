const fs = require('node:fs');
const { corrected, entries } = require('./corrected-content');
const normal = text => text.normalize('NFKC').replace(/[\s\u200b-\u200f\u202a-\u202e\u2066-\u2069\ufeff]/gu, '');
// Text extractors can return the mirrored glyph rather than the logical bracket
// in an RTL run. Canonicalize those pairs only in the RTL character check.
const letters = text => [...normal(text).replace(/[»›)\]}>]/gu, c => ({ '»': '«', '›': '‹', ')': '(', ']': '[', '}': '{', '>': '<' })[c])].sort().join('');
async function verifyBook(file, plan, layout, document) {
  const bytes = fs.readFileSync(file);
  if (bytes.length > 100 * 1024 * 1024) throw Error('PDF exceeds the 100 MB book limit. Select fewer quizzes.');
  if (bytes.subarray(0, 5).toString() !== '%PDF-' || !bytes.subarray(-1024).toString().includes('%%EOF')) throw Error('Incomplete PDF file. Retry generation.');
  const { getDocument } = await import('pdfjs-dist/legacy/build/pdf.mjs');
  const task = getDocument({ data: new Uint8Array(bytes), isEvalSupported: false, useSystemFonts: false });
  const content = corrected(document) ? document.quizzes.map(q => entries(q, document.language || 'fr')) : null;
  let pdf;
  let verifiedSegments = 0, bidiSegments = 0, links = 0;
  try {
    pdf = await task.promise;
    if (pdf.numPages !== plan.pages.length) throw Error(`PDF page count differs from layout (${pdf.numPages}/${plan.pages.length}).`);
    for (let index = 0; index < pdf.numPages; index++) {
      const page = await pdf.getPage(index + 1), view = page.getViewport({ scale: 1 });
      if (Math.abs(view.width - 595.28) > 1 || Math.abs(view.height - 841.89) > 1) throw Error('PDF page is not A4 portrait.');
      const text = await page.getTextContent(), items = text.items.filter(i => typeof i.str === 'string');
      if (!normal(items.map(i => i.str).join(''))) throw Error(`Unexpected blank PDF page ${index + 1}.`);
      for (const region of layout[index].regions) {
        const expected = (content ? content[region.q][region.e].parts[region.part].text : document.quizzes[region.q].paragraphs[region.p].text).slice(region.start, region.end);
        // PDF uses points from the bottom; the measured DOM uses CSS pixels from the top.
        const extracted = items.filter(i => {
          const x = i.transform[4], y = view.height - i.transform[5];
          return x >= region.x * .75 - 2 && x <= (region.x + region.width) * .75 + 2 && y >= region.y * .75 - 2 && y <= (region.y + region.height) * .75 + 2;
        }).map(i => i.str).join('');
        if (normal(extracted) !== normal(expected)) {
          // Shaped RTL extraction may use visual ordering. Exact DOM slices/order/bounds were
          // checked before printing; require all normalized characters in this same region too.
          if (!/[\u0600-\u06ff]/u.test(expected) || letters(extracted) !== letters(expected)) {
            throw Error(`PDF text verification failed on page ${index + 1}, quiz ${document.quizzes[region.q].source.quiz.id}, ${content ? 'question ' + (region.e + 1) + ' ' + content[region.q][region.e].parts[region.part].role : 'paragraph ' + (region.p + 1)}.`);
          }
          bidiSegments++;
        }
        verifiedSegments++;
      }
      if (plan.pages[index].kind === 'toc') {
        const annotations = await page.getAnnotations();
        for (const row of plan.pages[index].rows) {
          const expected = plan.chapters.find(c => c.quizId === document.quizzes[row.q].source.quiz.id);
          let found = false;
          for (const annotation of annotations.filter(a => a.subtype === 'Link' && a.dest === `chapter-${expected.quizId}`)) {
            const dest = typeof annotation.dest === 'string' ? await pdf.getDestination(annotation.dest) : annotation.dest;
            if (!dest) continue;
            const pageNumber = (typeof dest[0] === 'number' ? dest[0] : await pdf.getPageIndex(dest[0])) + 1;
            if (pageNumber === expected.page) { found = true; break; }
          }
          if (!found) throw Error(`Contents link does not reach quiz ${expected.quizId}'s page.`);
          links++;
        }
      }
      page.cleanup();
    }
    if (!bytes.includes(Buffer.from('/FontFile')) || !bytes.includes(Buffer.from('/ToUnicode'))) throw Error('PDF has no embedded searchable font mapping.');
    return { pageCount: pdf.numPages, verifiedSegments, bidiSegments, contentsLinks: links, a4: true, searchable: true, embeddedFonts: true };
  } finally { await task.destroy(); }
}
module.exports = { verifyBook, normal };
