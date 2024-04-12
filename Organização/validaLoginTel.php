<?php
//echo "Teste"; die;
session_start();
require_once (__DIR__ . '/../dao/OrganizacaoDao.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tel = $_POST["telefone"];
    $senha = $_POST["senha"];

    $org = OrganizacaoDao::checkCredentialsTel($tel, $senha);

    if ($org) {
        // Login bem-sucedido
        $_SESSION['AutenticaoOrg'] = "SIM";
        $_SESSION['userOrg'] = $org; // armazenar informações do usuário na sessão se desejar
        header('Location:../Organização/Home/index.php'); 
        exit();
    } else {
        // Login falhou
        $_SESSION['AutenticaoOrg'] = "NÃO";
        header('Location:../Organização/Login/loginTel.php?login=erro');
        exit();
    }
} else {
    // Redirecionar se alguém tentar acessar diretamente este arquivo
    header('Location:../Organização/Login/loginTel.php?login=erro2');
    exit();
}
?>
