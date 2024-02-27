<?php 
require_once (__DIR__ . '../../model/Conexao.php');

    class UserAdmDao{
        public static function insert($user){
            // Ajuste para obter o ID corretamente usando o método getId()
            $id = $user->getId();
            $nome = $user->getNome();
            $sobrenome = $user->getSobrenome();
            $email = $user->getEmail();
            $senha = $user->getSenha(); // Corrigido o nome do método para getSenha()
            $imagem = $user->getImagem();
            
            $conn = Conexao::conectar(); // Estabeleça a conexão com o banco de dados
            
            $stmt = $conn->prepare("INSERT INTO tbusuario (idUsuario, nomeUsuario, sobrenomeUsuario, emailUsuario, senhaUsuario, imagemUsuario) 
                            VALUES (:id, :nome, :sobrenome, :nasc, :email, :senha, :imagem)");
        
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':sobrenome', $sobrenome);
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
            $query = "SELECT * FROM tbusuario";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        }

        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbusuario WHERE idUsuario = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id,  PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbusuario WHERE idUsuario = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id);
            return  $stmt->execute();

        }

        public static function update($id, $user){
            $conexao = Conexao::conectar();
        
            $query = "UPDATE tbusuario SET 
                nomeUsuario = :nome, 
                sobrenomeUsuario = :sobrenome,
                emailUsuario = :email, 
                senhaUsuario = :senha, 
                imagemUsuario = :imagem, 
                WHERE idUsuario = :id";
            
            $stmt = $conexao->prepare($query);
        
            // Atribuir os valores a variáveis antes de chamar bindParam
            $nome = $user->getNome();
            $sobrenome = $user->getSobrenome();
            $email = $user->getEmail();
            $senha = $user->getsenha();
            $imagem = $user->getImagem();

        
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':sobrenome', $sobrenome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':imagem', $imagem);
            $stmt->bindParam(':id', $id);
        
            return $stmt->execute();
        }
        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbusuario WHERE emailUsuario = :email and senhaUsuario = :senha";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }


?>