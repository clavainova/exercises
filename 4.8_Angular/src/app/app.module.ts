import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MenuComponent } from './structure/menu/menu.component';
import { PiedComponent } from './structure/pied/pied.component';
import { AccueilComponent } from './page/accueil/accueil.component';
import { PromoComponent } from './page/promo/promo.component';
import { ConnexionComponent } from './page/connexion/connexion.component';
import { EtudiantsComponent } from './page/etudiants/etudiants.component';
import { ContactComponent } from './page/contact/contact.component';
import { FormsModule} from '@angular/forms';
import { EtudiantComponent } from './page/etudiant/etudiant.component';
import { EtudiantPipe } from './etudiantPipe.pipe';
import { EditionEtudiantComponent } from './edition/edition-etudiant/edition-etudiant.component';
import { MenuEditionComponent } from './edition/structure/menu-edition/menu-edition.component';
import { AccueilEditionComponent } from './edition/accueil-edition/accueil-edition.component';
import { PromoEditionComponent } from './edition/promo-edition/promo-edition.component';

@NgModule({
  declarations: [
    AppComponent,
    MenuComponent,
    PiedComponent,
    AccueilComponent,
    PromoComponent,
    ConnexionComponent,
    EtudiantsComponent,
    ContactComponent,
    EtudiantComponent,
    EtudiantPipe
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
