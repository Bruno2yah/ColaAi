<?php 
require_once (__DIR__ . '../../model/Conexao.php');

    class OrganizacaoDao{
        public static function insert($org){
            $nome = $org->getNome();
            $cnpj = $org->getCnpj();
            $cep = $org->getCep();
            $log = $org->getLog();
            $bairro = $org->getBairro();
            $num = $org->getNum();
            $cidade = $org->getCidade();
            $uf = $org->getUf();
            $email = $org->getEmail();
            $senha = $org->getSenha(); 
            $link = $org->getLink();
            $tel = $org->getTel();
            $imagem = $org->getImagem();
            
            $conn = Conexao::conectar(); // Estabeleça a conexão com o banco de dados
        
            $stmt = $conn->prepare("INSERT INTO tborganizacaoevento (nomeOrganizacaoEvento, cnpjOrganizacaoEvento, cepOrganizacaoEvento, 
            logradouroOrganizacaoEvento, bairroOrganizacaoEvento, numeroOrganizacaoEvento, cidadeOrganizacaoEvento, ufOrganizacaoEvento, 
            emailOrganizacaoEvento, senhaOrganizacaoEvento, linkSiteOrganizacaoEvento, telOrganizacaoEvento, imagemOrganizacaoEvento) 
                            VALUES (:nome, :cnpj, :cep, :log, :bairro, :num, :cidade, :uf, :email, :senha, :link, :tel, :imagem)");
        
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cnpj', $cnpj);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':log', $log);
            $stmt->bindParam(':bairro', $bairro);
            $stmt->bindParam(':num', $num);
            $stmt->bindParam(':cidade', $cidade);
            $stmt->bindParam(':uf', $uf);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':link', $link);
            $stmt->bindParam(':tel', $tel);
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
            $query = "SELECT * FROM tborganizacaoevento";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        }

        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tborganizacaoevento WHERE idOrganizacaoevento = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id,  PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tborganizacaoevento WHERE idOrganizacaoevento = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id);
            return  $stmt->execute();

        }

        public static function update($id, $org){
            $conexao = Conexao::conectar();
        
            $query = "UPDATE tborganizacaoevento SET 
               nomeOrganizacaoEvento = :nome, 
               cnpjOrganizacaoEvento = :cnpj,
               cepOrganizacaoEvento = :cep, 
               logradouroOrganizacaoEvento = :log,
               bairroOrganizacaoEvento = :bairro,
               numeroOrganizacaoEvento = :num,
               cidadeOrganizacaoEvento = :cidade,
               ufOrganizacaoEvento = :uf,
               emailOrganizacaoEvento = :email, 
               senhaOrganizacaoEvento = :senha, 
               linkSiteOrganizacaoEvento = :link,
               telOrganizacaoEvento = :tel,
               imagemOrganizacaoEvento = :imagem 
                WHERE idOrganizacaoevento = :id";
            
            $stmt = $conexao->prepare($query);
        
            // Atribuir os valores a variáveis antes de chamar bindParam
            $nome = $org->getNome();
            $cnpj = $org->getCnpj();
            $cep = $org->getCep();
            $log = $org->getLog();
            $bairro = $org->getBairro();
            $num = $org->getNum();
            $cidade = $org->getCidade();
            $uf = $org->getUf();
            $email = $org->getEmail();
            $senha = $org->getSenha(); 
            $link = $org->getLink();
            $tel = $org->getTel();
            $imagem = $org->getImagem();

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cnpj', $cnpj);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':log', $log);
            $stmt->bindParam(':bairro', $bairro);
            $stmt->bindParam(':num', $num);
            $stmt->bindParam(':cidade', $cidade);
            $stmt->bindParam(':uf', $uf);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':link', $link);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':imagem', $imagem);
            $stmt->bindParam(':id', $id);
        
            return $stmt->execute();
        }
        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tborganizacaoevento WHERE emailOrganizacaoEvento = :email and senhaOrganizacaoEvento = :senha";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public static function search($termoPesquisa) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tborganizacaoevento WHERE 
                        nomeOrganizacaoEvento LIKE :termo OR 
                        emailOrganizacaoEvento LIKE :termo OR 
                        cnpjOrganizacaoEvento LIKE :termo";
            $stmt = $conexao->prepare($query);
            $termo = "%$termoPesquisa%"; // Adiciona % para pesquisa parcial
            $stmt->bindParam(':termo', $termo);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        
    }


?>