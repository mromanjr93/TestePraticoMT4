<?php

namespace TestePratico\Domain\Interfaces;

interface IRepositoryBase {

     public function inserir($model);
     public function buscarPorId($id);
     public function listar();
     public function atualizar($model);
     public function excluir($id);             
}