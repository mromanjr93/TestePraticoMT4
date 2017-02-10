<?php

namespace TestePratico\Api\Controllers;


use TestePratico\Api\Retorno\RetornoApi;
use TestePratico\AppServices\CriptografiaAppService;
use TestePratico\AppServices\Dtos\CriptografiaDto;
use TestePratico\AppServices\Mappings\MapperFactory;


/**
 * Controller de API Rest - Auditoria 
 * Possui os métodos de criptografar e descriptografar textos
 *
 * @package		TestePratico\Api\Controllers; 
 * @category	API
 * @author		Marcelo Roman Junior 
 */

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
                        $this->retorno->sucesso = false;
                        $this->retorno->erros = [$ex->getMessage()];
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