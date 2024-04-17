<?php
require_once (__DIR__ . '/../../model/Conexao.php');

class TurnoEventoDao {
    public static function insert($turnoEvento) {
        $periodo = $turnoEvento->getPeriodoEvento();
        $idEvento = $turnoEvento->getIdEvento();

        $conn = Conexao::conectar();
        
        $stmt = $conn->prepare("INSERT INTO tbturnoevento (periodoTurnoEvento, idEvento)  
                                VALUES (:periodo, :idEvento)");
        
        $stmt->bindParam(':periodo', $periodo);
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
        $query = "SELECT * FROM tbturnoevento";
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function selectById($id) {
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbturnoevento WHERE idTurnoEvento = :id";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function delete($id) {
        $conexao = Conexao::conectar();
        $query = "DELETE FROM tbturnoevento WHERE idTurnoEvento = :id";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public static function update($id, $turnoEvento) {
        $conexao = Conexao::conectar();
        
        $query = "UPDATE tbturnoevento SET 
                   periodoTurnoEvento = :periodo, 
                   idEvento = :idEvento
                   WHERE idTurnoEvento = :id";
        
        $stmt = $conexao->prepare($query);
        
        // Atribuir os valores a variáveis antes de chamar bindParam
        $periodo = $turnoEvento->getPeriodoEvento();
        $idEvento = $turnoEvento->getIdEvento();
        
        $stmt->bindParam(':periodo', $periodo);
        $stmt->bindParam(':idEvento', $idEvento);
        $stmt->bindParam(':id', $id);
        
        return $stmt->execute();
    }
}
?>
