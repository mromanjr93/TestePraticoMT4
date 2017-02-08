<?php

namespace TestePratico\CrossCutting\IoC;


use TestePratico\Api\Controllers\SSHController;
use TestePratico\Api\Controllers\CriptografiaController;
use TestePratico\Api\Controllers\AuditoriaController;

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
