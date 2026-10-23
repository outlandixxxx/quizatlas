import { provideHttpClient } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { TestBed } from '@angular/core/testing';
import { AdminYoutubeVideos } from './youtube-videos';
import { VideoBatchApi } from '../services/video-batch.api';
import { SubjectApi } from '../services/subject.api';
import { Major } from '../../../core/models/major';
import { Subject } from '../../../core/models/subject';

const major = (id: number): Major => ({
  id, name: `Major ${id}`, slug: `major-${id}`, description: null, is_active: true,
});
const subject = (id: number, majorId = 101, active = true): Subject => ({
  id, major: major(majorId), name: `Subject ${id}`, slug: `subject-${id}`,
  description: null, is_active: active,
});
const response = <T>(data: T[]) => ({ success: true, message: 'OK', data });

let http: HttpTestingController;
beforeEach(() => {
  TestBed.configureTestingModule({
    providers: [provideHttpClient(), provideHttpClientTesting(),
      { provide: VideoBatchApi, useValue: {} }],
  });
  http = TestBed.inject(HttpTestingController);
});
afterEach(() => http.verify());

function page(endpoint: string, number: number) {
  return http.expectOne(request => request.url.endsWith(`/${endpoint}`)
    && request.params.get('page') === String(number)
    && request.params.get('per_page') === '100');
}

it('loads later pages of majors and subjects before Select all filters by major and active status', () => {
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  component.ngOnInit();
  page('majors', 1).flush(response(Array.from({ length: 100 }, (_, i) => major(i + 1))));
  page('subjects', 1).flush(response(Array.from({ length: 100 }, (_, i) => subject(i + 1))));
  page('subjects', 2).flush(response([subject(101), subject(102, 101, false), subject(103, 1)]));
  expect(component.isLoading()).toBe(true);
  page('majors', 2).flush(response([major(101)]));

  expect(component.isLoading()).toBe(false);
  expect(component.majors()).toHaveLength(101);
  component.onMajorChange('101');
  component.selectAllSubjects();
  expect(component.selectedSubjectIds()).toEqual(Array.from({ length: 101 }, (_, i) => i + 1));

  component.onMajorChange('1');
  expect(component.selectedSubjectIds()).toEqual([]);
  component.selectAllSubjects();
  expect(component.selectedSubjectIds()).toEqual([103]);
  component.clearSubjects();
  expect(component.selectedSubjectIds()).toEqual([]);
});

it('checks for an empty next page when the total is an exact multiple of the page size', () => {
  let result: Subject[] | undefined;
  TestBed.inject(SubjectApi).listAll().subscribe(subjects => result = subjects);
  page('subjects', 1).flush(response(Array.from({ length: 100 }, (_, i) => subject(i + 1))));
  expect(result).toBeUndefined();
  page('subjects', 2).flush(response<Subject>([]));
  expect(result).toHaveLength(100);
});

it('reports a later page failure instead of exposing an incomplete subject picker', () => {
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  component.ngOnInit();
  page('majors', 1).flush(response([major(101)]));
  page('subjects', 1).flush(response(Array.from({ length: 100 }, (_, i) => subject(i + 1))));
  page('subjects', 2).flush({}, { status: 500, statusText: 'Server error' });
  expect(component.isLoading()).toBe(false);
  expect(component.subjects()).toEqual([]);
  expect(component.errorMsg()).toContain('Refresh to try again');
});
