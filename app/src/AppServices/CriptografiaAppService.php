<?php


namespace TestePratico\AppServices;

use \TestePratico\AppServices\Interfaces\ICriptografiaAppService;
use \TestePratico\AppServices\Dtos\CriptografiaDto;
use \TestePratico\Services\CriptografiaService;
use TestePratico\AppServices\Mappings\MapperFactory;
use \TestePratico\Domain\Entities\Criptografia;

class CriptografiaAppService implements ICriptografiaAppService {

    private $service;
    public function __construct(CriptografiaService $service){
        $this->service = $service;
    }

    public function criptografar(CriptografiaDto $model) {   

        $criptografiaModel = MapperFactory::mapTo($model, '\TestePratico\Domain\Entities\Criptografia');

        return $this->service->criptografar($criptografiaModel);
    }

    
    public function descriptografar(CriptografiaDto $model) { 

       return $this->service->descriptografar($model);
    }
}