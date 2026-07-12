import {
  ChangeDetectionStrategy,
  Component,
  forwardRef,
  Input,
} from '@angular/core';
import { CommonModule } from '@angular/common';
import {
  ControlValueAccessor,
  FormsModule,
  NG_VALUE_ACCESSOR,
} from '@angular/forms';

import { ChangeDetectorRef, inject } from '@angular/core';

@Component({
  selector: 'app-password-field',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './password-field.html',
  styleUrl: './password-field.scss',
  providers: [
    {
      provide: NG_VALUE_ACCESSOR,
      useExisting: forwardRef(() => PasswordField),
      multi: true,
    },
  ],
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class PasswordField implements ControlValueAccessor {
  @Input() label = 'Password';

  @Input() placeholder = '';

  @Input() error = '';

  @Input() disabled = false;

  value = '';

  focused = false;

  visible = false;

  onChange = (_: string) => {};

  onTouched = () => {};

 writeValue(value: string): void {

  this.value = value ?? '';

  this.cdr.markForCheck();

}

  registerOnChange(fn: any): void {
    this.onChange = fn;
  }

  registerOnTouched(fn: any): void {
    this.onTouched = fn;
  }

 setDisabledState(disabled: boolean): void {

  this.disabled = disabled;

  this.cdr.markForCheck();

}

 update(value: string): void {

  this.value = value;

  this.onChange(value);

  this.onTouched();

}

  toggle(): void {
    this.visible = !this.visible;
  }
  private readonly cdr = inject(ChangeDetectorRef);
}