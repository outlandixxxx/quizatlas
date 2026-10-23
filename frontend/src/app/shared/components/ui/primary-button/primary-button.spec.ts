import { TestBed } from '@angular/core/testing';
import { PrimaryButton } from './primary-button';

describe('Primary button', () => {
  it('forwards form submission and loading-disabled inputs to the native button', async () => {
    await TestBed.configureTestingModule({ imports: [PrimaryButton] }).compileComponents();
    const fixture = TestBed.createComponent(PrimaryButton);
    fixture.componentRef.setInput('type', 'submit');
    fixture.componentRef.setInput('disabled', true);
    await fixture.whenStable();
    fixture.detectChanges();
    const button: HTMLButtonElement = fixture.nativeElement.querySelector('button');
    expect(button.type).toBe('submit');
    expect(button.disabled).toBe(true);
    fixture.componentRef.setInput('disabled', false);
    fixture.detectChanges();
    expect(button.disabled).toBe(false);
  });
});
