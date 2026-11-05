// Local, mocked API acceptance check. Run after the production Angular build.
// Requires the existing local video-generator Playwright installation.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const http = require('node:http');
const path = require('node:path');
const { chromium } = require('../../video-generator/node_modules/playwright');

const root = path.resolve(__dirname, '../dist/frontend/browser');
const mime = { '.js': 'text/javascript', '.css': 'text/css', '.json': 'application/json', '.html': 'text/html', '.svg': 'image/svg+xml', '.woff2': 'font/woff2' };
const server = http.createServer((req, res) => {
  let file = path.join(root, decodeURIComponent(req.url.split('?')[0]));
  if (!file.startsWith(root + path.sep)) { res.writeHead(404); return res.end(); }
  if (!fs.existsSync(file) || fs.statSync(file).isDirectory()) file = path.join(root, 'index.csr.html');
  res.setHeader('Content-Type', mime[path.extname(file)] || 'application/octet-stream');
  fs.createReadStream(file).pipe(res);
});
const deferred = () => {
  let release;
  const promise = new Promise(resolve => { release = resolve; });
  return { promise, release };
};
const progression = { xp_earned: 40, total_xp: 110, level: 2, xp_into_current_level: 30, xp_for_next_level: 243 };
const user = { id: 501, name: 'Quiz fixture', username: 'quizfixture', email: 'quiz@example.test', role: 'user', xp: 70, level: 1, xp_into_current_level: 70, xp_for_next_level: 80 };

