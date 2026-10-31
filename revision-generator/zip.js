// Minimal streaming STORE ZIP writer. PNGs are already compressed; no second dependency tree.
const fs = require('node:fs');
const path = require('node:path');
const table = Array.from({ length: 256 }, (_, n) => { let c = n; for (let k = 0; k < 8; k++) c = c & 1 ? 0xedb88320 ^ (c >>> 1) : c >>> 1; return c >>> 0; });
function crc32(buffer) { let crc = 0xffffffff; for (const byte of buffer) crc = table[(crc ^ byte) & 255] ^ (crc >>> 8); return (crc ^ 0xffffffff) >>> 0; }
function writeZip(target, files) {
  if (files.length > 65535) throw Error('ZIP entry limit exceeded.');
  const temporary = target + '.partial'; fs.mkdirSync(path.dirname(target), { recursive: true });
  const fd = fs.openSync(temporary, 'w'); let offset = 0; const central = [];
  try {
    for (const file of files) {
      if (!/^[a-zA-Z0-9._/-]+$/.test(file.name) || file.name.split('/').includes('..') || file.name.startsWith('/')) throw Error('Unsafe ZIP path.');
      const data = fs.readFileSync(file.path), name = Buffer.from(file.name), crc = crc32(data);
      if (data.length + offset + 0x10000 > 0xffffffff) throw Error('ZIP exceeds 4 GB; download smaller selections.');
      const head = Buffer.alloc(30); head.writeUInt32LE(0x04034b50); head.writeUInt16LE(20, 4); head.writeUInt16LE(0x21, 12);
      head.writeUInt32LE(crc, 14); head.writeUInt32LE(data.length, 18); head.writeUInt32LE(data.length, 22); head.writeUInt16LE(name.length, 26);
      const directory = Buffer.alloc(46); directory.writeUInt32LE(0x02014b50); directory.writeUInt16LE(20, 4); directory.writeUInt16LE(20, 6); directory.writeUInt16LE(0x21, 14);
      directory.writeUInt32LE(crc, 16); directory.writeUInt32LE(data.length, 20); directory.writeUInt32LE(data.length, 24); directory.writeUInt16LE(name.length, 28); directory.writeUInt32LE(offset, 42);
      fs.writeSync(fd, head); fs.writeSync(fd, name); fs.writeSync(fd, data); central.push(directory, name); offset += head.length + name.length + data.length;
    }
    const centralStart = offset;
    for (const item of central) { fs.writeSync(fd, item); offset += item.length; }
    const end = Buffer.alloc(22); end.writeUInt32LE(0x06054b50); end.writeUInt16LE(files.length, 8); end.writeUInt16LE(files.length, 10); end.writeUInt32LE(offset - centralStart, 12); end.writeUInt32LE(centralStart, 16); fs.writeSync(fd, end);
  } finally { fs.closeSync(fd); }
  fs.renameSync(temporary, target);
}
module.exports = { writeZip, crc32 };
