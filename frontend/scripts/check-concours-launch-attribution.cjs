// Read actual local admin data; public publication/attribution uses intercepted fixtures only.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const root = path.resolve(__dirname, '../..');
const { chromium } = require(
  require.resolve('playwright', { paths: [path.join(root, 'fact-generator')] }),
);
const tokenPath = path.join(root, 'backend/storage/framework/phase5f-admin-token');
const output = path.join(root, 'frontend/artifacts/concours-launch-readiness/attribution');
const origin = 'http://localhost:4301';
const fixturesOnly = process.argv.includes('--fixtures-only');
const evidence = fixturesOnly
  ? null
  : JSON.parse(
      fs.readFileSync(path.join(root, 'backend/artifacts/concours-phase5f/admin-api.json')),
    );
const source = evidence?.responses.sources.data.find((source) => source.key === 'wadifa-info');
const records = evidence ? evidence.discoveries.items : [];
const course = {
  id: 800001,
  slug: 'wadifa-fixture',
  name_fr: 'Préparation publique de test',
  name_ar: 'تحضير تجريبي',
  type: 'recruitment',
  is_active: true,
  displayed_session_year: 2026,
  preparation_options: [],
  current_announcements: [],
};
const credit = {
  provider: 'wadifa-info',
  name: 'Wadifa Info',
  url: 'https://www.wadifa-info.com/fr/146623/fixture',
  license: 'CC BY 4.0',
  license_url: 'https://creativecommons.org/licenses/by/4.0/',
  changes: 'selected_verified_adapted',
};
const notice = {
  id: 800002,
  slug: 'wadifa-fixture',
  concours_id: course.id,
  concours: course,
  institution: null,
  title_fr: 'Annonce officielle vérifiée de test',
  title_ar: 'إعلان رسمي تجريبي متحقق منه',
  session_year: 2026,
  official_pdf: null,
  positions: 1,
  official_publication_date: '2026-10-27',
  registration_deadline: '2026-11-10',
  official_source_url: 'https://www.emploi-public.ma/fixture-wadifa',
  verification_status: 'verified',
  publication_status: 'published',
  registration_status: 'open',
  announcement_status: 'open',
  verified_at: '2026-10-27T20:00:00Z',
  source_attribution: credit,
};
const pageOf = (items) => ({
  data: { items, meta: { current_page: 1, last_page: 1, per_page: 12, total: items.length } },
  success: true,
});

