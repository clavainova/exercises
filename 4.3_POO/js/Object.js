
export class Object { 
    constructor(width, height, url){
        this.width = width;
        this.height = height;
        this.url = url;
        this.img  = document.createElement('img');
        this.img.url = this.url;
    }


    draw(ctx, x, y) {
        ctx.drawImage(this.img, x, y, this.width, this.height);
    }

    despawn(ctx, x, y){

    }

}