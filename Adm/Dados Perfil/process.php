<?php
require_once (__DIR__.'../../../model/OrganizacaoEvento.php');
require_once (__DIR__.'../../../dao/OrganizacaoDao.php');
require_once (__DIR__.'../../../model/Mensagem.php');

$organizacao = new OrganizacaoEvento();
$msg = new Mensagem();

//var_dump($_POST);
switch ($_POST["acao"]) {
    case 'DELETE':
     try {
          $organizacaoDao = OrganizacaoDao::delete($_POST['id']);
          header("Location: index.php");
      } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      }
      break;
      case 'SALVAR':
        $organizacao->setNome($_POST['nomeOrganizacaoEvento']); 
        $organizacao->setCnpj($_POST['cnpjOrganizacaoEvento']);  
        $organizacao->setCep($_POST['cepOrganizacaoEvento']);
        $organizacao->setLog($_POST['enderecoOrganizacaoEvento']);
        $organizacao->setNum($_POST['numeroOrganizacaoEvento']);
        $organizacao->setComplemento($_POST['complementoOrganizacaoEvento']);
        $organizacao->setBairro($_POST['bairroOrganizacaoEvento']);
        $organizacao->setCidade($_POST['cidadeOrganizacaoEvento']);
        $organizacao->setUf($_POST['ufOrganizacaoEvento']);
        $organizacao->setEmail($_POST['emailOrganizacaoEvento']);
        $organizacao->setSenha($_POST['senhaOrganizacaoEvento']);
        $organizacao->setLink($_POST['linkSiteOrganizacaEvento']);
        $organizacao->setImagem($organizacao->salvarImagem(($_POST['imagemOrganizacaoEvento'])));
        $organizacao->setDesc($_POST['descOrganizacaoEvento']);
        
        try {
            $organizacaoDao = OrganizacaoDao::insert($organizacao);

            // Adiciona uma mensagem para debug
            $msg->setMensagem("Usuário inserido com sucesso no banco de dados.", "bg-success");

            header("Location: index.php");
        } catch (Exception $e) {
            // Se houver um erro na inserção, você pode lidar com isso aqui

            // Adiciona uma mensagem para debug
            $msg->setMensagem("Erro ao inserir usuário no banco de dados: " . $e->getMessage(), "bg-danger");

            header("Location: register.php");
        } 
        break;
        case 'ATUALIZAR':
              //pode validar as informações
              $organizacao->setNome($_POST['nomeOrganizacaoEvento']); 
              $organizacao->setCnpj($_POST['cnpjOrganizacaoEvento']);  
              $organizacao->setCep($_POST['cepOrganizacaoEvento']);
              $organizacao->setLog($_POST['enderecoOrganizacaoEvento']);
              $organizacao->setNum($_POST['numeroOrganizacaoEvento']);
              $organizacao->setComplemento($_POST['complementoOrganizacaoEvento']);
              $organizacao->setBairro($_POST['bairroOrganizacaoEvento']);
              $organizacao->setCidade($_POST['cidadeOrganizacaoEvento']);
              $organizacao->setUf($_POST['ufOrganizacaoEvento']);
              $organizacao->setEmail($_POST['emailOrganizacaoEvento']);
              $organizacao->setSenha($_POST['senhaOrganizacaoEvento']);
              $organizacao->setLink($_POST['linkSiteOrganizacaEvento']);
              $organizacao->setImagem($organizacao->salvarImagem(($_POST['imagemOrganizacaoEvento'])));
              $organizacao->setDesc($_POST['descOrganizacaoEvento']);
              try {
                $organizacaoDao = OrganizacaoDao::update($_POST["idOrganizacaoEvento"], $organizacao);
                $msg->setMensagem("Usuário atualizado com sucesso.", "bg-success");
                header("Location: index.php");
              } catch (Exception $e) {
               echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      
              } 
          break;
      
        case 'SELECTID':
      
          try {
              $organizacaoDao = OrganizacaoDao::selectById($_POST['id']);
              // Configura as opções do contexto da solicitação
              include('register.php');
          } catch (Exception $e) {
              echo 'Exceção capturada: ',  $e->getMessage(), "\n";
          } 
      
        
          break;
        }
?>
