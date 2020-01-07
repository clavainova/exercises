export class Nav {
    constructor(nom, lien, children) {
        this.nom = nom;
        this.lien = lien;
        this.children = children;
    }

    getProp(index) {
        return this[index];
    }

    setProp(index, value) {
        this[index] = value;
    }
}
