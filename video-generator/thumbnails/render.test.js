'use strict';
const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const { chromium } = require('playwright');
const { suggest, renderThumbnail, verifyThumbnail } = require('./index');

test('local JPEG renderer fits text, preserves RTL and safely retries frozen output', async t => {
  const outputDir = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-thumbnail-browser-'));
  const browser = await chromium.launch({ headless: true, args: ['--disable-dev-shm-usage', '--disable-gpu', '--renderer-process-limit=1'] });
  t.after(async () => { await browser.close(); fs.rmSync(outputDir, { recursive: true, force: true }); });
  const document = { video: { template: 'long', language: 'fr', display_number: 17 },
    major: { id: 5, slug: 'physics', name: 'Physics' }, subject: { id: 103, slug: 'physics-fundamentals', name: 'Physique' },
    questions: [{ id: 1, language: 'fr', text: 'Pourquoi le ciel est-il bleu ?' }] };
  document.render_options = { thumbnail: suggest(document).spec };
  document.render_options.thumbnail.layout = 'split';
  const first = await renderThumbnail(document, { outputDir, outputBase: 'readable-fr', browser });
  const receipt = JSON.parse(fs.readFileSync(first.path + '.json', 'utf8'));
  assert.deepEqual([first.width, first.height], [1920, 1080]);
  assert.ok(first.bytes < 2 * 1024 * 1024);
  assert.ok(receipt.fit.fontSize >= 90, 'natural font ink must not shrink a short headline to its minimum');
  assert.equal(receipt.fit.direction, 'ltr');
  const before = fs.statSync(first.path);
  // A valid retained receipt must avoid launching or touching any browser page.
  const retained = await renderThumbnail(document, { outputDir, outputBase: 'readable-fr', browser: { newPage() { throw Error('Unnecessary browser work'); } } });
  assert.equal(retained.sha256, first.sha256);
  assert.equal(fs.statSync(first.path).mtimeMs, before.mtimeMs);
  const { exportThumbnail } = require('../video-export');
  const exported = await exportThumbnail(first.path, path.join(outputDir, 'exports'), 'readable-fr-thumbnail.jpg', first.sha256);
  assert.equal(exported.sha256, first.sha256);
  assert.equal(verifyThumbnail(exported.path, document.render_options.thumbnail).sha256, first.sha256);

  document.render_options.thumbnail.palette = { ...document.render_options.thumbnail.palette,
    background: '#FFF9E8', text: '#242123', muted: '#514B45', primary: '#0D6462' };
  const light = await renderThumbnail(document, { outputDir, outputBase: 'light-fr', browser });
  assert.equal(light.width, 1920);

  document.video = { template: 'niveau-concours', language: 'ar', display_number: 17 };
  document.questions[0].language = 'ar';
  document.questions[0].text = 'ما العلاقة بين الطاقة E=mc² والكتلة؟';
  const spec = suggest(document).spec;
  spec.hook += ' <img src=x onerror=alert(1)>';
  document.render_options.thumbnail = spec;
  const observedBrowser = { async newPage(options) {
    const page = await browser.newPage(options), close = page.close.bind(page);
    page.close = async () => {
      try {
        assert.equal(await page.locator('#hook').textContent(), spec.hook);
        assert.equal(await page.locator('#hook img').count(), 0, 'editorial text must never create HTML elements');
      } finally { await close(); }
    };
    return page;
  } };
  const rtl = await renderThumbnail(document, { outputDir, outputBase: 'mixed-ar', browser: observedBrowser });
  const arabicReceipt = JSON.parse(fs.readFileSync(rtl.path + '.json', 'utf8'));
  assert.deepEqual([rtl.width, rtl.height], [1080, 1920]);
  assert.equal(arabicReceipt.fit.direction, 'rtl');
  assert.equal(arabicReceipt.fit.artworkMirrored, false);
  assert.equal(arabicReceipt.spec.hook, spec.hook);

  const changed = structuredClone(spec); changed.hook = 'تغيير بعد الموافقة';
  assert.throws(() => verifyThumbnail(rtl.path, changed), /frozen specification/);
  spec.layout = 'editorial'; spec.hook = 'W'.repeat(180);
  await assert.rejects(renderThumbnail(document, { outputDir, outputBase: 'oversized', browser }), /does not fit legibly/);
  assert.equal(fs.existsSync(path.join(outputDir, 'oversized-thumbnail.jpg')), false);
  assert.equal(browser.contexts().length, 0, 'successful and failed pages must release their contexts');
});
