// Optional Web Push only. No fetch interception, offline cache, JWT or private data.
const database = () =>
  new Promise((resolve, reject) => {
    const request = indexedDB.open('maroquiz-concours-push', 1);
    request.onupgradeneeded = () => request.result.createObjectStore('state');
    request.onsuccess = () => resolve(request.result);
    request.onerror = () => reject(request.error);
  });
async function read(key) {
  const db = await database();
  try {
    return await new Promise((resolve, reject) => {
      const req = db.transaction('state').objectStore('state').get(key);
      req.onsuccess = () => resolve(req.result);
      req.onerror = () => reject(req.error);
    });
  } finally {
    db.close();
  }
}
async function write(key, value) {
  const db = await database();
  try {
    await new Promise((resolve, reject) => {
      const tx = db.transaction('state', 'readwrite');
      tx.objectStore('state').put(value, key);
      tx.oncomplete = resolve;
      tx.onerror = () => reject(tx.error);
    });
  } finally {
    db.close();
  }
}
self.addEventListener('install', (event) => event.waitUntil(self.skipWaiting()));
self.addEventListener('activate', (event) => event.waitUntil(self.clients.claim()));
self.addEventListener('message', (event) =>
  event.waitUntil(
    (async () => {
      if (event.data?.type === 'consent') {
        const old = await read('consent');
        const value = event.data.enabled ? event.data : { ...old, enabled: false };
        await write('consent', value);
      } else if (event.data?.type === 'follow') {
        const state = await read('consent');
        if (!state) return;
        const ids = new Set(state.follow_ids || []);
        event.data.enabled ? ids.add(event.data.concours_id) : ids.delete(event.data.concours_id);
        await write('consent', { ...state, follow_ids: [...ids] });
      }
    })().then(() => event.ports?.[0]?.postMessage({ ok: true })),
  ),
);
// Serialize push handling to avoid simultaneous duplicate displays for the same event.
let pending = Promise.resolve();
self.addEventListener('push', (event) => {
  pending = pending
    .catch(() => {})
    .then(async () => {
      const payload = event.data?.json();
      let consent = await read('consent');
      if (
        !payload ||
        !consent?.enabled ||
        Notification.permission !== 'granted' ||
        consent.user_id !== payload.user_id ||
        !(consent.follow_ids || []).includes(payload.concours_id) ||
        payload.expires_at * 1000 < Date.now() ||
        !/^\/concours\/[a-z0-9-]+#official-announcement$/.test(payload.url) ||
        !/^[a-z0-9-]+$/.test(payload.announcement_slug)
      )
        return;
      const seenKey = 'event:' + payload.user_id + ':' + payload.event_id;
      if (await read(seenKey)) return;
      // Recheck public availability before displaying a delayed announcement.
      const url = new URL(consent.api_base + '/public/concours-push/verify');
      if (url.protocol !== 'https:' && !['localhost', '127.0.0.1'].includes(url.hostname)) return;
      const response = await fetch(url.href, {
        method: 'POST',
        credentials: 'omit',
        cache: 'no-store',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          delivery_id: payload.delivery_id,
          verification_token: payload.verification_token,
        }),
      });
      if (!response.ok || !(await response.json()).data?.allowed) return;
      consent = await read('consent');
      if (
        !consent?.enabled ||
        consent.user_id !== payload.user_id ||
        !consent.follow_ids.includes(payload.concours_id) ||
        Notification.permission !== 'granted'
      )
        return;
      await write(seenKey, Date.now());
      await self.registration.showNotification(payload.title, {
        body: payload.body,
        lang: payload.lang,
        dir: payload.dir,
        tag: payload.tag,
        renotify: false,
        data: { url: payload.url },
      });
    });
  event.waitUntil(pending.catch(() => {}));
});
self.addEventListener('notificationclick', (event) => {
  event.notification.close();
  const path = event.notification.data?.url;
  if (!/^\/concours\/[a-z0-9-]+#official-announcement$/.test(path || '')) return;
  event.waitUntil(self.clients.openWindow(new URL(path, self.location.origin).href));
});
