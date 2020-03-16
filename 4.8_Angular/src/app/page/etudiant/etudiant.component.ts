import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { DataService } from 'src/app/services/data.service';
import { Etudiant } from 'src/app/modele/etudiant';

@Component({
  selector: 'app-etudiant',
  templateUrl: './etudiant.component.html',
  styleUrls: ['./etudiant.component.css']
})
export class EtudiantComponent implements OnInit {

  etudiant: Etudiant;

  constructor(private ar: ActivatedRoute, public dataServe: DataService) {
    this.ar.params.subscribe(
      r => {
        console.log(r);
        this.etudiant = this.dataServe.getEtudiant(r.id);
      }
    );
  }

  ngOnInit(): void {

  }

}
