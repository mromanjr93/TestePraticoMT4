import { Component, OnInit } from '@angular/core';

import { Uploader }      from 'angular2-http-file-upload';

import { AuditoriaDto }  from './auditoria.dto';

@Component({
  selector: 'app-auditoria',
  templateUrl: './auditoria.component.html',
  styleUrls: ['./auditoria.component.css']
})
export class AuditoriaComponent implements OnInit {

  constructor(public uploaderService: Uploader) { }

  ngOnInit() {
  }

  upload() {
        let uploadFile = (<HTMLInputElement>window.document.getElementById('upload')).files[0];
 
        let auditoriaDto = new AuditoriaDto(uploadFile);
        auditoriaDto.formData = { FormDataKey: 'Form Data Value' };  // (optional) form data can be sent with file
 
        this.uploaderService.onSuccessUpload = (item, response, status, headers) => {
             // success callback
        };
        this.uploaderService.onCompleteUpload = (item, response, status, headers) => {
             // complete callback, called regardless of success or failure
        };
        this.uploaderService.upload(auditoriaDto);
  }
}
