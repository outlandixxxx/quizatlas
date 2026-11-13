const shortPresentation = require('../short-presentation');
// Measured against the user's 1080 x 1920, 30 FPS Canva reference.
const TEMPLATE = 'five-seconds';
const labels = {
  fr: { seconds: 'SECONDES', respond: 'POUR REPONDRE!', explanation: 'Explication', luck: 'BONNE CHANCE !', more: 'Entraîne-toi avec plus de QCM\nsur', notice: 'Réponse et explication à la fin!' },
  en: { seconds: 'SECONDS', respond: 'TO ANSWER!', explanation: 'Explanation', luck: 'GOOD LUCK!', more: 'Practise with more quizzes\non', notice: 'Answer and explanation at the end!' },
  ar: { seconds: 'ثوانٍ', respond: 'للإجابة!', explanation: 'الشرح', luck: 'حظاً موفقاً!', more: 'تدرّب على المزيد من الأسئلة\nعلى', notice: 'الإجابة والشرح في النهاية!' },
};
function validate(doc) {
  if (doc.video?.template !== TEMPLATE) throw Error('Unsupported Short template.');
  if (!Array.isArray(doc.questions) || doc.questions.length !== 1) throw Error('This Short requires exactly one approved question per video.');
  const q = doc.questions[0], choices = q.choices;
  if (typeof q.text !== 'string' || !q.text.trim() || typeof q.explanation !== 'string' || !q.explanation.trim()) throw Error('This Short requires the original question and a stored explanation.');
  if (!Array.isArray(choices) || choices.length !== 4 || choices.some((c, i) => c.label !== 'ABCD'[i] || typeof c.text !== 'string' || !c.text.trim())
    || new Set(choices.map(c => c.id)).size !== 4) throw Error('This Short requires four distinct stored choices, A–D.');
  const correct = choices.find(c => c.id === q.correct_answer?.choice_id);
  if (!correct || correct.label !== q.correct_answer.label || correct.text !== q.correct_answer.text) throw Error('The correct-answer identifier, label and text must match the stored choice.');
  if (!labels[doc.video.language] || !doc.major?.name) throw Error('Choose French, English or Arabic and a real Major.');
  if (doc.render_options?.website !== undefined && (typeof doc.render_options.website !== 'string' || !/^(?:[a-z0-9-]+\.)+[a-z]{2,}(?:\/[a-z0-9/_-]*)?$/i.test(doc.render_options.website) || doc.render_options.website.length > 70)) throw Error('The website CTA must be a plain public domain/path without query strings or personal data.');
  if (q.text.length > 1800 || q.explanation.length > 3000 || choices.some(c => c.text.length > 450)) throw Error('This content is too long for a readable Short; choose a shorter question without rewriting its source.');
  return doc;
}
const words = text => text.trim().split(/\s+/u).length;
function plan(doc) {
  validate(doc);
  const q = doc.questions[0];
  const extraQuestion = Math.max(0, words(q.text) / 5 - 2.6);
  const extraChoices = Math.max(0, Math.max(...q.choices.map(c => words(c.text))) / 4 - 1);
  const extra = extraQuestion + extraChoices;
  const explanationStart = 16.2 + extra;
  const explanationTyping = Math.max(4.5, Array.from(q.explanation).length / (40 / 3));
  const duration = Math.max(734 / 30 + extra, explanationStart + .25 + explanationTyping + Math.max(2.2, words(q.explanation) / 3.5));
  if (duration > 60) throw Error('This content needs more than 60 seconds at a readable pace. Select shorter source content.');
  return shortPresentation.timing({ question: 2, questionTyping: .55 + extraQuestion, choices: [82 / 30, 3.8, 139 / 30, 157 / 30].map(t => t + extraQuestion),
    choiceEntrance: .4, choiceSounds: [3, 3.8, 4.6, 5.4].map(t => t + extraQuestion),
    countdownEntrance: 6.65 + extra, countdown: 7.0666666667 + extra, countdownEnd: 12.0666666667 + extra,
    reveal: 12.4 + extra, explanation: explanationStart, explanationTyping, duration: Math.ceil(duration * 30 - 1e-7) / 30 });
}
function buildTimeline(doc, sounds) {
  const timing = plan(doc), language = shortPresentation.locale(doc);
  const scene = { type: TEMPLATE, duration: timing.duration, timing, language, labels: labels[language],
    category: doc.major.name, quizTitle: doc.questions[0].quiz_title || doc.video.title,
    difficulty: ({ fr: ['Débutant', 'Intermédiaire', 'Avancé', 'Professionnel'], en: ['Beginner', 'Intermediate', 'Advanced', 'Professional'], ar: ['مبتدئ', 'متوسط', 'متقدم', 'احترافي'] })[language][['Beginner', 'Intermediate', 'Advanced', 'Professional'].indexOf(doc.questions[0].difficulty)] || '', number: shortPresentation.number(doc.video),
    question: doc.questions[0], website: doc.render_options?.website || 'maroquiz.com' };
  const cues = [[.1, sounds.whoosh], [1, sounds.pop], ...timing.choiceSounds.map(t => [t, sounds.pop, { gain: .35 }]),
    ...Array.from({ length: 5 }, (_, i) => [timing.countdown + i, sounds.tick]), [timing.reveal, sounds.chime], [timing.explanation, sounds.whoosh, { gain: .35 }], [timing.sourceDuration - 2, sounds.chime, { gain: .22 }]];
  return { header: { language, category: scene.category }, segments: [{ scene, cues, music: { kind: 'question', duck: 'question' }, chapter: scene.quizTitle }] };
}
module.exports = { TEMPLATE, labels, validate, plan, buildTimeline };
