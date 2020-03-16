import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { EditionEtudiantComponent } from './edition-etudiant/edition-etudiant.component';
import { MenuEditionComponent } from './structure/menu-edition/menu-edition.component';
import { AccueilEditionComponent } from './accueil-edition/accueil-edition.component';
import { EditionRoutingModule } from './edition-routing-module/edition-routing-module.module';

@NgModule({
  declarations: [EditionEtudiantComponent, MenuEditionComponent, AccueilEditionComponent],
  imports: [
    CommonModule,
    EditionRoutingModule
  ]
})
export class EditionModule { }
