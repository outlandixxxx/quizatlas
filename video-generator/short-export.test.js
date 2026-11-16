const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const os = require('node:os');
const { exportDirectory, defaultExportPath } = require('./video-export');
const { initialize } = require('./quiz-batch');

test('Short Windows/WSL defaults use the requested folder and keep Facts/Long destinations separate', () => {
  assert.equal(defaultExportPath('shorts', 'win32'), 'D:\\MaroQuiz\\Maroquiz social media plans\\short video');
  assert.equal(defaultExportPath('shorts', 'linux'), '/mnt/d/MaroQuiz/Maroquiz social media plans/short video');
  assert.equal(defaultExportPath('quiz', 'linux'), '/mnt/d/MaroQuiz/Maroquiz social media plans/Long video');
  assert.equal(defaultExportPath('facts', 'linux'), '/mnt/d/MaroQuiz/Maroquiz social media plans/Facts');
});

test('every quiz Short uses QUIZ_SHORT_EXPORT_DIR instead of VIDEO_EXPORT_DIR, including its thumbnail', t => {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-short-export-'));
  t.after(() => fs.rmSync(root, { recursive: true, force: true }));
  const saved = { short: process.env.QUIZ_SHORT_EXPORT_DIR, long: process.env.VIDEO_EXPORT_DIR, facts: process.env.FACT_VIDEO_EXPORT_DIR };
  process.env.QUIZ_SHORT_EXPORT_DIR = path.join(root, 'short video');
  process.env.VIDEO_EXPORT_DIR = path.join(root, 'Long video');
  process.env.FACT_VIDEO_EXPORT_DIR = path.join(root, 'Facts');
  try {
    for (const template of ['five-seconds', 'defi-du-jour', 'niveau-concours']) {
      const doc = structuredClone(require('./five-seconds/sample.json')); doc.video.template = template;
      doc.video.language = 'fr'; doc.questions[0].language = 'fr';
      const job = { id: template, type: 'quiz-batch' };
      initialize(job, { type: 'quiz-batch', videos: [doc] }, path.join(root, template));
      assert.equal(job.exportDir, process.env.QUIZ_SHORT_EXPORT_DIR);
    }
    assert.equal(exportDirectory(undefined, 'facts'), process.env.FACT_VIDEO_EXPORT_DIR);
    assert.equal(exportDirectory(), process.env.VIDEO_EXPORT_DIR);
    assert.throws(() => exportDirectory('../unsafe', 'shorts'), /QUIZ_SHORT_EXPORT_DIR/);
  } finally {
    for (const [key, value] of [['QUIZ_SHORT_EXPORT_DIR', saved.short], ['VIDEO_EXPORT_DIR', saved.long], ['FACT_VIDEO_EXPORT_DIR', saved.facts]]) {
      if (value === undefined) delete process.env[key]; else process.env[key] = value;
    }
  }
});
