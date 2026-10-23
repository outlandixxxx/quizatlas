import { TestBed } from '@angular/core/testing';
import { TextField } from './text-field';

describe('Text field', () => {
  it('preserves form-control values and exposes its visible label to assistive technology', async () => {
    await TestBed.configureTestingModule({ imports: [TextField] }).compileComponents();
    const fixture = TestBed.createComponent(TextField);
    fixture.componentRef.setInput('label', 'Email');
    await fixture.whenStable();
    fixture.componentInstance.writeValue('learner@example.test');
    fixture.detectChanges();
    await fixture.whenStable();
    const input: HTMLInputElement = fixture.nativeElement.querySelector('input');
    expect(input.getAttribute('aria-label')).toBe('Email');
    expect(input.value).toBe('learner@example.test');
    fixture.componentRef.setInput('readonly', true);
    fixture.detectChanges();
    expect(input.readOnly).toBe(true);
    fixture.componentInstance.setDisabledState(true);
    fixture.detectChanges();
    await fixture.whenStable();
    expect(input.disabled).toBe(true);
  });
});
