// Loopback production preview; private responses are fixtures and all writes fail.
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
const home = process.argv.includes('--home');
const routePath = home ? '/' : '/concours';
const empty = {
  data: { items: [], meta: { current_page: 1, last_page: 1, per_page: 12, total: 0 } },
};
const output = path.join(root, 'frontend/artifacts/concours-phase7a/navbar', home ? 'home' : '.');

(async () => {
  let directory = empty;
  if (!home) {
    const directoryResponse = await fetch('http://localhost:8000/api/v1/public/concours');
    assert.equal(directoryResponse.status, 200);
    directory = await directoryResponse.json();
  }
  const response = await fetch(origin + routePath);
  assert.equal(response.status, 200);
  const html = await response.text();
  assert.ok(
    html.includes(home ? 'app-landing' : 'concours-page directory-page'),
    'The preview serves the current page bundle.',
  );
  fs.mkdirSync(output, { recursive: true });
  const browser = await chromium.launch({
    headless: true,
    args: ['--no-sandbox', '--disable-dev-shm-usage'],
  });
  const results = [];
  const publicResponses = new Map();
  try {
    for (const language of ['fr', 'en', 'ar']) {
      for (const authenticated of [false, true]) {
        const context = await browser.newContext({ viewport: { width: 1440, height: 1000 } });
        await context.addInitScript(
          ({ language, authenticated }) => {
            localStorage.setItem('quizatlas.language', language);
            localStorage.setItem('quizatlas.theme', 'light');
            if (authenticated)
              localStorage.setItem('quizatlas_access_token', 'CONTROLLED_NAVBAR_FIXTURE_ONLY');
            window.__permissionRequests = 0;
            if ('Notification' in window)
              Notification.requestPermission = async () => {
                window.__permissionRequests++;
                return 'denied';
              };
          },
          { language, authenticated },
        );
        // Reuse one read-only SSR response to avoid exhausting the local anonymous limit.
        await context.route(origin + routePath, (route) =>
          route.fulfill({ contentType: 'text/html', body: html }),
        );
        await context.route('**/api/v1/**', async (route) => {
          const request = route.request();
          assert.equal(request.method(), 'GET', 'Navbar checks must never write application data.');
          const name = new URL(request.url()).pathname.replace('/api/v1', '');
          let body;
          if (name === '/auth/me')
            body = {
              data: {
                id: 999001,
                name: 'Long controlled fixture user name',
                username: 'fixture',
                role: 'user',
                email: 'fixture@example.test',
              },
            };
          else if (name.endsWith('/unread-count')) body = { data: { count: 0 } };
          else if (
            home &&
            (name.startsWith('/public/') || ['/landing', '/progression/showcase'].includes(name))
          ) {
            const localUrl = 'http://localhost:8000/api/v1' + name + new URL(request.url()).search;
            if (!publicResponses.has(localUrl))
              publicResponses.set(
                localUrl,
                fetch(localUrl).then(async (result) => {
                  assert.equal(result.status, 200, 'Local public GET ' + name);
                  return result.json();
                }),
              );
            body = await publicResponses.get(localUrl);
          } else if (name === '/public/concours') body = directory;
          else if (name.startsWith('/public/')) body = empty;
          else throw new Error('Unexpected private request: ' + name);
          await route.fulfill({ json: body });
        });
        const page = await context.newPage();
        const errors = [];
        page.on('pageerror', (error) => errors.push(error.message));
        await page.goto(origin + routePath, { waitUntil: 'domcontentloaded' });
        await page.waitForFunction((lang) => document.documentElement.lang === lang, language);
        await page
          .locator(
            authenticated
              ? 'app-public-header .profile-trigger'
              : 'app-public-header .actions .register',
          )
          .waitFor();
        await page.evaluate(() => document.fonts.ready);
        const header = page.locator('app-public-header');
        for (const width of [1440, 1366, 1300, 1200, 1151, 1150, 1024, 820, 390, 320]) {
          await page.setViewportSize({ width, height: 1000 });
          const menu = header.locator('.mobile-menu-btn');
          const mobile = await menu.isVisible();
          if (mobile) {
            await menu.click();
            await header.locator('nav').waitFor({ state: 'visible' });
          }
          const links = header.locator('nav > a:not(.mobile-only-register)');
          assert.equal(await links.count(), 8, 'Every existing navigation item is retained.');
          for (const link of await links.all()) {
            assert.ok(await link.isVisible(), `Navigation remains accessible at ${width}px.`);
            const box = await link.boundingBox();
            assert.ok(
              box.x >= -1 && box.x + box.width <= width + 1,
              `Link fits ${language}/${width}: ${await link.innerText()}`,
            );
          }
          if (mobile) {
            await menu.click();
            await header.locator('nav').waitFor({ state: 'hidden' });
          }
          const layout = await header.evaluate((element) => ({
            viewport: innerWidth,
            documentWidth: document.documentElement.scrollWidth,
            controls: [...element.querySelector('.container-wide').children]
              .filter((child) => getComputedStyle(child).display !== 'none')
              .map((child) => ({
                class: child.className,
                left: child.getBoundingClientRect().left,
                right: child.getBoundingClientRect().right,
              })),
          }));
          assert.ok(
            layout.documentWidth <= width + 1,
            `Document overflow: ${JSON.stringify({ routePath, language, authenticated, width, layout })}`,
          );
          for (const control of layout.controls)
            assert.ok(
              control.left >= -1 && control.right <= width + 1,
              `Control overflow: ${JSON.stringify({ language, authenticated, width, control })}`,
            );
          if (width === 1440 || width === 390)
            await header.screenshot({
              path: path.join(
                output,
                `${language}-${authenticated ? 'user' : 'guest'}-${width}.png`,
              ),
              animations: 'disabled',
            });
          results.push({
            routePath,
            language,
            authenticated,
            width,
            mobileMenu: mobile,
            documentWidth: layout.documentWidth,
            navigationItems: 8,
          });
        }
        assert.equal(await page.evaluate(() => window.__permissionRequests), 0);
        assert.equal(
          await page.locator('html').getAttribute('dir'),
          language === 'ar' ? 'rtl' : 'ltr',
        );
        assert.deepEqual(errors, []);
        await context.close();
      }
    }
  } finally {
    await browser.close();
  }
  fs.writeFileSync(path.join(output, 'verification.json'), JSON.stringify(results, null, 2) + '\n');
  console.log(
    `Navbar checks passed (${routePath}): ${results.length} FR/EN/AR guest/user viewport cases, all eight links, no overflow or permission requests.`,
  );
})().catch((error) => {
  console.error(error);
  process.exitCode = 1;
});
