import { Component, OnInit } from '@angular/core';
import { Ipromo } from 'src/app/modele/ipromo';

@Component({
  selector: 'app-promo',
  templateUrl: './promo.component.html',
  styleUrls: ['./promo.component.css']
})
export class PromoComponent implements OnInit {

  promos: Array<Ipromo>;
  promo: Ipromo;

  constructor() { }
  ngOnInit(): void {
    /*
    this.promo = {
      _id: 0,
      nom: "attempt",
      description: "testing angular",
      effectifs: 28,
      effectifsActuels: 20,
      survivants: 18
    }
  */

    this.promos = [
      {
        _id: 0,
        nom: "AngularTest2",
        description: "testing angular",
        effectifs: 28,
        effectifsActuels: 20,
        survivants: 18
      },
      {
        _id: 1,
        nom: "AngularTest2",
        description: "testing angular",
        effectifs: 28,
        effectifsActuels: 20,
        survivants: 18
      }
    ]
  }

}
