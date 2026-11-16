// Read retained approvals only. Never edits jobs, media, usage or counters.
const fs = require('node:fs');
const path = require('node:path');
const crypto = require('node:crypto');
const UUID = /^[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}$/i;

function read(file) {
  const stat = fs.lstatSync(file);
  if (!stat.isFile() || stat.isSymbolicLink() || stat.size > 2 * 1024 * 1024) throw Error('Unsafe or oversized retained JSON.');
  return JSON.parse(fs.readFileSync(file, 'utf8'));
}

function buildEvidence(jobDir, outputDir) {
  const operations = [], skipped = [];
  for (const name of fs.readdirSync(jobDir).sort()) {
    if (!name.endsWith('.state.json') || !UUID.test(name.slice(0, -11))) continue;
    const state = read(path.join(jobDir, name));
    if (!['quiz', 'quiz-batch'].includes(state.type)) continue;
    if (['queued', 'running'].includes(state.status) || state.workerPid || state.thumbnailRunning) throw Error('Finish or stop active quiz generation before collecting scope evidence.');
    const id = state.usage?.operation_id;
    if (!UUID.test(id || '') || id !== name.slice(0, -11)) continue;
    const directory = path.join(outputDir, id);
    const file = path.join(directory, 'input.json');
    if (!fs.existsSync(file)) { skipped.push({ operation_id: id, reason: 'Retained approved input is missing.' }); continue; }
    if (fs.lstatSync(directory).isSymbolicLink()) throw Error('Symlinked job directories are unsupported.');
    operations.push({ operation_id: id, document: read(file) });
  }
  return { format: 'maroquiz-quiz-video-scope-v1', generated_at: new Date().toISOString(), operations, skipped };
}

if (require.main === module) {
  try {
    const { values } = require('node:util').parseArgs({ options: { out: { type: 'string' } } });
    if (!values.out) throw Error('Usage: node video-generator/quiz-video-scope-evidence.js --out /absolute/private/evidence.json');
    const evidence = buildEvidence(path.join(__dirname, '.local-jobs'), path.join(__dirname, 'output'));
    const output = path.resolve(values.out);
    const fd = fs.openSync(output, 'wx', 0o600);
    try { fs.writeFileSync(fd, JSON.stringify(evidence, null, 2)); fs.fsyncSync(fd); } finally { fs.closeSync(fd); }
    console.log(JSON.stringify({ path: output, sha256: crypto.createHash('sha256').update(fs.readFileSync(output)).digest('hex'), operations: evidence.operations.length, skipped: evidence.skipped }));
  } catch (error) { console.error(error.message); process.exitCode = 1; }
}

module.exports = { buildEvidence };
