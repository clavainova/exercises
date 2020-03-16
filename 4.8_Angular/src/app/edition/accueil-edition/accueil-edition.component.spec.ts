import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AccueilEditionComponent } from './accueil-edition.component';

describe('AccueilEditionComponent', () => {
  let component: AccueilEditionComponent;
  let fixture: ComponentFixture<AccueilEditionComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AccueilEditionComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AccueilEditionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
