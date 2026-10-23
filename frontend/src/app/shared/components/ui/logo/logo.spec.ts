import { TestBed } from '@angular/core/testing';
import { provideRouter } from '@angular/router';
import { Logo } from './logo';

describe('Official MaroQuiz branding', () => {
  it('renders the supplied square logo with an accessible name and the existing home link', async () => {
    await TestBed.configureTestingModule({
      imports: [Logo],
      providers: [provideRouter([])],
    }).compileComponents();
    const fixture = TestBed.createComponent(Logo);
    await fixture.whenStable();
    fixture.detectChanges();
    const link: HTMLAnchorElement = fixture.nativeElement.querySelector('a');
    const img: HTMLImageElement = link.querySelector('img')!;
    expect(link.getAttribute('href')).toBe('/');
    expect(img.getAttribute('src')).toBe('/assets/images/maroquiz-logo-192.webp');
    expect(img.alt).toBe('MaroQuiz');
    expect(img.getAttribute('width')).toBe(img.getAttribute('height'));
  });
});
