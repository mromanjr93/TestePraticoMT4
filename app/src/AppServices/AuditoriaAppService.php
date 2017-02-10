<?php


namespace TestePratico\AppServices;

use \TestePratico\AppServices\Interfaces\IAuditoriaAppService;
use \TestePratico\AppServices\AbstractAuditoriaEnum;
use \TestePratico\AppServices\Dtos\AuditoriaDto;
use \TestePratico\Services\Auditoria\AuditoriaService;
use TestePratico\AppServices\Mappings\MapperFactory;
use \TestePratico\Domain\Entities\Auditoria;


/**
 * AppService de Auditoria, implementa os métodos para upload e crud base, para exemplo.
 *
 * @package		TestePratico\AppServices
 * @category	AppServices
 * @author		Marcelo Roman Junior 
 */
class AuditoriaAppService implements IAuditoriaAppService {

     private $service;
     public $stateArquivo;

     public function __construct(AuditoriaService $service){
        $this->service = $service;
     }

     public function inserir($model){
        return $this->service->inserir($model);
     }
     public function buscarPorId($id){
        return $this->service->buscarPorId($id);
     }

     public function listar(){
        return $this->service->listar();
     }

     public function atualizar($model){
        return $this->service->atualizar($model);
     }

     public function excluir($id){
         return $this->service->excluir($id);
     }

     public function salvarEmDisco($arquivo, $caminho){        
        
        $uploadfile = $caminho . basename($arquivo['file']['name']);        
        if(file_exists($uploadfile)){
            if (sha1_file($arquivo['file']['tmp_name']) == sha1_file($uploadfile)) {
                $this->auditarArquivo(AbstractAuditoriaEnum::ArquivoJaCadastrado);
            }else{
                $this->auditarArquivo(AbstractAuditoriaEnum::ArquivoComAlteracoes);
            }
        }
        if (move_uploaded_file($arquivo['file']['tmp_name'], $uploadfile)) {
            $this->auditarArquivo(AbstractAuditoriaEnum::ArquivoEnviadoComSucesso);
        } else {
            $this->auditarArquivo(AbstractAuditoriaEnum::ArquivoMalicioso);            
        }         
     }

     private function auditarArquivo($state){
         $this->stateArquivo = $state;
     }

}