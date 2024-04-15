<?php
require_once (__DIR__ . '../../model/Conexao.php');

class PublicacaoDao {
    public static function insert($publicacao) {
        $titulo = $publicacao->getTitulo();
        $descricao = $publicacao->getDescricao();
        $link = $publicacao->getLink();
        $idEvento = $publicacao->getIdEvento(); 

        $conn = Conexao::conectar();
        
        $stmt = $conn->prepare("INSERT INTO tbpublicacao (tituloPublicacao, descPublicacao, linkOrganizacaoEvento, idEvento)  
                                VALUES (:titulo, :descricao, :link, :idEvento)");
        
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':link', $link);
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
        $query = "SELECT * FROM tbpublicacao";
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function selectById($id) {
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbpublicacao WHERE idPublicacao = :id";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function delete($id) {
        $conexao = Conexao::conectar();
        $query = "DELETE FROM tbpublicacao WHERE idPublicacao = :id";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public static function update($id, $publicacao) {
        $conexao = Conexao::conectar();
        
        $query = "UPDATE tbpublicacao SET 
                   tituloPublicacao = :titulo, 
                   descPublicacao = :descricao, 
                   linkOrganizacaoEvento = :link,
                   idEvento = :idEvento
                   WHERE idPublicacao = :id";
        
        $stmt = $conexao->prepare($query);
        
        // Atribuir os valores a variáveis antes de chamar bindParam
        $titulo = $publicacao->getTitulo();
        $descricao = $publicacao->getDescricao();
        $link = $publicacao->getLink();
        $idEvento = $publicacao->getIdEvento();
        
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':link', $link);
        $stmt->bindParam(':idEvento', $idEvento);
        $stmt->bindParam(':id', $id);
        
        return $stmt->execute();
    }
}
?>
