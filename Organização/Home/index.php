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
  if (!isset($_SESSION['AutenticaoOrg']) || $_SESSION['AutenticaoOrg'] != 'SIM') {
    // Redirecionar para o login com um erro2 se não estiver autenticado
    header('Location: index.php?login=erro2');
    exit();
  }

  //o usuário está autenticado
  $authUserOrg = $_SESSION['userOrg'];

  $nomeOrg = $authUserOrg['nomeOrganizacaoEvento'];

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
<div class="hamburger-wrapper">
            <div class="hamburger" onclick="toggleSidebar()">
                <input class="checkbox" type="checkbox" />
                <svg fill="none" viewBox="0 0 50 50" height="50" width="50">
                    <path
                        class="lineTop line"
                        stroke-linecap="round"
                        stroke-width="4"
                        stroke="black"
                        d="M6 11L44 11"
                    ></path>
                    <path
                        stroke-linecap="round"
                        stroke-width="4"
                        stroke="black"
                        d="M6 24H43"
                        class="lineMid line"
                    ></path>
                    <path
                        stroke-linecap="round"
                        stroke-width="4"
                        stroke="black"
                        d="M6 37H43"
                        class="lineBottom line"
                    ></path>
                </svg>
            </div>
        </div>
    <div class="row vw-100">
        <?php
        include('../Componentes/menu.php')
        ?>
        <div class=" text-center" style="color: #a6a6a6; " id="data-box">
        <h2 class="mt-4"><?php echo $saudacao . ', ' . $nomeOrg . '! Bem-vindo ao Dashboard'; ?></h2>
            <div class="row justify-content-evenly h-25 mt-4">
                <div class="col-3 rounded-5" >
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
                <div class="col-3 rounded-5" >
                    <h2 class="fs-4 p-3 pb-0">Alcance das Publicações</h2>
                    <p class="fs-5 p-0">+ 10000 alcance</p>
                    <canvas id="graficoRosca" width="400" height="400"></canvas> <!-- Gráfico de rosca será renderizado aqui -->
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
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('show');
        }
    </script>
<script>
            // Dados para o gráfico de barras (Alcance de Perfil)
            var dadosBarras = {
                labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
                datasets: [{
                    backgroundColor: [
                        'rgb(230, 174, 178)',
                        'rgb(111, 155, 171)'
                    ],

                    borderColor: 'rgba(255, 206, 86, 0.2)',
                    borderWidth: 1,
                    data: [1000, 2000, 3000, 4000, 5000, 6600], // Dados de visitas
                    label: '(Últimos 30 dias)', // Alteração feita aqui
                }]
            };

            // Dados para o gráfico de rosca (Alcance das Publicações)
            var dadosRosca = {
                datasets: [{
                    data: [2000, 1800, 2200, 2200, ], // Dados de alcance das publicações
                    backgroundColor: [
                        'rgb(147 204 76)',
                        'rgb(109 158 175)',
                        'rgb(255 212 23)',
                        'rgb(230 174 178)',

                    ],
                    borderColor: [
                        'rgb(147 204 76)',
                        'rgb(109 158 175)',
                        'rgb(255 212 23)',
                        'rgb(230 174 178)',
                    ],
                    borderWidth: 1
                }]
            };

            // Opções comuns para ambos os gráficos


            // Criar o gráfico de barras (Alcance de Perfil)
            var ctxBarras = document.getElementById('graficoBarras').getContext('2d');
            var graficoBarras = new Chart(ctxBarras, {
                type: 'bar',
                data: dadosBarras,
            });

            // Criar o gráfico de rosca (Alcance das Publicações)
            var ctxRosca = document.getElementById('graficoRosca').getContext('2d');
            var graficoRosca = new Chart(ctxRosca, {
                type: 'doughnut',
                data: dadosRosca,
            });
        </script>
</body>
</html>
