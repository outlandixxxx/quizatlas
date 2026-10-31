const fs = require('node:fs');
const path = require('node:path');
const assert = require('node:assert/strict');
const { chromium } = require('../../fact-generator/node_modules/playwright');
const root = path.resolve(__dirname, '../..');
const out = path.join(root, 'frontend/artifacts/facts-video/browser');
fs.mkdirSync(out, { recursive: true });
const token = fs.readFileSync(path.join(root, 'backend/storage/framework/facts-video-acceptance/admin-token'), 'utf8').trim();
(async () => {
  const browser = await chromium.launch({ headless: true });
  const errors = [], checks = [];
  try {
    if (process.argv.includes('--templates-only')) {
      const { pathToFileURL } = require('node:url');
      const page = await browser.newPage({ viewport: { width: 1080, height: 1920 } });
      const results = [];
      for (const [lang, filename] of [['fr', 'le-saviez-vous-30-jours.json'], ['ar', 'did-you-know-30-days-ar.json']]) {
        const rows = JSON.parse(fs.readFileSync(path.join(root, 'fact-generator', filename), 'utf8'));
        const row = rows.find(item => String(item.detail || '').includes('²'));
        assert.ok(row);
        await page.goto(pathToFileURL(path.join(root, 'fact-generator/template.html')).href);
        const tl = await page.evaluate(([row, lang]) => window.setData(row, { lang }), [row, lang]);
        await page.evaluate(t => window.renderFrame(t), tl.duration - 1.2);
        assert.match(await page.locator('#detail-text').textContent(), /2⁴²/);
        await page.screenshot({ path: path.join(out, `legacy-notation-${lang}.png`) });
        results.push(`Legacy ${lang} JSON, explanation and scientific superscripts rendered`);
        const doc = { language: lang, major: { id: 1, name: row.matiere || row.major }, video: { title: row.accroche || row.hook }, type: 'facts-long', render_options: { orientation: 'vertical' }, facts: [{ id: 1, subject_id: 1, subject_name: row.matiere || row.major, text: row.fait || row.fact, detail: row.detail, source_url: null }] };
        const plan = require('../../fact-generator/timing').plan(doc);
        const scene = plan.scenes.find(s => s.explanation);
        await page.goto(pathToFileURL(path.join(root, 'fact-generator/long-template.html')).href);
        await page.evaluate(([doc, scene, duration]) => window.setLongData(doc, scene, duration), [doc, scene, plan.estimatedDuration]);
        await page.evaluate(() => window.renderLongFrame(1.5));
        assert.match(await page.locator('#headline').textContent(), /2⁴²/);
        const fit = await page.locator('#content').evaluate(el => el.scrollHeight <= el.clientHeight + 2);
        assert.ok(fit);
        await page.screenshot({ path: path.join(out, `long-notation-${lang}.png`) });
        results.push(`Long ${lang} explanation and scientific notation fit the actual safe area`);
      }
      fs.writeFileSync(path.join(out, 'template-results.json'), JSON.stringify({ checks: results, layoutFixtures: 'Existing legacy JSON rows only; not inserted or rendered as database jobs' }, null, 2));
      console.log(results.join('\n')); return;
    }
    const context = await browser.newContext({ viewport: { width: 1440, height: 1080 } });
    await context.addInitScript(token => { localStorage.setItem('quizatlas_access_token', token); localStorage.setItem('quizatlas.language', 'fr'); }, token);
    const page = await context.newPage();
    page.on('pageerror', error => errors.push(error.message));
    page.on('request', request => {
      if (request.url().startsWith('http://127.0.0.1:3777/')) assert.ok(!request.headers().authorization, 'App JWT must not reach the runner.');
    });
    await page.goto('http://localhost:4200/admin/facts-videos', { waitUntil: 'domcontentloaded', timeout: 120000 });
    const studio = page.locator('.facts-studio');
    await studio.waitFor({ timeout: 120000 });
    await page.getByRole('heading', { name: 'Générateur de vidéos — Le saviez-vous ?' }).waitFor({ timeout: 60000 });
    await page.locator('select[formcontrolname=major_id] option').nth(1).waitFor({ state: 'attached', timeout: 60000 });
    await page.screenshot({ path: path.join(out, 'loaded.png'), fullPage: true });
    await page.locator('a[href="/admin/facts-videos"]').waitFor({ state: 'attached', timeout: 60000 });
    assert.equal(await page.locator('a[href="/admin/facts-videos"]').count(), 1);
    assert.equal(await studio.locator('[formcontrolname=duration], [formcontrolname=target_duration]').count(), 0);
    await page.locator('select[formcontrolname=major_id]').selectOption({ label: 'Computer Science & IT' });
    await page.locator('input[formcontrolname=count]').fill('1');
    await page.locator('.estimate .time').filter({ hasNotText: '—' }).waitFor({ timeout: 60000 });
    assert.equal(await page.locator('.selection li').count(), 1);
    assert.ok(await page.locator('button.generate').isEnabled());
    checks.push('Actual admin route, navigation, source selection and content-based estimate');
    if (process.argv.includes('--theme-only')) {
      await page.evaluate(() => document.documentElement.setAttribute('data-theme', 'dark'));
      await page.waitForTimeout(350);
      await page.screenshot({ path: path.join(out, 'dark.png'), fullPage: true });
      const styles = await page.locator('form.panel').evaluate(el => ({ background: getComputedStyle(el).backgroundColor, color: getComputedStyle(el).color }));
      assert.notEqual(styles.background, 'rgb(255, 255, 255)');
      checks.push('Existing dark-theme surface tokens are used');
      console.log(checks.join('\n')); return;
    }

    await page.screenshot({ path: path.join(out, 'desktop-fr.png'), fullPage: true });
    await page.locator('select[formcontrolname=profile]').selectOption('facts-long');
    await page.locator('select[formcontrolname=orientation]').selectOption('horizontal');
    await page.locator('select[formcontrolname=language]').selectOption('ar');
    await page.locator('.estimate .time').filter({ hasNotText: '—' }).waitFor({ timeout: 60000 });
    assert.match(await page.locator('.selection li').innerText(), /[\u0600-\u06ff]/u);
    assert.match(await page.locator('.estimate .details').innerText(), /640 × 360/);
    await page.setViewportSize({ width: 390, height: 844 });
    await page.screenshot({ path: path.join(out, 'mobile-ar-content.png'), fullPage: true });
    assert.ok(await page.evaluate(() => document.documentElement.scrollWidth <= window.innerWidth));
    checks.push('Arabic source content, horizontal dimensions and mobile layout');
    if (process.argv.includes('--errors')) {
      await page.locator('select[formcontrolname=profile]').selectOption('facts-short');
      await page.locator('input[formcontrolname=count]').fill('11');
      await page.locator('.notice.error').filter({ hasText: 'Only 10' }).waitFor({ timeout: 60000 });
      assert.ok(await page.locator('button.generate').isDisabled());
      await page.locator('input[formcontrolname=count]').fill('10');
      await page.locator('.notice.warning').waitFor({ timeout: 60000 });
      checks.push('Insufficient-language-content rejection and short-form length warning');
      await page.route('http://127.0.0.1:3777/estimate', route => route.abort('connectionrefused'));
      await page.locator('input[formcontrolname=count]').fill('1');
      await page.locator('.notice.error').filter({ hasText: 'indisponible' }).waitFor({ timeout: 60000 });
      assert.ok(await page.locator('button.generate').isDisabled());
      await page.unroute('http://127.0.0.1:3777/estimate');
      await page.locator('input[formcontrolname=count]').fill('2');
      await page.locator('.estimate .time').filter({ hasNotText: '—' }).waitFor({ timeout: 60000 });
      checks.push('Runner-offline error and recovery (connection failure injected only for this check)');
    }
    if (process.argv.includes('--generate')) {
      await page.setViewportSize({ width: 1440, height: 1080 });
      await page.locator('select[formcontrolname=profile]').selectOption('facts-short');
      await page.locator('select[formcontrolname=language]').selectOption('fr');
      await page.locator('.estimate .time').filter({ hasNotText: '—' }).waitFor({ timeout: 60000 });
      await page.locator('button.generate').click();
      await page.locator('video').waitFor({ timeout: 300000 });
      await page.locator('video').evaluate(video => video.play());
      await page.waitForFunction(() => document.querySelector('video')?.currentTime > .1, null, { timeout: 30000 });
      assert.equal(await page.locator('.downloads a').count(), 3);
      const duration = await page.locator('video').evaluate(video => video.duration);
      assert.ok(duration > 5 && duration < 60);
      checks.push(`One-click MP4 generation, actual playback and three downloads: ${duration.toFixed(3)} seconds`);
      await page.screenshot({ path: path.join(out, 'completed.png'), fullPage: true });
    }
    assert.deepEqual(errors, []);
    fs.writeFileSync(path.join(out, process.argv.includes('--generate') ? 'generation-results.json' : process.argv.includes('--errors') ? 'error-results.json' : 'results.json'), JSON.stringify({ checks, errors, sourceFixtures: false, injectedConnectionFailure: process.argv.includes('--errors') }, null, 2));
    console.log(checks.join('\n'));
  } finally { await browser.close(); }
})().catch(error => { console.error(error); process.exitCode = 1; });
