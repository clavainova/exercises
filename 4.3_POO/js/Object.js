export class Object {
    constructor(width, height, url) {
        this.width = width;
        this.height = height;
        this.url = url;
    }

    draw(ctx, x, y, xmax, ymax) {
        // console.log("drawing image: " + " on " + ctx);
        // console.log("x: " + x + " y: " + y + " width: " + this.width + " height: " + this.height);
        let img = new Image();
        img.src = this.url;
        img.onload = function () {
            //avoid going out of bounds, problem with clear not working here
            if (x > xmax) {
                x = xmax;
            }
            else if (x <= 0) {
                x = 0;
            }
            if (y > ymax) {
                y = ymax;
            }
            
            else if (y <= 0) {
                y = 0;
            }
            ctx.drawImage(img, x, y, this.width, this.height);
        }
    }

    despawn(x, y, ctx) {
        ctx.clearRect(x, y, this.width, this.height);
    }

}