<?php
require_once '../../model/User.php';
require_once '../../dao/UserDao.php';
require_once '../../model/Mensagem.php';

$user = new User();
$msg = new Mensagem();

switch ($_POST["acao"]) {
    case 'DELETE':
     try {
          $userDao = UserDao::delete($_POST['id']);
          header("Location: index.php");
      } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      }
      break;
      case 'SALVAR':
        $user->setNome($_POST['nomeUsuario']);  
        $user->setSobrenome($_POST['sobrenomeUsuario']);
        $user->setEmail($_POST['emailUsuario']);
        $user->setSenha($_POST['senhaUsuario']);
        $user->setImagem($user->salvarImagem(($_POST['imagemUsuario'])));
        try {
            $userDao = UserDao::insert($user);
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
              $user->setNome($_POST['nomeUsuario']);
              $user->setSobrenome($_POST['sobrenomeUsuario']);
              $user->setEmail($_POST['emailUsuario']);
              $user->setSenha($_POST['senhaUsuario']);
              $user->setImagem($user->salvarImagem($_POST['imagemUsuario'])); 
              try {
                $userDao = UserDao::update($_POST["idUsuario"], $user);
                $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
                header("Location: index.php");
              } catch (Exception $e) {
               echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      
              } 
          break;
      
        case 'SELECTID':
      
          try {
              $userDao = UserDao::selectById($_POST['id']);
              // Configura as opções do contexto da solicitação
              include('register.php');
          } catch (Exception $e) {
              echo 'Exceção capturada: ',  $e->getMessage(), "\n";
          } 
      
        
          break;
        }
?>