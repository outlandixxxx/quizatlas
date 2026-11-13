const { test } = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const os = require('node:os');
const { pathToFileURL } = require('node:url');
const { chromium } = require('playwright');
const { templates } = require('./quiz-templates');
const { buildTimeline } = require('./render');
const { number, opacity } = require('./short-presentation');
const { writeCue } = require('./short-audio');
const { readWav, buildSoundtrack } = require('./audio-mix');
const { initialize } = require('./quiz-batch');
const { validateFactsJob } = require('../fact-generator/job-schema');

test('Short banner number is independent, validated, snapshotted and absent from filenames', t => {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'short-numbers-')); t.after(() => fs.rmSync(root, {recursive: true, force: true}));
  const doc = structuredClone(require('./five-seconds/sample.json'));
  doc.video.number = 35; doc.video.display_number = 11;
  assert.equal(buildTimeline(doc).segments[0].scene.number, 11); assert.equal(doc.video.number, 35);
  for (const value of [0, -1, 1.2, '11', 1000000]) assert.throws(() => number({...doc.video, display_number: value}));
  const job = { id: 'review-job', type: 'quiz-batch' }, output = path.join(root, 'output');
  initialize(job, {type: 'quiz-batch', videos: [doc]}, output, root);
  assert.equal(job.items[0].displayNumber, 11); assert.match(job.items[0].filename, /video-035-/);
  doc.video.display_number = 99;
  const retained = JSON.parse(fs.readFileSync(path.join(output, 'input.json')));
  assert.equal(retained.videos[0].video.display_number, 11);
});
test('every quiz Short has intro/outro cues and preserves source timing before the appended final fade', () => {
  assert.deepEqual(Object.keys(templates), ['five-seconds', 'defi-du-jour', 'niveau-concours']);
  for (const template of Object.keys(templates)) {
    const doc = structuredClone(require('./five-seconds/sample.json'));
    doc.video.template = template; doc.questions[0].language = doc.video.language;
    const {scene, cues} = buildTimeline(doc).segments[0];
    assert.ok(cues.some(c => c[0] < 1));
    assert.ok(cues.some(c => c[0] >= (scene.timing.outro ?? scene.timing.footer ?? scene.timing.explanation)));
    assert.ok(Math.abs(scene.duration - scene.timing.sourceDuration - (template === 'niveau-concours' ? 2.6 : .6)) < 1e-6);
    assert.equal(opacity(scene.duration - 1/30, scene.duration), 0);
    assert.equal(opacity(scene.duration - .6, scene.duration), 1);
  }
});
test('clean musical accents and complete-mix fade have zero endpoints, bounded levels and no repeated tracks', t => {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'short-cues-')); t.after(() => fs.rmSync(root, {recursive:true, force:true}));
  const cue = path.join(root, 'cue.wav'); writeCue(cue);
  const source = readWav(cue); assert.equal(source.left[0], 0); assert.equal(source.left.at(-1), 0);
  assert.ok(Math.max(...source.left.subarray(0, 20000).map(Math.abs)) < .04);
  const out = path.join(root, 'mix.wav');
  buildSoundtrack({events:[{time:.5, file:cue}], sections:[], musicEnabled:false, duration:1, fadeOut:.6, outFile:out});
  assert.equal(readWav(out).left.at(-1), 0);
  require('../fact-generator/audio-mix').buildSoundtrack({events:[{time:.7,file:cue}],sections:[],musicEnabled:false,sfxEnabled:true,duration:1,finalFadeOut:.6,outFile:out});
  assert.equal(readWav(out).left.at(-1),0); // Effects fade too, not just the music.
});
test('FR/EN/AR Shorts retain original text, RTL and zero-opacity final frames without continuous Niveau decoration movement', async () => {
  const browser = await chromium.launch({headless:true,args:['--disable-dev-shm-usage','--disable-gpu']});
  try {
    for (const language of ['fr','en','ar']) for (const template of Object.keys(templates)) {
      const doc = structuredClone(require('./five-seconds/sample.json'));
      doc.video.template = template; doc.video.language = language; doc.video.display_number = 11; doc.questions[0].language = language;
      if (language === 'ar') { doc.questions[0].text = 'ما اللغة المستخدمة لتنسيق صفحات الويب باستخدام HTML؟'; doc.questions[0].explanation = 'تستخدم لغة CSS لتنسيق صفحات الويب مع الحفاظ على المحتوى الأصلي.'; }
      if (language === 'en') doc.questions[0].text = 'Which language is used to style a web page?';
      const scene = buildTimeline(doc).segments[0].scene;
      const page = await browser.newPage({viewport:{width:1080,height:1920}});
      try {
        await page.goto(pathToFileURL(path.join(__dirname,template,'template.html')).href);
        await page.evaluate(async scene => { const prepare = window.prepareNiveau || window.prepareDefi || window.prepareFive; prepare(scene); await document.fonts.ready; prepare(scene); window.renderFrame(scene, scene.timing.reveal + .3); }, scene);
        assert.match(await page.locator('#qcm').textContent(), /011/);
        assert.equal(scene.language, language);
        if (template === 'niveau-concours') assert.equal(await page.locator('main').evaluate(e=>getComputedStyle(e).backgroundColor), 'rgb(255, 255, 255)');
        assert.equal(await page.locator('#question').textContent(), doc.questions[0].text);
        if (language === 'ar') assert.match(scene.labels.title || scene.labels.seconds, /\p{Script=Arabic}/u);
        if (process.env.SHORT_PREVIEW_DIR && language !== 'en') {
          fs.mkdirSync(process.env.SHORT_PREVIEW_DIR,{recursive:true});
          await page.screenshot({path:path.join(process.env.SHORT_PREVIEW_DIR,template+'-'+language+'.png')});
        }
        await page.evaluate(s => window.renderFrame(s,s.duration-1/30),scene);
        assert.equal(await page.locator('main').evaluate(e=>Number(e.style.opacity)),0);
        await page.evaluate(s => window.renderFrame(s,s.timing.reveal+.3),scene);
        assert.equal(await page.locator('main').evaluate(e=>Number(e.style.opacity)),1);
      } finally { await page.close(); }
    }
    for (const language of ['fr','en','ar']) {
      const doc = {type:'facts-short',language,major:{id:1,name:'Physics'},video:{title:'Review'},facts:[{id:1,text:language==='ar'?'ينتشر الضوء في الفراغ.':'Light travels in a vacuum.',detail:'',source_url:null}],render_options:{quality:'draft',orientation:'vertical',music:true,sfx:true,musicVolume:.5}};
      const config = validateFactsJob(doc), scene=config.scenes[0];
      const page=await browser.newPage({viewport:{width:1080,height:1920}});
      try {
        await page.goto(pathToFileURL(path.join(__dirname,'../fact-generator/template.html')).href);
        const result=await page.evaluate(([row,language])=>window.setData(row,{lang:language,last:true}),[scene.row,language]);
        assert.ok(result.cues.some(c=>c[0]<1)); assert.ok(result.cues.some(c=>c[1]==='chime'));
        await page.evaluate(t=>window.renderFrame(t),scene.timing.p1-.5);
        if (process.env.SHORT_PREVIEW_DIR && language !== 'en') await page.screenshot({path:path.join(process.env.SHORT_PREVIEW_DIR,'facts-short-'+language+'.png')});
        await page.evaluate(t=>window.renderFrame(t),scene.duration-1/30);
        assert.equal(await page.locator('#reel').evaluate(e=>Number(e.style.opacity)),0);
        await page.evaluate(async ([row,language])=>{await window.setData(row,{lang:language,last:false});window.renderFrame(window.FactsTiming.shortTiming(row,language,false).end-1/30);},[scene.row,language]);
        assert.equal(await page.locator('#reel').evaluate(e=>Number(e.style.opacity)),1);
      } finally { await page.close(); }
    }
  } finally { await browser.close(); }
});
