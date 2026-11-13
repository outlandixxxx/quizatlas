const { test, before, after } = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const { pathToFileURL } = require('node:url');
const { chromium } = require('../video-generator/node_modules/playwright');
const { template, setHeader, paint } = require('./template');
const { paginate } = require('./pagination');
const book = require('./book-template');
let browser;
before(async () => { browser = await chromium.launch({ headless: true, args: ['--disable-dev-shm-usage'] }); });
after(async () => { await browser?.close(); });
const artifacts = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-revision-rtl-'));

function fixture(texts, language = 'ar') {
  const major = { id: 1, name: 'Sciences', slug: 'sciences' }, subject = { id: 1, name: 'Révision', slug: 'revision' };
  const quiz = { source: { major, subject, quiz: { id: 1, title: 'المراجعة · Révision' },
    notes: texts.map((explanation, i) => ({ question_id: i + 1, order: i + 1, explanation })), meta: { total_explanations: texts.length } },
    paragraphs: texts.map((text, i) => ({ id: 'p' + i, text, sourceQuestionIds: [i + 1] })) };
  return { language, major, subject, quizzes: [quiz] };
}
async function pageFor(doc) {
  const page = await browser.newPage({ viewport: { width: 1080, height: 1350 } });
  await page.route('**/*', route => route.abort());
  await page.setContent(template()); await page.evaluate(() => document.fonts.ready);
  await setHeader(page, doc, doc.quizzes[0]); return page;
}
async function rows(page) {
  return page.locator('.notes li').evaluateAll(items => items.map(item => {
    const number = item.querySelector('.number'), p = item.querySelector('p');
    const n = number.getBoundingClientRect(), t = p.getBoundingClientRect();
    return { number: number.textContent, text: p.textContent, direction: getComputedStyle(item).direction,
      textDirection: getComputedStyle(p).direction, textAlign: getComputedStyle(p).textAlign,
      numberDirection: getComputedStyle(number).direction,
      numberLeft: n.left, numberRight: n.right, numberTop: n.top, textLeft: t.left, textRight: t.right, textTop: t.top };
  }));
}
function positions(items, direction) {
  for (const item of items) {
    assert.equal(item.direction, direction); assert.equal(item.textDirection, direction);
    assert.equal(item.numberDirection, 'ltr');
    assert.ok(Math.abs(item.numberTop - item.textTop) < 6);
    if (direction === 'rtl') assert.ok(item.numberLeft > item.textRight, JSON.stringify(item));
    else assert.ok(item.numberRight < item.textLeft, JSON.stringify(item));
    assert.ok(['start', direction === 'rtl' ? 'right' : 'left'].includes(item.textAlign));
  }
}

test('Arabic grids place 01–05 on the right without changing text, highlights or number sequence', async () => {
  const texts = ['الشرح العربي الأصلي محفوظ مع ATP و DNA و x² = 4.',
    'يستمر الشرح الطويل عبر أسطر متعددة دون تداخل المؤشر مع النص أو تغيير الشروط. '.repeat(3),
    'E=mc² توضح هذه الفقرة المزج بين الرموز الرياضية والكلمات العربية.',
    'تُحْفَظُ الحركاتُ وعلاماتُ الترقيمِ كما هي.', 'هذا هو الشرح الخامس.'];
  const doc = fixture(texts), page = await pageFor(doc);
  const segments = doc.quizzes[0].paragraphs.map((p, i) => ({ paragraphId: p.id, number: i + 1, text: p.text }));
  try {
    assert.equal((await paint(page, segments)).fits, true);
    const items = await rows(page); positions(items, 'rtl');
    assert.deepEqual(items.map(i => i.number), ['01', '02', '03', '04', '05']);
    assert.deepEqual(items.map(i => i.text), texts);
    assert.equal(await page.locator('.notes mark').count(), 5);
  } finally { await page.close(); }
});

test('continuations retain paragraph direction and numbering; French/English and next quizzes remain LTR', async () => {
  const doc = fixture(['الشرح يبدأ بالعربية ويتابع مع ATP و x² دون تغيير.']), page = await pageFor(doc);
  try {
    await paint(page, [{ paragraphId: 'p0', number: 1, continued: true, text: 'ATP و x² دون تغيير.' }], 2, 3);
    positions(await rows(page), 'rtl'); assert.equal((await rows(page))[0].number, '01↳');
    const mixed = fixture(['Une explication française avec une citation « العربية ».'], 'fr');
    await setHeader(page, mixed, mixed.quizzes[0]);
    await paint(page, [{ paragraphId: 'p0', number: 1, text: mixed.quizzes[0].paragraphs[0].text }]);
    positions(await rows(page), 'ltr');
    const english = fixture(['An English explanation preserves ATP, x² and 70 °C.'], 'en');
    await setHeader(page, english, english.quizzes[0]);
    await paint(page, [{ paragraphId: 'p0', number: 1, text: english.quizzes[0].paragraphs[0].text }]);
    positions(await rows(page), 'ltr');
    const legacy = fixture(['المراجعة العربية تعمل أيضًا دون لغة مصرح بها.']); delete legacy.language;
    await setHeader(page, legacy, legacy.quizzes[0]);
    await paint(page, [{ paragraphId: 'p0', number: 1, text: legacy.quizzes[0].paragraphs[0].text }]);
    positions(await rows(page), 'rtl');
  } finally { await page.close(); }
});

