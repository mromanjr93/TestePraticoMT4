<?php

namespace TestePratico\Services\Interfaces;

interface IServiceCrudBase {
     public function inserir($model);
     public function buscarPorId($id);
     public function listar();
     public function atualizar($model);
     public function excluir($id);
}