import { componentTestConfig } from '../../../testing/component-test';
import { ComponentFixture, TestBed } from '@angular/core/testing';
import { HttpTestingController } from '@angular/common/http/testing';

import { UserLayout } from './user-layout';
describe('UserLayout', () => {
  let component: UserLayout;
  let fixture: ComponentFixture<UserLayout>;

  beforeEach(async () => {
    await TestBed.configureTestingModule(componentTestConfig(UserLayout)).compileComponents();

    fixture = TestBed.createComponent(UserLayout);
    component = fixture.componentInstance;
    fixture.detectChanges();
    const http = TestBed.inject(HttpTestingController);
    http
      .expectOne((request) => request.url.split('?')[0].endsWith('/exam-pdfs'))
      .flush({ data: { items: [], meta: { total: 0 } } });
    http
      .expectOne((request) => request.url.endsWith('/chat/conversations/unread-count'))
      .flush({ data: { count: 0 } });
    await fixture.whenStable();
    http.verify();
  });

  it('keeps permanent Concours navigation when the private legacy PDF library is empty', () => {
    expect(component).toBeTruthy();
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('a[href="/concours"]')).not.toBeNull();
    expect(fixture.nativeElement.querySelector('a[href="/app/library"]')).toBeNull();
  });
});
