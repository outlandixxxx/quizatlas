/* YouTube Facts montage, adapted from video-generator/js/template.js.
   Scene data stays factual; only layout, motion and locally owned graphics change. */
(() => {
  const $ = id => document.getElementById(id);
  const clamp = x => Math.max(0, Math.min(1, x));
  const ease = x => 1 - (1 - clamp(x)) ** 3;
  const spring = x => x <= 0 ? 0 : x >= 1 ? 1 : 1 - Math.exp(-6.5 * x) * Math.cos(10.5 * x);
  const lerp = (a, b, t) => a + (b - a) * t;
  const labels = {
    fr: { series: 'LE SAVIEZ-VOUS ?', fact: 'LE FAIT', detail: 'EXPLICATION', intro: 'MaroQuiz · Découvertes', count: n => `${n} fait${n > 1 ? 's' : ''} à découvrir`, explored: n => `${n} fait${n > 1 ? 's' : ''} exploré${n > 1 ? 's' : ''}`, outro: 'À vous de jouer !', practice: 'Poursuivez la découverte avec les quiz MaroQuiz.', source: 'Source', chapter: 'EXPLORER', subscribe: 'ABONNEZ-VOUS' },
    en: { series: 'DID YOU KNOW?', fact: 'THE FACT', detail: 'EXPLANATION', intro: 'MaroQuiz · Discoveries', count: n => `${n} fact${n > 1 ? 's' : ''} to discover`, explored: n => `${n} fact${n > 1 ? 's' : ''} explored`, outro: 'Your turn to explore!', practice: 'Keep discovering with quizzes on MaroQuiz.', source: 'Source', chapter: 'EXPLORE', subscribe: 'SUBSCRIBE' },
    ar: { series: 'هل تعلم؟', fact: 'حقيقة', detail: 'شرح', intro: 'MaroQuiz · اكتشافات', count: n => `${n} من الحقائق لاكتشافها`, explored: n => `اكتشفنا ${n} من الحقائق`, outro: 'حان دورك!', practice: 'واصل التعلّم مع اختبارات MaroQuiz.', source: 'المصدر', chapter: 'اكتشف', subscribe: 'تابعنا' },
  };
  const subjects = [
    [/math|رياض/u, 'math', '#c27bff'], [/phys|فيزياء/u, 'physics', '#ffa53a'], [/chim|chem|كيمياء/u, 'chemistry', '#22d3ee'],
    [/svt|bio|life science|حياة/u, 'biology', '#a3e635'], [/inform|computer|معلوم/u, 'code', '#4f8cff'],
    [/finan|econ|مالي|اقتصاد/u, 'economics', '#ffd23f'], [/arab|french|franc|english|anglais|lang|عربية/u, 'language', '#ff6bc1'],
  ];
  let state;
  const ctx = $('motion').getContext('2d');
  // The quiz renderer's seeded radial starfield, reduced to 220 streaks for long renders.
  let seed = 20261012;
  const random = () => { seed = (Math.imul(seed, 1664525) + 1013904223) >>> 0; return seed / 4294967296; };
  const stars = Array.from({ length: 220 }, () => ({ a: random() * Math.PI * 2, z: random(), speed: .035 + random() * .05, width: .7 + random() * 2, color: ['#f47745', '#f2c94c', '#f7f5f1'][Math.floor(random() * 3)] }));
  const style = (el, x = 0, y = 0, scale = 1, opacity = 1, rotation = 0) => {
    el.style.transform = `translate(${x}px,${y}px) scale(${scale}) rotate(${rotation}deg)`;
    el.style.opacity = String(clamp(opacity));
  };
  function paintSpace(g, outro) {
    const { width: W, height: H } = state;
    const cx = W * .5 + Math.sin(g * .13) * 30, cy = H * .5 + Math.cos(g * .11) * 20;
    const bg = ctx.createRadialGradient(cx, cy, 20, cx, cy, Math.max(W, H));
    bg.addColorStop(0, '#413030'); bg.addColorStop(.5, '#29252f'); bg.addColorStop(1, '#201c25');
    ctx.globalAlpha = 1; ctx.fillStyle = bg; ctx.fillRect(0, 0, W, H);
    if (outro) {
      // The quiz outro's elliptical ripples, without its score/comment content.
      for (let i = 0; i < 32; i++) {
        const radius = (i * 45 + g * 19) % 1500;
        ctx.strokeStyle = `rgba(247,245,241,${.04 + (1 - radius / 1500) * .06})`;
        ctx.lineWidth = 3;
        ctx.beginPath(); ctx.ellipse(cx, cy, radius, radius * .43, 0, 0, Math.PI * 2); ctx.stroke();
      }
    } else {
      for (const star of stars) {
        const z = (star.z + g * star.speed) % 1;
        const d = Math.pow(z, 2.3) * Math.max(W, H) * .8 + 20;
        const len = 4 + z * 35;
        const alpha = clamp(z * 2) * (1 - clamp((z - .93) / .07));
        ctx.globalAlpha = alpha * .38; ctx.strokeStyle = star.color; ctx.lineWidth = star.width;
        ctx.beginPath(); ctx.moveTo(cx + Math.cos(star.a) * (d - len), cy + Math.sin(star.a) * (d - len)); ctx.lineTo(cx + Math.cos(star.a) * d, cy + Math.sin(star.a) * d); ctx.stroke();
      }
    }
    ctx.globalAlpha = 1;
  }
  function fit(el, maximum, minimum, fits) {
    let size = maximum; el.style.fontSize = size + 'px';
    while (size > minimum && !fits()) { size -= 2; el.style.fontSize = size + 'px'; }
    if (!fits()) throw new Error('YouTube Facts text exceeds its safe area.');
  }
  window.setLongData = async (doc, scene, total) => {
    const L = labels[doc.language], vertical = doc.render_options.orientation === 'vertical';
    const layout = scene.kind === 'fact' ? ['feature', 'editorial', 'spotlight'][scene.index % 3] : 'feature';
    const stage = $('stage');
    stage.className = `${vertical ? 'vertical' : 'horizontal'} ${doc.language === 'ar' ? 'rtl' : ''} ${scene.kind} ${layout}`;
    document.documentElement.lang = doc.language;
    const key = doc.major.name.normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase();
    const subject = subjects.find(([pattern]) => pattern.test(key)) || [null, 'book', '#f2c94c'];
    stage.style.setProperty('--subject', subject[2]);
    for (const id of ['header-icon', 'subject-icon']) $(id).src = `../video-generator/assets/icons/${subject[1]}.svg`;
    $('opening').hidden = scene.kind !== 'intro';
    $('content').hidden = !['fact', 'chapter'].includes(scene.kind);
    $('closing').hidden = scene.kind !== 'outro';
    $('sky').hidden = scene.kind !== 'intro';
    $('motion').hidden = scene.kind === 'intro';
    $('program-header').hidden = ['intro', 'outro'].includes(scene.kind);
    $('footer').hidden = scene.kind === 'intro';
    $('series').textContent = L.series;
    $('subject-label').textContent = scene.fact?.subject_name || doc.major.name;
    $('intro-label').textContent = L.intro;
    $('intro-title').textContent = L.series;
    $('intro-subject').textContent = doc.major.name;
    $('intro-count').textContent = L.count(doc.facts.length);
    $('fact-number').textContent = scene.kind === 'fact' ? String(scene.index + 1).padStart(2, '0') : '✦';
    $('eyebrow').textContent = scene.kind === 'chapter' ? L.chapter : scene.explanation ? L.detail : L.fact;
    $('page-label').textContent = scene.pageCount > 1 ? `${scene.pageIndex + 1} / ${scene.pageCount}` : '';
    $('headline').textContent = scene.kind === 'chapter' ? scene.fact.subject_name : scene.text || '';
    $('source').textContent = scene.kind === 'fact' && scene.fact.source_url ? `${L.source} · ${scene.fact.source_url}` : '';
    $('illustration-label').textContent = scene.fact?.subject_name || doc.major.name;
    $('counter').textContent = `${scene.kind === 'outro' ? doc.facts.length : (scene.index || 0) + 1} / ${doc.facts.length}`;
    $('closing-count').textContent = L.explored(doc.facts.length);
    $('closing-title').textContent = L.outro;
    $('closing-line').textContent = L.practice;
    $('subscribe-label').textContent = L.subscribe;
    state = { doc, scene, total, width: vertical ? 1080 : 1920, height: vertical ? 1920 : 1080 };
    $('motion').width = state.width; $('motion').height = state.height;
    await Promise.all(['800 50px OpenSans', '900 60px Nunito', '800 50px Cairo', '800 40px Montserrat'].map(font => document.fonts.load(font)));
    await document.fonts.ready;
    if (scene.kind === 'intro') {
      fit($('intro-title'), vertical ? 100 : 108, 60, () => $('intro-title').scrollWidth <= $('intro-copy').clientWidth);
      fit($('intro-subject'), vertical ? 41 : 42, 30, () => $('intro-copy').scrollHeight <= (vertical ? 530 : 650));
    } else if (scene.kind === 'fact' || scene.kind === 'chapter') {
      const fits = () => $('composition').scrollHeight <= $('composition').clientHeight + 2 && $('headline').scrollWidth <= $('headline').clientWidth + 2;
      fit($('headline'), scene.kind === 'chapter' ? (vertical ? 62 : 82) : doc.language === 'ar' ? (vertical ? 45 : 51) : (vertical ? 49 : 54), 32, fits);
    }
    window.renderLongFrame(0);
  };
  window.renderLongFrame = t => {
    const { scene, total, width: W, height: H } = state, global = scene.start + t;
    if (scene.kind === 'intro') {
      $('sunburst').style.transform = `rotate(${global * 4}deg)`;
      style(document.querySelector('.drift.a'), ((global * 45 + 260) % (W + 600)) - 500, Math.sin(global) * 10);
      style(document.querySelector('.drift.b'), ((global * 28 + 1300) % (W + 700)) - 500, Math.cos(global) * 12);
      const open = ease((t - .1) / .85);
      style(document.querySelector('.cover.left'), -W * .9 * open);
      style(document.querySelector('.cover.right'), W * .9 * open);
      style($('intro-art'), 0, (1 - spring((t - .25) / .8)) * 55, .9 + .1 * spring((t - .25) / .8));
      style($('intro-copy'), (1 - ease((t - .65) / .65)) * 150, 0, 1, ease((t - .65) / .4));
      style($('intro-count'), 0, (1 - spring((t - 1.5) / .55)) * 30, 1, ease((t - 1.5) / .3));
    } else {
      paintSpace(global, scene.kind === 'outro');
      if (scene.kind === 'outro') {
        style($('closing-logo'), 0, (1 - spring((t - .2) / .65)) * 80, .8 + .2 * spring((t - .2) / .65), ease(t / .3));
        style($('closing-copy'), (1 - ease((t - .4) / .65)) * -150, 0, 1, ease((t - .4) / .4));
        style($('subscribe'), 0, 0, .7 + .3 * spring((t - 1.2) / .65), ease((t - 1.2) / .3));
        style($('cursor'), (1 - ease((t - 1.8) / .5)) * 90, (1 - ease((t - 1.8) / .5)) * 65, 1 - Math.sin(clamp((t - 2.4) / .25) * Math.PI) * .12, ease((t - 1.8) / .3));
      } else {
        const enter = spring((t - .35) / .65);
        style($('information'), (1 - enter) * (scene.index % 2 ? 150 : -150), 0, .96 + .04 * enter, ease((t - .3) / .35));
        style($('fact-number'), 0, -50 * (1 - enter), .8 + .2 * enter, ease((t - .35) / .25));
        const reveal = ease((t - .65) / .6);
        $('headline').style.clipPath = `inset(0 0 ${(1 - reveal) * 100}% 0)`;
        style($('illustration'), 0, 20 * (1 - ease((t - .65) / .6)) + Math.sin(global * .7) * 3, .8 + .2 * spring((t - .65) / .7), ease((t - .6) / .35));
        document.querySelector('.orbit.one').style.transform = `rotate(${global * 4}deg)`;
        document.querySelector('.orbit.two').style.transform = `rotate(${65 - global * 3}deg)`;
        $('panel-rule').style.transform = `scaleX(${ease((t - .95) / .6)})`;
        $('panel-shine').style.transform = `translateX(${lerp(-400, 2000, ease((t - 1.15) / .85))}px) skewX(-18deg)`;
      }
    }
    document.querySelector('#progress i').style.width = `${100 * (scene.start + t) / total}%`;
    // Match the quiz's diagonal, logo-centered wipe; no countdown or answer reveal.
    let x = -W * 2, opacity = 0;
    if (t > scene.duration - .42 && scene.kind !== 'outro') { const p = ease((t - scene.duration + .42) / .42); x = lerp(-W * 1.8, 0, p); opacity = p; }
    else if (t < .42 && scene.kind !== 'intro') { const p = ease(t / .42); x = lerp(0, W * 1.8, p); opacity = 1 - p; }
    $('wipe-panel').style.transform = `translateX(${x}px) skewX(-12deg)`;
    style($('wipe-logo'), 0, 0, .92 + opacity * .08, opacity);
    $('fade').style.opacity = scene.kind === 'outro' ? String(clamp((t - scene.duration + .45) / .45)) : '0';
  };
})();
