import { CommonModule } from '@angular/common';
import { Component, OnInit, computed, inject, signal } from '@angular/core';
import { RouterLink } from '@angular/router';

import { MajorApi } from '../services/major.api';
import { Major } from '../../../core/models/major';
import {
  LongVideoType,
  SocialConfirmItem,
  SocialFact,
  SocialFormat,
  SocialPack,
  SocialPackApi,
  SocialPackDay,
  SocialQuestion,
  SocialReplacePayload,
  SocialReplaceResult,
} from '../services/social-pack.api';

type Rotation = 'A' | 'B';
type DifficultyMode = 'beginner' | 'beginner_intermediate';

interface DayConfig {
  date: string;
  dayOfWeek: number; // 0 = Sunday ... 6 = Saturday
  majorId: number | null;
  longVideo: LongVideoType;
}

const SITE_URL = 'https://maroquiz.com';
const FACTS_PER_VIDEO = 30;
const STORAGE_PREFIX = 'maroquiz.socialPack.rotation.';

/** Long video per day of week (index 0 = Sunday), as in the 30-day plan. */
const LONG_VIDEO_BY_DAY: LongVideoType[] = [
  'quiz',  // Sunday: marathon
  'quiz',  // Monday
  'facts', // Tuesday
  'quiz',  // Wednesday
  'facts', // Thursday
  'quiz',  // Friday
  'facts', // Saturday
];

/**
 * Default subject rotation from the plan (index 0 = Sunday).
 * Majors are matched by name keywords; your own choices are remembered.
 */
const ROTATION_KEYWORDS: Record<Rotation, Array<string[] | null>> = {
  A: [
    null,
    ['math'],
    ['informat', 'computer'],
    ['svt', 'biolog', 'vie et de la terre'],
    ['franc', 'french'],
    ['anglais', 'english'],
    ['econom'],
  ],
  B: [
    null,
    ['physi'],
    ['informat', 'computer'],
    ['chimi', 'chemis'],
    ['arab'],
    ['espagn', 'spanish'],
    ['financ'],
  ],
};

function normalize(value: string): string {
  return value
    .toLowerCase()
    .normalize('NFD')
    .replace(/[̀-ͯ]/g, '');
}

function toIsoDate(date: Date): string {
  const year = date.getFullYear();
  const month = String(date.getMonth() + 1).padStart(2, '0');
  const day = String(date.getDate()).padStart(2, '0');

  return `${year}-${month}-${day}`;
}

function parseIsoDate(iso: string): Date {
  const [year, month, day] = iso.split('-').map(Number);

  return new Date(year, month - 1, day);
}

function addDays(iso: string, days: number): string {
  const date = parseIsoDate(iso);
  date.setDate(date.getDate() + days);

  return toIsoDate(date);
}

/** The coming Monday (next week's Monday when today is Monday). */
function nextMonday(): string {
  const today = new Date();
  const daysUntilMonday = ((8 - today.getDay()) % 7) || 7;
  today.setDate(today.getDate() + daysUntilMonday);

  return toIsoDate(today);
}

@Component({
  selector: 'app-admin-social-pack',
  standalone: true,
  imports: [CommonModule, RouterLink],
  templateUrl: './social-pack.html',
  styleUrl: './social-pack.scss',
})
export class AdminSocialPack implements OnInit {
  private readonly majorApi = inject(MajorApi);
  private readonly api = inject(SocialPackApi);

  readonly majors = signal<Major[]>([]);
  readonly weekStart = signal(nextMonday());
  readonly rotation = signal<Rotation>('A');
  readonly difficultyMode = signal<DifficultyMode>('beginner');
  readonly dayConfigs = signal<DayConfig[]>([]);

  readonly pack = signal<SocialPack | null>(null);
  readonly isLoadingMajors = signal(false);
  readonly isBuilding = signal(false);
  readonly isConfirming = signal(false);
  readonly confirmed = signal(false);
  readonly replacingKey = signal<string | null>(null);
  readonly copiedKey = signal<string | null>(null);

  readonly errorMsg = signal<string | null>(null);
  readonly successMsg = signal<string | null>(null);

  readonly days = computed(() => this.pack()?.days ?? []);

  readonly difficulties = computed(() =>
    this.difficultyMode() === 'beginner'
      ? ['Beginner']
      : ['Beginner', 'Intermediate']
  );

