import { Object } from "./Object.js";

//props inherited from object:      width, height, url
//methods inherited from object:    draw(), despawn(), place()

export class Monstre extends Object {
    constructor(width, height, url) {
        super(width, height, url);
    }

    slain(){
        this.despawn();
    }
}