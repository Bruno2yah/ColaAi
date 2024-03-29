<?php
//echo "Teste"; die;
session_start();
require_once (__DIR__ . '/../dao/OrganizacaoDao.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $org = OrganizacaoDao::checkCredentials($email, $senha);

    if ($org) {
        // Login bem-sucedido
        $_SESSION['AutenticaoOrg'] = "SIM";
        $_SESSION['userOrg'] = $org; // armazenar informações do usuário na sessão se desejar
        header('Location:../Organização/Home/index.php'); 
        exit();
    } else {
        // Login falhou
        $_SESSION['AutenticaoAdm'] = "NÃO";
        header('Location:../Organização/Login/index.php?login=erro');
        exit();
    }
} else {
    // Redirecionar se alguém tentar acessar diretamente este arquivo
    header('Location:../Organização/Login/index.php?login=erro2');
    exit();
}
?>
