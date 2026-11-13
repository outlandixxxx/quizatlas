(() => {
  const $ = id => document.getElementById(id), clamp = x => Math.max(0, Math.min(1, x)), ease = x => 1 - (1 - clamp(x)) ** 3;
  let current, glyphs;
  function fit(node, minimum) {
    let size = parseFloat(getComputedStyle(node).fontSize);
    while ((node.scrollHeight > node.clientHeight + 1 || node.scrollWidth > node.clientWidth + 1) && size > minimum) node.style.fontSize = --size + 'px';
    if (node.scrollHeight > node.clientHeight + 1 || node.scrollWidth > node.clientWidth + 1) throw Error(`Source text cannot fit legibly in ${node.id || node.className} (${node.scrollWidth}×${node.scrollHeight} in ${node.clientWidth}×${node.clientHeight} at ${size}px). Preview and replace the question; no text was removed.`);
  }
  function enter(node, t, start, duration = .3) {
    const p = ease((t - start) / duration); node.style.opacity = p; node.style.transform = `translateY(${22 * (1 - p)}px)`;
  }
  function prepare(scene) {
    current = JSON.stringify(scene); document.documentElement.lang = scene.language;
    for (const id of ['title', 'subtitle', 'category', 'difficulty', 'question', 'outro']) $(id).removeAttribute('style');
    $('title').textContent = scene.labels.title; $('subtitle').textContent = scene.labels.subtitle;
    $('category').textContent = scene.category.toLocaleUpperCase(scene.language);
    const index = ['Beginner', 'Intermediate', 'Advanced', 'Professional'].indexOf(scene.question.difficulty);
    $('difficulty').textContent = index < 0 ? '' : scene.labels.difficulties[index];
    $('qcm').textContent = `QCM #${String(scene.number).padStart(3, '0')}`;
    $('question').textContent = scene.question.text; $('outro').textContent = scene.labels.outro;
    for (const id of ['intro-scene', 'closing-scene']) {
      $(id).querySelector('h2').textContent = scene.labels.title;
      $(id).querySelector('p').textContent = id === 'intro-scene' ? scene.labels.subtitle : scene.labels.outro;
    }
    fit($('title'), 65); fit($('subtitle'), 30); fit($('category'), 20); fit($('difficulty'), 20); fit($('outro'), 30);
    // Expand within the existing panel, then fit. The grid never touches the
    // footer, and no source text, formula or choice is truncated.
    const question = $('question');
    if (question.scrollHeight > 170) { question.style.width = '980px'; question.style.left = '30px'; }
    const height = Math.max(70, Math.min(170, question.scrollHeight));
    question.style.height = height + 'px'; fit(question, 32);
    const extra = Math.max(0, height - 70);
    $('choices').classList.toggle('reference-spacing', extra === 0);
    $('choices').style.top = (132 + extra) + 'px';
    $('choices').style.gridTemplateRows = `repeat(2, ${(580 - extra) / 2}px)`;
    $('choices').style.height = (599 - extra) + 'px';
    $('choices').replaceChildren(...scene.question.choices.map((choice, i) => {
      const card = document.createElement('li'); card.className = 'choice'; card.dataset.choiceId = choice.id;
      const badge = document.createElement('span'); badge.className = 'badge'; badge.textContent = String(i + 1);
      const text = document.createElement('span'); text.className = 'choice-text'; text.textContent = choice.text; text.dir = 'auto';
      if (/\p{Script=Arabic}/u.test(choice.text)) text.style.fontFamily = 'Cairo,OpenSans,sans-serif';
      if (choice.text.length > 45) {
        card.classList.add('long-choice'); text.style.lineHeight = /\p{Script=Arabic}/u.test(choice.text) ? '1.5' : '1.1';
      }
      if (choice.text.length <= 24) card.classList.add('short-choice');
      const overlay = document.createElement('div'); overlay.className = 'correct-overlay'; overlay.append(badge.cloneNode(true), text.cloneNode(true));
      const check = document.createElement('img'); check.className = 'check'; check.src = 'assets/MAEFrFDRXYA.png'; check.alt = '';
      overlay.append(check); card.append(badge, text, overlay); return card;
    }));
    for (const text of document.querySelectorAll('.choice-text')) fit(text, 32);
    glyphs = [...new Intl.Segmenter(scene.language, { granularity: 'grapheme' }).segment(scene.question.text)].map(s => s.segment);
  }
  window.prepareNiveau = prepare;
  window.renderFrame = (scene, t) => {
    if (current !== JSON.stringify(scene)) prepare(scene);
    const a = scene.timing, logo = ease((t - a.logo) / .6);
    $('logo').style.opacity = logo * ease((t - .86) / .3); $('logo').style.transform = `scale(${.55 + .45 * logo})`;
    const title = ease((t - a.title) / .4), breath = .65 + .35 * Math.cos(2 * Math.PI * (t - a.title) / 1.1);
    $('heading').style.opacity = title * breath;
    $('heading').style.transform = `translateY(${(1 - title) * 15}px)`;
    enter($('metadata'), t, a.metadata); enter($('question-panel'), t, a.panel);
    // Reveal metadata in place, retaining the original final text and shaping.
    const categoryProgress = clamp((t - a.metadata) / .67);
    $('category').style.clipPath = scene.language === 'ar'
      ? `inset(0 0 0 ${(1 - categoryProgress) * 100}%)`
      : `inset(0 ${(1 - categoryProgress) * 100}% 0 0)`;
    let count = Math.floor(glyphs.length * clamp((t - a.question) / a.questionTyping) + 1e-7);
    if (scene.language === 'ar' && count < glyphs.length) while (count > 0 && !/\s/u.test(glyphs[count - 1])) count--;
    // Reveal a range of the original shaped text node in its final wrapping.
    // Arabic connected letters stay intact; no character-by-character DOM spans.
    const node = $('question'), range = document.createRange(), box = node.getBoundingClientRect(), scale = box.width / node.offsetWidth;
    range.setStart(node.firstChild, 0); range.setEnd(node.firstChild, glyphs.slice(0, count).join('').length);
    $('text-clip').replaceChildren(...(count ? [...range.getClientRects()] : []).map(rect => {
      const clip = document.createElementNS('http://www.w3.org/2000/svg', 'rect');
      for (const [key, value] of Object.entries({ x: (rect.left - box.left) / scale - 1, y: (rect.top - box.top) / scale - 3, width: rect.width / scale + 2, height: rect.height / scale + 6 })) clip.setAttribute(key, value);
      return clip;
    }));
    [...$('choices').children].forEach((card, i) => {
      enter(card, t, a.choices[i], a.choiceEntrance);
      const correct = scene.question.choices[i].id === scene.question.correct_answer.choice_id;
      const reveal = ease((t - a.reveal) / .25), elapsed = Math.max(0, t - a.reveal);
      const pulse = .925 + .075 * Math.cos(2 * Math.PI * elapsed / 1.1);
      const overlay = card.querySelector('.correct-overlay');
      overlay.style.opacity = correct ? reveal : 0;
      card.children[0].style.opacity = card.children[1].style.opacity = correct ? 1 - reveal : 1;
      overlay.style.transform = `scale(${(.92 + .08 * reveal) * pulse})`;
    });
    enter($('website'), t, a.website);
    enter($('outro'), t, a.outro);
    $('outro').style.opacity *= 1 - clamp((t - a.closing) / ((a.sourceDuration ?? a.duration) - a.closing));
    // Dedicated, readable branded intro: visible scale/slide, then hand off
    // before the reference heading at 1.23 s. No floating background motion.
    const introIn = ease(t / .25), introOut = 1 - ease((t - .76) / .4);
    $('intro-scene').style.opacity = introIn * introOut;
    $('intro-scene').style.transform = `translateY(${-65 * (1 - introOut)}px) scale(${.86 + .14 * introIn})`;
    const introTitle = ease((t - .12) / .35), introSubtitle = ease((t - .28) / .35);
    $('intro-scene').querySelector('h2').style.transform = `translateY(${55 * (1 - introTitle)}px)`;
    $('intro-scene').querySelector('h2').style.opacity = introTitle;
    $('intro-scene').querySelector('p').style.opacity = introSubtitle;
    // The original question/answer/outro sequence remains fully readable.
    // A separate closing card animates only after it has finished.
    const closing = ease((t - a.endCard) / .45);
    for (const id of ['logo', 'heading', 'metadata', 'question-panel', 'outro', 'website']) $(id).style.opacity *= 1 - closing;
    $('closing-scene').style.opacity = closing;
    $('closing-scene').style.transform = `translateY(${70 * (1 - closing)}px)`;
    $('closing-scene').querySelector('img').style.transform = `scale(${.8 + .2 * closing})`;
    const cta = ease((t - a.endCard - .35) / .45);
    $('closing-scene').querySelector('.closing-website').style.opacity = cta;
    $('closing-scene').querySelector('.closing-website').style.transform = `translateY(${45 * (1 - cta)}px)`;
  };
  window.ShortPresentation.install(document.querySelector('main'), (scene, t) => [t, scene.duration]);
})();
