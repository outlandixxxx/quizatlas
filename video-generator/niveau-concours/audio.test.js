const test=require('node:test'),assert=require('node:assert/strict'),fs=require('node:fs'),path=require('node:path'),os=require('node:os');
const {spawnSync}=require('node:child_process');
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
 const result=spawnSync('ffmpeg',['-v','error','-threads','1','-filter_threads','1','-i',normal.source,'-af',normal.filter,'-c:a','aac','-b:a','192k','-ar','48000','-ac','2',encoded],{encoding:'utf8'});assert.equal(result.status,0,result.stderr);
 const output=model.verifyAudio(encoded,normal);assert.ok(output.input_tp<=-1.5);assert.ok(Math.abs(output.input_i-normal.deliveryTarget.integrated)<1);
});
test('long reading cues stretch without looped attacks, retain pitch and produce the requested number of samples',t=>{
 const {root}=setup(t),duration=6.1,outFile=path.join(root,'long.wav');
 model.buildSoundtrack({events:[{time:0,file:path.join(__dirname,'assets/question.wav'),reference:true,duration}],sections:[],musicEnabled:false,duration,outFile});
 assert.equal(readWav(outFile).left.length,Math.ceil(duration*48000));assert.match(model.tempoChain(.2),/atempo=0.5,atempo=0.5/);
});
