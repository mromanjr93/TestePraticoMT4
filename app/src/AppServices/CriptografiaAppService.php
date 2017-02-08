<?php


namespace TestePratico\AppServices;

use \TestePratico\AppServices\Interfaces\ICriptografiaAppService;
use \TestePratico\AppServices\Dtos\CriptografiaDto;
use \TestePratico\Services\CriptografiaService;

class CriptografiaAppService implements ICriptografiaAppService {

    private $service;
    public function __construct(CriptografiaService $service){
        $this->service = $service;
    }

    public function criptografar(CriptografiaDto $model) {            
        return $this->service->criptografar($model);       
    }

    
    public function descriptografar(CriptografiaDto $model) { 

       return $this->service->descriptografar($model);
    }
}