test('a long paragraph flows across image pages with exact reconstruction and right-side continuation circles', async () => {
  const text = 'الشرح الأصلي محفوظ دون حذف مع ATP و x² ودرجة 70 °C. '.repeat(100);
  const doc = fixture([text, 'الشرح التالي يحتفظ برقمه الثاني.']), page = await pageFor(doc);
  try {
    const pages = await paginate(page, doc.quizzes[0].paragraphs); assert.ok(pages.length > 1);
    assert.equal(pages.flat().filter(s => s.paragraphId === 'p0').map(s => s.text).join(''), text);
    for (const [index, segments] of pages.entries()) {
      const result = await paint(page, segments, index + 1, pages.length); assert.equal(result.fits, true);
      assert.equal(result.fontSize, '28px'); positions(await rows(page), 'rtl');
      assert.equal(await page.locator('#page-number').textContent(), `${index + 1} / ${pages.length}`);
      assert.deepEqual(result.texts, segments.map(s => s.text));
    }
    assert.ok(pages.flat().filter(s => s.continued).every(s => s.number === 1));
    assert.equal(pages.flat().at(-1).number, 2);
  } finally { await page.close(); }
});

test('real Arabic and French explanations retain their notebook layout on every preview page', { skip: !process.env.MAROQUIZ_REVISION_RTL_INPUT }, async () => {
  const samples = JSON.parse(fs.readFileSync(process.env.MAROQUIZ_REVISION_RTL_INPUT, 'utf8'));
  const page = await pageFor(fixture(['التهيئة'])), images = [];
  try {
    for (const sample of samples.slice(0, 3)) {
      const doc = { ...sample, quizzes: [sample.quiz] }; await setHeader(page, doc, sample.quiz);
      const pages = await paginate(page, sample.quiz.paragraphs);
      for (const [index, segments] of pages.entries()) {
        const result = await paint(page, segments, index + 1, pages.length); assert.equal(result.fits, true);
        positions(await rows(page), sample.language === 'ar' ? 'rtl' : 'ltr');
        assert.deepEqual(result.texts, segments.map(s => s.text));
        const filename = `${sample.language}-quiz-${sample.quiz.source.quiz.id}-page-${index + 1}.png`;
        await page.screenshot({ path: path.join(artifacts, filename), animations: 'disabled' });
        images.push({ filename, language: sample.language, quiz: sample.quiz.source.quiz.id, page: index + 1 });
      }
    }
    const sheet = await browser.newPage({ viewport: { width: 1160, height: 950 } });
    const displayed = [...images.filter(i => i.language === 'ar').slice(0, 3), ...images.filter(i => i.language === 'fr').slice(0, 1)];
    fs.writeFileSync(path.join(artifacts, 'index.html'), '<!doctype html><meta charset="utf-8"><style>body{background:#29252f;color:#faf6ec;font:16px sans-serif;margin:20px}.grid{display:grid;grid-template-columns:repeat(4,270px);gap:12px}img{width:270px}</style><div class="grid">'
      + displayed.map(i => `<article><p>${i.language} · quiz ${i.quiz} · page ${i.page}</p><img src="${i.filename}"></article>`).join('') + '</div>');
    await sheet.goto(pathToFileURL(path.join(artifacts, 'index.html')).href);
    await sheet.screenshot({ path: path.join(artifacts, 'contact-sheet.png'), fullPage: true }); await sheet.close();
    fs.writeFileSync(path.join(artifacts, 'results.json'), JSON.stringify(images, null, 2));
    console.log('Revision RTL previews:', artifacts);
  } finally { await page.close(); }
});

test('the unchanged A4 PDF reference keeps Arabic circles on the right and French circles on the left', async () => {
  for (const [language, text, rtl] of [['ar', 'الشرح العربي الأصلي مع ATP و x².', true], ['fr', 'Le texte français conserve ATP et x².', false]]) {
    const doc = fixture([text], language), page = await browser.newPage();
    try {
      await page.route('**/*', route => route.abort()); await book.mount(page, doc);
      const spec = { kind: 'content', items: [{ type: 'paragraph', q: 0, p: 0, start: 0, end: text.length }] };
      assert.equal(await book.measure(page, spec), true);
      const layout = await page.locator('.paragraph').evaluate(row => {
        const number = row.querySelector('.circle').getBoundingClientRect(), text = row.querySelector('p').getBoundingClientRect();
        return { left: number.left, right: number.right, textLeft: text.left, textRight: text.right };
      });
      assert.ok(rtl ? layout.left > layout.textRight : layout.right < layout.textLeft);
      const file = path.join(artifacts, `${language}-pdf-reference.pdf`);
      await page.pdf({ path: file, preferCSSPageSize: true, printBackground: true });
      const { getDocument } = await import('pdfjs-dist/legacy/build/pdf.mjs');
      const loading = getDocument({ data: new Uint8Array(fs.readFileSync(file)), isEvalSupported: false });
      const pdf = await loading.promise;
      try {
        assert.equal(pdf.numPages, 1); const printed = await pdf.getPage(1);
        assert.ok(Math.abs(printed.view[2] - 595.28) < 1); assert.ok(Math.abs(printed.view[3] - 841.89) < 1);
      } finally { await loading.destroy(); }
      await page.locator('.book-page').screenshot({ path: path.join(artifacts, `${language}-pdf-reference.png`) });
      if (rtl) {
        await book.measure(page, { kind: 'content', items: [{ ...spec.items[0], start: text.indexOf('ATP'), continued: true }] });
        const direction = await page.locator('.paragraph').evaluate(el => getComputedStyle(el).direction);
        fs.writeFileSync(path.join(artifacts, 'pdf-reference-notes.json'), JSON.stringify({ latinLeadingContinuationDirection: direction,
          note: 'Existing PDF continuation slices beginning with Latin text resolve independently; PDF implementation left unchanged.' }, null, 2));
        if (direction === 'ltr') console.log('Existing PDF limitation: Latin-leading Arabic continuation slices switch to LTR; left unchanged.');
      }
    } finally { await page.close(); }
  }
});
