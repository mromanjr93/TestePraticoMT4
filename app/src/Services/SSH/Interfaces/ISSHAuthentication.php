<?php

namespace TestePratico\Services\SSH\Interfaces;

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