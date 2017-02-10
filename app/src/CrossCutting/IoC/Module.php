<?php

namespace TestePratico\CrossCutting\IoC;

use Pimple\Container;

use TestePratico\AppServices\SSHAppService;
use TestePratico\AppServices\CriptografiaAppService;
use TestePratico\AppServices\AuditoriaAppService;

use TestePratico\Services\Criptografia\CriptografiaService;
use TestePratico\Services\SSH\SSHService;
use TestePratico\Services\Auditoria\AuditoriaService;

use TestePratico\Infrastructure\Data\Database\Conexao;
use TestePratico\Infrastructure\Data\Repositories\AuditoriaRepository;


/**
 * Aqui implemento de fato o conceito de injeção de dependencia e resolvo todos os tipos passados em construtores. 
 *
 * @package		TestePratico\CrossCutting
 * @category	AppServices
 * @author		Marcelo Roman Junior 
 */
class Module {

    public $container;
    public function register(){
        $this->container = new Container();

        $this->container['SSHService'] = function ($c) {
            return new SSHService();
        };

        $this->container['SSHAppService'] = function ($c) {
            return new SSHAppService($c['SSHService']);
        };


        $this->container['CriptografiaService'] = function ($c) {
            return new CriptografiaService();
        };

        $this->container['CriptografiaAppService'] = function ($c) {            
            return new CriptografiaAppService($c['CriptografiaService']);
        };

        $this->container['Conexao'] = function ($c) {
            return new Conexao();
        };

        $this->container['AuditoriaRepository'] = function ($c) {            
            return new AuditoriaRepository($c["Conexao"]);
        };

        $this->container['AuditoriaService'] = function ($c) {
            return new AuditoriaService($c['AuditoriaRepository']);
        };

        $this->container['AuditoriaAppService'] = function ($c) {            
            return new AuditoriaAppService($c['AuditoriaService']);
        };        
    }
}