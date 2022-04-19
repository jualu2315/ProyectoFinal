import { Component, NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { NvarComponent } from './nvar/nvar.component';
import { EnrollComponent } from './enroll/enroll.component';
import { FotterComponent } from './fotter/fotter.component';
import { HomeComponent } from './home/home.component';
import { OfferComponent } from './offer/offer.component';
import { WeComponent } from './we/we.component';
import { PostularComponent } from './postular/postular.component'; 

const routes: Routes = [

  {path: 'Nvar', component: NvarComponent},
  {path: 'Registro', component: EnrollComponent},
  {path: 'Fotter', component: FotterComponent},
  {path: '', component: HomeComponent},
  {path: 'Ofertas', component: OfferComponent},
  {path: 'Nosotros', component: WeComponent},
  {path: 'Postular', component: PostularComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
