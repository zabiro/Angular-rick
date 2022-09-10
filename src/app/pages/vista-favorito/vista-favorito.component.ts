import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { PersonasService } from '../../services/personas.service'


@Component({
  selector: 'app-vista-favorito',
  templateUrl: './vista-favorito.component.html',
  styleUrls: ['./vista-favorito.component.scss']
})
export class VistaFavoritoComponent implements OnInit {
  public character: Array<any> = [];
  urldetalles: string | undefined;


  constructor(
    private personaService: PersonasService,
    private router: Router
  ) { }

  ngOnInit(): void {
    this.postlistfavorito();
  }


  postlistfavorito(): void {
    let favorito: any = localStorage.getItem('favorito');
    if (favorito) {
      favorito = JSON.parse(favorito);
    } else {
      favorito = [];
    }

    this.personaService.getPersonasfavoritos(favorito).subscribe((resp: any) => {
      if (favorito.length == 1) {

        this.character = [resp];
      } else {
        this.character = resp;

      }
      console.log(this.character);
      console.log(favorito.length);

    })
  }

  agregarfavorito(id: any) {
    let favorito: any = localStorage.getItem('favorito');
    if (favorito) {
      favorito = JSON.parse(favorito);
    } else {
      favorito = [];
    }

    favorito.push(id);
    localStorage.setItem('favorito', JSON.stringify(favorito));


  }

  eliminarfavorito(id: any) {
    let favorito: any = localStorage.getItem('favorito');
    favorito = JSON.parse(favorito);
    const eliminarf = favorito.findIndex((x: any) => x == id);
    favorito.splice(eliminarf, 1);
    localStorage.setItem('favorito', JSON.stringify(favorito));
  }


  verificarfavorito(id: any) {

    let favorito: any = localStorage.getItem('favorito');
    if (favorito) {
      favorito = JSON.parse(favorito);
    } else {
      favorito = [];
    }
    const eliminarf = favorito.findIndex((x: any) => x == id);

    if (eliminarf >= 0) {
      return true;
    } else {
      return false;
    }

  }
  detallespersonaje(id: any) {

    console.log("estoyaca");
    this.urldetalles = "https://rickandmortyapi.com/api/character/" + id;
    this.router.navigate(['vistapersonajedetalle/' + id]);


  }
  detallespersonajelocalizacion(localizaction: any) {

    const residentesp = localizaction.split('/');
    const idp = residentesp[residentesp.length - 1];
    this.router.navigate(['vistapersonajelocalizacion/' + idp]);


  }

}
