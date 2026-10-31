import { TestBed } from '@angular/core/testing';
import { provideHttpClient } from '@angular/common/http';
import { provideHttpClientTesting, HttpTestingController } from '@angular/common/http/testing';
import { TeacherShareApi } from './teacher-share.api';
import { Observable } from 'rxjs';

describe('teacher builder API boundary', () => {
  beforeEach(() => TestBed.configureTestingModule({ providers: [provideHttpClient(), provideHttpClientTesting()] }));
  afterEach(() => TestBed.inject(HttpTestingController).verify());
  it('uses the teacher scope for quiz and atomic question writes', () => {
    const api = TestBed.inject(TeacherShareApi), http = TestBed.inject(HttpTestingController);
    const quiz = { subject_id: 2, title: 'Fixture', duration: 20, passing_score: 50 };
    const question = { quiz_id: 3, question: 'Fixture', type: 'multiple_choice' as const, marks: 1, order: 1,
      choices: [{ choice_text: 'One', is_correct: true }, { choice_text: 'Two', is_correct: true }] };
    const calls: [() => Observable<unknown>, string, string][] = [
      [() => api.createQuiz(quiz), 'POST', '/teacher/quizzes'], [() => api.updateQuiz(3, quiz), 'PUT', '/teacher/quizzes/3'],
      [() => api.deleteQuiz(3), 'DELETE', '/teacher/quizzes/3'], [() => api.createQuestion(question), 'POST', '/teacher/questions'],
      [() => api.updateQuestion(4, question), 'PUT', '/teacher/questions/4'], [() => api.deleteQuestion(4), 'DELETE', '/teacher/questions/4'],
    ];
    for (const [request, method, suffix] of calls) {
      request().subscribe();
      const pending = http.expectOne(r => r.url.endsWith(suffix));
      expect(pending.request.method).toBe(method);
      if (suffix === '/teacher/questions') expect(pending.request.body.choices).toEqual(question.choices);
      pending.flush({ success: true, data: null });
    }
  });
});
