import { TestBed } from '@angular/core/testing';
import { HttpTestingController } from '@angular/common/http/testing';
import { componentTestConfig } from '../../../../../testing/component-test';
import { RegisterForm } from './register-form';

it('renders registration fields and validates password confirmation and terms locally', async () => {
  TestBed.configureTestingModule(componentTestConfig(RegisterForm));
  const fixture = TestBed.createComponent(RegisterForm);
  await fixture.whenStable();
  const form = fixture.componentInstance.form;
  expect(fixture.nativeElement.querySelector('form')).not.toBeNull();
  form.controls.password.setValue('StrongFixturePassword42!');
  form.controls.password_confirmation.setValue('DifferentPassword42!');
  expect(form.hasError('passwordMismatch')).toBe(true);
  form.controls.password_confirmation.setValue('StrongFixturePassword42!');
  expect(form.hasError('passwordMismatch')).toBe(false);
  expect(form.controls.terms.hasError('required')).toBe(true);
  TestBed.inject(HttpTestingController).verify();
});
