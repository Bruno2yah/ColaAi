<?php
require_once (__DIR__.'../../../model/Evento.php');
require_once (__DIR__.'../../../dao/EventoDao.php');
require_once (__DIR__.'../../../model/Mensagem.php');

$evento = new Evento();
$msg = new Mensagem();

//var_dump($_POST);
switch ($_POST["acao"]) {
    case 'DELETE':
     try {
          $eventoDao = EventoDao::delete($_POST['id']);
          header("Location: index.php");
      } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      }
      break;
      case 'SALVAR':
        $evento->setNome($_POST['nomeEvento']); 
        $evento->setCep($_POST['cepEvento']);
        $evento->setEndereco($_POST['enderecoEvento']);
        $evento->setNumero($_POST['numeroEvento']);
        $evento->setComplemento($_POST['complementoEvento']);
        $evento->setBairro($_POST['bairroEvento']);
        $evento->setCidade($_POST['cidadeEvento']);
        $evento->setUf($_POST['ufEvento']);
        $evento->setData($_POST['dataEvento']);
        $evento->setDesc($_POST['descEvento']);
        $evento->setIdOrganizacaoEvento($_POST['idOrganizacaoEvento']);
        $evento->setImagemEvento($evento->salvarImagem(($_POST['imagemEvento'])));  
        try {
            $eventoDao = EventoDao::insert($evento);

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
          $evento->setNome($_POST['nomeEvento']); 
          $evento->setCep($_POST['cepEvento']);
          $evento->setEndereco($_POST['enderecoEvento']);
          $evento->setNumero($_POST['numeroEvento']);
          $evento->setComplemento($_POST['complementoEvento']);
          $evento->setBairro($_POST['bairroEvento']);
          $evento->setCidade($_POST['cidadeEvento']);
          $evento->setUf($_POST['ufEvento']);
          $evento->setData($_POST['dataEvento']);
          $evento->setDesc($_POST['descEvento']);
          $evento->setIdOrganizacaoEvento($_POST['idOrganizacaoEvento']);
          $evento->setImagemEvento($evento->salvarImagem(($_POST['imagemEvento'])));  
              try {
                $eventoDao = EventoDao::update($_POST["idEvento"], $evento);
                $msg->setMensagem("Usuário atualizado com sucesso.", "bg-success");
                header("Location: index.php");
              } catch (Exception $e) {
               echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      
              } 
          break;
      
        case 'SELECTID':
      
          try {
              $eventoDao = EventoDao::selectById($_POST['id']);
              // Configura as opções do contexto da solicitação
              include('register.php');
          } catch (Exception $e) {
              echo 'Exceção capturada: ',  $e->getMessage(), "\n";
          } 
      
        
          break;
        }
?>
