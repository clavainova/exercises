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

    refresh(ctx){
        ctx.clearRect(0, 0, this.width, this.height);
    }

    drawBg(str) { //use image so always behind
        // let img = new Image;
        // img.src = this.url;
        // img.onload = function () {
        //     console.log("drawing: " + img.src + " width " + this.width + " height " + this.height);
        //     ctx.drawImage(img, 0, 0, this.width, this.height);
        // }
        document.getElementById(str).style.background = ("url('" + this.url + "')");
    }

    clear() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}