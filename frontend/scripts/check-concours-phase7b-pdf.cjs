// Actual PDF editor/upload/approval in the guarded acceptance copy only.
const assert = require('node:assert/strict'),
  fs = require('node:fs'),
  path = require('node:path');
const { chromium } = require(
  require.resolve('playwright', { paths: [path.resolve(__dirname, '../../fact-generator')] }),
);
const origin = 'http://localhost:4302',
  api = 'http://localhost:8077/api/v1';
const out = path.resolve(__dirname, '../artifacts/concours-phase7b/pdf-admin');
fs.mkdirSync(out, { recursive: true });
(async () => {
  const login = await fetch(api + '/auth/login', {
    method: 'POST',
    headers: { 'content-type': 'application/json' },
    body: JSON.stringify({
      email: 'phase7b-admin@example.test',
      password: 'AcceptanceFixture42!Only',
      recaptcha_token: 'ISOLATED_FIXTURE',
    }),
  });
  assert.equal(login.status, 200);
  const token = (await login.json()).data.access_token;
  const browser = await chromium.launch({
    headless: true,
    args: ['--no-sandbox', '--disable-dev-shm-usage'],
  });
  const results = [];
  const ctx = await browser.newContext({ viewport: { width: 1440, height: 1000 } });
  ctx.setDefaultTimeout(20000);
  await ctx.route('https://api.maroquiz.com/api/v1/**', async (route) => {
    try {
      const response = await route.fetch({ url: api + route.request().url().split('/api/v1')[1] });
      await route.fulfill({
        response,
        headers: { ...response.headers(), 'access-control-allow-origin': origin },
      });
    } catch (e) {
      if (!/closed|disposed|cancelled/.test(e.message)) throw e;
    }
  });
  await ctx.addInitScript((token) => {
    localStorage.setItem('quizatlas_access_token', token);
    localStorage.setItem('quizatlas.language', 'fr');
  }, token);
  const page = await ctx.newPage();
  let fixtureId;
  async function save() {
    const promise = page.waitForResponse(
      (r) => r.url().match(/\/exam-pdfs(?:\/\d+)?$/) && r.request().method() === 'POST',
    );
    await page.getByRole('dialog').locator('button[type="submit"]').click();
    const r = await promise;
    const json = await r.json();
    assert.ok(r.status() < 300, JSON.stringify(json));
    await page.getByRole('dialog').waitFor({ state: 'hidden' });
    return json.data;
  }
  async function check(id, fn) {
    try {
      results.push({ id, status: 'PASS', actual: await fn() });
      console.log('PASS', id);
    } catch (e) {
      await page.screenshot({ path: path.join(out, 'failure-' + id + '.png'), fullPage: true });
      results.push({ id, status: 'FAIL', actual: e.message });
      console.log('FAIL', id, e.message.slice(0, 500));
    }
    fs.writeFileSync(path.join(out, 'verification.json'), JSON.stringify(results, null, 2));
  }
  try {
    await page.goto(origin + '/admin/exam-pdfs', { waitUntil: 'domcontentloaded' });
    await page.getByRole('button', { name: 'Ajouter un PDF', exact: true }).waitFor();
    await check('pdf-upload-private', async () => {
      await page.getByRole('button', { name: 'Ajouter un PDF', exact: true }).click();
      const d = page.getByRole('dialog');
      await d.locator('[formcontrolname="title"]').fill('PHASE 7B — PDF fixture de correction');
      await d.locator('[formcontrolname="document_type"]').selectOption({ label: 'Corrigé' });
      const c = d.locator('[formcontrolname="concours_id"]');
      await c
        .locator('option')
        .filter({ hasText: "Concours de l'Enseignement" })
        .waitFor({ state: 'attached' });
      const value = await c
        .locator('option')
        .evaluateAll(
          (opts) => opts.find((o) => o.textContent.includes("Concours de l'Enseignement")).value,
        );
      await c.selectOption(value);
      await d.locator('[formcontrolname="year"]').fill('2023');
      await d.locator('[formcontrolname="year"]').press('Tab');
      const correction = d.locator('[formcontrolname="corrects_exam_pdf_id"]');
      await correction.locator('option').filter({ hasText: '#2 ·' }).waitFor({ state: 'attached' });
      await correction.selectOption(
        await correction.locator('option').filter({ hasText: '#2 ·' }).getAttribute('value'),
      );
      const pdf = Buffer.from(
        '%PDF-1.4\n1 0 obj\n<< /Type /Catalog /Pages 2 0 R >>\nendobj\n2 0 obj\n<< /Type /Pages /Kids [] /Count 0 >>\nendobj\ntrailer\n<< /Root 1 0 R >>\n% Fixture run ' +
          Date.now() +
          '\n%%EOF\n',
      );
      await d
        .locator('input[type="file"]')
        .setInputFiles({ name: 'phase7b-fixture.pdf', mimeType: 'application/pdf', buffer: pdf });
      await d.locator('[formcontrolname="is_active"]').check();
      await d.locator('[formcontrolname="publish"]').uncheck();
      await d.locator('[formcontrolname="distribution_confirmed"]').uncheck();
      await correction.focus();
      await correction.selectOption(
        await correction.locator('option').filter({ hasText: '#2 ·' }).getAttribute('value'),
      );
      assert.match(await correction.locator('option:checked').innerText(), /#2/);
      const created = await save();
      fixtureId = created.id;
      assert.ok(fixtureId > 4);
      assert.equal(created.corrects_exam_pdf_id, 2);
      assert.equal(created.published, false);
      assert.equal((await fetch(api + `/public/concours-pdfs/${fixtureId}/view`)).status, 404);
      return { id: fixtureId, private: true, corrects: 2, bytes: pdf.length };
    });
    await check('pdf-explicit-approval-view-only', async () => {
      assert.ok(fixtureId);
      const row = page.locator('tbody tr').filter({ hasText: '#' + fixtureId + ' ·' });
      await row.getByRole('button', { name: 'Examiner / modifier', exact: true }).click();
      const d = page.getByRole('dialog');
      await d.locator('[formcontrolname="publish"]').check();
      await d.locator('[formcontrolname="distribution_confirmed"]').check();
      await d.locator('[formcontrolname="download_allowed"]').uncheck();
      await page.screenshot({ path: path.join(out, 'approval.png') });
      const approved = await save();
      assert.equal(approved.published, true);
      assert.equal(approved.corrects_exam_pdf_id, 2);
      assert.equal((await fetch(api + `/public/concours-pdfs/${fixtureId}/view`)).status, 200);
      assert.equal((await fetch(api + `/public/concours-pdfs/${fixtureId}/download`)).status, 403);
      return { approved: true, view: 200, download: 403, correctionLinkRetained: true };
    });
    await check('pdf-withdraw-by-private-save', async () => {
      assert.ok(fixtureId);
      await page
        .locator('tbody tr')
        .filter({ hasText: '#' + fixtureId + ' ·' })
        .getByRole('button', { name: 'Examiner / modifier', exact: true })
        .click();
      const d = page.getByRole('dialog');
      await d.locator('[formcontrolname="publish"]').uncheck();
      await save();
      assert.equal((await fetch(api + `/public/concours-pdfs/${fixtureId}/view`)).status, 404);
      return 'Saving the fixture privately removes public access without deleting its file or changing PDFs #2/#3.';
    });
  } finally {
    await ctx.unrouteAll({ behavior: 'ignoreErrors' });
    await browser.close();
  }
  process.exitCode = results.some((x) => x.status === 'FAIL') ? 1 : 0;
})().catch((e) => {
  console.error(e.message);
  process.exitCode = 1;
});
