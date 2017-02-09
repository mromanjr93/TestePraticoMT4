<?php

namespace TestePratico\Services\Criptografia\Interfaces;

use TestePratico\Domain\Entities\Criptografia;

interface ICriptografiaService {
    public function criptografar(Criptografia $model);
    public function descriptografar(Criptografia $model);
}