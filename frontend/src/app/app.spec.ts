import { componentTestConfig } from '../testing/component-test';
import { TestBed } from '@angular/core/testing';
import { App } from './app';

describe('App', () => {
  beforeEach(async () => {
    vi.stubGlobal('matchMedia', (query: string) => ({ matches: false, media: query }));
    await TestBed.configureTestingModule(componentTestConfig(App)).compileComponents();
  });
  afterEach(() => vi.unstubAllGlobals());

  it('should create the app', () => {
    const fixture = TestBed.createComponent(App);
    const app = fixture.componentInstance;
    expect(app).toBeTruthy();
  });

  it('renders the application router outlet', async () => {
    const fixture = TestBed.createComponent(App);
    await fixture.whenStable();
    const compiled = fixture.nativeElement as HTMLElement;
    expect(compiled.querySelector('router-outlet')).not.toBeNull();
  });
});
