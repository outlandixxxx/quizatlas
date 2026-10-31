// Offline service-worker lifecycle checks. No browser vendor or application writes.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const vm = require('node:vm');
const source = fs.readFileSync(require('node:path').join(__dirname, '../public/concours-push-sw.js'), 'utf8');
const state = new Map(), handlers = {}, shown = [], opened = [];
const context = {
  URL, Set, Promise, Date, Notification: { permission: 'granted' },
  indexedDB: { open() {
    const request = {};
    setTimeout(() => { request.result = {
      close() {}, createObjectStore() {}, transaction() {
        const tx = { objectStore() { return {
          get(key) { const r = {}; setTimeout(() => { r.result = state.get(key); r.onsuccess(); }, 0); return r; },
          put(value, key) { state.set(key, value); setTimeout(() => tx.oncomplete?.(), 0); },
        }; } }; return tx;
      },
    }; request.onsuccess(); }, 0); return request;
  } },
  fetch: async () => ({ ok: true, json: async () => ({ data: { allowed: true } }) }),
  self: { addEventListener(name, handler) { handlers[name] = handler; }, skipWaiting: async () => {},
    registration: { showNotification: async (...args) => shown.push(args) },
    clients: { claim: async () => {}, openWindow: async url => opened.push(url) }, location: { origin: 'https://maroquiz.com' } },
};
vm.createContext(context); vm.runInContext(source, context);
async function invoke(name, fields) { const waiting = []; handlers[name]({ ...fields, waitUntil: p => waiting.push(p) }); await Promise.all(waiting); }
const payload = { event_id: 1, user_id: 2, concours_id: 7, announcement_slug: 'verified-fixture', url: '/concours/permanent#official-announcement', expires_at: Math.floor(Date.now()/1000)+60,
  title: 'PUBLIC FIXTURE', body: 'Verified fixture', tag: 'fixture-1', lang: 'ar', dir: 'rtl' };
const consent = { type: 'consent', enabled: true, user_id: 2, follow_ids: [7], api_base: 'https://api.maroquiz.com/api/v1' };
(async () => {
  await invoke('push', { data: { json: () => payload } }); assert.equal(shown.length, 0, 'No push before consent');
  await invoke('message', { data: consent }); await invoke('push', { data: { json: () => payload } }); assert.equal(shown.length, 1);
  assert.equal(shown[0][1].dir, 'rtl');
  await invoke('push', { data: { json: () => payload } }); assert.equal(shown.length, 1, 'Duplicate event is not displayed twice');
  await invoke('message', { data: { type: 'follow', concours_id: 7, enabled: false } });
  await invoke('push', { data: { json: () => ({ ...payload, event_id: 2 }) } }); assert.equal(shown.length, 1, 'No push after unfollow');
  await invoke('message', { data: consent }); context.Notification.permission = 'denied';
  await invoke('push', { data: { json: () => ({ ...payload, event_id: 3 }) } }); assert.equal(shown.length, 1, 'No push after permission withdrawal');
  context.Notification.permission = 'granted';
  await invoke('push', { data: { json: () => ({ ...payload, event_id: 4, user_id: 9 }) } }); assert.equal(shown.length, 1, 'No cross-account push');
  await invoke('push', { data: { json: () => ({ ...payload, event_id: 5, expires_at: 1 }) } }); assert.equal(shown.length, 1, 'No expired push');
  context.fetch = async () => ({ ok: false });
  await invoke('push', { data: { json: () => ({ ...payload, event_id: 6 }) } }); assert.equal(shown.length, 1, 'No withdrawn/private announcement');
  await invoke('message', { data: { type: 'consent', enabled: false } });
  await invoke('push', { data: { json: () => ({ ...payload, event_id: 7 }) } }); assert.equal(shown.length, 1, 'No push after device disable/logout');
  await invoke('notificationclick', { notification: { close() {}, data: { url: payload.url } } }); assert.equal(opened[0], 'https://maroquiz.com' + payload.url);
  await invoke('notificationclick', { notification: { close() {}, data: { url: 'https://evil.test' } } }); assert.equal(opened.length, 1);
  console.log('Offline Concours push-worker checks passed: consent, duplicate suppression, RTL, unfollow, revoked permission, cross-account isolation, expiry, public visibility, disable/logout and safe click links.');
})().catch(error => { console.error(error); process.exitCode = 1; });
