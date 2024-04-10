<?php
require_once '../../model/User.php';
require_once '../../dao/UserDao.php';
require_once '../../model/Mensagem.php';

$user = new User();
$msg = new Mensagem();

//var_dump($_POST);
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
        $user->setImagemPerfil($user->salvarImagem(($_POST['imagemPerfilUsuario'])));
        $user->setImagemBanner($user->salvarImagem(($_POST['imagemBannerUsuario'])));
        
        try {
            $userDao = UserDao::insert($user);

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
              $user->setNome($_POST['nomeUsuario']);
              $user->setSobrenome($_POST['sobrenomeUsuario']);  
              $user->setEmail($_POST['emailUsuario']);
              $user->setSenha($_POST['senhaUsuario']);
              $user->setImagemPerfil($user->salvarImagem(($_POST['imagemPerfilUsuario'])));
              $user->setImagemBanner($user->salvarImagem(($_POST['imagemBannerUsuario'])));
              try {
                $userDao = UserDao::update($_POST["idUsuario"], $user);
                $msg->setMensagem("Usuário atualizado com sucesso.", "bg-success");
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
