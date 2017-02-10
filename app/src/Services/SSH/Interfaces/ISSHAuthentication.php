<?php

namespace TestePratico\Services\SSH\Interfaces;


/**
 * Interface de autenticação de SSH
 *
 * @package	TestePratico\Services\SSH\Interfaces
 * @category	Services
 * @author	Marcelo Roman Junior 
 */
interface ISSHAuthentication {
        /**
         * Efetua a autenticação do usuário
         * @param resource $resource
         */
        public function authenticate( &$resource );
 
        /**
         * Recupera o nome do usuário
         * @return string
         */
        public function getUser();
}