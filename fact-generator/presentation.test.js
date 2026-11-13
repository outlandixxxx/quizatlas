const { test } = require('node:test');
const assert = require('node:assert/strict');
const P = require('./presentation');
const T = require('./timing');
const { validateFactsJob } = require('./job-schema');
const values = text => P.select(text).map(s => s.text);
const job = () => ({ type: 'facts-long', language: 'fr', major: { id: 1, name: 'Physique' }, video: { title: 'Découverte' },
  facts: [{ id: 1, text: 'La vitesse vaut environ 300 000 km/s.', detail: '', source_url: null }],
  render_options: { quality: 'draft', orientation: 'vertical', music: true, sfx: true, musicVolume: .6 } });

test('quantities retain complete units, signs, ranges, bounds and qualifiers', () => {
  for (const [text, expected] of [
    ['La vitesse vaut environ 300 000 km/s.', 'environ 300 000 km/s'],
    ['Le taux est inférieur à 5 %.', 'inférieur à 5 %'], ['La température est −10 °C.', '−10 °C'],
    ['Entre 10 et 20 km restent à parcourir.', 'Entre 10 et 20 km'],
    ['La masse est de 19,7 kg au plus.', '19,7 kg au plus'], ['La tolérance est ±5 %.', '±5 %'],
    ['The rate is at most 2 GB per second.', 'at most 2 GB per second'],
    ['تشكل المادة أقل من 5٪ من الكون.', 'أقل من 5٪'], ['تدوم نحو 243 يومًا أرضيًا.', 'نحو 243 يومًا أرضيًا'],
  ]) assert.ok(values(text).includes(expected), JSON.stringify([text, values(text)]));
});
test('dates, explicit technical terms and intact simple formulas are exact source spans', () => {
  for (const [text, expected] of [
    ['Le prototype fut construit en 1964.', 'en 1964'], ['It launched on 12 March 1990.', '12 March 1990'],
    ['صُنع الجهاز عام 1964.', 'عام 1964'], ['Un terme appelé « photosynthèse » est étudié.', 'photosynthèse'],
    ['The technique is called “machine learning”.', 'machine learning'], ['La relation E=mc² demeure inchangée.', 'E=mc²'],
    ['La relation y=x⁻² est intacte.', 'y=x⁻²'],
  ]) {
    assert.ok(values(text).includes(expected), text);
    for (const span of P.select(text)) assert.equal(text.slice(span.start, span.end), span.text);
  }
});
test('ambiguous numbers, capitalized words, URLs and unsupported formulas stay unstyled', () => {
  for (const text of ['Paris est une ville. 12345 est un identifiant.', 'Edward (II) visited Paris.',
    'https://example.test/12kg', 'La constante G = 6,67×10⁻¹¹ est exacte.', 'Une accélération de 10 m/s².',
    'It is not exactly 5 %.', 'La formule y=x² sin(x) reste sans style.']) assert.deepEqual(P.select(text), [], text);
});
test('selection is optional, bounded to two and never rewrites original content', () => {
  const text = 'Environ 20 kg, puis 30 kg et 40 kg; E=mc².';
  const spans = P.select(text); assert.equal(spans.length, 2);
  assert.deepEqual(P.select('Texte complet sans évidence.'), []);
  assert.deepEqual(P.select(text, []), []);
  assert.ok(spans.every(span => P.validSpan(text, span)));
});
test('manual ranges require exact full words, nonoverlap and intact Arabic diacritics', () => {
  const text = 'التعلّم الآلي و E=mc².';
  const term = 'التعلّم الآلي', span = { start: 0, end: term.length, text: term };
  assert.deepEqual(P.select(text, [span]), [span]);
  for (const bad of [{ ...span, text: 'نص آخر' }, { start: 1, end: 5, text: text.slice(1, 5) },
    { start: 0, end: 5, text: text.slice(0, 5) }]) assert.throws(() => P.select(text, [bad]));
  assert.throws(() => P.select(text, [span, span]));
  const doc = job(); doc.facts[0].highlights = [{ start: 0, end: 7, text: 'Fake!!!' }];
  assert.throws(() => validateFactsJob(doc));
});
test('pagination and groups preserve whitespace, scientific notation and every Arabic character', () => {
  const text = ('  الماء H₂O والطاقة E=mc².\nالتعلّم الآلي يحافظ على الكلمات المتصلة. ').repeat(15);
  const spans = P.select(text), pages = P.paginate(text, 200, spans);
  assert.equal(pages.map(p => p.text).join(''), text);
  assert.equal(P.groups(text, spans).map(p => p.text).join(''), text);
  for (const page of pages) for (const span of P.within(spans, page)) assert.equal(page.text.slice(span.start, span.end), span.text);
  const doc = job(); doc.facts[0].text = text;
  assert.equal(validateFactsJob(doc).doc.facts[0].text, text);
});
test('Long pacing adds 1.8 seconds to EXPLORER and .75 seconds after each Fact', () => {
  const doc = job(); doc.facts = Array.from({ length: 8 }, (_, i) => ({ ...doc.facts[0], id: i + 1, text: `Observation numéro ${i}.` }));
  const { scenes } = T.plan(doc), chapter = scenes.find(s => s.kind === 'chapter');
  assert.equal(chapter.duration, 3.6 + T.reading(doc.major.name, 'fr') * .2);
  const facts = scenes.filter(s => s.kind === 'fact'); assert.equal(facts.length, 8);
  for (const scene of facts) {
    assert.equal(scene.duration, 1.35 + T.reading(scene.text, 'fr') + .6 + .75);
    assert.ok(scene.presentation.visibleBy + .08 + P.DRAW < scene.duration - .6);
    assert.ok(T.thumbnailTime(scene) >= scene.presentation.visibleBy + .08 + P.DRAW);
    assert.ok(T.thumbnailTime(scene) < scene.duration - .6);
    assert.ok(T.longCues(scene).every(([at]) => at >= 0 && at < scene.duration));
  }
});
test('Short timing stays unchanged; successive encoded scenes have exact frame timestamps', () => {
  const row = T.shortRow(job(), job().facts[0]);
  const timing = T.shortTiming(row, 'fr');
  assert.equal(timing.factEnd, timing.fact + T.words(row.fact) * .15);
  const scenes = T.encodedScenes(T.plan(job()).scenes, 15);
  let frame = 0;
  for (const scene of scenes) { assert.equal(scene.startFrame, frame); assert.equal(scene.start, frame / 15); frame += scene.frames; }
  assert.equal(scenes.at(-1).startFrame + scenes.at(-1).frames, frame);
});

