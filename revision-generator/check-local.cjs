// Real local data, GET exports and authenticated local draft jobs only. No content writes/publication.
const fs = require('node:fs');
const path = require('node:path');
const assert = require('node:assert/strict');
const { spawnSync } = require('node:child_process');
const context = JSON.parse(fs.readFileSync(process.argv[2] || '/tmp/maroquiz-revision-context.json', 'utf8'));
const api = 'http://127.0.0.1:8000/api/v1', runner = 'http://127.0.0.1:3777';
const out = path.join(__dirname, '../backend/artifacts/revision-generator'); fs.mkdirSync(out, { recursive: true });
const delay = ms => new Promise(resolve => setTimeout(resolve, ms));
async function request(url, body, headers = {}) {
  const response = await fetch(url, { method: body === undefined ? 'GET' : 'POST', headers: { Accept: 'application/json', ...(body === undefined ? {} : { 'Content-Type': 'application/json' }), ...headers }, body: body === undefined ? undefined : JSON.stringify(body), signal: AbortSignal.timeout(120000) });
  const data = await response.json(); if (!response.ok) throw Error(response.status + ' ' + JSON.stringify(data)); return data;
}
const get = url => request(api + url, undefined, { Authorization: `Bearer ${context.token}` });
async function start(doc) {
  const content = JSON.stringify(doc), ticket = (await request(api + '/local-render/ticket', { content }, { Authorization: `Bearer ${context.token}` })).data.ticket;
  return (await request(runner + '/jobs', doc, { 'X-Maroquiz-Render-Ticket': ticket })).data;
}
const key = job => ({ 'X-Maroquiz-Job-Key': job.accessKey });
async function wait(job) {
  const deadline = Date.now() + 8 * 60 * 1000;
  while (Date.now() < deadline) {
    job = (await request(`${runner}/jobs/${job.id}`, undefined, key(job))).data;
    if (['completed', 'failed', 'cancelled'].includes(job.status)) return job;
    await delay(500);
  }
  throw Error('Batch timeout.');
}
function document(sources) { return { type: 'revision-batch', format_version: 'revision-batch-v1', major: sources[0].major, subject: sources[0].subject,
  quizzes: sources.map(source => ({ source, version: 1, paragraphs: source.notes.map(n => ({ id: `q${n.question_id}`, text: n.explanation, sourceQuestionIds: [n.question_id] })), issues: [] })) }; }
(async () => {
  assert.ok((await request(runner + '/health')).profiles.includes('revision-batch'));
  const quizzes = []; for (let page = 1; ; page++) { const rows = (await get(`/quizzes?subject_id=${context.subjectId}&sort=id&per_page=100&page=${page}`)).data; quizzes.push(...rows); if (rows.length < 100) break; }
  const sources = []; for (const quiz of quizzes) sources.push((await get(`/quizzes/${quiz.id}/revision-json`)).data);
  const pilot = sources.find(s => s.quiz.id === 1599); assert.ok(pilot);
  fs.writeFileSync(path.join(out, 'real-1599-export.json'), JSON.stringify(pilot, null, 2));
  const results = [];
  for (const [name, selected] of [['pilot-1599', [pilot]], ['several-quizzes', sources.slice(0, 3)], ['entire-subject', sources]]) {
    const doc = document(selected), started = await start(doc), duplicate = await start(doc); assert.equal(duplicate.id, started.id);
    const complete = await wait(started); assert.equal(complete.status, 'completed', complete.error);
    assert.equal(complete.revision.completedQuizzes, selected.length); assert.ok(complete.revision.completedImages >= selected.length);
    const zipResponse = await fetch(`${runner}/jobs/${complete.id}/revision/catalogue`, { headers: key(complete) }); assert.equal(zipResponse.status, 200);
    const zip = path.join(out, name + '.zip'); fs.writeFileSync(zip, Buffer.from(await zipResponse.arrayBuffer()));
    const validation = spawnSync('python3', ['-c', 'import zipfile,json,sys; z=zipfile.ZipFile(sys.argv[1]); assert z.testzip() is None; i=json.loads(z.read(next(n for n in z.namelist() if n.endswith("catalogue-index.json")))); assert i["draft"] and not i["partial"]; assert sum(q["imageCount"] for q in i["quizzes"])==len([n for n in z.namelist() if n.endswith(".png")]); print(json.dumps({"quizzes":len(i["quizzes"]),"images":sum(q["imageCount"] for q in i["quizzes"]),"sources":sum(q["sourceCount"] for q in i["quizzes"])}))', zip]);
    assert.equal(validation.status, 0, String(validation.stderr));
    const counts = JSON.parse(String(validation.stdout)); assert.equal(counts.sources, selected.reduce((n, s) => n + s.notes.length, 0));
    const firstQuiz = complete.revision.quizzes[0];
    for (const artifact of [`quiz-${firstQuiz.quizId}`, `image-${firstQuiz.quizId}-1`, 'index']) assert.equal((await fetch(`${runner}/jobs/${complete.id}/revision/${artifact}`, { headers: key(complete) })).status, 200);
    assert.equal((await fetch(`${runner}/jobs/${complete.id}/revision/catalogue`)).status, 403);
    results.push({ name, jobId: complete.id, ...counts, duplicateSuppressed: true, privateDownloads: true }); console.log(name, counts);
    if (name === 'pilot-1599') {
      const image = await fetch(`${runner}/jobs/${complete.id}/revision/image-1599-1`, { headers: key(complete) });
      fs.writeFileSync(path.join(out, 'pilot-1599.png'), Buffer.from(await image.arrayBuffer()));
    }
  }
  const cancelDoc = document([pilot]); cancelDoc.quizzes[0].version = 2;
  const cancelJob = await start(cancelDoc);
  const cancelled = (await request(`${runner}/jobs/${cancelJob.id}/cancel`, {}, key(cancelJob))).data; assert.equal(cancelled.status, 'cancelled');
  await delay(5500); const retried = (await request(`${runner}/jobs/${cancelJob.id}/retry`, {}, key(cancelJob))).data;
  assert.equal((await wait(retried)).status, 'completed');
  results.push({ name: 'cancel-retry', cancelled: true, retryCompleted: true });
  fs.writeFileSync(path.join(out, 'local-results.json'), JSON.stringify(results, null, 2));
  console.log('Real-data image batches, coverage, ZIPs, private downloads, duplicate suppression and cancellation/retry passed.');
})().catch(error => { console.error(error.message); process.exitCode = 1; });
