<?php 
require_once (__DIR__ . '../../model/Conexao.php');

    class TokenOrgEventoDao{
        public static function insert($tokenOrgEvento){
            // Ajuste para obter o ID corretamente usando o método getId()
            $valor = $tokenOrgEvento->getSituacao();
            $idOrganizacaoEvento = $tokenOrgEvento->getIdOrganizacaoEvento();
            
            $conn = Conexao::conectar(); // Estabeleça a conexão com o banco de dados
            
            $stmt = $conn->prepare("INSERT INTO tbtokenorganizacaoevento(valorTokenOrganizacaoEvento, idOrganizacaoEvento) 
                            VALUES (:valor, :idOrgEvento)");
            
            $stmt->bindParam(':valor', $valor);
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
            $query = "SELECT * FROM tbtokenorganizacaoevento";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        }

        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbtokenorganizacaoevento WHERE idTokenorganizacaoevento = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id,  PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbtokenorganizacaoevento WHERE idTokenorganizacaoevento = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id);
            return  $stmt->execute();

        }

        public static function update($id, $user){
            $conexao = Conexao::conectar();
        
            $query = "UPDATE tbtokenorganizacaoevento SET 
               valorTokenOrganizacaoEvento = :valor, 
                idOrganizacaoEvento = :idOrgEvento
                WHERE idTokenorganizacaoevento = :id";
            
            $stmt = $conexao->prepare($query);
        
            // Atribuir os valores a variáveis antes de chamar bindParam
            $valor = $user->getSituacao();
            $idOrganizacaoEvento = $user->getIdOrganizacaoEvento();
        
            $stmt->bindParam(':valor', $valor);
            $stmt->bindParam(':idOrgEvento', $idOrganizacaoEvento);
            $stmt->bindParam(':id', $id);
        
            return $stmt->execute();
        }

   public static function getCodigoAcessoByEmail($email) {
    $conn = Conexao::conectar(); // Estabeleça a conexão com o banco de dados

    $stmt = $conn->prepare("SELECT valorTokenOrganizacaoEvento 
                            FROM tbtokenorganizacaoevento 
                            WHERE idOrganizacaoEvento = (
                                SELECT idOrganizacaoEvento 
                                FROM tborganizacaoevento 
                                WHERE emailOrganizacaoEvento = :email
                            )");

    $stmt->bindParam(':email', $email);

    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($resultado) {
        return $resultado['valorTokenOrganizacaoEvento']; // Retorna o código de acesso se encontrado
    } else {
        return false; // Retorna falso se não encontrado
    }
}

      
}
?>