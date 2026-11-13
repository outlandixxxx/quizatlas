/* Exact text in, exact text out. Shared by Node timing/validation and Chromium. */
(function (root, factory) {
  if (typeof module === 'object') module.exports = factory();
  else root.FactsPresentation = factory();
})(typeof window === 'object' ? window : globalThis, function () {
  const wordChar = /[\p{L}\p{N}\p{M}_]/u;
  const clamp = n => Math.max(0, Math.min(1, n));
  const ease = n => 1 - (1 - clamp(n)) ** 3;
  const FADE = .32, DRAW = .48;

  function validSpan(text, span) {
    if (!span || !Number.isInteger(span.start) || !Number.isInteger(span.end)
      || span.start < 0 || span.end <= span.start || span.end > text.length
      || span.text !== text.slice(span.start, span.end) || !span.text.trim()
      || span.text !== span.text.trim()) return false;
    // Never cut a word, surrogate pair, combining mark or Arabic connection.
    if (/^[\p{M}\uDC00-\uDFFF]/u.test(span.text) || /[\uD800-\uDBFF]$/u.test(span.text)) return false;
    return !(wordChar.test(text[span.start - 1] || '') && wordChar.test(span.text[0]))
      && !(wordChar.test(text[span.end] || '') && wordChar.test(span.text.at(-1)));
  }

  function select(text, manual) {
    if (manual !== undefined) {
      if (!Array.isArray(manual) || manual.length > 2) throw Error('Choose at most two exact highlight spans.');
      const spans = manual.map(span => {
        if (!validSpan(text, span)) throw Error('A highlight must match complete original words exactly.');
        return { start: span.start, end: span.end, text: span.text };
      }).sort((a, b) => a.start - b.start);
      if (spans.some((s, i) => i && s.start < spans[i - 1].end)) throw Error('Highlight spans overlap.');
      return spans;
    }
    const candidates = [];
    const add = (regex, priority, capture = 0) => {
      for (const match of text.matchAll(regex)) {
        const value = capture ? match[capture].trim() : match[0], start = match.index + (capture ? match[0].lastIndexOf(value) : 0);
        const span = { start, end: start + value.length, text: value, priority };
        const before = text.slice(Math.max(0, start - 45), start);
        // Don't style fragments of URLs or detach an unrecognized range/negation.
        if (/[\p{L}\p{N}_/@^×÷*]$/u.test(before) || /[0-9٠-٩][.,٫٬]$/u.test(before)
          || /(?:https?:\/\/\S*|(?:not|no|pas|ليس|ليست|بين|between|entre)\s+)$/iu.test(before)
          || /\b(?:not|never|pas|jamais|moins|plus|inférieur|supérieur|between|entre)\b[^.!?؟;:\n]{0,18}$/iu.test(before)) continue;
        if (validSpan(text, span)) candidates.push(span);
      }
    };
    const number = '[+−±-]?[0-9٠-٩۰-۹]+(?:[.,٫٬][0-9٠-٩۰-۹]+)*(?:[ \\u00a0\\u202f][0-9٠-٩۰-۹]{3})*';
    const unit = '(?:%|٪|pour cent|percent|في المائة|بالمئة|km\\/s|m\\/s|km[²³23]?|cm[²³23]?|mm[²³23]?|m[²³23]?|°[CF]|k?Hz|[MGT]Hz|k?g|[kMGT]?W|[kMGT]?J|[kMGT]?B|Mo|Go|To|octets?|bytes?|litres?|liters?|secondes?|seconds?|minutes?|heures?|hours?|jours?(?: terrestres)?|days?|ans|years?|متر(?:ًا)?|كيلومتر(?:ًا)?|كيلوغرام(?:ًا)?|ثانية|ثوان[ٍي]?|درجة مئوية|يوم(?:ًا)?(?: أرضي(?:ًا)?)?|سنة|عام(?:ًا)?)';
    const qualifier = '(?:(?:not more than|not less than|no more than|no less than|at least|at most|up to|more than|less than|about|around|approximately|exactly|almost|above|below|over|under|pas plus de|pas moins de|au moins|au plus|au maximum|au minimum|inférieur à|supérieur à|plus de|moins de|près de|environ|exactement|presque|jusqu[’\x27]à|ما يقارب|أكثر من|أقل من|على الأقل|على الأكثر|تصل إلى|حوالي|نحو)\\s+)?';
    const range = `(?:${number}\\s*(?:–|−|-|à|to)\\s*)?${number}`;
    add(new RegExp(`${qualifier}(?:[<>≤≥≈~]\\s*)?(?:(?:between|entre|بين)\\s+${number}\\s+(?:and|et|و)\\s*)?${range}\\s*${unit}(?:\\s+(?:par|per)\\s+(?:secondes?|seconds?|heures?|hours?))?(?:\\s+(?:au plus|au moins|maximum|minimum|at most|at least))?(?![\\p{L}\\p{N}\\p{M}/^·])`, 'giu'), 100);
    add(/(?:en|depuis|in|since|عام|سنة)\s+(?:1[0-9]{3}|20[0-9]{2}|[١۱][٠-٩۰-۹]{3}|[٢۲][٠۰][٠-٩۰-۹]{2})(?![\p{L}\p{N}])/giu, 80);
    const month = '(?:janvier|février|mars|avril|mai|juin|juillet|août|septembre|octobre|novembre|décembre|January|February|March|April|May|June|July|August|September|October|November|December|يناير|فبراير|مارس|أبريل|مايو|يونيو|يوليو|أغسطس|سبتمبر|أكتوبر|نوفمبر|ديسمبر)';
    add(new RegExp(`(?:[0-9٠-٩]{1,2}\\s+${month}|${month}\\s+[0-9]{1,2},?)\\s+[0-9٠-٩]{4}`, 'giu'), 95);
    const formula = /[A-Za-zΑ-ω][A-Za-zΑ-ω0-9_₀-₉]{0,7}\s*=\s*[A-Za-zΑ-ω0-9][A-Za-zΑ-ω0-9_₀-₉⁰¹²³⁴⁵⁶⁷⁸⁹⁺⁻^]*(?:\s*[+−×÷*/-]\s*[A-Za-zΑ-ω0-9][A-Za-zΑ-ω0-9_₀-₉⁰¹²³⁴⁵⁶⁷⁸⁹⁺⁻^]*)*/gu;
    for (const match of text.matchAll(formula)) {
      // Unsupported decimal/function/exponent syntax is left entirely unstyled.
      const tail = text.slice(match.index + match[0].length);
      if (/^(?:[.,٫][0-9]|\s*[({^=+−×÷*/≤≥≠≈-]|\s+(?:sin|cos|tan|log|ln|exp)\b)/u.test(tail)) continue;
      const span = { start: match.index, end: match.index + match[0].length, text: match[0], priority: 90 };
      if (validSpan(text, span)) candidates.push(span);
    }
    // Only explicitly introduced terms, never arbitrary capitalized words.
    add(/(?:appelé[e]?|nommé[e]?|terme|désigne|signifie|called|known as|term|means|مصطلح|يسمى|يُسمّى|تعني|يعني)\s+[«“"]([^«»“”"\n]{2,65})[»”"]/giu, 70, 1);
    const chosen = [];
    for (const span of candidates.sort((a, b) => b.priority - a.priority || (b.end - b.start) - (a.end - a.start) || a.start - b.start)) {
      if (chosen.some(s => s.text === span.text || (span.start < s.end && span.end > s.start))) continue;
      chosen.push(span);
      if (chosen.length === 2) break;
    }
    return chosen.sort((a, b) => a.start - b.start).map(({ start, end, text }) => ({ start, end, text }));
  }

  function pieces(text, limit, protectedSpans = [], sentenceThreshold = Math.min(35, limit / 3)) {
    if (!text) return [];
    const result = []; let start = 0, last = 0;
    // Break only after whitespace, preserving every character and formula.
    for (const match of text.matchAll(/\s+/gu)) {
      const end = match.index + match[0].length;
      if (protectedSpans.some(s => end > s.start && end < s.end)) continue;
      const sentence = /[.!?؟؛;]\s*$/u.test(text.slice(start, end));
      if (end - start > limit && last > start) {
        result.push({ start, end: last, text: text.slice(start, last) }); start = last;
      }
      last = end;
      if ((sentence && end - start >= sentenceThreshold) || end - start >= limit) {
        result.push({ start, end, text: text.slice(start, end) }); start = end;
      }
    }
    if (start < text.length) result.push({ start, end: text.length, text: text.slice(start) });
    return result;
  }
  const paginate = (text, limit = 240, spans = select(text)) => pieces(text, limit, spans, limit * .65);
  const groups = (text, spans = select(text)) => pieces(text, 100, spans);
  const within = (spans, page) => spans.filter(s => s.start >= page.start && s.end <= page.end)
    .map(s => ({ start: s.start - page.start, end: s.end - page.start, text: s.text }));

  function mount(el, text, highlights) {
    const spans = select(text, highlights), parts = groups(text, spans);
    el.replaceChildren(); el.classList.add('fact-presentation');
    const nodes = parts.map(part => {
      const node = el.ownerDocument.createElement('span'); node.className = 'fact-group';
      node.textContent = part.text; el.appendChild(node); return node;
    });
    let lines = [];
    function layout() {
      for (const line of lines) line.svg.remove();
      lines = [];
      const host = el.getBoundingClientRect(), sx = host.width / el.offsetWidth, sy = host.height / el.offsetHeight;
      if (!(sx > 0 && sy > 0)) return;
      spans.forEach((span, index) => {
        const startGroup = parts.findIndex(p => span.start >= p.start && span.start < p.end);
        const endGroup = parts.findIndex(p => span.end > p.start && span.end <= p.end);
        if (startGroup < 0 || endGroup < 0) return;
        const range = el.ownerDocument.createRange();
        range.setStart(nodes[startGroup].firstChild, span.start - parts[startGroup].start);
        range.setEnd(nodes[endGroup].firstChild, span.end - parts[endGroup].start);
        const rects = [...range.getClientRects()].filter(r => r.width > .1 && r.height > .1).sort((a, b) => a.left - b.left);
        // Multiline or visually disjoint bidirectional ranges: omit safely.
        if (!rects.length || rects.some(r => Math.abs(r.top - rects[0].top) > 2 * sy)
          || rects.some((r, i) => i && r.left > rects[i - 1].right + 5 * sx)) return;
        const x = (rects[0].left - host.left) / sx, width = (Math.max(...rects.map(r => r.right)) - rects[0].left) / sx;
        const font = parseFloat(getComputedStyle(el).fontSize);
        const y = Math.min(el.offsetHeight - 2, (rects[0].bottom - host.top) / sy - font * .06);
        const rtl = getComputedStyle(el).direction === 'rtl';
        const svg = el.ownerDocument.createElementNS('http://www.w3.org/2000/svg', 'svg');
        svg.setAttribute('class', 'fact-underlines'); svg.setAttribute('aria-hidden', 'true');
        svg.setAttribute('viewBox', `0 0 ${el.offsetWidth} ${el.offsetHeight}`);
        const path = el.ownerDocument.createElementNS(svg.namespaceURI, 'path');
        path.setAttribute('d', `M ${rtl ? x + width : x} ${y} Q ${x + width * .48} ${y + 2.2} ${rtl ? x : x + width} ${y - .4}`);
        path.setAttribute('pathLength', '1'); path.setAttribute('stroke-width', String(Math.max(1.8, Math.min(2.8, font * .045))));
        path.dataset.text = span.text; path.dataset.direction = rtl ? 'rtl' : 'ltr';
        path.style.opacity = index ? '.72' : '.95';
        svg.appendChild(path); el.appendChild(svg);
        lines.push({ svg, path, group: endGroup, span });
      });
    }
    function paint(time, start, visibleBy) {
      const window = Math.max(FADE, visibleBy - start), total = Math.max(1, text.length);
      const begins = parts.map(p => start + p.start / total * Math.max(0, window - FADE));
      nodes.forEach((node, i) => { node.style.opacity = String(ease((time - begins[i]) / FADE)); });
      lines.forEach(line => {
        const at = begins[line.group] + FADE + .08;
        const amount = ease((time - at) / DRAW);
        line.path.style.strokeDashoffset = String(1 - amount);
        line.svg.style.visibility = amount > 0 ? 'visible' : 'hidden';
      });
    }
    return { layout, paint, spans, parts, get lines() { return lines; } };
  }
  return { select, validSpan, paginate, groups, within, mount, FADE, DRAW };
});
