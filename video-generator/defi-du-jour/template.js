(() => {
  const $ = id => document.getElementById(id), clamp = x => Math.max(0, Math.min(1, x)), ease = x => 1 - (1 - clamp(x)) ** 3;
  let current, glyphs;
  function fit(node, min) {
    let size = parseFloat(getComputedStyle(node).fontSize);
    while ((node.scrollHeight > node.clientHeight + 1 || node.scrollWidth > node.clientWidth + 1) && size > min) node.style.fontSize = --size + 'px';
    if (node.scrollHeight > node.clientHeight + 1 || node.scrollWidth > node.clientWidth + 1) throw Error(`Source content does not fit ${node.id || node.className} at readable sizes. Preview and replace the question; nothing was truncated.`);
  }
  function enter(node, t, start, duration = .35) {
    const p = ease((t - start) / duration); node.style.opacity = p; node.style.transform = `translateY(${(1 - p) * 22}px)`;
  }
  function prepare(scene) {
    current = JSON.stringify(scene); document.documentElement.lang = scene.language;
    for (const id of ['title', 'subtitle', 'category', 'difficulty', 'qcm', 'question', 'trophy-text', 'website-text']) $(id).removeAttribute('style');
    $('title').textContent = scene.labels.title; $('subtitle').textContent = scene.labels.subtitle;
    $('category').textContent = scene.category.toLocaleUpperCase(scene.language); $('difficulty').textContent = scene.difficulty.toUpperCase();
    $('qcm').textContent = `QCM #${String(scene.number).padStart(3, '0')}`;
    $('question').textContent = scene.question.text; $('website-text').textContent = scene.website;
    $('trophy-text').textContent = scene.labels.trophy;
    fit($('title'), 54); fit($('subtitle'), 24); fit($('category'), 20); fit($('difficulty'), 20); fit($('qcm'), 20); fit($('website-text'), 28);
    // Keep reference geometry for comparable text; borrow space only above the answers.
    const extra = Math.max(0, Math.min(100, $('question').scrollHeight - 110));
    $('question').style.height = (110 + extra) + 'px';
    $('choices').style.top = (182.58 + extra) + 'px'; $('question-card').style.height = (640.77 + extra) + 'px';
    fit($('question'), 32);
    for (const [id, top] of [['trophy', 1325.17], ['arrow', 1481.92]]) $(id).style.top = (top + extra) + 'px';
    const footerShift = Math.max(0, extra - 30);
    $('website').style.top = (1542.24 + footerShift) + 'px';
    $('footer').style.top = (1688.47 + footerShift) + 'px';
    $('choices').replaceChildren(...scene.question.choices.map((choice, index) => {
      const row = document.createElement('li'); row.dataset.choiceId = choice.id; row.style.top = (index * 111.3224) + 'px';
      const paper = document.createElement('img'); paper.src = 'assets/MAHX6Ikr_oI.png'; paper.alt = ''; paper.className = 'answer-paper';
      const highlight = document.createElement('span'); highlight.className = 'highlight';
      const letter = document.createElement('span'); letter.className = 'letter'; letter.textContent = choice.label;
      const text = document.createElement('span'); text.className = 'choice-text'; text.textContent = choice.text; text.dir = 'auto';
      if (/\p{Script=Arabic}/u.test(choice.text)) { text.style.fontFamily = 'Cairo,OpenSans,sans-serif'; text.style.lineHeight = '1.8'; }
      const check = document.createElement('img'); check.src = 'assets/MAHX6PkI49E.png'; check.alt = ''; check.className = 'answer-check';
      row.append(paper, highlight, letter, text, check); return row;
    }));
    for (const row of $('choices').children) fit(row.querySelector('.choice-text'), 28);
    $('footer').replaceChildren(...scene.labels.footer.map((text, i) => {
      const node = document.createElement('section'), image = document.createElement('img'), p = document.createElement('p');
      image.src = 'assets/' + ['MAHX6Ahz8S8', 'MAHX6K5lc78', 'MAHX6BG1D5o', 'MAHX6EFqPJA'][i] + '.png'; image.alt = ''; image.style.height = (137.8 - footerShift) + 'px'; p.textContent = text;
      node.append(image, p); return node;
    }));
    if (!$('pattern').children.length) for (const [left, top] of [[0,137.17],[683.74,35.19],[401.88,488],[-61.13,787.29],[-29.99,1307.75],[833.81,534.29],[796.55,1178.13],[805.63,1561.9],[288.18,1694.32]]) {
      const image = document.createElement('img'); image.className = 'pattern-piece'; image.src = 'assets/MAGYF85HWWw.png'; image.alt = ''; image.style.left = left + 'px'; image.style.top = top + 'px'; $('pattern').append(image);
    }
    glyphs = [...new Intl.Segmenter(scene.language, { granularity: 'grapheme' }).segment(scene.question.text)].map(s => s.segment);
    if (!$('text-clip')) {
      const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
      svg.setAttribute('width', '0'); svg.setAttribute('height', '0'); svg.style.position = 'absolute';
      const clip = document.createElementNS(svg.namespaceURI, 'clipPath'); clip.id = 'text-clip'; clip.setAttribute('clipPathUnits', 'userSpaceOnUse');
      svg.append(clip); $('stage').append(svg);
    }
    $('question').style.clipPath = 'url(#text-clip)';
  }
  window.prepareDefi = prepare;
  window.renderFrame = (scene, t) => {
    if (current !== JSON.stringify(scene)) prepare(scene);
    const a = scene.timing;
    const p = ease((t - a.title) / a.titleEntrance), pulse = 1 + .055 * Math.sin(2 * Math.PI * (t - .5) / .9);
    $('title-panel').style.opacity = p; $('title-panel').style.transform = `rotate(8deg) scale(${(.7 + .3 * p) * pulse})`;
    enter($('metadata'), t, a.metadata); enter($('question-card'), t, a.card);
    let count = Math.floor(glyphs.length * clamp((t - a.question) / a.questionTyping) + 1e-7);
    if (scene.language === 'ar' && count < glyphs.length) while (count > 0 && !/\s/u.test(glyphs[count - 1])) count--;
    // Clip the original text node in its final layout. Connected Arabic glyphs and
    // centered line breaks never change shape or jump as the prefix is revealed.
    const range = document.createRange(), question = $('question'), box = question.getBoundingClientRect(), scale = box.width / question.offsetWidth;
    range.setStart(question.firstChild, 0); range.setEnd(question.firstChild, glyphs.slice(0, count).join('').length);
    $('text-clip').replaceChildren(...(count ? [...range.getClientRects()] : []).map(rect => {
      const node = document.createElementNS('http://www.w3.org/2000/svg', 'rect');
      for (const [key, value] of Object.entries({ x: (rect.left - box.left) / scale - 1, y: (rect.top - box.top) / scale - 2, width: rect.width / scale + 2, height: rect.height / scale + 4 })) node.setAttribute(key, value);
      return node;
    }));
    [...$('choices').children].forEach((row, i) => {
      enter(row, t, a.choices[i], a.choiceEntrance);
      const correct = scene.question.choices[i].id === scene.question.correct_answer.choice_id;
      const inP = ease((t - a.reveal) / .25), outP = 1 - ease((t - a.highlightExit) / .25);
      row.querySelector('.highlight').style.opacity = correct ? inP * outP : 0;
      row.querySelector('.highlight').style.transform = `scale(${.96 + .04 * inP})`;
      row.querySelector('.answer-check').style.opacity = correct ? inP * (1 - clamp((t - a.checkExit) / .25)) : 0;
      row.classList.toggle('correct', correct && t >= a.reveal);
      if (correct && t >= a.reveal) {
        const pulse = 1 + .045 * Math.sin(2 * Math.PI * (t - a.reveal) / .9);
        row.querySelector('.highlight').style.transform = `scale(${pulse})`;
        row.querySelector('.answer-check').style.transform = `scale(${pulse})`;
      } else row.querySelector('.answer-check').style.transform = 'none';
    });
    enter($('trophy'), t, a.trophy); enter($('arrow'), t, a.trophy + .1); enter($('footer'), t, a.footer);
    enter($('website'), t, a.website, .3);
    const close = ease((t - a.closing) / ((a.sourceDuration ?? a.duration) - a.closing));
    $('composition').style.transform = `scale(${1 - .035 * close})`; $('composition').style.opacity = 1 - close;
    $('composition').style.filter = `blur(${close * 8}px)`;
  };
  window.ShortPresentation.install(document.querySelector('main'), (scene, t) => [t, scene.duration]);
})();
