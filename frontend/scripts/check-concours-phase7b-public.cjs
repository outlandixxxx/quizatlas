// Read-only checks of actual local Enseignement content; never fixture responses.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const crypto = require('node:crypto');
const { chromium } = require(
  require.resolve('playwright', { paths: [path.resolve(__dirname, '../../fact-generator')] }),
);
const origin = 'http://localhost:4301',
  api = 'http://localhost:8000/api/v1';
const out = path.resolve(__dirname, '../artifacts/concours-phase7b/public-functional');
fs.mkdirSync(out, { recursive: true });
const results = [];
let activePage;
async function test(id, expected, fn) {
  try {
    results.push({ id, status: 'PASS', expected, actual: await fn() });
    console.log('PASS', id);
  } catch (error) {
    if (activePage) {
      await activePage
        .screenshot({ path: path.join(out, 'failure-' + id + '.png'), fullPage: true })
        .catch(() => {});
      const diag = await activePage
        .evaluate(() => ({
          width: innerWidth,
          scroll: document.documentElement.scrollWidth,
          wide: [...document.querySelectorAll('body *')]
            .filter((x) => {
              const r = x.getBoundingClientRect();
              return r.right > innerWidth + 1 || r.left < -1;
            })
            .map((x) => ({
              tag: x.tagName,
              class: x.className,
              right: x.getBoundingClientRect().right,
              left: x.getBoundingClientRect().left,
            }))
            .slice(0, 40),
        }))
        .catch(() => null);
      fs.writeFileSync(path.join(out, 'failure-' + id + '.json'), JSON.stringify(diag, null, 2));
    }
    results.push({ id, status: 'FAIL', expected, actual: error.message });
    console.log('FAIL', id, error.message.slice(0, 500));
  }
  fs.writeFileSync(path.join(out, 'verification.json'), JSON.stringify(results, null, 2));
}
(async () => {
  const detail = await (await fetch(api + '/public/concours/education-preparation')).json();
  await test(
    'real-associations-empty-states',
    'The existing permanent record exposes exam #2 and correction #3 together, no guessed tracks/QCM/announcement.',
    async () => {
      assert.equal(detail.data.slug, 'education-preparation');
      assert.equal(detail.data.resources.find((x) => x.id === 3).corrects_exam_pdf_id, 2);
      assert.ok(detail.data.resources.find((x) => x.id === 2));
      assert.equal(detail.data.current_announcements.length, 0);
      assert.equal(detail.data.preparation_options.length, 0);
      assert.equal(detail.data.preparation_qcm.meta.total, 0);
      return {
        displayedYear: detail.data.displayed_session_year,
        exam: 2,
        correction: 3,
        tracks: 0,
        qcm: 0,
        currentAnnouncements: 0,
      };
    },
  );
  for (const id of [2, 3])
    for (const action of ['view', 'download'])
      await test(
        `anonymous-pdf-${id}-${action}`,
        'Anonymous GET returns the actual PDF bytes and correct inline/attachment/security headers.',
        async () => {
          const response = await fetch(api + `/public/concours-pdfs/${id}/${action}`);
          const bytes = Buffer.from(await response.arrayBuffer());
          assert.equal(response.status, 200);
          assert.match(response.headers.get('content-type'), /application\/pdf/);
          assert.equal(bytes.subarray(0, 5).toString(), '%PDF-');
          assert.match(
            response.headers.get('content-disposition'),
            action === 'view' ? /inline/ : /attachment/,
          );
          assert.match(response.headers.get('cache-control'), /no-store/);
          assert.match(response.headers.get('x-robots-tag'), /noindex/);
          return {
            status: 200,
            bytes: bytes.length,
            sha256: crypto.createHash('sha256').update(bytes).digest('hex'),
          };
        },
      );
  const browser = await chromium.launch({
    headless: true,
    args: ['--no-sandbox', '--disable-dev-shm-usage'],
  });
  try {
    for (const language of ['fr', 'en', 'ar'])
      for (const width of [1440, 390])
        await test(
          `navigation-filter-${language}-${width}`,
          'Real content, paper search/year filters, anonymous login return URL, navbar/footer and RTL remain usable.',
          async () => {
            const ctx = await browser.newContext({ viewport: { width, height: 1000 } });
            ctx.setDefaultTimeout(20000);
            const writes = [];
            await ctx.route('https://api.maroquiz.com/api/v1/**', async (route) => {
              if (route.request().method() !== 'GET') {
                writes.push(route.request().method());
                return route.abort();
              }
              const response = await route.fetch({
                url: api + route.request().url().split('/api/v1')[1],
              });
              await route.fulfill({
                response,
                headers: { ...response.headers(), 'access-control-allow-origin': origin },
              });
            });
            await ctx.addInitScript((lang) => {
              localStorage.setItem('quizatlas.language', lang);
              localStorage.setItem('quizatlas.theme', 'light');
            }, language);
            const page = await ctx.newPage();
            activePage = page;
            // Respect the existing anonymous API rate limit rather than overriding it.
            await new Promise((resolve) => setTimeout(resolve, 15000));
            await page.goto(origin + '/concours/education-preparation', {
              waitUntil: 'domcontentloaded',
            });
            await page.locator('#past-papers a[href$="/3/view"]').waitFor();
            await page.waitForFunction((lang) => document.documentElement.lang === lang, language);
            await page.evaluate(() => document.fonts.ready);
            assert.match(await page.locator('h1').innerText(), /2027/);
            assert.equal(
              await page.locator('html').getAttribute('dir'),
              language === 'ar' ? 'rtl' : 'ltr',
            );
            assert.equal(await page.locator('.preparation-filter').count(), 0);
            assert.equal(
              await page.locator('link[rel="canonical"]').getAttribute('href'),
              'https://maroquiz.com/concours/education-preparation',
            );
            assert.equal(
              await page.locator('#official-announcement app-announcement-card').count(),
              0,
            );
            assert.ok(await page.locator('footer a[href="/privacy"]').count());
            assert.ok(await page.locator('footer a[href="/terms"]').count());
            const search = page.locator('#past-papers input[type="search"]');
            await search.fill('phase7b-no-matching-document');
            await page.waitForFunction(
              () => document.querySelectorAll('#past-papers app-concours-pdf').length === 0,
            );
            await search.fill('Mathématiques');
            await page.waitForFunction(
              () => document.querySelectorAll('#past-papers app-concours-pdf').length === 2,
            );
            await search.fill('');
            await page.locator('#past-papers select').selectOption('2023');
            assert.equal(await page.locator('#past-papers app-concours-pdf').count(), 2);
            await page.evaluate(() => document.fonts.ready);
            const fit = await page.evaluate(() => ({
              width: innerWidth,
              scroll: document.documentElement.scrollWidth,
            }));
            assert.ok(fit.scroll <= fit.width + 1, JSON.stringify(fit));
            await page.screenshot({ path: path.join(out, `header-${language}-${width}.png`) });
            await page.locator('#past-papers').scrollIntoViewIfNeeded();
            await page.screenshot({ path: path.join(out, `papers-${language}-${width}.png`) });
            await page.locator('footer').scrollIntoViewIfNeeded();
            await page.screenshot({ path: path.join(out, `footer-${language}-${width}.png`) });
            await page.locator('app-concours-follow button').first().click();
            await page.waitForURL('**/login?returnUrl=**');
            assert.equal(
              new URL(page.url()).searchParams.get('returnUrl'),
              '/concours/education-preparation',
            );
            assert.deepEqual(writes, []);
            await ctx.close();
            return {
              width,
              language,
              pdfs: [2, 3],
              searchAndYear: true,
              footer: true,
              canonical: true,
              writes: 0,
            };
          },
        );
    await test(
      'unknown-permanent-slug',
      'A fabricated year-suffixed slug is not silently treated as the permanent concours.',
      async () => {
        const response = await fetch(api + '/public/concours/education-preparation-2027');
        assert.equal(response.status, 404);
        return '404; permanent URL stays education-preparation.';
      },
    );
  } finally {
    await browser.close();
  }
  process.exitCode = results.some((r) => r.status === 'FAIL') ? 1 : 0;
})().catch((error) => {
  console.error(error);
  process.exitCode = 1;
});
