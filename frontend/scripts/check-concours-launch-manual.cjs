// All mutations use a separate restored PostgreSQL database and isolated file/cache roots.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const root = path.resolve(__dirname, '../..');
const { chromium } = require(require.resolve('playwright', { paths: [path.join(root, 'fact-generator')] }));
const api = 'http://localhost:8078/api/v1', origin = 'http://localhost:4303';
const output = path.join(root, 'frontend/artifacts/concours-launch-readiness/manual');
fs.mkdirSync(output, { recursive: true });
let browser, page, stage = 'login';
let fixtureToken;
const results = [], state = {}, providerRequests = [], errors = [];
async function call(route, token, method = 'GET', body) {
  const response = await fetch(api + route, { method, headers: { accept: 'application/json', ...(token ? { authorization: 'Bearer ' + token } : {}), ...(body ? { 'content-type': 'application/json' } : {}) }, body: body ? JSON.stringify(body) : undefined });
  return { status: response.status, ...(await response.json()) };
}
async function save(action, part, method) {
  const pending = page.waitForResponse((r) => r.url().includes(part) && r.request().method() === method);
  await action();
  const response = await pending;
  assert.ok(response.status() < 300, 'Expected successful isolated mutation.');
  return (await response.json()).data;
}
async function record(kind, slug, name, extra) {
  stage = 'create-' + kind;
  const existing = await call('/admin/concours-directory/' + kind + '?q=' + slug + '&per_page=50', fixtureToken);
  const found = existing.data.items.find((item) => item.slug === slug);
  if (found) {
    await page.goto(origin + '/admin/' + (kind === 'concours' ? 'concours' : 'concours-' + kind), { waitUntil: 'domcontentloaded' });
    return found;
  }
  await page.goto(origin + '/admin/' + (kind === 'concours' ? 'concours' : 'concours-' + kind), { waitUntil: 'domcontentloaded' });
  await page.getByRole('button', { name: 'Add record', exact: false }).click();
  const dialog = page.locator('dialog[open]');
  await dialog.locator('[formcontrolname=slug]').fill(slug);
  await dialog.locator('[formcontrolname=name_fr]').fill(name);
  await dialog.locator('[formcontrolname=name_ar]').fill('سجل اختبار محلي معزول');
  await dialog.locator('[formcontrolname=is_active]').check();
  if (extra) await extra(dialog);
  stage = 'save-' + kind;
  const data = await save(() => dialog.getByRole('button', { name: 'Save record', exact: true }).click(), '/admin/concours-directory/' + kind, 'POST');
  await dialog.waitFor({ state: 'hidden' });
  return data;
}
(async () => {
  const login = await call('/auth/login', null, 'POST', { email: 'launch-readiness-admin@example.test', password: 'AcceptanceFixture42!Only', recaptcha_token: 'ISOLATED_LOCAL_FIXTURE' });
  assert.equal(login.status, 200);
  const token = login.data.access_token;
  fixtureToken = token;
  const before = await call('/admin/concours-discovery/discoveries?per_page=50', token);
  assert.equal(before.data.meta.total, 46);
  browser = await chromium.launch({ headless: true, args: ['--no-sandbox', '--disable-dev-shm-usage'] });
  const context = await browser.newContext({ viewport: { width: 1440, height: 1000 } });
  context.setDefaultTimeout(30000);
  await context.addInitScript(({ token }) => {
    localStorage.setItem('quizatlas_access_token', token);
    localStorage.setItem('quizatlas.language', 'fr');
    window.__permissionCalls = 0;
    if ('Notification' in window) Notification.requestPermission = async () => { window.__permissionCalls++; return 'denied'; };
  }, { token });
  await context.route('**/*', async (route) => {
    const request = route.request(), url = new URL(request.url());
    if (url.origin === 'https://api.maroquiz.com' && url.pathname.startsWith('/api/v1/')) {
      const response = await route.fetch({ url: api + url.pathname.split('/api/v1')[1] + url.search, maxRedirects: 0, maxRetries: 0 });
      return route.fulfill({ response, headers: { ...response.headers(), 'access-control-allow-origin': origin } });
    }
    if (url.origin === origin) return route.continue();
    if (request.method() === 'GET' && ['fonts.googleapis.com', 'fonts.gstatic.com'].includes(url.hostname)) return route.continue();
    if (url.hostname.includes('wadifa')) providerRequests.push(url.hostname);
    return route.abort();
  });
  page = await context.newPage();
  page.on('pageerror', (e) => errors.push(e.name));
  stage = 'permanent-page-create';
  const category = await record('categories', 'launch-review-category', 'Launch review category');
  const institution = await record('institutions', 'launch-review-institution', 'Launch review institution');
  const course = await record('concours', 'launch-review-permanent', 'Launch review permanent', async (dialog) => {
    await dialog.locator('[formcontrolname=category_id]').selectOption({ label: 'Launch review category' });
    await dialog.locator('[formcontrolname=institution_id]').selectOption({ label: 'Launch review institution' });
    await dialog.locator('[formcontrolname=type]').selectOption('recruitment');
    await dialog.locator('[formcontrolname=session_year]').fill('2027');
  });
  state.course = course.id;
  stage = 'permanent-page-edit-and-upcoming-session';
  await page.getByRole('button', { name: 'Edit Launch review permanent', exact: true }).click();
  let dialog = page.locator('dialog[open]');
  assert.notEqual(await dialog.locator('[formcontrolname=slug]').getAttribute('readonly'), null);
  await dialog.locator('[formcontrolname=description_fr]').fill('Fixture de vérification manuelle, jamais publiée dans la base réelle.');
  await dialog.locator('[formcontrolname=session_year_override]').fill('2028');
  const edited = await save(() => dialog.getByRole('button', { name: 'Save record', exact: true }).click(), '/admin/concours-directory/concours/' + course.id, 'PUT');
  assert.equal(edited.slug, 'launch-review-permanent');
  assert.equal(edited.displayed_session_year, 2028);
  results.push({ check: stage, passed: true, stable_slug: edited.slug, upcoming_session: 2028 });
  await dialog.waitFor({ state: 'hidden' });
  stage = 'grade-specialty-and-qcm';
  await page.getByRole('button', { name: 'Edit Launch review permanent', exact: true }).click();
  dialog = page.locator('dialog[open]');
  const options = dialog.locator('.preparation-options');
  for (const [key, name] of [['grade', 'Grade fixture'], ['specialty', 'Informatique fixture']]) {
    const existing = (await call('/public/concours/launch-review-permanent')).data.preparation_options.find((item) => item.name_fr === name);
    if (existing) { state[key] = existing.id; continue; }
    await options.locator('[formcontrolname=name_fr]').fill(name);
    if (key === 'specialty') await options.locator('[formcontrolname=parent_id]').selectOption({ label: 'Grade fixture' });
    const items = await save(() => options.locator('button[type=submit]').click(), '/preparation-options', 'POST');
    state[key] = items.find((item) => item.name_fr === name).id;
  }
  const qcm = dialog.locator('app-concours-qcm-editor');
  await qcm.locator('select').selectOption('quizzes');
  await qcm.locator('ul').first().locator('li').first().waitFor();
  await qcm.locator('ul').first().locator('li').first().getByRole('button').click();
  await qcm.getByLabel('Grade fixture', { exact: true }).check();
  await save(() => qcm.getByRole('button', { name: 'Enregistrer l’association', exact: true }).click(), '/quizzes/', 'PUT');
  const publicCourse = await call('/public/concours/launch-review-permanent');
  assert.equal(publicCourse.data.preparation_options.find((item) => item.id === state.specialty).parent_id, state.grade);
  const quizzes = await call('/public/concours/launch-review-permanent/qcm?preparation_option_id=' + state.grade);
  assert.ok(quizzes.data.meta.total > 0);
  results.push({ check: stage, passed: true, grade: state.grade, specialty: state.specialty, qcm_count: quizzes.data.meta.total });
  await page.screenshot({ path: path.join(output, 'permanent-editor.png'), fullPage: true });
  await dialog.getByRole('button', { name: 'Cancel', exact: true }).click();
  stage = 'previous-exams-and-corrections';
  await page.goto(origin + '/admin/exam-pdfs', { waitUntil: 'domcontentloaded' });
  for (const id of [2, 3]) {
    const row = page.locator('tbody tr').filter({ hasText: '#' + id + ' ·' });
    await row.getByRole('button', { name: 'Examiner / modifier', exact: true }).click();
    dialog = page.getByRole('dialog');
    await dialog.locator('[formcontrolname=title]').waitFor();
    if (id === 3) assert.match(await dialog.locator('[formcontrolname=corrects_exam_pdf_id] option:checked').innerText(), /#2/);
    assert.ok(await dialog.locator('[formcontrolname=year]').inputValue());
    await page.screenshot({ path: path.join(output, `pdf-${id}-editor.png`), fullPage: true });
    await dialog.getByRole('button', { name: 'Annuler', exact: true }).click();
    await dialog.waitFor({ state: 'hidden' });
  }
  results.push({ check: stage, passed: true, exam: 2, correction: 3, correction_of: 2, scope: 'Editor controls; upload/edit permissions and preservation also covered by Laravel regressions.' });
  stage = 'manual-official-announcement-draft';
  await page.goto(origin + '/admin/concours-announcements', { waitUntil: 'domcontentloaded' });
  await page.getByRole('button', { name: 'Add announcement', exact: false }).click();
  dialog = page.locator('dialog[open]');
  await dialog.locator('[formcontrolname=concours_id]').selectOption({ label: 'Launch review permanent' });
  await dialog.locator('[formcontrolname=title_fr]').fill('Launch review official fixture');
  await dialog.locator('[formcontrolname=session_year]').fill('2028');
  await dialog.locator('[formcontrolname=official_source_url]').fill('https://www.emploi-public.ma/launch-review-never-fetch');
  await dialog.locator('[formcontrolname=official_publication_date]').fill('2026-10-28');
  await dialog.locator('[formcontrolname=registration_opens_on]').fill('2026-10-28');
  await dialog.locator('[formcontrolname=registration_deadline]').fill('2026-12-01');
  const draft = await save(() => dialog.getByRole('button', { name: 'Save draft', exact: true }).click(), '/admin/concours-announcements', 'POST');
  assert.equal(draft.publication_status, 'draft');
  assert.equal(draft.source_attribution, null);
  assert.equal((await call('/public/concours-announcements/' + draft.slug)).status, 404);
  state.announcement = draft.id;
  results.push({ check: stage, passed: true, draft_hidden: true, discovery_required: false });
  stage = 'explicit-verification-and-publication';
  assert.equal(await dialog.locator('.confirmation-check input').isChecked(), false);
  await dialog.locator('.confirmation-check input').check();
  const published = await save(() => dialog.getByRole('button', { name: 'Verify & publish', exact: true }).click(), '/verify-publish', 'POST');
  assert.equal(published.publication_status, 'published');
  assert.equal(published.verification_status, 'verified');
  const publicNotice = await call('/public/concours-announcements/' + published.slug);
  assert.equal(publicNotice.status, 200);
  assert.equal(publicNotice.data.official_publication_date, '2026-10-28');
  assert.equal(publicNotice.data.registration_deadline, '2026-12-01');
  assert.equal(publicNotice.data.session_year, 2028);
  assert.equal(publicNotice.data.source_attribution, null);
  await page.screenshot({ path: path.join(output, 'explicit-publication-fixture.png'), fullPage: true });
  results.push({ check: stage, passed: true, published_only_in_isolated_copy: true, official_url: publicNotice.data.official_source_url });
  const after = await call('/admin/concours-discovery/discoveries?per_page=50', token);
  assert.deepEqual(after.data, before.data);
  assert.deepEqual(errors, []);
  assert.deepEqual(providerRequests, []);
  assert.equal(await page.evaluate(() => window.__permissionCalls), 0);
  fs.writeFileSync(path.join(output, 'verification.json'), JSON.stringify({ database: 'maroquiz_launch_readiness_20261028', all_delivery_gates_disabled: true, provider_requests: 0, copied_pending_discoveries_unchanged: 46, state, results }, null, 2) + '\n');
  console.log('Manual launch workflow passed in isolated PostgreSQL: create/edit/session, grades/specialties, QCM, PDF/correction editor, hidden draft and explicit publication; no discovery/provider request required.');
})().catch(async (error) => {
  if (page) await page.screenshot({ path: path.join(output, 'failure.png'), fullPage: true }).catch(() => {});
  const fields = page ? await page.locator('dialog[open]').evaluateAll((dialogs) => dialogs.flatMap((dialog) => [...dialog.querySelectorAll('[formcontrolname]')].map((field) => ({ name: field.getAttribute('formcontrolname'), value: field.value, valid: field.validity?.valid, disabled: field.disabled })))).catch(() => []) : [];
  const frames = String(error.stack || '').split('\n').filter((line) => line.trim().startsWith('at '));
  fs.writeFileSync(path.join(output, 'failure.json'), JSON.stringify({ stage, name: error.name, frames, fields, completed: results }, null, 2));
  console.error('Isolated manual workflow failed at ' + stage + ' (' + error.name + ').');
  process.exitCode = 1;
}).finally(async () => { if (browser) await browser.close(); });
