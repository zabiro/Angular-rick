import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http'

@Injectable({
  providedIn: 'root'
})
export class PersonasService {
  _url = 'https://rickandmortyapi.com/api/character'
  _urlnombre = 'https://rickandmortyapi.com/api/character/?name='





  constructor(
    private http: HttpClient
  ) {
    // console.log("higado persona")

  }

  getPersonas() {
    let heades = new HttpHeaders()
      .set('type-content', 'aplication/json')

    return this.http.get(this._url, {
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



}
