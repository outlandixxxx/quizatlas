// Offline SSR integration checks. Run after npm run build; no browser or backend needed.
import assert from 'node:assert/strict';
import http from 'node:http';
import https from 'node:https';
import net from 'node:net';
import { EventEmitter } from 'node:events';
import { createRequire } from 'node:module';
import { JSDOM } from 'jsdom';
const require = createRequire(import.meta.url);
const en = require('../src/assets/i18n/en.json');
const fr = require('../src/assets/i18n/fr.json');

function fixture(value) {
  const url = new URL(value, 'https://api.maroquiz.com');
  if (url.pathname.endsWith('/landing')) return [200, { data: { stats: { total_questions: 40, total_quizzes: 4, total_users: 10 }, new_quizzes: [], popular_quizzes: [], leaderboard_preview: [] } }];
  if (url.pathname.endsWith('/progression/showcase')) return [200, { data: { levels: [], achievements: [] } }];
  if (url.pathname.includes('/trial/subject/not-found')) return [404, {}];
  if (url.pathname.includes('/trial/subject/unavailable')) return [503, {}];
  if (url.pathname.includes('/trial/')) return [200, { success: true, data: {
    label: 'Algorithmique', description: 'Révisez les algorithmes et les structures de données.',
    quizzes_count: 4, questions_count: 40, levels: ['Beginner'], related_subjects: [],
    trial_token: 'offline-fixture', questions: [{ id: 1, question: 'Une file suit quel ordre ?', marks: 1,
      choices: [{ id: 1, choice_text: 'FIFO' }, { id: 2, choice_text: 'LIFO' }] }],
  } }];
  if (url.pathname.includes('/blog/asks/999999')) return [404, {}];
  if (/\/blog\/asks\/\d+$/.test(url.pathname)) return [200, { data: {
    id: 1, title: 'Comment fonctionne une file ?', body: 'Une question sur les algorithmes.',
    author: { id: 1, username: 'Auteur', avatar_url: null }, responses: [], responses_count: 0,
    created_at: '2026-10-01T00:00:00Z', views_count: 1, major: null, subject: null,
  } }];
  if (url.pathname.endsWith('/blog/asks')) return [200, { data: {
    items: [{ id: 1, title: 'Comment fonctionne une file ?', body: 'Une question.', author: { id: 1, username: 'Auteur' }, created_at: '2026-10-01T00:00:00Z', responses_count: 0 }],
    meta: { current_page: Number(url.searchParams.get('page')) || 1, last_page: 3, total: 30, per_page: 10 },
  } }];
  if (url.pathname.endsWith('/public/subjects')) return [200, { data: {
    items: [{ id: 1, name: 'Algorithmique', slug: 'algorithms', major_name: 'Informatique', quizzes_count: 4 }],
    meta: { current_page: Number(url.searchParams.get('page')) || 1, last_page: 3, total: 60, per_page: 24 },
  } }];
  if (url.pathname.endsWith('/public/majors')) return [200, { data: { items: [], meta: { current_page: 1, last_page: 1, total: 0, per_page: 6 } } }];
  if (url.pathname.endsWith('/stats')) return [200, { data: {} }];
  return [200, { data: [] }];
}

// Angular's current SSR backend uses xhr2 (Node http); also stub fetch so this
// check remains offline if the application later switches HTTP backends.
function request(options) {
  const req = new EventEmitter();
  req.write = () => true;
  req.abort = req.destroy = () => {};
  req.setTimeout = () => req;
  req.end = () => {
    setImmediate(() => {
      const [status, data] = fixture(options.path || String(options));
      const res = new EventEmitter();
      res.statusCode = status;
      res.headers = { 'content-type': 'application/json' };
      res.rawHeaders = ['Content-Type', 'application/json'];
      res.resume = res.destroy = () => {};
      req.emit('response', res);
      res.emit('data', Buffer.from(JSON.stringify(data)));
      res.emit('end');
    });
    return req;
  };
  return req;
}
http.request = https.request = request;
globalThis.fetch = async input => {
  const [status, data] = fixture(typeof input === 'string' ? input : input.url);
  return new Response(JSON.stringify(data), { status, headers: { 'Content-Type': 'application/json' } });
};
const { reqHandler } = await import('../dist/frontend/server/server.mjs');

