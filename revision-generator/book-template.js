const fs = require('node:fs');
const path = require('node:path');
const root = path.resolve(__dirname, '..');
const { corrected, entries, labels: correctedLabels } = require('./corrected-content');
const { installCorrectedDOM } = require('./corrected-dom');
const assets = {
  notes: path.join(__dirname, 'assets/PatrickHand-Regular.ttf'),
  arabic: path.join(root, 'fact-generator/assets/fonts/Cairo.ttf'),
  logo: path.join(root, 'frontend/src/assets/images/maroquiz-logo-192.webp'),
};
const labels = {
  fr: { title: 'Fiches de révision', contents: 'Sommaire', draft: 'BROUILLON · DRAFT', quizzes: 'quiz', explanations: 'explications sources', footer: 'Fiches de révision' },
  en: { title: 'Revision book', contents: 'Contents', draft: 'DRAFT', quizzes: 'quizzes', explanations: 'source explanations', footer: 'Revision book' },
  ar: { title: 'دفتر المراجعة', contents: 'الفهرس', draft: 'مسودة', quizzes: 'اختبارات', explanations: 'شروحات مصدرية', footer: 'دفتر المراجعة' },
};
function html() {
  const encoded = file => fs.readFileSync(file).toString('base64');
  return `<!doctype html><html><head><meta charset="utf-8"><meta http-equiv="Content-Security-Policy" content="default-src 'none'; img-src data:; font-src data:; style-src 'unsafe-inline'"><title>MaroQuiz</title><style>
@font-face{font-family:BookNotes;src:url(data:font/ttf;base64,${encoded(assets.notes)})}
@font-face{font-family:BookArabic;src:url(data:font/ttf;base64,${encoded(assets.arabic)})}
@page{size:A4 portrait;margin:0}*{box-sizing:border-box}html,body{margin:0;padding:0}body{font:14pt/1.48 BookNotes,BookArabic,sans-serif;color:#243549;background:white;-webkit-print-color-adjust:exact;print-color-adjust:exact}
.book-page{position:relative;width:210mm;height:297mm;break-after:page;break-inside:avoid;background:white}.book-page:last-child{break-after:auto}.running-head{position:absolute;top:11mm;left:18mm;right:18mm;height:9mm;display:flex;align-items:center;justify-content:space-between;gap:8mm;border-bottom:.2mm solid #ecece7;font:8.5pt/1.4 BookArabic,sans-serif;color:#596960}.running-head .subject{max-width:128mm;overflow-wrap:anywhere}.running-foot{position:absolute;bottom:10mm;left:18mm;right:18mm;height:8mm;display:flex;align-items:center;justify-content:space-between;gap:6mm;border-top:.2mm solid #ecece7;padding-top:2mm;font:8.5pt/1.3 BookArabic,sans-serif;color:#596960}.page-number{direction:ltr;unicode-bidi:isolate;white-space:nowrap}.draft-label{font:7.5pt/1.3 BookArabic,sans-serif;letter-spacing:.3px;color:#986e4b}.page-body{position:absolute;top:25mm;bottom:23mm;left:18mm;right:18mm;padding:0 0 0 0;background:none}.notebook-rules{position:absolute;top:25mm;bottom:23mm;left:18mm;right:18mm;pointer-events:none}.notebook-rules i{position:absolute;left:0;right:0;border-top:.1mm solid #eff2ed}.page-body:before{content:'';position:absolute;top:0;bottom:0;left:10mm;width:.15mm;background:#f3e4df;pointer-events:none}.page-body.toc:before,.page-body.cover:before{display:none}.page-body.toc,.page-body.cover{background:none}.chapter{margin:5mm 0 4mm 13mm;break-inside:avoid}.chapter:first-child{margin-top:0}.chapter h2{font:20pt/1.22 BookNotes,BookArabic,sans-serif;margin:0 0 1mm;color:#214c49;overflow-wrap:anywhere}.chapter .chapter-subject{font:9pt/1.5 BookArabic,sans-serif;margin:0;color:#65716b}.paragraph{display:grid;grid-template-columns:10mm minmax(0,1fr);column-gap:3mm;margin-bottom:4mm;align-items:start;break-inside:avoid}.paragraph[dir=rtl]{grid-template-columns:10mm minmax(0,1fr)}.circle{display:grid;place-items:center;align-self:start;width:9mm;height:8mm;margin-top:.4mm;border:.3mm solid #cb8475;border-radius:49% 53% 45% 55%;font:13pt/1 BookNotes,BookArabic,sans-serif;color:#314956;white-space:nowrap}.paragraph p{font:14pt/1.48 BookNotes,BookArabic,sans-serif;margin:0;white-space:pre-wrap;overflow-wrap:anywhere;unicode-bidi:plaintext}.paragraph p:dir(rtl){font-family:BookArabic,BookNotes,sans-serif;font-size:12pt;line-height:1.72}.paragraph mark{color:inherit;background:#fff9df;box-decoration-break:clone;-webkit-box-decoration-break:clone}
.cover{display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;padding:5mm 5mm 12mm}.cover-logo{width:32mm;height:32mm;object-fit:contain;margin-bottom:10mm}.brand{font:11pt/1.5 BookArabic,sans-serif;color:#8d7453;letter-spacing:1.2px}.cover h1{font:35pt/1.2 BookNotes,BookArabic,sans-serif;margin:6mm 0;color:#214c49}.cover-major{font:13pt/1.6 BookNotes,BookArabic,sans-serif;margin:3mm 0;color:#61746b}.cover-subject{font:25pt/1.3 BookNotes,BookArabic,sans-serif;margin:4mm 0 7mm;overflow-wrap:anywhere;max-width:100%}.cover-rule{width:65mm;border-top:.5mm solid #edbf73;margin:4mm 0 8mm}.cover-counts{font:10pt/1.8 BookArabic,sans-serif;color:#647068}.cover .draft-label{margin-top:12mm}.toc-heading{font:25pt/1.3 BookNotes,BookArabic,sans-serif;margin:0 0 7mm;color:#214c49}.toc-row{display:flex;align-items:baseline;gap:4mm;margin-bottom:4mm;break-inside:avoid}.toc-row a{flex:1;color:inherit;text-decoration:none;overflow-wrap:anywhere;border-bottom:.2mm dotted #d9ddd6;padding-bottom:1mm}.toc-number{flex:0 0 16mm;text-align:end;direction:ltr;unicode-bidi:isolate;font:12pt/1.5 BookArabic,sans-serif}
.corrected-part{margin:0 0 3mm 13mm}.corrected-heading{display:flex;align-items:center;gap:3mm;margin-bottom:1.5mm;font-size:12pt;line-height:1.4;color:#214c49}.corrected-number{border:.25mm solid #cb8475;border-radius:50%;min-width:8mm;height:8mm;display:grid;place-items:center}.corrected-label{font:10pt/1.5 BookNotes,BookArabic,sans-serif;color:#214c49;margin:1mm 0}.corrected-text{font:14pt/1.48 BookNotes,BookArabic,sans-serif;margin:0;white-space:pre-wrap;overflow-wrap:anywhere;unicode-bidi:plaintext}.corrected-part[dir=rtl] .corrected-text{font:12pt/1.72 BookArabic,BookNotes,sans-serif}.corrected-answer{border-inline-start:.2mm solid #eddfa9;padding-inline-start:2mm}.corrected-text mark{background:#fff9df;color:inherit;box-decoration-break:clone}
</style></head><body></body></html>`;
}
async function mount(page, doc) {
  await page.emulateMedia({ media: 'print' });
  await page.setContent(html());
  await page.evaluate(async () => {
    await Promise.all([document.fonts.load('14pt BookNotes', 'Révision'), document.fonts.load('12pt BookArabic', 'المراجعة')]);
    await document.fonts.ready;
    if ([...document.fonts].some(font => font.status !== 'loaded')) throw Error('The local book fonts did not load. Restore the licensed revision fonts before retrying.');
  });
  await page.evaluate(installCorrectedDOM);
  await page.evaluate(data => {
    window.__book = data;
    document.documentElement.lang = data.language;
    document.title = `MaroQuiz · ${data.labels.title} · ${data.subject}`;
    window.__drawBookPage = (spec, physical = 1, total = 1) => {
      const data = window.__book;
      const el = (tag, cls, text) => { const n = document.createElement(tag); if (cls) n.className = cls; if (text !== undefined) n.textContent = text; return n; };
      const frame = el('section', 'book-page'); frame.lang = data.language;
      const head = el('header', 'running-head'); head.append(el('span', '', 'MaroQuiz'), el('span', 'subject', data.subject));
      const foot = el('footer', 'running-foot'); foot.append(el('span', '', 'MaroQuiz · ' + data.labels.footer), el('span', 'page-number', `${physical} / ${total}`));
      const body = el('main', 'page-body ' + spec.kind);
      const rules = el('div', 'notebook-rules'); rules.setAttribute('aria-hidden', 'true');
      if (spec.kind === 'content') for (let line = 1; line <= 30; line++) {
        const rule = el('i'); rule.style.top = `${line * 8}mm`; rules.append(rule);
      }
      frame.append(head, rules, body, foot); document.body.append(frame);
      if (spec.kind === 'cover') {
        head.remove(); foot.remove();
        const logo = el('img', 'cover-logo'); logo.src = data.logo; logo.alt = 'MaroQuiz';
        body.append(logo, el('div', 'brand', 'MaroQuiz'), el('h1', '', data.labels.title), el('p', 'cover-major', data.major), el('p', 'cover-subject', data.subject), el('div', 'cover-rule'),
          el('p', 'cover-counts', `${data.quizzes.length} ${data.labels.quizzes} · ${data.sourceCount} ${data.labels.explanations}`), el('p', 'draft-label', data.labels.draft));
        body.dir = data.language === 'ar' ? 'rtl' : 'ltr';
      } else {
        head.append(el('span', 'draft-label', data.labels.draft));
        if (spec.kind === 'toc') {
          body.dir = data.language === 'ar' ? 'rtl' : 'ltr';
          body.append(el('h1', 'toc-heading', data.labels.contents));
          for (const row of spec.rows) {
            const item = el('div', 'toc-row'), link = el('a', '', data.quizzes[row.q].title);
            link.href = '#chapter-' + data.quizzes[row.q].id; link.dir = 'auto';
            item.append(link, el('span', 'toc-number', String(row.page))); body.append(item);
          }
        } else for (const [itemIndex, item] of spec.items.entries()) {
          if (item.type === 'chapter') {
            const chapter = el('section', 'chapter'); chapter.id = 'chapter-' + data.quizzes[item.q].id; chapter.dir = 'auto';
            chapter.append(el('h2', '', data.quizzes[item.q].title), el('p', 'chapter-subject', data.subject)); body.append(chapter);
          } else if (item.type === 'corrected') {
            window.__drawCorrected(body, item, data.quizzes[item.q].corrected[item.e], data.correctedLabels, spec.items[itemIndex - 1]);
          } else {
            const row = el('div', 'paragraph'), p = el('p'); p.dir = 'auto';
            const text = data.quizzes[item.q].paragraphs[item.p].slice(item.start, item.end);
            const match = text.match(/^\s*\S+(?:\s+\S+){0,3}/u), end = match ? Math.min(match[0].length, 50) : 0;
            if (end) { const mark = el('mark', '', text.slice(0, end)); p.append(mark); }
            p.append(document.createTextNode(text.slice(end)));
            row.append(el('span', 'circle', String(item.p + 1).padStart(2, '0') + (item.continued ? '↳' : '')), p); body.append(row);
            row.dir = getComputedStyle(p).direction;
            row.__source = item;
          }
        }
      }
      const bounds = body.getBoundingClientRect(), frameBounds = frame.getBoundingClientRect();
      const inside = parent => {
        const bounds = parent.getBoundingClientRect();
        return [...parent.children].every(n => { const r = n.getBoundingClientRect(); return r.top >= bounds.top - 1 && r.bottom <= bounds.bottom + 1 && r.left >= bounds.left - 1 && r.right <= bounds.right + 1; });
      };
      const fits = [...body.children].every(n => {
        const r = n.getBoundingClientRect(); return r.top >= bounds.top - 1 && r.bottom <= bounds.bottom + 1 && r.left >= bounds.left - 1 && r.right <= bounds.right + 1;
      }) && (spec.kind === 'cover' || inside(head) && inside(foot) && head.getBoundingClientRect().bottom <= bounds.top && foot.getBoundingClientRect().top >= bounds.bottom);
      const regions = [...body.querySelectorAll('.paragraph,.corrected-part')].map(row => {
        const p = row.querySelector('p'), r = p.getBoundingClientRect();
        return { ...row.__source, text: p.textContent, x: r.x - frameBounds.x, y: r.y - frameBounds.y, width: r.width, height: r.height };
      });
      return { frame, fits, regions, visibleText: frame.textContent };
    };
  }, { major: doc.major.name, subject: doc.subject.name, language: doc.language || 'fr', correctedLabels: correctedLabels[doc.language || 'fr'], labels: corrected(doc) ? { ...labels[doc.language || 'fr'], title: correctedLabels[doc.language || 'fr'].title, footer: correctedLabels[doc.language || 'fr'].title, explanations: correctedLabels[doc.language || 'fr'].questions } : labels[doc.language || 'fr'], sourceCount: doc.quizzes.reduce((n, q) => n + q.source.notes.length, 0),
    logo: 'data:image/webp;base64,' + fs.readFileSync(assets.logo).toString('base64'), quizzes: doc.quizzes.map(q => ({ id: q.source.quiz.id, title: q.source.quiz.title, paragraphs: corrected(doc) ? [] : q.paragraphs.map(p => p.text), corrected: corrected(doc) ? entries(q, doc.language || 'fr') : null })) });
}
async function measure(page, spec) {
  return page.evaluate(spec => { document.body.replaceChildren(); const result = window.__drawBookPage(spec); return result.fits; }, spec);
}
async function assemble(page, pages) {
  return page.evaluate(pages => {
    document.body.replaceChildren();
    return pages.map((spec, index) => {
      const result = window.__drawBookPage(spec, index + 1, pages.length);
      if (!result.fits) throw Error(`Book page ${index + 1} exceeds the readable A4 body area.`);
      for (const r of result.regions) if (r.text !== (r.type === 'corrected' ? window.__book.quizzes[r.q].corrected[r.e].parts[r.part].text : window.__book.quizzes[r.q].paragraphs[r.p]).slice(r.start, r.end)) throw Error('Book DOM text differs from the frozen source.');
      return { kind: spec.kind, regions: result.regions.map(({ text, ...region }) => region), visibleText: result.visibleText };
    });
  }, pages);
}
module.exports = { mount, measure, assemble, assets };
