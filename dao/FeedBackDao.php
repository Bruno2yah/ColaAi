<?php
require_once (__DIR__ . '../../model/Conexao.php');

class FeedbackAppDao {
    public static function insert($feedback) {
        $titulo = $feedback->getTitulo();
        $descricao = $feedback->getDescricao();
        $idUsuario = $feedback->getIdUsuario();

        $conn = Conexao::conectar();
        
        $stmt = $conn->prepare("INSERT INTO tbfeedbackapp (tituloFeedBackApp, descFeedbackApp, idUsuario)  
                                VALUES (:titulo, :descricao, :idUsuario)");
        
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':idUsuario', $idUsuario);
        
        $result = $stmt->execute();
        
        if ($result) {
            return true; // Inserção bem-sucedida
        } else {
            return false; // Erro na inserção
        }
    }
    
    public static function selectAll() {
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbfeedbackapp";
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function selectById($id) {
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbfeedbackapp WHERE idFeedBackApp = :id";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function delete($id) {
        $conexao = Conexao::conectar();
        $query = "DELETE FROM tbfeedbackapp WHERE idFeedBackApp = :id";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public static function update($id, $feedback) {
        $conexao = Conexao::conectar();
        
        $query = "UPDATE tbfeedbackapp SET 
                   tituloFeedBackApp = :titulo, 
                   descFeedbackApp = :descricao, 
                   idUsuario = :idUsuario
                   WHERE idFeedBackApp = :id";
        
        $stmt = $conexao->prepare($query);
        
        // Atribuir os valores a variáveis antes de chamar bindParam
        $titulo = $feedback->getTitulo();
        $descricao = $feedback->getDescricao();
        $idUsuario = $feedback->getIdUsuario();
        
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':idUsuario', $idUsuario);
        $stmt->bindParam(':id', $id);
        
        return $stmt->execute();
    }
}
?>
