import { Injectable } from '@angular/core';

import { Etudiant } from '../modele/etudiant';
import { Promo } from '../modele/promo';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class DataService {
  etudiants: Array<Etudiant>;
  promos: Array<Promo>;
  identifie:boolean;

  constructor(private http: HttpClient) {

    this.identifie = false; //can load?

    //promo json list
    this.promos = [];
    this.getPromos();
    console.log(this.http);

    //student json list
    this.etudiants = [];
    this.getEtudiants();
  }

  getEtudiants() {
    //https://localhost/progression/4.8_Angular/src/assets/data/etudiants.json
    this.http.get<Array<Etudiant>>('assets/data/etudiants.json').subscribe(
      data => {
        console.log(data);
        this.etudiants = data;
      })
  }

  getPromos() {
    this.http.get<Array<Promo>>('assets/data/promos.json').subscribe(
      data => {
        console.log(data);
        this.promos = data;
      })
  }

  getEtudiant(nom:string){
    for(let e of this.etudiants){
      if(e.nom == nom){
        return e;
      }
    }
  }
}
