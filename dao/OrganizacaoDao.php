<?php 
require_once (__DIR__ . '../../model/Conexao.php');

    class OrganizacaoDao{
        public static function insert($org){
            $nome = $org->getNome();
            $cnpj = $org->getCnpj();
            $cep = $org->getCep();
            $log = $org->getLog();
            $num = $org->getNum();
            $complemento = $org->getComplemento();
            $bairro = $org->getBairro();
            $cidade = $org->getCidade();
            $uf = $org->getUf();
            $tel = $org->getTel();
            $email = $org->getEmail();
            $senha = $org->getSenha(); 
            $link = $org->getLink();          
            $imagem = $org->getImagem();
            $desc = $org->getDesc(); 
            
            $conn = Conexao::conectar(); // Estabeleça a conexão com o banco de dados
        
            $stmt = $conn->prepare("INSERT INTO tborganizacaoevento (nomeOrganizacaoEvento, cnpjOrganizacaoEvento, cepOrganizacaoEvento, enderecoOrganizacaoEvento, numeroOrganizacaoEvento, complementoOrganizacaoEvento, bairroOrganizacaoEvento, cidadeOrganizacaoEvento, ufOrganizacaoEvento,telOrganizacaoEvento, 
            emailOrganizacaoEvento, senhaOrganizacaoEvento, linkSiteOrganizacaoEvento, imagemOrganizacaoEvento, descOrganizacaoEvento) 
                            VALUES (:nome, :cnpj, :cep, :log, :num, :complemento, :bairro, :cidade, :uf, :tel, :email, :senha, :link, :imagem, :desc)");
        
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cnpj', $cnpj);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':log', $log);
            $stmt->bindParam(':num', $num);
            $stmt->bindParam(':complemento', $complemento);
            $stmt->bindParam(':bairro', $bairro);
            $stmt->bindParam(':cidade', $cidade);
            $stmt->bindParam(':uf', $uf);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':link', $link);
            $stmt->bindParam(':imagem', $imagem);
            $stmt->bindParam(':desc', $desc);
        
            $result = $stmt->execute();
        
            if ($result) {
                return true; // Inserção bem-sucedida
            } else {
                return false; // Erro na inserção
            }
        }
        public static function insertCadastro($org){
            $nome = $org->getNome();
            $cnpj = $org->getCnpj();
            $cep = $org->getCep();
            $log = $org->getLog();
            $num = $org->getNum();
            $complemento = $org->getComplemento();
            $bairro = $org->getBairro();
            $cidade = $org->getCidade();
            $uf = $org->getUf();
            $tel = $org->getTelefone();
            $email = $org->getEmail();
            $senha = $org->getSenha(); 
            $link = $org->getLink();          
            $imagem = $org->getImagem();
            $desc = $org->getDesc(); 
            
            $conn = Conexao::conectar(); // Estabeleça a conexão com o banco de dados
        
            $stmt = $conn->prepare("INSERT INTO tborganizacaoevento (nomeOrganizacaoEvento, cnpjOrganizacaoEvento, cepOrganizacaoEvento, enderecoOrganizacaoEvento, numeroOrganizacaoEvento, complementoOrganizacaoEvento, bairroOrganizacaoEvento, cidadeOrganizacaoEvento, ufOrganizacaoEvento,telOrganizacaoEvento, 
            emailOrganizacaoEvento, senhaOrganizacaoEvento, linkSiteOrganizacaoEvento, imagemOrganizacaoEvento, descOrganizacaoEvento) 
                            VALUES (:nome, :cnpj, :cep, :log, :num, :complemento, :bairro, :cidade, :uf, :tel, :email, :senha, :link, :imagem, :desc)");
        
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cnpj', $cnpj);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':log', $log);
            $stmt->bindParam(':num', $num);
            $stmt->bindParam(':complemento', $complemento);
            $stmt->bindParam(':bairro', $bairro);
            $stmt->bindParam(':cidade', $cidade);
            $stmt->bindParam(':uf', $uf);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':link', $link);
            $stmt->bindParam(':imagem', $imagem);
            $stmt->bindParam(':desc', $desc);
        
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
            $query = "SELECT * FROM tborganizacaoevento WHERE idOrganizacaoEvento = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id,  PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tborganizacaoevento WHERE idOrganizacaoEvento = :id";
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
               enderecoOrganizacaoEvento = :log,
               numeroOrganizacaoEvento = :num,
               complementoOrganizacaoEvento = :complemento,
               bairroOrganizacaoEvento = :bairro,
               cidadeOrganizacaoEvento = :cidade,
               ufOrganizacaoEvento = :uf,
               telOrganizacaoEvento = :tel,
               emailOrganizacaoEvento = :email, 
               senhaOrganizacaoEvento = :senha, 
               linkSiteOrganizacaoEvento = :link,
               imagemOrganizacaoEvento = :imagem,
               descOrganizacaoEvento = :desc
                WHERE idOrganizacaoEvento = :id";
            
            $stmt = $conexao->prepare($query);
        
            // Atribuir os valores a variáveis antes de chamar bindParam
            $nome = $org->getNome();
            $cnpj = $org->getCnpj();
            $cep = $org->getCep();
            $log = $org->getLog();
            $num = $org->getNum();
            $complemento = $org->getComplemento();
            $bairro = $org->getBairro();
            $cidade = $org->getCidade();
            $uf = $org->getUf();
            $tel = $org->getTel();
            $email = $org->getEmail();
            $senha = $org->getSenha(); 
            $link = $org->getLink();
            $imagem = $org->getImagem();
            $desc = $org->getDesc();

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cnpj', $cnpj);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':log', $log);
            $stmt->bindParam(':num', $num);
            $stmt->bindParam(':complemento', $complemento);
            $stmt->bindParam(':bairro', $bairro);
            $stmt->bindParam(':cidade', $cidade);
            $stmt->bindParam(':uf', $uf);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':link', $link);
            $stmt->bindParam(':imagem', $imagem);
            $stmt->bindParam(':desc', $desc);
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

        public static function checkCredentialsTel($tel, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tborganizacaoevento WHERE telOrganizacaoEvento = :tel and senhaOrganizacaoEvento = :senha";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':tel', $tel);
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