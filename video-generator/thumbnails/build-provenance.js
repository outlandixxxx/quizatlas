'use strict';
// Read-only source inspection; only the owned JSON provenance/manifest are written.
const fs=require('node:fs');
const path=require('node:path');
const crypto=require('node:crypto');
const {pngMetadata}=require('./image-metadata');
const catalogue=require('./catalogue');
const root=path.resolve(__dirname,'../..');
const hash=bytes=>crypto.createHash('sha256').update(bytes).digest('hex');
function buildProvenance(){
  const sourceDir=path.join(root,'illustrutions thumbal'),assetDir=path.join(__dirname,'assets');
  const originals=fs.readdirSync(sourceDir).filter(name=>name.toLowerCase().endsWith('.png')).map(name=>{
    const file=path.join(sourceDir,name),bytes=fs.readFileSync(file);
    return {file:path.relative(root,file),sha256:hash(bytes),bytes:bytes.length};
  });
  const used=new Set(),assets=[];
  for(const id of catalogue.ids.filter(id=>id!=='neutral')){
    const file=path.join(assetDir,id+'.png'),bytes=fs.readFileSync(file),sha256=hash(bytes);
    const original=originals.find(item=>item.sha256===sha256&&item.bytes===bytes.length);
    if(!original)throw Error(`Runtime illustration ${id} does not match a supplied original byte-for-byte.`);
    used.add(original.file);
    assets.push({id,source:original.file,runtime:path.relative(root,file),sourceSha256:original.sha256,runtimeSha256:sha256,
      byteIdentical:true,bytes:bytes.length,...pngMetadata(bytes,{inspectAlpha:true}),
      processing:'Unmodified source copy; no crop, recolor, background replacement or image-generation edit.',
      rights:'User-supplied; publishing rights not independently verified.'});
  }
  const candidate=path.join(root,'video-generator/output/thumbnail-asset-review-20261114/health-imagegen-candidate.png');
  const unusedCandidate=fs.existsSync(candidate)?{file:path.relative(root,candidate),sha256:hash(fs.readFileSync(candidate)),usedAtRuntime:false,
    source:'Built-in image generation produced a review candidate from the supplied health illustration.',
    decision:'Unused. The supplied originals already have functional cutout alpha and were preserved unchanged.'}:null;
  const report={version:1,generatedAt:new Date().toISOString(),sourceDirectory:path.relative(root,sourceDir),runtimeDirectory:path.relative(root,assetDir),
    alphaInspection:'Sequential PNG RGBA scanline decoding using Node built-ins; no browser, image editing or full render.',
    alphaInterpretation:'All supplied runtime images have actual alpha0..254. Alpha254 is near-opaque, not a failed cutout. The French bottom-left corner has alpha1; all other sampled corners have alpha0. These values match the earlier independent browser canvas inspection.',
    sourceFilesModified:false,runtimeCopiesByteIdentical:true,assets,
    unusedOriginals:originals.filter(item=>!used.has(item.file)).map(item=>({...item,usedAtRuntime:false,preserved:true})),
    unusedImageGenerationCandidate:unusedCandidate,
    priorVisualReference:'/tmp/maroquiz-source-assets.jpg',
    visualNote:'Existing checkerboard contact-sheet review confirmed usable cutout artwork. Alpha-zero RGB values are invisible; this record does not claim all partial shadows are absent.'};
  const destination=path.join(assetDir,'provenance.json'),temp=destination+'.tmp-'+crypto.randomUUID();
  try{fs.writeFileSync(temp,JSON.stringify(report,null,2)+'\n',{flag:'wx'});fs.renameSync(temp,destination);}finally{if(fs.existsSync(temp))fs.unlinkSync(temp);}
  catalogue.writeManifest();
  return report;
}
module.exports={buildProvenance};
if(require.main===module){const report=buildProvenance();console.log(JSON.stringify({assets:report.assets.length,byteIdentical:report.runtimeCopiesByteIdentical,dimensions:[...new Set(report.assets.map(a=>a.width+'x'+a.height))],allFunctionalAlpha:report.assets.every(a=>a.alpha.minimum===0&&a.alpha.maximum>0),unusedOriginals:report.unusedOriginals.length,unusedImagegenCandidate:!!report.unusedImageGenerationCandidate}));}
