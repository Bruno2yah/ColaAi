<?php 
require_once (__DIR__ . '../../model/Conexao.php');

    class EventoDao{
        public static function insert($evento){
            $nome = $evento->getNome();
            $cep = $evento->getCep();
            $endereco = $evento->getEndereco();
            $numero = $evento->getNumero();
            $complemento = $evento->getComplemento();
            $bairro = $evento->getBairro();
            $cidade = $evento->getCidade();
            $uf = $evento->getUf();
            $data = $evento->getData();
            $desc = $evento->getDesc();
            $idOrganizacaoEvento = $evento->getIdOrganizacaoEvento(); 
            $imagem = $evento->getImagemEvento();
            
            $conn = Conexao::conectar(); // Estabeleça a conexão com o banco de dados
        
            $stmt = $conn->prepare("INSERT INTO tbevento (nomeEvento, cepEvento, enderecoEvento, numeroEvento, complementoEvento, bairroEvento, cidadeEvento, ufEvento,
            dataEvento, descEvento, idOrganizacaoEvento, imagemEvento)  VALUES (:nome, :cep, :endereco, :numero, :complemento, :bairro, :cidade, :uf, :data, :desc, :idOrgEvento, :imagem)");
        
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':numero', $numero);
            $stmt->bindParam(':complemento', $complemento);
            $stmt->bindParam(':bairro', $bairro);
            $stmt->bindParam(':cidade', $cidade);
            $stmt->bindParam(':uf', $uf);
            $stmt->bindParam(':data', $data);
            $stmt->bindParam(':desc', $desc);
            $stmt->bindParam(':idOrgEvento', $idOrganizacaoEvento);
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
            $query = "SELECT * FROM tbevento";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        }

        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbevento WHERE idEvento = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id,  PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbevento WHERE idEvento = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id);
            return  $stmt->execute();

        }

        public static function update($id, $evento){
            $conexao = Conexao::conectar();
        
            $query = "UPDATE tbevento SET 
               nomeEvento = :nome, 
               cepEvento = :cep, 
               enderecoEvento = :endereco,
               numeroEvento = :numero,
               complementoEvento = :complemento,
               bairroEvento = :bairro,
               cidadeEvento = :cidade,
               ufEvento = :uf,
               dataEvento = :data,
               descEvento = :desc, 
               idOrganizacaoEvento = :idOrgEvento,
               imagemEvento = :imagem
                WHERE idEvento = :id";
            
            $stmt = $conexao->prepare($query);
        
            // Atribuir os valores a variáveis antes de chamar bindParam
            $nome = $evento->getNome();
            $cep = $evento->getCep();
            $endereco = $evento->getEndereco();
            $numero = $evento->getNumero();
            $complemento = $evento->getComplemento();
            $bairro = $evento->getBairro();
            $cidade = $evento->getCidade();
            $uf = $evento->getUf();
            $data = $evento->getData();
            $desc = $evento->getDesc();
            $idOrganizacaoEvento = $evento->getIdOrganizacaoEvento();
            $imagem = $evento->getImagemEvento();

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':numero', $numero);
            $stmt->bindParam(':complemento', $complemento);
            $stmt->bindParam(':bairro', $bairro);
            $stmt->bindParam(':cidade', $cidade);
            $stmt->bindParam(':uf', $uf);
            $stmt->bindParam(':data', $data);
            $stmt->bindParam(':desc', $desc);
            $stmt->bindParam(':idOrgEvento', $idOrganizacaoEvento);
            $stmt->bindParam(':imagem', $imagem);
            $stmt->bindParam(':id', $id);
        
            return $stmt->execute();
        }

        
    }


?>