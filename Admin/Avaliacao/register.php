<?php 
  require_once("../../componentes/modal.php");
  require_once '../../dao/AvaliacaoDao.php';
  if(!empty($_POST)){
    $id_Avaliacao = $avaliacaoDao['idAvaliacao'];
    $titulo_Avaliacao =  $avaliacaoDao['tituloAvaliacao'];
    $desc_Avaliacao = $avaliacaoDao['descAvaliacao'];
}else{
    $titulo_Avaliacao = '';
    $desc_Avaliacao = '';
    $id_Avaliacao = '';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Avaliações</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="../../css/style.css">
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
    <div class="col-md-10 p-4 borber">
      <div class="card">
      <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
          <div class="card-header">
            <strong>INFORMAÇÕES SOBRE AVALIAÇÕES</strong>
            <input type="hidden" name="idAvaliacao" id="idAvaliacao" placeholder="id" value="<?=$id_Avaliacao?>">
            <input type="hidden" value="<?=$id_Avaliacao?'ATUALIZAR':'SALVAR'?>" name="acao" >
          </div>
          <div class="card-body row justify-content-center align-items-center">
            <div class=" col-md-10 ">
              <div class="row">
                <div class="col-md-12 mb-3 needs-validation">
                  <label for="titulo" class="col-form-label">Titulo:</label>
                  <input type="text" class="form-control " name="tituloAvaliacao" maxlength="50" id="nomeUsuario" value="<?=$titulo_Avaliacao?>" required>
                  <div class="invalid-feedback">
                    Preencha este campo
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 mb-3 needs-validation">
                  <label for="descrição" class="col-form-label">Descrição:</label>
                  <textarea type="text-area" class="form-control"  name="descAvaliacao" maxlength="50" id="sobrenomeUsuario" value="<?=$desc_Avaliacao?>" required></textarea>
                  <div class="invalid-feedback">
                    Preencha este campo
                  </div>
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
