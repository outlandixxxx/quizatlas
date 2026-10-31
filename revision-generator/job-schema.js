const crypto = require('node:crypto');
const { corrected, validateCorrection } = require('./corrected-content');
const VERSION = 'revision-notebook-v1';
const hash = value => crypto.createHash('sha256').update(typeof value === 'string' || Buffer.isBuffer(value) ? value : JSON.stringify(value)).digest('hex');
const id = value => Number.isSafeInteger(value) && value > 0;
function keys(object, allowed) {
  if (!object || typeof object !== 'object' || Array.isArray(object) || Object.keys(object).some(key => !allowed.includes(key))) throw Error('Unsupported revision document fields.');
}
function validateRevisionJob(data) {
  keys(data, ['type', 'format_version', 'major', 'subject', 'quizzes', 'output_mode', 'language', 'content_mode']);
  if (data.content_mode !== undefined && !['explanations', 'corrected-questions'].includes(data.content_mode)) throw Error('Content mode must be explanations or corrected-questions.');
  if (data.type !== 'revision-batch' || data.format_version !== 'revision-batch-v1') throw Error('Unsupported revision format.');
  if (data.output_mode !== undefined && !['png', 'pdf', 'both'].includes(data.output_mode)) throw Error('Output mode must be png, pdf or both.');
  if (data.language !== undefined && !['fr', 'en', 'ar'].includes(data.language)) throw Error('Book interface language must be fr, en or ar.');
  for (const reference of [data.major, data.subject]) {
    keys(reference, ['id', 'name', 'slug']);
    if (!id(reference.id) || typeof reference.name !== 'string' || !reference.name.trim() || reference.name.length > 255 || typeof reference.slug !== 'string') throw Error('Invalid revision subject or major.');
  }
  if (!Array.isArray(data.quizzes) || !data.quizzes.length || data.quizzes.length > 1000) throw Error('Select between 1 and 1000 quizzes per batch (2 MB payload limit).');
  const quizzes = new Set(); let paragraphs = 0;
  for (const quiz of data.quizzes) {
    keys(quiz, ['source', 'version', 'paragraphs', 'issues']);
    const source = quiz.source;
    keys(source, ['major', 'subject', 'quiz', 'notes', 'meta', 'correction']);
    if (!id(source.quiz?.id) || quizzes.has(source.quiz.id) || source.major?.id !== data.major.id || source.subject?.id !== data.subject.id
      || typeof source.quiz.title !== 'string' || !source.quiz.title.trim() || source.quiz.title.length > 255) throw Error('Invalid or duplicate source quiz.');
    quizzes.add(source.quiz.id);
    if (!Array.isArray(source.notes) || !source.notes.length || source.notes.length > 5000) throw Error(`Quiz ${source.quiz.id} is empty or too large.`);
    const sources = new Set();
    for (const note of source.notes) {
      if (!id(note.question_id) || sources.has(note.question_id) || !Number.isSafeInteger(note.order) || typeof note.explanation !== 'string' || !note.explanation.trim()) throw Error('Missing explanation or stable question ID.');
      sources.add(note.question_id);
    }
    if (source.meta?.total_explanations !== source.notes.length || !id(quiz.version) || !Array.isArray(quiz.paragraphs) || !quiz.paragraphs.length) throw Error('Invalid source count or draft version.');
    const mapped = new Set(), paragraphIds = new Set();
    for (const paragraph of quiz.paragraphs) {
      keys(paragraph, ['id', 'text', 'sourceQuestionIds']);
      if (typeof paragraph.id !== 'string' || !paragraph.id.length || paragraph.id.length > 100 || paragraphIds.has(paragraph.id) || typeof paragraph.text !== 'string' || !paragraph.text.trim()
        || !Array.isArray(paragraph.sourceQuestionIds) || !paragraph.sourceQuestionIds.length || paragraph.sourceQuestionIds.some(value => !sources.has(value))) throw Error('Invalid revision paragraph or source mapping.');
      paragraphIds.add(paragraph.id); paragraph.sourceQuestionIds.forEach(value => mapped.add(value)); paragraphs++;
    }
    if (sources.size !== mapped.size) throw Error(`Quiz ${source.quiz.id}: every source must have a paragraph before rendering. Editorial approval is not required.`);
    if (!Array.isArray(quiz.issues) || quiz.issues.some(issue => !sources.has(issue.questionId) || typeof issue.reason !== 'string')) throw Error('Invalid review issues.');
    if (corrected(data)) validateCorrection(source, quiz.paragraphs);
  }
  if (paragraphs > 10000) throw Error('A batch supports at most 10000 paragraphs. Split this selection.');
  return data;
}
function identity(document) {
  // Ignore volatile capture time, but retain exact sources, draft text/mappings and selected order.
  return hash({ version: VERSION, ...document, quizzes: document.quizzes.map(q => ({ ...q, source: { ...q.source, meta: { ...q.source.meta, exported_at: undefined } } })) });
}
module.exports = { validateRevisionJob, hash, identity, VERSION };
