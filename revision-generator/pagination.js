const { paint } = require('./template');
async function paginate(page, paragraphs) {
  const pages = []; let current = [];
  const flush = () => { if (current.length) pages.push(current); current = []; if (pages.length > 5000) throw Error('Quiz exceeds the 5000 image safety limit.'); };
  for (const [index, paragraph] of paragraphs.entries()) {
    let remaining = paragraph.text, continued = false;
    while (remaining.length) {
      const segment = { paragraphId: paragraph.id, number: index + 1, text: remaining, continued, sourceQuestionIds: paragraph.sourceQuestionIds };
      if ((await paint(page, [...current, segment])).fits) { current.push(segment); break; }
      if (current.length) { flush(); continue; }
      // Pure layout continuation: exact characters, same paragraph ID/number, no editorial rewriting.
      const boundaries = [...new Intl.Segmenter(undefined, { granularity: 'grapheme' }).segment(remaining)].map(s => s.index + s.segment.length);
      let low = 0, high = boundaries.length - 1, best = 0;
      while (low <= high) {
        const middle = (low + high) >>> 1, end = boundaries[middle];
        if ((await paint(page, [{ ...segment, text: remaining.slice(0, end) }])).fits) { best = end; low = middle + 1; } else high = middle - 1;
      }
      if (!best) throw Error('Header/content cannot fit at the fixed readable font size. Shorten the header or review this paragraph.');
      const prefix = remaining.slice(0, best), matches = [...prefix.matchAll(/\s+|[.!?؟؛。]\s*/gu)];
      const boundary = matches.at(-1); if (boundary && boundary.index + boundary[0].length > best / 2) best = boundary.index + boundary[0].length;
      current.push({ ...segment, text: remaining.slice(0, best) }); flush(); remaining = remaining.slice(best); continued = true;
    }
  }
  flush();
  for (const paragraph of paragraphs) {
    if (pages.flat().filter(s => s.paragraphId === paragraph.id).map(s => s.text).join('') !== paragraph.text) throw Error('Pagination lost source text.');
  }
  return pages;
}
module.exports = { paginate };
