<?php
require_once '../../model/OrganizacaoEvento.php';
require_once '../../dao/OrganizacaoDao.php';
require_once '../../model/Mensagem.php';

$org = new OrganizacaoEvento();
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
        $org->setNome($_POST['nomeOrganizacaoEvento']);  
        $org->setCnpj($_POST['cnpjOrganizacaoEvento']);
        $org->setCep($_POST['cepOrganizacaoEvento']);
        $org->setLog($_POST['logradouroOrganizacaoEvento']);
        $org->setBairro($_POST['bairroOrganizacaoEvento']);
        $org->setNum($_POST['numeroOrganizacaoEvento']);
        $org->setCidade($_POST['cidadeOrganizacaoEvento']);
        $org->setUf($_POST['ufOrganizacaoEvento']); 
        $org->setEmail($_POST['emailOrganizacaoEvento']);
        $org->setSenha($_POST['senhaOrganizacaoEvento']);
        $org->setLink($_POST['linkSiteOrganizacaoEvento']);
        $org->setTel($_POST['telOrganizacaoEvento']);
        $org->setImagem($org->salvarImagem(($_POST['imagemOrganizacaoEvento'])));
        var_dump($org);
        try {
            $organizacaoDao = OrganizacaoDao::insert($org);
            $msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
            header("Location: index.php");
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
            $msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
            // header("Location: register.php");
        } 
        break;
    case 'ATUALIZAR':
        //pode validar as informações
        $org->setNome($_POST['nomeOrganizacaoEvento']);  
        $org->setCnpj($_POST['cnpjOrganizacaoEvento']);
        $org->setCep($_POST['cepOrganizacaoEvento']);
        $org->setLog($_POST['logradouroOrganizacaoEvento']);
        $org->setBairro($_POST['bairroOrganizacaoEvento']);
        $org->setNum($_POST['numeroOrganizacaoEvento']);
        $org->setCidade($_POST['cidadeOrganizacaoEvento']);
        $org->setUf($_POST['ufOrganizacaoEvento']); 
        $org->setEmail($_POST['emailOrganizacaoEvento']);
        $org->setSenha($_POST['senhaOrganizacaoEvento']);
        $org->setLink($_POST['linkSiteOrganizacaoEvento']);
        $org->setTel($_POST['telOrganizacaoEvento']);
        $org->setImagem($org->salvarImagem(($_POST['imagemOrganizacaoEvento'])));
        try {
            $organizacaoDao = OrganizacaoDao::update($_POST["idOrganizacaoEvento"], $org);
            $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
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
