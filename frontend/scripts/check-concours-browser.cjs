// Uses live local API data only. No database writes, authentication, or fixtures.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const root = path.resolve(__dirname, '../..');
const playwrightPath = require.resolve('playwright', {
  paths: [
    path.join(root, 'frontend'),
    path.join(root, 'fact-generator'),
    path.join(root, 'video-generator'),
  ],
});
const { chromium } = require(playwrightPath);
const phase4a = process.argv.includes('--phase4a');
const phase5c = process.argv.includes('--phase5c');
const productionPreview = phase4a || phase5c || process.argv.includes('--phase3');
const origin =
  process.env.CONCOURS_BROWSER_URL ||
  (productionPreview ? 'http://localhost:4301' : 'http://localhost:4200');
const apiOrigin = process.env.CONCOURS_API_URL || 'http://localhost:8000/api/v1';
const output = path.resolve(
  process.env.CONCOURS_SCREENSHOT_DIR ||
    path.join(
      root,
      'frontend/artifacts',
      phase5c
        ? 'concours-phase5c/public'
        : phase4a
          ? 'concours-phase4a'
          : productionPreview
            ? 'concours-phase3'
            : 'concours-phase2',
    ),
);
const theme = process.argv.includes('--dark') ? 'dark' : 'light';

(async () => {
  const response = await fetch(apiOrigin + '/public/concours?per_page=100');
  assert.equal(response.status, 200, 'The local public directory must be available.');
  const records = (await response.json()).data.items;
  assert.ok(records.length, 'At least one real public concours is needed for detail screenshots.');
  const record = records[0];
  fs.mkdirSync(output, { recursive: true });
  const browser = await chromium.launch({
    headless: true,
    args: ['--no-sandbox', '--disable-dev-shm-usage'],
  });
  const results = [];
  try {
    for (const language of theme === 'dark' ? ['en'] : ['fr', 'en', 'ar']) {
      for (const [size, width] of theme === 'dark'
        ? [['desktop', 1440]]
        : [
            ['desktop', 1440],
            ['tablet', 820],
            ['mobile', 390],
          ]) {
        const context = await browser.newContext({
          viewport: { width, height: 1000 },
          deviceScaleFactor: 1,
        });
        if (productionPreview) {
          // The production bundle names the production API origin. Route it to
          // the real local API for this preview, without contacting production.
          await context.route('https://api.maroquiz.com/api/v1/**', async (route) => {
            const request = route.request();
            const localUrl = apiOrigin + request.url().split('/api/v1')[1];
            const response = await route.fetch({ url: localUrl });
            await route.fulfill({
              response,
              headers: {
                ...response.headers(),
                'access-control-allow-origin': origin,
              },
            });
          });
        }
        await context.addInitScript(
          ({ lang, preferredTheme }) => {
            localStorage.setItem('quizatlas.language', lang);
            localStorage.setItem('quizatlas.theme', preferredTheme);
          },
          { lang: language, preferredTheme: theme },
        );
        const page = await context.newPage();
        const errors = [];
        page.on('pageerror', (error) => errors.push(error.message));
        for (const [kind, route] of [
          ['directory', '/concours'],
          ['detail', '/concours/' + encodeURIComponent(record.slug)],
        ]) {
          // The existing anonymous API limit is 30 requests/minute. Each real
          // SSR page makes several API reads; pace the matrix without bypassing it.
          await new Promise((resolve) => setTimeout(resolve, 15000));
          let navigation;
          for (let attempt = 0; attempt < 3; attempt++) {
            navigation = await page.goto(origin + route, {
              waitUntil: 'domcontentloaded',
              timeout: 60000,
            });
            if (navigation.status() !== 503 || attempt === 2) break;
            console.log(`Local API temporarily unavailable at ${route}; waiting before retrying.`);
            await new Promise((resolve) => setTimeout(resolve, 31000));
          }
          if (navigation.status() !== 200) {
            fs.writeFileSync(path.join(output, 'preview-error.html'), await page.content());
            console.error(
              'Preview error:',
              (await page.locator('body').innerText()).slice(0, 1500),
            );
          }
          assert.equal(navigation.status(), 200, route);
          await page
            .locator(kind === 'directory' ? 'app-concours-card' : '#official-announcement')
            .first()
            .waitFor();
          try {
            await page.waitForFunction(
              (lang) =>
                document.documentElement.lang === lang &&
                !!document.querySelector('app-announcement-list > div[aria-busy="false"]'),
              language,
            );
          } catch (error) {
            fs.writeFileSync(path.join(output, 'preview-error.html'), await page.content());
            console.error('Hydration diagnostic', {
              kind,
              size,
              language,
              errors,
              state: await page.evaluate(() => ({
                lang: document.documentElement.lang,
                lists: [...document.querySelectorAll('app-announcement-list > div')].map((el) =>
                  el.getAttribute('aria-busy'),
                ),
                text: document.body.innerText.slice(0, 1200),
              })),
            });
            throw error;
          }
          await page.evaluate(() => document.fonts.ready);
          if (phase5c)
            assert.equal(
              await page.locator('.type-pill').count(),
              0,
              'Permanent badge removed without changing the permanent route.',
            );
          assert.equal(
            await page
              .locator('.warm-hero h1')
              .evaluate((element) => getComputedStyle(element).color),
            'rgb(41, 37, 47)',
            'Hero heading stays readable on its warm background in either theme.',
          );
          assert.equal(
            await page.locator('html').getAttribute('dir'),
            language === 'ar' ? 'rtl' : 'ltr',
          );
          assert.equal(
            await page.locator('app-public-header').count(),
            1,
            'Exactly one global navbar.',
          );
          assert.equal(await page.locator('main').count(), 1);
          assert.equal(
            await page.locator('meta[name="robots"]').getAttribute('content'),
            'index, follow',
          );
          const overflow = await page.evaluate(() => ({
            viewport: innerWidth,
            content: document.documentElement.scrollWidth,
          }));
          const overflowing =
            overflow.content > overflow.viewport + 1
              ? await page.evaluate(() =>
                  [...document.querySelectorAll('body *')]
                    .filter((element) => element.getBoundingClientRect().right > innerWidth + 1)
                    .map((element) => ({
                      tag: element.tagName,
                      class: element.className,
                      navbar: !!element.closest('app-public-header'),
                    })),
                )
              : [];
          assert.ok(
            await page
              .locator('.concours-page')
              .evaluate((element) => element.scrollWidth <= element.clientWidth + 1),
            'Concours container fits its viewport, including scrollable section navigation.',
          );
          const navbarOverflow = overflowing.some((item) => item.navbar);
          assert.ok(
            overflow.content <= overflow.viewport + 1 && overflowing.length === 0,
            `${kind}/${size}/${language} overflows: ${JSON.stringify(overflowing)}`,
          );
          const columns = await page.locator('.public-columns').boundingBox();
          const primary = await page.locator('.primary-column').boundingBox();
          const sidebar = await page.locator('.public-sidebar').boundingBox();
          if (size === 'desktop') {
            assert.ok(
              language === 'ar' ? sidebar.x < primary.x : sidebar.x > primary.x,
              'Sidebar follows the document direction.',
            );
          } else {
            assert.ok(sidebar.y > primary.y, 'Sidebar stacks below the content on tablet/mobile.');
          }
          if (kind === 'detail') {
            if (productionPreview) {
              assert.equal(
                await page.locator('#announcement-history-title').count(),
                1,
                'Phase 3 bundle must be served, not a stale Phase 2 process.',
              );
            }
            const name = language === 'ar' && record.name_ar ? record.name_ar : record.name_fr;
            const expected =
              name + (record.displayed_session_year ? ' ' + record.displayed_session_year : '');
            assert.equal((await page.locator('h1').innerText()).trim(), expected);
            for (const target of [
              'official-announcement',
              'past-papers',
              'qcm',
              'summaries',
              'guides',
            ]) {
              assert.equal(
                await page.locator('#' + target).count(),
                1,
                'Permanent section ' + target,
              );
            }
            const fragments = await page
              .locator('.section-nav a, .quick-grid a')
              .evaluateAll((links) => links.map((a) => new URL(a.href).hash));
            for (const fragment of fragments)
              assert.equal(await page.locator(fragment).count(), 1, 'Valid anchor ' + fragment);
            await page.locator('.section-nav a[href$="#past-papers"]').click();
            await page.waitForURL('**#past-papers');
            await page.waitForFunction(() => !!document.querySelector('#structured-data'));
            assert.equal(
              await page.locator('meta[name="robots"]').getAttribute('content'),
              'index, follow',
            );
            await page.evaluate(() => scrollTo(0, 0));
          }
          const filename = `${kind}-${size}-${language}${theme === 'dark' ? '-dark' : ''}.png`;
          await page.screenshot({
            path: path.join(output, filename),
            fullPage: true,
            animations: 'disabled',
          });
          results.push({
            kind,
            size,
            language,
            route,
            viewport: width,
            contentWidth: overflow.content,
            navbarOverflow,
            screenshot: filename,
            columns: Math.round(columns.width),
          });
          console.log(
            `PASS ${kind} ${size} ${language}: real content, Concours fits viewport, preserved navbar/SEO, screenshot ${filename}`,
          );
        }
        assert.deepEqual(errors, [], 'No uncaught browser errors.');
        await context.close();
      }
    }
    fs.writeFileSync(
      path.join(output, theme === 'dark' ? 'verification-dark.json' : 'verification.json'),
      JSON.stringify(
        {
          source: 'Live local API; no fixture records',
          preview: origin,
          apiRouting: 'Production API URL mapped to live local API for the production preview',
          concoursId: record.id,
          slug: record.slug,
          theme,
          checks: results,
        },
        null,
        2,
      ) + '\n',
    );
  } finally {
    await browser.close();
  }
})().catch((error) => {
  console.error(error);
  process.exitCode = 1;
});
