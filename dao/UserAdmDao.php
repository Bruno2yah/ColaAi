<?php 
require_once (__DIR__ . '../../model/Conexao.php');

    class UserAdmDao{
        public static function insert($userAdm){
            $nome = $userAdm->getNome();
            $sobrenome = $userAdm->getSobrenome();
            $cpf = $userAdm->getCpf();
            $nasc = $userAdm->getNasc();
            $email = $userAdm->getEmail();
            $senha = $userAdm->getSenha(); // Corrigido o nome do método para getSenha()
            $imagem = $userAdm->getImagem();
            
            $conn = Conexao::conectar(); // Estabeleça a conexão com o banco de dados
            
            $stmt = $conn->prepare("INSERT INTO tbadmin (nomeAdmin, sobrenomeAdmin, cpfAdmin, dataNascAdmin, emailAdmin, senhaAdmin, fotoPerfilAdmin) VALUES (:nome, :sobrenome, :cpf, :nasc, :email, :senha, :imagem)");
        
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':sobrenome', $sobrenome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':nasc', $nasc);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':imagem', $imagem);
        
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
                sobrenomeAdmin = :sobrenome,
                cpfAdmin = :cpf,
                dataNascAdmin = :nasc, 
                emailAdmin = :email, 
                senhaAdmin = :senha, 
                fotoPerfilAdmin = :imagem 
                WHERE idAdmin = :id";
            
            $stmt = $conexao->prepare($query);
        
            // Atribuir os valores a variáveis antes de chamar bindParam
            $nome = $userAdm->getNome();
            $sobrenome = $userAdm->getSobrenome();
            $cpf = $userAdm->getCpf();
            $nasc = $userAdm->getNasc();
            $email = $userAdm->getEmail();
            $senha = $userAdm->getsenha();
            $imagem = $userAdm->getImagem();
        
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':sobrenome', $sobrenome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':nasc', $nasc);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':imagem', $imagem);
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