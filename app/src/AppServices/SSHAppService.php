<?php


namespace TestePratico\AppServices;

use \TestePratico\AppServices\Interfaces\ISSHAppService;

use TestePratico\AppServices\Interfaces\Dtos\SSHDto;

class SSHAppService implements ISSHAppService {

    private $connection;
    public function conectar(SSHDto $model) {        
        $this->connection = ssh2_connect($model->host, $model->porta);
    }
}