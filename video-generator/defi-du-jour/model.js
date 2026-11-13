const shortPresentation = require('../short-presentation');
const path = require('node:path');
const TEMPLATE = 'defi-du-jour';
const labels = {
  fr: { title: 'DÉFI DU JOUR !', subtitle: 'Relève le défi et teste ton niveau !', trophy: 'Chaque défi relevé te\nrapproche de la réussite !', footer: ['Apprends efficacement', 'Entraîne-toi régulièrement', 'Progresse à ton rythme', 'Atteins tes objectifs'] },
  en: { title: 'DAILY CHALLENGE!', subtitle: 'Take the challenge and test your skills!', trophy: 'Every challenge brings you\ncloser to success!', footer: ['Learn effectively', 'Practise regularly', 'Progress at your pace', 'Reach your goals'] },
  ar: { title: 'تحدّي اليوم!', subtitle: 'خُض التحدّي واختبر مستواك!', trophy: 'كل تحدٍّ تخوضه\nيقرّبك من النجاح!', footer: ['تعلّم بفعالية', 'تدرّب بانتظام', 'تقدّم بالوتيرة المناسبة لك', 'حقّق أهدافك'] },
};
function validate(doc) {
  if (doc.video?.template !== TEMPLATE) throw Error('Unsupported daily challenge template.');
  if (!labels[doc.video.language] || !doc.major?.name || !doc.subject?.name) throw Error('Choose French, English or Arabic and a real Major and Subject.');
  if (!Array.isArray(doc.questions) || doc.questions.length !== 1) throw Error('Défi du jour requires exactly one approved question.');
  const q = doc.questions[0], choices = q.choices;
  if (!Number.isSafeInteger(q.id) || q.id < 1 || typeof q.text !== 'string' || !q.text.trim()) throw Error('A stored single-answer question is required.');
  if (!Array.isArray(choices) || choices.length !== 4 || choices.some((c, i) => c.label !== 'ABCD'[i] || !Number.isSafeInteger(c.id) || c.id < 1 || typeof c.text !== 'string' || !c.text.trim()) || new Set(choices.map(c => c.id)).size !== 4 || new Set(choices.map(c => c.text.trim().toLocaleLowerCase())).size !== 4) throw Error('Défi du jour requires four distinct stored choices, A–D.');
  const correct = choices.find(c => c.id === q.correct_answer?.choice_id);
  if (!correct || correct.label !== q.correct_answer.label || correct.text !== q.correct_answer.text) throw Error('The correct-answer ID, label and text must match the stored choice.');
  if (q.text.length > 1800 || choices.some(c => c.text.length > 450)) throw Error('Source content is too long for a readable Short. Preview and replace it without rewriting.');
  if (doc.render_options?.website !== undefined && (typeof doc.render_options.website !== 'string' || !/^(?:[a-z0-9-]+\.)+[a-z]{2,}(?:\/[a-z0-9/_-]*)?$/i.test(doc.render_options.website) || doc.render_options.website.length > 70)) throw Error('Use a plain public website domain/path.');
  return doc;
}
// Source measured at 30 FPS: 794 frames, not the explanation/countdown template.
function plan(doc) {
  validate(doc);
  const q = doc.questions[0];
  const questionTyping = Math.max(269 / 30, Array.from(q.text).length / 9.5);
  const questionExtra = questionTyping - 269 / 30;
  let extra = questionExtra;
  const choices = [358 / 30, 12.8, 415 / 30, 445 / 30].map((start, i) => {
    const time = start + extra;
    extra += Math.max(0, q.choices[i].text.trim().split(/\s+/u).length / 4 - 1);
    return time;
  });
  const timing = { title: .5, titleEntrance: .4, metadata: 1.8666666667, card: 2.8666666667, question: 89 / 30, questionTyping,
    choices, choiceEntrance: .3, reveal: 20.2 + extra, highlightExit: 25.1 + extra, checkExit: 26.1 + extra,
    footer: 24.0666666667 + extra, trophy: 24.4333333333 + extra, website: 24.9333333333 + extra, closing: 26.1 + extra, duration: Math.ceil((794 / 30 + extra) * 30 - 1e-7) / 30 };
  if (timing.duration > 60) throw Error('This source needs more than 60 seconds to read. Select a shorter question.');
  return shortPresentation.timing(timing);
}
function buildTimeline(doc) {
  const timing = plan(doc), language = shortPresentation.locale(doc);
  const scene = { type: TEMPLATE, language, timing, duration: timing.duration, labels: labels[language],
    category: doc.subject.name, major: doc.major.name, difficulty: shortPresentation.difficulty(doc.questions[0].difficulty, language), number: shortPresentation.number(doc.video),
    question: doc.questions[0], website: doc.render_options?.website || 'maroquiz.com' };
  // Nonverbal audio stems from the supplied export; cues follow this template's timeline.
  const audio = name => path.join(__dirname, 'assets', name + '.wav');
  const cues = [[0, audio('opening')], [timing.question, audio('question'), { duration: timing.questionTyping, loop: true }],
    ...timing.choices.map((t, i) => [t, audio('choice-' + (i + 1))]), [timing.choices[3] + 1, audio('thinking')],
    [timing.reveal, audio('answer')], [timing.footer + .1, audio('closing')]];
  return { header: { language, category: scene.category }, segments: [{ scene, cues, music: { enabled: false, kind: 'question', duck: 'question' }, chapter: doc.questions[0].quiz_title || doc.video.title }] };
}
module.exports = { TEMPLATE, labels, validate, plan, buildTimeline, normalizeAudio: require('./audio').normalizeAudio };
