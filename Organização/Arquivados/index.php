<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificações</title>
    <link rel="stylesheet" href="../../css/StyleOrganizacao.css">
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
?>
<?php
include('../Componentes/header.php');
?>
<div class="container-fluid vw-100 " style="height: 80vh; overflow: scroll;overflow-x: hidden;">
    <div class="row vw-100 ">
        <?php 
        include('../Componentes/menu.php')
        ?>
        <div class="col-3">
        </div>
        <div class=" col-9 text-center mt-4" style="color: #a6a6a6;">
            <h1>Veja aqui todos os seus itens arquivados</h1>
            
            <div class="btn-adicionar justify-content-center mt-4 mb-md-0 mb-5 m-5 ">
                <h5 class="d-flex justify-content-end m-5">Categoria</h5>
                <div class="d-flex justify-content-end">
                    <!-- Adicionando a classe 'select-small' -->
                    <select class=" select-small" name="categoria">
                        <option value="">Selecione...</option>
                        <option value="1">Categoria 1</option>
                        <option value="2">Categoria 2</option>
                        <option value="3">Categoria 3</option>
                    </select>
                </div>
            </div>

            <div class="cards">
                <?php
                // Loop para criar 10 cards
                for ($i = 0; $i < 4; $i++) {
                    ?>
                    <figure class="card">
                        <img  src="../../img/Organização/publicacao2.png" class="imgPublicacao"/>
                        <h5>Titulo do Evento</h5>
                        <div class="btn-card justify-content-center mt-4 mb-md-0 mb-5">
                            <a href="#" class="d-flex justify-content-center">
                                <button class="border border-0 rounded-4 fs-3  align-items-center justify-content-center">
                                    <p class="m-0 fs-4">Ver Mais</p>
                                </button>
                            </a>
                        </div>
                    </figure>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

</body>
</html>
