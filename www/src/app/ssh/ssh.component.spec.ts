/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { SshComponent } from './ssh.component';

describe('SshComponent', () => {
  let component: SshComponent;
  let fixture: ComponentFixture<SshComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SshComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SshComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
