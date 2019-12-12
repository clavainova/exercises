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



//detect collision

//spawn position - array of previous positions to prevent overlap