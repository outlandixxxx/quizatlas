// Read-only local evidence. Never changes jobs, usage claims, databases or media.
const fs = require('node:fs');
const path = require('node:path');
const http = require('node:http');
const crypto = require('node:crypto');
const UUID = /^[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}$/i;
const ids = values => [...new Set((values || []).filter(value => Number.isSafeInteger(value) && value > 0))].sort((a, b) => a - b);
const positive = value => Number.isSafeInteger(value) && value > 0 ? value : null;
const timestamp = value => typeof value === 'string' && Number.isFinite(Date.parse(value)) ? new Date(value).toISOString() : null;
const title = value => typeof value === 'string' ? value.replace(/[\x00-\x1f]/g, ' ').slice(0, 255) : null;
const excluded = value => /^(facts?(?:-|$)|revision(?:-|$))/.test(value?.type || '');
function readJson(file) { try { return JSON.parse(fs.readFileSync(file, 'utf8')); } catch { return null; } }
function workerAlive(pid) {
  if (!Number.isSafeInteger(pid) || pid < 1) return false;
  for (const target of process.platform === 'win32' ? [pid] : [-pid, pid]) {
    try { process.kill(target, 0); return true; } catch (error) { if (error.code !== 'ESRCH') return true; }
  }
  return false;
}
function runnerResponds() {
  return new Promise(resolve => {
    const request = http.get({ hostname: '127.0.0.1', port: 3777, path: '/health', timeout: 1000 }, response => { response.resume(); resolve(true); });
    request.once('timeout', () => { request.destroy(); resolve(true); }); // An unresponsive listener is not proof of a stopped runner.
    request.once('error', error => resolve(error.code !== 'ECONNREFUSED'));
  });
}
function scan(root) {
  const inputs = [], mp4s = [], issues = [];
  function inspectRenderWork(directory) {
    // Read only directory entries, one at a time. Thousands of frames never
    // enter memory, and no image/audio bytes are read or changed.
    let handle;
    try {
      handle = fs.opendirSync(directory); let entry;
      while ((entry = handle.readSync())) {
        const file = path.join(directory, entry.name), relative = path.relative(root, file);
        if (entry.isSymbolicLink() || entry.isDirectory() || !entry.isFile()) { issues.push('uninspected_render_work_path'); continue; }
        if (/\.mp4$/i.test(entry.name)) mp4s.push(relative);
        else if (entry.name === 'input.json') inputs.push(relative);
        else if (!/\.(?:png|jpe?g|wav|log|txt|json)$/i.test(entry.name)) issues.push('unknown_render_work_file');
      }
    } catch { issues.push('unreadable_render_work'); }
    finally { if (handle) handle.closeSync(); }
  }
  function visit(directory, depth) {
    if (depth > 8) { issues.push('uninspected_directory_depth'); return; }
    let entries;
    try { entries = fs.readdirSync(directory, { withFileTypes: true }); } catch { issues.push('unreadable_directory'); return; }
    for (const entry of entries) {
      const file = path.join(directory, entry.name), relative = path.relative(root, file);
      if (entry.isSymbolicLink()) { issues.push('uninspected_symbolic_link'); continue; }
      if (entry.isDirectory()) {
        if (entry.name.startsWith('.frames-')) { inspectRenderWork(file); continue; }
        visit(file, depth + 1);
      } else if (entry.isFile()) {
        if (entry.name === 'input.json' || (/\.json$/i.test(entry.name) && /[a-f0-9-]{36}/i.test(entry.name))) inputs.push(relative);
        if (/\.mp4$/i.test(entry.name)) mp4s.push(relative);
      }
    }
  }
  if (fs.existsSync(root)) visit(root, 0);
  return { inputs, mp4s, issues };
}