  readonly warningCount = computed(() =>
    this.days().reduce((total, day) => total + day.warnings.length, 0)
  );

  ngOnInit(): void {
    this.isLoadingMajors.set(true);

    this.majorApi.list().subscribe({
      next: response => {
        this.majors.set(response.data);
        this.isLoadingMajors.set(false);
        this.rebuildDayConfigs();
      },
      error: () => {
        this.isLoadingMajors.set(false);
        this.errorMsg.set('Failed to load Majors.');
      },
    });
  }

  // ---------------------------------------------------------------------
  // Week configuration
  // ---------------------------------------------------------------------

  onWeekStartChange(value: string): void {
    if (!value) {
      return;
    }

    this.weekStart.set(value);
    this.rebuildDayConfigs();
  }

  onRotationChange(value: string): void {
    this.rotation.set(value === 'B' ? 'B' : 'A');
    this.rebuildDayConfigs();
  }

  onDifficultyChange(value: string): void {
    this.difficultyMode.set(
      value === 'beginner_intermediate' ? 'beginner_intermediate' : 'beginner'
    );
  }

  onDayMajorChange(index: number, value: string): void {
    const majorId = value ? Number(value) : null;

    this.dayConfigs.update(configs =>
      configs.map((config, i) => (i === index ? { ...config, majorId } : config))
    );

    const config = this.dayConfigs()[index];

    if (config) {
      this.saveRotationChoice(config.dayOfWeek, majorId);
    }
  }

  onDayLongVideoChange(index: number, value: string): void {
    const longVideo: LongVideoType =
      value === 'facts' || value === 'none' ? value : 'quiz';

    this.dayConfigs.update(configs =>
      configs.map((config, i) => (i === index ? { ...config, longVideo } : config))
    );
  }

  private rebuildDayConfigs(): void {
    const start = this.weekStart();
    const saved = this.loadRotationChoices();

    const configs: DayConfig[] = [];

    for (let offset = 0; offset < 7; offset++) {
      const date = addDays(start, offset);
      const dayOfWeek = parseIsoDate(date).getDay();

      const majorId = Object.prototype.hasOwnProperty.call(saved, dayOfWeek)
        ? saved[dayOfWeek]
        : this.matchMajor(ROTATION_KEYWORDS[this.rotation()][dayOfWeek]);

      configs.push({
        date,
        dayOfWeek,
        majorId: this.majors().some(major => major.id === majorId)
          ? majorId
          : null,
        longVideo: LONG_VIDEO_BY_DAY[dayOfWeek],
      });
    }

    this.dayConfigs.set(configs);
  }

  private matchMajor(keywords: string[] | null): number | null {
    if (!keywords) {
      return null;
    }

    const match = this.majors().find(major => {
      const name = normalize(major.name);

      return keywords.some(keyword => name.includes(keyword));
    });

    return match?.id ?? null;
  }

  private loadRotationChoices(): Record<number, number | null> {
    try {
      const raw = localStorage.getItem(STORAGE_PREFIX + this.rotation());

      return raw ? (JSON.parse(raw) as Record<number, number | null>) : {};
    } catch {
      return {};
    }
  }

  private saveRotationChoice(dayOfWeek: number, majorId: number | null): void {
    try {
      const choices = this.loadRotationChoices();
      choices[dayOfWeek] = majorId;
      localStorage.setItem(
        STORAGE_PREFIX + this.rotation(),
        JSON.stringify(choices)
      );
    } catch {
      // Storage unavailable: the choice simply isn't remembered.
    }
  }

  // ---------------------------------------------------------------------
  // Build, replace, confirm
  // ---------------------------------------------------------------------

  buildPack(): void {
    const configs = this.dayConfigs();

    if (!configs.some(config => config.majorId !== null)) {
      this.errorMsg.set('Choose a Major for at least one day.');
      return;
    }

    this.isBuilding.set(true);
    this.errorMsg.set(null);
    this.successMsg.set(null);
    this.confirmed.set(false);
    this.pack.set(null);

    this.api.preview({
      days: configs.map(config => ({
        date: config.date,
        major_id: config.majorId,
        long_video: config.longVideo,
      })),
      difficulties: this.difficulties(),
      facts_per_video: FACTS_PER_VIDEO,
    }).subscribe({
      next: response => {
        this.pack.set(response.data);
        this.isBuilding.set(false);
      },
      error: error => {
        this.isBuilding.set(false);
        this.errorMsg.set(
          error?.error?.message ?? 'Failed to build the weekly pack.'
        );
      },
    });
  }

