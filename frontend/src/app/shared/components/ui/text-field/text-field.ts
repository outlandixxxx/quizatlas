import {
  ChangeDetectionStrategy,
  Component,
  forwardRef,
  Input,
} from '@angular/core';
import {
  CommonModule
} from '@angular/common';
import {
  ControlValueAccessor,
  FormsModule,
  NG_VALUE_ACCESSOR
} from '@angular/forms';

import { ChangeDetectorRef, inject } from '@angular/core';

@Component({
  selector: 'app-text-field',
  standalone: true,
  imports: [
    CommonModule,
    FormsModule
  ],
  templateUrl: './text-field.html',
  styleUrl: './text-field.scss',
  providers: [
    {
      provide: NG_VALUE_ACCESSOR,
      useExisting: forwardRef(() => TextField),
      multi: true
    }
  ],
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class TextField implements ControlValueAccessor {

  @Input() label = '';

  @Input() placeholder = '';

  @Input() icon = '';

  @Input() type = 'text';

  @Input() error = '';

  @Input() disabled = false;

  @Input() readonly = false;

  value = '';

  focused = false;

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
  private readonly cdr = inject(ChangeDetectorRef);

}