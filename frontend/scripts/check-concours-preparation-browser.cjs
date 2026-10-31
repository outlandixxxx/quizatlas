// Populated UI fixtures only. No application records/files are created or modified.
// Start the existing loopback production preview before running this check.
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
const api = 'http://localhost:8000/api/v1';
const withDiscovery = process.argv.includes('--discovery');
const withQcm = withDiscovery || process.argv.includes('--qcm');
const filters = withQcm || process.argv.includes('--filters');
const output = process.env.CONCOURS_SCREENSHOT_DIR || path.join(
  root,
  'frontend/artifacts',
  withDiscovery
    ? 'concours-phase5'
    : withQcm
    ? 'concours-phase4b'
    : filters
      ? 'concours-preparation-filters'
      : 'concours-phase4a-fixtures',
);
const empty = {
  data: { items: [], meta: { current_page: 1, last_page: 1, total: 0, per_page: 12 } },
};
const paper = (id, year = 2024, extra = {}) => ({
  id,
  year,
  title: `TEST FIXTURE — Paper ${id}`,
  document_type: 'previous_exam',
  subject: 'Mathématiques',
  specialty: 'Grade A',
  file_size: '1 KB',
  source_url: null,
  attribution: null,
  available: true,
  download_allowed: true,
  view_path: `/public/concours-pdfs/${id}/view`,
  download_path: `/public/concours-pdfs/${id}/download`,
  ...extra,
});
const qcmFixture = (option = '', requestedPage = 1) => {
  const ids =
    option === '10' || option === '11'
      ? [500, 501]
      : option === '12'
        ? [500, ...Array.from({ length: 11 }, (_, i) => 502 + i)]
        : Array.from({ length: 13 }, (_, i) => 500 + i);
  return {
    items: ids
      .slice((requestedPage - 1) * 12, requestedPage * 12)
      .map((id) => ({
        id,
        title: `TEST FIXTURE — QCM ${id}`,
        subject_name: 'Mathématiques',
        questions_count: 8,
        duration: 15,
        difficulty: 'Beginner',
      })),
    meta: {
      current_page: requestedPage,
      last_page: Math.ceil(ids.length / 12),
      per_page: 12,
      total: ids.length,
    },
  };
};

