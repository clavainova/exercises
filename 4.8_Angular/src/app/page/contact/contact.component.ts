import { Component, OnInit } from '@angular/core';
import { NgForm } from '@angular/forms';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent implements OnInit {
  message: any;

  constructor() { }

  ngOnInit(): void {
    this.message = {
      nom: "",
      email: "",
      sujet: "",
      message: ""
    }
  }

  traceForm(){
    console.log(this.message);
  }

  envoyer(f:NgForm){
    if(f.valid){
      console.log("sent, valid");
    }
    else if(f.invalid){
      console.log("not sent, invalid");
    }
  }

  annuler(){
    this.message = {
      nom: "",
      email: "",
      sujet: "",
      message: ""
    }
    console.log(this.message);
  }

}
