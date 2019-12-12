import { Object } from "./Object.js";

//props inherited from object:      url, width, height, img
//methods inherited from object:    draw(), despawn()

export class BombList {
    constructor(bombs) {
        this.bombs = bombs;
    }

    push(bomb) {
        this.bombs.push(bomb);
    }

    positionBombs(maxX, maxY, ctx) {
        this.bombs.forEach(bomb => {
            let x = randomNum(maxX, 0);
            let y = randomNum(maxY, 0);
            item.draw(ctx, x, y)
        });
    }
}

function randomNum(max, min) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

//detect collision

//spawn position - array of previous positions to prevent overlap