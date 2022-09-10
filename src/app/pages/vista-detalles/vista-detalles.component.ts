import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { PersonasService } from 'src/app/services/personas.service';


@Component({
  selector: 'app-vista-detalles',
  templateUrl: './vista-detalles.component.html',
  styleUrls: ['./vista-detalles.component.scss']
})
export class VistaDetallesComponent implements OnInit {



  public Personaje: any;

  constructor(
    private idpersonaje: ActivatedRoute,
    private personaService: PersonasService
  ) {
    const iddetalle = this.idpersonaje.snapshot.paramMap.get("id");

    this.personaService.getID(iddetalle).subscribe((resp: any) => {

      console.log(resp)
      this.Personaje = resp;

    })
  }

  ngOnInit(): void {

  }

}
