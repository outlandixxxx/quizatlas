import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';

interface StatMetric {
  titleKey: string;
  value: string;
  change: string;
  icon: string;
}

interface ActiveModule {
  name: string;
  tag: string;
  progress: number;
  icon: string;
  color: string;
}

interface ExamResult {
  name: string;
  category: string;
  score: string;
  passed: boolean;
}

interface LeaderboardUser {
  rank: number;
  name: string;
  score: number;
  isUser: boolean;
}

@Component({
  selector: 'app-dashboard',
  standalone: true,
  imports: [CommonModule, RouterLink, TranslocoModule],
  templateUrl: './dashboard.html',
  styleUrl: './dashboard.scss'
})
export class Dashboard {
  activeTab: 'inProgress' | 'recommended' | 'recentPdf' = 'inProgress';

  stats: StatMetric[] = [
    { titleKey: 'DASHBOARD.STATS.TOTAL_QCMS', value: '1,240', change: '+120', icon: 'assignment_turned_in' },
    { titleKey: 'DASHBOARD.STATS.AVG_SCORE', value: '84%', change: '+3%', icon: 'ads_click' },
    { titleKey: 'DASHBOARD.STATS.STREAK', value: '7 Days', change: '🔥 Keep going', icon: 'local_fire_department' },
    { titleKey: 'DASHBOARD.STATS.TIME_SPENT', value: '18.5 hrs', change: '+2.5 hrs', icon: 'schedule' }
  ];

  activeModules: ActiveModule[] = [
    { name: 'Master CS Entrance Exam - General Logic', tag: 'Computer Science', progress: 65, icon: 'computer', color: '#3a86ff' },
    { name: 'Public Administration Recruitment QCM', tag: 'General Knowledge', progress: 40, icon: 'account_balance', color: '#38b000' },
    { name: 'Data Structures & Algorithms Mock Test', tag: 'Software Eng.', progress: 20, icon: 'code', color: '#ff006e' }
  ];

  recentResults: ExamResult[] = [
    { name: 'Job Competition Test 2024 - Math & Logic', category: 'General', score: '88%', passed: true },
    { name: 'Master Entrance Exam 2023 - Software Eng', category: 'CS', score: '76%', passed: true },
    { name: 'Management & Economics QCM Mock', category: 'Economics', score: '52%', passed: false },
    { name: 'English Proficiency Exam Practice', category: 'Languages', score: '94%', passed: true }
  ];

  leaderboard: LeaderboardUser[] = [
    { rank: 1, name: 'Youssef El Amrani', score: 2840, isUser: false },
    { rank: 2, name: 'Sarah Alami', score: 2410, isUser: false },
    { rank: 3, name: 'Karim Bennani', score: 2190, isUser: false },
    { rank: 14, name: 'Alex Johnson (You)', score: 1240, isUser: true }
  ];

  setTab(tab: 'inProgress' | 'recommended' | 'recentPdf') {
    this.activeTab = tab;
  }
}