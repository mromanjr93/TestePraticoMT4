<?php

namespace TestePratico\AppServices\Interfaces;

use TestePratico\AppServices\Dtos\SSHDto;

interface ISSHAppService  {

    public function executar(SSHDto $model);
}