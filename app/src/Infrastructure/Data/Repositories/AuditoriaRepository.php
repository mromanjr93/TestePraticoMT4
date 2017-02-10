<?php

namespace TestePratico\Infrastructure\Data\Repositories;
use TestePratico\Domain\Interfaces\IAuditoriaRepository;
use TestePratico\Infrastructure\Data\Database\Conexao;


/**
 * Classe de repository - Auditoria
 * Sua responsabilidade é realizar operações de banco de dados
 *
 * @package		TestePratico\Infrastructure\Repositories
 * @category	Repositories
 * @author		Marcelo Roman Junior 
 */
class AuditoriaRepository extends RepositoryBase implements IAuditoriaRepository{

    public function __construct(Conexao $conexao){
        parent::__construct($conexao);
    }

    public function inserir($model){

        $sql = "INSERT INTO upload_arquivos(path) VALUES (:path)";
                                                
        $stmt = $pdo->prepare($sql);                                                    
        $stmt->bindParam(':path', $model->caminhoArquivo, \PDO::PARAM_STR);                                                           
        $stmt->execute(); 
    
    }
    
    public function buscarPorId($id){
    }

    public function listar(){
    
    }

    public function atualizar($model){
    
    }

    public function excluir($id){
    
    }
}
