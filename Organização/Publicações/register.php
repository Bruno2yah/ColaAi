<?php
session_start(); // Inicia a sessão
require_once(__DIR__ . '../../../Adm/Componentes/modal.php');
require_once(__DIR__ . '../../../dao/PublicacaoDao.php');

if (!empty($_POST)) {
  $id_Publicacao = $publicacaoDao['idPublicacao'];
  $titulo_Publicacao =  $publicacaoDao['tituloPublicacao'];
  $desc_Publicacao =  $publicacaoDao['descPublicacao'];
  $link_Publicacao = $publicacaoDao['linkOrganizacaoEvento'];
  $id_Evento = $publicacaoDao['idEvento'];
} else {
  $titulo_Publicacao = '';
  $desc_Publicacao = '';
  $link_Publicacao = '';
  $id_Evento = '';
  $id_Publicacao = '';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Publicação</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
    <link rel="stylesheet" href="../../css/styleAdm.css">

</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
<?php
  // Verificar se o índice 'Autenticado' existe ou é igual a 'SIM'
  if (!isset($_SESSION['AutenticaoOrg']) || $_SESSION['AutenticaoOrg'] != 'SIM') {
    // Redirecionar para o login com um erro2 se não estiver autenticado
    header('Location: index.php?login=erro2');
    exit();
  }
  //o usuário está autenticado
  $authUserOrg = $_SESSION['userOrg'];
  ?>
    <?php
    include('../../Adm/Componentes/header.php');
    ?>
    <div class="container-fluid" style="height: 90vh">
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
        <div class="row h-100">
        <?php
            include('../Componentes/menu.php')
        ?>
        <div class="col-md-9 p-4  align-items-center d-flex flex-column" id="data-box" style="background-blend-mode: darken; background-color: #E8E8E8;">
            <div class="d-flex w-75 flex-column border border-1 rounded rounded-4 mt-5 " style="background-color: #FFFFFF;" id="formBox">
                <h1 class="text-center mt-5 fs-2" style="color: #a6a6a6;">Organização - Criar Publicação</h1>
                
                <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation w-100 h-100 p-4 pt-1" novalidate>
                    <a href="" style="color: #6F9BAB; text-decoration:none"><i class="bi bi-geo-alt fs-4 me-1"></i>Adicionar localização da publicação</a><br>
                    <a href="" style="color: #6F9BAB; text-decoration:none"><i class="bi bi-person-add fs-4 me-1"></i>Marcar pessoas</a>
                    <div class="row g-2" id="publiGrid">
                        <img id="preview" src="../../img/Admin/eventoPadrao.png" alt="" class="img-fluid col-md-12 rounded rounded-4">
                    </div>
                    <div class="row text-end inputFile">
                        <label for="foto" class="form-label fs-5 mt-2"style="color: #6F9BAB;">Inserir imagem</label>
                        <input type="file" id="foto" name="foto" accept="image/*" class="form-control mt-1 mb-4">
                    </div>
                    <div class="row">
                    <div class="col-12 mb-4 needs-validation">
                        <label for="nomeEvento" class="col-form-label">Nome da publicação*</label>
                        <input type="text" class="form-control inputGeral " placeholder="Digite o título da publicação" name="tituloPublicacao" maxlength="50" id="" value="<?=$titulo_Publicacao?>" required>
                        <div class="invalid-feedback">
                        Preencha este campo
                        </div>
                    </div>
                    <div class="col-12 needs-validation ">
                        <label for="descricao" class="col-form-label">Descrição do Evento*</label>
                        <textarea class="form-control inputGeral" placeholder="Faça uma breve descrição sobre a publicação " name="descPublicacao" id="" cols="30" rows="10" style="max-height: 400px;"><?=$desc_Publicacao?></textarea>
                    </div>
 

                    
                    <div class="row mt-4 mb-3">
                        <div class=" text-end">
                            <input type="submit" class="btn" value="Criar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('show');
        }
    </script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <!-- Para usar Mascara  -->
  <script type="text/javascript" src="../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="../../js/personalizar.js"></script>

</body>

</html>