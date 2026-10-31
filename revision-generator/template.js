const fs = require('node:fs');
const path = require('node:path');
const root = path.resolve(__dirname, '..');
const font = file => fs.readFileSync(file).toString('base64');
function template() {
  return `<!doctype html><html><meta charset="utf-8"><meta http-equiv="Content-Security-Policy" content="default-src 'none'; img-src data:; font-src data:; style-src 'unsafe-inline'"><style>
@font-face{font-family:Notes;src:url(data:font/ttf;base64,${font(path.join(__dirname, 'assets/PatrickHand-Regular.ttf'))})}
@font-face{font-family:Arabic;src:url(data:font/ttf;base64,${font(path.join(root, 'fact-generator/assets/fonts/Cairo.ttf'))})}
*{box-sizing:border-box}body{margin:0;color:#203451;font:28px/1.5 Notes,Arabic,cursive}#sheet{width:1080px;height:1350px;padding:38px 62px 28px 70px;display:flex;flex-direction:column;background-color:#faf6ec;background-image:linear-gradient(90deg,transparent 38px,#d9796a70 39px,#d9796a70 40px,transparent 41px),repeating-linear-gradient(0deg,transparent 0,transparent 40px,#9eb7bb32 41px,transparent 42px)}header{text-align:center;position:relative;flex-shrink:0;padding:0 95px 22px;overflow-wrap:anywhere}header img{position:absolute;left:0;top:8px;width:84px;height:84px;object-fit:contain}.draft{position:absolute;right:-26px;top:0;font:13px/1.5 sans-serif;color:#a34f36;border-bottom:2px dashed #cf7c49}.meta{color:#17685f;font-size:23px;line-height:1.35}.meta span{display:block}h1{font:34px/1.25 Notes,Arabic,cursive;margin:9px 0 8px;text-decoration:underline;text-decoration-color:#1d7367;text-underline-offset:7px}.caption{font-size:21px;margin:0}.notes{flex:1;min-height:0;overflow:hidden;margin:0;padding:8px 0;list-style:none}.notes li{display:grid;grid-template-columns:55px minmax(0,1fr);gap:15px;margin-bottom:21px;break-inside:avoid}.number{font-size:29px;border:2px solid #d35448;border-radius:48% 54% 44% 56%;height:44px;display:grid;place-items:center;transform:rotate(-5deg);line-height:1}.notes p{margin:0;font-size:28px;line-height:1.5;white-space:pre-wrap;overflow-wrap:anywhere;unicode-bidi:plaintext}.notes mark{background:linear-gradient(175deg,transparent 10%,#f4ce5980 15%,#f4ce5980 85%,transparent 90%);color:inherit;padding:0 1px;box-decoration-break:clone}footer{flex-shrink:0;display:flex;align-items:center;justify-content:space-between;border-top:1px solid #26756c;color:#186b61;padding-top:12px;margin-top:12px;font-size:19px}.arabic{font-family:Arabic}
</style><article id="sheet"><header><img alt="MaroQuiz" src="data:image/webp;base64,${font(path.join(root, 'frontend/src/assets/images/maroquiz-logo-192.webp'))}"><span class="draft">BROUILLON · DRAFT</span><div class="meta"><span id="major"></span><span id="subject"></span></div><h1 id="quiz" dir="auto"></h1><p class="caption">Fiche de révision</p></header><ol class="notes"></ol><footer><span>MaroQuiz · <span class="arabic" lang="ar" dir="rtl">ماروكويز</span></span><span id="page-number">1 / 1</span></footer></article></html>`;
}
async function setHeader(page, document, quiz) {
  await page.evaluate(({ major, subject, title }) => {
    document.getElementById('major').textContent = major;
    document.getElementById('subject').textContent = subject;
    document.getElementById('quiz').textContent = title;
  }, { major: document.major.name, subject: document.subject.name, title: quiz.source.quiz.title });
}
async function paint(page, segments, pageNumber = 1, totalPages = 1) {
  return page.evaluate(({ segments, pageNumber, totalPages }) => {
    const list = document.querySelector('.notes'); list.replaceChildren();
    document.getElementById('page-number').textContent = `${pageNumber} / ${totalPages}`;
    for (const segment of segments) {
      const item = document.createElement('li'), number = document.createElement('span'), text = document.createElement('p');
      number.className = 'number'; number.textContent = String(segment.number).padStart(2, '0') + (segment.continued ? '↳' : '');
      text.dir = 'auto';
      // Highlight a short initial phrase without changing or interpreting source text.
      const match = segment.text.match(/^\s*\S+(?:\s+\S+){0,3}/u), end = match ? Math.min(match[0].length, 50) : 0;
      if (end) { const mark = document.createElement('mark'); mark.textContent = segment.text.slice(0, end); text.append(mark); }
      text.append(document.createTextNode(segment.text.slice(end))); item.append(number, text); list.append(item);
    }
    const bounds = list.getBoundingClientRect(), header = document.querySelector('header').getBoundingClientRect();
    const fits = header.height <= 320 && [...list.children].every(item => {
      const r = item.getBoundingClientRect(); return r.bottom <= bounds.bottom - 5 && r.right <= bounds.right + 1;
    });
    return { fits, texts: [...list.querySelectorAll('p')].map(p => p.textContent), fontSize: getComputedStyle(list.querySelector('p') || list).fontSize };
  }, { segments, pageNumber, totalPages });
}
module.exports = { template, setHeader, paint };
