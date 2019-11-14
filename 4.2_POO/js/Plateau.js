export class Plateau {
    constructor(width, height, url) {
        this.width = width;
        this.height = height;
        this.url = url;
    }

    drawBg(ctx) {
        let img = new Image;
        img.src = this.url;
        img.onload = function () {
            console.log("drawing: " + img.src + " width " + this.width + " height " + this.height);
            ctx.drawImage(img, 0, 0, this.width, this.height);
        }
    }
}