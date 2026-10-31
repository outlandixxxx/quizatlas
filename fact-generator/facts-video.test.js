const { test } = require('node:test');
const assert = require('node:assert/strict');
const { validateFactsJob } = require('./job-schema');
const { plan, longCues } = require('./timing');
const job = () => ({ type: 'facts-long', language: 'fr', video: { title: 'Les sciences' }, major: { id: 1, name: 'Physique' }, facts: [{ id: 1, subject_id: 2, subject_name: 'Physique', text: 'La lumière se propage dans le vide.', detail: '', source_url: 'https://example.test/reference' }], render_options: { quality: 'draft', orientation: 'vertical', music: true, sfx: true, musicVolume: .5 } });
test('duration follows content length and count, without a long-form minimum', () => {
  const doc = job(), short = plan(doc).estimatedDuration;
  assert.ok(short < 30);
  doc.facts[0].text += ' Une explication plus longue et réellement disponible.'.repeat(20);
  assert.ok(plan(doc).estimatedDuration > short + 35);
  doc.facts.push({ ...doc.facts[0], id: 2, text: 'Une autre observation.' });
  assert.ok(plan(doc).estimatedDuration > short + 40);
});
test('short content is flagged rather than accelerated to fit a fixed target', () => {
  const doc = job(); doc.type = 'facts-short';
  doc.facts = Array.from({ length: 12 }, (_, i) => ({ ...doc.facts[0], id: i + 1, text: doc.facts[0].text + i }));
  const result = validateFactsJob(doc);
  assert.ok(result.shortTooLong); assert.ok(result.estimatedDuration > 60);
});
test('rejects duplicates, blank facts, invalid languages and untrusted settings', () => {
  for (const mutate of [d => d.facts.push(d.facts[0]), d => d.facts[0].text = ' ', d => d.language = 'xx', d => d.render_options.output = '../../x', d => d.render_options.target_duration = 1200, d => d.type = 'shell', d => d.facts[0].source_url = 'javascript:alert(1)']) {
    const doc = job(); mutate(doc); assert.throws(() => validateFactsJob(doc));
  }
});
test('preserves Arabic and scientific notation through pagination', () => {
  const doc = job(); doc.language = 'ar'; doc.facts[0].text = 'الماء H₂O والطاقة E=mc². '.repeat(25).trim();
  const pages = validateFactsJob(doc).scenes.filter(s => s.kind === 'fact');
  assert.ok(pages.length > 1);
  assert.equal(pages.map(s => s.text).join(' '), doc.facts[0].text.replace(/\s+/g, ' '));
});
test('dimensions reflect quality and orientation', () => {
  const doc = job(); assert.equal(validateFactsJob(doc).width, 360);
  doc.render_options.orientation = 'horizontal'; doc.render_options.quality = 'final';
  assert.equal(validateFactsJob(doc).width, 1920); assert.equal(validateFactsJob(doc).height, 1080);
});
test('YouTube montage cues align with natural scene timing without countdown sounds', () => {
  const doc = job(), timeline = plan(doc);
  assert.equal(timeline.timingVersion, 2);
  assert.ok(timeline.estimatedDuration < 30);
  for (const scene of timeline.scenes) {
    for (const [time, file] of longCues(scene)) {
      assert.ok(time >= 0 && time < scene.duration);
      assert.ok(!/tick|heartbeat|countdown/.test(file));
    }
  }
  assert.ok(longCues(timeline.scenes[0]).some(([, file]) => file === 'sting'));
  doc.type = 'facts-short'; assert.equal(plan(doc).timingVersion, 1);
});
