<?php

namespace TestePratico\AppServices\Interfaces;

use TestePratico\AppServices\Interfaces\Dtos\AuditoriaDto;


/**
 * Interface para o appService de Auditoria
 *
 * @package		TestePratico\AppServices\Interfaces
 * @category	AppServices
 * @author		Marcelo Roman Junior 
 */
interface IAuditoriaAppService extends IAppServiceCrudBase {
    public function salvarEmDisco($arquivo, $caminho);   
}