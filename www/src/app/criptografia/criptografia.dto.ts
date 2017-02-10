export class CriptografiaDto {
    texto:string;
    chave:string;
    textoCriptografado:string;

    constructor(texto?:string, chave?:string, textoCriptografado?:string){
        this.texto = texto;
        this.chave = chave;
        this.textoCriptografado = textoCriptografado;
    }
}