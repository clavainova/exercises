import { Object } from "./Object.js";

//props inherited from object:      width, height, url, x, y
//methods inherited from object:    draw(), despawn(), place()

export class Hero extends Object {
    "use strict";
    constructor(x, y, width, height, url, rateX, rateY, speed) {
        super(width, height, url, x, y);
        this.rateX = rateX;
        this.rateY = rateY;
        this.speed = speed;
    }

    updateCoords(cWidth, cHeight) {
        this.despawn(); //despawn old hero
        this.inBounds(cWidth, cHeight);  //check if out of bounds
        this.x += this.rateX; //add speed to coords
        this.y += this.rateY;
    }

    move(){
        this.draw(this.x, this.y); //update visual
        this.rateX = 0;  //annul previous momentum so speed doesn't keep building
        this.rateY = 0;
    }

    inBounds(cWidth, cHeight) {
        //check if out of bounds, if so update position with closest inbounds
        if (this.x > (cWidth - this.width)) {
            this.x = (cWidth - this.width);
        }
        else if (this.x <= 0) {
            this.x = 0;
        }
        if (this.y > (cHeight - this.height)) {
            this.y = (cHeight - this.height);
        }
        else if (this.y <= 0) {
            this.y = 0;
        }
    }
}