async function render(path) {
  return new Promise((resolve, reject) => {
    const timeout = setTimeout(() => reject(new Error(`SSR timed out: ${path}`)), 15000);
    const socket = new net.Socket();
    socket.encrypted = true;
    const req = new http.IncomingMessage(socket);
    req.method = 'GET'; req.url = path; req.headers = { host: 'maroquiz.com' }; req.push(null);
    const res = new http.ServerResponse(req);
    const chunks = [];
    res.write = chunk => { chunks.push(Buffer.from(chunk)); return true; };
    res.end = chunk => {
      clearTimeout(timeout);
      if (chunk) chunks.push(Buffer.from(chunk));
      resolve({ status: res.statusCode, headers: res.getHeaders(), document: new JSDOM(Buffer.concat(chunks).toString()).window.document });
      return res;
    };
    reqHandler(req, res, reject);
  });
}
try {
for (const [path, title] of [
  ['/', en.landing.seo_title], ['/about', en.about.seo_title], ['/faq', en.faq.seo_title], ['/help', en.help.seo_title],
  ['/terms', en.legal.terms.seo_title], ['/privacy', en.legal.privacy.seo_title],
  ['/data-deletion', en.legal.dataDeletion.seo_title],
]) {
  const page = await render(path);
  assert.equal(page.status, 200, path);
  assert.equal(page.document.title, title, path);
  assert.ok(page.document.querySelector('meta[name=description]')?.content, path);
  assert.equal(page.document.querySelector('link[rel=canonical]')?.href, `https://maroquiz.com${path}`);
}
const trial = await render('/trial/subject/algorithms');
assert.equal(trial.status, 200);
assert.equal(trial.document.title, fr.trial.seo_title.replace('{{topic}}', 'Algorithmique'));
assert.equal(trial.document.documentElement.lang, 'fr');
assert.ok(trial.document.body.textContent.includes('Une file suit quel ordre ?'));
assert.equal(trial.document.querySelector('meta[property="og:locale"]')?.content, 'fr_FR');
assert.equal(trial.document.querySelector('link[rel=canonical]')?.href, 'https://maroquiz.com/trial/subject/algorithms');
for (const path of ['/blog?page=2', '/subjects?page=2']) {
  const page = await render(path);
  assert.equal(page.status, 200, path);
  assert.equal(page.document.querySelector('link[rel=canonical]')?.href, `https://maroquiz.com${path}`);
  assert.ok(page.document.title.includes('Page 2'), path);
  assert.ok(page.document.querySelector('a[href*="page=3"]'), path);
}
for (const [path, expected] of [
  ['/not-an-existing-page', 404], ['/trial/subject/not-found', 404],
  ['/blog/999999', 404], ['/trial/subject/unavailable', 503],
]) {
  const page = await render(path);
  assert.equal(page.status, expected, path);
  assert.ok(page.document.querySelector('meta[name=robots]')?.content.includes('noindex'), path);
  assert.ok(page.document.querySelector('h1')?.textContent.trim(), path);
}
const login = await render('/login');
assert.ok(login.document.querySelector('meta[name=robots]')?.content.includes('noindex'));
for (const path of ['/app/dashboard', '/admin/dashboard']) {
  const page = await render(path);
  assert.ok(String(page.headers['x-robots-tag']).includes('noindex'), path);
}
console.log('Offline SSR SEO checks passed: translated metadata, French quiz content, crawlable pagination, canonical URLs, errors, and private indexing headers.');

} catch (error) { console.error(error); process.exitCode = 1; }
