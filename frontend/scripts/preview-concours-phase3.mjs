// Local-only preview of the production SSR build against the real local API.
// Start this before: node frontend/scripts/check-concours-browser.cjs --phase3
import { createServer } from 'node:http';

const api = new URL(process.env.CONCOURS_API_URL || 'http://localhost:8000/api/v1');
if (!['localhost', '127.0.0.1', '[::1]'].includes(api.hostname)) {
  throw new Error('This preview is restricted to a loopback API.');
}
process.env.SSR_API_URL = api.href.replace(/\/$/, '');
const { reqHandler } = await import('../dist/frontend/server/server.mjs');

createServer((request, response) => {
  // Match the existing production renderer's trusted hostname internally.
  // This wrapper listens only on loopback and changes no application setting.
  request.headers.host = 'maroquiz.com';
  request.headers['x-forwarded-proto'] = 'https';
  reqHandler(request, response);
}).listen(4301, '127.0.0.1', () => {
  console.log(`Concours production preview: http://localhost:4301; API: ${api.href}`);
});
