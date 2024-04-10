<?php 

session_start();
//destruir a SESSION que é usada na hora que o usuário loga
    session_destroy();

    //forçar um redirecionamento para a página index, que é o login 
    header('Location:../../Login/index.php');
    exit();
    //ainda vou mexer nesse item de logoff
?>