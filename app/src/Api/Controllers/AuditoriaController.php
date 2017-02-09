<?php

namespace TestePratico\Api\Controllers;


use TestePratico\Api\Retorno\RetornoApi;
use TestePratico\AppServices\AuditoriaAppService;
use TestePratico\AppServices\Dtos\AuditoriaDto;
use TestePratico\AppServices\Mappings\MapperFactory;

class AuditoriaController extends ApiController {

        private $appService;
        private $retorno;
        public function __construct(AuditoriaAppService $appService) {
                parent::__construct($_SERVER['PATH_INFO']);                                                
                $this->appService = $appService; 
                $this->retorno = new RetornoApi;                               
        }

        public function upload_post(){
                $oAuditoriaDto = json_decode(file_get_contents("PHP://INPUT")) ;

                var_dump($HTTP_RAW_POST_DATA);
                $oAuditoriaDto = MapperFactory::mapTo($oAuditoriaDto, '\TestePratico\AppServices\Dtos\AuditoriaDto');
        }        
}