import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EditionEtudiantComponent } from './edition-etudiant.component';

describe('EditionEtudiantComponent', () => {
  let component: EditionEtudiantComponent;
  let fixture: ComponentFixture<EditionEtudiantComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EditionEtudiantComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EditionEtudiantComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