async function collectInventory(options = {}) {
  const jobDir = path.resolve(options.jobDir || path.join(__dirname, '.local-jobs'));
  const outputDir = path.resolve(options.outputDir || path.join(__dirname, 'output'));
  for (const directory of [jobDir, outputDir]) {
    if (!fs.existsSync(directory) || !fs.lstatSync(directory).isDirectory() || fs.lstatSync(directory).isSymbolicLink()) throw Error('Inventory refused: both real job and output directories must exist.');
  }
  const reviewDirs = new Set(options.reviewDirs || []);
  for (const name of reviewDirs) {
    if (typeof name !== 'string' || !name || name === '.' || name === '..' || path.basename(name) !== name || /[\\/]/.test(name) || UUID.test(name)) throw Error('Inventory refused: reviewed comparison directories must be named non-UUID output subdirectories.');
    const directory = path.join(outputDir, name);
    if (!fs.existsSync(directory) || !fs.lstatSync(directory).isDirectory() || fs.lstatSync(directory).isSymbolicLink()) throw Error('Inventory refused: reviewed comparison directory is missing or unsafe.');
    for (const marker of ['comparison.json', 'verification.json']) {
      const file = path.join(directory, marker);
      if (!fs.existsSync(file) || !fs.lstatSync(file).isFile() || fs.lstatSync(file).isSymbolicLink() || !readJson(file)) throw Error('Inventory refused: reviewed comparison directory needs readable comparison.json and verification.json.');
    }
    const reviewed = scan(directory);
    if (reviewed.inputs.length || reviewed.issues.length) throw Error('Inventory refused: reviewed comparison directories cannot contain generation inputs or uninspected paths.');
  }
  const states = new Map(), extraInputs = new Map(), unknown = [], ignored = [], groups = new Map();
  for (const name of fs.existsSync(jobDir) ? fs.readdirSync(jobDir).sort() : []) {
    const match = /^([a-f0-9-]{36})\.state\.json$/i.exec(name);
    if (!match || !UUID.test(match[1])) {
      const inputMatch = /([a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12})/i.exec(name);
      if (/\.json$/i.test(name) && inputMatch) {
        const list = extraInputs.get(inputMatch[1]) || []; list.push(path.join(jobDir, name)); extraInputs.set(inputMatch[1], list);
      }
      continue;
    }
    const file = path.join(jobDir, name), value = fs.lstatSync(file).isSymbolicLink() ? null : readJson(file);
    if (value && workerAlive(value.workerPid)) throw Error('Inventory refused: a retained renderer PID is still alive. Stop the local generator first.');
    states.set(match[1], value);
  }
  if (await (options.runnerResponds || runnerResponds)()) throw Error('Inventory refused: a local runner responds on port 3777. Stop the local generator first.');
  for (const id of new Set([...states.keys(), ...extraInputs.keys()])) groups.set(id, { id, root: path.join(outputDir, id) });
  for (const entry of fs.existsSync(outputDir) ? fs.readdirSync(outputDir, { withFileTypes: true }) : []) {
    if (entry.isDirectory()) groups.set(entry.name, { id: UUID.test(entry.name) ? entry.name : null, root: path.join(outputDir, entry.name) });
    else if (entry.isFile() && /\.mp4$/i.test(entry.name)) unknown.push({ job_id: null, operation_id: null, video_set_id: null, source_ids: [], status: 'uncertain', reason: 'orphan_mp4_without_job_directory', created_at: null, title: entry.name, has_state: false, has_input: false, output_paths: [entry.name] });
  }
  const records = [];
  for (const group of [...groups.values()].sort((a, b) => a.root.localeCompare(b.root))) {
    const { id, root } = group, hasState = id !== null && states.has(id), state = id ? states.get(id) : null;
    const files = scan(root), inputFiles = [...files.inputs.map(file => path.join(root, file)), ...(extraInputs.get(id) || [])];
    const base = { job_id: id, operation_id: UUID.test(state?.usage?.operation_id || '') ? state.usage.operation_id : id,
      created_at: timestamp(state?.createdAt || state?.created_at), title: title(state?.title), has_state: hasState, has_input: inputFiles.length > 0 };
    if (!id && reviewDirs.has(path.basename(root))) {
      ignored.push({ ...base, reason: 'explicitly_reviewed_comparison_without_generation_input_or_state', reviewed_dir: path.basename(root), output_paths: files.mp4s.map(file => path.relative(outputDir, path.join(root, file))) }); continue;
    }
    if (excluded(state)) { ignored.push({ ...base, reason: 'facts_or_revision_job' }); continue; }
    if (!id && !inputFiles.length && /(?:review|comparison|preview|reference|sample|test)/i.test(path.basename(root))) {
      ignored.push({ ...base, reason: 'non_uuid_review_output_without_generation_assignment', output_paths: files.mp4s.map(file => path.relative(outputDir, path.join(root, file))) }); continue;
    }
    const mapped = new Map(), claimed = new Set(); let sawExcluded = false, sawPreview = false;
    function add(document, index, inputPath) {
      if (excluded(document)) { sawExcluded = true; return; }
      if (document?.video?.id === 0) { sawPreview = true; ignored.push({ ...base, title: title(document.video.title) || base.title, video_set_id: 0, input_path: inputPath, reason: 'unsaved_comparison_preview' }); return; }
      if (!document || !Array.isArray(document.questions)) return;
      const videoId = positive(document.video?.id), sourceIds = ids(document.questions.map(question => question?.id));
      if (!sourceIds.length) return;
      const item = state?.items?.find(item => item.videoId === videoId) || (Array.isArray(state?.items) ? state.items[index] : null);
      const key = `${videoId}:${sourceIds.join(',')}`;
      if (mapped.has(key)) { mapped.get(key).input_paths.push(inputPath); return; }
      const folder = item?.folder || (state?.type === 'quiz-batch' || inputPath.endsWith(path.sep + 'input.json') && index !== null && index !== undefined ? String(index + 1).padStart(3, '0') : null);
      const related = state?.type === 'quiz-batch' || index !== null && index !== undefined
        ? files.mp4s.filter(file => file === item?.source || folder && file.startsWith(folder + path.sep)) : [...files.mp4s];
      related.forEach(file => claimed.add(file));
      const completed = state?.status === 'completed' || item?.renderStatus === 'completed' || item?.exportStatus === 'completed';
      const uncertain = related.length > 0 || files.issues.length > 0 || !videoId || !id || (hasState && !state);
      mapped.set(key, { ...base, video_set_id: videoId, source_ids: sourceIds,
        created_at: base.created_at || timestamp(document.video?.created_at), title: title(document.video?.title) || base.title,
        status: completed ? 'success' : uncertain ? 'uncertain' : 'no_output',
        reason: completed ? 'completed_state_preserve' : related.length ? 'mp4_present_preserve_without_revalidation' : uncertain ? 'incomplete_or_unmapped_evidence' : 'no_mp4_in_stopped_persisted_job',
        input_paths: [inputPath], output_paths: related.map(file => path.relative(outputDir, path.join(root, file))), scan_issues: files.issues });
    }
    for (const inputFile of inputFiles) {
      const doc = fs.lstatSync(inputFile).isSymbolicLink() ? null : readJson(inputFile);
      if (!doc) throw Error('Inventory refused: a persisted assignment input is unreadable. Review it before proving output absence.');
      if (excluded(doc)) { sawExcluded = true; continue; }
      if (doc?.type === 'quiz-batch' && Array.isArray(doc.videos)) doc.videos.forEach((video, index) => add(video, index, inputFile));
      else add(doc, null, inputFile);
    }
    for (const item of state?.type === 'quiz-batch' && Array.isArray(state.items) ? state.items : []) {
      if ([...mapped.values()].some(record => record.video_set_id === item.videoId)) continue;
      add({ video: { id: item.videoId, title: item.title }, questions: ids(item.sourceIds).map(id => ({ id })) }, state.items.indexOf(item), null);
    }
    if (sawExcluded && !mapped.size && !sawPreview) { ignored.push({ ...base, reason: 'facts_or_revision_input' }); continue; }
    const unclaimed = files.mp4s.filter(file => !claimed.has(file));
    if (unclaimed.length && !sawPreview) {
      unknown.push({ ...base, video_set_id: null, source_ids: [], status: 'uncertain', reason: 'unmapped_mp4_preserve', output_paths: unclaimed.map(file => path.relative(outputDir, path.join(root, file))) });
      for (const record of mapped.values()) if (record.status === 'no_output') { record.status = 'uncertain'; record.reason = 'unmapped_mp4_may_belong_to_assignment'; }
    }
    records.push(...mapped.values());
    if (hasState && !state && mapped.size) unknown.push({ ...base, video_set_id: null, source_ids: [], status: 'uncertain', reason: 'unreadable_job_state', output_paths: [] });
    if (!mapped.size && !sawPreview && (hasState || inputFiles.length || UUID.test(id || ''))) unknown.push({ ...base, video_set_id: null, source_ids: [], status: 'uncertain', reason: state?.status === 'completed' ? 'completed_state_missing_source_mapping' : 'missing_or_unreadable_assignment_input', output_paths: files.mp4s.map(file => path.relative(outputDir, path.join(root, file))) });
  }
  return { format: 'maroquiz-quiz-usage-inventory-v1', version: 1, generated_at: new Date().toISOString(), runner_stopped: true, job_dir: jobDir, output_dir: outputDir,
    records, unknown_records: unknown, ignored_records: ignored };
}
function writeInventory(file, inventory) {
  const destination = path.resolve(file), data = JSON.stringify(inventory, null, 2) + '\n';
  fs.writeFileSync(destination, data, { flag: 'wx', mode: 0o600 });
  const sha256 = crypto.createHash('sha256').update(data).digest('hex');
  fs.writeFileSync(destination + '.sha256', `${sha256}  ${path.basename(destination)}\n`, { flag: 'wx', mode: 0o600 });
  return sha256;
}
async function main() {
  const args = process.argv.slice(2), options = { reviewDirs: [] };
  for (let index = 0; index < args.length; index++) {
    const equals = args[index].indexOf('='), flag = equals < 0 ? args[index] : args[index].slice(0, equals);
    const value = equals < 0 ? args[++index] : args[index].slice(equals + 1);
    if (!['--out', '--job-dir', '--output-dir', '--review-dir'].includes(flag) || !value || value.startsWith('--')) throw Error('Usage: node quiz-usage-inventory.js --out /absolute/inventory.json [--job-dir DIR] [--output-dir DIR] [--review-dir NAME]');
    if (flag === '--review-dir') options.reviewDirs.push(value); else options[flag] = value;
  }
  if (!options['--out'] || !path.isAbsolute(options['--out'])) throw Error('An explicit absolute --out path is required.');
  const inventory = await collectInventory({ jobDir: options['--job-dir'], outputDir: options['--output-dir'], reviewDirs: options.reviewDirs });
  const sha256 = writeInventory(options['--out'], inventory);
  console.log(JSON.stringify({ file: options['--out'], sha256, records: inventory.records.length, unknown_records: inventory.unknown_records.length, ignored_records: inventory.ignored_records.length }));
}
if (require.main === module) main().catch(error => { console.error(error.code ? `Inventory failed (${error.code}). No source data was modified.` : error.message); process.exitCode = 1; });
module.exports = { collectInventory, writeInventory, workerAlive };
