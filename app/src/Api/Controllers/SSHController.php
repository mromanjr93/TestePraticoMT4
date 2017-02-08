<?php

namespace TestePratico\Api\Controllers;


use TestePratico\Api\Retorno\RetornoApi;
use TestePratico\AppServices\SSHAppService;

class SSHController extends ApiController {

        private $appService;
        public function __construct(SSHAppService $appService) {
                parent::__construct($_SERVER['PATH_INFO']);                                                
                $this->appService = $appService;                
        }  

        function executar_get(){
                $retorno = new RetornoApi;

                try {
                //   $this->appService->execy
                        
                }
                catch(Exception $ex){

                }
                return "as";
        }
}