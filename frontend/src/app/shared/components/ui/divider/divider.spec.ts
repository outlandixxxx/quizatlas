import { componentTestConfig } from '../../../../../testing/component-test';
import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Divider } from './divider';

describe('Divider', () => {
  let component: Divider;
  let fixture: ComponentFixture<Divider>;

  beforeEach(async () => {
    await TestBed.configureTestingModule(componentTestConfig(Divider)).compileComponents();

    fixture = TestBed.createComponent(Divider);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
