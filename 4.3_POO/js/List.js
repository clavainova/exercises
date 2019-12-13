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

    delete(thisElem) {
        this.list = this.list.filter(function (elem) {
            return elem != thisElem;
        });
        // splice -- alternatif
    }

    //places every object in the array -- useful for doing all bombs at once
    placeItems(maxX, maxY) {
        this.list.forEach(element => {
            element.place(maxX, maxY, window.ctx);
        });
    }
}



