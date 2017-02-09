import { Component, OnInit } from '@angular/core';

import { CriptografiaDto } from './criptografia.dto';
import { CriptografiaService } from './criptografia.service';

@Component({
  selector: 'app-criptografia',
  templateUrl: './criptografia.component.html',
  styleUrls: ['./criptografia.component.css']
})
export class CriptografiaComponent implements OnInit {

  criptografiaDto : CriptografiaDto;

  public texto:string;
  public textoCriptografado:string;
  public chave:string;
  constructor(private criptografiaService:CriptografiaService) { 
    
  }

  ngOnInit() {
  }

  public criptografar(){
      this.criptografiaDto = new CriptografiaDto(this.texto, this.chave);
      this.criptografiaService.criptografar(this.criptografiaDto)
        .subscribe(criptografia => {
            alert("asasas");
        })
  }

  public descriptografar(){

  }
}
