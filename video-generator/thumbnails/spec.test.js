'use strict';
const test=require('node:test');
const assert=require('node:assert/strict');
const fs=require('node:fs');
const path=require('node:path');
const {suggest,validate,specHash,config,catalogue,contrast}=require('./index');
function doc(slug='physics',locale='fr',template='niveau-concours'){
  return {format_version:'1.1',video:{id:1,template,language:locale,display_number:12},major:{id:3,name:slug,slug},subject:{id:4,name:locale==='ar'?'مبادئ العلوم':'Sciences',slug:'science'},questions:[{id:5,language:locale,text:locale==='ar'?'لماذا تبدو السماء زرقاء حسب التفسير العلمي؟':'Pourquoi le ciel est-il bleu ?',choices:[{id:10,text:'Stored choice'}],correct_answer:{choice_id:10,text:'Never use the answer as a hook'}}],render_options:{}};
}
test('all13majors have consistent palettes and major-only artwork independently of locale',()=>{
  assert.equal(Object.keys(config.majors).length,13);
  for(const slug of Object.keys(config.majors)){
    const fr=suggest(doc(slug,'fr')),ar=suggest(doc(slug,'ar'));
    assert.equal(fr.spec.asset.id,config.majors[slug].asset);
    assert.equal(ar.spec.asset.id,fr.spec.asset.id);
    assert.deepEqual(ar.spec.palette,fr.spec.palette);
    assert.ok(contrast(fr.spec.palette.text,fr.spec.palette.background)>=4.5);
    assert.equal(fr.assets.some(item=>item.id==='english'),slug==='english');
  }
  assert.notDeepEqual(suggest(doc('finance')).spec.palette,suggest(doc('economy')).spec.palette);
  const fallback=suggest(doc('ministere-economie-finances'));
  assert.equal(fallback.spec.asset.id,'neutral');assert.equal(fallback.spec.palette.id,'neutral');
});
test('source hooks remain exact, answers hidden, long facts never truncated',()=>{
  const video=doc(), proposal=suggest(video);
  assert.equal(proposal.suggestions[0].hook,video.questions[0].text);
  assert.ok(proposal.suggestions.length<=3);
  assert.ok(!JSON.stringify(proposal.suggestions).includes('Never use the answer'));
  const facts={type:'facts-long',language:'fr',major:{id:3,name:'Physique',slug:'physics'},video:{title:'Facts'},facts:[{id:1,text:'Une qualification essentielle accompagne cette déclaration. '.repeat(10)}],render_options:{}};
  const factProposal=suggest(facts);
  assert.equal(factProposal.spec.hook,'Physique');
  assert.equal(factProposal.spec.subject,null);
  assert.ok(factProposal.suggestions.every(item=>!item.hook.endsWith('…')));
});
test('three layouts exist for each implemented family; LanguageDay remains planned and unselectable',()=>{
  for(const item of Object.values(config.templates)){
    assert.deepEqual(item.layouts,['focus','split','editorial']);
    if(item.id==='language-day')assert.equal(item.selectable,false);
    else assert.equal(item.status,'available');
  }
  assert.throws(()=>suggest(doc('english','en','language-day')),/not implemented/);
  const invalid=doc();invalid.questions.push({...invalid.questions[0],id:6});
  assert.throws(()=>suggest(invalid),/one approved question/);
});
test('manual editing is frozen deterministically and rejects unrelated images, paths and CSS',()=>{
  const video=doc(),spec=suggest(video).spec;
  const frozen=JSON.parse(JSON.stringify(spec));frozen.hook='Quelle question choisir ?';frozen.supporting='Texte éditorial validé';frozen.layout='split';
  assert.deepEqual(validate(video,frozen),frozen);
  assert.equal(specHash(frozen),specHash(JSON.parse(JSON.stringify(frozen))));
  for(const modify of [s=>s.asset.id='health',s=>s.asset.path='/tmp/private.png',s=>s.palette.primary='url(https://evil.test/a)',s=>s.palette.text=s.palette.background,s=>s.layout='../../secret',s=>s.hook='x'.repeat(181)]){
    const bad=JSON.parse(JSON.stringify(spec));modify(bad);assert.throws(()=>validate(video,bad));
  }
});
test('asset fingerprints cannot relabel another cached Major illustration',()=>{
  const physics=doc(),health=suggest(doc('health-competition')).spec;
  const spec=suggest(physics).spec;spec.asset.sha256=health.asset.sha256;
  assert.throws(()=>validate(physics,spec),/changed/);
});
test('missing artwork has explicit neutral fallback and legacy Latin locale can be confirmed',()=>{
  const video=doc();delete video.video.language;delete video.questions[0].language;
  video.render_options.thumbnail={locale:'en'};
  const proposal=suggest(video);assert.equal(proposal.spec.locale,'en');
  assert.equal(proposal.spec.major.label,'Physics');
  const old=JSON.parse(JSON.stringify(proposal.spec));
  assert.equal(catalogue.resolveAsset(old.asset),catalogue.resolveAsset(old.asset));
});
test('frozen asset bytes and template label survive live catalogue changes without editing originals',()=>{
  const video=doc(),spec=suggest(video).spec;
  const archived=catalogue.resolveAsset(spec.asset), source=path.join(__dirname,'assets','physics.png');
  const read=fs.readFileSync, label=config.labels.fr['niveau-concours'];
  const changed=Buffer.from(read(source));changed[changed.length-1]^=1;
  try{
    fs.readFileSync=function(file,...args){return path.resolve(String(file))===source?changed:read.call(fs,file,...args);};
    config.labels.fr['niveau-concours']='Changed live label';
    assert.notEqual(catalogue.item('physics').sha256,spec.asset.sha256);
    assert.equal(validate(video,spec).template_label,label);
    assert.equal(catalogue.resolveAsset(spec.asset),archived);
  }finally{fs.readFileSync=read;config.labels.fr['niveau-concours']=label;}
});
test('approved display number is frozen and participates in the artifact fingerprint',()=>{
  const video=doc(),spec=suggest(video).spec;
  assert.equal(spec.display_number,12);
  const changed=structuredClone(spec);changed.display_number=13;
  assert.notEqual(specHash(spec),specHash(changed));
  video.video.display_number=13;
  assert.throws(()=>validate(video,spec),/display number/);
  assert.equal(validate(video,changed).display_number,13);
});
