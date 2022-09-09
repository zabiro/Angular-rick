import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { VistaDetallesComponent } from './pages/vista-detalles/vista-detalles.component';
import { VistaPrincipalComponent } from './pages/vista-principal/vista-principal.component';

const routes: Routes = [

  { path: 'vistapersonajes', component: VistaPrincipalComponent },
  { path: 'vistapersonajedetalle', component: VistaDetallesComponent },

  { path: '**', redirectTo: '/' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
