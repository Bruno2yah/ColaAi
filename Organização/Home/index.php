<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../../css/styleAdm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
    <style>
        /* CSS para personalizar as barras de progresso */
        .progress-bar-icon {
            position: relative;
        }

        .progress-bar-icon::after {
            content: "\f070"; /* Ícone de um gráfico de barras */
            font-family: 'bootstrap-icons';
            position: absolute;
            top: 0;
            right: 10px;
            line-height: 20px;
            color: #fff;
        }

        /* Personalize as cores das barras de progresso */
        .progress-bar-custom {
            background-color:rgba(80, 219, 100); /* Cor de fundo da barra de progresso */
            color: #fff; /* Cor do texto dentro da barra de progresso */
        }
    </style>
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
?>
<?php
include('../Componentes/header.php');
?>
<div class="container-fluid vw-100">
    <div class="row vw-100">
        <?php
        include('../Componentes/menu.php')
        ?>
        <div class="col-9 text-center mt-4" style="color: #a6a6a6;">
            <h1>Boa tarde, Organização! Bem-vindo ao Dashboard</h1>
            <div class="row justify-content-evenly h-25 mt-4">
                <div class="col-4 rounded-5" >
                    <h2 class="fs-4 p-3 pb-0">Visitas Perfil</h2> <!-- Alteração feita aqui -->
                    <p class="fs-5 p-0">+ 5000 visitas</p>
                    <canvas id="graficoBarras" width="800" height="800"></canvas> <!-- Gráfico de barras será renderizado aqui -->
                    <h2 class="fs-4 p-3 pb-0">Novos Seguidores</h2> <!-- Alteração feita aqui -->
                    <div class="progress mt-3">
                        <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-icon"></span>
                            
                        </div>
                    </div>
                    <h5 class="fs-5 p-3 pb-0">+30 Seguidores</h5> <!-- Alteração feita aqui -->
                </div>
                <div class="col-4 rounded-5" >
                    <h2 class="fs-4 p-3 pb-0">Alcance das Publicações</h2>
                    <p class="fs-5 p-0">+ 10000 alcance</p>
                    <canvas id="graficoPizza"></canvas> <!-- Gráfico de pizza será renderizado aqui -->
                    <h2 class="fs-4 p-3 pb-0">Acessos ao Link</h2> <!-- Alteração feita aqui -->
                    <div class="progress mt-3">
                        <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                           <span class="progress-bar-icon"></span>
                        </div>
                    </div>
                    <h5 class="fs-5 p-3 pb-0">+100 Acessos</h5> <!-- Alteração feita aqui -->
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Dados para o gráfico de barras (Alcance de Perfil)
    var dadosBarras = {
        labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
        datasets: [{
            label: 'Visitas (Últimos 30 dias)', // Alteração feita aqui
            backgroundColor: 'rgba(255, 206, 86)',
            borderColor: 'rgba(255, 206, 86, 0.2)',
            borderWidth: 1,
            data: [1000, 2000, 3000, 4000, 5000, 6600] // Dados de visitas
        }]
    };

    // Dados para o gráfico de pizza (Alcance das Publicações)
    var dadosPizza = {
        labels: ['Publicação 1', 'Publicação 2', 'Publicação 3', 'Publicação 4'],
        datasets: [{
            data: [2000, 1800, 2200, 2500,], // Dados de alcance das publicações
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(80, 219, 100)',
                'rgba(153, 102, 255)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    };

    // Opções comuns para ambos os gráficos
    var opcoes = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    };

    // Criar o gráfico de barras (Alcance de Perfil)
    var ctxBarras = document.getElementById('graficoBarras').getContext('2d');
    var graficoBarras = new Chart(ctxBarras, {
        type: 'bar',
        data: dadosBarras,
        options: opcoes
    });

    // Criar o gráfico de pizza (Alcance das Publicações)
    var ctxPizza = document.getElementById('graficoPizza').getContext('2d');
    var graficoPizza = new Chart(ctxPizza, {
        type: 'pie',
        data: dadosPizza,
        options: opcoes
    });
</script>
</body>
</html>
