<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../../css/styleAdm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
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
    date_default_timezone_set('America/Sao_Paulo');

    $horaAtual = date('H');
    $saudacao = '';
    if ($horaAtual < 12) {
    $saudacao = 'Bom dia';
    } elseif ($horaAtual < 18) {
    $saudacao = 'Boa tarde';
    } else {
    $saudacao = 'Boa noite';
    }
   //echo (date('H'));
  ?>
    <?php
    include('../Componentes/header.php');
    ?>
    <div class="container-fluid vw-100">
        <div class="row vw-100">
                <?php
                    include('../Componentes/menu.php')
                ?>
                <div class="col-9 text-center mt-4" style="color: #a6a6a6;" id="data-box">
                <h1><?php echo $saudacao . ', ' . $nomeAdm . '! Bem-vindo ao Dashboard'; ?></h1>
                    <div class="row justify-content-evenly h-25 mt-4">
                        <div class="col-4 rounded-5" id="info-box">
                            <h2 class="fs-4 p-3 pb-0">Novos Usuários Registrados (Últimos 30 dias)</h2>
                            <p class="fs-5 p-0">+ 2 novos usuários</p>
                        </div>
                        <div class="col-4 rounded-5" id="info-box">
                        <h2 class="fs-4 p-3 pb-0">Novos Eventos  Registrados (Últimos 30 dias)</h2>
                            <p class="fs-5 p-0">+ 50 novos eventos</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>
</html>