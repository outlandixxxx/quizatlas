// Metadata takes precedence; older exports without metadata retain a text fallback.
function languageOf(doc) {
  for (const value of [doc.language, doc.video?.language, doc.subject?.language]) {
    const lang = String(value || '').toLowerCase().split(/[-_]/)[0];
    if (['ar', 'fr', 'en'].includes(lang)) return lang;
  }
  const suffix = String(doc.subject?.slug || '').match(/(?:^|[-_])(ar|fr|en)$/i);
  if (suffix) return suffix[1].toLowerCase();
  return /[\u0600-\u06ff]/u.test((doc.questions || []).map(q => q.text).join(' ')) ? 'ar' : 'fr';
}
const arabicTexts = {
  lastTitle: 'السؤال الأخير!', lastSubtitle: 'ركز جيداً…', halfTitle: 'وصلنا إلى {n} أسئلة!',
  halfSubtitle: 'كم إجابة صحيحة حتى الآن؟', scoreTitle: 'ما هي نتيجتك؟', scoreFooter: 'اكتب نتيجتك في التعليقات!',
  tierTop: 'ممتاز!', tierMid: 'جيد جداً!', tierLow: 'واصل المراجعة',
};
module.exports = { languageOf, arabicTexts };
