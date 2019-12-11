import { Object } from "./Object.js";
export class Humanoid extends Object {
    constructor(x, y,width, height, url) {
        super(width, height, url);
        this.x = x;
        this.y = y;
    }

    move() {
        
    }

}