<?php

namespace TestePratico\AppServices\Interfaces;

/**
 * Interface para o appService de CrudBase
 *
 * @package		TestePratico\AppServices\Interfaces
 * @category	AppServices
 * @author		Marcelo Roman Junior 
 */
interface IAppServiceCrudBase {
     public function inserir($model);
     public function buscarPorId($id);
     public function listar();
     public function atualizar($model);
     public function excluir($id);
}