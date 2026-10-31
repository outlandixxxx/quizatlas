/** Shared corrected-entry flow for the existing PNG and A4 renderers. No font shrinking. */
async function paginateCorrected(groups, fits, maxPages) {
  const pages = []; let current = [];
  const flush = () => { if (current.length) pages.push(current); current = []; if (pages.length > maxPages) throw Error(`Selection exceeds the ${maxPages}-page safety limit. Select fewer quizzes.`); };
  const fresh = () => { const heading = current.at(-1)?.type === 'chapter' ? current.pop() : null; flush(); if (heading) current.push(heading); };
  async function flow(parts) {
    for (const part of parts) {
      if (part.type === 'chapter') { current.push(part); continue; }
      let start = 0;
      while (start < part.text.length) {
        const { text, ...reference } = part;
        const segment = { ...reference, start, end: text.length };
        if (await fits([...current, segment])) { current.push(segment); break; }
        if (current.some(i => i.type === 'corrected') && await fits([segment])) { fresh(); continue; }
        const boundaries = [...new Intl.Segmenter(undefined, { granularity: 'grapheme' }).segment(text.slice(start))].map(g => start + g.index + g.segment.length);
        let low = 0, high = boundaries.length - 1, best = start;
        while (low <= high) {
          const middle = (low + high) >>> 1, end = boundaries[middle];
          if (await fits([...current, { ...segment, end }])) { best = end; low = middle + 1; } else high = middle - 1;
        }
        if ((best === start || best - start < 50) && current.some(i => i.type === 'corrected')) { fresh(); continue; }
        if (best === start) throw Error('Question/header cannot fit at the fixed readable size. Review this source or select fewer quizzes.');
        const prefix = text.slice(start, best), boundary = [...prefix.matchAll(/\s+|[.!?؟؛。]\s*/gu)].at(-1);
        if (boundary && boundary.index + boundary[0].length > prefix.length / 2) best = start + boundary.index + boundary[0].length;
        current.push({ ...segment, end: best }); flush(); start = best;
      }
    }
  }
  for (const group of groups) {
    const whole = group.map(({ text, ...r }) => r.type === 'chapter' ? r : ({ ...r, start: 0, end: text.length }));
    if (await fits([...current, ...whole])) { current.push(...whole); continue; }
    if (current.length && await fits(whole)) { flush(); current.push(...whole); continue; }
    // Keep question + answers together whenever they fit; the explanation may flow onward.
    const split = group.findIndex(p => p.role === 'explanation');
    const stem = group.slice(0, split), stemLayout = whole.slice(0, split);
    if (await fits([...current, ...stemLayout])) current.push(...stemLayout);
    else if (await fits(stemLayout)) { flush(); current.push(...stemLayout); }
    else {
      const lead = stemLayout.slice(0, stemLayout[0]?.type === 'chapter' ? 3 : 2);
      if (current.length && await fits(lead) && !await fits([...current, ...lead])) flush();
      await flow(stem);
    }
    await flow(group.slice(split));
  }
  flush();
  // Verify exact slices and complete entry/part ordering, independently of page boundaries.
  const actual = pages.flat().filter(i => i.type === 'corrected'), expected = groups.flat().filter(i => i.type === 'corrected');
  const key = i => `${i.q}:${i.e}:${i.part}`, order = [], reconstruction = new Map();
  const texts = new Map(expected.map(i => [key(i), i.text]));
  for (const s of actual) { const k = key(s); if (order.at(-1) !== k) order.push(k); reconstruction.set(k, (reconstruction.get(k) || '') + texts.get(k).slice(s.start, s.end)); }
  if (order.join(',') !== expected.map(key).join(',') || expected.some(i => reconstruction.get(key(i)) !== i.text)) throw Error('Corrected pagination changed, lost or duplicated question/answer/explanation text.');
  if (pages.some(p => p.at(-1)?.type === 'chapter')) throw Error('A chapter heading was separated from its first question.');
  return pages;
}
function groupsFor(entries, q = 0, chapter = false) {
  return entries.map((entry, e) => [
    ...(chapter && e === 0 ? [{ type: 'chapter', q }] : []),
    ...entry.parts.map((part, index) => ({ type: 'corrected', q, e, part: index, role: part.role, text: part.text })),
  ]);
}
module.exports = { paginateCorrected, groupsFor };
