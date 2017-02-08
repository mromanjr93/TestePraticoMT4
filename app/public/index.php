<?php
require  '..\vendor\autoload.php';

$rotas = require __DIR__ . '\..\configuracoes\rotas.php';


$url = implode("/",array_filter(explode('/',$_SERVER['PATH_INFO'])));



if(array_key_exists($url, $rotas['paths'])){
    
    $module = new TestePratico\CrossCutting\IoC\Module();
    $module->register();

    $controller = TestePratico\CrossCutting\IoC\IoCFactory::create($rotas['paths'][$url], $module->container);    
    
    if($controller instanceof \TestePratico\Api\Controllers\ApiController){
        $controller->processApi();
    }
}
