<?php

namespace TestePratico\Services\SSH\States;

use TestePratico\Services\SSH\Interfaces\AbstractSSHState;

use TestePratico\Services\SSH\Interfaces\ISSHConnection;

final class SSHStateClosed extends AbstractSSHState {
        /**
         * @staticvar
         * @var ISSHConnection
         */
        static private $context;
 
        /**
         * Abre uma nova conexão
         * @param string $host
         * @param integer $port
         * @param ISSHConnection $context
         * @return boolean
         * @throws RuntimeException se não for possível estabelecer a conexão
         * @uses SSHStateEstabilished
         */
        public function open( $host , $port = 22 , ISSHConnection $context ){
                $resource = \ssh2_connect( $host , $port , array(
                        'disconnect'    => array( 'SSHStateClosed' , 'disconnect' )
                ) );
 
                if ( !is_resource( $resource ) ){
                        throw new \RuntimeException( 'Não foi possível estabelecer a conexão.' );
                } else {
                        $estabilished = new SSHStateEstabilished();
                        $estabilished->setResource( $resource );
 
                        self::$context =& $context;
                        self::$context->changeState( $estabilished );
                }
 
                return true;
        }
 
        /**
         * Muda o estado da conexão para SSHStateClosed caso o servidor envie um disconnect
         * @static
         */
        static public function disconnect(){
                self::$context->changeState( new SSHStateClosed() );
        }
}