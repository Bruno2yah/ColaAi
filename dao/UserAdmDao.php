<?php 
require_once (__DIR__ . '../../model/Conexao.php');

    class UserAdmDao{
        public static function insert($userAdm){
            // Ajuste para obter o ID corretamente usando o método getId()
            $id = $userAdm->getId();
            $nome = $userAdm->getNome();
            $cpf = $userAdm->getCpf();
            $nasc = $userAdm->getNasc();
            $email = $userAdm->getEmail();
            $senha = $userAdm->getSenha(); // Corrigido o nome do método para getSenha()
            $imagem = $userAdm->getImagem();
            $token = $userAdm->getToken();
            
            $conn = Conexao::conectar(); // Estabeleça a conexão com o banco de dados
            
            $stmt = $conn->prepare("INSERT INTO tbadmin (idAdmin, nomeAdmin, cpfAdmin, dataNascAdmin, emailAdmin, senhaAdmin, imagemAdmin, tokenAdmin) 
                            VALUES (:id, :nome, :cpf, :nasc, :email, :senha, :imagem, :token)");
        
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':nasc', $nasc);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':imagem', $imagem);
            $stmt->bindParam(':token', $token);
        
            $result = $stmt->execute();
        
            if ($result) {
                return true; // Inserção bem-sucedida
            } else {
                return false; // Erro na inserção
            }
        }
        
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbadmin";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        }

        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbadmin WHERE idAdmin = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id,  PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbadmin WHERE idAdmin = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id);
            return  $stmt->execute();

        }

        public static function update($id, $userAdm){
            $conexao = Conexao::conectar();
        
            $query = "UPDATE tbadmin SET 
                nomeAdmin = :nome, 
                cpfAdmin = :cpf,
                dataNascAdmin = :nasc, 
                emailAdmin = :email, 
                senhaAdmin = :senha, 
                imagemAdmin = :imagem, 
                tokenAdmin = :token 
                WHERE idAdmin = :id";
            
            $stmt = $conexao->prepare($query);
        
            // Atribuir os valores a variáveis antes de chamar bindParam
            $nome = $userAdm->getNome();
            $cpf = $userAdm->getCpf();
            $nasc = $userAdm->getNasc();
            $email = $userAdm->getEmail();
            $senha = $userAdm->getsenha();
            $imagem = $userAdm->getImagem();
            $token = $userAdm->getToken();
        
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':nasc', $nasc);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':imagem', $imagem);
            $stmt->bindParam(':token', $token);
            $stmt->bindParam(':id', $id);
        
            return $stmt->execute();
        }
        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbadmin WHERE emailAdmin = :email and senhaAdmin = :senha";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }


?>