(async () => {
  const response = await fetch(api + '/public/concours?per_page=100');
  assert.equal(response.status, 200);
  const directory = await response.json();
  const record = directory.data.items[0];
  assert.ok(record);
  const detail = await fetch(api + '/public/concours/' + encodeURIComponent(record.slug));
  assert.equal(detail.status, 200);
  const prepared = await detail.json();
  if (withQcm) prepared.data.preparation_qcm = qcmFixture();
  if (withDiscovery) {
    prepared.data.displayed_session_year = 2026;
    prepared.data.current_announcements = [{
      id: 900, concours_id: record.id, concours: record, institution: record.institution,
      slug: 'fixture-url-only', title_fr: 'TEST FIXTURE — Official URL announcement', title_ar: null,
      official_source_url: 'https://www.emploi-public.ma/fixture-notice?round=1',
      official_pdf: null, session_year: 2026, verification_status: 'verified', publication_status: 'published',
      registration_status: 'unknown', announcement_status: 'published', registration_deadline: null,
      registration_opens_on: null, examination_date: null, preparation_option_ids: [11],
    }];
  }

  prepared.data.resources = [
    ...Array.from({ length: 13 }, (_, i) =>
      paper(100 + i, 2024, { preparation_option_ids: filters ? [11] : [] }),
    ),
    paper(300, 2023),
    paper(200, 2024, {
      title: 'TEST FIXTURE — Correction A',
      document_type: 'correction',
      corrects_exam_pdf_id: 100,
      download_allowed: false,
      preparation_option_ids: filters ? [11] : [],
    }),
    paper(201, 2024, {
      title: 'TEST FIXTURE — Correction B',
      document_type: 'correction',
      corrects_exam_pdf_id: 100,
      preparation_option_ids: filters ? [12] : [],
    }),
  ];
  if (filters) {
    prepared.data.preparation_options = [
      {
        id: 10,
        concours_id: record.id,
        parent_id: null,
        name_fr: 'Secondaire',
        name_en: 'Secondary',
        name_ar: 'ثانوي',
        display_order: 0,
        is_active: true,
      },
      {
        id: 11,
        concours_id: record.id,
        parent_id: 10,
        name_fr: 'Collège',
        name_en: 'Middle school',
        name_ar: 'إعدادي',
        display_order: 0,
        is_active: true,
      },
      {
        id: 12,
        concours_id: record.id,
        parent_id: null,
        name_fr: 'Lycée',
        name_en: 'High school',
        name_ar: 'ثانوي تأهيلي',
        display_order: 1,
        is_active: true,
      },
    ];
    prepared.data.resources.push(
      paper(400, 2024, { document_type: 'summary', preparation_option_ids: [12] }),
      paper(401, 2024, { document_type: 'preparation_guide', preparation_option_ids: [11] }),
    );
  }
  const browser = await chromium.launch({
    headless: true,
    args: ['--no-sandbox', '--disable-dev-shm-usage'],
  });
  const results = [];
  fs.mkdirSync(output, { recursive: true });
  try {
    for (const [language, size, width] of [
      ['fr', 'desktop', 1440],
      ['en', 'tablet', 820],
      ['fr', 'mobile', 390],
      ['ar', 'mobile', 390],
    ]) {
      await new Promise((resolve) => setTimeout(resolve, 15000));
      const context = await browser.newContext({ viewport: { width, height: 1000 } });
      await context.addInitScript((lang) => {
        localStorage.setItem('quizatlas.language', lang);
        localStorage.setItem('quizatlas.theme', 'light');
      }, language);
      await context.route('https://api.maroquiz.com/api/v1/**', async (route) => {
        const requestedUrl = new URL(route.request().url());
        const pathname = requestedUrl.pathname;
        let body;
        if (pathname.endsWith('/public/concours/' + encodeURIComponent(record.slug) + '/qcm'))
          body = withQcm
            ? {
                data: qcmFixture(
                  requestedUrl.searchParams.get('preparation_option_id') || '',
                  Number(requestedUrl.searchParams.get('page') || 1),
                ),
              }
            : empty;
        else if (pathname.endsWith('/public/concours/' + encodeURIComponent(record.slug)))
          body = prepared;
        else if (pathname.endsWith('/public/concours')) body = directory;
        else if (
          /\/public\/(concours-announcements|concours-categories|concours-institutions)$/.test(
            pathname,
          )
        )
          body = empty;
        else throw new Error('Unexpected request in preparation browser fixture: ' + pathname);
        await route.fulfill({ status: 200, json: body });
      });
      const page = await context.newPage();
      const errors = [];
      page.on('pageerror', (error) => errors.push(error.message));
      assert.equal(
        (await page.goto(origin + '/concours', { waitUntil: 'domcontentloaded' })).status(),
        200,
      );
      await page.waitForFunction(
        (lang) =>
          document.documentElement.lang === lang &&
          !!document.querySelector('app-announcement-list > div[aria-busy="false"]'),
        language,
      );
      await page.locator(`app-concours-card a[href="/concours/${record.slug}"]`).first().click();
      if (withDiscovery) {
        const official = page.locator('#official-announcement');
        await official.locator('app-announcement-card').waitFor();
        assert.equal(await official.locator('app-announcement-card').count(), 1);
        assert.ok((await official.innerText()).includes('TEST FIXTURE — Official URL announcement'));
        assert.equal(await official.locator('app-concours-pdf').count(), 0);
        const sourceLink = official.locator('a[href="https://www.emploi-public.ma/fixture-notice?round=1"]');
        assert.equal(await sourceLink.count(), 1);
        assert.equal(await sourceLink.getAttribute('rel'), 'noopener noreferrer');
        assert.ok((await page.locator('link[rel=canonical]').getAttribute('href')).endsWith('/concours/' + record.slug));
      }
      const section = page.locator('#past-papers');
      const waitForRows = (count) =>
        page.waitForFunction(
          (expected) =>
            document.querySelectorAll('#past-papers .exam-with-corrections').length === expected,
          count,
        );
      await section.locator('.exam-with-corrections').first().waitFor();
      assert.equal(await section.locator('.exam-with-corrections').count(), 12);
      assert.equal(
        await section.locator('.exam-with-corrections').first().locator('app-concours-pdf').count(),
        3,
      );
      assert.equal(await section.locator('a[href$="/200/download"]').count(), 0);
      assert.equal(
        await page.locator('html').getAttribute('dir'),
        language === 'ar' ? 'rtl' : 'ltr',
      );
      assert.ok(
        await section.evaluate((el) => el.scrollWidth <= el.clientWidth + 1),
        'Populated filters/cards fit the viewport.',
      );
      if (filters) {
        const selection = page.locator('#preparation-option');
        await selection.selectOption('10');
        await waitForRows(12);
        await page.waitForFunction(
          () =>
            document.querySelectorAll(
              '#past-papers .exam-with-corrections:first-child app-concours-pdf',
            ).length === 2,
        );
        await section.locator('.paper-pagination button').last().click();
        await waitForRows(1);
        await selection.selectOption('12');
        await waitForRows(1);
        await page.waitForFunction(
          () => !!document.querySelector('#past-papers a[href$="/201/view"]'),
        );
        assert.equal(await section.locator('a[href$="/201/view"]').count(), 1);
        assert.equal(await section.locator('a[href$="/200/view"]').count(), 0);
        assert.equal(await page.locator('#summaries app-concours-pdf').count(), 1);
        assert.equal(await page.locator('#guides app-concours-pdf').count(), 0);
        assert.ok(
          await page
            .locator('.preparation-filter')
            .evaluate((el) => el.scrollWidth <= el.clientWidth + 1),
        );
        assert.ok(!page.url().includes('?'), 'Preparation selections must not introduce URLs.');
        await selection.selectOption('');
        await waitForRows(12);
      }
      if (withQcm) {
        const qcm = page.locator('#qcm');
        const waitForQcm = (count) =>
          page.waitForFunction(
            (expected) =>
              document.querySelector('#qcm [aria-busy]')?.getAttribute('aria-busy') === 'false' &&
              document.querySelectorAll('#qcm .qcm-card').length === expected,
            count,
          );
        await waitForQcm(12);
        assert.equal(await qcm.locator('a[href="/app/quiz/500"]').count(), 1);
        await qcm.locator('nav button').last().click();
        await waitForQcm(1);
        assert.equal(await qcm.locator('a[href="/app/quiz/512"]').count(), 1);
        await page.locator('#preparation-option').selectOption('10');
        await waitForQcm(2);
        assert.equal(await qcm.locator('a[href="/app/quiz/500"]').count(), 1);
        assert.equal(await qcm.locator('a[href="/app/quiz/501"]').count(), 1);
        await page.locator('#preparation-option').selectOption('12');
        await waitForQcm(12);
        assert.equal(await qcm.locator('a[href="/app/quiz/501"]').count(), 0);
        await page.locator('#preparation-option').selectOption('');
        await waitForQcm(12);
        await waitForRows(12);
        assert.ok(
          await qcm.evaluate((el) => el.scrollWidth <= el.clientWidth + 1),
          'QCM cards fit desktop/mobile/RTL viewports.',
        );
        await qcm.screenshot({
          path: path.join(output, `qcm-${size}-${language}.png`),
          style: 'app-public-header { visibility: hidden !important; }',
        });
        await page
          .locator('.preparation-filter')
          .screenshot({
            path: path.join(output, `filter-${size}-${language}.png`),
            style: 'app-public-header { visibility: hidden !important; }',
          });
      }
      await section.locator('select').selectOption('2023');
      await waitForRows(1);
      assert.equal(await section.locator('.exam-with-corrections').count(), 1);
      assert.ok((await section.innerText()).includes('Paper 300'));
      await section.locator('input[type=search]').fill('missing fixture');
      await waitForRows(0);
      assert.equal(await section.locator('.exam-with-corrections').count(), 0);
      await section.locator('input[type=search]').fill('');
      await section.locator('select').selectOption('');
      await waitForRows(12);
      await section.locator('.paper-pagination button').last().click();
      await waitForRows(2);
      assert.equal(await section.locator('.exam-with-corrections').count(), 2);
      await section.locator('.paper-pagination button').first().click();
      await waitForRows(12);
      await section.scrollIntoViewIfNeeded();
      await section.screenshot({
        path: path.join(output, `preparation-fixture-${size}-${language}.png`),
        // Component-only capture: keep the unchanged sticky navbar out of this crop.
        style: filters ? 'app-public-header { visibility: hidden !important; }' : undefined,
      });
      assert.deepEqual(errors, []);
      results.push({
        language,
        size,
        width,
        populated: true,
        filters: true,
        pagination: true,
        overflow: false,
        qcm: withQcm,
        urlOnlyAnnouncement: withDiscovery,
      });
      await context.close();
    }
  } finally {
    await browser.close();
  }
  fs.writeFileSync(path.join(output, 'verification.json'), JSON.stringify(results, null, 2));
  console.log(
    'Populated preparation browser checks passed:',
    results.length,
    'desktop/tablet/mobile/Arabic RTL cases. All preparation documents were browser fixtures.',
  );
})().catch((error) => {
  console.error(error);
  process.exitCode = 1;
});
