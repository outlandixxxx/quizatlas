import { TestBed } from '@angular/core/testing';
import { HttpTestingController } from '@angular/common/http/testing';
import { componentTestConfig } from '../../../../../testing/component-test';
import { Register } from './register';

it('renders the registration form without sending a registration request', async () => {
  TestBed.configureTestingModule(componentTestConfig(Register));
  const fixture = TestBed.createComponent(Register);
  await fixture.whenStable();
  expect(fixture.nativeElement.querySelector('app-register-form form')).not.toBeNull();
  TestBed.inject(HttpTestingController).verify();
});
