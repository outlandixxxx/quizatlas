'use strict';
const fs = require('node:fs');
const path = require('node:path');
const crypto = require('node:crypto');
const { pathToFileURL } = require('node:url');
const { checkMemory } = require('../bounded-process');
const config = require('./config');
const catalogue = require('./catalogue');
const { validate, dimensions, specHash } = require('./spec');
const MAX_BYTES = 2 * 1024 * 1024;
const hash = value => crypto.createHash('sha256').update(value).digest('hex');
function jpegDimensions(bytes) {
  if (bytes[0]!==255 || bytes[1]!==216 || bytes.at(-2)!==255 || bytes.at(-1)!==217) throw Error('Invalid thumbnail JPEG.');
  for(let offset=2;offset<bytes.length-8;){
    if(bytes[offset++]!==255) throw Error('Malformed thumbnail JPEG header.');
    let marker=bytes[offset++]; while(marker===255) marker=bytes[offset++];
    if(marker===217||marker===218)break;
    if(marker===1 || (marker>=208&&marker<=215))continue;
    const size=bytes.readUInt16BE(offset);
    if(size<2 || offset+size>bytes.length)throw Error('Invalid thumbnail JPEG segment.');
    if([192,193,194,195,197,198,199,201,202,203,205,206,207].includes(marker)) return {height:bytes.readUInt16BE(offset+3),width:bytes.readUInt16BE(offset+5)};
    offset+=size;
  }
  throw Error('Thumbnail JPEG has no dimensions.');
}
function verifyThumbnail(file,spec) {
  const info=fs.lstatSync(file);
  if(info.isSymbolicLink()||!info.isFile()||info.size<100||info.size>MAX_BYTES)throw Error('Thumbnail must be a regular JPEG below 2 MB.');
  const bytes=fs.readFileSync(file), actual=jpegDimensions(bytes), expected=dimensions(spec);
  if(actual.width!==expected.width||actual.height!==expected.height)throw Error('Thumbnail dimensions differ from its approved format.');
  const digest=hash(bytes);
  if(fs.existsSync(file+'.json')){
    if(fs.lstatSync(file+'.json').isSymbolicLink())throw Error('Thumbnail receipts must be regular files.');
    const receipt=JSON.parse(fs.readFileSync(file+'.json','utf8'));
    if(receipt.specHash!==specHash(spec)||receipt.sha256!==digest||receipt.bytes!==info.size)throw Error('Thumbnail does not match its frozen specification or checksum.');
  }
  return {path:file,...actual,sha256:digest,bytes:info.size,spec};
}
function atomic(file,data) {
  const temp=file+'.tmp-'+crypto.randomUUID();
  let fd;
  try { fd=fs.openSync(temp,'wx',0o600); fs.writeFileSync(fd,data); fs.fsyncSync(fd); fs.closeSync(fd); fd=undefined; fs.linkSync(temp,file); }
  finally { if(fd!==undefined)fs.closeSync(fd); if(fs.existsSync(temp))fs.unlinkSync(temp); }
}
async function renderThumbnail(document,{outputDir,outputBase,browser:providedBrowser}={}) {
  const spec=validate(document,document.render_options?.thumbnail);
  if(!outputDir||typeof outputBase!=='string'||!outputBase||outputBase.length>180||path.basename(outputBase)!==outputBase||/[\x00-\x1f\\/]/.test(outputBase)||['.','..'].includes(outputBase))throw Error('Choose a safe thumbnail destination basename.');
  fs.mkdirSync(outputDir,{recursive:true});
  const file=path.resolve(outputDir,outputBase+'-thumbnail.jpg');
  if(fs.existsSync(file)&&fs.existsSync(file+'.json'))return verifyThumbnail(file,spec);
  checkMemory();
  let browser=providedBrowser,page;
  try {
    if(!browser)browser=await require('playwright').chromium.launch({headless:true,args:['--disable-dev-shm-usage','--disable-gpu']});
    page=await browser.newPage({viewport:dimensions(spec),deviceScaleFactor:1});
    await page.route('**/*',route=>/^(file:|data:)/.test(route.request().url())?route.continue():route.abort());
    await page.goto(pathToFileURL(path.join(__dirname,'template.html')).href,{waitUntil:'load'});
    const number=spec.display_number;
    const fit=await page.evaluate(data=>window.prepareThumbnail(data),{spec,
      assetUrl:pathToFileURL(catalogue.resolveAsset(spec.asset)).href,
      templateLabel:spec.template_label, episode:Number.isSafeInteger(number)?`QCM ${number}`:''});
    checkMemory();
    let bytes;
    for(const quality of [92,84,76]){
      bytes=await page.screenshot({type:'jpeg',quality,animations:'disabled'});
      if(bytes.length<=MAX_BYTES)break;
    }
    const actual=jpegDimensions(bytes);
    if(bytes.length>MAX_BYTES||actual.width!==dimensions(spec).width||actual.height!==dimensions(spec).height)throw Error('Thumbnail encoding is incomplete or exceeds 2 MB.');
    const receipt={version:1,specHash:specHash(spec),sha256:hash(bytes),bytes:bytes.length,...actual,fit,spec};
    if(fs.existsSync(file)){
      if(hash(fs.readFileSync(file))!==receipt.sha256)throw Error('A different thumbnail already exists. Reapprove into a fresh output; existing files are preserved.');
    }else {
      try{atomic(file,bytes);}catch(error){
        if(error.code!=='EEXIST'||fs.lstatSync(file).isSymbolicLink()||hash(fs.readFileSync(file))!==receipt.sha256)throw error;
      }
    }
    try{atomic(file+'.json',JSON.stringify(receipt,null,2)+'\n');}catch(error){if(error.code!=='EEXIST')throw error;}
    return verifyThumbnail(file,spec);
  }finally{
    if(page)await page.close();
    if(browser&&!providedBrowser)await browser.close();
  }
}
module.exports={renderThumbnail,verifyThumbnail,jpegDimensions,MAX_BYTES};
