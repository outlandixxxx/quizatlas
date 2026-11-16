'use strict';
const crypto = require('node:crypto');
const config = require('./config');
const catalogue = require('./catalogue');
const HEX = /^#[a-fA-F0-9]{6}$/;
function text(value, max, field, empty = false) {
  if (typeof value !== 'string' || (!empty && !value.trim()) || [...value].length > max || /[\u0000-\u0008\u000b\u000c\u000e-\u001f\u007f]/u.test(value)) throw Error(`Invalid thumbnail ${field}.`);
  return value;
}
function keys(value, fields, field) {
  if (!value || Array.isArray(value) || typeof value !== 'object' || Object.keys(value).some(key => !fields.includes(key))) throw Error(`Invalid thumbnail ${field}.`);
}
function luminance(hex) { return hex.slice(1).match(/../g).map(v => parseInt(v,16)/255).map(v => v <= .04045 ? v/12.92 : ((v+.055)/1.055)**2.4).reduce((sum,v,i) => sum + v*[.2126,.7152,.0722][i],0); }
function contrast(a,b) { const values=[luminance(a),luminance(b)].sort((x,y)=>y-x); return (values[0]+.05)/(values[1]+.05); }
function context(doc) {
  if (!doc || ['quiz-batch','facts-batch'].includes(doc.type)) throw Error('Choose one video for its thumbnail.');
  const facts = ['facts-short','facts-long'].includes(doc.type);
  const template = facts ? doc.type : !doc.video?.template || doc.video.template === 'long' ? 'quiz-long' : doc.video.template;
  if (!config.templates[template]?.selectable) throw Error('This thumbnail template is not implemented.');
  const bodies = facts ? doc.facts : doc.questions;
  if (!Array.isArray(bodies) || !bodies.length) throw Error('Thumbnail requires reviewed source content.');
  if (!facts && template !== 'quiz-long' && bodies.length !== 1) throw Error('A Short thumbnail requires one approved question.');
  const sourceText = String(bodies[0].text || '');
  const arabic = (sourceText.match(/\p{Script=Arabic}/gu)||[]).length;
  const latin = (sourceText.match(/\p{Script=Latin}/gu)||[]).length;
  const confirmed = doc.render_options?.thumbnail?.locale;
  const locale = facts ? doc.language : doc.questions[0].language || doc.video?.language || (arabic > latin ? 'ar' : ['fr','en'].includes(confirmed) ? confirmed : 'fr');
  if (!['fr','en','ar'].includes(locale) || (arabic > latin && locale !== 'ar') || (latin > arabic && locale === 'ar')) throw Error('Confirm the thumbnail content language.');
  if (!Number.isSafeInteger(doc.major?.id) || doc.major.id < 1) throw Error('Invalid thumbnail Major.');
  const major = config.majorFor(doc.major);
  return { facts, bodies, template, format: config.templates[template].format, locale, major,
    sourceMajor: { id: doc.major.id, slug: major.slug, label: major.names?.[['fr','en','ar'].indexOf(locale)] || String(doc.major.name) },
    sourceSubject: !facts && doc.subject ? { id: doc.subject.id, slug: doc.subject.slug || `subject-${doc.subject.id}`, label: String(doc.subject.name) } : null,
    displayNumber: !facts && Number.isSafeInteger(doc.video?.display_number) && doc.video.display_number > 0 ? doc.video.display_number : null };
}
function suggestions(doc, ctx = context(doc)) {
  const localized = config.labels[ctx.locale];
  const count = ctx.bodies.length;
  const unit = ctx.facts ? 'facts' : 'questions';
  const countLabel = ctx.locale === 'ar' ? `${localized[unit]}: ${count}` : `${count} ${localized[count === 1 ? (ctx.facts ? 'fact' : 'question') : unit]}`;
  const supporting = `${countLabel} · ${localized[ctx.template]}`;
  const result = [];
  const readableLength = ctx.format === 'portrait' ? (ctx.locale === 'ar' ? 90 : 110) : (ctx.locale === 'ar' ? 120 : 150);
  for (const item of ctx.bodies) {
    // Whole original statements/questions only; never trim educational qualifications.
    const hook = String(item.text || '').trim();
    if (hook && [...hook].length <= readableLength && !result.some(row => row.hook === hook)) result.push({ hook, supporting: count > 1 && !ctx.facts ? localized.selected + ' · ' + supporting : supporting });
    if (result.length === 3) break;
  }
  const fallback = ctx.sourceSubject?.label || ctx.sourceMajor.label;
  if (result.length < 3 && !result.some(row => row.hook === fallback)) result.push({ hook: fallback, supporting });
  return result.slice(0,3);
}
function suggest(doc) {
  const ctx = context(doc), hooks = suggestions(doc,ctx), assets = catalogue.relevant(doc.major);
  const chosen = assets.find(asset => asset.available) || catalogue.item('neutral');
  const seed = crypto.createHash('sha256').update(JSON.stringify([ctx.template,ctx.locale,doc.major.id,ctx.bodies.map(item => [item.id,item.text])])).digest('hex').slice(0,24);
  const suitable = [...hooks[0].hook].length > 90 ? ['focus','split'] : config.templates[ctx.template].layouts;
  const layout = suitable[parseInt(seed.slice(0,4),16)%suitable.length];
  const spec = { version:1, format:ctx.format, template:ctx.template, template_label:config.labels[ctx.locale][ctx.template], locale:ctx.locale,
    major:ctx.sourceMajor, subject:ctx.sourceSubject, display_number:ctx.displayNumber, palette:{...ctx.major.palette},
    asset:{id:chosen.id,sha256:chosen.sha256}, layout, hook:hooks[0].hook, supporting:hooks[0].supporting, seed };
  validate(doc,spec);
  return { spec, suggestions:hooks, layouts:config.templates[ctx.template].layouts.map(id=>({id,label:id})), assets,
    palette:{...ctx.major.palette}, templateStatus:'available', dimensions: dimensions(spec) };
}
function validate(doc,spec) {
  const ctx = context(doc);
  keys(spec,['version','format','template','template_label','locale','major','subject','display_number','palette','asset','layout','hook','supporting','seed'],'specification');
  if (spec.version!==1 || spec.format!==ctx.format || spec.template!==ctx.template || spec.locale!==ctx.locale || !['focus','split','editorial'].includes(spec.layout)) throw Error('Thumbnail does not match the reviewed video.');
  if (spec.display_number !== ctx.displayNumber) throw Error('Thumbnail display number differs from its approved video.');
  text(spec.hook,180,'hook'); text(spec.supporting,180,'supporting text',true); text(spec.seed,64,'seed'); text(spec.template_label,120,'template label');
  if (!/^[a-zA-Z0-9_-]{1,64}$/.test(spec.seed)) throw Error('Invalid thumbnail seed.');
  for (const [field,expected] of [['major',ctx.sourceMajor],['subject',ctx.sourceSubject]]) {
    if (expected === null) { if (spec[field] !== null) throw Error('Facts thumbnails do not have Subject associations.'); continue; }
    keys(spec[field],['id','slug','label'],field);
    if (spec[field].id!==expected.id || spec[field].slug!==expected.slug) throw Error('Thumbnail association differs from the approved video.');
    text(spec[field].label,140,field+' label');
  }
  keys(spec.palette,['id','background','primary','secondary','text','muted','badge','badgeText'],'palette');
  if (spec.palette.id!==ctx.major.palette.id) throw Error('Thumbnail palette belongs to another Major.');
  for (const key of ['background','primary','secondary','text','muted','badge','badgeText']) if (!HEX.test(spec.palette[key]||'')) throw Error('Use #RRGGBB thumbnail colors.');
  if (['text','muted','primary'].some(key=>contrast(spec.palette[key],spec.palette.background)<4.5) || contrast(spec.palette.badgeText,spec.palette.badge)<4.5) throw Error('Thumbnail text contrast must be at least 4.5:1.');
  keys(spec.asset,['id','sha256'],'illustration');
  if (spec.asset.id!=='neutral' && !catalogue.definition(spec.asset.id).majors.includes(ctx.major.slug)) throw Error('Choose artwork belonging to this Major.');
  catalogue.resolveAsset(spec.asset);
  return spec;
}
function dimensions(spec) { return spec.format==='portrait' ? {width:1080,height:1920} : {width:1920,height:1080}; }
function stable(value) { if (Array.isArray(value)) return value.map(stable); if (value && typeof value==='object') return Object.fromEntries(Object.keys(value).sort().map(key=>[key,stable(value[key])])); return value; }
function specHash(spec) { return crypto.createHash('sha256').update(JSON.stringify(stable(spec))).digest('hex'); }
module.exports = { context,suggest,suggestions,validate,dimensions,specHash,contrast };
