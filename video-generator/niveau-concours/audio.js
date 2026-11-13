const path = require('node:path');
const { spawnSync } = require('node:child_process');
const loudness = require('../five-seconds/loudness');
const { buildSoundtrack: mix, readWav } = require('../audio-mix');
function tempoChain(factor) {
  const parts = [];
  while (factor < .5) { parts.push('atempo=0.5'); factor /= .5; }
  while (factor > 2) { parts.push('atempo=2'); factor /= 2; }
  parts.push(`atempo=${factor}`); return parts.join(',');
}
function buildSoundtrack(options) {
  // Retained consecutive Canva audio stems, exactly once. No synthetic bed.
  const events = (options.events || []).map((event, index) => {
    if (!event.reference) return event;
    const actual = readWav(event.file).left.length / 48000;
    if (Math.abs(actual - event.duration) < 1 / 48000) return event;
    // Extra reading time stretches without pitch-shifting or repeating attacks.
    const file = path.join(path.dirname(options.outFile), `reference-${index}.wav`);
    const filter = `${tempoChain(actual / event.duration)},apad,atrim=duration=${event.duration}`;
    const result = spawnSync(process.env.FFMPEG_PATH || 'ffmpeg', ['-v','error','-nostdin','-threads','1','-filter_threads','1','-i',event.file,'-af',filter,'-ar','48000','-ac','2','-c:a','pcm_s16le','-n',file], {encoding:'utf8',windowsHide:true,timeout:120000,maxBuffer:1024*1024});
    if (result.error || result.status !== 0) throw Error(`Original audio retiming failed: ${result.error?.message || result.stderr}`);
    return {...event,file};
  });
  return {...mix({...options,events,musicFile:null,musicEnabled:false,fadeOut:.6}),music:events.length?'Original Canva soundtrack + intro/outro cues':'disabled'};
}
function normalizeAudio(soundtrack) {
  // Preserve reference dynamics. Attenuate only for AAC headroom; do NOT force
  // this deliberately sparse soundtrack up to a continuous music-bed target.
  const input = loudness.measure(soundtrack), gain = Math.min(0, -2 - input.input_tp);
  const deliveryTarget = {integrated:input.input_i+gain,maximumPeak:-1.5,mode:'reference dynamics; attenuation only'};
  return {input,source:soundtrack,filter:`volume=${gain}dB`,deliveryTarget,preprocessing:'Original supplied audio; attenuation only, no synthetic bed, compressor or upward normalization'};
}
function verifyAudio(file, preparation) {
  const output = loudness.measure(file), target = preparation.deliveryTarget;
  if (output.input_tp > target.maximumPeak || Math.abs(output.input_i-target.integrated)>1) throw Error('Original soundtrack delivery check failed. Output was not published.');
  return output;
}
module.exports = {normalizeAudio,verifyAudio,buildSoundtrack,tempoChain};
