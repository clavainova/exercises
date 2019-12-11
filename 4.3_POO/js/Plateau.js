export class Plateau {
    constructor(width, height, url, ctx) {
        this.width = width;
        this.height = height;
        this.url = url;
        this.ctx = ctx;
    }

    getProp(index) {
        return this[index];
    }

    drawBg(ctx) {
        let img = new Image;
        img.src = this.url;
        img.onload = function () {
            console.log("drawing: " + img.src + " width " + this.width + " height " + this.height);
            ctx.drawImage(img, 0, 0, this.width, this.height);
        }
    }

    clear() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}