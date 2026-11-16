'use strict';
const labels = {
  fr: { 'quiz-long': 'Quiz', 'facts-long': 'Le saviez-vous ?', 'facts-short': 'Le saviez-vous ?', 'five-seconds': '5 secondes pour répondre', 'defi-du-jour': 'Défi du jour', 'niveau-concours': 'Niveau concours', 'language-day': 'Language Day', questions: 'questions', question: 'question', facts: 'faits', fact: 'fait', selected: 'Une question de cette vidéo', website: 'maroquiz.com' },
  en: { 'quiz-long': 'Quiz', 'facts-long': 'Did you know?', 'facts-short': 'Did you know?', 'five-seconds': '5 seconds to answer', 'defi-du-jour': 'Daily challenge', 'niveau-concours': 'Exam challenge', 'language-day': 'Language Day', questions: 'questions', question: 'question', facts: 'facts', fact: 'fact', selected: 'A question from this video', website: 'maroquiz.com' },
  ar: { 'quiz-long': 'اختبر معلوماتك', 'facts-long': 'هل تعلم؟', 'facts-short': 'هل تعلم؟', 'five-seconds': '٥ ثوانٍ للإجابة', 'defi-du-jour': 'تحدي اليوم', 'niveau-concours': 'مستوى المباراة', 'language-day': 'يوم اللغات', questions: 'الأسئلة', facts: 'المعلومات', selected: 'سؤال من هذا الفيديو', website: 'maroquiz.com' },
};
function palette(id, background, primary, secondary = '#FFD33D') {
  return { id, background, primary, secondary, text: '#FFFDF5', muted: '#E7E0D8', badge: '#FFD33D', badgeText: '#242123' };
}
const majors = {
  'health-competition': { asset: 'health', names: ['Concours de santé', 'Health Competition', 'مباراة الصحة'], palette: palette('health', '#092B2E', '#58D6C3') },
  'teaching-competition': { asset: 'education', names: ['Concours d’enseignement', 'Teaching Competition', 'مباراة التعليم'], palette: palette('education', '#2B2148', '#C9ADF4') },
  physics: { asset: 'physics', names: ['Physique', 'Physics', 'الفيزياء'], palette: palette('physics', '#3E291C', '#FFA53A') },
  mathematics: { asset: 'mathematics', names: ['Mathématiques', 'Mathematics', 'الرياضيات'], palette: palette('mathematics', '#2A2041', '#C27BFF') },
  'computer-science-it': { asset: 'it', names: ['Informatique', 'Computer Science & IT', 'المعلوميات'], palette: palette('it', '#111E40', '#4F8CFF') },
  chemistry: { asset: 'chemistry', names: ['Chimie', 'Chemistry', 'الكيمياء'], palette: palette('chemistry', '#07303C', '#22D3EE') },
  finance: { asset: 'finance', names: ['Finance', 'Finance', 'المالية'], palette: palette('finance', '#163D2A', '#9BDEB7') },
  economy: { asset: 'economy', names: ['Économie', 'Economics', 'الاقتصاد'], palette: palette('economy', '#46291D', '#F6B48A') },
  svt: { asset: 'svt', names: ['SVT', 'Life Sciences', 'علوم الحياة والأرض'], palette: palette('svt', '#21331B', '#A3E635') },
  arabic: { asset: 'arabic', names: ['Arabe', 'Arabic', 'اللغة العربية'], palette: palette('arabic', '#43243A', '#F3B0CD') },
  english: { asset: 'english', names: ['Anglais', 'English', 'اللغة الإنجليزية'], palette: palette('english', '#19364B', '#A6D5EB') },
  spanish: { asset: 'spanish', names: ['Espagnol', 'Spanish', 'اللغة الإسبانية'], palette: palette('spanish', '#4B281E', '#F7B28C') },
  french: { asset: 'french', names: ['Français', 'French', 'اللغة الفرنسية'], palette: palette('french', '#352444', '#D4B2EF') },
};
const fallback = { asset: 'neutral', palette: palette('neutral', '#242123', '#FFD33D', '#FF9640') };
const templates = Object.fromEntries(['quiz-long', 'facts-long', 'facts-short', 'five-seconds', 'defi-du-jour', 'niveau-concours', 'language-day'].map(id => [id, {
  id, status: id === 'language-day' ? 'planned' : 'available', selectable: id !== 'language-day',
  format: ['quiz-long', 'facts-long'].includes(id) ? 'landscape' : 'portrait', layouts: ['focus', 'split', 'editorial'],
}]));
function majorFor(value = {}) {
  if (majors[value.slug]) return { slug: value.slug, ...majors[value.slug] };
  const name = String(value.name || value.label || '').normalize('NFC').toLocaleLowerCase();
  for (const [slug, config] of Object.entries(majors)) if (config.names.some(label => label.normalize('NFC').toLocaleLowerCase() === name)) return { slug, ...config };
  // Mixed Economy/Finance ministries and new Majors remain neutral, never guessed.
  return { slug: value.slug || 'unknown', ...fallback };
}
module.exports = { labels, majors, fallback, templates, majorFor, palette };
