<?php
require_once '../../model/Avaliacao.php';
require_once '../../dao/AvaliacaoDao.php';
require_once '../../model/Mensagem.php';

$avaliacao = new Avaliacao();
$msg = new Mensagem();

switch ($_POST["acao"]) {
    case 'DELETE':
     try {
          $avaliacaoDao = AvaliacaoDao::delete($_POST['id']);
          header("Location: index.php");
      } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      }
      break;
      case 'SALVAR':
        $avaliacao->setTitulo($_POST['tituloAvaliacao']);  
        $avaliacao->setDesc($_POST['descAvaliacao']);
        $avaliacao->setIdOrganizacaoEvento($_POST['idOrganizacaoEvento']);
        try {
            $avaliacaoDao = AvaliacaoDao::insert($avaliacao);
            $msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
            header("Location: index.php");
        } catch (Exception $e) {
            // Se houver um erro na inserção, você pode lidar com isso aqui
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
            $msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
            header("Location: register.php");
        } 
        break;
        case 'ATUALIZAR':
              //pode validar as informações
              $avaliacao->setTitulo($_POST['tituloAvaliacao']);  
              $avaliacao->setDesc($_POST['descAvaliacao']);
              $avaliacao->setIdOrganizacaoEvento($_POST['idOrganizacaoEvento']);
              try {
                $avaliacaoDao = AvaliacaoDao::update($_POST["idAvaliacao"], $avaliacao);
                $msg->setMensagem("Atualizado com sucesso.", "bg-success");
                header("Location: index.php");
              } catch (Exception $e) {
               echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      
              } 
          break;
      
        case 'SELECTID':
      
          try {
            $avaliacaoDao = AvaliacaoDao::selectById($_POST['id']);
              // Configura as opções do contexto da solicitação
              include('register.php');
          } catch (Exception $e) {
              echo 'Exceção capturada: ',  $e->getMessage(), "\n";
          } 
      
        
          break;
        }
?>