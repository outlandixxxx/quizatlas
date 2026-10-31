// Controlled browser API responses only: no real subscriptions or notifications.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const root = path.resolve(__dirname, '../..');
const { chromium } = require(
  require.resolve('playwright', {
    paths: [path.join(root, 'frontend'), path.join(root, 'fact-generator')],
  }),
);
const origin = 'http://localhost:4301';
const apiOrigin = 'http://localhost:8000/api/v1';
const empty = {
  data: { items: [], meta: { current_page: 1, last_page: 1, total: 0, per_page: 10 } },
};
const initialFollow = () => ({
  active: false,
  version: 0,
  preparation_option_ids: [],
  in_app: true,
  browser_push: false,
  announcements: true,
  updates: true,
  deadlines: true,
  reminder_days: [7, 1],
});
(async () => {
  const response = await fetch(apiOrigin + '/public/concours?per_page=100');
  assert.equal(response.status, 200);
  const directory = await response.json(),
    record = directory.data.items[0];
  assert.ok(record);
  const detailResponse = await fetch(
    apiOrigin + '/public/concours/' + encodeURIComponent(record.slug),
  );
  assert.equal(detailResponse.status, 200);
  const detail = await detailResponse.json();
  detail.data.preparation_options = [
    {
      id: 901,
      concours_id: record.id,
      parent_id: null,
      name_fr: 'TEST FIXTURE — Grade A',
      name_en: 'TEST FIXTURE — Grade A',
      name_ar: 'اختبار — الدرجة أ',
      is_active: true,
      display_order: 0,
    },
  ];
  detail.data.resources = [];
  detail.data.preparation_qcm = empty.data;
  const user = {
    id: 999001,
    username: 'fixture-only',
    name: 'TEST FIXTURE USER',
    email: 'fixture@example.test',
    role: 'user',
    preferences: {},
    current_streak: 0,
  };
  const browser = await chromium.launch({
    headless: true,
    args: ['--no-sandbox', '--disable-dev-shm-usage'],
  });
  const results = [];
  try {
    for (const [language, width] of [
      ['fr', 1440],
      ['en', 820],
      ['ar', 390],
    ]) {
      await new Promise((resolve) => setTimeout(resolve, 15000));
      let follow = initialFollow();
      const writes = [];
      const context = await browser.newContext({ viewport: { width, height: 1000 } });
      await context.addInitScript((lang) => {
        localStorage.setItem('quizatlas.language', lang);
        localStorage.setItem('quizatlas.theme', 'light');
        localStorage.setItem('quizatlas_access_token', 'CONTROLLED_BROWSER_FIXTURE_ONLY');
        window.__concoursPermissionCalls = 0;
        if ('Notification' in window)
          Notification.requestPermission = async () => {
            window.__concoursPermissionCalls++;
            return 'denied';
          };
      }, language);
      await context.route('https://api.maroquiz.com/api/v1/**', async (route) => {
        const request = route.request(),
          url = new URL(request.url()),
          name = url.pathname.replace('/api/v1', '');
        let body;
        if (name === '/auth/me') body = { data: user };
        else if (name === '/me/concours-follows/configuration')
          body = {
            data: {
              delivery_enabled: true,
              reminder_days: [7, 1],
              push_available: false,
              vapid_public_key: null,
            },
          };
        else if (name === '/me/concours-follows/' + record.id) {
          if (request.method() === 'PUT') {
            const data = request.postDataJSON();
            writes.push(data);
            follow = { ...data, id: 99001, concours_id: record.id, version: follow.version + 1 };
          }
          body = { data: follow };
        } else if (name === '/me/concours-follows')
          body = {
            data: {
              items: follow.active ? [{ ...follow, concours: detail.data, available: true }] : [],
              meta: { current_page: 1, last_page: 1, per_page: 10, total: follow.active ? 1 : 0 },
            },
          };
        else if (name === '/notifications/unread-count') body = { data: { count: 1 } };
        else if (name === '/notifications')
          body = {
            data: [
              {
                id: 99002,
                type: 'concours_published',
                read_at: null,
                created_at: new Date().toISOString(),
                data: {
                  concours_slug: record.slug,
                  title_fr: 'TEST FIXTURE — Official notice',
                  title_ar: 'اختبار — إعلان رسمي',
                },
              },
            ],
          };
        else if (/^\/notifications\/\d+\/read$/.test(name)) body = { data: { status: 'read' } };
        else if (name === '/chat/conversations/unread-count') body = { data: { count: 0 } };
        else if (name === '/user/dashboard')
          body = {
            data: {
              hero: { user_name: user.username, last_quiz: null, progress: 0 },
              stats: {},
              in_progress_quizzes: [],
              recommended_quizzes: [],
              recent_results: [],
              achievements: [],
              leaderboard: [],
              daily_goal: {},
            },
          };
        else if (name === '/public/concours') body = directory;
        else if (name === '/public/concours/' + record.slug) body = detail;
        else if (
          request.method() === 'GET' &&
          (/^\/public\//.test(name) || name.includes('exam-pdf'))
        )
          body = empty;
        else throw new Error('Unexpected fixture API request: ' + request.method() + ' ' + name);
        await route.fulfill({ status: 200, json: body });
      });
      const page = await context.newPage(),
        errors = [];
      page.on('pageerror', (e) => errors.push(e.message));
      await page.goto(origin + '/concours', { waitUntil: 'domcontentloaded' });
      await page.waitForFunction(
        () => !!document.querySelector('app-public-header .notif-trigger'),
      );
      await page.locator(`app-concours-card a[href="/concours/${record.slug}"]`).first().click();
      const control = page.locator('app-concours-follow');
      await control.locator('button.follow-action').first().waitFor();
      await page.waitForFunction(
        () => !document.querySelector('app-concours-follow button').disabled,
      );
      await control.locator('button.follow-action').first().click();
      await page.waitForFunction(
        () =>
          document.querySelector('app-concours-follow button').getAttribute('aria-pressed') ===
          'true',
      );
      await control.locator('summary').click();
      await control.locator('select[multiple]').selectOption({ index: 0 });
      await control.locator('input[name=updates]').uncheck();
      await control.locator('form button[type=submit]').click();
      await page.waitForFunction(
        () => !document.querySelector('app-concours-follow form button').disabled,
      );
      assert.deepEqual(writes.at(-1).preparation_option_ids, [901]);
      assert.equal(writes.at(-1).updates, false);
      assert.equal(await page.evaluate(() => window.__concoursPermissionCalls), 0);
      assert.equal(
        await page.locator('html').getAttribute('dir'),
        language === 'ar' ? 'rtl' : 'ltr',
      );
      assert.ok(await control.evaluate((el) => el.scrollWidth <= el.clientWidth + 1));
      await page.locator('app-public-header .notif-trigger').click();
      await page.locator('app-public-header app-concours-notification-text').waitFor();
      await page.locator('app-public-header .notif-item').first().click();
      await page.waitForURL('**/concours/' + record.slug + '#official-announcement');
      await page.goto(origin + '/app/dashboard', { waitUntil: 'domcontentloaded' });
      await page.locator('app-followed-concours a[href="/concours/' + record.slug + '"]').waitFor();
      await page.locator('app-followed-concours .follow-row button').click();
      await page
        .locator('app-followed-concours app-concours-follow button.follow-action')
        .first()
        .click();
      await page.waitForFunction(
        () => document.querySelectorAll('app-followed-concours article').length === 0,
      );
      assert.equal(follow.active, false);
      assert.equal(await page.evaluate(() => window.__concoursPermissionCalls), 0);
      assert.deepEqual(errors, []);
      results.push({
        language,
        width,
        following: true,
        tracks: true,
        dashboard: true,
        bellLink: true,
        unfollow: true,
        automaticPermissionRequests: 0,
        rtl: language === 'ar',
      });
      await context.close();
    }
    // Anonymous public follow action retains authentication and the permanent return URL.
    const context = await browser.newContext();
    await context.addInitScript(() => localStorage.setItem('quizatlas.language', 'fr'));
    await context.route('https://api.maroquiz.com/api/v1/**', (route) => {
      const name = new URL(route.request().url()).pathname.replace('/api/v1', '');
      return route.fulfill({
        json:
          name === '/public/concours/' + record.slug
            ? detail
            : name === '/public/concours'
              ? directory
              : empty,
      });
    });
    const page = await context.newPage();
    await page.goto(origin + '/concours', { waitUntil: 'domcontentloaded' });
    await page.locator(`app-concours-card a[href="/concours/${record.slug}"]`).first().click();
    await page.locator('app-concours-follow button').first().click();
    await page.waitForURL('**/login?returnUrl=**');
    assert.equal(new URL(page.url()).searchParams.get('returnUrl'), '/concours/' + record.slug);
    await context.close();
    results.push({ anonymous: true, loginReturnUrl: true });
  } finally {
    await browser.close();
  }
  const output = path.resolve(process.env.CONCOURS_SCREENSHOT_DIR || path.join(root, 'frontend/artifacts/concours-phase6'));
  fs.mkdirSync(output, { recursive: true });
  fs.writeFileSync(path.join(output, 'verification.json'), JSON.stringify(results, null, 2));
  console.log(
    'Concours following browser checks passed: FR/EN/AR RTL, preferences, dashboard, existing bell links, unfollow and guest login. All changes were intercepted fixtures.',
  );
})().catch((error) => {
  console.error(error);
  process.exitCode = 1;
});
