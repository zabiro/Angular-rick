import { Component, OnInit } from '@angular/core';
import { PersonasService } from '../../services/personas.service'

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
  count: number = 0;
  tablesize: number = 10;
  tablesizes: Array<any> = [5, 10, 15, 20];

  public character: Array<any> = []

  urlmi = "	https://rickandmortyapi.com/api/episode/51";





  constructor(
    private personaService: PersonasService
  ) {

  }

  ngOnInit(): void {
    this.postlist();
  }


  postlist(): void {
    this.personaService.getPersonas().subscribe((resp: any) => {
      console.log(resp)
      this.character = resp["results"];


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


  OnTableDatachange(event: any) {
    this.page = event;
    this.postlist();

  }

  OnTablesizechange(event: any): void {
    this.tablesize = event.target.value;
    this.page = 1;
    this.postlist();
  }


}
