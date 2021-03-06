<?php

namespace TestePratico\Api\Controllers;


use TestePratico\Api\Retorno\RetornoApi;
use TestePratico\AppServices\SSHAppService;
use TestePratico\AppServices\Mappings\MapperFactory;

/**
 * Controller de API Rest - SSH 
 * Recebe uma DTO de SSH com usuário, host e senha, e realiza a conexão para executar comandos.
 *
 * @package		TestePratico\Api\Controllers; 
 * @category	API
 * @author		Marcelo Roman Junior 
 */

class SSHController extends ApiController {

        private $appService;
        public function __construct(SSHAppService $appService) {
                parent::__construct($_SERVER['PATH_INFO']);                                                
                $this->appService = $appService;                
        }  

        function executar_post(){                
                $oSSH = json_decode(file_get_contents("PHP://INPUT")) ;
                $oSSH = MapperFactory::mapTo($oSSH, '\TestePratico\AppServices\Dtos\SSHDto');
                try {
                                        
                     $this->retorno->resultado = $this->appService->executar($oSSH);                        
                     $this->retorno->sucesso = true;
                }
                catch(ErrorException $ex){

                }
                return $this->_response($this->retorno,200);                
        }
}