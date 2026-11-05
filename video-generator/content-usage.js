// Local-only authenticated reporting. No administrator JWT or caller-provided URL.
const fs = require('node:fs');
const path = require('node:path');
const crypto = require('node:crypto');

function credentials(value, expectedId) {
  if (!value || value.operation_id !== expectedId || !/^[a-f0-9-]{36}$/.test(value.operation_id)
    || !/^[a-f0-9]{64}$/.test(value.token) || !Number.isSafeInteger(value.attempt) || value.attempt < 1
    || !Number.isSafeInteger(value.lease_seconds) || value.lease_seconds < 30 || value.lease_seconds > 86400
    || !['reserved', 'used', 'failed', 'released'].includes(value.status)) throw Error('Invalid content usage authorization.');
  return value;
}

class UsageChannel {
  constructor(api, transport = fetch) { this.api = api; this.transport = transport; }
  async send(job, event, output = []) {
    const { operation_id, token, attempt } = credentials(job.usage, job.id);
    let response;
    try {
      response = await this.transport(new URL('local-render/usage', this.api), {
        method: 'POST', headers: { 'Content-Type': 'application/json', Accept: 'application/json' },
        body: JSON.stringify({ operation_id, token, attempt, event, output }),
        signal: AbortSignal.timeout(10000), redirect: 'error',
      });
    } catch { throw Object.assign(Error('Usage reporting is temporarily unavailable.'), { permanent: false }); }
    if (!response.ok) throw Object.assign(Error('The usage reservation could not be confirmed. Outputs are retained locally.'), { permanent: response.status >= 400 && response.status < 500 && response.status !== 429 });
    const { data } = await response.json();
    Object.assign(job.usage, credentials(data, job.id));
    if (data.status === 'reserved') job.usage.deadline = Date.now() + data.lease_seconds * 1000;
    return data;
  }
}

function fileReceipt(root, relative, expected) {
  if (path.isAbsolute(relative) || relative.split(/[\\/]/).includes('..')) throw Error('Invalid output receipt path.');
  const file = path.join(root, relative), stat = fs.lstatSync(file);
  if (!stat.isFile() || stat.isSymbolicLink() || stat.size < 1 || !fs.realpathSync(file).startsWith(fs.realpathSync(root) + path.sep)) throw Error('Output is missing or unsafe.');
  const hash = crypto.createHash('sha256');
  const descriptor = fs.openSync(file, 'r');
  try {
    const chunk = Buffer.alloc(1024 * 1024); let bytes;
    while ((bytes = fs.readSync(descriptor, chunk, 0, chunk.length, null))) hash.update(chunk.subarray(0, bytes));
  } finally { fs.closeSync(descriptor); }
  const sha256 = hash.digest('hex');
  if (expected && sha256 !== expected) throw Error('Generated output failed its recorded checksum.');
  return { name: relative, sha256, bytes: stat.size };
}

function outputReceipts(job, root, complete = true) {
  if (job.type !== 'revision-batch') {
    if (!complete) return [];
    return [{ kind: 'video', ...fileReceipt(root, job.videoFile) }];
  }
  const manifest = JSON.parse(fs.readFileSync(path.join(root, 'manifest.json'), 'utf8'));
  const document = JSON.parse(fs.readFileSync(path.join(root, 'input.json'), 'utf8'));
  if (complete && manifest.status !== 'completed') throw Error('The revision output set is incomplete.');
  const artifacts = [], ids = new Set();
  for (const quiz of manifest.quizzes) {
    const input = document.quizzes.find(q => q.source.quiz.id === quiz.quizId);
    if (!input) throw Error('An output refers to an unknown source quiz.');
    const allowed = new Set(input.source.notes.map(note => note.question_id));
    for (const image of quiz.images || []) {
      if (image.status !== 'completed') continue;
      const receipt = fileReceipt(root, path.join(quiz.folder, image.file), image.hash);
      const segments = quiz.pages?.[image.page - 1];
      if (!Array.isArray(segments)) throw Error('An image has no recorded source mapping.');
      const sourceIds = document.content_mode === 'corrected-questions'
        ? segments.map(segment => input.source.correction.questions[segment.e]?.question_id)
        : segments.flatMap(segment => segment.sourceQuestionIds || []);
      if (!sourceIds.length || sourceIds.some(id => !allowed.has(id))) throw Error('Invalid image source mapping.');
      sourceIds.forEach(id => ids.add(id)); artifacts.push(receipt);
    }
  }
  if (manifest.book?.status === 'completed') {
    artifacts.push(fileReceipt(root, manifest.book.file, manifest.book.hash));
    document.quizzes.forEach(quiz => quiz.source.notes.forEach(note => ids.add(note.question_id)));
  }
  if (!artifacts.length) {
    if (complete) throw Error('No verified revision output was produced.');
    return [];
  }
  if (complete) {
    const expected = new Set(document.quizzes.flatMap(q => q.source.notes.map(n => n.question_id)));
    if (ids.size !== expected.size || [...expected].some(id => !ids.has(id))) throw Error('A source is missing from the completed outputs.');
    fileReceipt(root, 'catalogue.zip');
  }
  artifacts.sort((a, b) => a.name.localeCompare(b.name));
  return [{ kind: 'revision', name: 'revision-manifest.json',
    sha256: crypto.createHash('sha256').update(JSON.stringify(artifacts)).digest('hex'),
    bytes: artifacts.reduce((sum, item) => sum + item.bytes, 0), source_ids: [...ids].sort((a, b) => a - b) }];
}
module.exports = { UsageChannel, credentials, outputReceipts, fileReceipt };
