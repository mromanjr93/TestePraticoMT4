<?php


namespace TestePratico\AppServices;

use \TestePratico\AppServices\Interfaces\IAuditoriaAppService;
use \TestePratico\AppServices\Dtos\AuditoriaDto;
use \TestePratico\Services\AuditoriaService;
use TestePratico\AppServices\Mappings\MapperFactory;
use \TestePratico\Domain\Entities\Auditoria;

class AuditoriaAppService implements IAuditoriaAppService {

     private $service;

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
         
     }
}