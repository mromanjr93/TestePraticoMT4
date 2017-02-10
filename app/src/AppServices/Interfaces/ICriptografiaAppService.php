<?php

namespace TestePratico\AppServices\Interfaces;

use TestePratico\AppServices\Dtos\CriptografiaDto;


/**
 * Interface para o appService de Criptografia
 *
 * @package		TestePratico\AppServices\Interfaces
 * @category	AppServices
 * @author		Marcelo Roman Junior 
 */
interface ICriptografiaAppService  {
    public function criptografar(CriptografiaDto $model);
    public function descriptografar(CriptografiaDto $model);
}