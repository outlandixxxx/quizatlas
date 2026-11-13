// SPDX-License-Identifier: CC0-1.0
// Original sample-free, quiet musical accents. No noise, loops or external assets.
const fs = require('node:fs');
function writeCue(file, outro = false) {
  const rate = 48000, count = Math.round(rate * .48), data = Buffer.alloc(44 + count * 4);
  data.write('RIFF'); data.writeUInt32LE(data.length - 8, 4); data.write('WAVEfmt ', 8); data.writeUInt32LE(16, 16);
  data.writeUInt16LE(1, 20); data.writeUInt16LE(2, 22); data.writeUInt32LE(rate, 24); data.writeUInt32LE(rate * 4, 28);
  data.writeUInt16LE(4, 32); data.writeUInt16LE(16, 34); data.write('data', 36); data.writeUInt32LE(count * 4, 40);
  for (let i = 0; i < count; i++) {
    const t = i / rate, fade = Math.sin(Math.PI * i / (count - 1)) ** 2;
    const value = Math.round(32767 * .025 * fade * (Math.sin(2 * Math.PI * (outro ? 392 : 523.25) * t) + .4 * Math.sin(2 * Math.PI * (outro ? 523.25 : 659.25) * t)));
    data.writeInt16LE(value, 44 + i * 4); data.writeInt16LE(value, 46 + i * 4);
  }
  fs.writeFileSync(file, data, { flag: 'wx', mode: 0o600 });
}
module.exports = { writeCue };
