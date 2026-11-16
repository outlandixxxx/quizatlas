'use strict';
const zlib=require('node:zlib');
const MAGIC=Buffer.from([137,80,78,71,13,10,26,10]);
function pngMetadata(bytes,{inspectAlpha=false}={}){
  if(!Buffer.isBuffer(bytes)||bytes.length<33||!bytes.subarray(0,8).equals(MAGIC)||bytes.toString('ascii',12,16)!=='IHDR')throw Error('Invalid thumbnail illustration PNG.');
  const width=bytes.readUInt32BE(16),height=bytes.readUInt32BE(20),bitDepth=bytes[24],colorType=bytes[25],interlace=bytes[28];
  if(width<1||height<1||width>4096||height>4096)throw Error('Illustration dimensions exceed the bounded metadata reader.');
  const result={width,height,aspectRatio:width/height,bitDepth,colorType,interlace,hasAlpha:[4,6].includes(colorType)};
  if(!inspectAlpha)return result;
  if(bitDepth!==8||colorType!==6||interlace!==0)throw Error('Alpha inspection requires a noninterlaced 8-bit RGBA PNG.');
  const chunks=[];let end=false;
  for(let p=8;p+12<=bytes.length;){
    const size=bytes.readUInt32BE(p),type=bytes.toString('ascii',p+4,p+8);
    if(p+size+12>bytes.length)throw Error('Truncated illustration PNG.');
    if(type==='IDAT')chunks.push(bytes.subarray(p+8,p+8+size));
    if(type==='IEND'){end=true;break;}
    p+=size+12;
  }
  if(!end||!chunks.length)throw Error('Incomplete illustration PNG.');
  const stride=width*4,expected=(stride+1)*height;
  const raw=zlib.inflateSync(Buffer.concat(chunks),{maxOutputLength:expected});
  if(raw.length!==expected)throw Error('Illustration PNG scanlines are incomplete.');
  let previous=Buffer.alloc(stride),current=Buffer.alloc(stride),offset=0,min=255,max=0,clear=0,partial=0,opaque=0;
  const corners={};
  for(let y=0;y<height;y++){
    const filter=raw[offset++];if(filter>4)throw Error('Unsupported PNG row filter.');
    for(let x=0;x<stride;x++){
      const left=x>=4?current[x-4]:0,up=previous[x],upperLeft=x>=4?previous[x-4]:0;
      let prediction=0;
      if(filter===1)prediction=left;
      else if(filter===2)prediction=up;
      else if(filter===3)prediction=Math.floor((left+up)/2);
      else if(filter===4){const p=left+up-upperLeft,a=Math.abs(p-left),b=Math.abs(p-up),c=Math.abs(p-upperLeft);prediction=a<=b&&a<=c?left:b<=c?up:upperLeft;}
      current[x]=(raw[offset++]+prediction)&255;
    }
    for(let x=3;x<stride;x+=4){const a=current[x];min=Math.min(min,a);max=Math.max(max,a);if(a===0)clear++;else if(a===255)opaque++;else partial++;}
    if(y===0){corners.topLeft=current[3];corners.topRight=current[stride-1];}
    if(y===height-1){corners.bottomLeft=current[3];corners.bottomRight=current[stride-1];}
    [previous,current]=[current,previous];
  }
  return {...result,alpha:{minimum:min,maximum:max,transparentPixels:clear,partialPixels:partial,opaquePixels:opaque,totalPixels:width*height,corners}};
}
module.exports={pngMetadata};
