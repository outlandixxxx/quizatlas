/* Deterministic frames: no wall-clock CSS animations, no remote assets or HTML input. */
(() => {
  const $ = id => document.getElementById(id), clamp = x => Math.max(0, Math.min(1, x)), ease = x => 1 - (1 - clamp(x)) ** 3;
  let current, boundaries;
  const graphemes = (text, language) => [...new Intl.Segmenter(language, { granularity: 'grapheme' }).segment(text)].map(x => x.segment);
  function fit(element, min) {
    let size = parseFloat(getComputedStyle(element).fontSize);
    while ((element.scrollHeight > element.clientHeight + 1 || element.scrollWidth > element.clientWidth + 1) && size > min) element.style.fontSize = --size + 'px';
    if (element.scrollHeight > element.clientHeight + 1 || element.scrollWidth > element.clientWidth + 1) throw Error(`Source content does not fit ${element.id || element.className} at readable sizes. Select shorter content; no text was truncated.`);
  }
  function enter(element, t, start, duration = .45, scale = false) {
    const p = ease((t - start) / duration); element.style.opacity = p;
    element.style.transform = scale ? `scale(${.75 + .25 * p})` : `translateY(${(1 - p) * 24}px)`;
  }
  function prepare(scene) {
    current = scene; document.documentElement.lang = scene.language;
    for (const id of ['question', 'explanation', 'category', 'difficulty', 'qcm', 'explanation-heading']) $(id).removeAttribute('style');
    $('seconds').textContent = scene.labels.seconds; $('respond').textContent = scene.labels.respond;
    $('category').textContent = scene.category; $('difficulty').textContent = scene.difficulty.toUpperCase();
    $('qcm').textContent = `QCM #${String(scene.number).padStart(3, '0')}`;
    $('question').textContent = scene.question.text; $('question').style.height = '151px';
    const extraHeight = Math.max(0, Math.min(110, $('question').scrollHeight - 151));
    $('question').style.height = (151 + extraHeight) + 'px'; $('question-card').style.height = (222 + extraHeight) + 'px';
    for (const [id, top] of [['choices', 944], ['timer', 1351], ['good-luck', 1404], ['localized-luck', 1400]]) $(id).style.top = (top + extraHeight) + 'px';
    fit($('question'), 34);
    fit($('category'), 20); fit($('difficulty'), 18);
    $('explanation').textContent = scene.question.explanation; $('explanation').style.height = '450px'; fit($('explanation'), 38);
    $('explanation-heading').textContent = scene.labels.explanation;
    $('notice-text').textContent = scene.labels.notice; $('more').textContent = scene.labels.more;
    document.querySelectorAll('.website').forEach(n => n.textContent = scene.website);
    for (const node of document.querySelectorAll('.website')) fit(node, 32);
    $('localized-luck').textContent = scene.labels.luck;
    $('choices').replaceChildren(...scene.question.choices.map(c => {
      const item = document.createElement('li'), letter = document.createElement('span'), text = document.createElement('span'), check = document.createElement('span');
      letter.className = 'letter'; letter.textContent = c.label;
      text.className = 'choice-text'; text.textContent = c.text; text.dir = 'auto';
      check.className = 'answer-check'; check.textContent = '✓';
      item.dataset.choiceId = c.id; item.append(letter, text, check); return item;
    }));
    for (const item of $('choices').children) { const text = item.querySelector('.choice-text'); text.style.maxHeight = '70px'; fit(text, 30); }
    $('dots').replaceChildren();
    for (const [ox, oy, cols, rows] of [[50, 37, 4, 4], [967, 1400, 3, 8]]) for (let y = 0; y < rows; y++) for (let x = 0; x < cols; x++) {
      if (ox === 50 && y === 3 && x === 3) continue;
      const circle = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
      for (const [key, value] of Object.entries({ cx: ox + x * 30, cy: oy + y * 32, r: 6 })) circle.setAttribute(key, value);
      $('dots').append(circle);
    }
    boundaries = { question: graphemes(scene.question.text, scene.language), explanation: graphemes(scene.question.explanation, scene.language) };
  }
  window.prepareFive = prepare;
  window.renderFrame = (scene, t) => {
    if (current !== scene && JSON.stringify(current) !== JSON.stringify(scene)) prepare(scene);
    const timing = scene.timing, e = t - timing.explanation, explanationOpacity = clamp(e / .3), mainOpacity = 1 - clamp(e / .3);
    $('question-background').style.opacity = mainOpacity * (1 - clamp((t - 8) / .5)); $('explanation-background').style.opacity = explanationOpacity;
    $('quiz-scene').style.opacity = mainOpacity; $('explanation-scene').style.opacity = explanationOpacity;
    const logoP = ease(t / .85); $('logo').style.opacity = clamp(t / .3);
    $('logo').style.top = (46 - 54 * explanationOpacity) + 'px';
    $('logo').style.transform = `translateX(${-3 * explanationOpacity}px) scale(${1 + .65 * (1 - logoP) - .12 * explanationOpacity}) rotate(${(1 - logoP) * -8}deg)`;
    enter($('banner'), t, .95, .6, true);
    // Repeating 0.9-second Canva pulse, measured from the green card border at 10 FPS.
    const widths = [918, 886, 822, 770, 732, 706, 686, 752, 842];
    const phase = ((t - 2.2) % .9 + .9) % .9 * 10, index = Math.floor(phase), fraction = phase - index;
    const pulse = (widths[index] + (widths[(index + 1) % 9] - widths[index]) * fraction) / 821;
    if (t >= 1.55) $('banner').style.transform = `scale(${pulse})`;
    if (e >= 0) {
      const p = clamp((e - .5) / .4), remaining = 1 - p;
      $('banner').style.opacity = mainOpacity + explanationOpacity * ease((e - .5) / .4);
      $('banner').style.transform = `translate(${explanationOpacity * remaining * 860}px,${explanationOpacity * remaining * 20}px) rotate(${explanationOpacity * remaining * 32}deg) scale(${mainOpacity * pulse + explanationOpacity})`;
    }
    enter($('metadata'), t, 1.45, .5); enter($('question-card'), t, timing.question, .35);
    $('category-art').style.opacity = 1 - clamp((t - timing.countdown - .2) / .35);
    const qProgress = clamp((t - timing.question - .1) / timing.questionTyping);
    $('question').textContent = boundaries.question.slice(0, Math.floor(boundaries.question.length * qProgress)).join('');
    [...$('choices').children].forEach((item, i) => {
      enter(item, t, timing.choices[i], timing.choiceEntrance);
      const correct = scene.question.correct_answer.choice_id === scene.question.choices[i].id;
      item.classList.toggle('correct', correct && t >= timing.reveal);
      item.querySelector('.answer-check').style.visibility = correct && t >= timing.reveal ? 'visible' : 'hidden';
      if (correct && t >= timing.reveal) item.style.transform = `scale(${1 + .018 * Math.sin(clamp((t - timing.reveal) / .4) * Math.PI)})`;
    });
    enter($('timer'), t, timing.countdownEntrance, .4, true);
    $('timer').style.opacity = Number($('timer').style.opacity) * (1 - clamp((t - timing.countdownEnd) / .25));
    $('count').textContent = String(Math.max(1, Math.min(5, 5 - Math.floor(t - timing.countdown + 1e-7)))).padStart(2, '0');
    // Move only the gaps: keep the original black-left/gold-right paint stationary.
    const degrees = -10 + Math.max(0, t - timing.countdown) * 18;
    $('timer-segments').setAttribute('stroke-dashoffset', -degrees * (2 * Math.PI * 117) / 360);
    enter($('good-luck'), t, timing.reveal, .5); enter($('localized-luck'), t, timing.reveal, .5);
    $('good-luck').style.visibility = scene.language === 'en' ? 'visible' : 'hidden';
    $('localized-luck').style.visibility = scene.language === 'en' ? 'hidden' : 'visible';
    enter($('question-cta'), t, timing.reveal + 1, .5);
    enter($('explanation-card'), e, .05, .5);
    const heading = $('explanation-card').querySelector('h1'), hp = clamp((e - .82) / .28);
    heading.style.opacity = clamp((e - .82) / .1);
    heading.style.transform = `translate(${(1 - hp) * 450}px,${-(1 - hp) * 250}px) rotate(${(1 - hp) * 24}deg)`;
    const p = clamp((e - .25) / timing.explanationTyping);
    // Reveal complete Arabic words, preserving connected shaping and every original character.
    let length = Math.floor(boundaries.explanation.length * p + 1e-7);
    if (scene.language === 'ar' && p < 1) while (length > 0 && !/\s/u.test(boundaries.explanation[length - 1])) length--;
    $('explanation').textContent = boundaries.explanation.slice(0, length).join('');
    enter($('more'), e, .15, .3); enter($('arrow'), e, .15, .5); enter($('final-website'), e, 1.9, .6);
    const wp = ease((e - 1.9) / .6);
    const websiteScale = .9 + .1 * Math.cos(2 * Math.PI * (t - timing.explanation - 5.8) / .9);
    $('final-website').style.transform = `translateY(${(1 - wp) * 24}px) rotate(${(1 - wp) * -12}deg) scale(${websiteScale})`;
  };
  window.ShortPresentation.install(document.querySelector('main'), (scene, t) => [t, scene.duration]);
})();
