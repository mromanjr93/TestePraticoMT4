<?php

namespace TestePratico\AppServices;


/**
 * Classe Abstrata para estabelecer a auditoria de upload
 *
 * @package		TestePratico\AppServices\Mappings
 * @category	AppServices
 * @author		Marcelo Roman Junior 
 */
abstract class AbstractAuditoriaEnum
{
    const ArquivoJaCadastrado = 0;
    const ArquivoComAlteracoes = 1;    
    const ArquivoEnviadoComSucesso = 2;
    const ArquivoMalicioso = 3;
}