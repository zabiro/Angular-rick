import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VistaLocationComponent } from './vista-location.component';

describe('VistaLocationComponent', () => {
  let component: VistaLocationComponent;
  let fixture: ComponentFixture<VistaLocationComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ VistaLocationComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(VistaLocationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
