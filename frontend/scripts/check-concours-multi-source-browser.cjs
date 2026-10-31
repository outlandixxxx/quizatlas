// Production frontend, fully intercepted admin API. No real account, writes or collection.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const root = path.resolve(__dirname, '../..');
const { chromium } = require(
  require.resolve('playwright', { paths: [path.join(root, 'fact-generator')] }),
);
const output = path.join(root, 'frontend/artifacts/concours-phase5c/admin');
const meta = { current_page: 1, last_page: 1, total: 1, per_page: 15 };
const source = (id, key, host) => ({
  id,
  key,
  name: `TEST FIXTURE ${key} (tiers)`,
  source_kind: 'third_party',
  official_url: `https://${host}/`,
  listing_url: `https://${host}/feed/`,
  collection_method: 'rss_atom',
  enabled: false,
  permission_status: 'unknown',
  permission_evidence: null,
  permission_checked_at: null,
  check_interval_minutes: 720,
  last_attempt_at: null,
  last_success_at: null,
  last_error: null,
  version: 1,
  automated_ready: false,
});

(async () => {
  fs.mkdirSync(output, { recursive: true });
  const browser = await chromium.launch({
    headless: true,
    args: ['--no-sandbox', '--disable-dev-shm-usage'],
  });
  const results = [];
  try {
    for (const [lang, width] of [
      ['fr', 1440],
      ['en', 820],
      ['ar', 390],
    ]) {
      const sources = [
        source(8, 'alwadifa-maroc', 'alwadifa-maroc.com'),
        source(9, 'dreamjob', 'www.dreamjob.ma'),
        source(10, 'orientation-chabab', 'orientation-chabab.com'),
      ];
      let record = {
        id: 101,
        source_id: 8,
        source: sources[0],
        source_identifier: 'fixture-one',
        title: 'TEST FIXTURE — Ministère: concours de recrutement',
        official_url: null,
        source_article_url: 'https://alwadifa-maroc.com/fixture/article',
        publication_date: '2026-10-26',
        application_deadline: null,
        institution: null,
        session_year: null,
        grade: null,
        specialty: null,
        candidate_category: 'employment',
        candidate_type: 'opening',
        official_verified_at: null,
        verified_identity: null,
        official_identifier: null,
        is_stale: false,
        status: 'pending',
        version: 1,
        announcement_id: null,
        review_note: null,
        first_seen_at: '2026-10-26',
        last_seen_at: '2026-10-26',
      };
      let other = {
        ...record,
        id: 102,
        source_id: 9,
        source: sources[1],
        version: 2,
        source_article_url: 'https://www.dreamjob.ma/fixture/article',
        official_url: 'https://www.emploi-public.ma/fixture-notice',
        official_verified_at: '2026-10-26T12:00:00Z',
      };
      let decision = null;
      const writes = [],
        errors = [];
      const context = await browser.newContext({ viewport: { width, height: 1000 } });
      await context.addInitScript((language) => {
        localStorage.setItem('quizatlas.language', language);
        localStorage.setItem('quizatlas.theme', 'light');
        localStorage.setItem('quizatlas_access_token', 'CONTROLLED_PHASE5C_ADMIN_FIXTURE_ONLY');
        window.__phase5cPermissionCalls = 0;
        if ('Notification' in window)
          Notification.requestPermission = async () => {
            window.__phase5cPermissionCalls++;
            return 'denied';
          };
      }, lang);
      await context.route('https://api.maroquiz.com/api/v1/**', async (route) => {
        const request = route.request(),
          url = new URL(request.url()),
          name = url.pathname.replace('/api/v1', '');
        let data;
        if (name === '/auth/me')
          data = {
            id: 99901,
            name: 'TEST FIXTURE ADMIN',
            username: 'fixture-admin',
            role: 'admin',
            email: 'fixture@example.test',
            preferences: {},
          };
        else if (name === '/admin/concours-discovery/sources') data = sources;
        else if (name === '/admin/concours-directory/concours')
          data = {
            items: [
              {
                id: 1,
                name_fr: 'Existing fixture concours',
                name_ar: 'تجربة',
                institution_id: 2,
                preparation_options: [],
              },
            ],
            meta,
          };
        else if (name === '/admin/concours-directory/institutions')
          data = { items: [{ id: 2, name_fr: 'Fixture institution' }], meta };
        else if (name === '/admin/concours-discovery/discoveries') data = { items: [record], meta };
        else if (name.endsWith('/101/revisions')) data = { items: [], meta: { ...meta, total: 0 } };
        else if (name.endsWith('/101/matches') && request.method() === 'GET')
          data = record.official_verified_at
            ? [{ discovery: other, reason: 'verified_official_url', decision, note: null }]
            : [];
        else if (name.endsWith('/101/matches') && request.method() === 'POST') {
          const payload = request.postDataJSON();
          writes.push(payload);
          decision = payload.decision;
          assert.equal(payload.version, record.version);
          assert.equal(payload.other_version, other.version);
          record = { ...record, version: record.version + 1 };
          other = { ...other, version: other.version + 1 };
          data = record;
        } else if (name.endsWith('/101/review')) {
          const payload = request.postDataJSON();
          writes.push(payload);
          assert.equal(payload.version, record.version);
          if (payload.action === 'verify_source')
            record = {
              ...record,
              official_url: payload.official_url,
              candidate_category: payload.candidate_category,
              candidate_type: payload.candidate_type,
              verified_identity: payload.verified_identity,
              official_identifier: payload.official_identifier,
              official_verified_at: '2026-10-26T12:00:00Z',
              version: record.version + 1,
            };
          else {
            assert.equal(decision, 'confirmed');
            record = {
              ...record,
              status: 'approved',
              announcement_id: 99901,
              version: record.version + 1,
            };
          }
          data = record;
        } else if (
          name === '/notifications/unread-count' ||
          name === '/chat/conversations/unread-count'
        )
          data = { count: 0 };
        else if (name === '/admin/dashboard') data = {};
        else {
          errors.push('Unexpected API ' + request.method() + ' ' + name);
          return route.fulfill({ status: 500, json: { message: 'Unexpected fixture API' } });
        }
        await route.fulfill({ json: { success: true, data } });
      });
      const page = await context.newPage();
      page.on('pageerror', (error) => errors.push(error.message));
      await page.goto('http://localhost:4301/admin/concours-discoveries', {
        waitUntil: 'domcontentloaded',
        timeout: 60000,
      });
      await page.getByRole('button', { name: 'Examiner', exact: true }).waitFor({ timeout: 30000 });
      await page.locator('select[name=candidate_category]').selectOption('academic');
      await page.getByRole('button', { name: 'Rechercher', exact: true }).click();
      await page.getByRole('button', { name: 'Examiner', exact: true }).click();
      const dialog = page.locator('dialog[aria-labelledby=review-title]');
      await dialog.waitFor({ state: 'visible' });
      const appearance = await dialog.evaluate((el) => {
        const action = el.querySelector('button.secondary-btn');
        return {
          width: el.getBoundingClientRect().width,
          radius: Number.parseFloat(getComputedStyle(action).borderRadius),
          height: action.getBoundingClientRect().height,
          fits: el.scrollWidth <= el.clientWidth + 1,
        };
      });
      assert.ok(
        appearance.radius >= 10 && appearance.height >= 32,
        'existing branded button styles must apply inside dialogs: ' + JSON.stringify(appearance),
      );
      assert.ok(appearance.fits, 'pending dialog controls overflow');
      if (width > 1000)
        assert.ok(
          appearance.width >= 700,
          'discovery dialog must not inherit the unrelated 440px cap',
        );
      assert.equal(
        await dialog.locator('a[href="https://alwadifa-maroc.com/fixture/article"]').count(),
        1,
      );
      assert.equal(await dialog.locator('a[href*="emploi-public.ma"]').count(), 0);
      await dialog.locator('[formControlName=official_url]').fill(other.official_url);
      await dialog.locator('[formControlName=source_checked]').check();
      await dialog.getByRole('button', { name: 'Enregistrer la vérification officielle' }).click();
      await dialog.getByRole('button', { name: 'Confirmer la même annonce' }).waitFor();
      await dialog
        .locator('[name=duplicateNote]')
        .fill('Controlled comparison of the same official notice');
      await dialog.locator('[formControlName=source_checked]').check();
      await dialog.getByRole('button', { name: 'Confirmer la même annonce' }).click();
      await page.waitForFunction(
        () => document.querySelector('input[name=duplicateNote]')?.value === '',
      );
      await dialog
        .locator('[formControlName=concours_id]')
        .selectOption({ label: 'Existing fixture concours' });
      await dialog.locator('[formControlName=source_checked]').check();
      await dialog.getByRole('button', { name: 'Approuver et créer un brouillon' }).click();
      await dialog.getByRole('link', { name: 'Ouvrir l’annonce #99901' }).waitFor();
      assert.equal(writes.length, 3);
      assert.equal(writes[0].action, 'verify_source');
      assert.equal(writes[1].decision, 'confirmed');
      assert.equal(writes[2].action, 'approve');
      assert.equal(await page.evaluate(() => window.__phase5cPermissionCalls), 0);
      // The existing admin shell intentionally fixes English/LTR. Exercise the
      // discovery dialog in RTL separately without changing that product behavior.
      assert.equal(await page.evaluate(() => document.documentElement.dir), 'ltr');
      if (lang === 'ar')
        await dialog.evaluate((el) => {
          el.dir = 'rtl';
        });
      assert.ok(
        await page.evaluate(() => document.documentElement.scrollWidth <= innerWidth + 1),
        'document overflow',
      );
      assert.ok(
        await dialog.evaluate((el) => el.scrollWidth <= el.clientWidth + 1),
        'dialog overflow',
      );
      assert.deepEqual(errors, []);
      await dialog
        .locator('.duplicate-candidate')
        .screenshot({ path: path.join(output, `match-${lang}-${width}.png`) });
      await dialog.evaluate((el) => {
        el.scrollTop = 0;
      });
      await page.screenshot({ path: path.join(output, `${lang}-${width}.png`), fullPage: true });
      results.push({
        preference_language: lang,
        width,
        admin_direction: 'ltr',
        dialog_direction: lang === 'ar' ? 'rtl (test-only)' : 'ltr',
        result: 'PASS',
        fixture_writes: writes.length,
        real_writes: 0,
        native_permission_calls: 0,
      });
      console.log(
        `PASS admin ${lang} ${width}px: attribution, verification, grouping, draft, no overflow`,
      );
      await context.close();
    }
    fs.writeFileSync(
      path.join(output, 'verification.json'),
      JSON.stringify(results, null, 2) + '\n',
    );
  } finally {
    await browser.close();
  }
})().catch((error) => {
  console.error(error);
  process.exitCode = 1;
});
