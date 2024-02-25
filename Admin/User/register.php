<?php 
  require_once("../../componentes/modal.php");
  require_once '../../dao/UserAdmDao.php';
  if(!empty($_POST)){
    $id_Admin = $userAdmDao['idAdmin'];
    $nome_Admin =  $userAdmDao['nomeAdmin'];
    $cpf_Admin = $userAdmDao['cpfAdmin'];
    $nasc_Admin= $userAdmDao['dataNascAdmin'];
    $email_Admin = $userAdmDao['emailAdmin'];
    $senha_Admin = $userAdmDao['senhaAdmin'];
    $imagem_Admin = $userAdmDao['imagemAdmin'];
}else{
    $nome_Admin = '';
    $cpf_Admin = '';
    $nasc_Admin= '';
    $email_Admin = '';
    $senha_Admin = '';
    $imagem_Admin = '';
    $id_Admin = '';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cola Aí - Adm</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
<?php
  $authUser = $_SESSION['userAdm'];
?>
<?php 
  include('../../Componentes/Header.php'); 
?>
<div class="container-fluid" style="height: 90vh">
  <div class="row h-100">
    <?php 
      include('../../Componentes/menu.php') 
    ?>
    <div class="col-md-10  p-4 borber">
      <div class="card">
      <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
          <div class="card-header">
            <strong>INFORMAÇÕES DO USUÁRIO</strong>
            <input type="hidden" name="idAdmin" id="idAdmin" placeholder="id" value="<?=$id_Admin?>">
            <input type="hidden" name="imagemAdmin" id="imagemAdmin" placeholder="nome foto" value="<?=$imagem_Admin?>">
            <input type="hidden" value="<?=$id_Admin?'ATUALIZAR':'SALVAR'?>" name="acao" >
          </div>
          <div class="card-body row justify-content-center align-items-center">
            <div class="col-md-2   text-center">
              <div class="bg-white rounded">
                <img id="preview" src="../../img/Admin/<?=$imagem_Admin!="" ? $imagem_Admin : 'userPadrao.jpg';?>" alt="imagem padrão" class=" w-75">
              </div>
            </div>
            <div class=" col-md-10">
              <div class="row">
                <div class="col-md-3 mb-3 needs-validation">
                  <label for="nome" class="col-form-label">Nome:</label>
                  <input type="text" class="form-control " name="nomeAdmin" maxlength="50" id="nomeAdmin" value="<?=$nome_Admin?>" required>
                  <div class="invalid-feedback">
                    Preencha este campo
                  </div>
                </div>
                <div class="col-md-3 mb-3 needs-validation">
                  <label for="cpf" class="col-form-label">CPF:</label>
                  <input type="text" class="form-control" data-mask="000.000.000-00" name="cpfAdmin" maxlength="50" id="cpfAdmin" value="<?=$cpf_Admin?>" required>
                  <div class="invalid-feedback">
                    Preencha este campo
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 needs-validation">
                  <label for="nasc" class="col-form-label">Data de Nascimento:</label>
                  <input type="date" class="form-control" name="dataNascAdmin" id="dataNascAdmin" value="<?=$nasc_Admin?>" required>
                </div>
                <div class="col-md-6 needs-validation">
                  <label for="email" class="col-form-label">Email:</label>
                  <input type="email" class="form-control" name="emailAdmin" maxlength="100" id="emailAdmin" value="<?=$email_Admin?>" required>
                </div>
                <div class="col-md-3 needs-validation">
                  <label for="senha" class="col-form-label">Senha:</label>
                  <input type="password" class="form-control" name="senhaAdmin" maxlength="10" id="senha"  value="<?=$senha_Admin?>" required>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-md-3">
                  <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
                </div>
              </div>
              <div class=" text-end p-3">
                <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                <input type="submit" class=" btn btn-success" value="Salvar">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
</script>
<!-- Para usar Mascara  -->
<script type="text/javascript" src="../../js/jquery.mask.min.js"></script>
<script type="text/javascript" src="../../js/personalizar.js"></script>

</body>

</html>
