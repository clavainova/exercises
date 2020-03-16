import { Component, OnInit } from '@angular/core';
//import { Ipromo } from 'src/app/modele/ipromo';
import { DataService } from 'src/app/services/data.service';

@Component({
  selector: 'app-promo',
  templateUrl: './promo.component.html',
  styleUrls: ['./promo.component.css']
})
export class PromoComponent implements OnInit {

  constructor(public dataServe:DataService) { }
  
  ngOnInit(): void {
    console.log(this.dataServe.promos);
  }
}
