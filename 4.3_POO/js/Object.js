export class Object {
    constructor(width, height, url) {
        this.width = width;
        this.height = height;
        this.url = url;
    }

    //draw the object
    draw(ctx, x, y, xmax, ymax) {
        // console.log("drawing image: " + " on " + ctx);
        // console.log("x: " + x + " y: " + y + " width: " + this.width + " height: " + this.height);
        let img = new Image();
        img.src = this.url;
        img.onload = function () {
            //avoid going out of bounds, 
            //problem with clear not working here
            //here for safety
            if (x > xmax) { x = xmax; }
            else if (x <= 0) { x = 0; }
            if (y > ymax) { y = ymax; }
            else if (y <= 0) { y = 0; }
            //catch bizarre glitch where bomb size incorrectly passed
            if (this.width == 178) {
                ctx.drawImage(img, x, y, 32, 32);
            }
            //actually draw it
            else {
                ctx.drawImage(img, x, y, this.width, this.height);
            }
        }
    }

    //despawn the object
    despawn(x, y, ctx) {
        //delete an object in the place and of the width of the object specified
        //x and y passed in instead of properties because they are defined later on
        //and frequently changed
        ctx.clearRect(x, y, this.width, this.height);
    }

    //randomly place everything at the beginning or end of the round
    place(maxX, maxY, ctx) {
        let x = randomNum(maxX, 0);
        let y = randomNum(maxY, 0);
        // console.log("drawing bomb at x: " + x + " y: " + y);
        this.draw(ctx, x, y);
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