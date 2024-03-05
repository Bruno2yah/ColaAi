<?php 
require_once '../../dao/UserDao.php'; 
require_once '../../dao/UserAdmDao.php';
$totalClientes = UserDao::getTotalClientes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
    <link rel="stylesheet" href="../../css/style.css">
    <title>Home</title>
</head>
<body>
<?php
// Iniciar a sessão
session_start();

// Verificar se o índice 'Autenticado' existe ou é igual a 'SIM'
if (!isset($_SESSION['AutenticaoAdm']) || $_SESSION['AutenticaoAdm'] != 'SIM') {
    // Redirecionar para o login com um erro2 se não estiver autenticado
    header('Location: login.php?login=erro2');
    exit();
}

//o usuário está autenticado
$authUser = $_SESSION['userAdm'];

$nomeAdm = $authUser['nomeAdmin'];

// Saudação com base no horário do dia
$horaAtual = date('H');
$saudacao = '';
if ($horaAtual < 12) {
    $saudacao = 'Bom dia';
} elseif ($horaAtual < 18) {
    $saudacao = 'Boa tarde';
} else {
    $saudacao = 'Boa noite';
}
?>
<?php
include('../../Componentes/Header.php'); 
?>
<div class = "container-fluid" style = "height: 90%">
    <div class = "row h-100 linha">
        <?php
        include('../../Componentes/menu.php') 
        ?>
        <div class = "col-md-10">
            <div class="row align-items-center mb-4 mt-3">
                <div class="col fs-3 fw-semibold" style="text-align: center;">
                <h2><?php echo $saudacao . ', ' . $nomeAdm . '! Bem-vindo ao Dashboard'; ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Novos Usuários Registrados (Últimos 30 dias)</h5>
                            <p class="card-text">+ <?php echo $totalClientes; ?> novos usuários</p>
                        </div>
                    </div>
                </div>
  
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