  /**
   * Replaces one slot with the next best unused item.
   * For the Facebook post, pass groupIndex to replace a single question
   * instead of all three.
   */
  replace(day: SocialPackDay, format: SocialFormat, groupIndex?: number): void {
    const pack = this.pack();

    if (!pack || this.replacingKey()) {
      return;
    }

    const exclusions = this.collectExclusions(pack);
    const singleGroupQuestion = format === 'facebook_group' && groupIndex !== undefined;

    const payload: SocialReplacePayload = {
      format,
      major_id: day.major?.id ?? null,
      subject_id: day.subject?.id ?? null,
      count:
        format === 'facebook_group'
          ? (singleGroupQuestion ? 1 : 3)
          : format === 'fact_video'
            ? pack.facts_per_video
            : 1,
      difficulties: this.difficulties(),
      exclude_question_ids: exclusions.questionIds,
      exclude_texts: exclusions.texts,
      exclude_fact_ids: exclusions.factIds,
    };

    this.replacingKey.set(this.key(day, format, groupIndex));
    this.errorMsg.set(null);

    this.api.replace(payload).subscribe({
      next: response => {
        this.pack.update(current =>
          current
            ? {
                ...current,
                days: current.days.map(item =>
                  item.date === day.date
                    ? this.applyReplacement(item, format, response.data, groupIndex)
                    : item
                ),
              }
            : current
        );
        this.replacingKey.set(null);
        this.confirmed.set(false);
      },
      error: error => {
        this.replacingKey.set(null);
        this.errorMsg.set(
          error?.error?.message ?? 'No replacement could be found.'
        );
      },
    });
  }

  /**
   * "Never use": blocks the question forever on social media,
   * then fills its slot with the next best question.
   */
  neverUse(
    day: SocialPackDay,
    format: 'question_du_jour' | 'quiz_short' | 'facebook_group',
    question: SocialQuestion,
    groupIndex?: number
  ): void {
    if (this.replacingKey()) {
      return;
    }

    if (!confirm(`Never use this question on social media?\n\n"${question.text}"`)) {
      return;
    }

    this.replacingKey.set(this.key(day, format, groupIndex));
    this.errorMsg.set(null);
    this.successMsg.set(null);

    this.api.exclude(question.id, 'Marked from Social Pack').subscribe({
      next: () => {
        this.replacingKey.set(null);
        this.successMsg.set(`Question #${question.id} will never be used again on social media.`);
        this.replace(day, format, groupIndex);
      },
      error: error => {
        this.replacingKey.set(null);
        this.errorMsg.set(
          error?.error?.message ?? 'Failed to block this question.'
        );
      },
    });
  }

  confirmPack(): void {
    const pack = this.pack();

    if (!pack || this.isConfirming() || this.confirmed()) {
      return;
    }

    const items = this.buildConfirmItems(pack);

    if (!items.length) {
      this.errorMsg.set('This pack has nothing to confirm.');
      return;
    }

    this.isConfirming.set(true);
    this.errorMsg.set(null);
    this.successMsg.set(null);

    this.api.confirm(items).subscribe({
      next: response => {
        this.isConfirming.set(false);
        this.confirmed.set(true);

        const skipped = response.data.skipped.length;

        this.successMsg.set(
          `${response.data.created} item(s) marked as published.` +
            (skipped ? ` ${skipped} skipped (already published).` : '')
        );
      },
      error: error => {
        this.isConfirming.set(false);
        this.errorMsg.set(
          error?.error?.message ?? 'Failed to confirm the pack.'
        );
      },
    });
  }

  private collectExclusions(pack: SocialPack): {
    questionIds: number[];
    texts: string[];
    factIds: number[];
  } {
    const questions: SocialQuestion[] = [];
    const facts: SocialFact[] = [];

    for (const day of pack.days) {
      if (day.question_du_jour) questions.push(day.question_du_jour.question);
      if (day.quiz_short) questions.push(day.quiz_short.question);
      if (day.facebook_group) questions.push(...day.facebook_group.questions);
      if (day.fact_short) facts.push(day.fact_short.fact);
      if (day.fact_video) facts.push(...day.fact_video.facts);
    }

    return {
      questionIds: questions.map(question => question.id),
      texts: questions.map(question => question.text),
      factIds: facts.map(fact => fact.id),
    };
  }

