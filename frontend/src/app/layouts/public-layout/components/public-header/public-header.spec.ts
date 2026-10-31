import { componentTestConfig } from '../../../../../testing/component-test';
import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PublicHeader } from './public-header';

describe('PublicHeader', () => {
  let component: PublicHeader;
  let fixture: ComponentFixture<PublicHeader>;

  beforeEach(async () => {
    await TestBed.configureTestingModule(componentTestConfig(PublicHeader)).compileComponents();

    fixture = TestBed.createComponent(PublicHeader);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
