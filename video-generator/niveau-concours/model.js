const shortPresentation = require('../short-presentation');
const path = require('node:path');
const TEMPLATE = 'niveau-concours';
const labels = {
  fr: { title: 'NIVEAU CONCOURS', subtitle: 'SAURAS-TU RÉUSSIR ?', outro: 'Prépare-toi efficacement aux\nexamens et concours sur', difficulties: ['Débutant', 'Intermédiaire', 'Avancé', 'Professionnel'] },
  en: { title: 'EXAM CHALLENGE', subtitle: 'CAN YOU SUCCEED?', outro: 'Prepare effectively for exams and\ncompetitive examinations on', difficulties: ['Beginner', 'Intermediate', 'Advanced', 'Professional'] },
  ar: { title: 'مستوى المباراة', subtitle: 'هل ستنجح؟', outro: 'استعد بفعالية للامتحانات\nوالمباريات على', difficulties: ['مبتدئ', 'متوسط', 'متقدم', 'احترافي'] },
};
function options(doc) {
  const saved = doc.render_options?.niveau || {};
  for (const key of ['extra_animations', 'narration', 'music', 'sfx', 'original_audio']) if (saved[key] !== undefined && typeof saved[key] !== 'boolean') throw Error(`Niveau ${key} must be a boolean.`);
  // Enforce at the renderer boundary too: stale settings, retries and batches
  // can never enable commentary for Arabic. No TTS service is called.
  const narration = doc.questions?.[0]?.language === 'ar' ? false : saved.narration === true;
  if (narration) throw Error('Offline narration is not installed and verified. Disable voice-over to generate this template.');
  // The supplied export has one combined original soundtrack, not separable
  // music/effects stems. Recover it for old sound-enabled snapshots too.
  const original = saved.original_audio ?? (saved.music === true || saved.sfx !== false);
  return { extra_animations: false, narration: false, original_audio: original, music: false, sfx: original };
}
function validate(doc) {
  if (doc.video?.template !== TEMPLATE) throw Error('Unsupported exam challenge template.');
  const q = doc.questions?.[0];
  if (doc.questions?.length !== 1 || !q || !Number.isSafeInteger(q.id) || q.id < 1 || typeof q.text !== 'string' || !q.text.trim()) throw Error('Niveau concours requires one stored, approved single-answer question.');
  if (!labels[q.language] || doc.video.language !== q.language || !doc.major?.name || !doc.subject?.name) throw Error('The approved question and video must carry the same confirmed FR/EN/AR content language.');
  const arabic = (q.text.match(/\p{Script=Arabic}/gu) || []).length, latin = (q.text.match(/\p{Script=Latin}/gu) || []).length;
  if ((arabic > latin && q.language !== 'ar') || (latin > arabic && q.language === 'ar')) throw Error('Confirm the source question language before approval. Source text is never translated.');
  const choices = q.choices;
  if (!Array.isArray(choices) || choices.length !== 4 || choices.some((c, i) => c.label !== 'ABCD'[i] || !Number.isSafeInteger(c.id) || c.id < 1 || typeof c.text !== 'string' || !c.text.trim()) || new Set(choices.map(c => c.id)).size !== 4 || new Set(choices.map(c => c.text.trim().toLocaleLowerCase())).size !== 4) throw Error('Four distinct stored choices in approved A–D order are required.');
  const answer = choices.find(c => c.id === q.correct_answer?.choice_id);
  if (!answer || answer.label !== q.correct_answer.label || answer.text !== q.correct_answer.text) throw Error('Correct answer must match its stored choice ID, label and text.');
  if (q.text.length > 1200 || choices.some(c => c.text.length > 350)) throw Error('Content is too long for a readable Short; preview and replace without rewriting.');
  if (q.difficulty && !['Beginner', 'Intermediate', 'Advanced', 'Professional'].includes(q.difficulty)) throw Error('Unsupported stored difficulty.');
  options(doc);
  return doc;
}
function plan(doc) {
  validate(doc);
  const q = doc.questions[0];
  const questionTyping = Math.max(4.4, Array.from(q.text).length / 18);
  const revealExtra = questionTyping - 4.4;
  const words = q.choices.reduce((sum, c) => sum + c.text.trim().split(/\s+/u).length, 0);
  const readingExtra = Math.max(0, words / 3.5 - 4.83);
  const extra = revealExtra + readingExtra;
  const timing = { logo: 0, title: 1.23, metadata: 1.23, panel: 2.1, question: 2.3, questionTyping,
    choices: [205 / 30, 218 / 30, 234 / 30, 244 / 30].map(t => t + revealExtra), choiceEntrance: .3,
    reveal: 398 / 30 + extra, website: 13.6 + extra, outro: 418 / 30 + extra,
    closing: 505 / 30 + extra, duration: Math.ceil((17.1 + extra) * 30 - 1e-7) / 30 };
  if (timing.duration > 60) throw Error('This question needs more than 60 seconds. Select a shorter source.');
  const finished = shortPresentation.timing(timing);
  const result = { ...finished, introEnd: 1.16, endCard: finished.sourceDuration, duration: finished.duration + 2 };
  if (result.duration > 60) throw Error('This question needs more than 60 seconds including the outro. Select a shorter source.');
  return result;
}
function buildTimeline(doc, sounds = {}) {
  const timing = plan(doc), language = shortPresentation.locale(doc), settings = options(doc);
  const scene = { type: TEMPLATE, language, timing, duration: timing.duration, labels: labels[language], settings,
    category: doc.subject.name, major: doc.major.name, number: shortPresentation.number(doc.video), question: doc.questions[0], website: 'maroquiz.com' };
  const starts = [0, timing.question, ...timing.choices, timing.choices[3] + .3, timing.reveal];
  const ends = [...starts.slice(1), timing.sourceDuration];
  const names = ['opening', 'question', 'choice-1', 'choice-2', 'choice-3', 'choice-4', 'reading', 'answer'];
  const cues = settings.original_audio ? names.map((name, i) => [starts[i], path.join(__dirname, 'assets', name + '.wav'), { duration: ends[i] - starts[i], reference: true }]) : [];
  if (settings.original_audio) cues.push(
    [.08, sounds.pop || path.join(__dirname, '../assets/audio/pop.wav'), { gain: .2 }],
    [timing.endCard, sounds.whoosh || path.join(__dirname, '../assets/audio/whoosh.wav'), { gain: .18 }],
    [timing.endCard + .5, sounds.chime || path.join(__dirname, '../assets/audio/chime.wav'), { gain: .2 }],
  );
  return { header: { language, category: scene.category }, segments: [{ scene, cues, music: { enabled: false, kind: 'question', duck: 'question' }, chapter: doc.questions[0].quiz_title || doc.video.title }] };
}
module.exports = { TEMPLATE, labels, validate, options, plan, buildTimeline, ...require('./audio') };
