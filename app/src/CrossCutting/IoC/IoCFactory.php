<?php

namespace TestePratico\CrossCutting\IoC;


use TestePratico\Api\Controllers\SSHController;
use TestePratico\Api\Controllers\CriptografiaController;
use TestePratico\Api\Controllers\AuditoriaController;


/**
 * Factory de Injeção de Dependencia
 * Esta Classe é uma Factory, que implementa cria instancias para o Injetor de Dependencia 
 * A camada CrossCutting é uma camada transversal, ou seja, o sistema todo pode referenciar.
 *
 * @package		TestePratico\CrossCutting
 * @category	AppServices
 * @author		Marcelo Roman Junior 
 */
class IoCFactory
{
    public static function create($injector, $container)
    {
        switch($injector)
        {
            case 'SSHController' : {
                return new SSHController($container['SSHAppService']);
            }
            case 'CriptografiaController' : {
                return new CriptografiaController($container['CriptografiaAppService']);                
            }
             case 'AuditoriaController' : {
                return new AuditoriaController($container['AuditoriaAppService']);                
            }
        }
        
    }
}
