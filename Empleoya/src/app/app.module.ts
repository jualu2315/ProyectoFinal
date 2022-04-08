  import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { NvarComponent } from './nvar/nvar.component';
import { FotterComponent } from './fotter/fotter.component';
import { OfferComponent } from './offer/offer.component';
import { EnrollComponent } from './enroll/enroll.component';
import { WeComponent } from './we/we.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    NvarComponent,
    FotterComponent,
    OfferComponent,
    EnrollComponent,
    WeComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
