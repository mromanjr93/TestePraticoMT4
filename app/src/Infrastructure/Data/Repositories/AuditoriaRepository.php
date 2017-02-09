<?php

namespace TestePratico\Infrastructure\Data\Repositories;
use TestePratico\Domain\Interfaces\IAuditoriaRepository;
use TestePratico\Infrastructure\Data\Database\Conexao;

class AuditoriaRepository extends RepositoryBase implements IAuditoriaRepository{

    public function __construct(Conexao $conexao){
        //parent::__construct($conexao);
    }

    public function inserir($model){
    
    }
    
    public function buscarPorId($id){
    }

    public function listar(){
    
    }

    public function atualizar($model){
    
    }

    public function excluir($id){
    
    }
}
