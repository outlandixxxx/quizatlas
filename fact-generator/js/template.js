/* MaroQuiz — "Le saviez-vous ?" reel engine.
 *
 *   await window.setData(row, { lang })  fills the template and returns the timeline
 *   window.renderFrame(t)                paints the frame at t seconds (pure function of t)
 *
 * A row is one line of the facts CSV/JSON, in French (jour, video, matiere,
 * accroche, fait, detail, source) or English/Arabic (day, video, major, hook,
 * fact, detail, source). Wrap words in *stars* to highlight them; numbers are
 * highlighted automatically.
 */
(() => {
  // ---------------------------------------------------------------- themes
  const ICONS = {
    code: '<path d="M22 18 8 32l14 14M42 18l14 14-14 14"/><path d="M36 12 28 52"/>',
    math: '<path d="M18 10v16M10 18h16M40 18h16M12 40l12 12M24 40 12 52M40 43h16M40 50h16"/>',
    physics: '<circle cx="32" cy="32" r="4.5" fill="currentColor"/><ellipse cx="32" cy="32" rx="25" ry="9.5"/><ellipse cx="32" cy="32" rx="25" ry="9.5" transform="rotate(60 32 32)"/><ellipse cx="32" cy="32" rx="25" ry="9.5" transform="rotate(-60 32 32)"/>',
    chemistry: '<path d="M25 7h14M27 7v18L13 50a5 5 0 0 0 4.4 7.4h29.2A5 5 0 0 0 51 50L37 25V7"/><path d="M19 41h26"/><circle cx="28" cy="49" r="2" fill="currentColor"/><circle cx="37" cy="46" r="1.6" fill="currentColor"/>',
    biology: '<path d="M21 6c0 13 22 13 22 26S21 45 21 58M43 6c0 13-22 13-22 26s22 13 22 26"/><path d="M24 13h16M24 51h16M28 22h8M28 42h8"/>',
    finance: '<ellipse cx="32" cy="15" rx="18" ry="7"/><path d="M14 15v11c0 3.9 8 7 18 7s18-3.1 18-7V15M14 26v11c0 3.9 8 7 18 7s18-3.1 18-7V26M14 37v11c0 3.9 8 7 18 7s18-3.1 18-7V37"/>',
    economics: '<path d="M8 56h48M8 8v48"/><path d="M15 44l12-13 9 8 17-19"/><path d="M42 20h11v11"/>',
  };
  const THEMES = {
    informatique: { accent: '#4f8cff', icon: 'code', pattern: ['</>', '{ }', '01', '=>', '( )', ';', '#', '&&'] },
    mathematiques: { accent: '#c27bff', icon: 'math', pattern: ['π', '∑', '√', '∞', '∫', 'x²', '≈', '÷'] },
    physique: { accent: '#ffa53a', icon: 'physics', pattern: ['E=mc²', 'λ', 'Ω', 'Δt', 'F=ma', 'c', 'ħ', 'v'] },
    chimie: { accent: '#22d3ee', icon: 'chemistry', pattern: ['H₂O', 'NaCl', 'CO₂', 'pH', 'O₂', 'Fe', 'C₆H₆', 'Au'] },
    svt: { accent: '#a3e635', icon: 'biology', pattern: ['ADN', 'ATP', 'O₂', 'ARN', 'CO₂', '46', 'Cellule', 'H₂O'] },
    finance: { accent: '#ffd23f', icon: 'finance', pattern: ['%', 'DH', '€', '$', '↗', '+12%', '£', '¥'] },
    economie: { accent: '#ff5d5d', icon: 'economics', pattern: ['PIB', '↗', '↘', '%', 'Offre', 'Demande', '€', 'DH'] },
    arabe: { accent: '#2ee59d', glyph: 'ض', glyphFont: 'Cairo', pattern: ['ض', 'ع', 'ب', 'ق', 'م', 'ك', 'ل', 'ن'] },
    francais: { accent: '#8b8cff', glyph: 'É', pattern: ['é', 'ç', 'à', 'è', 'ê', '«»', 'ô', 'œ'] },
    anglais: { accent: '#ff6bc1', glyph: 'Aa', pattern: ['Aa', 'the', 'ABC', 'W', "'s", 'Yes', 'Q', 'ing'] },
    espagnol: { accent: '#ff7f50', glyph: 'Ñ', pattern: ['ñ', '¿', '¡', 'll', 'Olé', 'á', 'ú', 'rr'] },
  };
  // names used in the FR / EN / AR files
  const ALIASES = {
    informatique: 'informatique', 'computer science': 'informatique', 'المعلوميات': 'informatique',
    mathematiques: 'mathematiques', mathematics: 'mathematiques', maths: 'mathematiques', 'الرياضيات': 'mathematiques',
    physique: 'physique', physics: 'physique', 'الفيزياء': 'physique',
    chimie: 'chimie', chemistry: 'chimie', 'الكيمياء': 'chimie',
    svt: 'svt', 'life sciences': 'svt', 'علوم الحياة والأرض': 'svt',
    finance: 'finance', 'المالية': 'finance',
    economie: 'economie', economics: 'economie', 'الاقتصاد': 'economie',
    arabe: 'arabe', arabic: 'arabe', 'اللغة العربية': 'arabe',
    francais: 'francais', french: 'francais', 'اللغة الفرنسية': 'francais',
    anglais: 'anglais', english: 'anglais', 'اللغة الإنجليزية': 'anglais',
    espagnol: 'espagnol', spanish: 'espagnol', 'اللغة الإسبانية': 'espagnol',
  };
  const TEXTS = {
    fr: { title: 'LE SAVIEZ-VOUS ?', factTab: 'LE FAIT', next: 'Attends la suite…', tag: 'EN PLUS…',
      source: 'SOURCE', cta: 'Teste tes connaissances gratuitement sur', sub: 'Abonne-toi : un nouveau fait chaque jour' },
    en: { title: 'DID YOU KNOW?', factTab: 'THE FACT', next: 'Wait for it…', tag: 'BONUS FACT',
      source: 'SOURCE', cta: 'Test your knowledge for free on', sub: 'Follow for a new fact every day' },
    ar: { title: 'هل تعلم؟', factTab: 'المعلومة', next: 'تابع…', tag: 'والمزيد…',
      source: 'المصدر', cta: 'اختبر معلوماتك مجانًا على', sub: 'تابعنا: معلومة جديدة كل يوم' },
  };

  // ---------------------------------------------------------------- helpers
  const $ = (s) => document.querySelector(s);
  const $$ = (s) => [...document.querySelectorAll(s)];
  const clamp = (x, a = 0, b = 1) => Math.min(b, Math.max(a, x));
  const prog = (t, start, dur) => clamp((t - start) / dur);
  const easeOutCubic = (x) => 1 - Math.pow(1 - x, 3);
  const easeOutExpo = (x) => (x >= 1 ? 1 : 1 - Math.pow(2, -10 * x));
  const easeInCubic = (x) => x * x * x;
  const easeInOut = (x) => (x < 0.5 ? 4 * x * x * x : 1 - Math.pow(-2 * x + 2, 3) / 2);
  const easeOutBack = (x, s = 1.7) => (x <= 0 ? 0 : 1 + (s + 1) * Math.pow(x - 1, 3) + s * Math.pow(x - 1, 2));
  const easeOutElastic = (x) => (x <= 0 ? 0 : x >= 1 ? 1 : Math.pow(2, -10 * x) * Math.sin((x * 10 - 0.75) * (2 * Math.PI / 3)) + 1);
  const lerp = (a, b, k) => a + (b - a) * k;
  const norm = (s) => String(s || '').trim().toLowerCase().normalize('NFD').replace(/[̀-ͯ]/g, '');
  const hex = (h) => [1, 3, 5].map((i) => parseInt(h.slice(i, i + 2), 16));
  const mix = (a, b, k) => { const A = hex(a); const B = hex(b); return `rgb(${A.map((v, i) => Math.round(B[i] + (v - B[i]) * k)).join(',')})`; };
  function seeded(seed) { let s = seed >>> 0; return () => { s = (s * 1664525 + 1013904223) >>> 0; return s / 4294967296; }; }
  const iconSvg = (name) => `<svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round">${ICONS[name]}</svg>`;

  // French typography: keep ? ! : ; » « attached to their word
  const tidy = (s) => String(s || '').replace(/\s+([?!:;»])/g, ' $1').replace(/«\s+/g, '« ').trim();

  /** Splits text into word spans; *stars* or numbers get a highlight marker. */
  function words(el, text) {
    el.innerHTML = '';
    let inMark = false;
    const out = [];
    tidy(text).split(/ +/).forEach((w, i, arr) => {
      let raw = w;
      let mark = inMark;
      if (raw.startsWith('*')) { raw = raw.slice(1); mark = true; inMark = true; }
      if (raw.replace(/[.,!?…» ]+$/, '').endsWith('*')) { raw = raw.replace(/\*(?=[.,!?…» ]*$)/, ''); inMark = false; }
      if (/\d/.test(raw)) mark = true;
      const span = document.createElement('span');
      span.className = 'word';
      if (mark) {
        // highlight the word itself, not its trailing punctuation
        const core = raw.replace(/[.,;:!?…»\u00a0]+$/, '');
        const hl = document.createElement('span');
        hl.className = 'mark';
        hl.textContent = core;
        span.appendChild(hl);
        span.appendChild(document.createTextNode(raw.slice(core.length)));
      } else span.textContent = raw;
      el.appendChild(span);
      if (i < arr.length - 1) el.appendChild(document.createTextNode(' '));
      out.push(span);
    });
    return out;
  }

  // ---------------------------------------------------------------- state
  let TL = null;
  let refs = null;
  let patternItems = [];
  let particles = [];
  let isRtl = false;

  function applyTheme(key) {
    const th = THEMES[key] || THEMES.informatique;
    const root = document.documentElement.style;
    root.setProperty('--accent', th.accent);
    root.setProperty('--bg1', mix(th.accent, '#070b16', 0.26));
    root.setProperty('--bg2', mix(th.accent, '#03050b', 0.06));
    const disc = $('#chip .disc');
    const wm = $('#watermark');
    if (th.icon) {
      disc.innerHTML = iconSvg(th.icon);
      wm.innerHTML = iconSvg(th.icon);
    } else {
      disc.innerHTML = `<span style="font-family:${th.glyphFont || 'Nunito'};line-height:1">${th.glyph}</span>`;
      wm.innerHTML = `<div class="glyph" style="font-family:${th.glyphFont || 'Nunito'}">${th.glyph}</div>`;
    }
    $('#quote').innerHTML = th.icon ? iconSvg(th.icon) : `<span style="font-family:${th.glyphFont || 'Nunito'};font-weight:1000;font-size:44px;line-height:1">${th.glyph}</span>`;

    // drifting symbols in the background
    const box = $('#pattern');
    box.innerHTML = '';
    const rnd = seeded(7 + key.length * 131);
    patternItems = [];
    for (let i = 0; i < 26; i++) {
      const span = document.createElement('span');
      span.textContent = th.pattern[i % th.pattern.length];
      if (th.glyphFont) span.style.fontFamily = th.glyphFont;
      const depth = 0.35 + rnd() * 0.65; // parallax: far symbols are small, faint and slow
      const it = {
        el: span, x: rnd() * 1080 - 60, y: rnd() * 2200, size: 34 + depth * 90, rot: (rnd() - 0.5) * 40,
        spin: (rnd() - 0.5) * 10, speed: 10 + depth * 34, sway: rnd() * 6.28, op: 0.05 + depth * 0.11,
      };
      span.style.fontSize = `${it.size}px`;
      box.appendChild(span);
      patternItems.push(it);
    }
    particles = [];
    for (let i = 0; i < 46; i++) particles.push({ x: rnd() * 1080, y: rnd() * 1920, r: 1.2 + rnd() * 3.2, sp: 14 + rnd() * 40, ph: rnd() * 6.28, tw: 0.6 + rnd() * 1.8 });
  }

  function fitPage(page, items) {
    // shrink the long texts until the page fits in the safe area
    for (let guard = 0; guard < 40 && page.scrollHeight > page.clientHeight + 1; guard++) {
      let changed = false;
      for (const [el, min] of items) {
        const size = parseFloat(getComputedStyle(el).fontSize);
        if (size > min) { el.style.fontSize = `${size - 2}px`; changed = true; }
      }
      if (!changed) break;
    }
  }

  window.setData = async (row, opts = {}) => {
    const lang = opts.lang || (row.jour !== undefined || row.matiere ? 'fr' : /[؀-ۿ]/.test(row.fact || '') ? 'ar' : 'en');
    const L = TEXTS[lang] || TEXTS.fr;
    isRtl = lang === 'ar';
    const reel = $('#reel');
    reel.classList.toggle('rtl', isRtl);
    reel.dir = isRtl ? 'rtl' : 'ltr';
    document.documentElement.lang = lang;

    const major = row.matiere ?? row.major ?? '';
    const key = row.theme || ALIASES[norm(major)] || ALIASES[String(major).trim()] || 'informatique';
    applyTheme(key);


    // title: per letter (latin) or per word (arabic keeps its letter joining)
    const title = $('#title');
    title.innerHTML = '';
    const titleText = L.title;
    const parts = isRtl ? titleText.split(/(\s+)/) : [...titleText];
    const chars = [];
    parts.forEach((p) => {
      if (/^\s+$/.test(p)) { title.appendChild(document.createTextNode(' ')); return; }
      const line = document.createElement('span');
      line.className = 'line';
      const ch = document.createElement('span');
      ch.className = 'ch';
      if (/[?؟]/.test(p) && !isRtl) { const em = document.createElement('em'); em.textContent = p; ch.appendChild(em); ch.dataset.q = '1'; } else ch.textContent = p;
      line.appendChild(ch);
      title.appendChild(line);
      chars.push(ch);
    });

    $('#chip .name').textContent = isRtl ? major : String(major).toUpperCase();
    $('#fact-tab').textContent = L.factTab;
    $('#next span').textContent = L.next;
    $('#tag').textContent = L.tag;
    $('#source-label').textContent = L.source;
    $('#source-text').textContent = row.source || '';
    $('#cta-line').textContent = L.cta;
    $('#sub span').textContent = L.sub;

    const hookEl = $('#hook');
    const factEl = $('#fact-text');
    const detailEl = $('#detail-text');
    [hookEl, factEl, detailEl].forEach((e) => { e.style.fontSize = ''; });
    const hookW = words(hookEl, row.accroche ?? row.hook);
    const factW = words(factEl, row.fait ?? row.fact);
    const detailW = words(detailEl, row.detail);

    await Promise.all(['400 40px Anton', '900 40px Nunito', '900 40px Cairo'].map((f) => document.fonts.load(f)));
    await document.fonts.ready;
    title.style.fontSize = '';
    for (let s = parseFloat(getComputedStyle(title).fontSize); title.scrollWidth > 870 && s > 60; s -= 2) title.style.fontSize = `${s}px`;
    $('#p2').hidden = false;
    $('#p1').hidden = false;
    fitPage($('#p1'), [[hookEl, 52], [factEl, 38]]);
    fitPage($('#p2'), [[detailEl, 40]]);

    // ---------------- timeline (seconds)
    const READ = 3.0;   // words per second a viewer reads comfortably on screen
    const STEP = 0.15;  // word reveal step
    const T = { title: 0.2, underline: 0.8, chip: 0.95, hook: 1.3 };
    T.hookEnd = T.hook + hookW.length * 0.11 + 0.25;
    T.card = T.hookEnd + 0.1;
    T.fact = T.card + 0.4;
    T.factEnd = T.fact + factW.length * STEP;
    T.p1 = Math.max(T.factEnd + 1.8, T.hook + (hookW.length + factW.length) / READ + 0.6);
    T.next = T.p1 - 1.7;
    const s = T.p1;
    T.tag = s + 0.25;
    T.detail = s + 0.6;
    T.detailText = s + 1.0;
    T.detailEnd = T.detailText + detailW.length * STEP;
    T.source = T.detailEnd + 0.2;
    T.cta = T.source + 0.35;
    T.btn = T.cta + 0.3;
    T.sub = T.btn + 0.5;
    T.end = Math.max(T.btn + 3.0, T.detail + detailW.length / READ + 2.6);

    refs = { chars, hookW, factW, detailW };
    TL = T;

    const cues = [
      [T.title, 'whoosh', { gain: 0.55 }],
      [T.title + 0.45, 'pop', { gain: 0.7 }],
      [T.chip, 'pop', { gain: 0.45, vary: true }],
      [T.hook, 'tick', { gain: 0.5 }],
      [T.card, 'whoosh', { gain: 0.35, vary: true }],
      [T.fact, { typing: { duration: T.factEnd - T.fact, cps: 7, gain: 0.45 } }],
      [T.next, 'tick', { gain: 0.45 }],
      [T.p1 - 0.38, 'whoosh', { gain: 0.95 }],
      [T.tag, 'pop', { gain: 0.85 }],
      [T.detail, 'whoosh', { gain: 0.35, vary: true }],
      [T.detailText, { typing: { duration: T.detailEnd - T.detailText, cps: 7, gain: 0.45 } }],
      [T.source, 'pop', { gain: 0.4, vary: true }],
      [T.btn, 'chime', { gain: 0.75 }],
    ];
    const sections = [
      { start: 0, end: T.p1, kind: 'hook', duck: 'reveal' },
      { start: T.p1, end: T.end, kind: 'score', duck: 'reveal' },
    ];
    renderFrame(0);
    return { duration: T.end, pages: [T.p1, T.end - T.p1], cover: T.p1 - 0.6, cues, sections, theme: key, lang };
  };

  // ---------------------------------------------------------------- paint
  const set = (el, tr, op) => { el.style.transform = tr; if (op !== undefined) el.style.opacity = op; };

  function paintBackground(t) {
    set($('#orb1'), `translate(${-40 + 220 * Math.sin(t * 0.23)}px, ${-380 + 140 * Math.cos(t * 0.19)}px)`, 0.95);
    set($('#orb2'), `translate(${-420 + 160 * Math.cos(t * 0.17)}px, ${1180 + 120 * Math.sin(t * 0.21)}px)`, 0.6);
    $('#grid').style.backgroundPosition = `0 ${-t * 12}px`;
    set($('#watermark'), `rotate(${-8 + 5 * Math.sin(t * 0.35)}deg) scale(${1 + 0.03 * Math.sin(t * 0.6)})`);
    for (const it of patternItems) {
      const y = ((it.y - t * it.speed) % 2200 + 2200) % 2200 - 160;
      const x = it.x + 18 * Math.sin(t * 0.5 + it.sway);
      set(it.el, `translate(${x}px, ${y}px) rotate(${it.rot + t * it.spin}deg)`, it.op);
    }
    const c = $('#particles');
    const g = c.getContext('2d');
    g.clearRect(0, 0, 1080, 1920);
    const accent = getComputedStyle(document.documentElement).getPropertyValue('--accent').trim();
    g.fillStyle = accent;
    for (const p of particles) {
      const y = ((p.y - t * p.sp) % 1980 + 1980) % 1980 - 30;
      const x = p.x + 12 * Math.sin(t * 0.7 + p.ph);
      g.globalAlpha = 0.18 + 0.32 * (0.5 + 0.5 * Math.sin(t * p.tw + p.ph));
      g.beginPath(); g.arc(x, y, p.r, 0, 6.283); g.fill();
    }
    g.globalAlpha = 1;
  }

  function paintWords(list, t, start, step, rise = 16) {
    list.forEach((w, i) => {
      const k = prog(t, start + i * step, 0.3);
      const e = easeOutCubic(k);
      w.style.opacity = e;
      w.style.transform = `translateY(${(1 - e) * rise}px)`;
      w.style.filter = k < 1 ? `blur(${(1 - e) * 6}px)` : 'none';
      const hl = w.firstElementChild;
      if (hl) hl.style.backgroundSize = `${easeOutCubic(prog(t, start + i * step + 0.25, 0.35)) * 100}% 100%`;
    });
  }

  function paintCard(el, t, start, floatPh) {
    const k = prog(t, start, 0.75);
    const e = easeOutBack(k, 1.1);
    const float = k >= 1 ? 6 * Math.sin((t - start) * 1.6 + floatPh) : 0;
    set(el, `perspective(1800px) translateY(${(1 - e) * 220 + float}px) rotateX(${(1 - easeOutCubic(k)) * 32}deg) scale(${0.92 + 0.08 * easeOutCubic(k)})`, easeOutCubic(prog(t, start, 0.35)));
    const sh = el.querySelector('.shine i');
    const ks = prog(t, start + 0.55, 0.9);
    sh.style.left = `${lerp(-260, 1000, easeInOut(ks))}px`;
    sh.style.opacity = ks > 0 && ks < 1 ? 1 : 0;
  }

  function paintPage1(t) {
    const T = TL;
    const p1 = $('#p1');
    // header
    const kh = easeOutCubic(prog(t, 0, 0.5));
    set(p1.querySelector('.header'), `translateY(${(1 - kh) * -40}px)`, kh);
    // title letters rise out of their line, the "?" lands with a bounce
    refs.chars.forEach((ch, i) => {
      const isQ = ch.dataset.q;
      const start = T.title + i * (isRtl ? 0.12 : 0.035) + (isQ ? 0.12 : 0);
      if (isQ) {
        const k = prog(t, start, 0.55);
        const wob = k >= 1 ? 4 * Math.sin((t - start) * 3) : 0;
        set(ch, `translateY(${(1 - easeOutCubic(k)) * 40}px) scale(${0.2 + 0.8 * easeOutElastic(k)}) rotate(${(1 - easeOutCubic(k)) * -90 + wob}deg)`, clamp(k * 3));
      } else {
        const k = easeOutExpo(prog(t, start, 0.55));
        set(ch, `translateY(${(1 - k) * 105}%)`);
      }
    });
    set($('#underline'), `scaleX(${easeOutExpo(prog(t, T.underline, 0.6))})`);
    // chip
    const kc = prog(t, T.chip, 0.6);
    set($('#chip'), `translateX(${(1 - easeOutCubic(kc)) * (isRtl ? 80 : -80)}px)`, easeOutCubic(clamp(kc * 2)));
    const kd = prog(t, T.chip + 0.1, 0.6);
    set($('#chip .disc'), `scale(${easeOutBack(kd, 2.2)}) rotate(${(1 - easeOutCubic(kd)) * -120}deg)`);
    // hook words pop
    refs.hookW.forEach((w, i) => {
      const k = prog(t, T.hook + i * 0.11, 0.42);
      set(w, `translateY(${(1 - easeOutCubic(k)) * 50}px) scale(${0.55 + 0.45 * easeOutBack(k, 2)})`, easeOutCubic(clamp(k * 2.5)));
    });
    // fact card
    paintCard($('#fact'), t, T.card, 0);
    const kt = prog(t, T.card + 0.3, 0.45);
    set($('#fact-tab'), `scale(${easeOutBack(kt, 2.4)}) rotate(${-3 * easeOutCubic(kt)}deg)`, clamp(kt * 3));
    paintWords(refs.factW, t, T.fact, 0.15);
    // "wait for it" with a nudging arrow
    const kn = prog(t, T.next, 0.5);
    set($('#next'), `translateY(${(1 - easeOutCubic(kn)) * 30}px)`, easeOutCubic(kn));
    set($('#next svg'), `translateX(${(isRtl ? -1 : 1) * 10 * Math.abs(Math.sin((t - T.next) * 4))}px)${isRtl ? ' scaleX(-1)' : ''}`);
    // lift away as the wipe arrives
    const ko = easeInCubic(prog(t, T.p1 - 0.4, 0.4));
    p1.style.transform = `translateY(${-140 * ko}px) scale(${1 - 0.04 * ko})`;
  }

  function paintPage2(t) {
    const T = TL;
    const p2 = $('#p2');
    // a small shake when the tag slams in
    const ksh = prog(t, T.tag + 0.18, 0.35);
    const shake = ksh > 0 && ksh < 1 ? Math.sin(ksh * 40) * (1 - ksh) * 10 : 0;
    p2.style.transform = `translate(${shake}px, ${shake * 0.4}px)`;
    const kh = easeOutCubic(prog(t, T.p1, 0.4));
    set(p2.querySelector('.header'), `translateY(${(1 - kh) * 60}px)`, kh);
    const kt = prog(t, T.tag, 0.45);
    set($('#tag'), `scale(${lerp(2.4, 1, easeOutBack(kt, 1.4))}) rotate(${lerp(-12, -2, easeOutCubic(kt))}deg)`, clamp(kt * 4));
    paintCard($('#detail'), t, T.detail, 1.4);
    paintWords(refs.detailW, t, T.detailText, 0.15);
    const kq = prog(t, T.detailEnd, 0.5);
    set($('#quote'), `scale(${easeOutBack(kq, 2.6)}) rotate(${(1 - easeOutCubic(kq)) * 180 + (kq >= 1 ? 6 * Math.sin((t - T.detailEnd) * 2.4) : 0)}deg)`);
    const ks = prog(t, T.source, 0.55);
    set($('#source'), `translateX(${(1 - easeOutCubic(ks)) * (isRtl ? 120 : -120)}px)`, easeOutCubic(ks));
    const kc = prog(t, T.cta, 0.5);
    set($('#cta-line'), `translateY(${(1 - easeOutCubic(kc)) * 30}px)`, easeOutCubic(kc));
    const kb = prog(t, T.btn, 0.9);
    const breathe = kb >= 1 ? 1 + 0.035 * Math.sin((t - T.btn - 0.9) * 4.2) : 1;
    set($('#cta .btn'), `scale(${easeOutElastic(kb) * breathe})`, clamp(kb * 5));
    const since = t - T.btn - 0.6;
    const pulse = since > 0 ? (since % 1.3) / 1.3 : 0;
    set($('#cta .ring'), `scale(${1 + 0.35 * easeOutCubic(pulse)}, ${1 + 0.7 * easeOutCubic(pulse)})`, since > 0 ? 0.8 * (1 - pulse) : 0);
    const shineK = since > 0 ? ((since + 0.2) % 2.2) / 0.8 : 0;
    $('#cta .btn .shine').style.left = `${lerp(-160, 560, clamp(shineK))}px`;
    const ksub = prog(t, T.sub, 0.5);
    set($('#sub'), `translateY(${(1 - easeOutCubic(ksub)) * 24}px)`, easeOutCubic(ksub));
    set($('#sub svg'), `rotate(${ksub >= 1 ? 16 * Math.sin((t - T.sub) * 9) * Math.max(0, 1 - ((t - T.sub - 0.5) % 2.4) / 0.8) : 0}deg)`);
  }

  function paintWipe(t) {
    const T = TL;
    const kin = easeInOut(prog(t, T.p1 - 0.38, 0.38));
    const kout = easeInOut(prog(t, T.p1 + 0.08, 0.42));
    const y = kout > 0 ? lerp(0, -2350, kout) : lerp(2150, 0, kin);
    $('#wipe').style.transform = `translateY(${y}px) skewY(-6deg)`;
    const kl = prog(t, T.p1 - 0.22, 0.6);
    const lop = kl <= 0 || kl >= 1 ? 0 : Math.sin(kl * Math.PI);
    set($('#wipe-logo'), `translateY(${lerp(80, -120, kl)}px) scale(${0.7 + 0.35 * Math.sin(kl * Math.PI)})`, Math.min(1, lop * 1.6));
  }

  window.renderFrame = (t) => {
    if (!TL) return;
    paintBackground(t);
    const onP1 = t < TL.p1;
    $('#p1').hidden = !onP1;
    $('#p2').hidden = onP1;
    if (onP1) paintPage1(t); else paintPage2(t);
    paintWipe(t);
    $('#progress .seg:nth-child(1) i').style.width = `${clamp(t / TL.p1) * 100}%`;
    $('#progress .seg:nth-child(2) i').style.width = `${clamp((t - TL.p1) / (TL.end - TL.p1)) * 100}%`;
  };

  window.REEL_THEMES = THEMES;
})();
