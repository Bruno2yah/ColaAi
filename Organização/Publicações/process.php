<?php
require_once (__DIR__.'../../../model/Publicacao.php');
require_once (__DIR__.'../../../dao/PublicacaoDao.php');
require_once (__DIR__.'../../../model/Mensagem.php');

$publicacao= new Publicacao();
$msg = new Mensagem();

//var_dump($_POST);
switch ($_POST["acao"]) {
    case 'DELETE':
     try {
          $publicacaoDao = PublicacaoDao::delete($_POST['id']);
          header("Location: index.php");
      } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      }
      break;
      case 'SALVAR':
        $publicacao->setTitulo($_POST['tituloPublicacao']);
        $publicacao->setDescricao($_POST['descPublicacao']);
        $publicacao->setLink($_POST['linkOrganizacaoEvento']);
        $publicacao->setImagem($publicacao->salvarImagem(($_POST['imagemPublicacao'])));  
        try {
            $publicacaoDao = PublicacaoDao::insert($publicacao);

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
          $publicacao->setTitulo($_POST['tituloPublicacao']);
          $publicacao->setDescricao($_POST['descPublicacao']);
          $publicacao->setLink($_POST['linkOrganizacaoEvento']);
          $publicacao->setImagem($publicacao->salvarImagem(($_POST['imagemPublicacao'])));
              try {
                $publicacaoDao = PublicacaoDao::update($_POST["idPublicacao"], $publicacao);
                $msg->setMensagem("Usuário atualizado com sucesso.", "bg-success");
                header("Location: index.php");
              } catch (Exception $e) {
               echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      
              } 
          break;
      
        case 'SELECTID':
      
          try {
              $publicacaoDao = PublicacaoDao::selectById($_POST['id']);
              // Configura as opções do contexto da solicitação
              include('register.php');
          } catch (Exception $e) {
              echo 'Exceção capturada: ',  $e->getMessage(), "\n";
          } 
      
        
          break;
        }
?>
