<?php
require_once '../../model/UserAdm.php';
require_once '../../dao/UserAdmDao.php';
require_once '../../model/Mensagem.php';

$user = new UserAdm();
$msg = new Mensagem();

//var_dump($_POST);
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
        $user->setSobrenome($_POST['sobrenomeAdmin']);  
        $user->setCpf($_POST['cpfAdmin']);
        $user->setNasc($_POST['dataNascAdmin']);
        $user->setEmail($_POST['emailAdmin']);
        $user->setSenha($_POST['senhaAdmin']);
        $user->setImagem($user->salvarImagem(($_POST['fotoPerfilAdmin'])));
        
        try {
            $userAdmDao = UserAdmDao::insert($user);

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
              $user->setNome($_POST['nomeAdmin']);
              $user->setSobrenome($_POST['sobrenomeAdmin']);  
              $user->setCpf($_POST['cpfAdmin']);
              $user->setNasc($_POST['dataNascAdmin']);
              $user->setEmail($_POST['emailAdmin']);
              $user->setSenha($_POST['senhaAdmin']);
              $user->setImagem($user->salvarImagem($_POST['fotoPerfilAdmin'])); 
              try {
                $userAdmDao = UserAdmDao::update($_POST["idAdmin"], $user);
                $msg->setMensagem("Usuário atualizado com sucesso.", "bg-success");
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
