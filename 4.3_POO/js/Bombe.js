import { Object } from "./Object.js";

//props inherited from object:      width, height, url
//methods inherited from object:    draw(), despawn(), place()

export class Bomb extends Object {
    "use strict";

    constructor(width, height, url, id) {
        super(width, height, url);
        this.id = id;
    }

    explode(){
        this.despawn();
    }

    animate(){
        
    }
}