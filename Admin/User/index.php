<?php 
  require_once '../../dao/userAdmDao.php'; 
  require_once '../../model/Mensagem.php'; 
  $users = UserAdmDao::selectAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
    <link rel="stylesheet" href="../../css/style.css">
    <title>Lista de Administradores</title>
    <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
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

  // Agora, o usuário está autenticado, então você pode acessar as informações do usuário na sessão
  $authUser = $_SESSION['userAdm'];
  ?>
    <?php
      include('../../Componentes/Header.php'); 
    ?>
    <div class = "container-fluid" style = "height: 90%">
      <div class = "row h-100 linha">
        <?php
          include('../../Componentes/menu.php') 
        ?>
        <div class="col-md-10  p-4 borber">
        <div class="row align-items-center mb-4">
          <div class="col fs-3 fw-semibold">
            Lista de Administradores
          </div>
          <div class="col text-end ">
            <a class="btn btn-success px-3" role="button" aria-disabled="true" href="register.php"><i class="fas fa-plus" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="row">
          <table class="table table-hover">
            <thead>
              <tr>
                <th class="col-md-1">ID</th>
                <th class="col-md-2">Nome </th>
                <th class="col-md-3">E-mail</th>
                <th class="col-md-2">CPF</th>
                <th class="col-md-1">Data Nascimento</th>
                <th class="text-center col-md-1">Alterar</th>
                <th class="text-center col-md-1">Excluir</th>
              </tr>
            <?php foreach($users as $User): ?>
             <tr> 
              <td><?=$User['idAdmin'];?></td>
              <td><?=$User['nomeAdmin'];?></td>
              <td><?=$User['emailAdmin'];?></td>
              <td><?=$User['cpfAdmin'];?></td>
              <td><?=$User['dataNascAdmin'];?></td>
              <td class="text-center">
                  <form action="process.php" method="POST">
                    <input type="hidden" class="form-control" id="acao" name="acao" value="SELECTID">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?=$User['idAdmin']?>">
                    <button type="submit" class="dropdown-item"><i class="fas fa-edit fa-lg text-secondary"></i>
                    </button>
                  </form>
                </td>
                <td class="text-center">
                  <a class="dropdown-item" onclick="modalRemover(<?=$User['idAdmin']?>,'idDeletar')">
                    <i class="fas fa-trash-alt fa-lg text-danger"></i>
                  </a>
                </td>
            </tr>
            <?php endforeach; ?>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalExcluir" role="dialog">
    <div class=" modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Usuário</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body  ">
          <form action="process.php" method="post">
            <input type="hidden" class="form-control" id="idDeletar" name="id" type="text">
            <p>Tem certeza que deseja excluir o item selcionado?
            <div class=" text-end">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Não</button>
              <button type="submit" class="btn btn-warning ms-3" value="DELETE" name="acao">Sim </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?= require '../../Componentes/modal.php'?>
      </div>
    </div>
     <!-- Para usar Mascara  -->
  <script type="text/javascript" src="./../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../../js/personalizar.js"></script>
  <script type="text/javascript" src="./../../js/modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>