<?php
session_start();
require_once (__DIR__ . '/../dao/OrganizacaoDao.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["email"])){ // Verifica se o login foi feito por email
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
            $_SESSION['AutenticaoOrg'] = "NÃO";
            header('Location:../Organização/Login/loginEmail.php?login=erro');
            exit();
        }
    } elseif(isset($_POST["telefone"])){ // Verifica se o login foi feito por telefone
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
    }
} else {
    // Redirecionar se alguém tentar acessar diretamente este arquivo
    header('Location:../Organização/Login/loginEmail.php?login=erro2');
    exit();
}
?>
