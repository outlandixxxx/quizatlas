// Render the real SSR bundle with isolated HTTP fixtures; no application/database writes.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const http = require('node:http');
const https = require('node:https');
const net = require('node:net');
const { EventEmitter } = require('node:events');
const { pathToFileURL } = require('node:url');
const root = path.resolve(__dirname, '../..');
const output = path.join(root, 'frontend/output/video-library-review');
const requests = [];
const envelope = (url) => {
  const format = new URL(url, 'http://backend').searchParams.get('format') || 'short';
  return JSON.stringify({ success: true, data: { items: [{ id: format === 'short' ? 1 : 2,
    youtube_id: 'M7lc1UVf-VE', url: 'https://www.youtube.com/watch?v=M7lc1UVf-VE',
    title: `Stored ${format} video`, format, category: 'quiz', template: 'general', language: 'fr',
    status: 'published', thumbnail_url: `/api/v1/public/videos/${format === 'short' ? 1 : 2}/thumbnail`,
    duration_seconds: null, embeddable: null }],
    meta: { current_page: 1, last_page: 1, per_page: 12, total: 1 } } });
};

async function main() {
  const originals = { request: http.request, secure: https.request, fetch: globalThis.fetch };
  const oldApi = process.env.SSR_API_URL;
  process.env.SSR_API_URL = 'http://backend/api/v1';
  const mockRequest = (options) => {
    const url = typeof options === 'string' ? options : `${options.protocol || 'http:'}//${options.hostname || options.host || 'backend'}${options.path || '/'}`;
    requests.push(url);
    assert.ok(!/youtube|google|ytimg/.test(url), 'SSR must not contact YouTube or tracking providers.');
    const req = new EventEmitter();
    req.write = () => true; req.abort = req.destroy = () => {}; req.setTimeout = () => req;
    req.end = () => {
      setImmediate(() => {
        const res = new EventEmitter();
        res.statusCode = 200; res.headers = { 'content-type': 'application/json' };
        res.rawHeaders = ['Content-Type', 'application/json']; res.resume = res.destroy = () => {};
        req.emit('response', res); res.emit('data', Buffer.from(envelope(url))); res.emit('end');
      });
      return req;
    };
    return req;
  };
  http.request = https.request = mockRequest;
  globalThis.fetch = async (input) => {
    const url = String(input.url || input);
    requests.push(url);
    assert.ok(!/youtube|google|ytimg/.test(url));
    return new Response(envelope(url), { headers: { 'Content-Type': 'application/json' } });
  };
  try {
    const { reqHandler } = await import(pathToFileURL(path.join(root, 'frontend/dist/frontend/server/server.mjs')).href);
    fs.mkdirSync(output, { recursive: true });
    for (const url of ['/videos', '/videos?format=short&language=fr']) {
      const result = await new Promise((resolve, reject) => {
        const timeout = setTimeout(() => reject(new Error('Video library SSR timed out.')), 25000);
        const socket = new net.Socket(); socket.encrypted = true;
        const req = new http.IncomingMessage(socket);
        req.method = 'GET'; req.url = url; req.headers = { host: 'maroquiz.com' }; req.push(null);
        const res = new http.ServerResponse(req), chunks = [];
        res.write = chunk => { chunks.push(Buffer.from(chunk)); return true; };
        res.end = chunk => {
          clearTimeout(timeout);
          if (chunk) chunks.push(Buffer.from(chunk));
          resolve({ html: Buffer.concat(chunks).toString(), status: res.statusCode });
          return res;
        };
        reqHandler(req, res, reject);
      });
      assert.equal(result.status, 200);
      assert.match(result.html, /class="video-library"/);
      assert.match(result.html, /Stored short video/);
      assert.match(result.html, /rel="canonical" href="https:\/\/maroquiz.com\/videos"/);
      assert.match(result.html, url.includes('?') ? /name="robots" content="noindex, follow"/ : /name="robots" content="index, follow"/);
      assert.ok(!/<iframe\b/.test(result.html));
      assert.ok(!/<img[^>]+src="http:\/\/backend/.test(result.html), 'Internal SSR API origins must not leak into images.');
      assert.ok(!/<script[^>]+src="https:\/\/(www\.googletagmanager|pagead2\.googlesyndication|www\.youtube)/.test(result.html));
      fs.writeFileSync(path.join(output, url.includes('?') ? 'ssr-filtered.html' : 'ssr.html'), result.html);
    }
    const report = { ssr: 'passed', initialCatalogueRendered: true, canonicalAndNoindex: true,
      browserPlayerDuringSsr: false, externalProviderRequests: 0, requestCount: requests.length };
    fs.writeFileSync(path.join(output, 'ssr-checks.json'), JSON.stringify(report, null, 2));
    console.log(JSON.stringify(report));
  } finally {
    http.request = originals.request; https.request = originals.secure; globalThis.fetch = originals.fetch;
    if (oldApi === undefined) delete process.env.SSR_API_URL; else process.env.SSR_API_URL = oldApi;
  }
}
main().catch(error => { console.error(error); process.exitCode = 1; });
