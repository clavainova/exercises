import { Humanoid } from "./Humanoide.js";

//props inherited from object:      url, width, height
//props inherited from humanoid:    x, y
//methods inherited from object:    draw(), despawn()
//methods inherited from humanoid:  ---

export class Monstre extends Humanoid {
    constructor(x, y,width, height, url) {
        super(width, height, url);
        this.x = x;
        this.y = y;
    }
}