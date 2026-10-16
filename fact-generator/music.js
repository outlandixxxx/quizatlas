/**
 * MaroQuiz — original background music, generated in code.
 *
 * A soft, emotional lo-fi piece in A minor at 82 BPM: warm pad, gentle
 * piano arpeggios, round bass, light brushed drums, a touch of vinyl and
 * reverb. It is written for the full length of each video and follows its
 * structure, so it never just loops the same 10 seconds:
 *
 *   intro      pad + piano only, a little darker
 *   hook       bass and hi-hats come in
 *   questions  full groove
 *   milestone  drums drop out (a breath), then come back
 *   score      full groove, brightest
 *   outro      groove, then the last chord rings out
 *
 * Because it is generated, it is 100% original — no copyright claims.
 * Put your own assets/audio/music.wav in place to use another track.
 */

const RATE = 48000;
const BPM = 82;
const BEAT = 60 / BPM;
const BAR = BEAT * 4;

const mtof = (m) => 440 * Math.pow(2, (m - 69) / 12);

// voicings: [bass, ...pad/piano notes]
const CHORDS = {
  Am9: [45, 57, 60, 64, 67, 71],
  Fmaj7: [41, 53, 57, 60, 64, 69],
  Cadd9: [48, 55, 60, 62, 64, 67],
  G6: [43, 55, 59, 62, 64, 67],
  Em7: [40, 55, 59, 62, 64, 71],
  Dm9: [38, 53, 57, 60, 64, 65],
};
const PROGRESSIONS = [
  ['Am9', 'Fmaj7', 'Cadd9', 'G6'],
  ['Fmaj7', 'G6', 'Em7', 'Am9'],
  ['Am9', 'Dm9', 'Fmaj7', 'G6'],
  ['Fmaj7', 'Cadd9', 'G6', 'Am9'],
];
// piano arpeggio patterns: index into the chord's upper notes, null = rest
const ARPS = [
  [0, 2, 1, 3, null, 2, 4, 1],
  [1, null, 3, 2, 4, null, 2, 3],
  [0, 3, 2, null, 4, 3, 1, null],
  [2, 1, 3, 4, null, 4, 3, 1],
];

function seeded(seed) {
  let s = seed >>> 0;
  return () => { s = (s * 1664525 + 1013904223) >>> 0; return s / 4294967296; };
}

/** Section kind at time t, from the video's scenes. */
function kindAt(sections, t) {
  for (const s of sections) if (t >= s.start && t < s.end) return s.kind;
  return sections.length ? sections[sections.length - 1].kind : 'question';
}

const ARRANGEMENT = {
  intro: { pad: 1, keys: 0.8, bass: 0, kick: 0, snare: 0, hats: 0, bright: 0.55 },
  hook: { pad: 1, keys: 1, bass: 1, kick: 0, snare: 0, hats: 0.8, bright: 0.75 },
  question: { pad: 0.9, keys: 1, bass: 1, kick: 1, snare: 1, hats: 1, bright: 0.85 },
  milestone: { pad: 1.1, keys: 1, bass: 0.6, kick: 0, snare: 0, hats: 0, bright: 0.7 },
  score: { pad: 1, keys: 1, bass: 1, kick: 1, snare: 1, hats: 1, bright: 1 },
  outro: { pad: 1, keys: 1, bass: 1, kick: 0.8, snare: 0.8, hats: 0.6, bright: 0.9 },
};

// music level under each part of the video (ducking)
const DUCK = { intro: 0.95, hook: 0.85, type: 0.5, countdown: 0.55, reveal: 0.9, milestone: 0.8, score: 0.9, outro: 0.95, question: 0.6 };

