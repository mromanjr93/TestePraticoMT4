<?php

namespace TestePratico\CrossCutting\IoC;

use Pimple\Container;
use TestePratico\AppServices\SSHAppService;
use TestePratico\AppServices\CriptografiaAppService;
use TestePratico\Services\CriptografiaService;


class Module {

    public $container;
    public function register(){
        $this->container = new Container();

        $this->container['SSHAppService'] = function ($c) {
            return new SSHAppService();
        };

        $this->container['CriptografiaService'] = function ($c) {
            return new CriptografiaService();
        };

        $this->container['CriptografiaAppService'] = function ($c) {            
            return new CriptografiaAppService($c['CriptografiaService']);
        };

        
    }
}