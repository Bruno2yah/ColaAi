<?php 
  require_once("../../componentes/modal.php");
  require_once '../../dao/UserDao.php';
  if(!empty($_POST)){
    $id_Usuario = $userDao['idUsuario'];
    $nome_Usuario =  $userDao['nomeUsuario'];
    $sobrenome_Usuario = $userDao['sobrenomeUsuario'];
    $email_Usuario = $userDao['emailUsuario'];
    $senha_Usuario = $userDao['senhaUsuario'];
    $imagem_Usuario = $userDao['imagemUsuario'];
}else{
    $nome_Usuario = '';
    $sobrenome_Usuario = '';
    $email_Usuario = '';
    $senha_Usuario = '';
    $imagem_Usuario = '';
    $id_Usuario = '';
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
            <input type="hidden" name="idUsuario" id="idUsuario" placeholder="id" value="<?=$id_Usuario?>">
            <input type="hidden" name="imagemUsuario" id="imagemUsuario" placeholder="nome foto" value="<?=$imagem_Usuario?>">
            <input type="hidden" value="<?=$id_Usuario?'ATUALIZAR':'SALVAR'?>" name="acao" >
          </div>
          <div class="card-body row justify-content-center align-items-center">
            <div class="col-md-2   text-center">
              <div class="bg-white rounded">
                <img id="preview" src="../../img/Admin/<?=$imagem_Usuario!="" ? $imagem_Usuario : 'userPadrao.jpg';?>" alt="imagem padrão" class=" w-75">
              </div>
            </div>
            <div class=" col-md-10">
              <div class="row">
                <div class="col-md-3 mb-3 needs-validation">
                  <label for="nome" class="col-form-label">Nome:</label>
                  <input type="text" class="form-control " name="nomeUsuario" maxlength="50" id="nomeUsuario" value="<?=$nome_Usuario?>" required>
                  <div class="invalid-feedback">
                    Preencha este campo
                  </div>
                </div>
                <div class="col-md-3 mb-3 needs-validation">
                  <label for="sobrenome" class="col-form-label">Sobrenome:</label>
                  <input type="text" class="form-control"  name="sobrenomeUsuario" maxlength="50" id="sobrenomeUsuario" value="<?=$sobrenome_Usuario?>" required>
                  <div class="invalid-feedback">
                    Preencha este campo
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7 needs-validation">
                  <label for="email" class="col-form-label">Email:</label>
                  <input type="email" class="form-control" name="emailUsuario" maxlength="100" id="emailUsuario" value="<?=$email_Usuario?>" required>
                </div>
                <div class="col-md-4 needs-validation">
                  <label for="senha" class="col-form-label">Senha:</label>
                  <input type="password" class="form-control" name="senhaUsuario" maxlength="10" id="senha"  value="<?=$senha_Usuario?>" required>
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
