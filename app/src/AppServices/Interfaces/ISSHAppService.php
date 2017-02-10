<?php

namespace TestePratico\AppServices\Interfaces;

use TestePratico\AppServices\Dtos\SSHDto;


/**
 * Interface para o appService de SSH
 *
 * @package		TestePratico\AppServices\Interfaces
 * @category	AppServices
 * @author		Marcelo Roman Junior 
 */
interface ISSHAppService  {

    public function executar(SSHDto $model);
}