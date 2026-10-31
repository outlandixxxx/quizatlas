const fs = require('node:fs');
const path = require('node:path');
const assert = require('node:assert/strict');
const root = path.resolve(__dirname, '../..');
const api = 'http://127.0.0.1:8000/api/v1';
const runner = 'http://127.0.0.1:3777';
const token = fs.readFileSync(path.join(root, 'backend/storage/framework/facts-video-acceptance/admin-token'), 'utf8').trim();
const out = path.join(root, 'frontend/artifacts/facts-video');
fs.mkdirSync(out, { recursive: true });
async function request(url, body, headers = {}) {
  const res = await fetch(url, { method: body === undefined ? 'GET' : 'POST', headers: { Accept: 'application/json', ...(body === undefined ? {} : { 'Content-Type': 'application/json' }), ...headers }, ...(body === undefined ? {} : { body: JSON.stringify(body) }), signal: AbortSignal.timeout(30000) });
  const text = await res.text(); let data;
  try { data = JSON.parse(text); } catch { throw Error(`${res.status}: ${text.slice(0, 250)}`); }
  if (!res.ok) throw Error(`${res.status}: ${JSON.stringify(data)}`);
  return data;
}
async function ticket(body) { return (await request(api + '/local-render/ticket', { content: JSON.stringify(body) }, { Authorization: `Bearer ${token}` })).data.ticket; }
async function local(endpoint, body) { return request(runner + '/' + endpoint, body, { 'X-Maroquiz-Render-Ticket': await ticket(body), Origin: 'http://localhost:4200' }); }
(async () => {
  if (process.argv.includes('--status-only')) {
    for (const file of fs.readdirSync(path.join(root, 'video-generator/.local-jobs')).filter(f => f.endsWith('.state.json'))) {
      const saved = JSON.parse(fs.readFileSync(path.join(root, 'video-generator/.local-jobs', file), 'utf8'));
      const current = (await request(runner + '/jobs/' + saved.id, undefined, { 'X-Maroquiz-Job-Key': saved.key })).data;
      console.log(JSON.stringify({ id: current.id, status: current.status, stage: current.stage, message: current.message, error: current.error }));
    }
    return;
  }
  if (process.argv.includes('--security-only')) {
    const doc = JSON.parse(fs.readFileSync(path.join(out, 'short-fr-draft-input.json'), 'utf8'));
    for (const headers of [{ Origin: 'https://evil.example' }, { Origin: 'http://localhost:4200.evil.example' }]) {
      assert.equal((await fetch(runner + '/health', { headers })).status, 403);
    }
    const hostStatus = await new Promise((resolve, reject) => {
      const req = require('node:http').get(runner + '/health', { headers: { Host: 'evil.example:3777' } }, res => { res.resume(); resolve(res.statusCode); });
      req.on('error', reject);
    });
    assert.equal(hostStatus, 403);
    assert.equal((await fetch(runner + '/jobs', { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: '{}' })).status, 403);
    for (const value of [{ ...doc, type: 'shell' }, { ...doc, render_options: { ...doc.render_options, output: '../../escape' } }, { ...doc, render_options: { ...doc.render_options, target_duration: 1200 } }]) {
      const res = await fetch(runner + '/estimate', { method: 'POST', headers: { 'Content-Type': 'application/json', 'X-Maroquiz-Render-Ticket': await ticket(value) }, body: JSON.stringify(value) });
      assert.equal(res.status, 422);
    }
    const tampered = structuredClone(doc); tampered.facts[0].text = 'Invented replacement';
    const res = await fetch(api + '/local-render/ticket', { method: 'POST', headers: { 'Content-Type': 'application/json', Authorization: `Bearer ${token}` }, body: JSON.stringify({ content: JSON.stringify(tampered) }) });
    assert.equal(res.status, 422);
    const id = JSON.parse(fs.readFileSync(path.join(out, 'short-fr-draft-result.json'), 'utf8')).id;
    assert.equal((await fetch(runner + '/jobs/' + id)).status, 403);
    assert.equal((await fetch(runner + '/jobs/' + id + '?key=' + 'x'.repeat(64))).status, 403);
    assert.equal((await fetch(runner + '/jobs/' + id + '/..%2f..%2f.env')).status, 404);
    assert.equal((await fetch(runner + '/health')).status, 200);
    fs.writeFileSync(path.join(out, 'security-results.json'), JSON.stringify({ origin: true, host: true, authentication: true, allowlistedTypes: true, paths: true, noFixedDuration: true, sourceIntegrity: true, jobAccess: true }, null, 2));
    console.log('Security acceptance passed: origin, Host, authentication, payload types, paths, duration, source integrity and job access.');
    return;
  }
  if (process.argv.includes('--cancel-only')) {
    const doc = JSON.parse(fs.readFileSync(path.join(out, 'long-ar-draft-input.json'), 'utf8'));
    const job = (await local('jobs', doc)).data;
    await assert.rejects(local('jobs', doc), /409/);
    const cancelled = await request(`${runner}/jobs/${job.id}/cancel`, {}, { 'X-Maroquiz-Job-Key': job.accessKey });
    assert.equal(cancelled.data.status, 'cancelled');
    const output = await fetch(`${runner}/jobs/${job.id}/download?key=${job.accessKey}`);
    assert.equal(output.status, 409);
    fs.writeFileSync(path.join(out, 'cancellation-result.json'), JSON.stringify({ id: job.id, status: cancelled.data.status }, null, 2));
    console.log('Cancellation acceptance passed:', job.id);
    return;
  }
  if (process.argv.includes('--quiz-only')) {
    const doc = JSON.parse(fs.readFileSync(path.join(root, 'video-generator/sample-video.json'), 'utf8'));
    doc.questions = doc.questions.slice(0, 1); doc.render_options = { profile: 'draft', fps: 15 };
    const job = (await local('jobs', doc)).data;
    console.log('Quiz regression job:', job.id);
    const deadline = Date.now() + 20 * 60 * 1000;
    for (;;) {
      const current = (await request(`${runner}/jobs/${job.id}`, undefined, { 'X-Maroquiz-Job-Key': job.accessKey })).data;
      if (current.status === 'failed') throw Error(current.error);
      if (current.status === 'completed') {
        fs.writeFileSync(path.join(out, 'quiz-regression-result.json'), JSON.stringify({ id: current.id, status: current.status }, null, 2));
        console.log('Existing quiz renderer completed:', current.id); return;
      }
      if (Date.now() > deadline) throw Error('Quiz bounded regression timed out.');
      await new Promise(resolve => setTimeout(resolve, 3000));
    }
  }
  const options = (await request(api + '/facts-video/options', undefined, { Authorization: `Bearer ${token}` })).data;
  assert.ok(options.length > 0);
  console.log('Live options:', JSON.stringify(options));
  fs.writeFileSync(path.join(out, 'options.json'), JSON.stringify(options, null, 2));
  const major = options[0];
  for (const [name, type, language, orientation, quality, music, sfx, count] of [
    ['short-fr-draft', 'facts-short', 'fr', 'vertical', 'draft', true, true, 1],
    ['long-ar-draft', 'facts-long', 'ar', 'vertical', 'draft', true, true, 2],
    ['long-en-horizontal-silent', 'facts-long', 'en', 'horizontal', 'draft', false, false, 2],
    ['long-fr-final', 'facts-long', 'fr', 'horizontal', 'final', false, true, 1],
  ]) {
    if (process.argv.includes('--resume') && fs.existsSync(path.join(out, name + '-result.json'))) continue;
    const doc = (await request(api + '/facts-video/export', { major_id: major.id, language, profile: type, count }, { Authorization: `Bearer ${token}` })).data;
    doc.render_options = { quality, orientation, music, sfx, musicVolume: .6 };
    const estimate = (await local('estimate', doc)).data;
    console.log(name, 'estimate', estimate.estimatedDuration);
    fs.writeFileSync(path.join(out, name + '-input.json'), JSON.stringify(doc, null, 2));
    if (process.argv.includes('--fixtures-only')) continue;
    const started = (await local('jobs', doc)).data;
    console.log(name, 'job', started.id);
    const deadline = Date.now() + 30 * 60 * 1000;
    let job;
    do {
      job = (await request(`${runner}/jobs/${started.id}`, undefined, { 'X-Maroquiz-Job-Key': started.accessKey })).data;
      if (job.status === 'failed') throw Error(job.error);
      if (job.status === 'completed') break;
      if (Date.now() > deadline) throw Error('Bounded render timed out.');
      await new Promise(resolve => setTimeout(resolve, 3000));
    } while (true);
    assert.ok(job.actualDuration > 0);
    assert.ok(Math.abs(job.actualDuration - estimate.estimatedDuration) < 1);
    const video = await fetch(runner + job.videoUrl);
    assert.equal(video.status, 200);
    assert.equal(video.headers.get('content-type'), 'video/mp4');
    const range = await fetch(runner + job.videoUrl, { headers: { Range: 'bytes=0-1023' } });
    assert.equal(range.status, 206);
    fs.writeFileSync(path.join(out, name + '-result.json'), JSON.stringify({ ...job, accessKey: undefined, videoUrl: undefined, thumbnailUrl: undefined, metadataUrl: undefined }, null, 2));
    console.log(name, 'complete', job.actualDuration, 'seconds', job.width, job.height);
  }
})().catch(error => { console.error(error.message); process.exitCode = 1; });
