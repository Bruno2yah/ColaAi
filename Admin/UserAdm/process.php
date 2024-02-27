<?php
require_once '../../model/UserAdm.php';
require_once '../../dao/UserAdmDao.php';
require_once '../../model/Mensagem.php';

$user = new UserAdm();
$msg = new Mensagem();

switch ($_POST["acao"]) {
    case 'DELETE':
     try {
          $userAdmDao = UserAdmDao::delete($_POST['id']);
          header("Location: index.php");
      } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      }
      break;
      case 'SALVAR':
        $user->setNome($_POST['nomeAdmin']);  
        $user->setCpf($_POST['cpfAdmin']);
        $user->setNasc($_POST['dataNascAdmin']);
        $user->setEmail($_POST['emailAdmin']);
        $user->setSenha($_POST['senhaAdmin']);
        $user->setImagem($user->salvarImagem(($_POST['imagemAdmin'])));
        $user->setToken($user->generateToken());
        try {
            $userAdmDao = UserAdmDao::insert($user);
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
              $user->setNome($_POST['nomeAdmin']);
              $user->setCpf($_POST['cpfAdmin']);
              $user->setNasc($_POST['dataNascAdmin']);
              $user->setEmail($_POST['emailAdmin']);
              $user->setSenha($_POST['senhaAdmin']);
              $user->setImagem($user->salvarImagem($_POST['imagemAdmin'])); 
              $user->setToken($user->generateToken());
              try {
                $userAdmDao = UserAdmDao::update($_POST["idAdmin"], $user);
                $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
                header("Location: index.php");
              } catch (Exception $e) {
               echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      
              } 
          break;
      
        case 'SELECTID':
      
          try {
              $userAdmDao = UserAdmDao::selectById($_POST['id']);
              // Configura as opções do contexto da solicitação
              include('register.php');
          } catch (Exception $e) {
              echo 'Exceção capturada: ',  $e->getMessage(), "\n";
          } 
      
        
          break;
        }
?>