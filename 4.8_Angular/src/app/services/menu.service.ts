import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class MenuService {

  menu:Array<any>;
  constructor() { 
    this.menu.push("10");
  }
}
let monService = new MenuService();