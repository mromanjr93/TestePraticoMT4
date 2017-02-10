<?php


namespace TestePratico\AppServices;

use \TestePratico\AppServices\Interfaces\ISSHAppService;
use \TestePratico\Services\SSH\SSHService;
use \TestePratico\AppServices\Dtos\SSHDto;
use \TestePratico\Services\SSH\Autenticacao\SSHAuthenticatePassword;

class SSHAppService implements ISSHAppService {

    private $service;
    public function __construct(SSHService $service){
        $this->service = $service;         
    }
    
    public function executar(SSHDto $model) { 
        try{
            $this->service->open($model->host);     
            $this->service->authenticate(new SSHAuthenticatePassword($model->usuario, $model->host));    
            $retorno = $this->service->execute($model->comando); 
        }
        catch(Exception $ex){
            $retorno = $ex->getMessage();
        }

        return $retorno;
    }
}