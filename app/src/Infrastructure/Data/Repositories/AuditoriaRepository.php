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

        $sql = "INSERT INTO upload_arquivos(path, data_cadastro) VALUES (:path, :data_cadastro)";                                                
        $stmt = $parent::prepare($sql);                                                    
        $stmt->bindParam(':path', $model->caminhoArquivo, \PDO::PARAM_STR );                                                           
        $stmt->bindParam(':path', date ("Y-m-d H:i:s"), \PDO::PARAM_STR );                                                           
        return $stmt->execute(); 
    }
    
    public function buscarPorId($id){
        $sql= "SELECT *  FROM upload_arquivos WHERE id = :id";         
        $stmt = $parent::prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT); 
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);        
    }

    public function listar(){

        $sql= "SELECT *  FROM upload_arquivos";         
        $stmt = $parent::prepare($sql);        
        $stmt->execute();

        $retorno = [];
        while ($row = $stmt->fetchObject()) {
            $retorno[] = $row;
        }
        return $retorno;    
    }

    public function atualizar($model){
        $sql = "UPDATE upload_arquivos SET path = :path, 
                    data_atualizacao = :data_atualizacao,                    
                WHERE id = :id";
        $stmt = $parent::prepare($sql);                                  
        $stmt->bindParam(':path', $model->caminhoArquivo, \PDO::PARAM_STR);       
        $stmt->bindParam(':data_atualizacao', date ("Y-m-d H:i:s"), \PDO::PARAM_STR);    
        $stmt->bindParam(':auditoria', $model->auditoria, \PDO::PARAM_STR);    
        $stmt->bindParam(':id', $model->id, \PDO::PARAM_INT);        
        return $stmt->execute();     
    }

    public function excluir($id){
        $sql = "DELETE FROM upload_arquivos WHERE id =  :id";
        $stmt = $parent::prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);   
        $stmt->execute();
    }
}
