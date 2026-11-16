const fs = require('node:fs');
const fsp = fs.promises;
const path = require('node:path');
const os = require('node:os');
const crypto = require('node:crypto');
const { spawnSync } = require('node:child_process');

function noSymlinks(directory) {
  let current = path.parse(directory).root;
  for (const part of directory.slice(current.length).split(path.sep).filter(Boolean)) {
    current = path.join(current, part);
    if (fs.existsSync(current) && fs.lstatSync(current).isSymbolicLink()) throw Error('Export paths must not contain symbolic links.');
  }
}
function defaultExportPath(category = 'quiz', platform = process.platform) {
  const folder = { quiz: 'Long video', facts: 'Facts', shorts: 'short video' }[category];
  if (!folder) throw Error('Unsupported export category.');
  return platform === 'win32' ? path.win32.join('D:\\MaroQuiz', 'Maroquiz social media plans', folder)
    : '/mnt/d/MaroQuiz/Maroquiz social media plans/' + folder;
}
function exportDirectory(configured, category = 'quiz') {
  const variable = { quiz: 'VIDEO_EXPORT_DIR', facts: 'FACT_VIDEO_EXPORT_DIR', shorts: 'QUIZ_SHORT_EXPORT_DIR' }[category];
  if (!variable) throw Error('Unsupported export category.');
  configured ??= process.env[variable];
  const wsl = /microsoft/i.test(os.release());
  if (!configured && (process.platform !== 'win32') && (!wsl || fs.existsSync('/.dockerenv'))) {
    throw Error(`Set ${variable} to a mounted local export directory. In Docker, explicitly mount the Windows directory first.`);
  }
  const value = configured || defaultExportPath(category);
  if (!path.isAbsolute(value) || value.split(/[\\/]/).includes('..') || value.includes('\0')) throw Error(`${variable} must be an absolute path without traversal.`);
  const directory = path.resolve(value);
  if (directory === path.parse(directory).root) throw Error(`${variable} must be a dedicated directory.`);
  if (process.platform !== 'win32' && /^\/mnt\/[a-z](?:\/|$)/i.test(directory)) {
    const drive = directory.slice(0, 6);
    const mounts = fs.readFileSync('/proc/self/mountinfo', 'utf8').split('\n').map(line => line.split(' ')[4]?.replace(/\\040/g, ' '));
    if (!mounts.some(mount => mount === drive || (mount && mount.startsWith(drive + '/') && (directory === mount || directory.startsWith(mount + '/'))))) {
      throw Error(`Windows drive ${drive} is not mounted. Mount it or set ${variable} to an explicit mounted volume.`);
    }
  }
  noSymlinks(directory);
  fs.mkdirSync(directory, { recursive: true });
  noSymlinks(directory);
  fs.accessSync(directory, fs.constants.R_OK | fs.constants.W_OK);
  const probe = path.join(directory, `.maroquiz-write-${crypto.randomUUID()}`);
  fs.writeFileSync(probe, '', { flag: 'wx', mode: 0o600 });
  let linked = false;
  try { fs.linkSync(probe, probe + '.link'); linked = true; }
  catch (error) { throw Error(`${variable} must support atomic hard links (use NTFS/WSL or a compatible mounted volume): ${error.message}`); }
  finally { if (linked) fs.unlinkSync(probe + '.link'); fs.unlinkSync(probe); }
  return fs.realpathSync(directory);
}
function verifyVideo(file, requireAudio = true) {
  const stat = fs.lstatSync(file);
  if (!stat.isFile() || stat.isSymbolicLink() || stat.size < 1) throw Error('MP4 is missing, empty or unsafe.');
  const result = spawnSync(process.env.FFPROBE_PATH || 'ffprobe', ['-v', 'error', '-show_entries', 'stream=codec_type:format=duration', '-of', 'json', file], { encoding: 'utf8', timeout: 30000, maxBuffer: 1024 * 1024, windowsHide: true });
  if (result.error || result.status !== 0) throw Error(`FFprobe failed: ${result.error?.message || String(result.stderr).slice(-1000)}`);
  const data = JSON.parse(result.stdout);
  if (!data.streams?.some(s => s.codec_type === 'video') || (requireAudio && !data.streams.some(s => s.codec_type === 'audio')) || !(Number(data.format?.duration) > 0)) throw Error('MP4 must have valid video and audio streams and a positive duration.');
  return stat.size;
}
async function checksum(file) {
  const hash = crypto.createHash('sha256');
  for await (const data of fs.createReadStream(file)) hash.update(data);
  return hash.digest('hex');
}
async function exportArtifact(source, directory, filename, expectedHash, active, verify, extension) {
  if (path.basename(filename) !== filename || !new RegExp(`^[\\p{L}\\p{N}_.-]+\\.${extension}$`, 'u').test(filename)) throw Error('Unsafe export filename.');
  const root = exportDirectory(directory), destination = path.join(root, filename);
  await verify(source);
  const hash = await checksum(source);
  if (expectedHash && hash !== expectedHash) throw Error('Source MP4 differs from its recorded checksum.');
  if (fs.existsSync(destination)) {
    await verify(destination);
    if (await checksum(destination) !== hash) throw Error(`Export collision: ${filename}. Existing file was preserved.`);
    return { path: destination, sha256: hash };
  }
  const temporary = path.join(root, `.${filename}.${crypto.randomUUID()}.part`);
  try {
    await fsp.copyFile(source, temporary, fs.constants.COPYFILE_EXCL);
    await verify(temporary);
    if (await checksum(temporary) !== hash) throw Error('Export checksum does not match the source MP4.');
    if (!active()) throw Error('Export stopped; the source MP4 is retained.');
    // Atomic publication without rename-overwrite races. NTFS and WSL support hard links.
    await fsp.link(temporary, destination);
    return { path: destination, sha256: hash };
  } finally { await fsp.unlink(temporary).catch(() => {}); }
}
async function exportVideo(source, directory, filename, expectedHash, active = () => true, verify = verifyVideo) {
  return exportArtifact(source, directory, filename, expectedHash, active, verify, 'mp4');
}
async function exportThumbnail(source, directory, filename, expectedHash, active = () => true, verify) {
  if (!verify) {
    const receipt = source + '.json';
    if (fs.lstatSync(receipt).isSymbolicLink() || !fs.lstatSync(receipt).isFile()) throw Error('A regular approved thumbnail receipt is required.');
    const { spec } = JSON.parse(fs.readFileSync(receipt, 'utf8'));
    verify = file => require('./thumbnails').verifyThumbnail(file, spec);
  }
  return exportArtifact(source, directory, filename, expectedHash, active, verify, 'jpg');
}
module.exports = { exportDirectory, defaultExportPath, verifyVideo, checksum, exportVideo, exportThumbnail, noSymlinks };
