// Additional actual-API acceptance: delivered fixture alerts, responsive private UI.
const assert = require('node:assert/strict');
const fs = require('node:fs'),
  path = require('node:path');
const { chromium } = require(
  require.resolve('playwright', { paths: [path.resolve(__dirname, '../../fact-generator')] }),
);
const origin = 'http://localhost:4302',
  api = 'http://localhost:8077/api/v1';
const out = path.resolve(__dirname, '../artifacts/concours-phase7b/private-responsive');
fs.mkdirSync(out, { recursive: true });
const retained = process.argv.includes('--resume')
  ? JSON.parse(fs.readFileSync(path.join(out, 'verification.json'))).filter(
      (x) => x.status === 'PASS' &&
        (process.argv.includes('--verify-pdf-modal') || !x.id.startsWith('bell-')) &&
        !(process.argv.includes('--verify-pdf-modal') && x.id.startsWith('admin-exam-pdfs-')),
    )
  : [];
const results = [...retained];
async function call(route, token, method = 'GET', body) {
  const r = await fetch(api + route, {
    method,
    headers: {
      accept: 'application/json',
      'content-type': 'application/json',
      ...(token ? { authorization: 'Bearer ' + token } : {}),
    },
    body: body ? JSON.stringify(body) : undefined,
  });
  return { status: r.status, ...(await r.json()) };
}
async function login(role) {
  const r = await call('/auth/login', null, 'POST', {
    email: `phase7b-${role}@example.test`,
    password: role === 'user' ? 'AcceptanceFixture43!Only' : 'AcceptanceFixture42!Only',
    recaptcha_token: 'ISOLATED_FIXTURE',
  });
  assert.equal(r.status, 200);
  return r.data.access_token;
}
async function check(id, fn, page) {
  if (results.some((x) => x.id === id && x.status === 'PASS')) {
    console.log('RETAINED', id);
    return;
  }
  try {
    results.push({ id, status: 'PASS', actual: await fn() });
    console.log('PASS', id);
  } catch (error) {
    if (page)
      await page
        .screenshot({ path: path.join(out, 'failure-' + id + '.png'), fullPage: true })
        .catch(() => {});
    results.push({ id, status: 'FAIL', actual: error.message });
    console.log('FAIL', id, error.message.slice(0, 500));
  }
  fs.writeFileSync(path.join(out, 'verification.json'), JSON.stringify(results, null, 2));
}
async function fits(page) {
  await page.evaluate(() => document.fonts.ready);
  const dimensions = await page.evaluate(() => ({
    width: innerWidth,
    scroll: document.documentElement.scrollWidth,
  }));
  assert.ok(dimensions.scroll <= dimensions.width + 1, JSON.stringify(dimensions));
  return dimensions;
}
(async () => {
  const userToken = await login('user'),
    adminToken = await login('admin'),
    otherToken = await login('other');
  const browser = await chromium.launch({
    headless: true,
    args: ['--no-sandbox', '--disable-dev-shm-usage'],
  });
  async function context(token, lang, width) {
    const ctx = await browser.newContext({ viewport: { width, height: 1000 } });
    ctx.setDefaultTimeout(20000);
    await ctx.route('https://api.maroquiz.com/api/v1/**', async (route) => {
      try {
        const response = await route.fetch({
          url: api + route.request().url().split('/api/v1')[1],
        });
        await route.fulfill({
          response,
          headers: { ...response.headers(), 'access-control-allow-origin': origin },
        });
      } catch (error) {
        if (!/disposed|closed|cancelled/.test(error.message)) throw error;
      }
    });
    await ctx.addInitScript(
      ({ token, lang }) => {
        localStorage.setItem('quizatlas_access_token', token);
        localStorage.setItem('quizatlas.language', lang);
        localStorage.setItem('quizatlas.theme', 'light');
        window.__prompts = 0;
        if (window.Notification)
          Notification.requestPermission = () => {
            window.__prompts++;
            return Promise.resolve('denied');
          };
      },
      { token, lang },
    );
    return ctx;
  }
  try {
    await check('notification-api-ownership', async () => {
      const rows = (await call('/notifications', userToken)).data;
      assert.ok(rows.some((n) => n.type === 'concours_published'));
      assert.ok(rows.some((n) => n.type === 'concours_updated'));
      assert.equal(rows.filter((n) => n.type === 'concours_deadline').length, 2);
      for (const type of ['friend_request', 'new_message', 'blog_response'])
        assert.ok(rows.some((n) => n.type === type));
      const denied = await call(`/notifications/${rows[0].id}/read`, otherToken, 'POST', {});
      assert.equal(denied.status, 403);
      return { types: rows.map((n) => n.type), crossOwnerStatus: denied.status };
    });
    await check('source-editor-stale-version', async () => {
      const sources = (await call('/admin/concours-discovery/sources', adminToken)).data;
      const source = sources.find((s) => s.name === 'DGSN');
      assert.equal(source.enabled, false);
      const payload = { ...source, check_interval_minutes: 780 };
      const saved = await call(
        '/admin/concours-discovery/sources/' + source.id,
        adminToken,
        'PUT',
        payload,
      );
      assert.equal(saved.status, 200);
      assert.equal(
        (await call('/admin/concours-discovery/sources/' + source.id, adminToken, 'PUT', payload))
          .status,
        409,
      );
      const restored = await call(
        '/admin/concours-discovery/sources/' + source.id,
        adminToken,
        'PUT',
        { ...saved.data, check_interval_minutes: source.check_interval_minutes },
      );
      assert.equal(restored.status, 200);
      assert.equal(restored.data.enabled, false);
      return 'Copied manual disabled registry entry saved; stale edit rejected 409; original interval restored in copy.';
    });
    await check('discovery-rejection-acknowledgement', async () => {
      const root = '/admin/concours-discovery/discoveries';
      const before = (await call('/admin/concours-announcements', adminToken)).data.meta.total;
      const approved = (await call(root + '?status=approved', adminToken)).data.items.find(
        (x) => x.announcement_id,
      );
      assert.ok(approved);
      const repeat = await call(root + '/' + approved.id + '/review', adminToken, 'POST', {
        action: 'approve',
        version: approved.version,
        source_checked: true,
        concours_id: 1,
        institution_id: 2,
        title_language: 'fr',
        session_year: 2027,
        preparation_option_ids: [],
      });
      assert.equal(repeat.status, 409);
      const changed = await call(root, adminToken, 'POST', {
        source_id: approved.source_id,
        official_url: approved.official_url,
        title: approved.title + ' — fixture amendment',
      });
      assert.equal(changed.status, 201);
      assert.equal(changed.data.status, 'pending');
      assert.equal(changed.data.announcement_id, approved.announcement_id);
      const acknowledged = await call(
        root + '/' + changed.data.id + '/review',
        adminToken,
        'POST',
        {
          action: 'acknowledge',
          version: changed.data.version,
          source_checked: true,
          review_note: 'Isolated fixture amendment reviewed; no actual source consulted.',
        },
      );
      assert.equal(acknowledged.status, 200);
      assert.equal(acknowledged.data.announcement_id, approved.announcement_id);
      const candidate = await call(root, adminToken, 'POST', {
        source_id: approved.source_id,
        official_url: 'https://www.emploi-public.ma/phase7b-rejection-fixture',
        title: 'PHASE 7B — rejection fixture',
      });
      assert.equal(candidate.status, 201);
      const review = {
        action: 'reject',
        version: candidate.data.version,
        source_checked: true,
        review_note: '',
      };
      assert.equal(
        (await call(root + '/' + candidate.data.id + '/review', adminToken, 'POST', review)).status,
        422,
      );
      const rejected = await call(root + '/' + candidate.data.id + '/review', adminToken, 'POST', {
        ...review,
        review_note: 'Controlled rejection fixture.',
      });
      assert.equal(rejected.status, 200);
      assert.equal(rejected.data.status, 'rejected');
      assert.equal(
        (await call('/admin/concours-announcements', adminToken)).data.meta.total,
        before,
      );
      return 'Repeated approval 409; amendment pending retains linked draft; acknowledgement creates no second announcement; rejection requires a note.';
    });
    for (const [lang, width] of [
      ['fr', 1440],
      ['en', 820],
      ['ar', 390],
    ]) {
      const ctx = await context(userToken, lang, width),
        page = await ctx.newPage();
      for (const route of ['/concours/education-preparation', '/app/dashboard'])
        await check(
          `bell-${route.includes('dashboard') ? 'dashboard' : 'public'}-${lang}-${width}`,
          async () => {
            await page.goto(origin + route, { waitUntil: 'domcontentloaded' });
            await page.locator('.notif-trigger').waitFor();
            await page.locator('.notif-trigger').click();
            await page.locator('app-concours-notification-text').first().waitFor();
            assert.equal(await page.locator('app-concours-notification-text').count(), 4);
            const bellText = await page.locator('.notif-dropdown').innerText();
            assert.ok(bellText.includes('Phase 7B fixture peer'));
            assert.ok(!bellText.includes('notifications.sentMessage'));
            assert.ok(
              bellText.includes(
                { fr: 'vous a envoyé un message', en: 'sent you a message', ar: 'أرسل لك رسالة' }[
                  lang
                ],
              ),
            );
            const dimensions = await fits(page);
            const screenshot = `bell-${route.includes('dashboard') ? 'dashboard' : 'public'}-${lang}-${width}.png`;
            await page.screenshot({ path: path.join(out, screenshot) });
            await page
              .locator('.notif-item')
              .filter({ has: page.locator('app-concours-notification-text') })
              .first()
              .click();
            await page.waitForURL('**/concours/education-preparation#official-announcement');
            assert.equal(await page.evaluate(() => window.__prompts), 0);
            return {
              dimensions,
              screenshot,
              link: '/concours/education-preparation#official-announcement',
              concoursAlerts: 4,
              legacy: true,
              prompts: 0,
            };
          },
          page,
        );
      await ctx.unrouteAll({ behavior: 'ignoreErrors' });
      await ctx.close();
    }
    for (const [lang, width] of [
      ['fr', 1440],
      ['en', 820],
      ['ar', 390],
    ]) {
      const ctx = await context(adminToken, lang, width),
        page = await ctx.newPage();
      for (const route of [
        '/admin/concours',
        '/admin/concours-announcements',
        '/admin/exam-pdfs',
        '/admin/concours-discoveries',
      ])
        await check(
          `admin-${route.split('/').at(-1)}-${lang}-${width}`,
          async () => {
            await page.goto(origin + route, { waitUntil: 'domcontentloaded' });
            await page.locator('.admin-page h2').waitFor();
            await page.waitForTimeout(800);
            const dimensions = await fits(page);
            const screenshot = `admin-${route.split('/').at(-1)}-${lang}-${width}.png`;
            await page.screenshot({ path: path.join(out, screenshot) });
            if (route === '/admin/concours') {
              await page
                .getByRole('button', { name: "Edit Concours de l'Enseignement", exact: true })
                .click();
              await page.locator('dialog[open]').waitFor();
              await fits(page);
              const box = await page.locator('dialog[open]').boundingBox();
              assert.ok(box.x >= -1 && box.x + box.width <= width + 1);
              await page.screenshot({ path: path.join(out, `admin-editor-${lang}-${width}.png`) });
            }
            if (route === '/admin/exam-pdfs') {
              await page.locator('.admin-page > .page-header > button').click();
              const overlay = page.locator('.modal-backdrop');
              await overlay.waitFor();
              assert.equal(await overlay.evaluate(el => getComputedStyle(el).position), 'fixed');
              const box = await page.getByRole('dialog').boundingBox();
              assert.ok(box.x >= 0 && box.x + box.width <= width + 1);
              assert.ok(box.y >= 0 && box.y + box.height <= 1001);
              await fits(page);
              await page.screenshot({path: path.join(out, `pdf-editor-${lang}-${width}.png`)});
              await page.locator('.modal-actions button[type="button"]').click();
            }
            return { dimensions, screenshot, rtl: await page.locator('html').getAttribute('dir') };
          },
          page,
        );
      await ctx.unrouteAll({ behavior: 'ignoreErrors' });
      await ctx.close();
    }
  } finally {
    await browser.close();
  }
  process.exitCode = results.some((r) => r.status === 'FAIL') ? 1 : 0;
})().catch((error) => {
  console.error(error.message);
  process.exitCode = 1;
});
