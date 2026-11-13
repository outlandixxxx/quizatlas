// Offline production-bundle acceptance: fixture API/YouTube responses only, no database or network writes.
// Run after a production build, with one Chromium context at a time.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const repo = path.resolve(__dirname, '../..');
const { chromium } = require(require.resolve('playwright', { paths: [path.join(repo, 'video-generator'), path.join(repo, 'frontend')] }));
const bundle = path.join(repo, 'frontend/dist/frontend/browser');
const output = path.join(repo, 'frontend/output/video-library-review');
const thumbnailDirectory = process.env.VIDEO_LIBRARY_THUMBNAIL_DIR || '/tmp/maroquiz-video-library-assets';
const visualCatalogueFile = path.join(thumbnailDirectory, 'review-catalogue.json');
const visualCatalogue = fs.existsSync(visualCatalogueFile) ? JSON.parse(fs.readFileSync(visualCatalogueFile, 'utf8')) : null;
if (visualCatalogue) assert.ok(Array.isArray(visualCatalogue) && visualCatalogue.length, 'Visual review catalogue must be a nonempty video array.');
const origin = 'https://maroquiz.com';
const consentKey = 'maroquiz.google-consent.v1';
const nginx = fs.readFileSync(path.join(repo, 'infrastructure/docker/nginx/default.prod.conf'), 'utf8');
const csp = nginx.match(/add_header Content-Security-Policy "([^"]+)" always;/)?.[1];
assert.ok(csp, 'Read the actual production CSP.');
assert.ok(fs.existsSync(path.join(bundle, 'index.csr.html')), 'Build Angular before running this check.');
const mime = { '.js': 'text/javascript', '.css': 'text/css', '.json': 'application/json', '.html': 'text/html',
  '.svg': 'image/svg+xml', '.webp': 'image/webp', '.png': 'image/png', '.jpg': 'image/jpeg', '.woff2': 'font/woff2', '.ttf': 'font/ttf' };
const dictionary = (language) => JSON.parse(fs.readFileSync(path.join(repo, `frontend/src/assets/i18n/${language}.json`)));
const envelope = (data) => ({ success: true, message: 'Offline browser fixture', data });
const video = (id, youtube_id, title, overrides = {}) => ({
  id, youtube_id, url: `https://www.youtube.com/watch?v=${youtube_id}`, title,
  format: 'short', category: 'quiz', template: 'five-seconds', language: 'fr', status: 'published',
  thumbnail_url: `/api/v1/public/videos/${id}/thumbnail`, duration_seconds: 24, embeddable: true,
  published_at: '2026-11-12T12:00:00Z', ...overrides,
});
const videos = [
  video(1, 'M7lc1UVf-VE', 'Teste tes connaissances — défi rapide'),
  video(2, 'aqz-KE-bpKQ', 'Prêt pour le concours ?', { template: 'niveau-concours' }),
  video(3, 'jNQXAC9IVRw', 'Science facts — discover something new', { category: 'facts', template: 'facts-short', language: 'en' }),
  video(4, 'ScMzIvxBSi4', 'تحدّي اليوم — اختبر معلوماتك', { template: 'defi-du-jour', language: 'ar', embeddable: false }),
  video(5, '9bZkp7q19f0', 'Sciences de l’éducation : notions essentielles', { format: 'long', template: 'quiz-long', duration_seconds: 760 }),
  video(6, 'ysz5S6PUM-U', 'Culture générale : l’essentiel en questions', { format: 'long', category: 'facts', template: 'facts-long', duration_seconds: 505 }),
  video(7, 'dQw4w9WgXcQ', 'Informatique : notions et applications', { format: 'long', template: 'quiz-long', duration_seconds: 910 }),
];
const results = [];
const fontCache = new Map();
const fontFailures = new Set();

