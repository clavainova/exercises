import { Component, OnInit } from '@angular/core';
import { Etudiant } from 'src/app/modele/etudiant';
import { DataService } from 'src/app/services/data.service';

@Component({
  selector: 'app-etudiants',
  templateUrl: './etudiants.component.html',
  styleUrls: ['./etudiants.component.css']
})
export class EtudiantsComponent implements OnInit {
  recherche: string;

  constructor(public dataServe: DataService) {
  }

  ngOnInit(): void {
    console.log(this.dataServe.etudiants);
  }

}
