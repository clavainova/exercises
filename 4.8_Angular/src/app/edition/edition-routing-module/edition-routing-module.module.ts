import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AccueilEditionComponent } from '../accueil-edition/accueil-edition.component';
import { EditionEtudiantComponent } from '../edition-etudiant/edition-etudiant.component';
import { PromoEditionComponent } from '../promo-edition/promo-edition.component';
import { MenuEditionComponent } from '../structure/menu-edition/menu-edition.component';


const routes: Routes = [
  {
    path: "", component: AccueilEditionComponent,
    children: [
      { path: "etudiant", component: EditionEtudiantComponent },
      { path: "promo", component: PromoEditionComponent }
    ],
  }
]

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class EditionRoutingModule { }