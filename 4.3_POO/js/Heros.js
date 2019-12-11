import { Humanoid } from "./Humanoide.js";

//props inherited from object:      url, width, height, img
//props inherited from humanoid:    x, y
//methods inherited from object:    draw(), despawn()
//methods inherited from humanoid:  ---

export class Hero extends Humanoid {
    constructor(speedX, speedY) {
        super();
        this.speedX = speedX;
        this.speedY = speedY;
    }

    init(ctx){
        this.draw(ctx);
    }

    updateMove(ctx) {
        this.speedX = 0;
        this.speedY = 0;
        if (ctx.key && ctx.key == 37) {
            this.speedX = -1;
        }
        if (ctx.key && ctx.key == 39) {
            this.speedX = 1;
        }
        if (ctx.key && ctx.key == 38) {
            this.speedY = -1;
        }
        if (ctx.key && ctx.key == 40) {
            this.speedY = 1;
        }
        this.move();
        this.update(ctx);
    }

    update(ctx) {
        ctx.drawImage( this.width, this.height);
    }

    move() {
        this.x += this.speedX;
        this.y += this.speedY;
    }
}