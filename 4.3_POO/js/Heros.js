import { Humanoid } from "./Humanoide.js";

//props inherited from object:      url, width, height
//props inherited from humanoid:    x, y
//methods inherited from object:    draw(), despawn()
//methods inherited from humanoid:  ---

//request animation frame

export class Hero extends Humanoid {
    "use strict";
    constructor(x, y, width, height, url, rateX, rateY, speed) {
        super(x, y, width, height, url);
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
