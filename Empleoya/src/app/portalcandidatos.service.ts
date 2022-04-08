import { Injectable } from '@angular/core';

import {HttpClient} from '@angular/common/http';
import { environment } from 'src/environments/environment';
import { Candidato } from './app.component';

@Injectable({
  providedIn: 'root'
})
export class PortalcandidatosService {

  constructor() { }
}

export class candidatoService{
 baseUrl = environment.baseUrl
  constructor(private http:HttpClient){}

  getCandidatos(){
    return this.http.get('${this.baseUrl}/getAll.php');
  }

  getCandidato(id: string | number){
    return this.http.get('${this.baseUrl}/get.php?idCandidato=$(id)');
  }

  addCandidato(candidato: Candidato){
    return this.http.post('${this.baseUrl}/post.php', candidato);
  }

  deleteCandidato(candidato: Candidato){
    return this.http.delete('${this.baseUrl}/delete.php?idCandidato=${candidato.id}');
  }

  updateCandidato(candidato: Candidato){
    return this.http.put('${this.baseUrl}/update.php', candidato);
  }
}
