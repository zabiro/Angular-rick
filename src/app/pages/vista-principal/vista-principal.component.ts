import { Component, OnInit } from '@angular/core';
import { PersonasService } from '../../services/personas.service'
import { Router } from '@angular/router';

@Component({
  selector: 'app-vista-principal',
  templateUrl: './vista-principal.component.html',
  styleUrls: ['./vista-principal.component.scss']
})
export class VistaPrincipalComponent implements OnInit {

  title = 'apirestmix';
  botonfiltrar = '';
  status = '';
  page: number = 1;
  totalpage: any;
  pagesarray: any = [];
  public character: Array<any> = []
  urldetalles: string | undefined;
  urlfavorito: string | undefined;


  constructor(
    private personaService: PersonasService,
    private router: Router
  ) {

  }

  ngOnInit(): void {
    this.postlist();
  }


  postlist(): void {
    this.personaService.getPersonas(this.page).subscribe((resp: any) => {
      console.log(resp)
      this.character = resp["results"];
      this.totalpage = resp["info"].pages;
      this.pagesarray.length = this.totalpage;

    })
  }

  filtrar() {
    // console.log(event.target.value);
    if (this.status == 'all') {
      this.personaService.getPersona(this.botonfiltrar, this.status).subscribe((resp: any) => {
        console.log(resp)
        console.log('https://rickandmortyapi.com/api/character/?name=', this.botonfiltrar)
        this.character = resp["results"];

      })

    } else {


      this.personaService.getPersona(this.botonfiltrar, this.status).subscribe((resp: any) => {
        console.log(resp)
        console.log('https://rickandmortyapi.com/api/character/?name=', this.botonfiltrar, '&status=', this.status)
        this.character = resp["results"];
      })
    }
  }



  detallespersonaje(id: any) {

    this.urldetalles = "https://rickandmortyapi.com/api/character/" + id;
    this.router.navigate(['vistapersonajedetalle/' + id]);


  }
  detallespersonajelocalizacion(localizaction: any) {

    const residentesp = localizaction.split('/');
    const idp = residentesp[residentesp.length - 1];
    this.router.navigate(['vistapersonajelocalizacion/' + idp]);


  }

  detallesfavorito() {
    let favorito: any = localStorage.getItem('favorito');
    if (favorito) {
      favorito = JSON.parse(favorito);
    } else {
      favorito = [];
    }
    this.urlfavorito = "https://rickandmortyapi.com/api/character/" + favorito;
    this.router.navigate(['vistapersonajefavoritos/' + favorito]);
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


  sumarpage() {
    if (this.totalpage == this.page) {
      this.page = this.totalpage

    } else {
      this.page += 1;
    }
    this.postlist();
  }

  restarpage() {
    if (this.page == 1) {
      this.page = 1

    } else {
      this.page -= 1;
    }
    this.postlist();
  }

  paginacionactual(pagenumber: number) {

    this.page = pagenumber;
    this.postlist();



  }




}
