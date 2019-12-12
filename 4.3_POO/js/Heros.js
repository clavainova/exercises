import { Object } from "./Object.js";

//props inherited from object:      url, width, height
//methods inherited from object:    draw(), despawn()

//request animation frame

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

    move(ctx) {
        this.despawn(this.x, this.y, ctx);
        this.x += this.rateX;
        this.y += this.rateY;
        this.draw(ctx, this.x, this.y);
    }
}
