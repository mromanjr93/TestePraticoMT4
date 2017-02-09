<?php

namespace TestePratico\Services\Criptografia;

use TestePratico\Services\Criptografia\Interfaces\ICriptografiaService;
use TestePratico\Domain\Entities\Criptografia;

class CriptografiaService implements ICriptografiaService {
    

    private static $salt = 'Lu70K$z3pu5xf7*I8nNud@x2oODwgDRr4&xjuyTh';
    public function criptografar(Criptografia $model){

        if(!$model->texto){return false;}        
        
        $hash = substr(hash('sha256', $model->chave . self::$salt), 0, 32); 
        
        
        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $textoCriptografado = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $hash, $model->texto, MCRYPT_MODE_ECB, $iv);


        $model->textoCriptografado = trim($this->safe_b64encode($textoCriptografado)); 
        return $model;        
    }

    public function descriptografar(Criptografia $model){

        if(!$model->textoCriptografado){
            return false;
        }        
                
        $hash = substr(hash('sha256', $model->chave . self::$salt), 0, 32); 
        
        $textoCriptografado = $this->safe_b64decode($model->textoCriptografado); 
        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $model->texto = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $hash, $textoCriptografado, MCRYPT_MODE_ECB, $iv));
        return $model;
    }

    private  function safe_b64encode($string) {
        $data = base64_encode($string);
        $data = str_replace(array('+','/','='),array('-','_',''),$data);
        return $data;
    }
    
    private function safe_b64decode($string) {
        $data = str_replace(array('-','_'),array('+','/'),$string);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }    
}