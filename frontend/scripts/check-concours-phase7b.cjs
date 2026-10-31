// Browser-driven acceptance against the actual Laravel API in the isolated copy.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const { chromium } = require(
  require.resolve('playwright', { paths: [path.resolve(__dirname, '../../fact-generator')] }),
);
const origin = 'http://localhost:4302',
  api = 'http://localhost:8077/api/v1';
const output = path.resolve(__dirname, '../artifacts/concours-phase7b/isolated');
fs.mkdirSync(output, { recursive: true });
const previous = process.argv.includes('--resume')
  ? JSON.parse(fs.readFileSync(path.join(output, 'verification.json')))
  : { results: [], state: {} };
const results = previous.results.filter(
    (x) =>
      x.status === 'PASS' && !(process.argv.includes('--verify-quiz') && x.id === 'qcm-launch'),
  ),
  state = previous.state;
let page, browser, adminToken, userToken;
async function call(route, token, method = 'GET', body) {
  const response = await fetch(api + route, {
    method,
    headers: {
      accept: 'application/json',
      ...(body ? { 'content-type': 'application/json' } : {}),
      ...(token ? { authorization: 'Bearer ' + token } : {}),
    },
    body: body ? JSON.stringify(body) : undefined,
  });
  const data = await response.json();
  return { status: response.status, ...data };
}
async function login(role, password = 'AcceptanceFixture42!Only') {
  const response = await call('/auth/login', null, 'POST', {
    email: `phase7b-${role}@example.test`,
    password,
    recaptcha_token: 'ISOLATED_LOCAL_FIXTURE',
  });
  assert.equal(response.status, 200, JSON.stringify(response));
  return response.data.access_token;
}
async function context(token, lang = 'fr', width = 1440) {
  const ctx = await browser.newContext({ viewport: { width, height: 1000 } });
  ctx.setDefaultTimeout(15000);
  ctx.setDefaultNavigationTimeout(45000);
  await ctx.route('https://api.maroquiz.com/api/v1/**', async (route) => {
    const response = await route.fetch({ url: api + route.request().url().split('/api/v1')[1] });
    await route.fulfill({
      response,
      headers: { ...response.headers(), 'access-control-allow-origin': origin },
    });
  });
  await ctx.route(/https:\/\/(www.google.com|accounts.google.com)\//, (route) =>
    route.fulfill({ contentType: 'application/javascript', body: '' }),
  );
  await ctx.addInitScript(
    ({ token, lang }) => {
      localStorage.setItem('quizatlas.language', lang);
      localStorage.setItem('quizatlas.theme', 'light');
      if (token) localStorage.setItem('quizatlas_access_token', token);
      window.grecaptcha = {
        ready: (cb) => cb(),
        execute: () => Promise.resolve('ISOLATED_LOCAL_FIXTURE'),
      };
      window.google = { accounts: { id: { initialize() {}, renderButton() {} } } };
      window.__permissionRequests = 0;
      if (window.Notification)
        Notification.requestPermission = () => {
          window.__permissionRequests++;
          return Promise.resolve('denied');
        };
    },
    { token, lang },
  );
  return ctx;
}
async function go(route) {
  console.log('OPEN', route);
  await page.goto(origin + route, { waitUntil: 'domcontentloaded' });
  await page.waitForTimeout(500);
}
async function shot(name) {
  await page.screenshot({ path: path.join(output, name + '.png'), fullPage: true });
  return name + '.png';
}
async function test(id, expected, fn) {
  if (results.some((x) => x.id === id && x.status === 'PASS')) {
    console.log('RETAINED', id);
    return;
  }
  try {
    const actual = await fn();
    results.push({ id, status: 'PASS', expected, actual });
    console.log('PASS', id);
  } catch (error) {
    const screenshot = page ? await shot('failure-' + id).catch(() => null) : null;
    if (page)
      fs.writeFileSync(
        path.join(output, 'failure-' + id + '.txt'),
        await page
          .locator('body')
          .innerText()
          .catch(() => ''),
      );
    results.push({ id, status: 'FAIL', expected, actual: error.message, screenshot });
    console.log('FAIL', id, error.message.slice(0, 700));
  }
  fs.writeFileSync(
    path.join(output, 'verification.json'),
    JSON.stringify(
      {
        scope:
          'Isolated restored PostgreSQL database; actual application API/templates; CAPTCHA only mocked',
        state,
        results,
      },
      null,
      2,
    ),
  );
}
async function select(control, label, scope = page) {
  await scope.locator(`[formcontrolname="${control}"]`).selectOption({ label });
}
async function fill(control, value, scope = page) {
  await scope.locator(`[formcontrolname="${control}"]`).fill(String(value));
}
async function responseAfter(action, part, method) {
  const pending = page.waitForResponse(
    (r) => r.url().includes(part) && (!method || r.request().method() === method),
  );
  await action();
  const response = await pending;
  const body = await response.json();
  assert.ok(response.status() < 300, JSON.stringify(body));
  return body.data;
}
(async () => {
  browser = await chromium.launch({
    headless: true,
    args: ['--no-sandbox', '--disable-dev-shm-usage'],
  });
  try {
    adminToken = await login('admin');
    userToken = await login(
      'user',
      previous.results.some((x) => x.id === 'password-session-revocation' && x.status === 'PASS')
        ? 'AcceptanceFixture43!Only'
        : 'AcceptanceFixture42!Only',
    );
    let ctx = await context(adminToken);
    page = await ctx.newPage();
    await test(
      'admin-existing-lists',
      'Existing concours/categories/institutions, announcements, PDFs and seven sources load.',
      async () => {
        const captures = [];
        for (const [route, text] of [
          ['/admin/concours', "Concours de l'Enseignement"],
          ['/admin/concours-categories', 'Éducation'],
          ['/admin/concours-institutions', "Ministère de l'Éducation Nationale"],
          ['/admin/concours-announcements', 'taalim'],
          ['/admin/exam-pdfs', '#2'],
          ['/admin/concours-discoveries', 'Aucune annonce détectée'],
        ]) {
          await go(route);
          await page.getByText(text, { exact: false }).first().waitFor();
          assert.equal(await page.locator('.admin-page > [role="alert"]').count(), 0);
          if (route.endsWith('discoveries')) {
            await page.locator('summary').filter({ hasText: 'Sources officielles' }).click();
            assert.equal(await page.locator('details.sources tbody tr').count(), 7);
          }
          captures.push(await shot('admin-' + route.split('/').at(-1)));
        }
        return { screenshots: captures };
      },
    );
    await test(
      'category-editor',
      'A clearly labelled fixture category can be created and edited in the copy.',
      async () => {
        await go('/admin/concours-categories');
        await page.getByRole('button', { name: 'Add record' }).click();
        const dialog = page.locator('dialog[open]');
        await fill('slug', 'phase7b-fixture-category', dialog);
        await fill('name_fr', 'Phase 7B catégorie de test', dialog);
        await fill('name_ar', 'فئة اختبار المرحلة السابعة', dialog);
        const created = await responseAfter(
          () => dialog.getByRole('button', { name: 'Save record', exact: true }).click(),
          '/admin/concours-directory/categories',
          'POST',
        );
        state.categoryId = created.id;
        await page
          .getByRole('button', { name: 'Edit Phase 7B catégorie de test', exact: true })
          .click();
        await fill('description_fr', 'Fixture locale isolée uniquement.', dialog);
        await responseAfter(
          () => dialog.getByRole('button', { name: 'Save record', exact: true }).click(),
          '/admin/concours-directory/categories/',
          'PUT',
        );
        return 'Created inactive fixture category and saved its description; no application record modified.';
      },
    );
    await test(
      'session-year-editor',
      'Manual override and annual rollover update titles without changing permanent slugs/PDF years.',
      async () => {
        await go('/admin/concours');
        await page
          .getByRole('button', { name: "Edit Concours de l'Enseignement", exact: true })
          .click();
        const dialog = page.locator('dialog[open]');
        assert.ok(
          (await dialog.locator('[formcontrolname="slug"]').getAttribute('readonly')) !== null,
        );
        await fill('session_year_override', '2028', dialog);
        await responseAfter(
          () => dialog.getByRole('button', { name: 'Save record', exact: true }).click(),
          '/admin/concours-directory/concours/1',
          'PUT',
        );
        let data = (await call('/public/concours/education-preparation')).data;
        assert.equal(data.displayed_session_year, 2028);
        assert.equal(data.slug, 'education-preparation');
        assert.equal(data.resources.find((x) => x.id === 2).year, 2023);
        await page
          .getByRole('button', { name: "Edit Concours de l'Enseignement", exact: true })
          .click();
        await fill('session_year_override', '', dialog);
        await fill('session_year', '2026', dialog);
        await select('session_policy', 'Annual — approved anniversary only', dialog);
        await fill('session_rollover_on', '2026-10-01', dialog);
        await responseAfter(
          () => dialog.getByRole('button', { name: 'Save record', exact: true }).click(),
          '/admin/concours-directory/concours/1',
          'PUT',
        );
        data = (await call('/public/concours/education-preparation')).data;
        assert.equal(data.displayed_session_year, 2027);
        await page
          .getByRole('button', { name: "Edit Concours de l'Enseignement", exact: true })
          .click();
        await select('session_policy', 'Manual — retain the base year', dialog);
        await fill('session_year', '2027', dialog);
        await responseAfter(
          () => dialog.getByRole('button', { name: 'Save record', exact: true }).click(),
          '/admin/concours-directory/concours/1',
          'PUT',
        );
        return { override: 2028, annual: 2027, permanentSlug: data.slug, resourceYear: 2023 };
      },
    );
    await test(
      'preparation-track-editor',
      'Two explicit fixture grades can be created without assigning real data.',
      async () => {
        await go('/admin/concours');
        await page
          .getByRole('button', { name: "Edit Concours de l'Enseignement", exact: true })
          .click();
        const section = page.locator('.preparation-options');
        for (const grade of ['A', 'B']) {
          const existing = (
            await call('/public/concours/education-preparation')
          ).data.preparation_options.find((x) => x.name_fr === 'Grade test ' + grade);
          if (existing) {
            state['grade' + grade] = existing.id;
            continue;
          }
          await fill('name_fr', 'Grade test ' + grade, section);
          await fill('name_en', 'Fixture grade ' + grade, section);
          await fill('name_ar', 'درجة اختبار ' + grade, section);
          const value = await responseAfter(
            () => section.locator('button[type="submit"]').click(),
            '/preparation-options',
            'POST',
          );
          state['grade' + grade] = value.find((x) => x.name_fr === 'Grade test ' + grade).id;
        }
        await shot('admin-tracks');
        await page
          .locator('dialog[open]')
          .getByRole('button', { name: 'Cancel', exact: true })
          .click();
        return { gradeA: state.gradeA, gradeB: state.gradeB };
      },
    );
    await test(
      'pdf-correction-editor',
      'PDF #3 retains its link to #2; both can be scoped to the explicit fixture grade.',
      async () => {
        await go('/admin/exam-pdfs');
        for (const id of [2, 3]) {
          const row = page.locator('tbody tr').filter({ hasText: '#' + id + ' ·' });
          await row.getByRole('button', { name: 'Examiner / modifier', exact: true }).click();
          const dialog = page.getByRole('dialog');
          if (id === 3)
            assert.match(
              await dialog
                .locator('[formcontrolname="corrects_exam_pdf_id"] option:checked')
                .innerText(),
              /#2/,
            );
          await dialog.getByLabel('Grade test A', { exact: false }).check();
          await responseAfter(
            () => dialog.locator('.preparation-option-choices button').click(),
            '/preparation-options',
            'PUT',
          );
          await dialog.waitFor({ state: 'hidden' });
        }
        const data = (await call('/public/concours/education-preparation')).data;
        for (const id of [2, 3])
          assert.deepEqual(data.resources.find((x) => x.id === id).preparation_option_ids, [
            state.gradeA,
          ]);
        assert.equal(data.resources.find((x) => x.id === 3).corrects_exam_pdf_id, 2);
        return { pdfs: [2, 3], correctionOf: 2, scope: state.gradeA };
      },
    );
    await test(
      'qcm-subject-quiz-editor',
      'Existing subject and quiz candidates can be explicitly linked/scoped in the copied dataset.',
      async () => {
        await go('/admin/concours');
        await page
          .getByRole('button', { name: "Edit Concours de l'Enseignement", exact: true })
          .click();
        const editor = page.locator('app-concours-qcm-editor');
        for (const kind of ['subjects', 'quizzes']) {
          await editor.locator('select').selectOption(kind);
          await editor.locator('ul').first().locator('li').first().waitFor();
          await editor.locator('ul').first().locator('li').first().getByRole('button').click();
          await editor.getByLabel('Grade test A', { exact: false }).check();
          await responseAfter(
            () =>
              editor
                .getByRole('button', { name: 'Enregistrer l’association', exact: true })
                .click(),
            '/' + kind + '/',
            'PUT',
          );
        }
        await shot('admin-qcm-links');
        const data = (
          await call(
            '/public/concours/education-preparation/qcm?preparation_option_id=' + state.gradeA,
          )
        ).data;
        assert.ok(data.items.length > 0);
        state.quizId = data.items[0].id;
        return { firstQuiz: state.quizId, count: data.meta.total };
      },
    );
    await test(
      'manual-discovery-review',
      'Manual official URL is reviewed into a draft without fetching the source.',
      async () => {
        await go('/admin/concours-discoveries');
        await page.getByRole('button', { name: 'Ajouter un lien officiel', exact: true }).click();
        let dialog = page.locator('dialog[open]');
        await select('source_id', 'Emploi Public', dialog);
        await fill('title', 'PHASE 7B — fixture de révision uniquement', dialog);
        await fill(
          'official_url',
          'https://www.emploi-public.ma/phase7b-fixture-never-fetch',
          dialog,
        );
        await responseAfter(
          () => dialog.locator('button[type="submit"]').click(),
          '/admin/concours-discovery/discoveries',
          'POST',
        );
        await page.getByRole('button', { name: 'Examiner', exact: true }).first().click();
        dialog = page.locator('dialog[open]');
        await select('concours_id', "Concours de l'Enseignement", dialog);
        await fill('session_year', '2027', dialog);
        await fill(
          'review_note',
          'Controlled fixture in a separate database; no real source was checked.',
          dialog,
        );
        await dialog.locator('[formcontrolname="source_checked"]').check();
        const data = await responseAfter(
          () =>
            dialog
              .getByRole('button', { name: 'Approuver et créer un brouillon', exact: true })
              .click(),
          '/review',
          'POST',
        );
        state.discoveryAnnouncement = data.announcement_id;
        const announcement = await call(
          '/admin/concours-announcements/' + state.discoveryAnnouncement,
          adminToken,
        );
        assert.equal(announcement.data.publication_status, 'draft');
        assert.equal(announcement.data.verification_status, 'draft');
        await shot('admin-discovery-reviewed');
        return { draftId: state.discoveryAnnouncement, automaticPublication: false };
      },
    );
    await test(
      'announcement-draft-publish',
      'Explicit UI verification publishes an URL-only fixture; nothing is published on creation.',
      async () => {
        await go('/admin/concours-announcements');
        await page.getByRole('button', { name: 'Add announcement', exact: false }).click();
        const dialog = page.locator('dialog[open]');
        await select('concours_id', "Concours de l'Enseignement", dialog);
        await fill('title_fr', 'PHASE 7B — annonce courante de test', dialog);
        await fill(
          'official_source_url',
          'https://www.emploi-public.ma/phase7b-fixture-never-fetch',
          dialog,
        );
        await fill('registration_opens_on', '2026-10-01', dialog);
        await fill('registration_deadline', '2026-12-01', dialog);
        const draft = await responseAfter(
          () => dialog.getByRole('button', { name: 'Save draft', exact: true }).click(),
          '/admin/concours-announcements',
          'POST',
        );
        state.announcementId = draft.id;
        assert.equal(draft.publication_status, 'draft');
        await dialog.locator('.confirmation-check input').check();
        await responseAfter(
          () => dialog.getByRole('button', { name: 'Verify & publish', exact: true }).click(),
          '/verify-publish',
          'POST',
        );
        const item = (await call('/admin/concours-announcements/' + draft.id, adminToken)).data;
        assert.equal(item.publication_status, 'published');
        assert.equal(item.verification_status, 'verified');
        state.announcementSlug = item.slug;
        await shot('admin-published');
        return {
          id: item.id,
          state: item.publication_status,
          verification: item.verification_status,
        };
      },
    );
    await test(
      'public-current-expired-fixtures',
      'Current/expired verified fixtures show correct status, safe original source and permanent canonical.',
      async () => {
        await go('/concours/education-preparation');
        await page
          .locator('app-announcement-card')
          .filter({ hasText: 'PHASE 7B — annonce courante de test' })
          .waitFor();
        const card = page
          .locator('app-announcement-card')
          .filter({ hasText: 'PHASE 7B — annonce courante de test' });
        assert.equal(await card.locator('[data-status]').getAttribute('data-status'), 'open');
        assert.equal(await card.locator('app-concours-pdf').count(), 0);
        assert.equal(
          await page.locator('link[rel="canonical"]').getAttribute('href'),
          'https://maroquiz.com/concours/education-preparation',
        );
        await shot('public-current-fixture');
        const created = await call('/admin/concours-announcements', adminToken, 'POST', {
          concours_id: 1,
          institution_id: 2,
          title_fr: 'PHASE 7B — annonce expirée de test',
          session_year: 2027,
          registration_opens_on: '2026-01-01',
          registration_deadline: '2026-02-01',
          official_source_url: 'https://www.emploi-public.ma/phase7b-expired-fixture',
        });
        assert.equal(created.status, 201, JSON.stringify(created));
        const published = await call(
          '/admin/concours-announcements/' + created.data.id + '/verify-publish',
          adminToken,
          'POST',
          { version: created.data.version, source_checked: true },
        );
        assert.equal(published.status, 200, JSON.stringify(published));
        state.expiredAnnouncement = created.data.id;
        await go('/concours/education-preparation');
        const expired = page
          .locator('app-announcement-card')
          .filter({ hasText: 'PHASE 7B — annonce expirée de test' });
        await expired.waitFor();
        assert.equal(await expired.locator('[data-status]').getAttribute('data-status'), 'closed');
        await shot('public-expired-fixture');
        return 'Current=open, expired=closed, no fabricated PDF, permanent canonical retained; expired fixture created through actual API.';
      },
    );
    await test(
      'grade-filter-ui',
      'Grade A retains PDFs/correction/QCM; grade B excludes them, without changing stored associations.',
      async () => {
        await go('/concours/education-preparation');
        const filter = page.locator('.preparation-filter select');
        await filter.selectOption({ label: 'Grade test A' });
        await page.waitForTimeout(500);
        assert.ok(await page.locator('#past-papers a[href$="/2/view"]').count());
        assert.ok(await page.locator('#past-papers a[href$="/3/view"]').count());
        await page.locator('#qcm .qcm-card').first().waitFor();
        await shot('grade-a');
        await filter.selectOption({ label: 'Grade test B' });
        await page.waitForTimeout(500);
        assert.equal(await page.locator('#past-papers a[href$="/2/view"]').count(), 0);
        assert.equal(await page.locator('#past-papers a[href$="/3/view"]').count(), 0);
        assert.equal(await page.locator('#qcm .qcm-card').count(), 0);
        await shot('grade-b');
        return 'Explicit A/B fixture associations match in both PDF and QCM sections.';
      },
    );
    await ctx.unrouteAll({ behavior: 'ignoreErrors' });
    await ctx.close();
    ctx = await context(userToken);
    page = await ctx.newPage();
    await test(
      'follow-preferences-dashboard',
      'A fixture user follows, saves grade/event/reminder preferences and sees the dashboard entry.',
      async () => {
        let existing = (await call('/me/concours-follows/1', userToken)).data;
        if (existing.active) {
          const saved = await call('/me/concours-follows/1', userToken, 'PUT', {
            ...existing,
            active: false,
          });
          assert.equal(saved.status, 200);
        }
        await go('/concours/education-preparation');
        const control = page.locator('app-concours-follow');
        await page.waitForFunction(() => {
          const b = document.querySelector('app-concours-follow button');
          return b && !b.disabled && !!document.querySelector('.header.is-authenticated');
        });
        await page.waitForTimeout(1000);
        await responseAfter(
          () => control.locator('button.follow-action').first().click(),
          '/me/concours-follows/1',
          'PUT',
        );
        await control.locator('summary').click();
        await control.locator('select[name="tracks"]').selectOption({ label: 'Grade test A' });
        await control.locator('[name="updates"]').uncheck();
        await responseAfter(
          () => control.locator('button[type="submit"]').click(),
          '/me/concours-follows/1',
          'PUT',
        );
        let data = (await call('/me/concours-follows/1', userToken)).data;
        assert.equal(data.active, true);
        assert.deepEqual(data.preparation_option_ids, [state.gradeA]);
        assert.equal(data.updates, false);
        assert.equal(
          await control
            .getByRole('button', { name: 'Activer ce navigateur', exact: false })
            .count(),
          0,
        );
        assert.equal(await page.evaluate(() => window.__permissionRequests), 0);
        await shot('user-follow-preferences');
        await go('/app/dashboard');
        await page
          .locator('app-followed-concours a[href="/concours/education-preparation"]')
          .waitFor();
        await shot('user-dashboard');
        return { active: true, grade: state.gradeA, updates: false, reminders: data.reminder_days };
      },
    );
    await test(
      'qcm-launch',
      'An associated QCM opens the existing quiz flow using a fixture account in the copy.',
      async () => {
        assert.ok(state.quizId);
        await go('/concours/education-preparation');
        await page.locator('#qcm .qcm-card a').first().click();
        await page.waitForURL('**/app/quiz/*');
        await page.locator('.active-quiz-container .question-card h3').waitFor();
        assert.ok((await page.locator('.active-quiz-container .options-list button').count()) >= 2);
        await shot('user-quiz-launch');
        return { quiz: state.quizId, path: new URL(page.url()).pathname };
      },
    );
    await test(
      'unfollow-dashboard',
      'Unfollowing the fixture concours removes the dashboard item and deactivates the same row.',
      async () => {
        await go('/concours/education-preparation');
        const control = page.locator('app-concours-follow');
        await page.waitForFunction(() => {
          const b = document.querySelector('app-concours-follow button');
          return b && !b.disabled && !!document.querySelector('.header.is-authenticated');
        });
        await page.waitForTimeout(1000);
        await responseAfter(
          () => control.locator('button.follow-action').first().click(),
          '/me/concours-follows/1',
          'PUT',
        );
        assert.equal((await call('/me/concours-follows/1', userToken)).data.active, false);
        await go('/app/dashboard');
        await page.waitForTimeout(600);
        assert.equal(
          await page
            .locator('app-followed-concours a[href="/concours/education-preparation"]')
            .count(),
          0,
        );
        return 'Same follow is inactive and absent from the fixture dashboard.';
      },
    );
    await test(
      'role-authorization',
      'Guest/user/manager cannot use Concours admin APIs; admin can.',
      async () => {
        const manager = await login('manager');
        for (const route of [
          '/admin/concours-directory/concours',
          '/admin/concours-announcements',
          '/admin/concours-discovery/sources',
        ]) {
          assert.equal((await call(route)).status, 401);
          assert.equal((await call(route, userToken)).status, 403);
          assert.equal((await call(route, manager)).status, 403);
          assert.equal((await call(route, adminToken)).status, 200);
        }
        return '401 guest; 403 user/manager; 200 admin, on all three admin resource groups.';
      },
    );
    await ctx.unrouteAll({ behavior: 'ignoreErrors' });
    await ctx.close();
    ctx = await context(null);
    page = await ctx.newPage();
    await test(
      'login-return-url',
      'Guest follow routes to login and successful fixture login returns to the permanent page.',
      async () => {
        await go('/concours/education-preparation');
        await page.locator('app-concours-follow button').first().click();
        await page.waitForURL('**/login?returnUrl=*');
        await page.locator('[formcontrolname="email"]').fill('phase7b-user@example.test');
        await page.locator('[formcontrolname="password"]').fill('AcceptanceFixture42!Only');
        await page.locator('app-login-form button[type="submit"]').click();
        await page.waitForURL('**/concours/education-preparation');
        await page.locator('app-concours-follow button:not([disabled])').waitFor();
        assert.equal(await page.evaluate(() => window.__permissionRequests), 0);
        await shot('user-login-return');
        return 'Actual login form + actual Laravel password validation passed; only CAPTCHA was controlled.';
      },
    );
    await test(
      'password-session-revocation',
      'Changing the fixture password invalidates old JWT/refresh and allows fresh login.',
      async () => {
        const old = await login('user');
        const changed = await call('/user/change-password', old, 'PUT', {
          currentPassword: 'AcceptanceFixture42!Only',
          newPassword: 'AcceptanceFixture43!Only',
        });
        assert.equal(changed.status, 200, JSON.stringify(changed));
        assert.equal((await call('/auth/me', old)).status, 401);
        assert.equal((await call('/auth/refresh', old, 'POST', {})).status, 401);
        const fresh = await login('user', 'AcceptanceFixture43!Only');
        assert.equal((await call('/me/concours-follows', fresh)).status, 200);
        return 'Old authenticated requests/refresh rejected; fresh credentials work, only fixture password changed.';
      },
    );
    await ctx.unrouteAll({ behavior: 'ignoreErrors' });
    await ctx.close();
    ctx = await context(adminToken);
    page = await ctx.newPage();
    await test(
      'withdraw-archive-history',
      'Published fixture can be withdrawn, republished and archived, preserving revisions.',
      async () => {
        assert.ok(state.announcementId);
        await go('/admin/concours-announcements?announcement=' + state.announcementId);
        let dialog = page.locator('dialog.announcement-editor[open]');
        await dialog.waitFor();
        await dialog.getByRole('button', { name: 'Withdraw to edit', exact: true }).click();
        await responseAfter(
          () =>
            page.locator('dialog[aria-labelledby="transition-title"] button.primary-btn').click(),
          '/withdraw',
          'POST',
        );
        assert.equal(
          (await call('/admin/concours-announcements/' + state.announcementId, adminToken)).data
            .publication_status,
          'withdrawn',
        );
        await dialog.locator('.confirmation-check input').check();
        await responseAfter(
          () => dialog.getByRole('button', { name: 'Verify & publish', exact: true }).click(),
          '/verify-publish',
          'POST',
        );
        await dialog.getByRole('button', { name: 'Archive', exact: true }).click();
        await responseAfter(
          () =>
            page.locator('dialog[aria-labelledby="transition-title"] button.primary-btn').click(),
          '/archive',
          'POST',
        );
        assert.equal(
          (await call('/admin/concours-announcements/' + state.announcementId, adminToken)).data
            .publication_status,
          'archived',
        );
        const history = (
          await call(
            '/admin/concours-announcements/' + state.announcementId + '/revisions',
            adminToken,
          )
        ).data.items;
        assert.ok(history.length >= 5);
        await shot('admin-archived-history');
        return { state: 'archived', retainedRevisions: history.length };
      },
    );
    await ctx.unrouteAll({ behavior: 'ignoreErrors' });
    await ctx.close();
  } finally {
    await browser.close();
  }
  console.log(
    JSON.stringify({
      passed: results.filter((x) => x.status === 'PASS').length,
      failed: results.filter((x) => x.status === 'FAIL').length,
    }),
  );
  process.exitCode = results.some((x) => x.status === 'FAIL') ? 1 : 0;
})().catch((error) => {
  console.error(error);
  process.exitCode = 1;
});
