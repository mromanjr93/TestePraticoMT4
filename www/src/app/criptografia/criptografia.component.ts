import { Component, OnInit } from '@angular/core';

import { CriptografiaDto } from './criptografia.dto';
import { CriptografiaService } from './criptografia.service';

@Component({
  selector: 'app-criptografia',
  templateUrl: './criptografia.component.html',
  styleUrls: ['./criptografia.component.css']
})
export class CriptografiaComponent implements OnInit {

  public criptografiaDto : CriptografiaDto;

  public mostrarTexto:boolean;
  public texto:string;
  public textoCriptografado:string;
  public chave:string;
  constructor(private criptografiaService:CriptografiaService) { 
     this.criptografiaDto = new CriptografiaDto();
  }

  ngOnInit() {
  }

  public criptografar(){
      this.mostrarTexto = false;
      this.criptografiaDto = new CriptografiaDto(this.texto, this.chave);
      this.criptografiaService.criptografar(this.criptografiaDto)
        .subscribe(criptografia => {            
            this.criptografiaDto.textoCriptografado = criptografia.textoCriptografado;
        })
  }

  public descriptografar(){    
      this.mostrarTexto = true; 
      this.criptografiaService.descriptografar(this.criptografiaDto)
        .subscribe(criptografia => {            
            this.criptografiaDto.textoCriptografado = criptografia.textoCriptografado;
        })
  }
}
