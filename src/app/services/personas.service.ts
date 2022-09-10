import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http'

@Injectable({
  providedIn: 'root'
})
export class PersonasService {
  _url = 'https://rickandmortyapi.com/api/character/?page='
  _urlfavorito = 'https://rickandmortyapi.com/api/character/'
  _urlnombre = 'https://rickandmortyapi.com/api/character/?name='
  _urlid = 'https://rickandmortyapi.com/api/character/'
  _urlidlocalization = 'https://rickandmortyapi.com/api/location/'






  constructor(
    private http: HttpClient
  ) {
    // console.log("higado persona")

  }

  getPersonas(page: any) {
    let heades = new HttpHeaders()
      .set('type-content', 'aplication/json')

    return this.http.get(this._url + page, {
      // headers: heades
    }

    )
  }
  getPersonasfavoritos(arrayfavorito: any) {
    let heades = new HttpHeaders()
      .set('type-content', 'aplication/json')

    return this.http.get(this._urlfavorito + arrayfavorito, {
      // headers: heades
    }

    )
  }
  getPersona(name: string, status: string) {
    let heades = new HttpHeaders()
      .set('type-content', 'aplication/json')


    var sinsatatus = this._urlnombre + name;

    var statusm = '&status=' + status


    return this.http.get(sinsatatus + statusm, {
      // headers: heades
    }

    )
  }

  getID(id: any) {
    let heades = new HttpHeaders()
      .set('type-content', 'aplication/json')


    var personajeid = this._urlid + id;
    return this.http.get(personajeid, {
      // headers: heades
    }

    )
  }
  getIDLocalizacion(id: any) {
    let heades = new HttpHeaders()
      .set('type-content', 'aplication/json')


    var localization = this._urlidlocalization + id;
    return this.http.get(localization, {
      // headers: heades
    }

    )
  }



}
