import { Object } from "./Object.js";

//props inherited from object:      url, width, height, img
//methods inherited from object:    draw(), despawn()

export class Bomb extends Object {
constructor(){
    super();
}
    explode() {

    }

    spawn(){
        
    }
}

//detect collision

//spawn position - array of previous positions to prevent overlap