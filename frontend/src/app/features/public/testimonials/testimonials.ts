import { ChangeDetectionStrategy, Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';

type TestimonialLang = 'ar' | 'fr' | 'en';

interface Testimonial {
  lang: TestimonialLang;
  quote: string;
  name: string;
  role: string;
  initials: string;
  avatarClass: string;
}

const TESTIMONIALS: Testimonial[] = [
  // French
  {
    lang: 'fr',
    quote: "Grâce à MarocQuiz, j'ai pu améliorer mon niveau et réussir mes examens avec confiance.",
    name: 'Sarah L.',
    role: 'Étudiante en Droit',
    initials: 'SL',
    avatarClass: '',
  },
  {
    lang: 'fr',
    quote: 'Une plateforme complète, simple à utiliser et très efficace. Je la recommande à tous les étudiants.',
    name: 'Mehdi T.',
    role: 'Étudiant en Informatique',
    initials: 'MT',
    avatarClass: 'alt-color',
  },
  {
    lang: 'fr',
    quote: "Les quiz sont bien construits et couvrent exactement ce dont j'avais besoin pour réviser efficacement.",
    name: 'Imane B.',
    role: 'Étudiante en Économie',
    initials: 'IB',
    avatarClass: 'alt-color-2',
  },

  // English
  {
    lang: 'en',
    quote: 'MarocQuiz helped me a lot to prepare for my exams. The questions are well structured and relevant.',
    name: 'Omar K.',
    role: 'Computer Science Student',
    initials: 'OK',
    avatarClass: 'alt-color-2',
  },
  {
    lang: 'en',
    quote: "The Tutor Mode explanations made a huge difference — I actually understand my mistakes now instead of just memorizing answers.",
    name: 'Layla H.',
    role: 'Medicine Student',
    initials: 'LH',
    avatarClass: '',
  },
  {
    lang: 'en',
    quote: 'Clean interface, no distractions, and the leaderboard keeps me motivated to practice daily.',
    name: 'Karim R.',
    role: 'Business Student',
    initials: 'KR',
    avatarClass: 'alt-color',
  },

  // Arabic
  {
    lang: 'ar',
    quote: 'منصة رائعة ساعدتني كثيرا في التحضير لامتحاناتي. الأسئلة منظمة وواضحة.',
    name: 'ياسين العلوي',
    role: 'طالب طب',
    initials: 'يع',
    avatarClass: '',
  },
  {
    lang: 'ar',
    quote: 'أفضل موقع استعملته للمراجعة، سهل الاستخدام ويغطي جميع المواد التي أحتاجها.',
    name: 'سلمى الإدريسي',
    role: 'طالبة حقوق',
    initials: 'سإ',
    avatarClass: 'alt-color',
  },
  {
    lang: 'ar',
    quote: 'التوضيحات بعد كل سؤال ساعدتني أفهم أخطائي بدل ما نحفظ الجواب غير.',
    name: 'أمين بنعلي',
    role: 'طالب إعلاميات',
    initials: 'أب',
    avatarClass: 'alt-color-2',
  },
];

@Component({
  selector: 'app-testimonials',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './testimonials.html',
  styleUrl: './testimonials.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class Testimonials {
  activeLangTab: TestimonialLang = 'fr';

  readonly allTestimonials = TESTIMONIALS;

  get filteredTestimonials(): Testimonial[] {
    return this.allTestimonials.filter(t => t.lang === this.activeLangTab);
  }

  setLangTab(lang: TestimonialLang): void {
    this.activeLangTab = lang;
  }
}