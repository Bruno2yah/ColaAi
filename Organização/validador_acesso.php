<?php 
//Inicar a sessão
session_start();
//Verificar se o indice autenticado existe ou é igual a NÂO
if(!isset($_SESSION['AutenticaoOrg']) || $_SESSION['AutenticaoOrg']!='SIM'){
  //mandar para o index com um erro2
  header('Location:../Organizção/index.php?login=erro2');
}
?>