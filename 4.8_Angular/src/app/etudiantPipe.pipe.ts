import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'etudiantPipe'
})
export class EtudiantPipe implements PipeTransform {

  transform(values: any[], filtre: string): any[] {
    if (!values || !values.length) return [];
    if (!filtre) return values;

    // Filtrer le tableau fourni en gérant la casse
    return values.filter(v => {
      // Filtre sur le titre
      if (v.nom && v.nom.toLowerCase().indexOf(filtre.toLowerCase()) >= 0) {
        // return v.nom.toLowerCase().indexOf(filtre.toLowerCase()) >=0 ;
        return v.nom;
      }
      // Filtre sur la description
      if (v.prenom && v.prenom.toLowerCase().indexOf(filtre.toLowerCase()) >= 0) {
        return v.prenom;
      }
    });
  }
}
