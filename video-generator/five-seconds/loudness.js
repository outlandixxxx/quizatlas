const { spawnSync } = require('node:child_process');
const fs = require('node:fs');
// A little headroom below the delivery limit accounts for AAC reconstruction peaks.
const TARGET = { integrated: -16, normalizationPeak: -3, maximumPeak: -1.5, loudnessRange: 11 };
function run(args) {
  const result = spawnSync(process.env.FFMPEG_PATH || 'ffmpeg', ['-hide_banner', '-nostdin', '-threads', '1', '-filter_threads', '1', ...args], { encoding: 'utf8', windowsHide: true, timeout: 120000, maxBuffer: 4 * 1024 * 1024 });
  if (result.error || result.status !== 0) throw Error(`Short loudness processing failed: ${result.error?.message || String(result.stderr).slice(-1200)}`);
  return result.stderr;
}
function measure(file, peak = TARGET.normalizationPeak) {
  if (!Number.isFinite(peak) || peak < -9 || peak > 0) throw Error('Invalid Short audio peak target.');
  const log = run(['-i', file, '-vn', '-af', `loudnorm=I=-16:TP=${peak}:LRA=11:print_format=json`, '-f', 'null', '-']);
  const match = log.match(/\{\s*"input_i"[\s\S]*?\}/g)?.at(-1);
  if (!match) throw Error('FFmpeg did not report Short loudness measurements.');
  const raw = JSON.parse(match), result = Object.fromEntries(Object.entries(raw).filter(([k]) => k !== 'normalization_type').map(([k, v]) => [k, Number(v)]));
  for (const field of ['input_i', 'input_tp', 'input_lra', 'input_thresh', 'target_offset']) if (!Number.isFinite(result[field])) throw Error('Short audio is silent or has invalid loudness measurements.');
  return result;
}
function normalization(file, peak = TARGET.normalizationPeak) {
  const input = measure(file, peak);
  const filter = `loudnorm=I=-16:TP=${peak}:LRA=11:measured_I=${input.input_i}:measured_TP=${input.input_tp}:measured_LRA=${input.input_lra}:measured_thresh=${input.input_thresh}:offset=${input.target_offset}:linear=false`;
  return { input, filter };
}
function verify(file) {
  const output = measure(file);
  if (output.input_tp > TARGET.maximumPeak || Math.abs(output.input_i - TARGET.integrated) > .75) throw Error(`Short loudness outside delivery limits: ${output.input_i} LUFS, ${output.input_tp} dBTP. The output was not published.`);
  return output;
}
function prepareAudio(soundtrack, preparation, file, verifier = verify) {
  // Validate the exact encoded AAC before spending time/memory on browser frames.
  // The final MP4 copies these packets instead of encoding a second time.
  if (fs.existsSync(file)) throw Error('Existing Short audio preserved. Choose a new work file.');
  run(['-i', preparation.source || soundtrack, '-vn', '-af', preparation.filter,
    '-c:a', 'aac', '-b:a', '192k', '-ar', '48000', '-ac', '2', '-n', file]);
  return { file, output: verifier(file, preparation) };
}
module.exports = { TARGET, measure, normalization, verify, prepareAudio };
