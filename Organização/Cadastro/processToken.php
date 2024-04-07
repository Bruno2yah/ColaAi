<?php
require_once '../../model/TokenOrgEvento.php';
require_once '../../model/Mensagem.php';
require_once '../../dao/TokenOrgEventoDao.php';

$tokenOrg = new TokenOrgEvento();
$msg = new Mensagem();

switch ($_POST["acao"]) {
    case 'SALVAR':
        $tokenOrg->setID($_POST['idTokenOrganizacaoEvento']);
        $tokenOrg->setIdOrgEvento($_POST['idOrganizacaoEvento']);
        $token = $tokenOrg->generateToken();
        $tokenOrg->setValor($token);
        try {
            // Salvar o token no banco de dados
            $tokenOrgDao = TokenOrgEventoDao::insert($tokenOrg);
            
            // Enviar o token por email
            $email = $_POST['emailOrganizacaoEvento'];
            $assunto = "Seu Token de Acesso";
            $mensagem = "Seu token de acesso é: $token";
            $headers = "From: seuemail@seudominio.com" . "\r\n" .
                "Reply-To: seuemail@seudominio.com" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

            // Enviando o email
            mail($email, $assunto, $mensagem, $headers);

            $msg->setMensagem("Token Salvo e enviado por email com sucesso.", "bg-success");
            header("Location: telefone.php");
        } catch (Exception $e) {
            $msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
            header("Location: codigoAcesso.php");
        }
        break;
}
?>
