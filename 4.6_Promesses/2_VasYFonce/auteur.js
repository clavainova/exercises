export class Auteur {
    constructor(nom, promesse, jsonUrl, description, wikiUrl) {
        this.nom = nom;
        this.promesse = promesse;
        this.jsonUrl = jsonUrl;
        this.description = description;
        this.wikiUrl = wikiUrl;
    }

    getProp(index) {
        return this[index];
    }

    setProp(index, value) {
        this[index] = value;
    }
}
