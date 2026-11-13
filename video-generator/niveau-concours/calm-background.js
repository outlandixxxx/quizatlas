// SPDX-License-Identifier: CC0-1.0
// Original, sample-free ambient composition for MaroQuiz. See
// assets/CALM_BACKGROUND_LICENSE.md. No recordings, noise, percussion or loops.
const fs = require('node:fs');
const RATE = 48000;
const CHORDS = [[48, 55, 60, 64], [45, 52, 57, 60], [41, 48, 53, 57], [43, 50, 55, 59]];
const frequency = note => 440 * 2 ** ((note - 69) / 12);
function writeBackground(file, duration) {
  if (!Number.isFinite(duration) || duration <= 0 || duration > 60) throw Error('Invalid calm soundtrack duration.');
  const frames = Math.round(duration * RATE), data = Buffer.alloc(44 + frames * 4);
  data.write('RIFF', 0); data.writeUInt32LE(36 + frames * 4, 4); data.write('WAVE', 8);
  data.write('fmt ', 12); data.writeUInt32LE(16, 16); data.writeUInt16LE(1, 20); data.writeUInt16LE(2, 22);
  data.writeUInt32LE(RATE, 24); data.writeUInt32LE(RATE * 4, 28); data.writeUInt16LE(4, 32); data.writeUInt16LE(16, 34);
  data.write('data', 36); data.writeUInt32LE(frames * 4, 40);
  const smooth = x => .5 - .5 * Math.cos(Math.PI * Math.max(0, Math.min(1, x)));
  const frequencies = CHORDS.map(chord => chord.map(frequency));
  for (let i = 0; i < frames; i++) {
    const t = i / RATE, chord = Math.floor(t / 8), within = t % 8;
    const blend = smooth((within - 5) / 3), a = Math.cos(blend * Math.PI / 2), b = Math.sin(blend * Math.PI / 2);
    const envelope = smooth(t / .9) * smooth((frames - 1 - i) / RATE / 1.6);
    let left = 0, right = 0;
    for (let voice = 0; voice < 4; voice++) {
      const tone = index => {
        const phase = 2 * Math.PI * frequencies[index % frequencies.length][voice] * t;
        return Math.sin(phase) + .06 * Math.sin(2 * phase);
      };
      // Absolute oscillator phase and a smooth chord crossfade avoid restart
      // clicks. The composition is synthesized for the whole requested length.
      const value = (a * tone(chord) + b * tone(chord + 1)) * .035 * envelope;
      const pan = [0.42, 0.58, 0.47, 0.53][voice];
      left += value * Math.sqrt(1 - pan); right += value * Math.sqrt(pan);
    }
    data.writeInt16LE(Math.round(left * 32767), 44 + i * 4);
    data.writeInt16LE(Math.round(right * 32767), 46 + i * 4);
  }
  fs.writeFileSync(file, data, { flag: 'wx', mode: 0o600 });
  return file;
}
module.exports = { writeBackground, RATE };
