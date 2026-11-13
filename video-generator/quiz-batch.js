const fs = require('node:fs');
const path = require('node:path');
const { spawn } = require('node:child_process');
const { validateFactsBatch } = require('../fact-generator/batch');
const { languageOf } = require('./presentation');
const { shortTemplate } = require('./quiz-templates');
const { exportDirectory, verifyVideo, checksum, exportVideo } = require('./video-export');
const slugify = text => String(text).normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '').slice(0, 70) || 'maroquiz-video';
function validateBatch(doc) {
  if (doc.type === 'facts-batch') return validateFactsBatch(doc);
  if (doc.type !== 'quiz-batch' || !Array.isArray(doc.videos) || !doc.videos.length || doc.videos.length > 60) throw Error('Choose 1–60 approved quiz videos.');
  const ids = new Set(), questions = new Set();
  for (const video of doc.videos) {
    shortTemplate(video)?.validate(video);
    if (!Number.isSafeInteger(video.video?.id) || video.video.id < 1 || ids.has(video.video.id)
      || !Number.isSafeInteger(video.video.number) || video.video.number < 1 || typeof video.video.title !== 'string'
      || !Array.isArray(video.questions) || !video.questions.length || video.questions.length > 300) throw Error('Invalid or duplicate approved video.');
    ids.add(video.video.id);
    for (const question of video.questions) {
      const labels = question.choices?.map(c => c.label);
      if (!Number.isSafeInteger(question.id) || questions.has(question.id) || typeof question.text !== 'string'
        || !Array.isArray(labels) || labels.length < 2 || labels.length > 4 || new Set(labels).size !== labels.length
        || labels.some(label => !['A', 'B', 'C', 'D'].includes(label)) || !labels.includes(question.correct_answer?.label)) throw Error('Invalid or repeated approved question.');
      questions.add(question.id);
    }
  }
  return doc;
}
function initialize(job, doc, output, directory) {
  validateBatch(doc);
  const shorts = doc.type === 'quiz-batch' && doc.videos.some(v => shortTemplate(v));
  if (shorts && doc.videos.some(v => v.video?.template !== doc.videos[0].video?.template)) throw Error('Keep different templates in separate approved batches.');
  if (shorts && !(directory = directory ?? process.env.QUIZ_SHORT_EXPORT_DIR)) throw Error('Set QUIZ_SHORT_EXPORT_DIR to your chosen Short export folder before starting. Existing Facts and Long paths are unchanged.');
  job.exportDir = job.type === 'facts-batch' ? exportDirectory(directory ?? process.env.FACT_VIDEO_EXPORT_DIR ?? '', 'facts') : exportDirectory(directory);
  fs.mkdirSync(output, { recursive: true });
  fs.writeFileSync(path.join(output, 'input.json'), JSON.stringify(doc, null, 2), { flag: 'wx', mode: 0o600 });
  job.items = doc.videos.map((document, index) => {
    const facts = job.type === 'facts-batch';
    const sequence = facts ? index + 1 : document.video.number, language = facts ? document.language : languageOf(document);
    const folder = String(index + 1).padStart(3, '0');
    return { videoId: facts ? index + 1 : document.video.id, sequence, language, title: document.video.title, folder,
      filename: facts ? `facts-${slugify(document.major.name)}-${document.major.id}-${document.type}-${String(sequence).padStart(3, '0')}-${language}-${job.id}.mp4` : `${slugify(document.subject?.slug || document.subject?.name || document.video.title)}-${document.subject?.id || document.video.id}-video-${String(sequence).padStart(3, '0')}-${language}-${job.id.slice(0, 8)}.mp4`,
      source: path.join(folder, facts ? 'video.mp4' : `${slugify(document.video.title)}.mp4`), sourceIds: (facts ? document.facts : document.questions).map(q => q.id),
      ...(facts ? { requireAudio: document.render_options.music || document.render_options.sfx } : {}),
      displayNumber: facts ? undefined : (document.video.display_number ?? document.video.number), renderStatus: 'waiting', exportStatus: 'waiting', error: null };
  });
}
function publicBatch(job) {
  return { exportDir: job.exportDir, total: job.items.length,
    rendered: job.items.filter(i => i.renderStatus === 'completed').length,
    exported: job.items.filter(i => i.exportStatus === 'completed').length,
    failed: job.items.filter(i => i.renderStatus === 'failed' || i.exportStatus === 'failed').length,
    waiting: job.items.filter(i => i.renderStatus === 'waiting').length,
    cancelled: job.items.filter(i => i.renderStatus === 'cancelled').length,
    interrupted: job.items.filter(i => i.renderStatus === 'interrupted').length,
    items: job.items.map(i => ({ ...i, sourceIds: undefined })) };
}
// No new rendering engine: invoke the existing CLI once per approved document.
function renderItem(job, item, document, output, dependencies) {
  const folder = path.join(output, item.folder);
  fs.mkdirSync(folder, { recursive: true });
  const input = path.join(folder, 'input.json');
  fs.writeFileSync(input, JSON.stringify(document, null, 2), { mode: 0o600 });
  const options = job.options || {};
  const args = job.type === 'facts-batch' ? [path.join(__dirname, '../fact-generator/job-render.js'), input, folder] : [path.join(__dirname, 'render.js'), input, '--output-dir', folder,
    ...(options.profile === 'draft' ? ['--draft'] : []), ...(options.fps ? ['--fps', String(options.fps)] : [])];
  const child = (dependencies.spawnWorker || spawn)(process.execPath, args, { cwd: __dirname, stdio: ['ignore', 'pipe', 'pipe'], shell: false, detached: process.platform !== 'win32', windowsHide: true });
  dependencies.children.set(job.id, child);
  // Keep the process identity for restart fencing. Never kill an unknown/reused PID.
  job.workerPid = child.pid || null;
  return new Promise((resolve, reject) => {
    let error = '', failure = null, pending = '';
    const log = fs.createWriteStream(path.join(folder, 'render.log'), { flags: 'a', mode: 0o600 });
    log.on('error', e => { failure = e; dependencies.killTree(child); });
    const hours = job.type === 'facts-batch' ? 12 : 3;
    const watchdog = setTimeout(() => { failure = Error(`Render exceeded the ${hours}-hour watchdog.`); dependencies.killTree(child); }, hours * 60 * 60 * 1000);
    child.stdout.on('data', chunk => {
      log.write(chunk);
      pending += chunk.toString();
      const lines = pending.split('\n'); pending = lines.pop().slice(-4000);
      for (const line of lines) if (line.startsWith('FACTS_PROGRESS ')) {
        try { const update = JSON.parse(line.slice(15)); if (job.status === 'running') { job.stage = update.stage; job.progress = update.progress; item.message = update.message; } } catch {}
      }
      const matches = [...String(chunk).matchAll(/Rendering frames:\s*\d+\/\d+\s*\((\d+)%\)/g)];
      if (matches.length) { job.stage = 'frames'; job.progress = Number(matches.at(-1)[1]); }
      if (/Encoding with FFmpeg/.test(String(chunk))) { job.stage = 'encoding'; job.progress = null; }
      job.message = `Video ${item.sequence}: ${job.stage}`;
      try { dependencies.save(job); } catch (e) { failure = e; dependencies.killTree(child); }
    });
    child.stderr.on('data', chunk => { error = (error + chunk).slice(-4000); log.write(chunk); });
    child.on('error', e => { failure = e; });
    child.once('close', (code, signal) => {
      clearTimeout(watchdog); log.end(); dependencies.children.delete(job.id);
      if ((code === 0 && !failure) || !workerAlive(job)) job.workerPid = null;
      try { dependencies.save(job); } catch (e) { failure = e; }
      if (failure || code !== 0) reject(failure || Error(error || (signal ? `Renderer interrupted by ${signal}. Resume the retained batch.` : `Renderer exited with code ${code}.`))); else resolve();
    });
    try { dependencies.save(job); } catch (e) { failure = e; dependencies.killTree(child); }
  });
}
function workerAlive(job) {
  if (!Number.isInteger(job.workerPid) || job.workerPid <= 0) return false;
  if (process.platform !== 'win32') {
    try { process.kill(-job.workerPid, 0); return true; } catch (e) { if (e.code !== 'ESRCH') return true; }
  }
  try { process.kill(job.workerPid, 0); return true; } catch (e) { return e.code !== 'ESRCH'; }
}
async function verifyCompleted(job, output, verify = verifyVideo) {
  validateBatch(JSON.parse(fs.readFileSync(path.join(output, 'input.json'), 'utf8')));
  for (const item of job.items) {
    if (item.renderStatus !== 'completed') continue;
    const source = path.join(output, item.source);
    verify(source, item.requireAudio !== false);
    if (!item.sha256 || await checksum(source) !== item.sha256) throw Error(`Video ${item.sequence}: retained source checksum failed. Restore it before resuming.`);
    if (item.exportStatus === 'completed') {
      const exported = path.join(job.exportDir, item.filename);
      verify(exported, item.requireAudio !== false);
      if (await checksum(exported) !== item.sha256) throw Error(`Video ${item.sequence}: retained export checksum failed. Existing files were preserved.`);
    }
  }
}
async function recover(job, output, dependencies) {
  if (workerAlive(job)) throw Error('A retained renderer PID is still alive. Stop the previous worker before recovering.');
  await verifyCompleted(job, output, dependencies.verifyVideo || verifyVideo);
  // Local status is only a cache. Even "reserved" can be expired or failed in Laravel.
  await dependencies.usageChannel.send(job, 'retry');
  job.usage.pending = null; job.usage.confirmed = false;
  dependencies.save(job); // Persist rotated capabilities before sending further reports.
  if (job.usage.status === 'used' && job.items.some(item => item.renderStatus !== 'completed')) throw Error('Laravel already completed this operation. Missing videos cannot be rendered under completed authorization.');
  const receipts = dependencies.outputReceipts(job, output, false);
  if (receipts.length && job.usage.status !== 'used') await dependencies.usageChannel.send(job, 'progress', receipts);
  job.usage.pending = null; job.usage.confirmed = true;
  job.usage.lastHeartbeat = Date.now();
  for (const item of job.items) {
    if (item.renderStatus === 'cancelled' || item.renderStatus === 'interrupted' || item.renderStatus === 'running') item.renderStatus = 'waiting';
    if (item.renderStatus === 'completed' && item.exportStatus === 'completed') item.error = null;
  }
  job.error = null; job.stage = 'paused'; job.progress = null;
  job.message = 'Recovery ready. Resume the retained batch to process the remaining videos.';
  dependencies.save(job);
}
async function runBatch(job, output, dependencies) {
  const verify = file => (dependencies.verifyVideo || verifyVideo)(file, item?.requireAudio !== false);
  const active = () => job.status === 'running';
  const stage = (name, item) => { job.stage = name; job.progress = null; job.message = `Video ${item.sequence}: ${name}`; dependencies.save(job); };
  let item;
  try {
    if (workerAlive(job)) throw Error('A retained renderer PID is still alive. Stop the previous runner/worker before resuming.');
    exportDirectory(job.exportDir);
    const document = validateBatch(JSON.parse(fs.readFileSync(path.join(output, 'input.json'), 'utf8')));
    job.status = 'running'; job.error = null; dependencies.save(job);
    for (let index = 0; index < job.items.length; index++) {
      if (!active()) break;
      item = job.items[index]; item.error = null;
      const source = path.join(output, item.source);
      // Reconcile interrupted frames/encoding via actual streams, never just existence.
      let valid = false;
      try { verify(source); valid = !item.sha256 || await checksum(source) === item.sha256; } catch {}
      if (item.renderStatus === 'completed' && !valid) throw Error('A previously verified source MP4 is missing or changed. Restore it before resuming; it will not be overwritten.');
      if (valid && item.renderStatus === 'completed' && item.exportStatus === 'completed') {
        const exported = path.join(job.exportDir, item.filename);
        verify(exported);
        if (await checksum(exported) !== item.sha256) throw Error(`Video ${item.sequence}: retained export checksum failed. Existing files were preserved.`);
        dependencies.save(job);
        continue; // Never re-report, re-render or copy a completed/exported video.
      }
      if (!valid) {
        item.renderStatus = 'running'; stage('preparing', item);
        await (dependencies.render || renderItem)(job, item, document.videos[index], output, dependencies);
      }
      if (!active()) break;
      stage('verifying', item); verify(source);
      item.sha256 = await checksum(source); item.renderStatus = 'completed'; item.renderedAt ||= new Date().toISOString();
      dependencies.save(job);
      // Record partial use before making the MP4 accessible in the Windows folder.
      await dependencies.recordProgress(job, item);
      if (!active()) break;
      item.exportStatus = 'running'; stage('exporting', item);
      const exported = await exportVideo(source, job.exportDir, item.filename, item.sha256, active, verify);
      item.exportPath = exported.path; item.exportStatus = 'completed'; item.completedAt = new Date().toISOString();
      dependencies.save(job);
    }
    if (active()) { job.status = 'completed'; job.stage = 'completed'; job.completedAt = new Date().toISOString(); job.message = 'All videos verified and exported.'; }
  } catch (error) {
    if (job.status !== 'cancelled') {
      job.status = 'failed'; job.error = error.message;
      if (item) { item.error = error.message; if (item.renderStatus !== 'completed') item.renderStatus = 'failed'; else if (item.exportStatus !== 'completed') item.exportStatus = 'failed'; }
      job.message = 'Batch paused. Retry resumes the first incomplete video; verified MP4s are retained.';
    }
  } finally {
    if (job.status === 'cancelled') {
      job.stage = 'cancelled'; job.message = 'Remaining videos stopped. Retained files can be resumed.';
      for (const pending of job.items) {
        if (pending.renderStatus === 'running') pending.renderStatus = 'interrupted';
        if (pending.renderStatus === 'waiting') pending.renderStatus = 'cancelled';
        if (pending.exportStatus === 'running') pending.exportStatus = 'interrupted';
      }
    }
    dependencies.save(job); await dependencies.finished(job);
  }
}
module.exports = { initialize, validateBatch, publicBatch, runBatch, workerAlive, slugify, verifyCompleted, recover };
