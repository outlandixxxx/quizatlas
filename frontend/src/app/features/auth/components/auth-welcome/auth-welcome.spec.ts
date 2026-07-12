import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AuthWelcome } from './auth-welcome';

describe('AuthWelcome', () => {
  let component: AuthWelcome;
  let fixture: ComponentFixture<AuthWelcome>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [AuthWelcome],
    }).compileComponents();

    fixture = TestBed.createComponent(AuthWelcome);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
