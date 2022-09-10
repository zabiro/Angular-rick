import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { VistaDetallesComponent } from './pages/vista-detalles/vista-detalles.component';
import { VistaFavoritoComponent } from './pages/vista-favorito/vista-favorito.component';
import { VistaLocationComponent } from './pages/vista-location/vista-location.component';
import { VistaPrincipalComponent } from './pages/vista-principal/vista-principal.component';

const routes: Routes = [

  { path: 'vistapersonajes', component: VistaPrincipalComponent },
  { path: 'vistapersonajedetalle/:id', component: VistaDetallesComponent },
  { path: 'vistapersonajelocalizacion/:id', component: VistaLocationComponent },
  { path: 'vistapersonajefavoritos/:arrayfavorito', component: VistaFavoritoComponent },

  { path: '**', redirectTo: 'vistapersonajes' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
