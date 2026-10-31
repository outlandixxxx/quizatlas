const base = require('./template');
const { entries, labels } = require('./corrected-content');
const { installCorrectedDOM } = require('./corrected-dom');
const { paginateCorrected, groupsFor } = require('./corrected-pagination');
function template() {
  return base.template().replace('</style>', `
.corrected-part{margin:0 0 16px 10px}.corrected-heading{display:flex;align-items:center;gap:12px;margin-bottom:7px;font-size:24px;color:#17685f}.corrected-number{border:2px solid #d35448;border-radius:50%;min-width:44px;height:44px;display:grid;place-items:center;color:#203451}.corrected-label{font-size:21px;color:#17685f;margin:4px 0}.notes .corrected-text{font:28px/1.5 Notes,Arabic,cursive;white-space:pre-wrap;overflow-wrap:anywhere;margin:0}.corrected-part[dir=rtl] .corrected-text{font:26px/1.65 Arabic,Notes,cursive}.corrected-answer{border-inline-start:2px solid #debd73;padding-inline-start:12px}.notes .corrected-text mark{background:#f8e7ad;color:inherit;padding:0}
</style>`);
}
async function setHeader(page, doc, quiz) {
  await base.setHeader(page, doc, quiz);
  await page.evaluate(installCorrectedDOM);
  await page.evaluate(async ({ content, words, language }) => {
    window.__correctedImages = { content, words };
    document.documentElement.lang = language;
    document.querySelector('.caption').textContent = words.title;
    await Promise.all([document.fonts.load('28px Notes', 'Révision'), document.fonts.load('26px Arabic', 'المراجعة')]);
    await document.fonts.ready;
    if ([...document.fonts].some(f => f.status !== 'loaded')) throw Error('The local revision fonts failed to load.');
  }, { content: entries(quiz, doc.language || 'fr'), words: labels[doc.language || 'fr'], language: doc.language || 'fr' });
}
async function paint(page, segments, pageNumber = 1, totalPages = 1) {
  return page.evaluate(({ segments, pageNumber, totalPages }) => {
    const list = document.querySelector('.notes'); list.replaceChildren();
    document.getElementById('page-number').textContent = `${pageNumber} / ${totalPages}`;
    const data = window.__correctedImages;
    segments.forEach((segment, index) => window.__drawCorrected(list, segment, data.content[segment.e], data.words, segments[index - 1]));
    const bounds = list.getBoundingClientRect(), header = document.querySelector('header').getBoundingClientRect();
    const fits = header.height <= 320 && [...list.querySelectorAll('.corrected-part,.corrected-text,.corrected-heading,.corrected-label')].every(item => {
      const r = item.getBoundingClientRect(); return r.top >= bounds.top - 1 && r.bottom <= bounds.bottom - 5 && r.left >= bounds.left - 1 && r.right <= bounds.right + 1;
    });
    const texts = [...list.querySelectorAll('.corrected-text')].map(p => p.textContent);
    if (texts.some((t, i) => t !== data.content[segments[i].e].parts[segments[i].part].text.slice(segments[i].start, segments[i].end))) throw Error('PNG question/answer/explanation text differs from its frozen source.');
    return { fits, texts, fontSize: getComputedStyle(list.querySelector('.corrected-text') || list).fontSize };
  }, { segments, pageNumber, totalPages });
}
async function paginate(page) {
  const content = await page.evaluate(() => window.__correctedImages.content);
  return paginateCorrected(groupsFor(content), async segments => (await paint(page, segments)).fits, 5000);
}
module.exports = { template, setHeader, paint, paginate };
