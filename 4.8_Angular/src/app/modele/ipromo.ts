export interface Ipromo {
    _id: number,
    nom: string,
    description: string,
    effectifs?: number,
    effectifsActuels?: number,
    survivants?: number
}

//ng g interface modele/ipromo