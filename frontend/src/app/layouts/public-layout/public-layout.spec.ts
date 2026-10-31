import { TestBed } from '@angular/core/testing';
import { HttpTestingController } from '@angular/common/http/testing';
import { componentTestConfig } from '../../../testing/component-test';
import { PublicLayout } from './public-layout';

it('retains the public header, footer and advertising slots without private requests', async () => {
  TestBed.configureTestingModule(componentTestConfig(PublicLayout));
  const fixture = TestBed.createComponent(PublicLayout);
  await fixture.whenStable();
  expect(fixture.nativeElement.querySelector('app-public-header')).not.toBeNull();
  expect(fixture.nativeElement.querySelector('app-public-footer')).not.toBeNull();
  expect(fixture.nativeElement.querySelectorAll('app-ad-slot').length).toBeGreaterThan(0);
  TestBed.inject(HttpTestingController).verify();
});
