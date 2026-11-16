'use strict';
// Thumbnail-only review: reads existing snapshots; never calls usage or numbering APIs.
const fs = require('node:fs');
const path = require('node:path');
const crypto = require('node:crypto');
const { pathToFileURL } = require('node:url');
const { chromium } = require('playwright');
const { suggest, renderThumbnail } = require('./index');
const digest = bytes => crypto.createHash('sha256').update(bytes).digest('hex');

async function review(manifest, outputDir) {
  if (!Array.isArray(manifest) || !manifest.length || manifest.length > 40) throw Error('Supply 1–40 thumbnail review cases.');
  fs.mkdirSync(outputDir, { recursive: true });
  const browser = await chromium.launch({ headless: true, args: ['--disable-dev-shm-usage', '--disable-gpu', '--renderer-process-limit=1'] });
  const results = [];
  try {
    for (const row of manifest) {
      if (!/^[a-z0-9-]{1,100}$/.test(row.name)) throw Error('Use a safe review filename.');
      const source = fs.readFileSync(path.resolve(row.source));
      const doc = JSON.parse(source);
      if (row.template) doc.video = { ...doc.video, template: row.template };
      const { spec } = suggest(doc);
      if (row.layout) spec.layout = row.layout;
      if (row.palette) spec.palette = { ...spec.palette, ...row.palette };
      if (row.hook) {
        // Review hooks are exact spans, not unverified new educational assertions.
        if (!(doc.questions || doc.facts).some(item => item.text.includes(row.hook))) throw Error('Review hook must occur verbatim in retained content.');
        spec.hook = row.hook;
      }
      doc.render_options = { ...doc.render_options, thumbnail: spec };
      const result = await renderThumbnail(doc, { outputDir, outputBase: row.name, browser });
      const receipt = JSON.parse(fs.readFileSync(result.path + '.json', 'utf8'));
      if (receipt.fit.direction !== (spec.locale === 'ar' ? 'rtl' : 'ltr') || receipt.fit.artworkMirrored) throw Error('Incorrect thumbnail direction or mirrored artwork.');
      results.push({ name: row.name, source: row.source, sourceSha256: digest(source), sourceIds: (doc.questions || doc.facts).map(item => item.id),
        path: result.path, width: result.width, height: result.height, bytes: result.bytes, sha256: result.sha256, fit: receipt.fit, spec });
      console.log(`${row.name}: ${result.width}×${result.height}, ${result.bytes} bytes, ${spec.locale}/${spec.asset.id}/${spec.layout}`);
    }
    const page = await browser.newPage({ viewport: { width: 1440, height: 1000 }, deviceScaleFactor: 1 });
    try {
      await page.setContent('<!doctype html><meta charset="utf-8"><style>body{margin:0;padding:28px;background:#eee9df;font:16px Arial;color:#242123}h1{font-size:26px}#grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}figure{margin:0;background:#fff;border-radius:12px;padding:12px;min-width:0}img{display:block;width:100%;height:520px;object-fit:contain;background:#e2ddd3}figcaption{padding-top:10px;font-size:15px;overflow-wrap:anywhere}</style><h1>MaroQuiz — thumbnail review · FR / EN / AR</h1><div id="grid"></div>');
      // Use data URLs in this one bounded review sheet; never remote images.
      for (const row of results) await page.evaluate(data => {
        const figure = document.createElement('figure'), image = document.createElement('img'), caption = document.createElement('figcaption');
        image.src = data.image; caption.textContent = data.label; figure.append(image, caption); document.getElementById('grid').append(figure);
      }, { image: 'data:image/jpeg;base64,' + fs.readFileSync(row.path).toString('base64'), label: `${row.name} · ${row.width}×${row.height} · ${row.spec.major.label}` });
      await page.evaluate(() => Promise.all([...document.images].map(image => image.decode())));
      await page.screenshot({ path: path.join(outputDir, 'contact-sheet.jpg'), type: 'jpeg', quality: 88, fullPage: true });
    } finally { await page.close(); }
    const evidence = path.join(outputDir, 'review.json');
    fs.writeFileSync(evidence, JSON.stringify({ thumbnailOnly: true, noUsageOrNumbersAllocated: true, results }, null, 2) + '\n');
    return results;
  } finally { await browser.close(); }
}
if (require.main === module) {
  const [manifest, destination] = process.argv.slice(2);
  if (!manifest || !destination) { console.error('Usage: node video-generator/thumbnails/review.js manifest.json output-directory'); process.exitCode = 1; }
  else review(JSON.parse(fs.readFileSync(manifest, 'utf8')), path.resolve(destination)).catch(error => { console.error(error.message); process.exitCode = 1; });
}
module.exports = { review };
