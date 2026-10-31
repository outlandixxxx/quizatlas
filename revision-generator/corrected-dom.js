// Installed as trusted code in the existing Chromium page. All educational content uses textContent.
function installCorrectedDOM() {
  window.__drawCorrected = (parent, segment, entry, words, previous) => {
    const el = (tag, cls, text) => { const n = document.createElement(tag); if (cls) n.className = cls; if (text !== undefined) n.textContent = text; return n; };
    const part = entry.parts[segment.part], row = el('section', 'corrected-part'), p = el('p', 'corrected-text');
    const sameEntry = previous?.type === 'corrected' && previous.q === segment.q && previous.e === segment.e;
    if (part.role === 'question' || !sameEntry) {
      const heading = el('div', 'corrected-heading');
      heading.append(el('span', 'corrected-number', String(entry.number).padStart(2, '0')),
        el('span', '', words.question + ' ' + String(entry.number).padStart(2, '0') + (segment.start > 0 || part.role !== 'question' ? ' · ' + words.continued : '')));
      row.append(heading);
    }
    if (part.role !== 'question' && (part.role !== 'answer' || !sameEntry || entry.parts[previous.part].role !== 'answer')) {
      row.append(el('div', 'corrected-label', part.role === 'explanation' ? words.explanation : entry.parts.filter(p => p.role === 'answer').length > 1 ? words.answers : words.answer));
    }
    const text = part.text.slice(segment.start, segment.end); p.dir = 'auto';
    if (part.role === 'answer') { const mark = el('mark', '', text); p.append(mark); row.classList.add('corrected-answer'); }
    else p.textContent = text;
    row.append(p); parent.append(row); row.dir = getComputedStyle(p).direction; row.__source = segment;
    return row;
  };
}
module.exports = { installCorrectedDOM };
