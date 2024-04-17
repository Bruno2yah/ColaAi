<?php
require_once (__DIR__ . '/../../model/Conexao.php');

class FaixaEtariaDao {
    public static function insert($faixaEtaria) {
        $idadeFaixaEtaria = $faixaEtaria->getIdadeFaixaEtaria();
        $idEvento = $faixaEtaria->getIdEvento();

        $conn = Conexao::conectar();
        
        $stmt = $conn->prepare("INSERT INTO tbfaixaetaria (idadeFaixaEtaria, idEvento)  
                                VALUES (:idadeFaixaEtaria, :idEvento)");
        
        $stmt->bindParam(':idadeFaixaEtaria', $idadeFaixaEtaria);
        $stmt->bindParam(':idEvento', $idEvento);
        
        $result = $stmt->execute();
        
        if ($result) {
            return true; // Inserção bem-sucedida
        } else {
            return false; // Erro na inserção
        }
    }
    
    public static function selectAll() {
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbfaixaetaria";
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function selectById($id) {
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbfaixaetaria WHERE idFaixaEtaria = :id";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function delete($id) {
        $conexao = Conexao::conectar();
        $query = "DELETE FROM tbfaixaetaria WHERE idFaixaEtaria = :id";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public static function update($id, $faixaEtaria) {
        $conexao = Conexao::conectar();
        
        $query = "UPDATE tbfaixaetaria SET 
                   idadeFaixaEtaria = :idadeFaixaEtaria, 
                   idEvento = :idEvento
                   WHERE idFaixaEtaria = :id";
        
        $stmt = $conexao->prepare($query);
        
        // Atribuir os valores a variáveis antes de chamar bindParam
        $idadeFaixaEtaria = $faixaEtaria->getIdadeFaixaEtaria();
        $idEvento = $faixaEtaria->getIdEvento();
        
        $stmt->bindParam(':idadeFaixaEtaria', $idadeFaixaEtaria);
        $stmt->bindParam(':idEvento', $idEvento);
        $stmt->bindParam(':id', $id);
        
        return $stmt->execute();
    }
}
?>
