const corrected = doc => doc.content_mode === 'corrected-questions';
const labels = {
  fr: { title: 'Questions corrigées', question: 'Question', answer: 'Réponse correcte', answers: 'Réponses correctes', explanation: 'Explication', continued: 'suite', questions: 'questions', true: 'Vrai', false: 'Faux' },
  en: { title: 'Corrected questions', question: 'Question', answer: 'Correct answer', answers: 'Correct answers', explanation: 'Explanation', continued: 'continued', questions: 'questions', true: 'True', false: 'False' },
  ar: { title: 'أسئلة مصححة', question: 'السؤال', answer: 'الإجابة الصحيحة', answers: 'الإجابات الصحيحة', explanation: 'الشرح', continued: 'تتمة', questions: 'أسئلة', true: 'صحيح', false: 'خطأ' },
};
const positive = n => Number.isSafeInteger(n) && n > 0;
function validateCorrection(source, paragraphs) {
  const context = source.correction;
  if (context?.format_version !== 'corrected-questions-v1' || !Array.isArray(context.issues) || context.issues.length || !Array.isArray(context.questions) || context.questions.length !== source.notes.length) throw Error('Corrected-question source is missing, invalid or unsupported. Refresh it and review the reported source issues.');
  const choices = new Set();
  for (const [i, q] of context.questions.entries()) {
    const note = source.notes[i];
    if (q.question_id !== note.question_id || q.order !== note.order || q.quiz_id !== source.quiz.id || typeof q.question !== 'string' || !q.question.trim() || !['single_choice', 'multiple_choice', 'true_false'].includes(q.type)) throw Error('Question ownership, type or order differs from its source.');
    if (!Array.isArray(q.correct_answers) || !q.correct_answers.length || q.type !== 'multiple_choice' && q.correct_answers.length !== 1) throw Error('Missing or contradictory correct answers.');
    let previous;
    for (const a of q.correct_answers) {
      if (!positive(a.choice_id) || choices.has(a.choice_id) || a.question_id !== q.question_id || !Number.isSafeInteger(a.order) || typeof a.text !== 'string' || !a.text.trim()
        || previous && (a.order < previous.order || a.order === previous.order && a.choice_id < previous.choice_id)) throw Error('Correct-answer ownership, identity, text or ordering is invalid.');
      choices.add(a.choice_id); previous = a;
      if (q.type === 'true_false') {
        const value = { true: true, vrai: true, 'صحيح': true, false: false, faux: false, 'خطأ': false }[a.text.trim().toLowerCase()];
        if (typeof a.truth_value !== 'boolean' || value !== a.truth_value) throw Error('Unsupported or contradictory stored truth value.');
      }
      for (const text of [q.question, a.text, note.explanation]) if (/!\[[^\]]*\]\s*\(|<(?:img|image|video|audio|iframe|object|embed)\b[^>]*(?:src|data|href)\s*=|<svg\b[^>]*>/iu.test(text)) throw Error('Embedded media is unsupported in corrected-question documents.');
    }
  }
  const byQuestion = new Map();
  for (const p of paragraphs) {
    if (p.sourceQuestionIds.length !== 1 || byQuestion.has(p.sourceQuestionIds[0])) throw Error('Corrected questions require one separate explanation per source question. Review the draft mappings; existing edits were preserved.');
    byQuestion.set(p.sourceQuestionIds[0], p);
  }
  if (byQuestion.size !== source.notes.length || source.notes.some(n => !byQuestion.has(n.question_id))) throw Error('Every source question needs its own mapped revision explanation.');
  return byQuestion;
}
function entries(quiz, language = 'fr') {
  const paragraphs = validateCorrection(quiz.source, quiz.paragraphs), words = labels[language];
  return quiz.source.correction.questions.map((q, index) => ({ questionId: q.question_id, number: index + 1, parts: [
    { role: 'question', text: q.question },
    ...q.correct_answers.map(a => ({ role: 'answer', choiceId: a.choice_id, text: q.type === 'true_false' ? words[String(a.truth_value)] : a.text })),
    { role: 'explanation', paragraphId: paragraphs.get(q.question_id).id, text: paragraphs.get(q.question_id).text },
  ] }));
}
module.exports = { corrected, labels, entries, validateCorrection };
