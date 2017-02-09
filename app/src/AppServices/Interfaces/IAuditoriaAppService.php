<?php

namespace TestePratico\AppServices\Interfaces;

use TestePratico\AppServices\Interfaces\Dtos\AuditoriaDto;


interface IAuditoriaAppService extends IAppServiceCrudBase {
    public function salvarEmDisco($arquivo, $caminho);   
}