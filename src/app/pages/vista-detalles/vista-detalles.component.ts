import { Component, OnInit } from '@angular/core';
import { PersonasService } from 'src/app/services/personas.service';


@Component({
  selector: 'app-vista-detalles',
  templateUrl: './vista-detalles.component.html',
  styleUrls: ['./vista-detalles.component.scss']
})
export class VistaDetallesComponent implements OnInit {

  title = 'apirestmix';
  botonfiltrar = '';
  status = '';
  public character: Array<any> = []

  constructor(
    private personaService: PersonasService
  ) {
    this.personaService.getPersonas().subscribe((resp: any) => {
      console.log(resp)
      this.character = resp["results"];
    })
  }

  ngOnInit(): void {

  }

}
