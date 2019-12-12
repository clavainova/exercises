export class List {
    "use strict";

    constructor(list) {
        this.list = list;
    }

    push(elem) {
        this.list.push(elem);
    }

    get(index) {
        return this.list[index];
    }

    delete(elem) {
        this.list = this.list.filter(function (elem) {
            return elem != elem;
        });
        // splice -- alternatif
    }

    //places every object in the array -- useful for doing all bombs at once
    placeItems(maxX, maxY, ctx) {
        this.list.forEach(element => {
            element.place(maxX, maxY, ctx);
        });
    }
}



