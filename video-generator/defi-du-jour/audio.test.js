const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const os = require('node:os');
const { buildSoundtrack, readWav } = require('../audio-mix');
const { buildTimeline } = require('../render');
const { normalizeAudio } = require('./audio');
const { verify, prepareAudio } = require('../five-seconds/loudness');
test('reference stems are consecutive at the source timing; existing mixer supports isolated audio and bounded looping', t => {
  const doc = structuredClone(require('../five-seconds/sample.json')); doc.video.template = 'defi-du-jour';
  const segment = buildTimeline(doc).segments[0];
  const events = segment.cues.map(([time, file, options]) => ({ time, file, ...options }));
  for (let i = 0; i < events.length - 1; i++) {
    const data = readWav(events[i].file), duration = data.left.length / 48000;
    assert.ok(Math.abs(events[i].time + duration - events[i + 1].time) <= 1 / 48000, `Audio seam ${i} must match the original timeline.`);
  }
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-defi-audio-')); t.after(() => fs.rmSync(root, { recursive: true, force: true }));
  const out = path.join(root, 'audio.wav');
  const level = buildSoundtrack({ events, sections: [], musicEnabled: false, duration: segment.scene.duration, outFile: out });
  assert.equal(level.music, 'template source audio'); assert.ok(Number.isFinite(level.rmsDb));
  assert.equal(readWav(out).left.length, Math.ceil(segment.scene.duration * 48000));
  buildSoundtrack({ events: [{ time: 0, file: events[1].file, duration: 10, loop: true }], sections: [], musicEnabled: false, duration: 10, outFile: out });
  const looped = readWav(out); assert.equal(looped.left.length, 480000);
  assert.ok(looped.left.subarray(9 * 48000).some(sample => Math.abs(sample) > .001));
});

test('high-transient source delivers verified AAC without changing cue duration or relaxing delivery limits', t => {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-defi-delivery-')); t.after(() => fs.rmSync(root, { recursive: true, force: true }));
  const doc = structuredClone(require('../five-seconds/sample.json')); doc.video.template = 'defi-du-jour';
  const segment = buildTimeline(doc).segments[0], source = path.join(root, 'source.wav'), output = path.join(root, 'output.m4a');
  buildSoundtrack({ events: segment.cues.map(([time, file, options]) => ({ time, file, ...options })), sections: [], musicEnabled: false, duration: segment.scene.duration, outFile: source });
  const normalized = normalizeAudio(source);
  assert.equal(readWav(normalized.source).left.length, readWav(source).left.length);
  prepareAudio(source, normalized, output);
  const measured = verify(output);
  assert.ok(Math.abs(measured.input_i + 16) <= .75); assert.ok(measured.input_tp <= -1.5);
});
