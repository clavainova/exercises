import { Object } from "./Object.js";

//props inherited from object:      url, width, height
//methods inherited from object:    draw(), despawn()

export class Bomb extends Object {
    constructor(width, height, url, id) {
        super(width, height, url);
        this.id = id;
    }

    explode(){
        
    }
}

//detect collision

//spawn position - array of previous positions to prevent overlap