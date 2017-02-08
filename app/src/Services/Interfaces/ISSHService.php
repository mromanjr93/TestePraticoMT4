<?php

namespace TestePratico\Services\Interfaces;

use TestePratico\Domain\Entities\SSH;

interface ISSHService {
    public function conectar(SSH $model);
    public function autenticar(SSH $model);
    public function executarComando($comando);
}