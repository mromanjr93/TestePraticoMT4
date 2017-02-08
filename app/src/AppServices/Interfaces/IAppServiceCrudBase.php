<?php

namespace TestePratico\AppServices\Interfaces;

interface IAppServiceCrudBase {
     public function inserir($model);
     public function buscarPorId($id);
     public function listar();
     public function atualizar($model);
     public function excluir($id);
}