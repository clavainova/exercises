import { Ipromo } from './ipromo';

export interface Etudiant {
    _id: number,
    nom: string,
    description: string,
    age?: number,
    promo?: Ipromo
}
