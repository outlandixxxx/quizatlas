// Optional ONE bounded real-player acceptance attempt. No real MaroQuiz API calls or writes.
// All application responses are fixtures. Only the consented YouTube iframe and existing fonts can use the network.
// VIDEO_LIBRARY_LIVE_PLAYER=1 node --max-old-space-size=192 scripts/check-video-library-live-player.cjs
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const repo = path.resolve(__dirname, '../..');
const { chromium } = require(require.resolve('playwright', { paths: [path.join(repo, 'video-generator'), path.join(repo, 'frontend')] }));
const bundle = path.join(repo, 'frontend/dist/frontend/browser');
const output = path.join(repo, 'frontend/output/video-library-review');
const origin = 'https://maroquiz.com';
const consentKey = 'maroquiz.google-consent.v1';
const nginx = fs.readFileSync(path.join(repo, 'infrastructure/docker/nginx/default.prod.conf'), 'utf8');
const csp = nginx.match(/add_header Content-Security-Policy "([^"]+)" always;/)?.[1];
const thumbnailDirectory = '/tmp/maroquiz-video-library-assets';
const cataloguePath = path.join(thumbnailDirectory, 'review-catalogue.json');
const catalogue = fs.existsSync(cataloguePath) ? JSON.parse(fs.readFileSync(cataloguePath, 'utf8')) : [];
const storedVideo = catalogue.find((entry) => entry.youtube_id === 'jnWQfV5RN6Y');
const sample = { id: 91001, youtube_id: 'jnWQfV5RN6Y', url: 'https://www.youtube.com/watch?v=jnWQfV5RN6Y',
  title: 'MaroQuiz — exemple réel de la chaîne', format: 'short', category: 'quiz', template: 'general',
  language: 'fr', status: 'published', duration_seconds: null, embeddable: null, ...storedVideo };
sample.thumbnail_url = `/api/v1/public/videos/${sample.id}/thumbnail`;
const allowedPlayerHosts = ['youtube.com', 'youtube-nocookie.com', 'googlevideo.com', 'ytimg.com', 'gstatic.com', 'googleapis.com', 'google.com', 'ggpht.com'];
const allowedHost = (host) => allowedPlayerHosts.some((base) => host === base || host.endsWith(`.${base}`));
const mime = { '.js': 'text/javascript', '.css': 'text/css', '.json': 'application/json', '.html': 'text/html',
  '.svg': 'image/svg+xml', '.webp': 'image/webp', '.png': 'image/png', '.jpg': 'image/jpeg', '.woff2': 'font/woff2', '.ttf': 'font/ttf' };

