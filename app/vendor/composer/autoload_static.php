<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63f909c12b898553123d7e935f1e38f7
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'T' => 
        array (
            'TestePratico\\Services\\' => 22,
            'TestePratico\\Domain\\Interfaces\\' => 31,
            'TestePratico\\CrossCutting\\IoC\\' => 30,
            'TestePratico\\AppServices\\Interfaces\\' => 36,
            'TestePratico\\AppServices\\' => 25,
            'TestePratico\\Api\\Retorno\\' => 25,
            'TestePratico\\Api\\Controllers\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'TestePratico\\Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Services',
        ),
        'TestePratico\\Domain\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Domain/Interfaces',
        ),
        'TestePratico\\CrossCutting\\IoC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/CrossCutting/IoC',
        ),
        'TestePratico\\AppServices\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/AppServices/Interfaces',
        ),
        'TestePratico\\AppServices\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/AppServices',
        ),
        'TestePratico\\Api\\Retorno\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Api/Retorno',
        ),
        'TestePratico\\Api\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Api/Controllers',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit63f909c12b898553123d7e935f1e38f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63f909c12b898553123d7e935f1e38f7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit63f909c12b898553123d7e935f1e38f7::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}