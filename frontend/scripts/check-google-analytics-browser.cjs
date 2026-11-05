// Offline acceptance check: built SSR + real Chromium, all API/Google traffic mocked.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const http = require('node:http');
const https = require('node:https');
const net = require('node:net');
const { EventEmitter } = require('node:events');
const { pathToFileURL } = require('node:url');
const { chromium } = require('../../video-generator/node_modules/playwright');
const root = path.resolve(__dirname, '../dist/frontend/browser');
const consentKey = 'maroquiz.google-consent.v1';
const measurementId = 'G-KWRJXMVGW4';
const config = fs.readFileSync(path.resolve(__dirname, '../../infrastructure/docker/nginx/default.prod.conf'), 'utf8');
const csp = config.match(/add_header Content-Security-Policy "([^"]+)" always;/)[1];
const mime = { '.js': 'text/javascript', '.css': 'text/css', '.json': 'application/json', '.html': 'text/html', '.svg': 'image/svg+xml', '.webp': 'image/webp' };

async function checkSsr() {
  const original = { http: http.request, https: https.request, fetch: globalThis.fetch };
  const requests = [];
  const payload = () => JSON.stringify({ success: true, data: [] });
  const mockRequest = options => {
    requests.push(String(options.hostname ?? options.host ?? options));
    const req = new EventEmitter();
    req.write = () => true;
    req.abort = req.destroy = () => {};
    req.setTimeout = () => req;
    req.end = () => {
      setImmediate(() => {
        const res = new EventEmitter();
        res.statusCode = 200;
        res.headers = { 'content-type': 'application/json' };
        res.rawHeaders = ['Content-Type', 'application/json'];
        res.resume = res.destroy = () => {};
        req.emit('response', res);
        res.emit('data', Buffer.from(payload()));
        res.emit('end');
      });
      return req;
    };
    return req;
  };
  http.request = https.request = mockRequest;
  globalThis.fetch = async input => {
    requests.push(String(input.url ?? input));
    return new Response(payload(), { headers: { 'Content-Type': 'application/json' } });
  };
  try {
    const { reqHandler } = await import(pathToFileURL(path.resolve(__dirname, '../dist/frontend/server/server.mjs')).href);
    const html = await new Promise((resolve, reject) => {
      const timeout = setTimeout(() => reject(Error('SSR timed out')), 20000);
      const socket = new net.Socket();
      socket.encrypted = true;
      const req = new http.IncomingMessage(socket);
      req.method = 'GET'; req.url = '/about'; req.headers = { host: 'maroquiz.com' }; req.push(null);
      const res = new http.ServerResponse(req);
      const chunks = [];
      res.write = chunk => { chunks.push(Buffer.from(chunk)); return true; };
      res.end = chunk => {
        clearTimeout(timeout);
        if (chunk) chunks.push(Buffer.from(chunk));
        assert.equal(res.statusCode, 200);
        resolve(Buffer.concat(chunks).toString());
        return res;
      };
      reqHandler(req, res, reject);
    });
    assert.match(html, /<app-about[ >]/);
    assert.ok(!/<script[^>]+src="https:\/\/(www\.googletagmanager\.com|pagead2\.googlesyndication\.com)/.test(html));
    assert.ok(!html.includes('id="cookie-heading"'));
    assert.ok(!requests.some(url => /google/.test(url)));
    assert.equal(globalThis.gtag, undefined);
    console.log(JSON.stringify({ ssr: 'passed', browserAnalyticsExecuted: false, googleRequests: 0 }));
  } finally {
    http.request = original.http;
    https.request = original.https;
    globalThis.fetch = original.fetch;
  }
}

async function fixtureContext(browser, language, width = 390) {
  const context = await browser.newContext({ viewport: { width, height: 900 }, isMobile: width <= 540, hasTouch: width <= 540 });
  await context.addInitScript(language => localStorage.setItem('quizatlas.language', language), language);
  const counts = { ga: 0, ads: 0, collection: 0 };
  await context.route('**/*', async route => {
    const url = new URL(route.request().url());
    if (url.hostname === 'www.googletagmanager.com' && url.pathname === '/gtag/js') {
      counts.ga++;
      assert.equal(url.searchParams.get('id'), measurementId);
      assert.equal(route.request().headers()['referer'], undefined);
      return route.fulfill({ contentType: 'application/javascript', body: 'window.__mockGoogleTagLoaded = true;' });
    }
    if (url.hostname === 'pagead2.googlesyndication.com') {
      counts.ads++;
      assert.equal(url.searchParams.get('client'), 'ca-pub-7773857592636107');
      return route.fulfill({ contentType: 'application/javascript', headers: { 'Access-Control-Allow-Origin': '*' }, body: '/* mocked AdSense */' });
    }
    if (url.hostname.endsWith('google-analytics.com')) {
      counts.collection++;
      return route.fulfill({ status: 204, headers: { 'Access-Control-Allow-Origin': '*' }, body: '' });
    }
    if (url.pathname.startsWith('/api/v1/')) return route.fulfill({ json: { success: true, data: [] } });
    if (url.hostname !== 'maroquiz.com') return route.abort();
    let file = path.join(root, decodeURIComponent(url.pathname));
    if (!file.startsWith(root + path.sep)) return route.abort();
    if (!fs.existsSync(file) || fs.statSync(file).isDirectory()) file = path.join(root, 'index.csr.html');
    // External icon fonts are blocked in this offline fixture. Reserve the
    // normal one-glyph width so fallback ligature text cannot widen the page.
    // The consent UI uses inline SVG and is unaffected by this font stand-in.
    const body = path.extname(file) === '.css'
      ? Buffer.concat([fs.readFileSync(file), Buffer.from('\n.material-symbols-rounded { inline-size: 1em; overflow: hidden; }')])
      : fs.readFileSync(file);
    return route.fulfill({ body, contentType: mime[path.extname(file)] ?? 'application/octet-stream',
      headers: { 'Content-Security-Policy': csp } });
  });
  const page = await context.newPage();
  const errors = [];
  page.on('pageerror', error => errors.push(error.message));
  return { context, page, counts, errors };
}

const views = page => page.evaluate(() => (window.dataLayer ?? []).map(args => Array.from(args))
  .filter(args => args[0] === 'event' && args[1] === 'page_view'));
const waitForViews = (page, count) => page.waitForFunction(count => (window.dataLayer ?? []).filter(args => args[0] === 'event' && args[1] === 'page_view').length === count, count);

async function checkLayout(page, selector, width) {
  const panel = page.locator(selector);
  const box = await panel.boundingBox();
  assert.ok(box.x >= 0 && box.x + box.width <= width + 1, `${selector} extends outside the viewport`);
  assert.ok(await panel.evaluate(el => el.scrollWidth <= el.clientWidth + 1), `${selector} scrolls horizontally`);
  assert.ok(await page.evaluate(() => document.documentElement.scrollWidth <= innerWidth), 'Page overflows horizontally');
  for (const button of await panel.locator('button').all()) {
    const rect = await button.boundingBox();
    assert.ok(rect.height >= 44, 'Touch target shorter than 44px');
    assert.ok(rect.x >= box.x && rect.x + rect.width <= box.x + box.width + 1, 'Button overflows panel');
  }
  const appearance = await panel.locator('.cookie-reject, .cookie-accept').evaluateAll(buttons => buttons.map(el => ({
    background: getComputedStyle(el).backgroundColor, font: getComputedStyle(el).fontSize,
  })));
  assert.deepEqual(appearance[0], appearance[1], 'Accept and reject must have comparable emphasis');
}

async function checkChoiceAlignment(page, language) {
  const rows = await page.locator('.cookie-choice').evaluateAll(labels => labels.map(label => {
    const input = label.querySelector('input').getBoundingClientRect();
    const text = label.querySelector('strong').getBoundingClientRect();
    return { width: input.width, height: input.height, deltaY: Math.abs(input.top - text.top),
      gap: getComputedStyle(label).direction === 'rtl' ? input.left - text.right : text.left - input.right,
      labelled: label.htmlFor === label.querySelector('input').id };
  }));
  for (const row of rows) {
    assert.equal(row.width, 20);
    assert.equal(row.height, 20);
    assert.ok(row.deltaY <= 4, `Misaligned ${language} checkbox`);
    assert.ok(row.gap >= 8 && row.gap <= 14, `Detached ${language} label`);
    assert.equal(row.labelled, true);
  }
}

async function screenshot(page, language, width, state) {
  if (!process.env.CONSENT_SCREENSHOT_DIR || !((language === 'fr' && width === 1280) || (language === 'ar' && width === 320))) return;
  fs.mkdirSync(process.env.CONSENT_SCREENSHOT_DIR, { recursive: true });
  await page.screenshot({ path: path.join(process.env.CONSENT_SCREENSHOT_DIR, `${language}-${width}-${state}.png`) });
}

(async () => {
  await checkSsr();
  const browser = await chromium.launch({ headless: true });
  try {
    const { context, page, counts, errors } = await fixtureContext(browser, 'en', 1280);
    await page.goto('https://maroquiz.com/about?email=private@example.test&token=private#secret', { waitUntil: 'networkidle' });
    await page.locator('#cookie-heading').waitFor();
    assert.equal(counts.ga + counts.ads, 0);
    assert.equal((await views(page)).length, 0);
    await page.locator('.cookie-reject').click();
    await page.reload({ waitUntil: 'networkidle' });
    await page.locator('.cookie-settings').waitFor();
    assert.equal(counts.ga + counts.ads, 0);
    // The persistent settings control remains readable over the dark site theme.
    await page.evaluate(() => { document.documentElement.dataset.theme = 'dark'; });
    assert.equal(await page.locator('.cookie-settings').evaluate(el => getComputedStyle(el).backgroundColor), 'rgb(247, 245, 241)');
    await page.locator('.cookie-settings').click();
    await page.locator('.cookie-preferences input').first().check();
    await page.locator('.cookie-save').click();
    await waitForViews(page, 1);
    await page.waitForFunction(() => window.__mockGoogleTagLoaded === true);
    assert.deepEqual((await views(page))[0][2], { page_location: 'https://maroquiz.com/about', page_title: 'About — MaroQuiz', page_referrer: '', send_to: measurementId });
    await page.locator('a[href="/privacy"]').first().click();
    await waitForViews(page, 2);
    await page.goBack();
    await waitForViews(page, 3);
    assert.equal(counts.ga, 1);
    assert.equal(counts.ads, 0);
    assert.ok(!JSON.stringify(await views(page)).includes('private'));
    // Check the actual CSP collection allowlist without sending a real hit.
    await page.evaluate(() => fetch('https://region1.google-analytics.com/g/collect?local_csp_test=1'));
    assert.equal(counts.collection, 1);
    await page.reload({ waitUntil: 'networkidle' });
    await waitForViews(page, 1);
    assert.equal(await page.locator('script[src*="googletagmanager.com/gtag/js"]').count(), 1);
    await context.addCookies([{ name: '_ga', value: 'fixture', domain: '.maroquiz.com', path: '/' }]);
    await page.locator('.cookie-settings').click();
    await page.locator('.cookie-reject').click();
    assert.equal(await page.evaluate(id => window[`ga-disable-${id}`], measurementId), true);
    assert.ok(!(await context.cookies()).some(cookie => cookie.name === '_ga'));
    await page.locator('a[href="/privacy"]').first().click();
    await page.waitForURL('**/privacy');
    assert.equal((await views(page)).length, 1);
    assert.equal(counts.collection, 1);
    assert.deepEqual(errors, []);
    console.log(JSON.stringify({ language: 'en', consent: 'passed', initialAndRouterViews: 'passed', duplicates: 0, piiInPayloads: false, withdrawal: 'passed', csp: 'passed' }));
    await context.close();

    for (const [language, width, height] of [['fr', 1280, 900], ['fr', 320, 640], ['fr', 390, 844], ['ar', 320, 640], ['ar', 390, 844]]) {
      const { context, page, counts, errors } = await fixtureContext(browser, language, width);
      await page.setViewportSize({ width, height });
      const dictionary = JSON.parse(fs.readFileSync(path.resolve(__dirname, `../src/assets/i18n/${language}.json`)));
      await page.goto('https://maroquiz.com/', { waitUntil: 'networkidle' });
      await page.locator('#cookie-heading').waitFor();
      assert.equal(await page.locator('#cookie-heading').textContent(), dictionary.cookieConsent.title);
      assert.equal(await page.locator('.cookie-banner').getAttribute('dir'), language === 'ar' ? 'rtl' : 'ltr');
      assert.equal(await page.locator('app-cookie-consent input').count(), 0);
      await checkLayout(page, '.cookie-banner', width);
      const bannerBox = await page.locator('.cookie-banner').boundingBox();
      assert.ok(bannerBox.height < (width > 850 ? 180 : height / 2), `Banner too tall: ${bannerBox.height}`);
      await screenshot(page, language, width, 'banner');
      assert.equal(counts.ga + counts.ads, 0);

      // Customize alone must never grant consent. Native modal focus stays inside it.
      await page.locator('.cookie-customize').focus();
      await page.keyboard.press('Enter');
      await page.locator('.cookie-preferences[open]').waitFor({ timeout: 10000 }).catch(async error => {
        console.error(JSON.stringify({ errors, banners: await page.locator('.cookie-banner').count(),
          dialogs: await page.locator('.cookie-preferences').count(),
          focusedElement: await page.evaluate(() => document.activeElement.className) }));
        throw error;
      });
      assert.equal(await page.locator('.cookie-preferences').getAttribute('dir'), language === 'ar' ? 'rtl' : 'ltr');
      assert.equal(await page.locator('.cookie-preferences input:checked').count(), 0);
      assert.equal(await page.locator('#cookie-preferences-heading').evaluate(el => document.activeElement === el), true);
      await checkLayout(page, '.cookie-preferences', width);
      await checkChoiceAlignment(page, language);
      await screenshot(page, language, width, 'preferences');
      await page.keyboard.press('Tab');
      assert.equal(await page.locator('.cookie-close').evaluate(el => document.activeElement === el), true);
      await page.locator('.cookie-preferences .cookie-accept').focus();
      await page.keyboard.press('Tab');
      // Chromium may focus the browser chrome between wrap-around tab stops.
      await page.keyboard.press('Tab');
      assert.equal(await page.evaluate(() => !!document.activeElement.closest('dialog')), true);
      await page.locator('#cookie-analytics').focus();
      await page.keyboard.press('Space');
      assert.equal(await page.locator('#cookie-analytics').isChecked(), true);
      assert.equal(await page.locator('#cookie-advertising').isChecked(), false);
      const outline = await page.locator('#cookie-analytics').evaluate(el => getComputedStyle(el).outlineStyle);
      assert.notEqual(outline, 'none');
      await page.keyboard.press('Escape');
      await page.locator('.cookie-banner').waitFor();
      assert.equal(await page.locator('.cookie-customize').evaluate(el => document.activeElement === el), true);
      assert.equal(await page.evaluate(key => localStorage.getItem(key), consentKey), null);
      assert.equal(counts.ga + counts.ads, 0);
      await page.locator('.cookie-customize').click();
      await page.locator('.cookie-preferences[open]').waitFor();
      assert.equal(await page.locator('#cookie-analytics').isChecked(), false);
      await page.locator('.cookie-close').click();
      await page.locator('.cookie-banner .cookie-accept').click();
      await waitForViews(page, 1);
      await page.waitForFunction(() => window.__mockGoogleTagLoaded === true);
      assert.equal(counts.ga, 1);
      assert.equal(counts.ads, 1);
      assert.deepEqual(await page.evaluate(key => {
        const { analytics, advertising } = JSON.parse(localStorage.getItem(key));
        return { analytics, advertising };
      }, consentKey), { analytics: true, advertising: true });
      await page.locator('.cookie-settings').click();
      assert.equal(await page.locator('#cookie-analytics').isChecked(), true);
      assert.equal(await page.locator('#cookie-advertising').isChecked(), true);
      await Promise.all([page.waitForEvent('load'), page.locator('.cookie-reject').click()]);
      await page.locator('.cookie-settings').waitFor();
      assert.equal((await views(page)).length, 0);
      assert.equal(counts.ga, 1);
      assert.equal(counts.ads, 1);
      assert.equal(counts.collection, 0);
      assert.deepEqual(errors, []);
      console.log(JSON.stringify({ language, width, layout: 'passed', labelAlignment: 'passed', keyboardAndFocus: 'passed', consentAndWithdrawal: 'passed', googleRequestsBeforeConsent: 0 }));
      await context.close();
    }

    // Advertising-only selection remains independent through the real UI and a reload.
    const adsOnly = await fixtureContext(browser, 'en');
    await adsOnly.page.goto('https://maroquiz.com/about', { waitUntil: 'networkidle' });
    await adsOnly.page.locator('.cookie-customize').click();
    await adsOnly.page.locator('label[for="cookie-advertising"]').click();
    assert.equal(await adsOnly.page.locator('#cookie-advertising').isChecked(), true);
    assert.equal(await adsOnly.page.locator('#cookie-analytics').isChecked(), false);
    await adsOnly.page.locator('.cookie-save').click();
    await adsOnly.page.waitForFunction(() => !!document.querySelector('#maroquiz-adsense'));
    assert.equal(adsOnly.counts.ga, 0);
    assert.equal(adsOnly.counts.ads, 1);
    assert.equal((await views(adsOnly.page)).length, 0);
    await adsOnly.page.reload({ waitUntil: 'networkidle' });
    await adsOnly.page.locator('.cookie-settings').click();
    assert.equal(await adsOnly.page.locator('#cookie-advertising').isChecked(), true);
    assert.equal(await adsOnly.page.locator('#cookie-analytics').isChecked(), false);
    assert.equal(adsOnly.counts.ga, 0);
    assert.deepEqual(adsOnly.errors, []);
    console.log(JSON.stringify({ independentAdvertisingOnlyConsent: 'passed', persistedPreferences: 'passed' }));
    await adsOnly.context.close();
  } finally { await browser.close(); }
})().catch(error => { console.error(error); process.exitCode = 1; });