(async () => {
  if (process.env.VIDEO_LIBRARY_LIVE_PLAYER !== '1') {
    console.log('Skipped. Set VIDEO_LIBRARY_LIVE_PLAYER=1 for one bounded real YouTube player attempt.');
    return;
  }
  assert.ok(csp && fs.existsSync(path.join(bundle, 'index.csr.html')), 'Production build and CSP are required.');
  fs.mkdirSync(output, { recursive: true });
  const result = { videoId: sample.youtube_id, fixtureApplication: true, realApplicationRequests: 0,
    metadata: 'Actual supplied channel title; manual review-only classification',
    consent: null, ownGoogleTags: 0, embedNavigationAttempts: 0, trustedPlayerRequests: 0,
    blockedHosts: [], requestFailures: [], pageErrors: [], nativePlayClicked: false, actualPlayback: false,
    playbackSeconds: 0, maximumPlaybackSeconds: 5, outcome: 'limitation', reason: null };
  const fonts = new Map();
  let browser, context, page;
  try {
    browser = await chromium.launch({ headless: true, args: ['--disable-dev-shm-usage', '--disable-gpu', '--renderer-process-limit=2'] });
    context = await browser.newContext({ viewport: { width: 1000, height: 900 }, reducedMotion: 'reduce' });
    await context.addInitScript((key) => {
      if (window !== window.top) return;
      localStorage.setItem('quizatlas.language', 'fr'); localStorage.setItem('quizatlas.theme', 'light');
      localStorage.setItem(key, JSON.stringify({ version: 1, analytics: false, advertising: false, externalVideo: false, expiresAt: Date.now() + 86400000 }));
    }, consentKey);
    await context.route('**/*', async (route) => {
      const request = route.request(), url = new URL(request.url());
      let descendant = false;
      try { descendant = !!request.frame().parentFrame(); } catch { /* Service-worker requests have no frame. */ }
      if (!descendant && /googletagmanager|googlesyndication|google-analytics|doubleclick/.test(url.hostname)) {
        result.ownGoogleTags++; return route.abort();
      }
      if (descendant && url.protocol === 'https:' && allowedHost(url.hostname)) {
        if (request.isNavigationRequest() && url.hostname === 'www.youtube-nocookie.com' && url.pathname.startsWith('/embed/')) {
          result.embedNavigationAttempts++;
          // One source iframe navigation; retries and alternative videos are outside this attempt.
          if (result.embedNavigationAttempts > 1) return route.abort();
        }
        result.trustedPlayerRequests++;
        return route.continue();
      }
      if (!descendant && url.protocol === 'https:' && url.hostname === 'fonts.gstatic.com') {
        if (fonts.has(url.href)) return route.fulfill(fonts.get(url.href));
        if (fonts.size >= 24) return route.abort();
        try {
          const response = await route.fetch({ timeout: 10000, maxRedirects: 0 });
          if (!response.ok() || Number(response.headers()['content-length'] || 0) > 8 * 1024 * 1024) return route.abort();
          const body = await response.body();
          if (body.length > 8 * 1024 * 1024) return route.abort();
          const cached = { body, contentType: response.headers()['content-type'] || 'font/woff2', headers: { 'Access-Control-Allow-Origin': '*' } };
          fonts.set(url.href, cached); return route.fulfill(cached);
        } catch { return route.abort(); }
      }
      if (url.pathname.startsWith('/api/v1/')) {
        assert.equal(request.method(), 'GET', 'The real-player review makes no application writes.');
        if (/\/public\/videos\/[0-9]+\/thumbnail$/.test(url.pathname)) {
          const file = path.join(thumbnailDirectory, `${sample.youtube_id}.jpg`);
          return fs.existsSync(file) ? route.fulfill({ body: fs.readFileSync(file), contentType: 'image/jpeg', headers: { 'Access-Control-Allow-Origin': origin } }) : route.fulfill({ status: 404, body: '', headers: { 'Access-Control-Allow-Origin': origin } });
        }
        const data = url.pathname.endsWith('/public/videos') ? {
          items: url.searchParams.get('format') === 'long' ? [] : [sample],
          meta: { current_page: 1, last_page: 1, per_page: 12, total: url.searchParams.get('format') === 'long' ? 0 : 1 },
        } : [];
        return route.fulfill({ json: { success: true, data }, headers: { 'Access-Control-Allow-Origin': origin } });
      }
      if (url.hostname === 'maroquiz.com') {
        let file = path.join(bundle, decodeURIComponent(url.pathname));
        if (!file.startsWith(bundle + path.sep)) return route.abort();
        if (!fs.existsSync(file) || fs.statSync(file).isDirectory()) file = path.join(bundle, 'index.csr.html');
        return route.fulfill({ body: fs.readFileSync(file), contentType: mime[path.extname(file)] || 'application/octet-stream', headers: { 'Content-Security-Policy': csp } });
      }
      result.blockedHosts.push(url.hostname);
      return route.abort();
    });
    page = await context.newPage();
    page.setDefaultTimeout(12000);
    page.on('requestfailed', (request) => result.requestFailures.push({ host: new URL(request.url()).hostname, reason: request.failure()?.errorText || 'unknown' }));
    page.on('pageerror', (error) => result.pageErrors.push(error.message));
    await page.goto(`${origin}/videos`, { waitUntil: 'networkidle', timeout: 20000 });
    await page.locator('.short-card .video-card-play').first().click();
    const dialog = page.locator('.video-dialog[open]');
    assert.equal(await dialog.locator('iframe').count(), 0);
    assert.equal(result.embedNavigationAttempts, 0);
    // Explicit user-level consent action; analytics and advertising remain denied.
    await dialog.locator('.player-consent button').click();
    result.consent = await page.evaluate((key) => {
      const value = JSON.parse(localStorage.getItem(key));
      return { analytics: value.analytics, advertising: value.advertising, externalVideo: value.externalVideo };
    }, consentKey);
    assert.deepEqual(result.consent, { analytics: false, advertising: false, externalVideo: true });
    const iframe = await dialog.locator('iframe').elementHandle();
    const frame = await iframe.contentFrame();
    assert.ok(frame, 'The official iframe must have a browsing context.');
    // The current Shorts embed uses a central Shorts preview instead of the
    // older ytp-large-play-button. Both actions are real pointer clicks on YouTube UI.
    await frame.waitForLoadState('domcontentloaded', { timeout: 15000 });
    await frame.evaluate(() => {
      document.addEventListener('playing', event => {
        if (event.target instanceof HTMLMediaElement) setTimeout(() => event.target.pause(), 4500);
      }, true);
    });
    const play = frame.locator('button.ytp-large-play-button');
    const accessiblePlay = frame.getByRole('button', { name: /^(play|play video|lire|lecture|تشغيل)/i }).first();
    if (await play.isVisible()) { await play.click({ timeout: 5000 }); result.nativePlayAction = 'YouTube large Play button'; }
    else if (await accessiblePlay.isVisible()) { await accessiblePlay.click({ timeout: 5000 }); result.nativePlayAction = 'YouTube accessible Play button'; }
    else {
      const bounds = await iframe.boundingBox();
      assert.ok(bounds, 'The visible native Shorts preview has bounds.');
      await iframe.click({ position: { x: bounds.width / 2, y: bounds.height / 2 }, timeout: 5000 });
      result.nativePlayAction = 'Pointer click on visible central YouTube Shorts preview';
    }
    result.nativePlayClicked = true;
    const deadline = Date.now() + 20000;
    let latest = null;
    while (Date.now() < deadline) {
      latest = null;
      for (const playbackFrame of page.frames().filter(entry => /youtube(?:-nocookie)?\.com/.test(entry.url()))) {
        const state = await playbackFrame.evaluate(() => {
        const video = document.querySelector('video'), player = document.querySelector('.html5-video-player');
        return video ? { time: video.currentTime, paused: video.paused, readyState: video.readyState,
          advertisement: player?.classList.contains('ad-showing') === true,
          error: document.querySelector('.ytp-error-content-wrap')?.textContent?.trim().slice(0, 250) || null } : null;
        }).catch(() => null);
        if (state && (!latest || state.time > latest.time)) latest = state;
      }
      if (latest?.time > 0 && latest.readyState >= 2 && !latest.advertisement) {
        result.actualPlayback = true; result.playbackSeconds = latest.time; result.outcome = 'passed'; break;
      }
      if (latest?.error) { result.reason = latest.error; break; }
      await new Promise((resolve) => setTimeout(resolve, 250));
    }
    if (!result.actualPlayback && !result.reason) result.reason = latest?.advertisement
      ? 'Advertisement appeared; actual content playback was not verified within the bounded attempt.'
      : 'Native Play was clicked, but content video.currentTime did not advance within 20 seconds.';
    await page.screenshot({ path: path.join(output, 'live-youtube-player.png') });
    await dialog.locator('.close-player').click();
    assert.equal(await page.locator('.video-dialog iframe').count(), 0);
    result.iframeReleased = true;
    assert.equal(result.ownGoogleTags, 0);
  } catch (error) {
    result.reason = error.message;
    if (page) {
      const frame = page.frames().find((entry) => /youtube-nocookie\.com/.test(entry.url()));
      if (frame) result.playerText = await frame.locator('body').innerText({ timeout: 2000 }).then((text) => text.slice(0, 500)).catch(() => null);
      await page.screenshot({ path: path.join(output, 'live-youtube-player-limitation.png') }).catch(() => {});
    }
  } finally {
    if (page) await page.locator('.video-dialog .close-player').click({ timeout: 1000 }).catch(() => {});
    if (context) await context.close();
    if (browser) await browser.close();
    result.blockedHosts = [...new Set(result.blockedHosts)];
    result.note = 'One consented official iframe attempt. No inference about official YouTube view counts. Network/unavailable-player limitations are reported explicitly.';
    fs.writeFileSync(path.join(output, 'live-youtube-check.json'), JSON.stringify(result, null, 2));
    console.log(JSON.stringify(result, null, 2));
  }
})().catch((error) => { console.error(error); process.exitCode = 1; });
