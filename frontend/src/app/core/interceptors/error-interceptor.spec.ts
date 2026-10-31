import { TestBed } from '@angular/core/testing';
import { HttpClient, provideHttpClient, withInterceptors } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { errorInterceptor } from './error-interceptor';

describe('errorInterceptor', () => {
  it('propagates a 401 without owning session mutation or navigation', () => {
    vi.spyOn(console, 'error').mockImplementation(() => {});
    TestBed.configureTestingModule({
      providers: [
        provideHttpClient(withInterceptors([errorInterceptor])),
        provideHttpClientTesting(),
      ],
    });
    let status;
    TestBed.inject(HttpClient)
      .get('https://external.example/resource')
      .subscribe({ error: (error) => (status = error.status) });
    const backend = TestBed.inject(HttpTestingController);
    backend
      .expectOne('https://external.example/resource')
      .flush({}, { status: 401, statusText: 'Unauthorized' });
    expect(status).toBe(401);
    backend.verify();
    vi.restoreAllMocks();
  });
});
