import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MenuComponent } from './structure/menu/menu.component';
import { PiedComponent } from './structure/pied/pied.component';
import { AccueilComponent } from './page/accueil/accueil.component';
import { PromoComponent } from './page/promo/promo.component';
import { ConnexionComponent } from './page/connexion/connexion.component';
import { EtudiantsComponent } from './page/etudiants/etudiants.component';
import { ContactComponent } from './page/contact/contact.component';

@NgModule({
  declarations: [
    AppComponent,
    MenuComponent,
    PiedComponent,
    AccueilComponent,
    PromoComponent,
    ConnexionComponent,
    EtudiantsComponent,
    ContactComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