(async () => {
  let browser;
  try {
    await new Promise(resolve => server.listen(0, '127.0.0.1', resolve));
    const port = server.address().port;
    browser = await chromium.launch({ headless: true });
    for (const language of ['fr', 'ar']) {
      const dictionary = JSON.parse(fs.readFileSync(path.resolve(__dirname, `../src/assets/i18n/${language}.json`)));
      const context = await browser.newContext({ viewport: { width: 390, height: 844 } });
      await context.addInitScript(lang => {
        localStorage.setItem('quizatlas.language', lang);
        localStorage.setItem('quizatlas_access_token', 'local-browser-test-only');
      }, language);
      const submission = deferred();
      const result = deferred();
      const attempt = { id: 9, quiz_id: 3, mode: 'exam', status: 'in_progress', started_at: new Date().toISOString(),
        submitted_at: null, server_time: new Date().toISOString(), deadline_at: new Date(Date.now() + 60000).toISOString(),
        remaining_seconds: 60, score: 0, percentage: 0, passed: false };
      const completed = { ...attempt, status: 'submitted', submitted_at: new Date().toISOString() };
      let submissions = 0;
      let resultReads = 0;
      let failNextResult = false;
      let finished = false;
      await context.route('**/*', async route => {
        const url = new URL(route.request().url());
        if (!url.pathname.startsWith('/api/v1/')) {
          if (url.hostname === '127.0.0.1' && url.port === String(port)) return route.continue();
          if (['fonts.googleapis.com', 'fonts.gstatic.com'].includes(url.hostname)) return route.continue();
          return route.abort();
        }
        // Every API request is fulfilled here; no local or production API is contacted.
        const endpoint = url.pathname.slice('/api/v1'.length);
        let data = [];
        let extra = {};
        if (endpoint === '/auth/me') data = finished ? { ...user, xp: 110, level: 2, xp_into_current_level: 30, xp_for_next_level: 243 } : user;
        else if (endpoint === '/quizzes/3/questions') data = { id: 3, title: 'Quiz fixture', duration: 1, subject_name: 'Fixture', difficulty: null,
          attempt, questions: [{ id: 4, question: 'Question fixture', type: 'single_choice', marks: 1, is_bookmarked: false, selected_choice_ids: [], choices: [
            { id: 10, choice_text: 'A', order: 1 }, { id: 11, choice_text: 'B', order: 2 },
          ] }] };
        else if (endpoint === '/quiz-attempts/9/submit') {
          submissions++;
          await submission.promise;
          finished = true;
          data = completed;
          extra = { rewards: { xp_earned: 40, level_before: 1, level_after: 2, leveled_up: true, progression,
            streak: 1, streak_increased: false, newly_unlocked_achievements: [] } };
        } else if (endpoint === '/quiz-attempts/9/result') {
          resultReads++;
          if (failNextResult) {
            failNextResult = false;
            return route.fulfill({ status: 503, contentType: 'application/json', body: JSON.stringify({ success: false, message: 'Fixture unavailable' }) });
          }
          await result.promise;
          data = { ...completed, quiz_title: 'Quiz fixture', subject_name: 'Fixture', time_spent_seconds: 60,
            total_questions: 1, total_marks: 1, correct_count: 0, incorrect_count: 0, unanswered_count: 1,
            rank: 1, subject_breakdown: [], questions: [], progression };
        } else if (endpoint.endsWith('/ratings/me')) data = null;
        else if (endpoint.endsWith('/unread-count')) data = { count: 0 };
        return route.fulfill({ status: 200, contentType: 'application/json', body: JSON.stringify({ success: true, data, ...extra }) });
      });
      const page = await context.newPage();
      const errors = [];
      page.on('pageerror', error => errors.push(error.message));
      await page.goto(`http://127.0.0.1:${port}/app/quiz/3`, { waitUntil: 'networkidle' });
      await page.locator('.btn-submit-quiz').evaluate(button => { button.click(); button.click(); });
      await page.locator('.btn-submit-quiz[aria-busy="true"]').waitFor();
      assert.equal(await page.locator('.btn-submit-quiz').isDisabled(), true);
      assert.equal(submissions, 1);
      submission.release();
      await page.locator('.rewards-card').waitFor();
      assert.match(await page.locator('.level-transition').textContent(), /1 → 2/);
      assert.equal(await page.locator('#reward-xp-progress').evaluate(el => el.value), 30);
      const navigationStart = Date.now();
      await page.locator('.see-results-btn').click();
      await page.waitForURL('**/app/results/9');
      const navigationMs = Date.now() - navigationStart;
      await page.locator('.result-state[aria-busy="true"]').waitFor();
      assert.equal(await page.locator('.result-container').count(), 0);
      assert.equal(resultReads, 1);
      result.release();
      await page.locator('.xp-card').waitFor();
      await page.evaluate(() => document.fonts.ready);
      assert.ok((await page.locator('.xp-card').textContent()).includes(dictionary.result.quizXpEarned));
      assert.ok((await page.locator('.xp-card').textContent()).includes('110 XP'));
      assert.equal(await page.locator('#result-xp-progress').evaluate(el => el.value), 30);
      assert.equal(await page.locator('#result-xp-progress').evaluate(el => el.max), 243);
      assert.equal(await page.locator('html').getAttribute('dir'), language === 'ar' ? 'rtl' : 'ltr');
      assert.ok(await page.locator('.result-container').evaluate(el => el.scrollWidth <= el.clientWidth + 1));
      const overflow = await page.evaluate(() => ({
        viewport: innerWidth, width: document.documentElement.scrollWidth,
        elements: [...document.querySelectorAll('body *')].filter(el => el.getBoundingClientRect().right > innerWidth + 1)
          .slice(0, 8).map(el => ({ tag: el.tagName, class: el.className, right: el.getBoundingClientRect().right })),
      }));
      assert.ok(overflow.width <= overflow.viewport + 1, JSON.stringify(overflow));
      assert.match(await page.locator('.user-level').textContent(), /2/);
      failNextResult = true;
      await page.reload({ waitUntil: 'networkidle' });
      await page.locator('.result-state[role="alert"] button').waitFor();
      assert.equal(await page.locator('.result-container').count(), 0);
      await page.locator('.result-state[role="alert"] button').click();
      await page.locator('.xp-card').waitFor();
      assert.equal(submissions, 1);
      assert.equal(resultReads, 3);
      assert.deepEqual(errors, []);
      console.log(JSON.stringify({ language, width: 390, navigationMs, submissionLoading: 'passed', levelUp: 'passed', xpAndRtl: 'passed', retryWithoutResubmission: 'passed', overflow: 'none' }));
      await context.close();
    }
  } finally {
    if (browser) await browser.close();
    await new Promise(resolve => server.close(resolve));
  }
})().catch(error => { console.error(error); process.exitCode = 1; });