  private applyReplacement(
    day: SocialPackDay,
    format: SocialFormat,
    data: SocialReplaceResult,
    groupIndex?: number
  ): SocialPackDay {
    const question = data.questions?.[0];
    const fact = data.facts?.[0];

    if (format === 'facebook_group' && groupIndex !== undefined) {
      return day.facebook_group && question
        ? {
            ...day,
            facebook_group: {
              questions: day.facebook_group.questions.map((item, index) =>
                index === groupIndex ? question : item
              ),
            },
          }
        : day;
    }

    switch (format) {
      case 'question_du_jour':
        return day.question_du_jour && question
          ? { ...day, question_du_jour: { ...day.question_du_jour, question } }
          : day;

      case 'quiz_short':
        return day.quiz_short && question
          ? { ...day, quiz_short: { ...day.quiz_short, question } }
          : day;

      case 'facebook_group':
        return data.questions?.length
          ? { ...day, facebook_group: { questions: data.questions } }
          : day;

      case 'fact_short':
        return day.fact_short && fact
          ? { ...day, fact_short: { ...day.fact_short, fact } }
          : day;

      case 'fact_video':
        return day.fact_video && data.facts?.length
          ? { ...day, fact_video: { ...day.fact_video, facts: data.facts } }
          : day;
    }
  }

  private buildConfirmItems(pack: SocialPack): SocialConfirmItem[] {
    const items: SocialConfirmItem[] = [];

    for (const day of pack.days) {
      if (day.question_du_jour) {
        const question = day.question_du_jour.question;
        items.push({
          post_date: day.date,
          format: 'question_du_jour',
          subject_id: question.subject_id,
          question_id: question.id,
          series_number: day.question_du_jour.number,
        });
      }

      if (day.quiz_short) {
        const question = day.quiz_short.question;
        items.push({
          post_date: day.date,
          format: 'quiz_short',
          subject_id: question.subject_id,
          question_id: question.id,
          series_number: day.quiz_short.number,
        });
      }

      day.facebook_group?.questions.forEach((question, index) =>
        items.push({
          post_date: day.date,
          format: 'facebook_group',
          subject_id: question.subject_id,
          question_id: question.id,
          position: index + 1,
        })
      );

      if (day.fact_short) {
        const fact = day.fact_short.fact;
        items.push({
          post_date: day.date,
          format: 'fact_short',
          subject_id: fact.subject_id,
          fact_id: fact.id,
          series_number: day.fact_short.number,
        });
      }

      day.fact_video?.facts.forEach((fact, index) =>
        items.push({
          post_date: day.date,
          format: 'fact_video',
          subject_id: fact.subject_id,
          fact_id: fact.id,
          series_number: day.fact_video?.number ?? null,
          position: index + 1,
        })
      );
    }

    return items;
  }

  // ---------------------------------------------------------------------
  // Ready-to-copy texts
  // ---------------------------------------------------------------------

  dayLabel(iso: string): string {
    return parseIsoDate(iso).toLocaleDateString('fr-FR', {
      weekday: 'long',
      day: 'numeric',
      month: 'long',
    });
  }

  subjectLabel(day: SocialPackDay): string {
    return day.subject?.name ?? day.major?.name ?? '';
  }

  whatsappQuestion(day: SocialPackDay): string {
    const item = day.question_du_jour;

    if (!item) {
      return '';
    }

    const choices = item.question.choices
      .map(choice => `${choice.label}) ${choice.text}`)
      .join('\n');

    return [
      `Question du jour #${item.number} – ${day.major?.name ?? ''}`,
      item.question.text,
      choices,
      'Réponse ce soir à 20h30.',
      'سؤال اليوم – الجواب مع 8 ونص د العشية',
    ].join('\n');
  }

  whatsappAnswer(day: SocialPackDay): string {
    const item = day.question_du_jour;

    if (!item) {
      return '';
    }

    const correct = item.question.correct;

    return [
      `Réponse #${item.number} : ${correct.label}) ${correct.text}`,
      item.question.explanation,
      `Teste-toi sur un quiz complet de ${this.subjectLabel(day)} : ${SITE_URL}`,
    ].join('\n');
  }

