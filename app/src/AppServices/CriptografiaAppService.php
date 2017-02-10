<?php


namespace TestePratico\AppServices;

use \TestePratico\AppServices\Interfaces\ICriptografiaAppService;
use \TestePratico\AppServices\Dtos\CriptografiaDto;
use \TestePratico\Services\Criptografia\CriptografiaService;
use TestePratico\AppServices\Mappings\MapperFactory;
use \TestePratico\Domain\Entities\Criptografia;

/**
 * AppService de Criptografia
 * Esta AppService faz o mapeamento de objetos para exemplificar o Design Pattern Mapper
 * E seguindo o conceito de DDD, para a responsabilidade para a camada de serviço
 *
 * @package		TestePratico\AppServices
 * @category	AppServices
 * @author		Marcelo Roman Junior 
 */
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
        $criptografiaModel = MapperFactory::mapTo($model, '\TestePratico\Domain\Entities\Criptografia');
        return $this->service->descriptografar($criptografiaModel);
       
    }
}