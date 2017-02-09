<?php

namespace TestePratico\Services;

use TestePratico\Services\Interfaces\IAuditoriaService;
use TestePratico\Domain\Entities\Auditoria;
use TestePratico\Infrastructure\Data\Repositories\AuditoriaRepository;
class AuditoriaService implements IAuditoriaService {
    
     private $repository;

     public function __construct(AuditoriaRepository $repository){
        $this->repository = $repository;
     }

     public function inserir($model){
        return $this->repository->inserir($model);
     }
     public function buscarPorId($id){
        return $this->repository->buscarPorId($id);
     }

     public function listar(){
        return $this->repository->listar();
     }

     public function atualizar($model){
        return $this->repository->atualizar($model);
     }

     public function excluir($id){
         return $this->repository->excluir($id);
     }
}