'use strict';
const fs = require('node:fs');
const path = require('node:path');
const crypto = require('node:crypto');
const { majorFor } = require('./config');
const { pngMetadata } = require('./image-metadata');
const ROOT = path.join(__dirname, 'assets');
const sha = bytes => crypto.createHash('sha256').update(bytes).digest('hex');
// Stable ownership is part of the v1 spec; editing catalogue descriptions never
// reassigns a retained asset to a different Major.
const owners = {health:'health-competition',education:'teaching-competition',physics:'physics',mathematics:'mathematics',it:'computer-science-it',chemistry:'chemistry',finance:'finance',economy:'economy',svt:'svt',arabic:'arabic',english:'english',spanish:'spanish',french:'french'};
const ids = ['neutral', ...Object.keys(owners)];
const concepts = {
  neutral:['learning','study materials','MaroQuiz branding'],
  health:['healthcare','hospital','medical equipment','health studies'],
  education:['teaching','learning','books','education studies'],
  physics:['mechanics','magnetism','optics','physics studies'],
  mathematics:['geometry','mathematics','calculation','mathematics studies'],
  it:['computing','computer equipment','information technology','computer science studies'],
  chemistry:['chemistry','laboratory equipment','chemistry studies'],
  finance:['calculator','financial records','financial management','finance studies'],
  economy:['global economy','commerce','industry','economics studies'],
  svt:['microscope','DNA','plants','fossils','life and earth sciences'],
  arabic:['Arabic language','book','writing','Arabic lettering'],
  english:['English language','reading','English language learning'],
  spanish:['Spanish language','book','writing','Spanish language learning'],
  french:['French language','literature','writing','French lettering'],
};
const glyphLanguages={arabic:'ar',english:'en',spanish:'es',french:'fr'};
function definition(id) {
  if (!ids.includes(id)) throw Error('Unknown thumbnail illustration.');
  const slug = owners[id];
  return { id, label: id, majors: slug ? [slug] : [], subjects: [], subjectScope:'general-major', concepts: concepts[id], languageRestrictions: [],
    selectionRestrictions: { majorSlugs: slug ? [slug] : [], contentLocaleIndependent: true },
    width:null,height:null,aspectRatio: null, transparent: true, positions: ['left', 'right', 'center', 'bottom'],
    source: id === 'neutral' ? 'Original MaroQuiz vector, authored locally' : 'User-supplied original artwork; see provenance.json',
    license: id === 'neutral' ? 'MaroQuiz original artwork' : 'User-supplied; publishing rights not independently verified',
    attribution: null, publishing: id === 'neutral' ? true : 'User-authorized use; rights not independently verified',
    embeddedTextLanguage: glyphLanguages[id] || null,
    embeddedTextNote: glyphLanguages[id] ? 'Language-identifying glyphs belong only to this language Major; the video content locale does not select the illustration.' : null,
    file: `${id}.${id === 'neutral' ? 'svg' : 'png'}` };
}
function item(id) {
  const meta = definition(id), file = path.join(ROOT, meta.file);
  const available = fs.existsSync(file);
  if(!available)return { ...meta, available, sha256:null };
  const bytes=fs.readFileSync(file);
  const dimensions=id==='neutral'?{width:900,height:900,aspectRatio:1,hasAlpha:true}:pngMetadata(bytes);
  return { ...meta,...dimensions,transparent:dimensions.hasAlpha,available,sha256:sha(bytes) };
}
function relevant(major) {
  const expected = majorFor(major).asset;
  return [...new Set([expected, 'neutral'])].map(item);
}
function freezeAsset(asset) {
  const current = item(asset.id);
  if (!current.available || current.sha256 !== asset.sha256) throw Error('Thumbnail artwork changed. Reapprove or restore its frozen asset.');
  const file = path.join(ROOT, current.file), folder = path.join(ROOT, 'versions', asset.id);
  fs.mkdirSync(folder, { recursive: true });
  const frozen = path.join(folder, asset.sha256 + path.extname(file));
  if (!fs.existsSync(frozen)) { fs.copyFileSync(file, frozen, fs.constants.COPYFILE_EXCL); fs.chmodSync(frozen,0o444); }
  return frozen;
}
function resolveAsset(asset) {
  definition(asset.id);
  if (!/^[a-f0-9]{64}$/.test(asset.sha256 || '')) throw Error('Invalid frozen illustration digest.');
  const extension = asset.id === 'neutral' ? '.svg' : '.png';
  const frozen = path.join(ROOT, 'versions', asset.id, asset.sha256 + extension);
  if (fs.existsSync(frozen) && sha(fs.readFileSync(frozen)) === asset.sha256) return frozen;
  return freezeAsset(asset);
}
function writeManifest(destination = path.join(ROOT, 'manifest.json')) {
  fs.writeFileSync(destination, JSON.stringify({ version: 1, assets: ids.map(item) }, null, 2) + '\n');
}
module.exports = { ids, item, relevant, freezeAsset, resolveAsset, writeManifest, definition };
if (require.main === module) writeManifest();