(async () => {
  let browser;
  try {
    const token = fixturesOnly ? '' : fs.readFileSync(tokenPath, 'utf8').trim();
    fs.mkdirSync(output, { recursive: true });
    browser = await chromium.launch({
      headless: true,
      args: ['--no-sandbox', '--disable-dev-shm-usage'],
    });
    const results = [];
    for (const [language, width] of [
      ['fr', 1440],
      ['en', 820],
      ['ar', 390],
    ]) {
      const dictionary = JSON.parse(
        fs.readFileSync(path.join(root, 'frontend/src/assets/i18n', language + '.json')),
      );
      for (const mode of fixturesOnly ? ['public-fixture'] : ['actual-admin', 'public-fixture']) {
        const context = await browser.newContext({ viewport: { width, height: 1000 } });
        const writes = [],
          errors = [],
          requests = [];
        await context.addInitScript(
          ({ token, language, admin }) => {
            if (admin) localStorage.setItem('quizatlas_access_token', token);
            localStorage.setItem('quizatlas.language', language);
            localStorage.setItem('quizatlas.theme', 'light');
            window.__permissionCalls = 0;
            if ('Notification' in window)
              Notification.requestPermission = async () => {
                window.__permissionCalls++;
                return 'denied';
              };
          },
          { token, language, admin: mode === 'actual-admin' },
        );
        await context.route('**/*', async (route) => {
          const request = route.request(),
            url = new URL(request.url());
          if (url.origin === 'https://api.maroquiz.com' && url.pathname.startsWith('/api/v1/')) {
            if (request.method() !== 'GET') {
              writes.push(request.method() + ' ' + url.pathname);
              return route.abort();
            }
            if (mode === 'actual-admin') {
              const response = await route.fetch({
                url: 'http://localhost:8000' + url.pathname + url.search,
                maxRedirects: 0,
              });
              requests.push({ path: url.pathname + url.search, status: response.status() });
              if (response.status() >= 400)
                errors.push('API ' + response.status() + ' ' + url.pathname);
              return route.fulfill({
                response,
                headers: { ...response.headers(), 'access-control-allow-origin': origin },
              });
            }
            let data;
            if (url.pathname === '/api/v1/public/concours-announcements/wadifa-fixture')
              data = { data: notice };
            else if (url.pathname === '/api/v1/public/concours-announcements')
              data = pageOf([notice]);
            else if (url.pathname === '/api/v1/public/concours') data = pageOf([course]);
            else if (
              url.pathname === '/api/v1/public/concours-categories' ||
              url.pathname === '/api/v1/public/concours-institutions'
            )
              data = pageOf([]);
            else {
              errors.push('Unexpected fixture API: ' + url.pathname);
              return route.abort();
            }
            return route.fulfill({
              status: 200,
              contentType: 'application/json',
              headers: { 'access-control-allow-origin': origin },
              body: JSON.stringify(data),
            });
          }
          if (
            request.method() === 'GET' &&
            ((url.hostname === 'fonts.gstatic.com' && request.resourceType() === 'font') ||
              (url.hostname === 'fonts.googleapis.com' && request.resourceType() === 'stylesheet'))
          )
            return route.continue();
          if (url.origin === origin && mode === 'public-fixture' && request.isNavigationRequest()) {
            // CSR shell prevents real SSR transfer-cache data from replacing these isolated responses.
            return route.fulfill({
              status: 200,
              contentType: 'text/html',
              body: fs.readFileSync(
                path.join(root, 'frontend/dist/frontend/browser/index.csr.html'),
                'utf8',
              ),
            });
          }
          if (url.origin === origin) return route.continue();
          return route.abort();
        });
        const page = await context.newPage();
        page.on('pageerror', (error) => errors.push(error.message));
        const assertFits = async () => {
          await page.evaluate(() => document.fonts.ready);
          const sizing = await page.evaluate(() => ({
            width: innerWidth,
            scrollWidth: document.documentElement.scrollWidth,
            offenders: [...document.querySelectorAll('body *')]
              .filter((e) => {
                const r = e.getBoundingClientRect();
                return r.width && (r.right > innerWidth + 1 || r.left < -1);
              })
              .slice(0, 30)
              .map((e) => ({
                tag: e.tagName,
                class: e.className,
                text: e.textContent.slice(0, 90),
                right: e.getBoundingClientRect().right,
                left: e.getBoundingClientRect().left,
              })),
          }));
          if (sizing.scrollWidth > sizing.width + 1) {
            fs.writeFileSync(
              path.join(output, `overflow-${language}-${width}.json`),
              JSON.stringify(sizing, null, 2),
            );
            await page.screenshot({
              path: path.join(output, `overflow-${language}-${width}.png`),
              fullPage: true,
            });
          }
          assert.ok(sizing.scrollWidth <= sizing.width + 1, JSON.stringify(sizing));
        };
        if (mode === 'actual-admin') {
          await page.goto(origin + '/admin/concours-discoveries', {
            waitUntil: 'domcontentloaded',
            timeout: 60000,
          });
          await page
            .locator('select[name=source] option')
            .filter({ hasText: 'Wadifa Info' })
            .waitFor({ state: 'attached', timeout: 30000 });
          await page.locator('select[name=source]').selectOption(String(source.id));
          await page.getByRole('button', { name: 'Rechercher', exact: true }).click();
          const listing = page.locator('div.admin-page').first().locator('table').first();
          const displayed = records.slice(0, 15);
          await page.waitForFunction(
            (count) =>
              document
                .querySelector('div.admin-page table tbody')
                ?.querySelectorAll('tr:has(button)').length === count,
            displayed.length,
          );
          assert.equal(await listing.locator('tbody tr:has(button)').count(), displayed.length);
          const text = await listing.innerText();
          for (const record of displayed) {
            assert.ok(text.includes(record.institution));
            assert.ok(text.includes(record.grade));
            if (record.publication_date) assert.ok(text.includes(record.publication_date));
            if (record.application_deadline) assert.ok(text.includes(record.application_deadline));
            assert.equal(record.official_url, null);
            assert.equal(record.official_verified_at, null);
            assert.ok(text.includes(dictionary.announcements.attribution.reportedNotice));
            assert.equal(
              await listing.locator('a').filter({ hasText: 'Wadifa Info' }).count(),
              displayed.length,
            );
          }
          await page.screenshot({
            path: path.join(output, `admin-${language}-${width}.png`),
            fullPage: true,
          });
          if (records.length === 0) {
            assert.ok(source.last_error, 'Empty live collection must show its actual blocker.');
            await page.locator('details.sources > summary').click();
            const sourceRow = page
              .locator('details.sources tbody tr')
              .filter({ hasText: 'Wadifa Info' });
            assert.ok((await sourceRow.innerText()).includes(source.last_error));
            assert.ok((await sourceRow.innerText()).includes('Collecte automatique inactive'));
            assert.equal((await sourceRow.locator('td').nth(5).innerText()).trim(), '0');
            await page.screenshot({
              path: path.join(output, `source-error-${language}-${width}.png`),
              fullPage: true,
            });
          } else {
            await page.getByRole('button', { name: 'Examiner', exact: true }).first().click();
            const dialog = page.locator('dialog:visible').first();
            await dialog.locator('input[formcontrolname=verified_title]').waitFor();
            assert.equal(
              await dialog.locator('input[formcontrolname=official_url]').inputValue(),
              '',
            );
            assert.equal(
              await dialog.locator('input[formcontrolname=verified_title]').inputValue(),
              '',
            );
            assert.ok(
              (await dialog.innerText()).includes(
                dictionary.announcements.attribution.reportedNotice,
              ),
            );
            await page.screenshot({
              path: path.join(output, `review-${language}-${width}.png`),
              fullPage: true,
            });
          }
        } else {
          await page.goto(origin + '/concours', { waitUntil: 'domcontentloaded', timeout: 60000 });
          const card = page.locator('app-announcement-card').first();
          await card.locator('app-announcement-source a').waitFor({ timeout: 30000 });
          assert.equal(
            await card.locator('app-announcement-source a').getAttribute('href'),
            credit.url,
          );
          assert.ok(
            !(await card.locator('app-announcement-source a').getAttribute('rel')).includes(
              'nofollow',
            ),
          );
          assert.ok((await card.innerText()).includes(dictionary.announcements.attribution.source));
          assert.ok(!(await card.innerText()).includes('CC BY 4.0'));
          assert.ok(
            !(await card.innerText()).includes(dictionary.announcements.attribution.changes),
          );
          assert.equal(
            await page.locator('html').getAttribute('dir'),
            language === 'ar' ? 'rtl' : 'ltr',
          );
          await assertFits();
          await card.scrollIntoViewIfNeeded();
          await page.screenshot({ path: path.join(output, `card-${language}-${width}.png`) });
          await card.locator('h3 a').click();
          await page.locator('.source-information').waitFor();
          assert.equal(
            await page.locator('.official-source a').getAttribute('href'),
            notice.official_source_url,
          );
          assert.ok(
            (await page.locator('.official-source a').innerText()).includes(
              dictionary.announcements.attribution.officialNotice,
            ),
          );
          assert.equal(
            await page.locator('.source-information a').getAttribute('href'),
            credit.license_url,
          );
          assert.equal(await page.locator('.source-information').count(), 1);
          assert.equal(
            await page.locator('link[rel=canonical]').getAttribute('href'),
            'https://maroquiz.com/concours/annonces/wadifa-fixture',
          );
          await assertFits();
          await page.screenshot({
            path: path.join(output, `detail-${language}-${width}.png`),
            fullPage: true,
          });
        }
        assert.deepEqual(writes, []);
        assert.deepEqual(errors, []);
        assert.equal(await page.evaluate(() => window.__permissionCalls), 0);
        results.push({
          mode,
          language,
          width,
          actual_records: mode === 'actual-admin' ? records.length : 0,
          live_collection_status:
            mode === 'actual-admin' && records.length === 0 ? 'BLOCKED' : 'fixture_or_records',
          live_blocker: mode === 'actual-admin' ? source.last_error : null,
          direction: await page.locator('html').getAttribute('dir'),
          requests,
          writes: 0,
          permission_prompts: 0,
        });
        await context.close();
      }
    }
    fs.writeFileSync(
      path.join(output, fixturesOnly ? 'fixture-verification.json' : 'verification.json'),
      JSON.stringify(
        { results, actual_admin_data: !fixturesOnly, public_publication_fixtures_only: true },
        null,
        2,
      ) + '\n',
    );
    console.log(
      'Phase 5F Chromium passed: ' +
        results.length +
        ' cases; actual admin: ' +
        !fixturesOnly +
        '; zero writes/prompts.',
    );
  } finally {
    if (browser) await browser.close();
    if (!fixturesOnly && fs.existsSync(tokenPath)) fs.unlinkSync(tokenPath);
  }
})().catch((error) => {
  console.error(error);
  process.exitCode = 1;
});
