import { Injectable } from '@angular/core';
import { Router, ActivatedRoute, NavigationEnd } from '@angular/router';

@Injectable()
export class BreadcrumbService {
  
  public currentTitle : string;
  
  constructor(activatedRoute: ActivatedRoute, router: Router) {
      router.events.subscribe((val) => {
          // see also 
          if(val instanceof NavigationEnd){            
            console.log(activatedRoute) ;
          }
      });
  }
  
}
