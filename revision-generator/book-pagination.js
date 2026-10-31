const { measure } = require('./book-template');
const { corrected, entries } = require('./corrected-content');
const { paginateCorrected, groupsFor } = require('./corrected-pagination');
const MAX_PAGES = 500;
async function paginateBook(page, doc) {
  let content = []; let items = [];
  if (corrected(doc)) {
    const groups = doc.quizzes.flatMap((quiz, q) => groupsFor(entries(quiz, doc.language || 'fr'), q, true));
    content = (await paginateCorrected(groups, items => measure(page, { kind: 'content', items }), MAX_PAGES - 1)).map(items => ({ kind: 'content', items }));
  } else {
  const fits = candidates => measure(page, { kind: 'content', items: candidates });
  const flush = () => { if (items.length) content.push({ kind: 'content', items }); items = []; if (content.length > MAX_PAGES - 1) throw Error('Book exceeds 500 A4 pages. Select fewer quizzes.'); };
  const nextPage = () => {
    // A near-page-length first paragraph may fit alone but not with its heading.
    // Carry a pending heading forward instead of leaving it orphaned behind.
    const heading = items.at(-1)?.type === 'chapter' ? items.pop() : null;
    flush(); if (heading) items.push(heading);
  };
  for (let q = 0; q < doc.quizzes.length; q++) {
    const quiz = doc.quizzes[q], heading = { type: 'chapter', q };
    const first = { type: 'paragraph', q, p: 0, start: 0, end: quiz.paragraphs[0].text.length, continued: false };
    if (items.length && !(await fits([...items, heading, first]))) {
      if (await fits([heading, first]) || !(await fits([...items, heading, { ...first, end: Math.min(first.end, 100) }]))) flush();
    }
    items.push(heading);
    for (let p = 0; p < quiz.paragraphs.length; p++) {
      const text = quiz.paragraphs[p].text; let start = 0;
      while (start < text.length) {
        const segment = { type: 'paragraph', q, p, start, end: text.length, continued: start > 0 };
        if (await fits([...items, segment])) { items.push(segment); break; }
        if (items.some(i => i.type === 'paragraph') && await fits([segment])) { nextPage(); continue; }
        const boundaries = [];
        for (const part of new Intl.Segmenter(undefined, { granularity: 'grapheme' }).segment(text.slice(start))) boundaries.push(start + part.index + part.segment.length);
        let low = 0, high = boundaries.length - 1, best = start;
        while (low <= high) {
          const middle = (low + high) >>> 1, end = boundaries[middle];
          if (await fits([...items, { ...segment, end }])) { best = end; low = middle + 1; } else high = middle - 1;
        }
        if ((best === start || best - start < 50) && items.some(i => i.type === 'paragraph')) { nextPage(); continue; }
        if (best === start) throw Error('Chapter heading or paragraph cannot fit at readable A4 size. Review this source.');
        const prefix = text.slice(start, best), breaks = [...prefix.matchAll(/\s+|[.!?؟؛。]\s*/gu)], boundary = breaks.at(-1);
        if (boundary && boundary.index + boundary[0].length > prefix.length / 2) best = start + boundary.index + boundary[0].length;
        items.push({ ...segment, end: best }); flush(); start = best;
      }
    }
  }
  flush();
  // Every source paragraph's layout slices must reconstruct its exact frozen text, once and in order.
  const segments = content.flatMap(p => p.items).filter(i => i.type === 'paragraph');
  const grouped = new Map(), actualOrder = [], expectedOrder = [];
  for (const segment of segments) {
    const key = `${segment.q}:${segment.p}`;
    if (actualOrder.at(-1) !== key) actualOrder.push(key);
    if (!grouped.has(key)) grouped.set(key, []);
    grouped.get(key).push(segment);
  }
  for (let q = 0; q < doc.quizzes.length; q++) for (let p = 0; p < doc.quizzes[q].paragraphs.length; p++) {
    const key = `${q}:${p}`; expectedOrder.push(key);
    const original = doc.quizzes[q].paragraphs[p].text, parts = grouped.get(key) || [];
    if (parts.map(i => original.slice(i.start, i.end)).join('') !== original) throw Error('Book pagination lost or duplicated paragraph text.');
  }
  if (actualOrder.join(',') !== expectedOrder.join(',')) throw Error('Book paragraph order differs from the frozen selection.');
  }
  const starts = content.flatMap((spec, index) => spec.items.filter(i => i.type === 'chapter').map(i => ({ q: i.q, contentPage: index })));
  let toc = [], stable = doc.quizzes.length === 1;
  if (!stable) for (let pass = 0; pass < 3; pass++) {
    const rows = starts.map(s => ({ q: s.q, page: 2 + toc.length + s.contentPage }));
    const next = []; let current = [];
    for (const row of rows) {
      if (!await measure(page, { kind: 'toc', rows: [...current, row] })) {
        if (!current.length) throw Error('A contents entry is too large for A4. Review its title.');
        next.push({ kind: 'toc', rows: current }); current = [];
        if (!await measure(page, { kind: 'toc', rows: [row] })) throw Error('A contents entry is too large for A4.');
      }
      current.push(row);
    }
    if (current.length) next.push({ kind: 'toc', rows: current });
    if (next.length === toc.length) { toc = next; stable = true; break; }
    toc = next;
  }
  if (!stable) throw Error('Contents pagination did not converge. Use a smaller selection.');
  const pages = [{ kind: 'cover' }, ...toc, ...content];
  if (pages.length > MAX_PAGES) throw Error('Book exceeds 500 A4 pages. Select fewer quizzes.');
  const chapters = starts.map(s => ({ quizId: doc.quizzes[s.q].source.quiz.id, title: doc.quizzes[s.q].source.quiz.title, page: 2 + toc.length + s.contentPage }));
  return { pages, chapters, tocPages: toc.length };
}
module.exports = { paginateBook, MAX_PAGES };
