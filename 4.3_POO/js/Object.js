export class Object {
    "use strict";

    constructor(width, height, url) {
        this.width = width;
        this.height = height;
        this.url = url;
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
    despawn(x, y) {
        //delete an object in the place and of the width of the object specified
        //x and y passed in instead of properties because they are defined later on
        //and frequently changed

        //need this to be slightly bigger than obj rn, might cause problems later
        //alternative: ctx.clearRect(x, y, this.width, this.height);
        x -= 20;
        y -= 20;
        let width = this.width + 20;
        let height = this.height + 20;

        window.ctx.clearRect(x, y, width, height);
    }

    //randomly place everything at the beginning or end of the round
    place(maxX, maxY) {
        let x = randomNum(maxX, 0);
        let y = randomNum(maxY, 0);
        // console.log("drawing bomb at x: " + x + " y: " + y);
        this.draw(x, y);
        // console.log("element width: " + element.width);
        try { //this block is only for the hero - the others don't have x and y properties
            this.x = x;
            this.y = y;
        } catch (error) {
            return;
        }
    }
}

function randomNum(max, min) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}