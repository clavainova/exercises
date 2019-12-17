import { Object } from "./Object.js";

//props inherited from object:      width, height, url, x, y
//methods inherited from object:    draw(), despawn(), place()

export class Monstre extends Object {
    "use strict";

    constructor(width, height, url) {
        super(width, height, url);
    }

    slain(){
        this.despawn();
    }
}