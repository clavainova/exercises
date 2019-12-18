export class FamiliarList {
    constructor(arr) {
        this.arr = arr;
    }

    getProp(index) {
        return this[index];
    }

    push(fam) {
        this.arr.push(fam);
    }

    getFamById(index) {
        return this.arr[index];
    }
}