import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { PersonasService } from 'src/app/services/personas.service';

@Component({
  selector: 'app-vista-location',
  templateUrl: './vista-location.component.html',
  styleUrls: ['./vista-location.component.scss']
})
export class VistaLocationComponent implements OnInit {

  public Localizacion: any;

  Nombrepersonas: any = [];


  constructor(
    private idlocalizar: ActivatedRoute,
    private personaService: PersonasService
  ) {
    const idlocalizacion = this.idlocalizar.snapshot.paramMap.get("id");

    this.personaService.getIDLocalizacion(idlocalizacion).subscribe((resp: any) => {

      // console.log(resp)
      this.Localizacion = resp;
      this.residentes(this.Localizacion.residents);


    })

  }

  ngOnInit(): void {
  }

  residentes(residentes: any) {

    // this.personaService.getID(residentes).subscribe((resp: any) => {

    //   console.log(resp)
    // this.residentes = resp;

    // })

    for (let index = 0; index < residentes.length; index++) {
      const element = residentes[index];
      const residentesp = element.split('/');
      const idp = residentesp[residentesp.length - 1];
      this.personaService.getID(idp).subscribe((resp: any) => {

        // console.log(resp)
        // this.residentes = resp;
        this.Nombrepersonas.push(resp.name);


      })
    }

    // console.log(residentes);

  }

}
