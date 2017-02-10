import { Injectable} from '@angular/core';
import {Observable} from 'rxjs/Rx';
import { Http, Response, Headers, RequestOptions } from '@angular/http';

import { CriptografiaDto } from './criptografia.dto';

@Injectable()
export class CriptografiaService {

    private apiUrl = "//api.mt4.romantech.com.br/api/criptografia/";
    
    constructor(private http: Http){

    }

    criptografar(model:CriptografiaDto):Observable<CriptografiaDto>{
        return this.request(this.apiUrl + "criptografar", model);
        
    }

    descriptografar(model:CriptografiaDto):Observable<CriptografiaDto>{
        return this.request(this.apiUrl + "descriptografar", model);
    }

    request(url:string, model){
        let headers = new Headers({ 'Content-Type': 'application/json'}); 
        let options = new RequestOptions({ headers: headers });         
        
         return this.http.post(url, model, options)                        
                         .map((res:Response) => {
                            let resposta = res.json();
 
                            if(resposta.sucesso){
                                return <CriptografiaDto>resposta.resultado;
                            }
                           
                            return resposta.erros;                            
                         })                         
                         .catch((error:any) => Observable.throw(error.json().error || 'Server error'));

    }
}