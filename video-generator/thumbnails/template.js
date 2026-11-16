'use strict';
window.prepareThumbnail = async function(data) {
  const {spec,assetUrl,templateLabel,episode} = data;
  const canvas = document.getElementById('canvas');
  canvas.className = `layout-${spec.layout} ${spec.format} ${spec.locale==='ar'?'rtl':''}`;
  document.documentElement.lang = spec.locale;
  for (const key of ['background','primary','secondary','text','muted','badge','badgeText']) canvas.style.setProperty('--'+key,spec.palette[key]);
  for (const [id,value] of [['major',spec.major.label],['subject',spec.subject?.label||''],['hook',spec.hook],['supporting',spec.supporting],['template',templateLabel],['episode',episode||'']]) document.getElementById(id).textContent=value;
  document.getElementById('illustration').src=assetUrl;
  await document.fonts.load(`900 80px ${spec.locale==='ar'?'Cairo':'Montserrat'}`);
  await document.fonts.ready;
  await Promise.all([...document.images].map(img=>img.decode()));
  const hook=document.getElementById('hook'), support=document.getElementById('supporting'), art=document.getElementById('art');
  const min=spec.locale==='ar'?60:66;
  // Font ink may extend a few pixels beyond its natural line box. Compare
  // against the allocated maximum, not the auto-sized natural block height.
  const overflows = node => node.scrollHeight > parseFloat(getComputedStyle(node).maxHeight) + 2 || node.scrollWidth > node.clientWidth + 2;
  for(let size=parseFloat(getComputedStyle(hook).fontSize);size>=min;size-=2){hook.style.fontSize=size+'px';if(!overflows(hook))break;}
  if(overflows(hook) || overflows(support)) throw Error('Thumbnail text does not fit legibly. Edit the hook or choose another layout.');
  const copy=document.getElementById('copy').getBoundingClientRect(),footer=document.querySelector('footer').getBoundingClientRect();
  if(copy.bottom>footer.top-25) throw Error('Thumbnail copy overlaps its footer. Shorten the supporting text.');
  for(const node of [hook,support,document.getElementById('major'),document.getElementById('subject')]){
    const rect=node.getBoundingClientRect();if(rect.left<0||rect.right>canvas.clientWidth+1||rect.top<0||rect.bottom>canvas.clientHeight+1) throw Error('Thumbnail text leaves the canvas.');
  }
  return {fontSize:parseFloat(getComputedStyle(hook).fontSize),direction:getComputedStyle(canvas).direction,artworkMirrored:getComputedStyle(document.getElementById('illustration')).transform!=='none',width:canvas.clientWidth,height:canvas.clientHeight};
};
