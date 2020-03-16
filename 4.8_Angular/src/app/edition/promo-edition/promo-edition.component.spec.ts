import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PromoEditionComponent } from './promo-edition.component';

describe('PromoEditionComponent', () => {
  let component: PromoEditionComponent;
  let fixture: ComponentFixture<PromoEditionComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PromoEditionComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PromoEditionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
