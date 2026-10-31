/* One timing model used by the estimate, both templates and render metadata. */
(function (root, factory) {
  if (typeof module === 'object') module.exports = factory();
  else root.FactsTiming = factory();
})(typeof window === 'object' ? window : globalThis, function () {
  const words = text => String(text || '').trim().split(/\s+/u).filter(Boolean).length;
  const reading = (text, lang, short = false) => Math.max(words(text) / (lang === 'ar' ? 2.5 : short ? 3 : 2.7), String(text || '').length / (short ? 19 : 17));
  function shortTiming(row, lang, last = true) {
    const hook = row.hook || row.accroche || '';
    const fact = row.fact || row.fait || '';
    const detail = row.detail || '';
    const T = { title: 0.2, underline: 0.8, chip: 0.95, hook: 1.3 };
    T.hookEnd = T.hook + words(hook) * 0.11 + 0.25;
    T.card = T.hookEnd + 0.1;
    T.fact = T.card + 0.4;
    T.factEnd = T.fact + words(fact) * 0.15;
    T.p1 = Math.max(T.factEnd + 1.8, T.hook + reading(hook + ' ' + fact, lang, true) + 0.6);
    T.next = T.p1 - 1.7;
    T.tag = T.p1 + 0.25;
    T.detail = T.p1 + 0.6;
    T.detailText = T.p1 + 1;
    T.detailEnd = T.detailText + words(detail) * 0.15;
    T.source = T.detailEnd + 0.2;
    T.cta = T.source + 0.35;
    T.btn = T.cta + 0.3;
    T.sub = T.btn + 0.5;
    T.end = detail.trim()
      ? Math.max(T.btn + (last ? 3 : 0.6), T.detail + reading(detail, lang, true) + (last ? 2.6 : 0.6))
      : last ? T.btn + 3 : T.p1 + 0.5;
    return T;
  }
  function chunks(text, limit = 240) {
    const result = [];
    let line = '';
    for (const word of String(text || '').trim().split(/\s+/u)) {
      if (line && line.length + word.length + 1 > limit) { result.push(line); line = ''; }
      line += (line ? ' ' : '') + word;
    }
    if (line) result.push(line);
    return result;
  }
  const hook = lang => ({ fr: 'Le saviez-vous ?', ar: 'هل تعلم؟', en: 'Did you know?' })[lang];
  function shortRow(doc, fact) {
    return { major: doc.major.name, hook: hook(doc.language), fact: fact.text, detail: fact.detail, source: fact.source_url || '', lang: doc.language };
  }
  function plan(doc) {
    const scenes = [];
    let at = 0;
    const add = (kind, duration, extra = {}) => { scenes.push({ kind, start: at, duration, ...extra }); at += duration; };
    if (doc.type === 'facts-short') {
      doc.facts.forEach((fact, index) => {
        const row = shortRow(doc, fact);
        const timing = shortTiming(row, doc.language, index === doc.facts.length - 1);
        add('short', timing.end, { fact, row, index, timing });
      });
    } else {
      add('intro', 3.4 + Math.min(reading(doc.major.name, doc.language) * 0.2, 1));
      let subject = null;
      doc.facts.forEach((fact, index) => {
        if (doc.facts.length >= 8 && subject !== fact.subject_id) add('chapter', 1.8 + reading(fact.subject_name, doc.language) * 0.2, { fact, index });
        subject = fact.subject_id;
        const pages = [...chunks(fact.text).map(text => ({ text, explanation: false })), ...chunks(fact.detail).map(text => ({ text, explanation: true }))];
        pages.forEach((page, pageIndex) => add('fact', 1.35 + reading(page.text, doc.language) + 0.6, { fact, index, pageIndex, pageCount: pages.length, ...page }));
      });
      add('outro', 3.6);
    }
    return { scenes, estimatedDuration: at, shortTooLong: doc.type === 'facts-short' && at > 60, timingVersion: doc.type === 'facts-long' ? 2 : 1 };
  }
  // Animation cues follow the YouTube quiz's intro, panel montage and logo wipe.
  function longCues(scene) {
    const events = scene.kind === 'intro'
      ? [[0, 'whoosh', { gain: .3 }], [.75, 'whoosh', { gain: .3 }], [1.05, 'sting', { gain: .22 }], [1.5, 'pop', { gain: .25 }]]
      : scene.kind === 'outro'
        ? [[0, 'whoosh', { gain: .25 }], [.4, 'pop', { gain: .25 }], [1.2, 'chime', { gain: .35 }], [2.4, 'pop', { gain: .2 }]]
        : [[0, 'whoosh', { gain: .25 }], [.35, 'pop', { gain: .2 }], [.65, 'whoosh', { gain: .2 }]];
    if (scene.kind !== 'outro') events.push([scene.duration - .42, 'whoosh', { gain: .25 }]);
    return events;
  }
  return { words, reading, shortTiming, shortRow, plan, longCues };
});
