<?php

namespace TestePratico\Api\Controllers;


use TestePratico\Api\Retorno\RetornoApi;
use TestePratico\AppServices\AuditoriaAppService;
use TestePratico\AppServices\Dtos\AuditoriaDto;
use TestePratico\AppServices\Mappings\MapperFactory;
use TestePratico\AppServices\AbstractAuditoriaEnum;

/**
 * Controller de API Rest - Auditoria 
 * Faz o upload do arquivo e audita contra ataques
 *
 * @package		TestePratico\Api\Controllers; 
 * @category	API
 * @author		Marcelo Roman Junior 
 */

class AuditoriaController extends ApiController {

        private $appService;
        private $retorno;
        public function __construct(AuditoriaAppService $appService) {
                parent::__construct($_SERVER['PATH_INFO']);                                                
                $this->appService = $appService; 
                $this->retorno = new RetornoApi;                               
        }

        public function upload_post(){
                try{
                        $arquivo = $_FILES;                        
                        $this->appService->salvarEmDisco($arquivo, sCAMINHOUPLOAD);

                        switch($this->appService->stateArquivo){
                                case AbstractAuditoriaEnum::ArquivoJaCadastrado : {
                                        $this->appService->inserir();
                                        $this->retorno->sucesso = true;
                                        $this->retorno->resultado = "O arquivo já está cadastrado";
                                        break;
                                }
                                case AbstractAuditoriaEnum::ArquivoComAlteracoes : {
                                        $this->retorno->sucesso = true;
                                        $this->retorno->resultado = "O arquivo possui alterações";
                                        break;
                                }
                                case AbstractAuditoriaEnum::ArquivoEnviadoComSucesso : {
                                        $this->retorno->sucesso = true;
                                        $this->retorno->resultado = "O arquivo foi enviado com sucesso";
                                        break;
                                }
                                case AbstractAuditoriaEnum::ArquivoMalicioso : {
                                        $this->retorno->sucesso = true;
                                        $this->retorno->resultado = "O arquivo pode conter informações maliciosas";                                        
                                        break;
                                }
                        }

                }
                catch(Exception $ex){
                        $this->retorno->sucesso = false;
                        $this->retorno->erros = [$ex->getMessage()];
                }
                $this->_response($this->retorno);                
                
        }        
}