<?php 
require_once (__DIR__ . '../../model/Conexao.php');

    class AnaliseOrgEventoDao{
        public static function insert($analiseOrgEvento){
            // Ajuste para obter o ID corretamente usando o método getId()
            $situacao = $analiseOrgEvento->getSituacao();
            $idAdmin = $analiseOrgEvento->getIdAdmin();
            $idOrganizacaoEvento = $analiseOrgEvento->getIdOrganizacaoEvento();
            
            $conn = Conexao::conectar(); // Estabeleça a conexão com o banco de dados
            
            $stmt = $conn->prepare("INSERT INTO tbanaliseorganizacaoevento(situacaoOrganizacaoEvento, idAdmin, idOrganizacaoEvento) 
                            VALUES (:situacao, :idAdmin, :idOrgEvento)");
            
            $stmt->bindParam(':situacao', $situacao);
            $stmt->bindParam(':idAdmin', $idAdmin);
            $stmt->bindParam(':idOrgEvento', $idOrganizacaoEvento);
           
            $result = $stmt->execute();
            
            if ($result) {
                return true; // Inserção bem-sucedida
            } else {
                return false; // Erro na inserção
            }
        }
        
        
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbanaliseorganizacaoevento";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        }

        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbanaliseorganizacaoevento WHERE idAnaliseOrganizacaoEvento = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id,  PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbanaliseorganizacaoevento WHERE idAnaliseOrganizacaoEvento = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id);
            return  $stmt->execute();

        }

        public static function update($id, $user){
            $conexao = Conexao::conectar();
        
            $query = "UPDATE tbanaliseorganizacaoevento SET 
                situacaoOrganizacaoEvento = :situacao, 
                idAdmin= :idAdmin,
                idOrganizacaoEvento = :idOrgEvento
                WHERE idAnaliseOrganizacaoEvento = :id";
            
            $stmt = $conexao->prepare($query);
        
            // Atribuir os valores a variáveis antes de chamar bindParam
            $situacao = $user->getSituacao();
            $idAdmin = $user->getIdAdmin();
            $idOrganizacaoEvento = $user->getIdOrganizacaoEvento();
        
            $stmt->bindParam(':situacao', $situacao);
            $stmt->bindParam(':idAdmin', $idAdmin);
            $stmt->bindParam(':idOrgEvento', $idOrganizacaoEvento);
            $stmt->bindParam(':id', $id);
        
            return $stmt->execute();
        }
      
      
}
?>