function generateMusic({ duration, sections, fadeIn = 1.2, fadeOut = 2.8 }) {
  const n = Math.ceil(duration * RATE);
  const dryL = new Float32Array(n);
  const dryR = new Float32Array(n);
  const send = new Float32Array(n);     // to reverb
  const pump = new Float32Array(n).fill(1); // gentle sidechain from the kick
  const rnd = seeded(20261014);

  const add = (buf, i, v) => { if (i >= 0 && i < n) buf[i] += v; };

  const bars = Math.ceil(duration / BAR) + 1;
  for (let b = 0; b < bars; b++) {
    const t0 = b * BAR;
    if (t0 >= duration) break;
    const block = Math.floor(b / 8);
    const prog = PROGRESSIONS[block % PROGRESSIONS.length];
    const chord = CHORDS[prog[b % 4]];
    const sec = kindAt(sections, t0 + 0.01);
    const arr = ARRANGEMENT[sec] || ARRANGEMENT.question;
    const s0 = Math.round(t0 * RATE);

    // ---- pad: soft attack, overlaps into the next bar ----
    const padLen = Math.round((BAR + 1.0) * RATE);
    const upper = chord.slice(1, 5);
    for (const m of upper) {
      const f = mtof(m);
      for (const det of [-0.0025, 0.0025]) {
        const fr = f * (1 + det);
        const w = 2 * Math.PI * fr / RATE;
        for (let i = 0; i < padLen; i++) {
          const t = i / RATE;
          const env = Math.min(1, t / 0.9) * (t > BAR ? Math.max(0, 1 - (t - BAR) / 1.0) : 1);
          if (env <= 0) continue;
          const ph = w * (s0 + i);
          const v = (Math.sin(ph) + 0.22 * Math.sin(2 * ph) * arr.bright) * env * 0.026 * arr.pad;
          const idx = s0 + i;
          if (idx >= n) break;
          dryL[idx] += v * (det < 0 ? 1.1 : 0.9);
          dryR[idx] += v * (det < 0 ? 0.9 : 1.1);
          send[idx] += v * 0.9;
        }
      }
    }

    // ---- piano arpeggio (8th notes) ----
    if (arr.keys > 0) {
      const pattern = ARPS[(b + block) % ARPS.length];
      const notes = chord.slice(1);
      pattern.forEach((p, k) => {
        if (p === null) return;
        if (rnd() < 0.12) return; // breathe: drop a few notes
        const m = notes[p % notes.length] + (k === 0 && rnd() < 0.25 ? 12 : 0);
        const f = mtof(m);
        const vel = (0.55 + rnd() * 0.35) * arr.keys;
        const start = s0 + Math.round((k * BEAT / 2 + (k % 2 ? BEAT * 0.06 : 0)) * RATE); // light swing
        const len = Math.round(1.8 * RATE);
        const w = 2 * Math.PI * f / RATE;
        const pan = k % 2 ? 0.25 : -0.25;
        for (let i = 0; i < len; i++) {
          const t = i / RATE;
          const env = Math.min(1, t / 0.004) * Math.exp(-t * 2.6);
          const v = (Math.sin(w * i) + 0.22 * Math.sin(2 * w * i) * Math.exp(-t * 7) + 0.05 * Math.sin(3 * w * i) * Math.exp(-t * 10))
            * env * 0.034 * vel * (0.6 + 0.4 * arr.bright);
          const idx = start + i;
          if (idx >= n) break;
          dryL[idx] += v * (1 - pan);
          dryR[idx] += v * (1 + pan);
          send[idx] += v * 1.2;
        }
      });
    }

    // ---- bass ----
    if (arr.bass > 0) {
      const f = mtof(chord[0]);
      const hits = [[0, 1.6], [2.5, 0.9]];
      for (const [beat, lenBeats] of hits) {
        const start = s0 + Math.round(beat * BEAT * RATE);
        const len = Math.round(lenBeats * BEAT * RATE);
        const w = 2 * Math.PI * f / RATE;
        for (let i = 0; i < len + 2400; i++) {
          const t = i / RATE;
          const rel = i > len ? Math.max(0, 1 - (i - len) / 2400) : 1;
          const env = Math.min(1, t / 0.012) * Math.exp(-t * 1.2) * rel;
          const v = (Math.sin(w * i) + 0.25 * Math.sin(2 * w * i)) * env * 0.17 * arr.bass;
          add(dryL, start + i, v); add(dryR, start + i, v);
        }
      }
    }

    // ---- drums ----
    for (let beat = 0; beat < 4; beat++) {
      const bs = s0 + Math.round(beat * BEAT * RATE);
      // kick on 1 and 3 (+ a ghost before 3 sometimes)
      const kicks = beat === 0 || beat === 2 ? [0] : (beat === 1 && rnd() < 0.35 ? [0.5] : []);
      for (const off of kicks) {
        if (!arr.kick) break;
        const ks = bs + Math.round(off * BEAT * RATE);
        let ph = 0;
        for (let i = 0; i < 0.35 * RATE; i++) {
          const t = i / RATE;
          ph += 2 * Math.PI * (48 + 70 * Math.exp(-t * 32)) / RATE;
          const v = Math.sin(ph) * Math.exp(-t * 8.5) * 0.40 * arr.kick;
          add(dryL, ks + i, v); add(dryR, ks + i, v);
        }
        for (let i = 0; i < 0.3 * RATE; i++) {
          const idx = ks + i;
          if (idx >= n) break;
          pump[idx] = Math.min(pump[idx], 1 - 0.28 * Math.exp(-(i / RATE) * 9) * arr.kick);
        }
      }
      // brushed snare on 2 and 4
      if ((beat === 1 || beat === 3) && arr.snare) {
        let lp = 0;
        for (let i = 0; i < 0.25 * RATE; i++) {
          const t = i / RATE;
          lp += 0.35 * ((rnd() * 2 - 1) - lp);
          const v = (lp * 0.11 * Math.exp(-t * 14) + Math.sin(2 * Math.PI * 185 * t) * 0.035 * Math.exp(-t * 25)) * arr.snare;
          add(dryL, bs + i, v * 0.9); add(dryR, bs + i, v * 1.1);
          add(send, bs + i, v * 0.4);
        }
      }
      // hi-hats on 8ths, swung
      if (arr.hats) {
        for (const half of [0, 1]) {
          const hs = bs + Math.round((half * 0.5 + (half ? 0.06 : 0)) * BEAT * RATE);
          const open = beat === 3 && half === 1 && rnd() < 0.4;
          let prev = 0;
          const len = (open ? 0.18 : 0.05) * RATE;
          for (let i = 0; i < len; i++) {
            const t = i / RATE;
            const x = rnd() * 2 - 1;
            const hp = x - prev; prev = x;
            const v = hp * (open ? 0.05 : 0.075) * Math.exp(-t * (open ? 18 : 70)) * arr.hats * (half ? 0.8 : 1);
            add(dryL, hs + i, v * 0.8); add(dryR, hs + i, v * 1.2);
          }
        }
      }
    }
  }

  // ---- vinyl texture ----
  let crackleLp = 0;
  for (let i = 0; i < n; i++) {
    crackleLp += 0.02 * ((rnd() * 2 - 1) - crackleLp);
    let v = crackleLp * 0.012;
    if (rnd() < 0.00012) v += (rnd() * 2 - 1) * 0.03;
    dryL[i] += v; dryR[i] += v;
  }

  // ---- reverb (Schroeder: 4 combs + 2 allpasses per side) ----
  const reverb = (input, offset) => {
    const combs = [1557, 1617, 1491, 1422].map((d) => Math.round((d + offset) * RATE / 44100));
    const out = new Float32Array(n);
    for (const d of combs) {
      const buf = new Float32Array(d);
      let p = 0;
      let damp = 0;
      for (let i = 0; i < n; i++) {
        const y = buf[p];
        damp = y * 0.6 + damp * 0.4;
        buf[p] = input[i] + damp * 0.8;
        out[i] += y;
        p = (p + 1) % d;
      }
    }
    for (const d0 of [225, 556]) {
      const d = Math.round((d0 + offset) * RATE / 44100);
      const buf = new Float32Array(d);
      let p = 0;
      for (let i = 0; i < n; i++) {
        const bo = buf[p];
        const x = out[i];
        const y = -x + bo;
        buf[p] = x + bo * 0.5;
        out[i] = y;
        p = (p + 1) % d;
      }
    }
    return out;
  };
  const wetL = reverb(send, 0);
  const wetR = reverb(send, 23);

  // ---- mix, warm low-pass, pump ----
  const left = new Float32Array(n);
  const right = new Float32Array(n);
  let lpL = 0;
  let lpR = 0;
  const a = 1 - Math.exp(-2 * Math.PI * 6000 / RATE);
  for (let i = 0; i < n; i++) {
    const l = dryL[i] * pump[i] + wetL[i] * 0.07;
    const r = dryR[i] * pump[i] + wetR[i] * 0.07;
    lpL += a * (l - lpL);
    lpR += a * (r - lpR);
    left[i] = lpL;
    right[i] = lpR;
  }

  // ---- normalise to a soft, consistent level ----
  let sum = 0;
  for (let i = 0; i < n; i += 4) sum += left[i] * left[i] + right[i] * right[i];
  const rms = Math.sqrt(sum / (n / 2)) || 1;
  const target = Math.pow(10, -21 / 20);
  const g = target / rms;

  // ---- ducking + fades ----
  let duck = DUCK[sections[0]?.duck] ?? 1;
  const smooth = 1 - Math.exp(-1 / (0.18 * RATE));
  let si = 0;
  for (let i = 0; i < n; i++) {
    const t = i / RATE;
    while (si < sections.length - 1 && t >= sections[si].end) si++;
    const want = DUCK[sections[si]?.duck] ?? 0.8;
    duck += smooth * (want - duck);
    const fin = Math.min(1, t / fadeIn);
    const fout = Math.min(1, (duration - t) / fadeOut);
    const k = g * duck * fin * Math.max(0, fout);
    left[i] *= k;
    right[i] *= k;
  }
  return { left, right };
}

module.exports = { generateMusic, RATE };
