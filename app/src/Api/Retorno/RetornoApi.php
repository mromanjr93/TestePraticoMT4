<?php

namespace TestePratico\Api\Retorno;

class RetornoApi {
    public $sucesso = false;
    public $resultado = Null;
    public $erros = Null;


    public function response(){
        return json_encode($this);
    }
}