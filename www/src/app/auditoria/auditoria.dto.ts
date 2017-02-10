 
import { UploadItem }    from 'angular2-http-file-upload';
 
export class AuditoriaDto extends UploadItem {
    constructor(file: any) {
        super();
        this.url = 'http://api.mt4.romantech.com.br/api/auditoria/upload';        
        this.file = file;
    }
}