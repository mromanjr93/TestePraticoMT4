<?php

namespace TestePratico\Infrastructure\Data\Database;

/**
 * Classe base de conexão requerida pelos repositórios 
 *
 * @package		TestePratico\Infrastructure\Database
 * @category	Infra
 * @author		Marcelo Roman Junior 
 */
class Conexao extends \PDO
{
    public function __construct($file = 'configuracoes.ini')
    {
        if (!$settings = parse_ini_file($file, TRUE)) throw new exception('Unable to open ' . $file . '.');
        
        $dns = $settings['database']['driver'] .
        ':host=' . $settings['database']['host'] .
        ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
        ';dbname=' . $settings['database']['schema'];
        
        parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
    }
}