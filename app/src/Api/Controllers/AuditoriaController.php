<?php

namespace TestePratico\Api\Controllers;


use TestePratico\Api\Retorno\RetornoApi;
use TestePratico\AppServices\CriptografiaAppService;
use TestePratico\AppServices\Dtos\CriptografiaDto;

class AuditoriaController extends ApiController {

        private $appService;
        private $retorno;
        public function __construct(AuditoriaAppService $appService) {
                parent::__construct($_SERVER['PATH_INFO']);                                                
                $this->appService = $appService; 

                $this->retorno = new RetornoApi;                               
        } 
        
}