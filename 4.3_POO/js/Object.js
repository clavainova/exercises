
export class Object {
    constructor(width, height, url) {
        this.width = width;
        this.height = height;
        this.url = url;
    }


    draw(ctx, x, y) {
        // console.log("drawing image: " + " on " + ctx);
        // console.log("x: " + x + " y: " + y + " width: " + this.width + " height: " + this.height);
        let img = new Image();
        img.src = this.url;
        img.onload = function () {
            ctx.drawImage(img, x, y, this.width, this.height);
        }
    }

    despawn(ctx, x, y) {

    }

}