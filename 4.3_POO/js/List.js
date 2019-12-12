import { Object } from "./Object.js";

//props inherited from object:      url, width, height, img
//methods inherited from object:    draw(), despawn()

export class List {
    constructor(list) {
        this.list = list;
    }

    push(elem) {
        this.list.push(elem);
    }

    get(index) {
        return this.list[index];
    }

    remove(value) {
        this.list = this.list.filter(function (elem) {
            return elem != value;
        });
        // splice -- alternatif
    }

    placeBombs(maxX, maxY, ctx) {
        this.list.forEach(element => {
            let x = randomNum(maxX, 0);
            let y = randomNum(maxY, 0);
            // console.log("drawing bomb at x: " + x + " y: " + y);
            element.draw(ctx, x, y);
            // console.log("element width: " + element.width);
        });
    }
}

function randomNum(max, min) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

//detect collision

//spawn position - array of previous positions to prevent overlap