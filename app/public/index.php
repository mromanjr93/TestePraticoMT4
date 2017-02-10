<?php

define('DS', DIRECTORY_SEPARATOR);
require  '..'.DS.'vendor'.DS.'autoload.php';

use RestService\Server;

$rotas = require __DIR__ . DS.'..'.DS.'configuracoes'.DS.'rotas.php';

$url = implode("/",array_filter(explode('/',$_SERVER['PATH_INFO'])));




if(array_key_exists($url, $rotas['paths'])){
    
    $module = new TestePratico\CrossCutting\IoC\Module();
    $module->register();

    $controller = TestePratico\CrossCutting\IoC\IoCFactory::create($rotas['paths'][$url], $module->container);    
    
    if($controller instanceof \TestePratico\Api\Controllers\ApiController){
        $controller->processApi();
    }
}
