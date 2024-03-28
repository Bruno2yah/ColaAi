<?php
//echo "Teste"; die;
session_start();
require_once (__DIR__ . '/../dao/UserAdmDao.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $user = UserAdmDao::checkCredentials($email, $senha);

    if ($user) {
        // Login bem-sucedido
        $_SESSION['AutenticaoAdm'] = "SIM";
        $_SESSION['userAdm'] = $user; // armazenar informações do usuário na sessão se desejar
        header('Location:../Adm/Home/index.php'); 
        exit();
    } else {
        // Login falhou
        $_SESSION['AutenticaoAdm'] = "NÃO";
        header('Location:../Adm/Login/index.php?login=erro');
        exit();
    }
} else {
    // Redirecionar se alguém tentar acessar diretamente este arquivo
    header('Location:../Adm/Login/index.php?login=erro2');
    exit();
}
?>
