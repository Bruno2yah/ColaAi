<?php
session_start();

// Destruir a sessão
unset($_SESSION['AutenticaoAdm']);
unset($_SESSION['userAdm']);
session_destroy();

// Redirecionar para a página de login
header('Location: ../index.php');
exit();
?>
