const test=require('node:test'),assert=require('node:assert/strict'),fs=require('node:fs'),path=require('node:path'),os=require('node:os');
const {prepareAudio}=require('../five-seconds/loudness');
const model=require('./model'),{readWav}=require('../audio-mix');
function setup(t){const root=fs.mkdtempSync(path.join(os.tmpdir(),'niveau-original-'));t.after(()=>fs.rmSync(root,{recursive:true,force:true}));const doc=structuredClone(require('../five-seconds/sample.json'));doc.video.template='niveau-concours';doc.questions[0].language=doc.video.language;doc.render_options={niveau:{original_audio:true,music:false,sfx:false}};return{root,doc};}
function soundtrack(root,doc){const segment=model.buildTimeline(doc).segments[0],file=path.join(root,'mix.wav');const events=segment.cues.map(([time,file,opts])=>({time,file,...opts}));model.buildSoundtrack({events,sections:[],duration:segment.scene.duration,outFile:file,musicEnabled:false,musicFile:'must-not-load-a-replacement.wav'});return{file,segment};}
test('restores all eight original audio phases once; quiet source samples are unchanged rather than replaced with synthetic music',t=>{
 const {root,doc}=setup(t),{file,segment}=soundtrack(root,doc),reference=segment.cues.filter(c=>c[2]?.reference);
 assert.equal(reference.length,8);assert.equal(segment.cues.length,11);assert.deepEqual(reference.map(c=>path.basename(c[1])),['opening.wav','question.wav','choice-1.wav','choice-2.wav','choice-3.wav','choice-4.wav','reading.wav','answer.wav']);
 for(let i=0;i<reference.length-1;i++)assert.ok(Math.abs(reference[i][0]+reference[i][2].duration-reference[i+1][0])<1e-7);
 const source=readWav(reference[1][1]),mixed=readWav(file),offset=Math.round(reference[1][0]*48000);let checked=0;
 for(let i=0;i<source.left.length;i+=19){if(Math.abs(source.left[i])<.5){assert.ok(Math.abs(mixed.left[offset+i]-source.left[i])<=1/32768);checked++;}}
 assert.ok(checked>1000);assert.equal(mixed.left.at(-1),0);
 for(const saved of [{music:true,sfx:false},{music:false,sfx:true},{}]){doc.render_options.niveau=saved;assert.equal(model.options(doc).original_audio,true);}
 doc.render_options.niveau={original_audio:false,music:true,sfx:true};assert.equal(model.buildTimeline(doc).segments[0].cues.length,0);
});
test('original soundtrack keeps its dynamics and passes encoded peak/relative-loudness checks without upward normalization',t=>{
 const {root,doc}=setup(t),{file}=soundtrack(root,doc),normal=model.normalizeAudio(file),encoded=path.join(root,'review.m4a');
 assert.ok(!normal.filter.includes('compressor'));assert.ok(!normal.filter.includes('loudnorm'));assert.ok(normal.deliveryTarget.integrated<=normal.input.input_i);
 prepareAudio(file,normal,encoded,model.verifyAudio);
 const output=model.verifyAudio(encoded,normal);assert.ok(output.input_tp<=-1.5);assert.ok(Math.abs(output.input_i-normal.deliveryTarget.integrated)<1);
});
test('extended question timing reserves AAC headroom and preserves reference dynamics through MP4 muxing',t=>{
 const {root,doc}=setup(t);
 // The reported failure used 87 characters and four short, one-word choices.
 // Only text length/reading time affect this soundtrack; no live job is needed.
 doc.questions[0].text='Quelle proposition correspond à cette question de contrôle ?'.padEnd(87,'.');
 for(const [i,choice] of doc.questions[0].choices.entries())choice.text=['Alpha','Beta','Gamma','Delta'][i];
 doc.questions[0].correct_answer.text=doc.questions[0].choices.find(c=>c.id===doc.questions[0].correct_answer.choice_id).text;
 const {file,segment}=soundtrack(root,doc),normal=model.normalizeAudio(file),encoded=path.join(root,'extended.m4a');
 assert.equal(segment.scene.timing.questionTyping,87/18);
 assert.equal(normal.filter,`volume=${Math.min(0,-3-normal.input.input_tp)}dB`);
 const prepared=prepareAudio(file,normal,encoded,model.verifyAudio);
 assert.ok(prepared.output.input_tp<=-1.5);assert.ok(Math.abs(prepared.output.input_i-normal.deliveryTarget.integrated)<=1);
 assert.ok(Math.abs(prepared.output.input_lra-normal.input.input_lra)<.5,'source dynamic range is preserved');
 const muxed=path.join(root,'extended.mp4'),{spawnSync}=require('node:child_process');
 const mux=spawnSync(process.env.FFMPEG_PATH||'ffmpeg',['-v','error','-nostdin','-threads','1','-filter_threads','1','-f','lavfi','-i','color=c=black:s=32x32:r=1','-i',encoded,'-map','0:v','-map','1:a','-c:v','libx264','-threads','1','-c:a','copy','-t',String(segment.scene.duration),'-n',muxed],{encoding:'utf8',timeout:120000});
 assert.equal(mux.status,0,mux.stderr);
 const final=model.verifyAudio(muxed,normal);assert.ok(Math.abs(final.input_tp-prepared.output.input_tp)<.1);
 assert.throws(()=>model.verifyAudio(muxed,{...normal,deliveryTarget:{...normal.deliveryTarget,maximumPeak:-10}}),/delivery check failed: .* LUFS .*dBTP/);
});
test('long reading cues stretch without looped attacks, retain pitch and produce the requested number of samples',t=>{
 const {root}=setup(t),duration=6.1,outFile=path.join(root,'long.wav');
 model.buildSoundtrack({events:[{time:0,file:path.join(__dirname,'assets/question.wav'),reference:true,duration}],sections:[],musicEnabled:false,duration,outFile});
 assert.equal(readWav(outFile).left.length,Math.ceil(duration*48000));assert.match(model.tempoChain(.2),/atempo=0.5,atempo=0.5/);
});
