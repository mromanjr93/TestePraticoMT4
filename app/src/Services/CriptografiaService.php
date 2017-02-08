<?php

namespace TestePratico\Services;

use TestePratico\Services\Interfaces\ICriptografiaService;
use TestePratico\Domain\Entities\Criptografia;

class CriptografiaService implements ICriptografiaService {
    
    public function criptografar(Criptografia $model){
        $model->textoCriptografado = rtrim(
                                        base64_encode(
                                            mcrypt_encrypt(
                                                MCRYPT_RIJNDAEL_256,
                                                $model->chave , $model->texto, 
                                                MCRYPT_MODE_ECB, 
                                                mcrypt_create_iv(
                                                    mcrypt_get_iv_size(
                                                        MCRYPT_RIJNDAEL_256, 
                                                        MCRYPT_MODE_ECB
                                                    ), 
                                                    MCRYPT_RAND)
                                                )
                                            ), "\0"
                                        );    

        return $model;
    }

    public function descriptografar(Criptografia $model){
        $model->texto = rtrim(
                                            mcrypt_decrypt(
                                                MCRYPT_RIJNDAEL_256, 
                                                $model->chave, 
                                                base64_decode($model->textoCriptografado), 
                                                MCRYPT_MODE_ECB,
                                                mcrypt_create_iv(
                                                    mcrypt_get_iv_size(
                                                        MCRYPT_RIJNDAEL_256,
                                                        MCRYPT_MODE_ECB
                                                    ), 
                                                    MCRYPT_RAND
                                                )
                                            ), "\0"
                                        );      
        return $model;

    }
}