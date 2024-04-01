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
            <h1>Veja aqui todas as suas publicações!</h1>

            <div class="btn-adicionar justify-content-center mt-4 mb-md-0 mb-5 m-5 ">
                <a href="#" class="d-flex justify-content-end" >
                    <button class="border border-0 rounded-4   align-items-center justify-content-center"  data-bs-toggle="modal" data-bs-target="#myModal">
                        <img src="../../img/Organização/icon-Mais.png" alt="" class="icon-org">
                    </button>
                </a>
            </div>

            <div class="cards">
                <?php
                // Loop para criar 10 cards
                for ($i = 0; $i < 12; $i++) {
                    ?>
                    <figure class="card">
                        <img  src="../../img/Organização/publicacao2.png" class="imgPublicacao"/>
                        <h5>Titulo da Publicações</h5>
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

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="width: 70%; max-width: 70%; height: 50%;">
    <div class="modal-content rounded-3">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Criar Publicações</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
              <!-- Imagem do evento -->
              <img src="../../img/Organização/publicacao2.png" class="img-fluid" alt="Imagem do evento">
            </div>
          <div class="col-md-6">
              <!-- Campo de entrada para o título do evento -->
              <div class="mb-3">
                  <label for="tituloEvento" class="form-label">Título da Publicação:</label>
                  <input type="text" class="form-control" id="tituloEvento" placeholder="Digite o título do Publicação">
                </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="btn-card justify-content-center mt-4 mb-md-0 mb-5">
            <a href="" class="d-flex justify-content-center">
                <button class="border border-0 rounded-4 fs-3  align-items-center justify-content-center">
                    <p class="m-0 fs-4">Publicar</p>
                </button>
            </a>
        </div>    
    </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

<script>
  function openModal() {
    $('#myModal').modal('show');
  }
</script>

</body>
</html>
