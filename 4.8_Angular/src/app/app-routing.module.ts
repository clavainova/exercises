import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AccueilComponent } from './page/accueil/accueil.component';
import { PromoComponent } from './page/promo/promo.component';
import { EtudiantsComponent } from './page/etudiants/etudiants.component';
import { ConnexionComponent } from './page/connexion/connexion.component';
import { ContactComponent } from './page/contact/contact.component';

const routes: Routes = [
  {path:"", component:AccueilComponent},
  {path: "promo", component:PromoComponent},
  {path:"etudiants", component:EtudiantsComponent},
  {path:"connexion", component:ConnexionComponent},
  {path: "contact", component:ContactComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
