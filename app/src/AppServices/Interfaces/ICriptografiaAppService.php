<?php

namespace TestePratico\AppServices\Interfaces;

use TestePratico\AppServices\Dtos\CriptografiaDto;

interface ICriptografiaAppService  {
    public function criptografar(CriptografiaDto $model);
    public function descriptografar(CriptografiaDto $model);
}