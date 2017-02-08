<?php

namespace TestePratico\Api\Controllers;


use TestePratico\Api\Retorno\RetornoApi;
use TestePratico\AppServices\CriptografiaAppService;
use TestePratico\AppServices\Dtos\CriptografiaDto;

class CriptografiaController extends ApiController {

        private $appService;
        private $retorno;
        public function __construct(CriptografiaAppService $appService) {
                parent::__construct($_SERVER['PATH_INFO']);                                                
                $this->appService = $appService; 

                $this->retorno = new RetornoApi;                               
        }  

        function criptografar_get(){
                $dto = new CriptografiaDto();
                var_dump($dto instanceof CriptografiaDto);
                $dto->texto = "asasas";
                $dto->chave = "312313234534535345345wed";
                try {
                     var_dump($this->appService->criptografar($dto)) ;
                        
                }
                catch(Exception $ex){

                }
                return "as";
        }

        function descriptografar_get(){

        }
}