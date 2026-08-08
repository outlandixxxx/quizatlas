import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';

interface FaqItem {
  question: string;
  answer: string;
  open: boolean;
}

@Component({
  selector: 'app-faq',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './faq.html',
  styleUrl: './faq.scss',
})
export class Faq {
  items: FaqItem[] = [
    {
      question: 'Is QuizAtlas free to use?',
      answer: 'Yes. Creating an account, taking quizzes, and tracking your progress is free. Some advanced features may be part of an optional premium tier in the future, but core practice tools stay accessible.',
      open: false,
    },
    {
      question: 'Do I need an account to try a quiz?',
      answer: 'No. You can try a random 20-question trial quiz for any major or subject directly from the homepage without signing up. Creating an account lets you save your progress, track stats, and access the full quiz library.',
      open: false,
    },
    {
      question: 'What\'s the difference between Tutor Mode and Exam Mode?',
      answer: 'Tutor Mode shows you whether each answer is correct immediately, along with an explanation. Exam Mode holds all feedback until you finish the quiz, simulating real exam conditions.',
      open: false,
    },
    {
      question: 'How is the leaderboard ranking calculated?',
      answer: 'Rankings are based on XP earned from completing quizzes. You can view global, country, major, and subject-specific leaderboards.',
      open: false,
    },
    {
      question: 'Can I add or request a subject that isn\'t available yet?',
      answer: 'Yes — use the feedback form to suggest a major, subject, or quiz topic you\'d like to see added.',
      open: false,
    },
    {
      question: 'I found a bug or incorrect question. How do I report it?',
      answer: 'Use the "Report Question" button while taking a quiz, or submit details through the feedback form.',
      open: false,
    },
  ];

  toggle(item: FaqItem): void {
    item.open = !item.open;
  }
}