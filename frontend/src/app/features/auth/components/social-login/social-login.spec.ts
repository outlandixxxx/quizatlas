import { componentTestConfig } from '../../../../../testing/component-test';
import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SocialLoginComponent } from './social-login';

describe('SocialLoginComponent', () => {
  let component: SocialLoginComponent;
  let fixture: ComponentFixture<SocialLoginComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule(
      componentTestConfig(SocialLoginComponent),
    ).compileComponents();

    fixture = TestBed.createComponent(SocialLoginComponent);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
