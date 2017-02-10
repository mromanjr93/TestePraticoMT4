<?php

namespace TestePratico\Api\Controllers;


use TestePratico\Api\Retorno\RetornoApi;
use TestePratico\AppServices\CriptografiaAppService;
use TestePratico\AppServices\Dtos\CriptografiaDto;
use TestePratico\AppServices\Mappings\MapperFactory;

class CriptografiaController extends ApiController {

        private $appService;
        private $retorno;
        public function __construct(CriptografiaAppService $appService) {
                parent::__construct($_SERVER['PATH_INFO']);                                                
                $this->appService = $appService; 
                $this->retorno = new RetornoApi;                               
        }  

        function criptografar_post(){
                $oCriptografiaDto = json_decode(file_get_contents("PHP://INPUT")) ;
                $oCriptografiaDto = MapperFactory::mapTo($oCriptografiaDto, '\TestePratico\AppServices\Dtos\CriptografiaDto');

               
                try {
                                        
                     $this->retorno->resultado = $this->appService->criptografar($oCriptografiaDto);                        
                     $this->retorno->sucesso = true;
                }
                catch(ErrorException $ex){

                }
                return $this->_response($this->retorno,200);
        }

        function descriptografar_post(){                                
                $oCriptografiaDto = json_decode(file_get_contents("PHP://INPUT")) ;
                $oCriptografiaDto = MapperFactory::mapTo($oCriptografiaDto, '\TestePratico\AppServices\Dtos\CriptografiaDto');
               
                try {                                        
                     $this->retorno->resultado = $this->appService->descriptografar($oCriptografiaDto);                        
                     $this->retorno->sucesso = true;
                }
                catch(ErrorException $ex){

                }
                return $this->retorno->response();

        }
}