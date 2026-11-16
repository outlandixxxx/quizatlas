const timing = require('./timing');
const presentation = require('./presentation');
function validateFactsJob(value) {
  if (!value || !['facts-short', 'facts-long'].includes(value.type)) throw new Error('Unsupported facts job type.');
  if (!['fr', 'en', 'ar'].includes(value.language)) throw new Error('Choose an available language.');
  if (!value.video || typeof value.video.title !== 'string' || !value.video.title.trim() || value.video.title.length > 220) throw new Error('Invalid video title.');
  if (!value.major || !Number.isSafeInteger(value.major.id) || typeof value.major.name !== 'string' || value.major.name.length > 180) throw new Error('Invalid major.');
  if (!Array.isArray(value.facts) || !value.facts.length || value.facts.length > (value.type === 'facts-short' ? 12 : 300)) throw new Error('Invalid fact count.');
  const ids = new Set();
  const texts = new Set();
  const facts = value.facts.map(fact => {
    if (!Number.isSafeInteger(fact.id) || fact.id < 1 || ids.has(fact.id)) throw new Error('Invalid or duplicate fact ID.');
    if (typeof fact.text !== 'string' || !fact.text.trim() || fact.text.length > 2000) throw new Error('Empty or oversized fact.');
    if (typeof fact.detail !== 'string' || fact.detail.length > 4000) throw new Error('Invalid explanation.');
    if (value.type === 'facts-short' && (fact.text.length > 500 || fact.detail.length > 500)) throw new Error('This fact has too much text for the short template. Choose Long YouTube.');
    const key = fact.text.normalize('NFKC').trim().toLocaleLowerCase().replace(/\s+/gu, ' ');
    if (texts.has(key)) throw new Error('Duplicate fact text.');
    if (fact.source_url != null && (typeof fact.source_url !== 'string' || fact.source_url.length > 1000 || !/^https?:\/\//i.test(fact.source_url))) throw new Error('Invalid source reference.');
    ids.add(fact.id); texts.add(key);
    const highlights = fact.highlights === undefined ? undefined : presentation.select(fact.text, fact.highlights);
    return { id: fact.id, text: fact.text, detail: fact.detail, source_url: fact.source_url || null,
      ...(highlights !== undefined ? { highlights } : {}) };
  });
  const opts = value.render_options || {};
  if (Object.keys(opts).some(key => !['quality', 'orientation', 'music', 'sfx', 'musicVolume', 'thumbnail'].includes(key))) throw new Error('Unsupported setting; duration is calculated from content.');
  if (!['draft', 'final'].includes(opts.quality)) throw new Error('Invalid render quality.');
  if (!['vertical', 'horizontal'].includes(opts.orientation) || (value.type === 'facts-short' && opts.orientation !== 'vertical')) throw new Error('Invalid orientation.');
  if (typeof opts.music !== 'boolean' || typeof opts.sfx !== 'boolean' || !Number.isFinite(opts.musicVolume) || opts.musicVolume < 0 || opts.musicVolume > 1) throw new Error('Invalid audio settings.');
  if (value.major.slug !== undefined && (typeof value.major.slug !== 'string' || !/^[a-z0-9][a-z0-9-]{0,139}$/.test(value.major.slug))) throw new Error('Invalid major slug.');
  const doc = { format_version: 'facts-video-v1', type: value.type, language: value.language, video: { title: value.video.title.trim() }, major: { id: value.major.id, name: value.major.name, ...(value.major.slug === undefined ? {} : { slug: value.major.slug }) }, facts, render_options: { ...opts } };
  if (opts.thumbnail !== undefined) require('../video-generator/thumbnails').validate(doc, opts.thumbnail);
  const dimensions = opts.orientation === 'horizontal' ? [1920, 1080] : [1080, 1920];
  if (opts.quality === 'draft') dimensions.forEach((v, i) => dimensions[i] = v / 3);
  return { doc, ...timing.plan(doc), width: dimensions[0], height: dimensions[1], fps: opts.quality === 'draft' ? 15 : 30 };
}
module.exports = { validateFactsJob };
