import { Component, OnInit } from '@angular/core';
import { DataService } from 'src/app/services/data.service';

@Component({
  selector: 'app-connexion',
  templateUrl: './connexion.component.html',
  styleUrls: ['./connexion.component.css']
})
export class ConnexionComponent implements OnInit {

  connexion:any;

  constructor(private dataServe:DataService) { }

  ngOnInit(): void {
    this.connexion = {
      id: "",
      mdp: ""
    }
  }

  seConnecter(){
    this.dataServe.identifie = !this.dataServe.identifie;
  }

}
