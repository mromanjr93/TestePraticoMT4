import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import {SlimLoadingBarModule} from 'ng2-slim-loading-bar';

import { AppRoutingModule, routingComponents } from './app-routing.module'; 
import { AppComponent } from './app.component';
import { HeaderComponent } from './shared/header/header.component';
import { SidebarComponent } from './shared/sidebar/sidebar.component';
import { BreadcrumbComponent } from './shared/breadcrumb/breadcrumb.component';
import { PageNotFoundComponent } from './page-not-found/page-not-found.component';

import { BreadcrumbService } from './shared/breadcrumb/breadcrumb.service';
import { SshComponent } from './ssh/ssh.component';
import { CriptografiaComponent } from './criptografia/criptografia.component';
import { AuditoriaComponent } from './auditoria/auditoria.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    SidebarComponent,
    BreadcrumbComponent,    
    routingComponents,
    PageNotFoundComponent,
    SshComponent,
    CriptografiaComponent,
    AuditoriaComponent
  ],
  imports: [
    BrowserModule,
    SlimLoadingBarModule.forRoot(),    
    FormsModule,
    HttpModule,
    AppRoutingModule,
  ],
  providers: [BreadcrumbService],
  bootstrap: [AppComponent]
})
export class AppModule { }
