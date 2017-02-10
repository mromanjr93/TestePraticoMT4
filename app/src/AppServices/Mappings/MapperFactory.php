<?php

namespace TestePratico\AppServices\Mappings;


/**
 * Classe adotando o Design Pattern Factory para criar instancias de Mapeamento de DTO para Dominio, e vice-versa
 *
 * @package		TestePratico\AppServices\Mappings
 * @category	AppServices
 * @author		Marcelo Roman Junior 
 */
class MapperFactory {

    public static function  mapTo($model, $objetoDestino){
    
        $reflected = self::getTypes($objetoDestino);

        $obj = new $objetoDestino;
        
        foreach($reflected->getProperties() as $prop){
            $obj->{$prop->name} = (property_exists($model, $prop->name)) ? $model->{$prop->name} : null;
        }

        return $obj;                     
    }

    private static function getTypes($objetoDestino){
        return new \ReflectionClass($objetoDestino);        
    }


}