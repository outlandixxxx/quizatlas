// Selection adapter only; rendering, persistence and exports use the quiz queue.
const { validateFactsJob } = require('./job-schema');
function validateFactsBatch(doc) {
  if (doc.type !== 'facts-batch' || !Array.isArray(doc.videos) || !doc.videos.length || doc.videos.length > 60) throw Error('Choose 1–60 approved fact videos.');
  const ids = new Set(), texts = new Set();
  const first = doc.videos[0];
  for (const video of doc.videos) {
    const { doc: checked } = validateFactsJob(video);
    if (checked.type !== first.type || checked.language !== first.language || checked.major.id !== first.major.id) throw Error('Fact videos must share their profile, language and major.');
    for (const fact of checked.facts) {
      const text = fact.text.normalize('NFKC').toLocaleLowerCase().replace(/\s+/gu, ' ');
      if (ids.has(fact.id) || texts.has(text)) throw Error('A fact appears twice in the approved batch.');
      ids.add(fact.id); texts.add(text);
    }
  }
  return doc;
}
module.exports = { validateFactsBatch };
