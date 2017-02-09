import { Component, OnInit } from '@angular/core';

import { BreadcrumbService } from './breadcrumb.service'; 

@Component({
  selector: 'app-breadcrumb',
  templateUrl: './breadcrumb.component.html',
  styleUrls: ['./breadcrumb.component.css']
})
export class BreadcrumbComponent implements OnInit {

  constructor(private breadcrumbService : BreadcrumbService) {      
  }

  ngOnInit() {
  }

}
