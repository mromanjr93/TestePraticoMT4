<?php

namespace TestePratico\AppServices\Interfaces;

use TestePratico\AppServices\Interfaces\Dtos\SSHDto;

interface ISSHAppService  {
    public function conectar(SSHDto $model);
}