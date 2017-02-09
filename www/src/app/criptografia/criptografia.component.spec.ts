/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { CriptografiaComponent } from './criptografia.component';

describe('CriptografiaComponent', () => {
  let component: CriptografiaComponent;
  let fixture: ComponentFixture<CriptografiaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CriptografiaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CriptografiaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
