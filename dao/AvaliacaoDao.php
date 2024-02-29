<?php 
require_once (__DIR__ . '../../model/Conexao.php');

    class AvaliacaoDao{
        public static function insert($avaliacao){
            // Ajuste para obter o ID corretamente usando o método getId()
            $titulo = $avaliacao->getTitulo();
            $desc = $avaliacao->getDesc();
            $idOrganizacaoEvento = $avaliacao->getIdOrganizacaoEvento();
           
            $conn = Conexao::conectar(); // Estabeleça a conexão com o banco de dados
            
            $stmt = $conn->prepare("INSERT INTO tbavaliacao (tituloAvaliacao, descAvaliacao, idOrganizacaoEvento) 
            VALUES (:titulo, :descricao, :idOrganizacao)");
            
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':descricao', $desc);
            $stmt->bindParam(':idOrganizacao', $idOrganizacaoEvento);
          
            
            $result = $stmt->execute();
            
            if ($result) {
                return true; // Inserção bem-sucedida
            } else {
                return false; // Erro na inserção
            }
        }
        
        
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbavaliacao";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        }

        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbavaliacao WHERE idAvaliacao = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id,  PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbavaliacao WHERE idAvaliacao = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id);
            return  $stmt->execute();

        }

        public static function update($id, $avaliacao){
            $conexao = Conexao::conectar();
        
            $query = "UPDATE tbavaliacao SET 
                tituloAvaliacao = :nome, 
                descAvaliacao = :sobrenome,
                idOrganizacaoEvento = :email
                WHERE idAvaliacao = :id";
            
            $stmt = $conexao->prepare($query);
        
            // Atribuir os valores a variáveis antes de chamar bindParam
            $titulo = $avaliacao->getNome();
            $desc = $avaliacao->getSobrenome();
            $idOrganizacaoEvento = $avaliacao->getEmail();
           
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':descricao', $desc);
            $stmt->bindParam(':idOrganizacao', $idOrganizacaoEvento);
            $stmt->bindParam(':id', $id);
        
            return $stmt->execute();
        }
       
        public static function getTotalAvalicoes(){
            $conexao = Conexao::conectar();
            $query = "SELECT COUNT(*) as totalAvaliacoes FROM tbavaliacao";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
            return $result['totalAvaliacoes']; 
    }
    /*public static function checkCredentials($email, $senha){
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbcliente WHERE emailCliente = :email and senhaEmailCliente = :senha";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }*/
}
?>