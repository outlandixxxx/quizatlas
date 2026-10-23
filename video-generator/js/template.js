/**
 * MaroQuiz video template — animation engine.
 *
 * render.js calls window.renderFrame(scene, t, g) once per video frame:
 *   scene – one scene object built from the quiz JSON (see render.js buildTimeline)
 *   t     – seconds since the scene started
 *   g     – seconds since the video started (drives backgrounds)
 *
 * Every pixel is a pure function of (scene, t, g), so each screenshot is exact.
 * Edit timings and effects in the paint* functions below.
 *
 * Scenes: intro · hook · question (type → countdown → reveal) · milestone ·
 *         score · outro · thumb (thumbnail, rendered once)
 */
(() => {
  'use strict';

  const BRAND = { ink: '#29252f', cream: '#f7f5f1', orange: '#f47745', yellow: '#f2c94c', urgent: '#b84a24' };

  const $ = (s) => document.querySelector(s);
  const $$ = (s) => [...document.querySelectorAll(s)];
  const clamp = (v, a = 0, b = 1) => Math.min(Math.max(v, a), b);
  const lerp = (a, b, k) => a + (b - a) * k;
  const prog = (t, start, dur) => clamp((t - start) / dur);
  const easeOutCubic = (k) => 1 - Math.pow(1 - k, 3);
  const easeInCubic = (k) => k * k * k;
  const easeInOutCubic = (k) => (k < 0.5 ? 4 * k * k * k : 1 - Math.pow(-2 * k + 2, 3) / 2);
  const easeOutBack = (k) => { const c1 = 1.70158, c3 = c1 + 1; return k <= 0 ? 0 : 1 + c3 * Math.pow(k - 1, 3) + c1 * Math.pow(k - 1, 2); };
  const easeOutElastic = (k) => k <= 0 ? 0 : k >= 1 ? 1 : Math.pow(2, -10 * k) * Math.sin((k * 10 - 0.75) * (2 * Math.PI / 3)) + 1;
  // damped spring: overshoots a little, settles naturally (like a real object)
  const spring = (k) => (k <= 0 ? 0 : k >= 1 ? 1 : 1 - Math.exp(-6.5 * k) * Math.cos(10.5 * k));

  function style(el, { x = 0, y = 0, s = 1, r = 0, o = 1 } = {}) {
    el.style.transform = `translate(${x}px, ${y}px) scale(${s}) rotate(${r}deg)`;
    el.style.opacity = String(o);
  }

  function fitText(el, maxPx, minPx) {
    let size = maxPx;
    el.style.fontSize = size + 'px';
    while (size > minPx && (el.scrollHeight > el.clientHeight + 1 || el.scrollWidth > el.clientWidth + 1)) {
      size -= 1;
      el.style.fontSize = size + 'px';
    }
    return size;
  }

  function mulberry32(a) {
    return function () {
      a |= 0; a = a + 0x6D2B79F5 | 0;
      let t = Math.imul(a ^ a >>> 15, 1 | a);
      t = t + Math.imul(t ^ t >>> 7, 61 | t) ^ t;
      return ((t ^ t >>> 14) >>> 0) / 4294967296;
    };
  }

  // ---------- subject icons ----------
  // subject.icon in the JSON can be: an icon name from assets/icons (e.g. "math"),
  // a path to your own image (e.g. "assets/icons/my-icon.png"), or plain text ("</>").
  const ICON_NAMES = ['code', 'math', 'physics', 'chemistry', 'biology', 'geography', 'history', 'language',
    'literature', 'computer', 'economics', 'law', 'medicine', 'art', 'music', 'sport', 'general', 'exam',
    'philosophy', 'religion', 'trophy', 'medal', 'book', 'flag', 'target'];
  function setIcon(el, icon) {
    el.innerHTML = '';
    const value = String(icon || 'general').trim();
    let src = null;
    if (ICON_NAMES.includes(value.toLowerCase())) src = `assets/icons/${value.toLowerCase()}.svg`;
    else if (/\.(svg|png|jpe?g|webp|gif)$/i.test(value)) src = value;
    if (src) {
      const img = document.createElement('img');
      img.src = src; img.alt = '';
      el.appendChild(img);
    } else {
      el.textContent = value;
    }
  }

  // ---------- sky: sunburst + drifting clouds ----------
  function paintSky(g) {
    $('#sunburst').style.transform = `rotate(${g * 5}deg)`;
    const drift = (id, speed, start, amp) => {
      const w = parseFloat($(id).style.width);
      const x = ((start + g * speed) % (1920 + w + 200)) - w - 100;
      $(id).style.transform = `translate(${x}px, ${Math.sin(g * 0.8 + start) * amp}px)`;
    };
    drift('#puff-1', 60, 300, 10);
    drift('#puff-2', 40, 1500, 8);
    drift('#puff-3', 85, 1100, 12);
  }

  // ---------- starfield (questions + milestone cards) ----------
  const starCtx = $('#stars').getContext('2d');
  const STARS = (() => {
    const rnd = mulberry32(20261012);
    const palette = [BRAND.orange, BRAND.yellow, BRAND.cream];
    return Array.from({ length: 950 }, () => {
      const bright = rnd() < 0.08;
      return {
        a: rnd() * Math.PI * 2, z: rnd(), v: 0.10 + rnd() * 0.16,
        w: bright ? 3.2 + rnd() * 2.6 : 1.2 + rnd() * 2.2,
        c: bright ? BRAND.cream : palette[Math.floor(rnd() * palette.length)], glow: bright,
      };
    });
  })();
  function drawStars(g, boost = 0, calm = 0) {
    const ctx = starCtx, W = 1920, H = 1080;
    // slow parallax drift of the vanishing point gives depth
    const cx = 960 + Math.sin(g * 0.13) * 46, cy = 520 + Math.cos(g * 0.11) * 26;
    const bg = ctx.createRadialGradient(cx, cy, 0, cx, cy, 1150);
    bg.addColorStop(0, BRAND.ink); bg.addColorStop(0.55, '#332a30'); bg.addColorStop(1, '#413030');
    ctx.globalCompositeOperation = 'source-over';
    ctx.fillStyle = bg; ctx.fillRect(0, 0, W, H);
    ctx.globalCompositeOperation = 'lighter';
    ctx.lineCap = 'round';
    const speed = 1 - calm * 0.6;
    for (const p of STARS) {
      const z = (p.z + g * p.v * speed) % 1;
      const d1 = Math.pow(z, 2.3) * 1250 + 18;
      const len = (6 + Math.pow(z, 1.6) * 120) * (1 + boost * 2.5) * speed;
      const d0 = Math.max(18, d1 - len);
      const cos = Math.cos(p.a), sin = Math.sin(p.a);
      const alpha = clamp(z * 2.2) * (1 - clamp((z - 0.92) / 0.08)) * (1 - calm * 0.35);
      if (alpha <= 0.01) continue;
      ctx.globalAlpha = alpha * (p.glow ? 0.9 : 0.75);
      ctx.strokeStyle = p.c;
      ctx.lineWidth = p.w * (0.5 + z);
      ctx.beginPath(); ctx.moveTo(cx + cos * d0, cy + sin * d0); ctx.lineTo(cx + cos * d1, cy + sin * d1); ctx.stroke();
      if (p.glow) {
        ctx.globalAlpha = alpha * 0.10;
        ctx.lineWidth = p.w * (0.5 + z) * 3;
        ctx.beginPath(); ctx.moveTo(cx + cos * d0, cy + sin * d0); ctx.lineTo(cx + cos * d1, cy + sin * d1); ctx.stroke();
      }
    }
    ctx.globalAlpha = 1;
    ctx.globalCompositeOperation = 'source-over';
  }

  // ---------- confetti ----------
  const confCtx = $('#confetti').getContext('2d');
  function drawConfetti(seed, ox, oy, tau, count = 160) {
    const ctx = confCtx;
    ctx.clearRect(0, 0, 1920, 1080);
    if (tau <= 0 || tau > 2.6) return;
    const rnd = mulberry32(seed * 7919 + 13);
    const colors = [BRAND.orange, BRAND.yellow, BRAND.cream];
    for (let i = 0; i < count; i++) {
      const vx = (rnd() * 2 - 1) * 950, vy = -450 - rnd() * 1000;
      const w = 10 + rnd() * 12, h = 6 + rnd() * 8, rot0 = rnd() * 6.28, vr = (rnd() * 2 - 1) * 12;
      const c = colors[Math.floor(rnd() * colors.length)], flutter = 4 + rnd() * 6;
      const drag = Math.exp(-tau * 0.9);
      const x = ox + vx * (1 - drag) / 0.9 + Math.sin(tau * flutter + i) * 12;
      const y = oy + vy * (1 - drag) / 0.9 + 0.5 * 1500 * tau * tau * 0.55;
      const a = 1 - prog(tau, 1.7, 0.8);
      if (a <= 0) continue;
      ctx.save();
      ctx.globalAlpha = a;
      ctx.translate(x, y); ctx.rotate(rot0 + vr * tau);
      ctx.scale(1, Math.cos(tau * flutter + i));
      ctx.fillStyle = c; ctx.fillRect(-w / 2, -h / 2, w, h);
      ctx.restore();
    }
  }

  // ---------- water ripples (outro) ----------
  const ripCtx = $('#ripples').getContext('2d');
  function drawRipples(t) {
    const ctx = ripCtx, W = 1920, H = 1080, cx = 940, cy = 470;
    const bg = ctx.createRadialGradient(cx, cy, 40, cx, cy, 1300);
    bg.addColorStop(0, '#413030'); bg.addColorStop(0.45, BRAND.ink); bg.addColorStop(1, '#211e26');
    ctx.fillStyle = bg; ctx.fillRect(0, 0, W, H);
    const lt = ctx.createLinearGradient(0, 0, 900, 700);
    lt.addColorStop(0, 'rgba(244,119,69,.2)'); lt.addColorStop(1, 'rgba(0,0,0,0)');
    ctx.fillStyle = lt; ctx.fillRect(0, 0, W, H);
    ctx.save(); ctx.translate(cx, cy); ctx.scale(1, 0.36);
    const period = 1.4, spacing = 70;
    for (let i = 0; i < 16; i++) {
      const r = ((t / period) % 1) * spacing + i * spacing + 30;
      const fade = clamp(1 - r / 1150);
      ctx.lineWidth = 10; ctx.strokeStyle = `rgba(247,245,241,${0.22 * fade})`;
      ctx.beginPath(); ctx.arc(0, -4, r, 0, Math.PI * 2); ctx.stroke();
      ctx.lineWidth = 14; ctx.strokeStyle = `rgba(0,0,0,${0.55 * fade})`;
      ctx.beginPath(); ctx.arc(0, 8, r, 0, Math.PI * 2); ctx.stroke();
    }
    ctx.restore();
    const dg = ctx.createRadialGradient(cx - 6, cy - 10, 2, cx, cy, 40);
    dg.addColorStop(0, 'rgba(242,201,76,.65)'); dg.addColorStop(0.5, 'rgba(244,119,69,.25)'); dg.addColorStop(1, 'rgba(0,0,0,0)');
    ctx.fillStyle = dg; ctx.beginPath(); ctx.ellipse(cx, cy, 70, 34, 0, 0, Math.PI * 2); ctx.fill();
    const ph = (t % 1.4) / 1.4;
    ctx.fillStyle = 'rgba(247,245,241,.45)';
    ctx.beginPath(); ctx.ellipse(cx, cy - 26 - 60 * Math.sin(ph * Math.PI), 9, 12, 0, 0, Math.PI * 2); ctx.fill();
    const vg = ctx.createRadialGradient(W / 2, H / 2, 500, W / 2, H / 2, 1150);
    vg.addColorStop(0, 'rgba(0,0,0,0)'); vg.addColorStop(1, 'rgba(0,0,0,.6)');
    ctx.fillStyle = vg; ctx.fillRect(0, 0, W, H);
  }

  // ---------- shared overlays ----------
  // Signature transition: a branded orange panel sweeps across with the logo.
  // scene.wipeOut covers the end of a scene, scene.wipeIn uncovers the start of the next.
  const WIPE_OUT = 0.42, WIPE_IN = 0.45;
  function paintWipe(scene, t) {
    const panel = $('#wipe-panel'), logo = $('#wipe-logo');
    let x = -3200, logoK = 0;
    if (scene.wipeOut && t > scene.duration - WIPE_OUT) {
      const k = easeInOutCubic(prog(t, scene.duration - WIPE_OUT, WIPE_OUT));
      x = lerp(-3200, 0, k);
      logoK = prog(t, scene.duration - WIPE_OUT * 0.45, WIPE_OUT * 0.45);
    } else if (scene.wipeIn && t < WIPE_IN) {
      const k = easeInOutCubic(prog(t, 0.08, WIPE_IN - 0.08));
      x = lerp(0, 3000, k);
      logoK = 1 - prog(t, 0, 0.18);
    }
    panel.style.transform = `translateX(${x}px) skewX(-12deg)`;
    style(logo, { s: lerp(0.6, 1, spring(logoK)), o: logoK });
  }

  function paintProgress(scene, t) {
    const bar = $('#progress');
    bar.hidden = !(scene.type === 'question' || scene.type === 'milestone');
    if (bar.hidden) return;
    const current = scene.type === 'milestone' ? scene.after : scene.index;
    const doneCount = scene.type === 'milestone' ? scene.after : (scene.phase === 'reveal' ? scene.index + 1 : scene.index);
    $$('#pg-bar .pg-seg').forEach((seg, i) => {
      seg.className = 'pg-seg' + (i < doneCount ? ' done' : (i === current ? ' now' : ''));
      const pulse = i === current && scene.type === 'question' && scene.phase !== 'reveal' ? 1 + Math.sin(t * 6) * 0.12 : 1;
      seg.style.transform = `scaleY(${pulse})`;
      seg.style.boxShadow = i === current && scene.phase !== 'reveal' ? '0 0 14px rgba(242,201,76,.8)' : 'none';
    });
    $('#pg-text').textContent = `${Math.min(doneCount + (scene.phase === 'reveal' ? 0 : 1), scene.total)}/${scene.total}`;
    const enter = scene.type === 'question' && scene.index === 0 && scene.phase === 'type' ? easeOutCubic(prog(t, 0.3, 0.5)) : 1;
    style(bar, { y: lerp(60, 0, enter), o: enter });
  }

  // ---------- scene setup (once per scene) ----------
  let currentKey = null;
  const answers = ['A', 'B', 'C', 'D'].map((L) => ({ L, el: $('#ans-' + L) }));

  function setupScene(scene) {
    const key = JSON.stringify([scene.type, scene.index, scene.phase, scene.text, scene.kind]);
    if (key === currentKey) return;
    currentKey = key;

    const t = scene.type;
    $('#sky').hidden = !['intro', 'hook', 'score', 'thumb'].includes(t);
    $('#space').hidden = !['question', 'milestone'].includes(t);
    $('#scene-intro').hidden = t !== 'intro';
    $('#scene-hook').hidden = t !== 'hook';
    $('#scene-question').hidden = t !== 'question';
    $('#scene-milestone').hidden = t !== 'milestone';
    $('#scene-score').hidden = t !== 'score';
    $('#scene-thumb').hidden = t !== 'thumb';
    $('#scene-outro').hidden = t !== 'outro';

    // progress bar segments
    if (scene.total && $('#pg-bar').children.length !== scene.total) {
      $('#pg-bar').innerHTML = '';
      const segW = Math.max(14, Math.min(44, Math.floor((1300 - scene.total * 6) / scene.total)));
      for (let i = 0; i < scene.total; i++) {
        const seg = document.createElement('div');
        seg.className = 'pg-seg'; seg.style.width = segW + 'px';
        $('#pg-bar').appendChild(seg);
      }
    }

    if (t === 'intro') {
      const word = scene.welcome || 'welcome';
      $('#welcome-back').textContent = word;
      $('#welcome-front').innerHTML = '';
      [...word].forEach((c) => {
        const s = document.createElement('span'); s.className = 'ch'; s.textContent = c === ' ' ? ' ' : c;
        $('#welcome-front').appendChild(s);
      });
    }

    if (t === 'hook') {
      const h = scene.hook || {};
      $('#h-l1').textContent = h.line1 ?? 'Pouvez-vous trouver';
      $('#h-score').textContent = h.score ?? `${scene.total}/${scene.total}`;
      $('#h-l2').textContent = h.line2 ?? 'bonnes réponses ?';
      $('#h-pill-text').textContent = h.pill ?? `${scene.seconds} secondes par question`;
      $('#h-foot').textContent = h.footer ?? 'Comptez vos points et donnez votre score en commentaire';
    }

    if (t === 'question') {
      setIcon($('#h-icon'), scene.icon);
      $('#h-cat').textContent = (scene.category || '').toUpperCase();
      $('#h-lvl').textContent = (scene.level || '').toUpperCase();
      $('#h-qcm').textContent = scene.qcm || '';
      $('#h-sep1').hidden = !scene.level;
      $('#h-lvl').hidden = !scene.level;
      $('#qnum').textContent = String(scene.number);
      $('#qt-shown').textContent = scene.text;
      $('#qt-rest').textContent = '';
      fitText($('#qtext'), 64.94, 34);
      const byLabel = Object.fromEntries((scene.choices || []).map((c) => [String(c.label).toUpperCase(), c.text]));
      answers.forEach(({ L, el }) => {
        const txt = el.querySelector('.txt');
        const has = byLabel[L] !== undefined;
        el.hidden = !has;
        txt.textContent = has ? byLabel[L] : '';
        if (has) fitText(txt, 62.67, 26);
      });
    }

    if (t === 'milestone') {
      setIcon($('#ms-icon'), scene.kind === 'last' ? 'target' : 'flag');
      $('#ms-title').textContent = scene.title;
      $('#ms-sub').textContent = scene.subtitle;
    }

    if (t === 'score') {
      $('#sc-title').textContent = scene.title || 'Quel est votre score ?';
      (scene.tiers || []).forEach((tier, i) => {
        const row = $(`#sc-${i + 1}`);
        setIcon(row.querySelector('.sc-icon'), tier.icon);
        row.querySelector('.sc-range').textContent = tier.range;
        row.querySelector('.sc-label').textContent = tier.label;
      });
      $('#sc-foot').innerHTML = '';
      const span = document.createElement('span');
      span.textContent = scene.footer || 'Écrivez votre score en commentaire !';
      $('#sc-foot').appendChild(span);
    }

    if (t === 'thumb') {
      setIcon($('#th-icon'), scene.icon);
      $('#th-cat').textContent = (scene.category || '').toUpperCase();
      fitText($('#th-cat'), 150, 70);
      $('#th-count').textContent = `${scene.total} QUESTIONS`;
      $('#th-pill').textContent = [scene.level && scene.level.toUpperCase(), scene.qcm].filter(Boolean).join(' · ');
      $('#th-badge').textContent = scene.badge || 'Testez-vous !';
    }
  }

  // ---------- per-frame painting ----------
  function paintIntro(scene, t, g) {
    paintSky(g);
    const dur = scene.duration;
    $('#fade').style.opacity = '0';
    const close = easeOutCubic(prog(t, 0, 0.75));
    const open = easeInOutCubic(prog(t, 1.0, 0.9));
    style($('#cover-l'), { x: lerp(-1500, 0, close) - open * 1500, y: Math.sin(g * 1.3) * 6 });
    style($('#cover-r'), { x: lerp(1500, 0, close) + open * 1500, y: Math.sin(g * 1.1 + 1) * 6 });
    const bk = spring(prog(t, 0.9, 1.0));
    style($('#backdrop'), { s: bk * (1 + Math.sin(g * 2) * 0.012), o: clamp(prog(t, 0.9, 0.2) * 2) });
    const lk = spring(prog(t, 1.15, 1.0));
    const float = Math.sin(g * 2.2) * 8 * clamp((t - 2) / 0.4);
    style($('#logo'), { y: float, s: lerp(0.3, 1, lk), r: lerp(-8, 0, clamp(lk)), o: clamp(prog(t, 1.15, 0.2) * 3) });
    const chars = $$('#welcome-front .ch');
    const wStart = 1.9;
    chars.forEach((ch, i) => {
      const k = prog(t, wStart + i * 0.06, 0.55);
      const e = spring(k);
      style(ch, { y: lerp(-120, 0, e), s: lerp(0.3, 1, e), o: clamp(k * 3) });
    });
    $('#welcome-back').style.opacity = String(clamp(prog(t, wStart + chars.length * 0.06, 0.3) * 1.5));
    const exit = easeInCubic(prog(t, dur - 0.4, 0.4));
    if (exit > 0) {
      ['#logo', '#welcome', '#backdrop'].forEach((s) => {
        const el = $(s);
        el.style.transform += ` scale(${1 - exit * 0.4})`;
        el.style.opacity = String(parseFloat(el.style.opacity || 1) * (1 - exit));
      });
    } else {
      $('#welcome').style.transform = ''; $('#welcome').style.opacity = '1';
    }
  }

  function paintHook(scene, t, g) {
    paintSky(g);
    const dur = scene.duration;
    const l1 = spring(prog(t, 0.1, 0.6));
    style($('#h-l1'), { y: lerp(-80, 0, l1), s: lerp(0.6, 1, l1), o: clamp(prog(t, 0.1, 0.5) * 3) });
    const sk = easeOutBack(prog(t, 0.45, 0.4));
    style($('#h-score'), { s: lerp(2.6, 1, sk) * (1 + Math.sin(g * 4) * 0.03 * clamp((t - 1) / 0.3)), o: clamp(prog(t, 0.45, 0.12)) });
    const l2 = spring(prog(t, 0.85, 0.6));
    style($('#h-l2'), { y: lerp(80, 0, l2), s: lerp(0.6, 1, l2), o: clamp(prog(t, 0.85, 0.5) * 3) });
    const pk = spring(prog(t, 1.3, 0.8));
    style($('#h-pill'), { s: pk, o: clamp(prog(t, 1.3, 0.15)) });
    $('#h-hand').style.transformOrigin = '32px 37px';
    $('#h-hand').style.transform = `rotate(${Math.floor(Math.max(0, t - 1.3) * 2) * 72}deg)`;
    const fk = easeOutCubic(prog(t, 1.8, 0.5));
    style($('#h-foot'), { y: lerp(40, 0, fk), o: fk });
    const shake = t > 0.75 && t < 1.05 ? Math.sin(t * 90) * 12 * (1 - prog(t, 0.75, 0.3)) : 0;
    const exit = easeInCubic(prog(t, dur - 0.45, 0.45));
    style($('#hook'), { x: shake, s: 1 + exit * 1.6, o: 1 - exit });
    $('#fade').style.background = BRAND.cream;
    $('#fade').style.opacity = String(exit * 0.85);
  }

  function heartbeat(x) {
    // two bumps per second, like a pulse
    return Math.exp(-Math.pow(x / 0.06, 2)) + 0.7 * Math.exp(-Math.pow((x - 0.24) / 0.06, 2));
  }

  function paintQuestion(scene, t, g) {
    const phase = scene.phase;                 // 'type' | 'countdown' | 'reveal'
    const reveal = phase === 'reveal';
    const typing = phase === 'type';
    const dur = scene.duration;
    const fade = $('#fade');
    fade.style.background = BRAND.cream;
    fade.style.opacity = typing && scene.index === 0 && !scene.wipeIn ? String(0.85 * (1 - prog(t, 0, 0.35))) : '0';
    drawStars(g, typing && !scene.wipeIn ? 1 - prog(t, 0, 0.8) : 0);

    const d0 = typing && scene.wipeIn ? 0.22 : 0;   // let the wipe clear first
    const enter = (start, d) => (typing ? prog(t, start + d0, d) : 1);

    const hEnter = scene.index === 0 ? enter(0.0, 0.5) : 1;
    style($('#header'), { x: -$('#header').offsetWidth / 2, y: lerp(-150, 0, spring(hEnter)), o: clamp(hEnter * 2) });
    const nk = spring(enter(0.1, 0.55));
    style($('#qnum'), { s: lerp(0, 1, nk), r: lerp(-90, 0, nk), o: clamp(enter(0.1, 0.45) * 3) });
    const ck = spring(enter(0.12, 0.6));
    style($('#qcard'), { y: Math.sin(g * 1.1) * 3, s: lerp(0.7, 1, ck), o: clamp(enter(0.12, 0.5) * 2.5) });

    // typewriter
    const full = scene.text || '';
    const shown = $('#qt-shown'), rest = $('#qt-rest'), caret = $('#qt-caret');
    if (typing) {
      const n = Math.min(full.length, Math.floor(Math.max(0, t - scene.typeStart) * scene.cps));
      shown.textContent = full.slice(0, n);
      rest.textContent = full.slice(n);
      const done = n >= full.length;
      caret.style.opacity = t < scene.typeStart ? '0' : (done ? String(Math.floor(t * 3) % 2 === 0 ? 1 : 0) : '1');
    } else {
      shown.textContent = full; rest.textContent = ''; caret.style.opacity = '0';
    }

    // answers slide in once the question is typed, then float gently
    answers.forEach(({ L, el }, i) => {
      if (el.hidden) return;
      const fromLeft = L === 'A' || L === 'C';
      const raw = enter(scene.answersAt - d0 + i * 0.09, 0.5);
      const k = spring(raw);
      style(el, { x: lerp(fromLeft ? -700 : 700, 0, k), y: Math.sin(g * 1.4 + i * 1.3) * 4, o: clamp(raw * 2) });
      el.style.boxShadow = 'none';
      el.style.zIndex = '1';
      el.querySelector('.fill').style.opacity = '0';
      el.querySelector('.shine').style.opacity = '0';
      el.querySelector('.check').style.opacity = '0';
      el.querySelector('.txt').style.color = BRAND.ink;
      el.querySelector('.disc').style.transform = '';
    });

    const timer = $('#timer');
    const num = $('#timer-num');
    $('#gj-rays').style.opacity = '0';
    $('#greatjob').style.opacity = '0';
    if (!reveal) { drawConfetti(0, 0, 0, 0); $('#confetti').style.opacity = '1'; }

    if (typing) {
      style(timer, { s: 0, o: 0 });
      timer.style.setProperty('--p', '360deg');
    } else if (phase === 'countdown') {
      const tk = spring(prog(t, 0, 0.45));
      const remaining = Math.max(1, Math.ceil(dur - t));
      num.textContent = String(remaining).padStart(2, '0');
      const intoSecond = t - Math.floor(t);
      const pop = easeOutBack(clamp(intoSecond / 0.3));
      style(num, { s: lerp(1.45, 1, pop), o: clamp(intoSecond / 0.12) });
      const urgent = remaining <= 2;
      num.style.color = urgent ? BRAND.urgent : BRAND.ink;
      const hb = urgent ? heartbeat(intoSecond) : 0;
      style(timer, { s: lerp(0, 1, tk) * (1 + hb * 0.08), o: 1 });
      timer.style.setProperty('--p', `${Math.max(0, 360 * (1 - t / dur))}deg`);
      $('#vignette').style.opacity = String(urgent ? clamp((t - (dur - 2)) / 0.4) * (0.45 + 0.4 * hb) : 0);
    } else {
      // ---------------- reveal ----------------
      const out = easeInCubic(prog(t, 0, 0.22));
      style(timer, { s: 1 - out, o: 1 - out });
      timer.style.setProperty('--p', '0deg');

      let origin = [960, 700];
      answers.forEach(({ L, el }, i) => {
        if (el.hidden) return;
        const isCorrect = L === String(scene.correctLabel).toUpperCase();
        const float = Math.sin(g * 1.4 + i * 1.3) * 4;
        if (isCorrect) {
          const pop = easeOutElastic(prog(t, 0.05, 1.0));
          const pulse = 0.5 + 0.5 * Math.sin((t - 0.6) * 6);
          const glowOn = clamp((t - 0.1) / 0.3);
          style(el, { y: float, s: 1 + 0.1 * pop, o: 1 });
          el.style.zIndex = '2';
          el.style.boxShadow = `0 0 ${30 + 25 * pulse * glowOn}px ${6 + 6 * pulse * glowOn}px rgba(244,119,69,${(0.55 + 0.3 * pulse) * glowOn})`;
          el.querySelector('.fill').style.opacity = String(prog(t, 0.05, 0.2));
          el.querySelector('.txt').style.color = BRAND.ink;
          el.querySelector('.disc').style.transform = `rotateY(${easeOutCubic(prog(t, 0.1, 0.6)) * 360}deg)`;
          const sh = el.querySelector('.shine');
          sh.style.opacity = t > 0.35 && t < 1.0 ? '1' : '0';
          sh.style.transform = `translateX(${lerp(-180, 760, easeInOutCubic(prog(t, 0.35, 0.6)))}px) skewX(-20deg)`;
          const kk = easeOutElastic(prog(t, 0.25, 0.9));
          style(el.querySelector('.check'), { s: kk, r: lerp(-180, 0, clamp(kk)), o: clamp(prog(t, 0.25, 0.1) * 3) });
          const box = el.getBoundingClientRect();
          origin = [box.left + box.width / 2, box.top + box.height / 2];
        } else {
          const dim = prog(t, 0.1, 0.3);
          const shake = Math.sin(t * 70) * 10 * (dim > 0 && dim < 1 ? 1 - dim : 0);
          style(el, { x: shake, y: float, s: 1 - 0.05 * dim, o: 1 - 0.55 * dim });
        }
      });

      drawConfetti(scene.index + 1, origin[0], origin[1], t - 0.2);
      const rays = $('#gj-rays');
      const rk = easeOutCubic(prog(t, 0.25, 0.5));
      rays.style.transform = `scale(${rk}) rotate(${t * 40}deg)`;
      rays.style.opacity = String(rk * 0.9);
      const gj = $('#greatjob');
      const gk = easeOutElastic(prog(t, 0.2, 0.9));
      const settle = clamp((t - 1.1) / 0.3);
      style(gj, { y: Math.sin(t * 2.6) * 6 * settle, s: gk * (1 + Math.sin(t * 5) * 0.03 * settle), r: lerp(-25, 0, clamp(gk)) + Math.sin(t * 3.2) * 4 * settle, o: clamp(prog(t, 0.2, 0.15)) });
      $('#confetti').style.opacity = '1';
    }
  }

  function paintMilestone(scene, t, g) {
    drawStars(g, 0, 0.6);
    $('#fade').style.opacity = '0';
    const k = spring(prog(t, 0.25, 0.7));
    style($('#ms-card'), { y: lerp(80, 0, k), s: lerp(0.75, 1, k) * (1 + Math.sin(g * 1.6) * 0.01), o: clamp(prog(t, 0.25, 0.25) * 2) });
    const ik = easeOutElastic(prog(t, 0.45, 0.9));
    style($('#ms-icon'), { s: ik, r: lerp(-30, 0, clamp(ik)) + Math.sin(g * 2.4) * 3 * clamp((t - 1.3) / 0.3), o: clamp(prog(t, 0.45, 0.1) * 3) });
    const tk = spring(prog(t, 0.6, 0.6));
    style($('#ms-title'), { y: lerp(30, 0, tk), o: clamp(prog(t, 0.6, 0.3) * 2) });
    const sk = easeOutCubic(prog(t, 0.85, 0.5));
    style($('#ms-sub'), { y: lerp(20, 0, sk), o: sk });
    if (scene.kind === 'last') {
      const hb = heartbeat((t - 0.6) % 1);
      $('#ms-title').style.color = BRAND.urgent;
      $('#ms-title').style.transform += ` scale(${1 + hb * 0.04 * clamp(t - 1)})`;
    } else {
      $('#ms-title').style.color = '';
    }
  }

  function paintScore(scene, t, g) {
    paintSky(g);
    $('#fade').style.opacity = '0';
    const tk = spring(prog(t, 0.2, 0.7));
    style($('#sc-title'), { y: lerp(-120, 0, tk), o: clamp(prog(t, 0.2, 0.3) * 2) });
    [1, 2, 3].forEach((n, i) => {
      const row = $(`#sc-${n}`);
      const k = spring(prog(t, 0.6 + i * 0.25, 0.7));
      style(row, { x: lerp(-1400, 0, k), y: Math.sin(g * 1.3 + i) * 3, o: clamp(prog(t, 0.6 + i * 0.25, 0.2) * 2) });
      const icon = row.querySelector('.sc-icon');
      const ik = easeOutElastic(prog(t, 0.85 + i * 0.25, 0.8));
      style(icon, { s: ik, r: (n === 1 ? Math.sin(g * 3) * 6 : 0) * clamp(t - 2), o: clamp(ik * 3) });
    });
    $('#sc-1').style.boxShadow = `0 10px 0 rgba(41,37,47,.3), 0 0 ${20 + 20 * (0.5 + 0.5 * Math.sin(t * 4))}px rgba(242,201,76,${0.6 * clamp(t - 1.8)})`;
    const fk = easeOutCubic(prog(t, 1.6, 0.5));
    style($('#sc-foot'), { y: lerp(40, 0, fk), o: fk });
  }

  function paintThumb() {
    paintSky(2.2);
    $('#fade').style.opacity = '0';
    ['#th-logo', '#th-iconwrap', '#th-text', '#th-badge'].forEach((s) => { $(s).style.opacity = '1'; });
    $('#th-badge').style.transform = 'rotate(-6deg)';
    $('#th-iconwrap').style.transform = 'rotate(-4deg)';
  }

  function paintOutro(scene, t) {
    drawRipples(t);
    const dur = scene.duration;
    const fade = $('#fade');
    fade.style.background = BRAND.ink;
    fade.style.opacity = String(easeInCubic(prog(t, dur - 0.6, 0.6)));
    const o = scene.wipeIn ? 0.25 : 0;
    const tk = spring(prog(t, o, 0.6));
    style($('#outro-title'), { y: lerp(-120, 0, tk), o: clamp(prog(t, o, 0.55) * 2) });
    const l1 = easeOutCubic(prog(t, o + 0.3, 0.55));
    style($('#o-line1'), { x: lerp(-500, 0, l1), o: l1 });
    const hk = spring(prog(t, o + 0.55, 0.6));
    const point = Math.sin((t - 1.1) * 6) * 10 * clamp((t - 1.1) / 0.3);
    style($('#o-hand'), { x: lerp(-200, 0, hk) + point, o: clamp(prog(t, o + 0.55, 0.3) * 2) });
    const cm = easeOutElastic(prog(t, o + 0.75, 0.9));
    const cmPulse = 1 + Math.sin(t * 4) * 0.025 * clamp((t - 1.7) / 0.3);
    style($('#o-comment'), { s: cm * cmPulse, o: clamp(prog(t, o + 0.75, 0.15)) });
    const l2 = easeOutCubic(prog(t, o + 1.0, 0.55));
    style($('#o-line2'), { x: lerp(-500, 0, l2), o: l2 });
    const sb = easeOutElastic(prog(t, o + 1.25, 0.9));
    style($('#o-sub'), { s: sb, o: clamp(prog(t, o + 1.25, 0.15)) });
    const cin = easeOutCubic(prog(t, o + 1.8, 0.6));
    const click = Math.sin(clamp((t - o - 2.5) / 0.25) * Math.PI);
    style($('#o-sub .cursor'), { x: lerp(160, 0, cin), y: lerp(120, 0, cin), s: 1 - click * 0.18, o: cin });
    $('#o-sub .btn').style.transform = `scale(${1 - click * 0.05})`;
    const l3 = easeOutCubic(prog(t, o + 1.6, 0.5));
    style($('#o-line3'), { y: lerp(60, 0, l3), o: l3 });
    const st = spring(prog(t, o + 1.85, 0.6));
    const glow = 0.5 + 0.5 * Math.sin(t * 3);
    style($('#o-site'), { s: lerp(0.4, 1, st), o: clamp(prog(t, o + 1.85, 0.2) * 2) });
    $('#o-site').style.boxShadow = `0 0 ${20 + glow * 30}px rgba(242, 201, 76, ${0.25 + 0.35 * glow * clamp((t - 2.4) / 0.3)})`;
  }

  window.setupScene = setupScene;
  window.renderFrame = function renderFrame(scene, t, g) {
    setupScene(scene);
    $('#vignette').style.opacity = '0';
    if (scene.type === 'intro') paintIntro(scene, t, g);
    else if (scene.type === 'hook') paintHook(scene, t, g);
    else if (scene.type === 'question') paintQuestion(scene, t, g);
    else if (scene.type === 'milestone') paintMilestone(scene, t, g);
    else if (scene.type === 'score') paintScore(scene, t, g);
    else if (scene.type === 'thumb') paintThumb(scene, t, g);
    else if (scene.type === 'outro') paintOutro(scene, t, g);
    paintProgress(scene, t);
    paintWipe(scene, t);
  };
})();
