import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { SshComponent } from './ssh/ssh.component';
import { CriptografiaComponent } from './criptografia/criptografia.component';
import { AuditoriaComponent } from './auditoria/auditoria.component';

import  { PageNotFoundComponent } from './page-not-found/page-not-found.component';

const routes: Routes = [
    {
        path: '',
        pathMatch: 'full',
        redirectTo: 'ssh'
    },
    { 
        path: 'ssh', 
        component: SshComponent  
    },    
    { 
        path: 'criptografia', 
        component: CriptografiaComponent            
    },
    { 
        path: 'auditoria', 
        component: AuditoriaComponent ,
           
    },    
    { path: '**', component: PageNotFoundComponent }
];

@NgModule({
    imports: [RouterModule.forRoot(routes)],
    exports: [RouterModule]
})

export class AppRoutingModule { }

export const routingComponents = [];