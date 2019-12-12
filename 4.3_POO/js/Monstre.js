import { Bomb } from "./Bombe.js";

//props inherited from object:      url, width, height
//methods inherited from object:    draw(), despawn()

export class Monstre extends Bomb {
    constructor(width, height, url) {
        super(width, height, url);
    }
}