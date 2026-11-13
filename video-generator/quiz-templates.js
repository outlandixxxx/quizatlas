// A single allowlist for the local quiz renderer, runner and immutable batch inputs.
const templates = Object.freeze({
  'five-seconds': require('./five-seconds/model'),
  'defi-du-jour': require('./defi-du-jour/model'),
  'niveau-concours': require('./niveau-concours/model'),
});
function shortTemplate(document) {
  const name = document.video?.template;
  if (name === undefined || name === 'long') return null;
  if (!Object.hasOwn(templates, name)) throw Error('Unsupported quiz video template.');
  return templates[name];
}
module.exports = { templates, shortTemplate };
