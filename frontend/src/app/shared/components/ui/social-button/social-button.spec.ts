import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SocialButton } from './social-button';

describe('SocialButton', () => {
  let component: SocialButton;
  let fixture: ComponentFixture<SocialButton>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [SocialButton],
    }).compileComponents();

    fixture = TestBed.createComponent(SocialButton);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
