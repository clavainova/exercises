export class Object {
    "use strict";

    constructor(width, height, url, x, y) {
        this.width = width;
        this.height = height;
        this.url = url;
        this.x = x;
        this.y = y;
    }

    //draw the object
    draw(x, y) {
        // console.log("drawing image: " + " on " + ctx);
        // console.log("x: " + x + " y: " + y + " width: " + this.width + " height: " + this.height);
        let img = new Image();
        img.src = this.url;
        img.onload = function () {
            //catch bizarre glitch where bomb size incorrectly passed
            if (this.width == 178) {
                window.ctx.drawImage(img, x, y, 32, 32);
            }
            //actually draw it
            else {
                window.ctx.drawImage(img, x, y, this.width, this.height);
            }
        }
    }

    //despawn the object
    despawn() {
        //need this to be slightly bigger than obj rn, might cause problems later
        //alternative: ctx.clearRect(x, y, this.width, this.height);
        let x = this.x-20;
        let y = this.y-20;
        let width = this.width + 20;
        let height = this.height + 20;

        window.ctx.clearRect(x, y, width, height);
    }

    //randomly place everything at the beginning or end of the round
    place(maxX, maxY) {
        this.x = randomNum(maxX, 0);
        this.y = randomNum(maxY, 0);
        // console.log("drawing bomb at x: " + x + " y: " + y);
        this.draw(this.x, this.y);
    }
}

function randomNum(max, min) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}