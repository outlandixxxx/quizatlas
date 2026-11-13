// Explicit, bounded review only: uses retained source JSON, no queue or usage writes.
// node video-generator/short-review.js quiz.json fact.json new-output-directory
const fs = require('node:fs');
const path = require('node:path');
const { pathToFileURL } = require('node:url');
const { chromium } = require('playwright');
const { buildTimeline } = require('./render');
const { templates } = require('./quiz-templates');
const { validateFactsJob } = require('../fact-generator/job-schema');
const { command, checkMemory } = require('./bounded-process');
async function main() {
  const quiz = JSON.parse(fs.readFileSync(process.argv[2], 'utf8'));
  const fact = JSON.parse(fs.readFileSync(process.argv[3], 'utf8'));
  const output = path.resolve(process.argv[4]); fs.mkdirSync(output, {recursive:true});
  for (const name of [...Object.keys(templates), 'facts-short'].filter(name => !process.argv[5] || name === process.argv[5])) {
    checkMemory();
    const folder = path.join(output, name); fs.mkdirSync(folder); // Never replace a previous review.
    const facts = name === 'facts-short', doc = structuredClone(facts ? fact : quiz);
    if (!facts) doc.video.template = name;
    const segment = facts ? validateFactsJob(doc).scenes[0] : buildTimeline(doc).segments[0];
    const scene = facts ? segment : segment.scene;
    const duration = scene.duration;
    const outro = facts ? Math.min(scene.timing.btn - .15, duration - 2.5) : scene.timing.outro ?? scene.timing.trophy ?? scene.timing.explanation;
    const spans = [[0, 2], [Math.max(0,outro-.1), Math.min(duration-.8, outro+2.3)], [duration-.8, duration]];
    let cues = segment.cues;
    let browser;
    try {
      browser = await chromium.launch({headless:true,args:['--disable-dev-shm-usage','--disable-gpu']});
      const page = await browser.newPage({viewport:{width:360,height:640},deviceScaleFactor:1});
      await page.goto(pathToFileURL(path.join(__dirname, facts ? '../fact-generator/template.html' : name+'/template.html')).href);
      await page.evaluate(facts => {
        for (const node of [document.documentElement,document.body]) {node.style.width='360px';node.style.height='640px';}
        const canvas=document.querySelector(facts?'#reel':'main');
        canvas.style.transform='scale(.3333333333)';canvas.style.transformOrigin='top left';
      }, facts);
      if (facts) {
        cues = await page.evaluate(async ({row,language}) => { const timeline=await window.setData(row,{lang:language,last:true}); await document.fonts.ready; await window.setData(row,{lang:language,last:true}); return timeline.cues; }, {row:scene.row,language:doc.language});
      } else await page.evaluate(async scene => {const prepare=window.prepareNiveau||window.prepareDefi||window.prepareFive;prepare(scene);await document.fonts.ready;prepare(scene);await Promise.all([...document.images].map(i=>i.decode()));},scene);
      let frame = 0;
      for (const [start,end] of spans) for (let t=start;t<end-.00001;t+=.1) {
        checkMemory();
        await page.evaluate(({scene,t,facts})=>facts?window.renderFrame(t):window.renderFrame(scene,t,t),{scene,t,facts});
        await page.screenshot({path:path.join(folder,`frame-${String(frame++).padStart(4,'0')}.jpg`),type:'jpeg',quality:86});
      }
      for (const language of ['fr','en','ar']) {
        if (facts) {
          const row={...scene.row,lang:language,hook:({fr:'Le saviez-vous ?',en:'Did you know?',ar:'هل تعلم؟'})[language],fact:language==='ar'?'ينتشر الضوء في الفراغ.':scene.row.fact};
          await page.evaluate(async ({row,language})=>{const tl=await window.setData(row,{lang:language,last:true});window.renderFrame(tl.pages[0]-.5);},{row,language});
        } else {
          const translated=structuredClone(doc); translated.video.language=language;translated.questions[0].language=language;
          if(language==='ar'){translated.questions[0].text='ما اللغة المستخدمة لتنسيق صفحات الويب باستخدام HTML؟';translated.questions[0].explanation='تُستخدم لغة CSS لتنسيق صفحات الويب.';}
          const localized=buildTimeline(translated).segments[0].scene;
          await page.evaluate(s=>window.renderFrame(s,s.timing.reveal+.4),localized);
        }
        await page.screenshot({path:path.join(folder,language+'.png')});
      }
      await browser.close(); browser=null;
      const soundtrack=path.join(folder,'soundtrack.wav');
      const audioRoot=path.join(__dirname, facts?'../fact-generator/assets/audio':'assets/audio');
      const events=cues.map(([time,file,opts])=>({time,file:facts&&typeof file==='string'?path.join(audioRoot,file+'.wav'):file,...opts}));
      const mixer=facts?require('../fact-generator/audio-mix').buildSoundtrack:templates[name].buildSoundtrack||require('./audio-mix').buildSoundtrack;
      mixer({duration,outFile:soundtrack,musicFile:null,events,musicVolume:facts?doc.render_options.musicVolume:1,sections:[{start:0,end:duration,kind:facts?'hook':'question',duck:facts?'reveal':'question'}],musicEnabled:facts||segment.music.enabled!==false,fadeOut:.6,finalFadeOut:.6});
      const filters=spans.map(([start,end],i)=>`[1:a]atrim=start=${start}:end=${end},asetpts=PTS-STARTPTS[a${i}]`).join(';')+';'+spans.map((_,i)=>`[a${i}]`).join('')+`concat=n=${spans.length}:v=0:a=1,alimiter=limit=.5[a]`;
      await command('ffmpeg',['-v','error','-threads','1','-filter_complex_threads','1','-framerate','10','-i',path.join(folder,'frame-%04d.jpg'),'-i',soundtrack,'-filter_complex',filters,'-map','0:v','-map','[a]','-c:v','libx264','-threads','1','-preset','ultrafast','-crf','22','-pix_fmt','yuv420p','-c:a','aac','-b:a','128k','-shortest',path.join(folder,'intro-outro.mp4')]);
      fs.writeFileSync(path.join(folder,'review.json'),JSON.stringify({template:name,duration,spans,cues,sourceIds:facts?doc.facts.map(f=>f.id):doc.questions.map(q=>q.id)},null,2));
      console.log(name+': '+path.join(folder,'intro-outro.mp4'));
    } finally { await browser?.close(); }
  }
}
main().catch(error=>{console.error(error);process.exitCode=1;});
