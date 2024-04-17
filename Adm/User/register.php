<?php
session_start(); // Inicia a sessão
require_once(__DIR__ . '../../../Adm/Componentes/modal.php');
require_once(__DIR__ . '../../../dao/UserDao.php');

if (!empty($_POST)) {
  $id_Usuario = $userDao['idUsuario'];
  $nome_Usuario =  $userDao['nomeUsuario'];
  $sobrenome_Usuario =  $userDao['sobrenomeUsuario'];
  $email_Usuario = $userDao['emailUsuario'];
  $senha_Usuario = $userDao['senhaUsuario'];
  $tel_Usuario = $userDao['telUsuario'];
  $ImagemPerfil_Usuario = $userDao['imagemPerfilUsuario'];
  $ImagemBanner_Usuario = $userDao['imagemBannerUsuario'];
} else {
  $nome_Usuario = '';
  $sobrenome_Usuario = '';
  $email_Usuario = '';
  $senha_Usuario = '';
  $tel_Usuario = '';
  $ImagemPerfil_Usuario = '';
  $ImagemBanner_Usuario = '';
  $id_Usuario = '';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário - Edição</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
    <link rel="stylesheet" href="../../css/styleAdm.css">

</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
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
            include('../../Adm/Componentes/menu.php')
        ?>
        <div class="col-md-9 p-4  align-items-center d-flex flex-column" id="data-box" style="background-blend-mode: darken; background-color: #E8E8E8;">
            <div class="d-flex flex-column w-50 border border-1 rounded rounded-4 mt-5" style="background-color: #FFFFFF;" id="formBox">
                <h1 class="text-center mt-5 fs-1" style="color: #a6a6a6;">Usuário - Editar Dados do perfil</h1>
                <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation w-100 h-100 p-4" novalidate>
                <input type="hidden" name="idUsuario" id="idUsuario" placeholder="id" value="<?= $id_Usuario ?>">
                <input type="hidden" name="imagemPerfilUsuario" id="imagemPerfilUsuario" placeholder="nome foto" value="<?= $ImagemPerfil_Usuario ?>">
                <input type="hidden" name="imagemBannerUsuario" id="imagemBannerUsuario" placeholder="nome foto" value="<?= $ImagemBanner_Usuario ?>">
                <input type="hidden" value="<?= $id_Usuario ? 'ATUALIZAR' : 'SALVAR' ?>" name="acao">
                <div class="row">
                        <div class="col-md-12 needs-validation">
                            <label for="nome" class="col-form-label">Nome do Usuário*</label>
                            <input type="text" class="form-control inputGeral" placeholder="" name="nomeUsuario" maxlength="100" id="nomeUsuario" value="<?=$nome_Usuario?>" required>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12 needs-validation">
                        <label for="sobrenome" class="col-form-label">Sobrenome do Usuário*</label>
                        <input type="text" class="form-control inputGeral" placeholder="" name="sobrenomeUsuario" maxlength="100" id="" value="<?=$sobrenome_Usuario?>" required>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 needs-validation">
                            <label for="email" class="col-form-label">Email do Usuário*</label>
                            <input type="email" class="form-control inputGeral" placeholder="" name="emailUsuario" maxlength="10" id="" value="<?=$email_Usuario?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 needs-validation">
                            <label for="telefone" class="col-form-label">Telefone do Usuário*</label>
                            <input type="text" class="form-control inputGeral" placeholder="" name="telUsuario" data-mask="00-00000-0000" maxlength="10" id="" value="<?=$tel_Usuario?>" required>
                        </div>
                    </div>
                    <div class="col-md-12 needs-validation">
                            <label for="senha" class="col-form-label">Senha do Usuário*</label>
                            <input type="password" class="form-control inputGeral" placeholder="" name="senhaUsuario" maxlength="10" id="senha" value="<?=$senha_Usuario?>" required>
                        </div>
                    <div class="row mt-3">
                        <div class=" text-end p-3">
                            <a class=" btn px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                            <input type="submit" class="btn" value="Editar">
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