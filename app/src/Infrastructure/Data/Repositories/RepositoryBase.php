<?php

namespace TestePratico\Infrastructure\Data\Repositories;

use TestePratico\Infrastructure\Data\Database\Conexao;

abstract class RepositoryBase {
    
    public function __constructor(Conexao $conexao){
        
    }
}
