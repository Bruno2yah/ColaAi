<?php 
//Inicar a sessão
session_start();
//Verificar se o indice autenticado existe ou é igual a NÂO
if(!isset($_SESSION['AutenticaoAdm']) || $_SESSION['AutenticaoAdm']!='SIM'){
  //mandar para o index com um erro2
  header('Location:../Adm/Login/index.php?login=erro2');
}
?>