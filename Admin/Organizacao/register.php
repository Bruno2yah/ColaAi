<?php 
  require_once("../../componentes/modal.php");
  require_once '../../dao/OrganizacaoDao.php';
  if(!empty($_POST)){
    $id_Organizacao = $organizacaoDao['idOrganizacaoEvento'];
    $nome_Organizacao= $organizacaoDao['nomeOrganizacaoEvento'];
    $cnpj_Organizacao = $organizacaoDao['cnpjOrganizacaoEvento'];
    $cep_Organizacao = $organizacaoDao['cepOrganizacaoEvento'];
    $logradouro_Organizacao = $organizacaoDao['logradouroOrganizacaoEvento'];
    $bairro_Organizacao = $organizacaoDao['bairroOrganizacaoEvento'];
    $numero_Organizacao = $organizacaoDao['numeroOrganizacaoEvento'];
    $cidade_Organizacao = $organizacaoDao['cidadeOrganizacaoEvento'];
    $uf_Organizacao = $organizacaoDao['ufOrganizacaoEvento'];
    $email_Organizacao = $organizacaoDao['emailOrganizacaoEvento'];
    $senha_Organizacao = $organizacaoDao['senhaOrganizacaoEvento'];
    $linkSite_Organizacao = $organizacaoDao['linkSiteOrganizacaoEvento'];
    $telefone_Organizacao = $organizacaoDao['telOrganizacaoEvento'];
    $imagem_Organizacao = $organizacaoDao['imagemOrganizacaoEvento'];
}else{
    $nome_Organizacao = '';
    $cnpj_Organizacao = '';
    $cep_Organizacao = '';
    $logradouro_Organizacao = '';
    $bairro_Organizacao = '';
    $numero_Organizacao = '';
    $cidade_Organizacao = '';
    $uf_Organizacao = '';
    $email_Organizacao = '';
    $senha_Organizacao = '';
    $linkSite_Organizacao = '';
    $telefone_Organizacao = '';
    $imagem_Organizacao = '';
    $id_Organizacao = '';
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
    <div class="col-md-10  p-4 borber">
      <div class="card">
      <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
          <div class="card-header">
            <strong>INFORMAÇÕES DA ORGANIZAÇÃO</strong>
            <input type="hidden" name="idOrganizacaoEvento" id="idOrganizacaoEvento" placeholder="id" value="<?=$id_Organizacao?>">
            <input type="hidden" name="imagemOrganizacaoEvento" id="imagemOrganizacaoEvento" placeholder="nome foto" value="<?=$imagem_Organizacao?>">
            <input type="hidden" value="<?=$id_Organizacao?'ATUALIZAR':'SALVAR'?>" name="acao" >
          </div>
          <div class="card-body row justify-content-center align-items-center">
            <div class="col-md-2   text-center">
              <div class="bg-white rounded">
                <img id="preview" src="../../img/Admin/<?=$imagem_Organizacao!="" ? $imagem_Organizacao : 'userPadrao.jpg';?>" alt="imagem padrão" class=" w-75">
              </div>
            </div>
            <div class=" col-md-10">
              <div class="row">
                <div class="col-md-7 mb-3 needs-validation">
                  <label for="nome" class="col-form-label">Nome:</label>
                  <input type="text" class="form-control " name="nomeOrganizacaoEvento" maxlength="50" id="nomeOrganizacaoEvento" value="<?=$nome_Organizacao?>" required>
                  <div class="invalid-feedback">
                    Preencha este campo
                  </div>
                </div>
                <div class="col-md-5 mb-3 needs-validation">
                  <label for="cnpj" class="col-form-label">CNPJ:</label>
                  <input type="text" class="form-control" data-mask="00.000.000/0000-00" name="cnpjOrganizacaoEvento" maxlength="50" id="cnpjOrganizacaoEvento" value="<?=$cnpj_Organizacao?>" required>
                  <div class="invalid-feedback">
                    Preencha este campo
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7 mb-3 needs-validation">
                  <label for="logradouro" class="col-form-label">Logradouro:</label>
                  <input type="text" class="form-control " name="logradouroOrganizacaoEvento" maxlength="50" id="logradouroOrganizacaoEvento" value="<?=$logradouro_Organizacao?>" required>
                  <div class="invalid-feedback">
                    Preencha este campo
                  </div>
                </div>
                <div class="col-md-3 mb-3 needs-validation">
                  <label for="bairro" class="col-form-label">Bairro:</label>
                  <input type="text" class="form-control"  name="bairroOrganizacaoEvento" maxlength="50" id="bairroOrganizacaoEvento" value="<?=$bairro_Organizacao?>" required>
                  <div class="invalid-feedback">
                    Preencha este campo
                  </div>
                </div>
                <div class="col-md-2 mb-3 needs-validation">
                  <label for="numero" class="col-form-label">Número:</label>
                  <input type="text" class="form-control"  name="numeroOrganizacaoEvento" maxlength="50" id="numeroOrganizacaoEvento" value="<?=$numero_Organizacao?>" required>
                  <div class="invalid-feedback">
                    Preencha este campo
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 mb-3 needs-validation">
                  <label for="cep" class="col-form-label">CEP:</label>
                  <input type="text" class="form-control" data-mask="00.000-000" name="cepOrganizacaoEvento" maxlength="50" id="cepOrganizacaoEvento" value="<?=$cep_Organizacao?>" required>
                  <div class="invalid-feedback">
                    Preencha este campo
                  </div>
                </div>
                <div class="col-md-4 mb-3 needs-validation">
                  <label for="cidade" class="col-form-label">Cidade:</label>
                  <input type="text" class="form-control " name="cidadeOrganizacaoEvento" maxlength="50" id="cidadeOrganizacaoEvento" value="<?=$cidade_Organizacao?>" required>
                  <div class="invalid-feedback">
                    Preencha este campo
                  </div>
                </div>
                <div class="col-md-2 mb-3 needs-validation">
                  <label for="uf" class="col-form-label">UF:</label>
                  <input type="text" class="form-control"  name="ufOrganizacaoEvento" maxlength="50" id="ufOrganizacaoEvento" value="<?=$uf_Organizacao?>" required>
                  <div class="invalid-feedback">
                    Preencha este campo
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 needs-validation">
                  <label for="link" class="col-form-label">Link:</label>
                  <input type="text" class="form-control" name="linkSiteOrganizacaoEvento" maxlength="100" id="linkSiteOrganizacaoEvento" value="<?=$linkSite_Organizacao?>" required>
                </div>
                <div class="col-md-4 needs-validation">
                  <label for="telefone" class="col-form-label">Telefone:</label>
                  <input type="text" class="form-control" name="telOrganizacaoEvento"  data-mask="00-0000-0000" maxlength="100" id="telOrganizacaoEvento" value="<?=$telefone_Organizacao?>" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 needs-validation">
                  <label for="email" class="col-form-label">Email:</label>
                  <input type="email" class="form-control" name="emailOrganizacaoEvento" maxlength="100" id="emailOrganizacaoEvento" value="<?=$email_Organizacao?>" required>
                </div>
                <div class="col-md-3 needs-validation">
                  <label for="senha" class="col-form-label">Senha:</label>
                  <input type="password" class="form-control" name="senhaOrganizacaoEvento" maxlength="10" id="senhaOrganizacaoEvento"  value="<?=$senha_Organizacao?>" required>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-md-6">
                  <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input form-control">
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
