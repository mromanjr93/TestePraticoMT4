<?php

namespace TestePratico\Domain\Entities;

/**
 * Domain de Criptografia
 * Esta camada tem por objetivo isolar as regras de domínio, regras que são aplicadas na entidade
 * Como esse exemplo é bem simples, não implementei nenhum método que necessite de regras de negócio 
 *
 * @package		TestePratico\Domain
 * @category	Domain
 * @author		Marcelo Roman Junior 
 */
class Criptografia {
    public $texto;
    public $textoCriptografado;
    public $chave; 
}