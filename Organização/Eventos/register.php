<?php
session_start(); // Inicia a sessão
require_once(__DIR__ . '../../../Adm/Componentes/modal.php');
require_once(__DIR__ . '../../../dao/EventoDao.php');

if (!empty($_POST)) {
  $id_Evento = $eventoDao['idEvento'];
  $nome_Evento =  $eventoDao['nomeEvento'];
  $cep_Evento = $eventoDao['cepEvento'];
  $endereco_Evento = $eventoDao['enderecoEvento'];
  $num_Evento = $eventoDao['numeroEvento'];
  $complemento_Evento = $eventoDao['complementoEvento'];
  $bairro_Evento = $eventoDao['bairroEvento'];
  $cidade_Evento = $eventoDao['cidadeEvento'];
  $uf_Evento = $eventoDao['ufEvento'];
  $data_Evento = $eventoDao['dataEvento'];
  $periodo_Evento = $eventoDao['faixaEtariaEvento'];
  $faixa_Evento = $eventoDao['periodoEvento'];
  $valor_Evento = $eventoDao['valorEvento'];
  $desc_Evento = $eventoDao['descEvento'];
  $idOrg_Evento = $eventoDao['idOrganizacaoEvento'];
  $imagem_Evento = $eventoDao['imagemEvento'];
} else {
  $nome_Evento = '';
  $cep_Evento = '';
  $endereco_Evento = '';
  $num_Evento = '';
  $complemento_Evento = '';
  $bairro_Evento = '';
  $cidade_Evento = '';
  $uf_Evento = '';
  $data_Evento = '';
  $periodo_Evento = '';
  $faixa_Evento = '';
  $valor_Evento = '';
  $desc_Evento = '';
  $idOrg_Evento = '';
  $imagem_Evento = '';
  $id_Evento = '';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Evento</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <div class="hamburger" onclick="toggleSidebar(), toggleHamburger()">
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
                <h1 class="text-center mt-5 fs-2" style="color: #a6a6a6;">Organização - Criar Evento</h1>
                <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation w-100 h-100 p-4" novalidate>
                    <input type="hidden" name="idEvento" id="idEvento" placeholder="id" value="<?=$id_Evento?>">
                    <input type="hidden" name="idOrganizacaoEvento" id="idOrganizacaoEvento" placeholder="id da organização" value="<?= isset($authUserOrg['idOrganizacaoEvento']) ? $authUserOrg['idOrganizacaoEvento'] : '' ?>" readonly>
                    <input type="hidden" name="imagemEvento" id="imagemEvento" placeholder="nome foto" value="<?=$imagem_Evento?>">
                    <input type="hidden" value="<?= $id_Evento ? 'ATUALIZAR' : 'SALVAR' ?>" name="acao">    
                    <img id="preview" src="../../img/Organizacao/Evento/<?=$imagem_Evento!=""?$imagem_Evento:'eventoPadrao.png';?>" alt="imagem do evento" class="img-fluid ms-auto me-auto rounded rounded-3">
                    <div class="row text-end inputFile">
                        <label for="foto" class="form-label fs-5 mt-2">Alterar Imagem</label>
                        <input type="file" id="foto" name="foto" accept="image/*" class="form-control mt-1 mb-4">
                    </div>
            
                    <div class="row">
                        <div class="col-md-6 needs-validation">
                            <label for="nome" class="col-form-label">Nome do Evento*</label>
                            <input type="text" class="form-control inputGeral" placeholder=""  name="nomeEvento" maxlength="100" id="nomeEvento" value="<?=$nome_Evento?>" required>
                        </div>
                        <div class="col-md-6 needs-validation">
                            <label for="cep" class="col-form-label">CEP do Evento*</label>
                            <input type="text" class="form-control inputGeral" name="cepEvento" data-mask="00000-000" id="cepEvento" value="<?=$cep_Evento?>" required>
                        </div>
                    <div class="row mb-4 m-0 p-0">
                        <div class="col-md-10 needs-validation">
                            <label for="endereco" class="col-form-label">Endereço do Evento*</label>
                            <input type="text" class="form-control inputGeral" placeholder=""  name="enderecoEvento" maxlength="100" id="" value="<?=$endereco_Evento?>" required>
                        </div>
                        <div class="col-md-2 needs-validation">
                            <label for="numero" class="col-form-label">N°*</label>
                            <input type="text" class="form-control inputGeral" placeholder=""  name="numeroEvento" maxlength="5" id="" value="<?=$num_Evento?>" required>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 needs-validation">
                            <label for="bairro" class="col-form-label">Bairro do Evento*</label>
                            <input type="text" class="form-control inputGeral" placeholder=""  name="bairroEvento" maxlength="100" id="" value="<?=$bairro_Evento?>">
                        </div>
                        <div class="col-md-6 needs-validation">
                            <label for="complemento" class="col-form-label">Complemento do Evento*</label>
                            <input type="text" class="form-control inputGeral" placeholder=""  name="complementoEvento" maxlength="100" id="" value="<?=$complemento_Evento?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 needs-validation">
                            <label for="complemento" class="col-form-label">Cidade do Evento*</label>
                            <input type="text" class="form-control inputGeral" placeholder=""  name="cidadeEvento" maxlength="100" id="" value="<?=$cidade_Evento?>" required>
                        </div>
                        <div class="col-md-6 needs-validation">
                            <label for="complemento" class="col-form-label">UF do Evento*</label>
                            <input type="text" class="form-control inputGeral" placeholder=""  name="ufEvento" maxlength="100" id="" value="<?=$uf_Evento?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 needs-validation">
                            <label for="date" class="col-form-label">Data do Evento*</label>
                            <input type="date" class="form-control inputGeral" placeholder="" name="dataEvento" maxlength="100" id="" value="<?=$data_Evento?>" required>
                    <div class="row">
                        <div class="col-md-6 needs-validation">
                            <label for="faixaetaria" class="col-form-label">Faixa etária do Evento*</label>
                            <select class="form-select inputGeral" name="faixaEtariaEvento" value="<?=$faixa_Evento?>" aria-label="Default select example">
                                <option selected>Selecione a faixa etária</option>
                                <option value="1">+0</option>
                                <option value="1">Livre para todos os públicos</option>
                            </select>
                        </div>
                        <div class="col-md-6 needs-validation">
                            <label for="turno" class="col-form-label">Turno do Evento*</label>
                            <select class="form-select inputGeral" name="periodoEvento" value="<?=$periodo_Evento?>" aria-label="Default select example">
                                <option selected>Selecione o turno</option>
                                <option value="1">Manhã</option>
                                <option value="2">Tarde</option>
                                <option value="3">Noite</option>
                            </select>
                        </div>
                    </div>
                   
                        <div class="col-md-12 needs-validation mb-4">
                        <label for="valor" class="col-form-label">Valor do Evento*</label>
                            <select class="form-select inputGeral" name="valorEvento" value="<?=$valor_Evento?>" aria-label="Default select example">
                            <option selected>Selecione o valor</option>
                                <option value="1">Grátis</option>
                                <option value="1">Pago</option>
                                <option value="1">Outros</option>
                            </select>
                        </div>
                    <div class="row">
                        <div class="col-md-12 needs-validation ">
                            <label for="descricao" class="col-form-label">Descrição do Evento*</label>
                            <textarea class="form-control inputGeral" name="descEvento" id="" cols="30" maxlength="500" rows="10" style="max-height: 400px;"><?=$desc_Evento?></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class=" text-end p-3">
                            <input type="submit" class="btn" value="Salvar">
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
    <script>
        function toggleHamburger() {
                var hamburger = document.querySelector('.hamburger'); // Selecionando o ícone do hambúrguer corretamente
                hamburger.classList.toggle('showHamburger');
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