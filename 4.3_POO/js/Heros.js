import { Humanoid } from "./Humanoide.js";

//props inherited from object:      url, width, height
//props inherited from humanoid:    x, y
//methods inherited from object:    draw(), despawn()
//methods inherited from humanoid:  ---

export class Hero extends Humanoid {
    constructor(x, y, width, height, url, speedX, speedY, speedCoefficient) {
        super(x, y, width, height, url);
        this.speedX = speedX;
        this.speedY = speedY;
    }

    updateMove(ctx) {
        this.speedX = 0;
        this.speedY = 0;
        if (ctx.key && ctx.key == 37) {
            this.speedX = -10;
        }
        if (ctx.key && ctx.key == 39) {
            this.speedX = 10;
        }
        if (ctx.key && ctx.key == 38) {
            this.speedY = -10;
        }
        if (ctx.key && ctx.key == 40) {
            this.speedY = 10;
        }
        this.move(ctx);
    }

    move(ctx) {
        this.x += this.speedX;
        this.y += this.speedY;
        this.draw(ctx, this.x, this.y);
    }
}