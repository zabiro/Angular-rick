import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VistaFavoritoComponent } from './vista-favorito.component';

describe('VistaFavoritoComponent', () => {
  let component: VistaFavoritoComponent;
  let fixture: ComponentFixture<VistaFavoritoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ VistaFavoritoComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(VistaFavoritoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