async function fixture(browser, language, width, height, admin = false, theme = 'light') {
  const context = await browser.newContext({ viewport: { width, height }, isMobile: width < 600, hasTouch: width < 600, reducedMotion: 'reduce' });
  await context.addInitScript(({ language, theme, admin, consentKey }) => {
    if (window !== window.top) return;
    localStorage.setItem('quizatlas.language', language);
    localStorage.setItem('quizatlas.theme', theme);
    localStorage.setItem(consentKey, JSON.stringify({ version: 1, analytics: false, advertising: false, externalVideo: false, expiresAt: Date.now() + 86400000 }));
    if (admin) localStorage.setItem('quizatlas_access_token', 'CONTROLLED_VIDEO_LIBRARY_FIXTURE_ONLY');
    window.__libraryCspViolations = [];
    document.addEventListener('securitypolicyviolation', (event) => window.__libraryCspViolations.push({ directive: event.effectiveDirective, blocked: event.blockedURI }));
  }, { language, theme, admin, consentKey });
  const state = { api: [], embeds: 0, google: 0, outboundBlocked: [], thumbnailFixtures: [], catalogue: videos, adminVideos: [videos[0]], nextId: 100 };
  await context.route('**/*', async (route) => {
    const request = route.request(), url = new URL(request.url());
    if (url.hostname === 'www.youtube-nocookie.com') {
      state.embeds++;
      assert.equal(url.searchParams.get('autoplay'), '0');
      assert.equal(url.searchParams.get('controls'), '1');
      // This is a deliberate player stand-in, never evidence of real YouTube playback/view counts.
      return route.fulfill({ contentType: 'text/html', body: '<!doctype html><html><head><title>Offline YouTube player fixture</title></head><body style="margin:0;display:grid;place-items:center;min-height:100vh;background:#151515;color:white;font-family:sans-serif"><button style="padding:18px" onclick="this.textContent=\'Fixture playing\';document.body.dataset.playing=\'true\'">Play fixture</button></body></html>' });
    }
    if (/googletagmanager|googlesyndication|google-analytics|doubleclick/.test(url.hostname)) {
      state.google++;
      return route.abort();
    }
    if (url.protocol === 'https:' && url.hostname === 'fonts.gstatic.com') {
      const key = url.href;
      if (fontCache.has(key)) return route.fulfill(fontCache.get(key));
      if (fontFailures.has(key) || fontCache.size >= 24) return route.abort();
      try {
        const response = await route.fetch({ timeout: 10000, maxRedirects: 0 });
        const declared = Number(response.headers()['content-length'] || 0);
        if (!response.ok() || declared > 8 * 1024 * 1024) throw new Error('Font response rejected.');
        const body = await response.body();
        if (body.length > 8 * 1024 * 1024) throw new Error('Font response exceeds 8 MB.');
        const cached = { status: 200, body, contentType: response.headers()['content-type'] || 'font/woff2',
          headers: { 'Access-Control-Allow-Origin': '*' } };
        fontCache.set(key, cached);
        return route.fulfill(cached);
      } catch {
        fontFailures.add(key);
        return route.abort();
      }
    }
    if (url.pathname.startsWith('/api/v1/')) {
      const name = url.pathname.slice('/api/v1'.length), method = request.method();
      if (method === 'OPTIONS') return route.fulfill({ status: 204, body: '', headers: {
        'Access-Control-Allow-Origin': origin, 'Access-Control-Allow-Methods': 'GET, POST, PUT, DELETE, OPTIONS',
        'Access-Control-Allow-Headers': 'authorization, content-type',
      } });
      state.api.push({ path: name, method, query: Object.fromEntries(url.searchParams), body: request.postDataJSON() });
      const thumbnail = name.match(/^\/public\/videos\/(\d+)\/thumbnail$/);
      if (thumbnail) {
        const item = state.catalogue.find((entry) => entry.id === Number(thumbnail[1]));
        const file = item && path.join(thumbnailDirectory, `${item.youtube_id}.jpg`);
        if (file && fs.existsSync(file)) {
          state.thumbnailFixtures.push(item.youtube_id);
          return route.fulfill({ body: fs.readFileSync(file), contentType: 'image/jpeg', headers: { 'Access-Control-Allow-Origin': origin } });
        }
        // Missing downloaded fixtures use the existing project logo through the component's onerror path.
        return route.fulfill({ status: 404, body: '', headers: { 'Access-Control-Allow-Origin': origin } });
      }
      const json = (data, status = 200) => route.fulfill({ status, json: envelope(data), headers: { 'Access-Control-Allow-Origin': origin } });
      if (name === '/auth/me') return json({ id: 999001, name: 'Offline review administrator', username: 'library-fixture', email: 'fixture@example.test', role: 'admin', preferences: {} });
      if (name.endsWith('/unread-count')) return json({ count: 0 });
      if (name === '/public/videos') {
        const params = url.searchParams;
        const filtered = state.catalogue.filter((item) => ['format', 'category', 'template', 'language'].every((key) => !params.get(key) || item[key] === params.get(key))
          && (!params.get('q') || item.title.toLowerCase().includes(params.get('q').toLowerCase())));
        const page = Number(params.get('page') || 1);
        const items = page === 1 ? filtered : filtered.slice(0, 2).map((item) => ({ ...item, id: item.id + 20, title: `${item.title} — page 2` }));
        return json({ items, meta: { current_page: page, last_page: filtered.length ? 2 : 1, per_page: 12, total: filtered.length ? filtered.length + 2 : 0 } });
      }
      if (name === '/admin/video-library/review') {
        const body = request.postDataJSON();
        return json({ rows: body.urls.map((url, index) => {
          const id = url.match(/(?:v=|youtu\.be\/|shorts\/|embed\/)([A-Za-z0-9_-]{11})(?:[?&#/]|$)/)?.[1];
          const existing = id ? state.adminVideos.find((item) => item.youtube_id === id) : null;
          return { ...body.defaults, index, url, youtube_id: id || null,
            title: body.defaults?.title || (id ? `Imported video ${index + 1}` : ''), existing,
            errors: id ? {} : { url: ['Invalid YouTube URL.'] }, metadata_error: 'metadata_not_configured' };
        }) });
      }
      if (name === '/admin/video-library/import') {
        const rows = request.postDataJSON().rows.map((row, index) => {
          const id = row.url.match(/(?:v=|youtu\.be\/|shorts\/|embed\/)([A-Za-z0-9_-]{11})(?:[?&#/]|$)/)?.[1];
          const existing = state.adminVideos.find((item) => item.youtube_id === id);
          if (existing) return { index, status: 'existing', video: existing };
          if (row.title === 'FAIL_FIXTURE') return { index, status: 'invalid', errors: { title: ['Controlled row validation failure.'] } };
          const entry = { ...video(++state.nextId, id, row.title), ...row };
          state.adminVideos.push(entry);
          return { index, status: 'created', video: entry };
        });
        return json({ rows });
      }
      if (name === '/admin/video-library' && method === 'GET') return json({ items: state.adminVideos, meta: { current_page: 1, last_page: 1, per_page: 15, total: state.adminVideos.length } });
      const entry = name.match(/^\/admin\/video-library\/(\d+)$/);
      if (entry && method === 'PUT') {
        const body = request.postDataJSON();
        assert.equal(body.url, undefined, 'Updates must not send immutable URL.');
        assert.equal(body.youtube_id, undefined, 'Updates must not send immutable ID.');
        const found = state.adminVideos.find((item) => item.id === Number(entry[1]));
        Object.assign(found, body);
        return json(found);
      }
      if (entry && method === 'DELETE') {
        state.adminVideos = state.adminVideos.filter((item) => item.id !== Number(entry[1]));
        return json({ deleted: true });
      }
      assert.equal(method, 'GET', `No unhandled application write is permitted: ${name}`);
      return json([]);
    }
    if (url.hostname !== 'maroquiz.com') { state.outboundBlocked.push(url.hostname); return route.abort(); }
    let file = path.join(bundle, decodeURIComponent(url.pathname));
    if (!file.startsWith(bundle + path.sep)) return route.abort();
    if (!fs.existsSync(file) || fs.statSync(file).isDirectory()) file = path.join(bundle, 'index.csr.html');
    return route.fulfill({ body: fs.readFileSync(file), contentType: mime[path.extname(file)] || 'application/octet-stream', headers: { 'Content-Security-Policy': csp } });
  });
  const page = await context.newPage();
  const errors = [];
  page.on('pageerror', (error) => errors.push(error.message));
  page.setDefaultTimeout(15000);
  return { context, page, state, errors };
}

async function publicReady(page) {
  await page.locator('.short-card').first().waitFor();
  await page.locator('.long-card').first().waitFor();
  await page.evaluate(() => document.fonts.ready);
}
async function noOverflow(page) {
  assert.ok(await page.evaluate(() => document.documentElement.scrollWidth <= innerWidth + 1), 'No horizontal page overflow.');
}
async function snapshot(page, name) {
  await noOverflow(page);
  await page.screenshot({ path: path.join(output, `${name}.png`), fullPage: true });
}
async function publicSnapshot(page, name, state) {
  if (!visualCatalogue) return snapshot(page, name);
  const previous = state.catalogue;
  try {
    // Real channel titles/thumbnails are a visual-only in-memory review fixture.
    // Classification is explicitly supplied by the review fixture, never guessed or saved.
    state.catalogue = visualCatalogue;
    await page.goto(`${origin}/videos`, { waitUntil: 'networkidle' });
    await publicReady(page);
    await snapshot(page, name);
  } finally {
    state.catalogue = previous;
    await page.goto(`${origin}/videos`, { waitUntil: 'networkidle' });
    await publicReady(page);
  }
}
const section = (page, type) => page.locator(`section[aria-labelledby="${type}-heading"]`);

async function publicDesktop(browser) {
  const { context, page, state, errors } = await fixture(browser, 'fr', 1280, 1000);
  try {
    await page.goto(`${origin}/videos`, { waitUntil: 'networkidle' });
    await publicReady(page);
    await publicSnapshot(page, 'desktop-fr', state);
    assert.equal(state.embeds, 0);
    assert.equal(state.google, 0);
    assert.equal(await page.locator('link[rel=canonical]').getAttribute('href'), `${origin}/videos`);
    await page.locator('.format-tabs button').nth(1).click();
    await section(page, 'longs').waitFor({ state: 'detached' });
    assert.equal(await page.locator('.long-card').count(), 0);
    await page.locator('.format-tabs button').nth(2).click();
    await section(page, 'shorts').waitFor({ state: 'detached' });
    assert.equal(await page.locator('.short-card').count(), 0);
    await page.locator('.format-tabs button').first().click();
    await publicReady(page);
    await page.locator('#video-search').fill('Science');
    await page.locator('.search button').click();
    await page.waitForURL('**/videos?q=Science');
    await page.locator('#video-filters select').nth(0).selectOption('facts');
    await page.waitForURL(/category=facts/);
    await page.locator('#video-filters select').nth(1).selectOption('facts-short');
    await page.waitForURL(/template=facts-short/);
    await page.locator('#video-filters select').nth(2).selectOption('en');
    await page.waitForURL(/language=en/);
    await page.waitForFunction(() => document.querySelectorAll('.short-card').length === 1);
    assert.ok(state.api.some((request) => request.query.q === 'Science' && request.query.category === 'facts' && request.query.template === 'facts-short' && request.query.language === 'en'));
    assert.match(await page.locator('meta[name=robots]').getAttribute('content'), /noindex/);
    await page.locator('.reset').click();
    await publicReady(page);
    await section(page, 'shorts').locator('.pagination button').last().click();
    await page.waitForURL(/short_page=2/);
    await page.waitForFunction(() => document.querySelector('.short-card h3')?.textContent.includes('page 2'));
    assert.ok(await page.locator('.short-card').count() <= 12);
    assert.equal(await section(page, 'shorts').locator('.end-results').count(), 1);
    await page.locator('.reset').click();
    await publicReady(page);

    const first = page.locator('.short-card .video-card-play').first();
    await first.click();
    const dialog = page.locator('.video-dialog[open]');
    await dialog.waitFor();
    assert.equal(await dialog.locator('iframe').count(), 0, 'No iframe before external-video permission.');
    assert.equal(state.embeds, 0);
    assert.equal(await dialog.locator('.close-player').evaluate((node) => document.activeElement === node), true);
    await page.keyboard.press('Escape');
    await dialog.waitFor({ state: 'detached' });
    assert.equal(await first.evaluate((node) => document.activeElement === node), true);
    await first.click();
    await dialog.locator('.player-consent button').click();
    await dialog.locator('iframe').waitFor();
    await page.frameLocator('.video-dialog iframe').getByRole('button', { name: 'Play fixture' }).click();
    assert.equal(await page.frameLocator('.video-dialog iframe').locator('body').getAttribute('data-playing'), 'true');
    const consent = await page.evaluate((key) => JSON.parse(localStorage.getItem(key)), consentKey);
    assert.deepEqual([consent.analytics, consent.advertising, consent.externalVideo], [false, false, true]);
    assert.equal(state.google, 0);
    await dialog.locator('.close-player').click();
    assert.equal(await page.locator('iframe').count(), 0);
    await page.locator('.short-card .video-card-play').last().click();
    assert.equal(await dialog.locator('iframe').count(), 0);
    assert.equal(await dialog.locator('.player-notice').count(), 1);
    assert.equal(await dialog.locator('a[target=_blank]').getAttribute('rel'), 'noopener noreferrer');
    await dialog.locator('.close-player').click();
    await first.click();
    await dialog.locator('iframe').waitFor();
    // Withdraw from another tab through the same production storage listener.
    await page.evaluate((key) => {
      const value = JSON.parse(localStorage.getItem(key)); value.externalVideo = false;
      localStorage.setItem(key, JSON.stringify(value));
      dispatchEvent(new StorageEvent('storage', { key, newValue: JSON.stringify(value), storageArea: localStorage }));
    }, consentKey);
    await dialog.locator('iframe').waitFor({ state: 'detached' });
    await dialog.locator('.player-consent a').click();
    await page.waitForURL('**/privacy');
    assert.equal(await page.locator('.video-dialog, .video-dialog iframe').count(), 0);
    await page.goto(`${origin}/videos`, { waitUntil: 'networkidle' });
    await publicReady(page);
    // Probe that the real nginx policy prevents an unrelated frame/connect origin.
    await page.evaluate(async () => {
      const frame = document.createElement('iframe'); frame.src = 'https://blocked.invalid/player'; document.body.appendChild(frame);
      await fetch('https://blocked.invalid/collect').catch(() => {}); frame.remove();
    });
    await page.waitForFunction(() => window.__libraryCspViolations.some((item) => item.directive === 'frame-src'));
    const violations = await page.evaluate(() => window.__libraryCspViolations);
    assert.ok(violations.some((item) => item.directive === 'connect-src'));
    assert.ok(!state.outboundBlocked.includes('blocked.invalid'), 'CSP stopped the request before network interception.');
    assert.deepEqual(errors, []);
    results.push({ scenario: 'public-desktop', passed: true, filters: true, boundedPagination: true, consent: true,
      nativeDialogFocus: true, withdrawalAndRouteCleanup: true, realYouTubePlayback: 'not exercised; explicit offline player fixture',
      embedsAfterPermission: state.embeds, googleRequests: state.google, csp: true,
      downloadedThumbnailFixtures: [...new Set(state.thumbnailFixtures)] });
  } catch (error) {
    const frames = [];
    for (const frame of page.frames()) frames.push({ url: frame.url(), text: await frame.locator('body').innerText({ timeout: 1000 }).then(text => text.slice(0, 1400)).catch(() => null) });
    fs.writeFileSync(path.join(output, 'browser-failure.json'), JSON.stringify({ message: error.message, errors, embeds: state.embeds, violations: await page.evaluate(() => window.__libraryCspViolations), frames }, null, 2));
    await page.screenshot({ path: path.join(output, 'browser-failure.png') }).catch(() => {});
    throw error;
  } finally { await context.close(); }
}

async function publicViewport(browser, language, width, height, theme = 'light') {
  const { context, page, state, errors } = await fixture(browser, language, width, height, false, theme);
  try {
    await page.goto(`${origin}/videos`, { waitUntil: 'networkidle' });
    await publicReady(page);
    assert.equal(await page.locator('.video-library').getAttribute('dir'), language === 'ar' ? 'rtl' : 'ltr');
    const carousel = page.locator('.shorts-carousel');
    const cards = page.locator('.short-card');
    const bounds = await carousel.boundingBox(), first = await cards.first().boundingBox(), second = await cards.nth(1).boundingBox();
    if (width < 600) {
      assert.ok(first.width < bounds.width && first.width > bounds.width * .65, 'A complete first card remains readable.');
      assert.ok(language === 'ar' ? second.x + second.width > bounds.x : second.x < bounds.x + bounds.width, 'A partial next card signals horizontal scrolling.');
    }
    const initial = await carousel.evaluate((node) => node.scrollLeft);
    await page.locator('.carousel-controls .next').click();
    const next = await carousel.evaluate((node) => node.scrollLeft);
    const overflows = await carousel.evaluate((node) => node.scrollWidth > node.clientWidth + 1);
    if (overflows) assert.ok(language === 'ar' ? next < initial : next > initial, 'Carousel button respects the reading direction.');
    else assert.equal(next, initial, 'A fully visible desktop shelf has no scroll range.');
    await carousel.evaluate((node) => node.scrollTo({ left: 0, behavior: 'instant' }));
    if (width < 600) {
      const cdp = await context.newCDPSession(page);
      try {
        await carousel.scrollIntoViewIfNeeded();
        const box = await carousel.boundingBox();
        const start = box.x + box.width * (language === 'ar' ? .25 : .8);
        const end = box.x + box.width * (language === 'ar' ? .8 : .25);
        const y = Math.min(height - 80, box.y + Math.min(180, box.height / 2));
        const point = (x) => [{ x, y, radiusX: 2, radiusY: 2, force: 1 }];
        await cdp.send('Input.dispatchTouchEvent', { type: 'touchStart', touchPoints: point(start) });
        for (let step = 1; step <= 8; step++) {
          await cdp.send('Input.dispatchTouchEvent', { type: 'touchMove', touchPoints: point(start + (end - start) * step / 8) });
          await page.evaluate(() => new Promise(requestAnimationFrame));
        }
        await cdp.send('Input.dispatchTouchEvent', { type: 'touchEnd', touchPoints: [] });
        await page.waitForFunction(({ language }) => {
          const value = document.querySelector('.shorts-carousel').scrollLeft;
          return language === 'ar' ? value < -10 : value > 10;
        }, { language });
      } finally { await cdp.detach(); }
      await carousel.evaluate((node) => node.scrollTo({ left: 0, behavior: 'instant' }));
    }
    const firstButton = cards.first().locator('button');
    await firstButton.focus();
    await page.keyboard.press(language === 'ar' ? 'ArrowLeft' : 'ArrowRight');
    assert.equal(await cards.nth(1).locator('button').evaluate((node) => document.activeElement === node), true);
    await page.keyboard.press('End');
    assert.equal(await cards.last().locator('button').evaluate((node) => document.activeElement === node), true);
    await page.keyboard.press('Home');
    await carousel.evaluate((node) => node.scrollTo({ left: 0, behavior: 'instant' }));
    await page.evaluate(() => scrollTo({ top: 0, behavior: 'instant' }));
    await publicSnapshot(page, `${width < 600 ? 'mobile' : 'desktop'}-${language}-${theme}-${width}`, state);
    assert.equal(state.embeds + state.google, 0);
    assert.deepEqual(errors, []);
    results.push({ scenario: `${language}-${width}-${theme}`, passed: true, noOverflow: true, carouselKeyboardAndDirection: true,
      touchEnabled: width < 600, touchGesture: width < 600 ? 'Chromium touchStart/move/end scroll verified' : 'not applicable' });
  } finally { await context.close(); }
}

async function adminReview(browser) {
  const { context, page, state, errors } = await fixture(browser, 'fr', 1280, 1000, true);
  const labels = dictionary('fr').videoLibraryAdmin;
  try {
    await page.goto(`${origin}/admin/video-library`, { waitUntil: 'networkidle' });
    await page.locator('#video-urls').waitFor();
    await page.locator('#video-urls').fill('https://youtu.be/M7lc1UVf-VE\nhttps://youtu.be/aqz-KE-bpKQ\ninvalid');
    await page.getByRole('button', { name: labels.review, exact: true }).click();
    const rows = page.locator('.review-table tbody tr');
    await rows.nth(2).waitFor();
    assert.ok((await rows.first().textContent()).includes(labels.existing));
    assert.ok((await rows.nth(2).textContent()).includes('Invalid YouTube URL.'));
    await rows.nth(1).locator('input').nth(1).fill('FAIL_FIXTURE');
    await page.getByRole('button', { name: new RegExp(labels.saveReviewed) }).click();
    await rows.nth(1).getByText('Controlled row validation failure.', { exact: true }).waitFor();
    assert.equal(await rows.nth(1).locator('input').nth(1).inputValue(), 'FAIL_FIXTURE');
    await snapshot(page, 'admin-bulk-review-fr');
    await rows.nth(1).locator('input').nth(1).fill('Titre corrigé par l’administrateur');
    await page.getByRole('button', { name: new RegExp(labels.saveReviewed) }).click();
    await rows.nth(1).getByText(labels.created, { exact: true }).waitFor();
    await rows.nth(2).locator('input').first().fill('https://youtu.be/jNQXAC9IVRw');
    await rows.nth(2).locator('input').nth(1).fill('Conserver mon titre');
    await rows.nth(2).getByRole('button', { name: labels.checkUrl, exact: true }).click();
    await rows.nth(2).locator('code').filter({ hasText: 'jNQXAC9IVRw' }).waitFor();
    assert.equal(await rows.nth(2).locator('input').nth(1).inputValue(), 'Conserver mon titre');
    await page.getByRole('button', { name: new RegExp(labels.saveReviewed) }).click();
    await rows.nth(2).getByText(labels.created, { exact: true }).waitFor();
    const firstEntry = page.locator('.catalogue-item').first();
    await firstEntry.getByRole('button', { name: labels.edit, exact: true }).click();
    await page.locator('input[name=edit-title]').fill('Titre modifié');
    assert.equal(await page.locator('input[name=edit-url]').getAttribute('readonly'), '');
    await page.getByRole('button', { name: labels.saveChanges, exact: true }).click();
    await firstEntry.getByText('Titre modifié', { exact: true }).waitFor();
    await firstEntry.getByRole('button', { name: labels.unpublish, exact: true }).click();
    await firstEntry.getByRole('button', { name: labels.publish, exact: true }).waitFor();
    await firstEntry.getByRole('button', { name: labels.publish, exact: true }).click();
    await firstEntry.getByRole('button', { name: labels.remove, exact: true }).click();
    const confirmation = page.getByRole('alertdialog');
    await confirmation.getByRole('button', { name: labels.cancel, exact: true }).click();
    assert.equal(state.api.filter((request) => request.method === 'DELETE').length, 0);
    await firstEntry.getByRole('button', { name: labels.remove, exact: true }).click();
    await confirmation.getByRole('button', { name: labels.remove, exact: true }).click();
    await confirmation.waitFor({ state: 'detached' });
    assert.equal(state.api.filter((request) => request.method === 'DELETE').length, 1);
    assert.deepEqual(errors, []);
    assert.equal(state.google + state.embeds, 0);
    results.push({ scenario: 'admin-fr', passed: true, bulkReview: true, partialFailurePreserved: true, urlCorrectionPreserved: true,
      editAndPublication: true, explicitDelete: true, realApplicationWrites: 0 });
  } finally { await context.close(); }
}

(async () => {
  fs.mkdirSync(output, { recursive: true });
  const browser = await chromium.launch({ headless: true, args: ['--disable-dev-shm-usage', '--disable-gpu', '--renderer-process-limit=2'] });
  try {
    await publicDesktop(browser);
    await publicViewport(browser, 'fr', 390, 844);
    await publicViewport(browser, 'ar', 320, 780);
    await publicViewport(browser, 'en', 1280, 1000, 'dark');
    await adminReview(browser);
    const visualReviewFixture = visualCatalogue ? {
      source: visualCatalogueFile, videoIds: visualCatalogue.map((entry) => entry.youtube_id),
      realChannelTitlesAndThumbnails: true, classification: 'Explicit manual review-only fixture; not production records',
      databaseWrites: 0, functionalChecks: 'Separate synthetic fixtures',
    } : { source: 'Synthetic offline catalogue; existing project logo fallback if JPEG unavailable', databaseWrites: 0 };
    const fonts = { existingProjectFontRequestsOnly: true, cached: fontCache.size, failedLoads: [...fontFailures],
      fallback: fontFailures.size > 0, styleOverrides: false };
    fs.writeFileSync(path.join(output, 'checks.json'), JSON.stringify({ offlineFixtures: true, fonts, visualReviewFixture, results }, null, 2));
    console.log(JSON.stringify({ passed: true, screenshots: output, fonts, visualReviewFixture, results }, null, 2));
  } finally { await browser.close(); }
})().catch((error) => { console.error(error); process.exitCode = 1; });
