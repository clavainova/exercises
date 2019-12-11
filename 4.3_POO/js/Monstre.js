import { Humanoid } from "./Humanoide.js";

//props inherited from object:      url, width, height, img
//props inherited from humanoid:    x, y
//methods inherited from object:    draw(), despawn()
//methods inherited from humanoid:  ---

export class Monstre extends Humanoid {
    constructor() {
        super();
    }
}