  canvaText(day: SocialPackDay): string {
    const item = day.quiz_short;

    if (!item) {
      return '';
    }

    return [
      item.question.text,
      ...item.question.choices.map(choice => `${choice.label}. ${choice.text}`),
      `Bonne réponse : ${item.question.correct.label}`,
    ].join('\n');
  }

  facebookPost(day: SocialPackDay): string {
    const questions = day.facebook_group?.questions ?? [];

    if (!questions.length) {
      return '';
    }

    const example = ['A', 'D', 'B'].slice(0, questions.length).join('-');

    const lines = [
      `${questions.length} questions de ${this.subjectLabel(day)} pour te tester :`,
      '',
    ];

    questions.forEach((question, index) => {
      lines.push(`${index + 1}) ${question.text}`);
      lines.push(
        question.choices.map(choice => `${choice.label}. ${choice.text}`).join('   ')
      );
      lines.push('');
    });

    lines.push(
      `Réponds en commentaire (ex. ${example}), correction ce soir.`,
      `Le quiz complet, gratuit : ${SITE_URL}`,
      'بالعربية: أسئلة سريعة، جاوب فالتعليقات والتصحيح هاد العشية.',
      '#MaroQuiz #QCM'
    );

    return lines.join('\n');
  }

  facebookCorrection(day: SocialPackDay): string {
    const questions = day.facebook_group?.questions ?? [];

    if (!questions.length) {
      return '';
    }

    const answers = questions
      .map((question, index) => `${index + 1}-${question.correct.label}`)
      .join(', ');

    return [
      `Correction : ${answers}`,
      ...questions.map(
        (question, index) => `${index + 1}) ${question.explanation}`
      ),
    ].join('\n');
  }

  factShortJson(day: SocialPackDay): string {
    const item = day.fact_short;

    if (!item) {
      return '';
    }

    return JSON.stringify(
      {
        format_version: '1.0',
        type: 'fact_short',
        number: item.number,
        major: day.major,
        subject: item.fact.subject_name,
        fact: {
          id: item.fact.id,
          fr: item.fact.fr,
          en: item.fact.en,
          ar: item.fact.ar,
          source_url: item.fact.source_url,
        },
      },
      null,
      2
    );
  }

  factVideoJson(day: SocialPackDay): string {
    const item = day.fact_video;

    if (!item) {
      return '';
    }

    return JSON.stringify(
      {
        format_version: '1.0',
        type: 'fact_video',
        number: item.number,
        title: `${item.facts.length} faits – ${this.subjectLabel(day)}`,
        major: day.major,
        subject: day.subject,
        facts: item.facts.map((fact, index) => ({
          order: index + 1,
          id: fact.id,
          fr: fact.fr,
          en: fact.en,
          ar: fact.ar,
          source_url: fact.source_url,
        })),
        meta: {
          fact_count: item.facts.length,
          exported_at: new Date().toISOString(),
        },
      },
      null,
      2
    );
  }

  weekJson(): string {
    const pack = this.pack();

    return pack ? JSON.stringify(pack, null, 2) : '';
  }

  // ---------------------------------------------------------------------
  // Helpers used by the template
  // ---------------------------------------------------------------------

  key(day: SocialPackDay, format: string, index?: number): string {
    return index === undefined
      ? `${day.date}:${format}`
      : `${day.date}:${format}:${index}`;
  }

  isReplacing(day: SocialPackDay, format: SocialFormat, index?: number): boolean {
    return this.replacingKey() === this.key(day, format, index);
  }

  /** "62% right · 34 players" once enough players answered. */
  playerLabel(question: SocialQuestion): string {
    const stats = question.player_stats;

    if (stats.success_rate === null) {
      return stats.answers > 0
        ? `${stats.answers} player(s) so far`
        : 'No player data yet';
    }

    return `${Math.round(stats.success_rate * 100)}% right · ${stats.answers} players`;
  }

  async copy(text: string, key: string): Promise<void> {
    if (!text) {
      return;
    }

    try {
      await navigator.clipboard.writeText(text);
      this.copiedKey.set(key);

      setTimeout(() => {
        if (this.copiedKey() === key) {
          this.copiedKey.set(null);
        }
      }, 1500);
    } catch {
      this.errorMsg.set('Clipboard access failed. Select and copy the text manually.');
    }
  }
}
