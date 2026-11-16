const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const { spawnSync } = require('node:child_process');
const { buildTimeline } = require('../render');
const { buildSoundtrack } = require('../audio-mix');
const { TARGET, normalization, measure, verify, prepareAudio } = require('./loudness');
test('Short mix normalizes decoded AAC near -16 LUFS and below -1.5 dBTP without changing cue times', t => {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-short-loudness-'));
  t.after(() => fs.rmSync(root, { recursive: true, force: true }));
  const scene = buildTimeline(require('./sample.json')).segments[0], wav = path.join(root, 'mix.wav'), audio = path.join(root, 'normalized.m4a');
  buildSoundtrack({ events: scene.cues.map(([time, file, options]) => ({ time, file, ...options })), sections: [{ start: 0, end: scene.scene.duration, kind: 'question', duck: 'question' }], duration: scene.scene.duration, outFile: wav });
  const normalized = normalization(wav);
  assert.throws(() => verify(wav), /outside delivery limits/);
  const prepared = prepareAudio(wav, normalized, audio);
  const output = verify(prepared.file);
  assert.ok(Math.abs(output.input_i - TARGET.integrated) <= .75); assert.ok(output.input_tp <= -1.5);
  assert.ok(output.input_i > normalized.input.input_i);
  const probe = spawnSync(process.env.FFPROBE_PATH || 'ffprobe', ['-v', 'error', '-show_entries', 'format=duration', '-of', 'json', audio], { encoding: 'utf8' });
  assert.equal(probe.status, 0); assert.ok(Math.abs(Number(JSON.parse(probe.stdout).format.duration) - scene.scene.duration) < .1);
  const muxed = path.join(root, 'muxed.mp4');
  const mux = spawnSync(process.env.FFMPEG_PATH || 'ffmpeg', ['-hide_banner', '-v', 'error', '-threads', '1', '-filter_threads', '1',
    '-f', 'lavfi', '-i', 'color=c=black:s=32x32:r=1', '-i', audio, '-map', '0:v', '-map', '1:a',
    '-c:v', 'libx264', '-threads', '1', '-c:a', 'copy', '-t', String(scene.scene.duration), muxed], { encoding: 'utf8' });
  assert.equal(mux.status, 0, mux.stderr);
  const final = verify(muxed);
  assert.ok(Math.abs(final.input_i - output.input_i) < .1);
  assert.ok(Math.abs(final.input_tp - output.input_tp) < .1);
  assert.throws(() => prepareAudio(wav, normalized, audio), /Existing Short audio preserved/);
  assert.deepEqual(measure(audio), output);
});
test('AAC preflight rejects unsafe audio before video-frame rendering', t => {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-short-preflight-'));
  t.after(() => fs.rmSync(root, { recursive: true, force: true }));
  const source = path.join(root, 'source.wav'), output = path.join(root, 'unsafe.m4a');
  const result = spawnSync(process.env.FFMPEG_PATH || 'ffmpeg', ['-hide_banner', '-v', 'error', '-f', 'lavfi',
    '-i', 'sine=frequency=440:duration=1:sample_rate=48000', source], { encoding: 'utf8' });
  assert.equal(result.status, 0, result.stderr);
  assert.throws(() => prepareAudio(source, { filter: 'volume=20dB' }, output), /outside delivery limits/);
});
test('invalid or silent audio cannot be published as a verified Short', t => {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-short-silence-'));
  t.after(() => fs.rmSync(root, { recursive: true, force: true }));
  const wav = path.join(root, 'silence.wav');
  const result = spawnSync(process.env.FFMPEG_PATH || 'ffmpeg', ['-hide_banner', '-loglevel', 'error', '-f', 'lavfi', '-i', 'anullsrc=r=48000:cl=stereo', '-t', '1', wav], { encoding: 'utf8' });
  assert.equal(result.status, 0); assert.throws(() => normalization(wav), /silent|invalid/);
  assert.throws(() => measure(path.join(root, 'missing.wav')), /processing failed/);
});
