<?php

namespace TestePratico\Domain\Interfaces;

/**
 * Interface de base de repositório - Auditoria 
 *
 * @package		TestePratico\Domain\Interfaces
 * @category	Domain
 * @author		Marcelo Roman Junior 
 */
interface IRepositoryBase {

     public function inserir($model);
     public function buscarPorId($id);
     public function listar();
     public function atualizar($model);
     public function excluir($id);             
}