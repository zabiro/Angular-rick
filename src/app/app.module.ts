import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';


import { HttpClientModule } from '@angular/common/http'
import { FormsModule } from '@angular/forms';
import { VistaDetallesComponent } from './pages/vista-detalles/vista-detalles.component';
import { VistaPrincipalComponent } from './pages/vista-principal/vista-principal.component';
import { ShortDomainPipe } from './pipes/short-domain.pipe';
import { NgxPaginationModule } from 'ngx-pagination';


@NgModule({
  declarations: [
    AppComponent,
    VistaDetallesComponent,
    VistaPrincipalComponent,
    ShortDomainPipe,
    NgxPaginationModule
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
