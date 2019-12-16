import { Object } from "./Object.js";

//props inherited from object:      width, height, url
//methods inherited from object:    draw(), despawn(), place()

export class Hero extends Object {
    "use strict";
    constructor(x, y, width, height, url, rateX, rateY, speed) {
        super(width, height, url);
        this.x = x;
        this.y = y;
        this.rateX = rateX;
        this.rateY = rateY;
        this.speed = speed;
    }

    move() {
        this.despawn(this.x, this.y);
        this.x += this.rateX;
        this.y += this.rateY;
        this.draw(this.x, this.y);
    }

    get coords(){
        
    }
}
