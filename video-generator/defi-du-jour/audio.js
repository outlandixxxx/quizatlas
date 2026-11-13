const path = require('node:path');
const { spawnSync } = require('node:child_process');
const loudness = require('../five-seconds/loudness');
// The supplied export has a very high transient/average ratio. Reduce those
// peaks before the existing normalization/decoded-AAC verification pass.
const COMPRESSION = 'acompressor=threshold=0.04:ratio=6:attack=1:release=150:knee=2:makeup=1';
function normalizeAudio(soundtrack) {
  const source = path.join(path.dirname(soundtrack), 'defi-compressed.wav');
  const result = spawnSync(process.env.FFMPEG_PATH || 'ffmpeg', ['-hide_banner', '-nostdin', '-y', '-i', soundtrack, '-af', COMPRESSION, '-ar', '48000', '-ac', '2', '-c:a', 'pcm_s16le', source], { encoding: 'utf8', windowsHide: true, timeout: 120000, maxBuffer: 4 * 1024 * 1024 });
  if (result.error || result.status !== 0) throw Error(`Défi audio preparation failed: ${result.error?.message || String(result.stderr).slice(-1000)}`);
  return { ...loudness.normalization(source, -2.8), source, preprocessing: COMPRESSION };
}
module.exports = { normalizeAudio, COMPRESSION };
