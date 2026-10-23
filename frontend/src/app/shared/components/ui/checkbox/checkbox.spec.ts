import { TestBed } from '@angular/core/testing';
import { Checkbox } from './checkbox';

describe('Checkbox', () => {
  it('keeps native keyboard focus and form-control changes available', async () => {
    await TestBed.configureTestingModule({ imports: [Checkbox] }).compileComponents();
    const fixture = TestBed.createComponent(Checkbox);
    await fixture.whenStable();
    fixture.detectChanges();
    const input: HTMLInputElement = fixture.nativeElement.querySelector('input');
    const change = vi.fn();
    fixture.componentInstance.registerOnChange(change);
    expect(input.tabIndex).toBe(0);
    input.click();
    fixture.detectChanges();
    expect(change).toHaveBeenCalledWith(true);
    expect(fixture.componentInstance.checked).toBe(true);
    fixture.componentInstance.setDisabledState(true);
    fixture.detectChanges();
    expect(input.disabled).toBe(true);
  });
});