test('the existing soundtrack keeps its volume controls and exact encoded scene duration', () => {
  const fs = require('node:fs'), os = require('node:os'), path = require('node:path');
  const { spawnSync } = require('node:child_process');
  const { buildSoundtrack } = require('./audio-mix');
  const directory = fs.mkdtempSync(path.join(os.tmpdir(), 'facts-presentation-audio-'));
  try {
    const file = path.join(directory, 'soundtrack.wav'), duration = 2.125;
    const levels = buildSoundtrack({ duration, outFile: file,
      events: [{ time: .35, file: { typing: { duration: .3, cps: 5, gain: .2 } } }],
      sections: [{ start: 0, end: duration, kind: 'question', duck: 'type' }],
      musicEnabled: true, sfxEnabled: true, musicVolume: .6,
      fadeIn: .2, fadeOut: .4 });
    assert.ok(Number.isFinite(levels.peakDb) && levels.peakDb < 0);
    const probe = spawnSync('ffprobe', ['-v', 'error', '-show_entries', 'format=duration', '-of', 'json', file], { encoding: 'utf8' });
    assert.equal(probe.status, 0, probe.stderr);
    assert.ok(Math.abs(Number(JSON.parse(probe.stdout).format.duration) - duration) < .001);
  } finally { fs.rmSync(directory, { recursive: true, force: true }); }
});
