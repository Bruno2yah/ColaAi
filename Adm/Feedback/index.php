
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback de Usuários</title>
    <link rel="stylesheet" href="../../css/styleAdm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
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
    include('../Componentes/header.php');
    ?>
    <div class="container-fluid">
        <div class="row vw-100 h-auto">
            <?php
            include('../Componentes/menu.php')
            ?>
            <div class="info-box col-md-9 " style="color: #a6a6a6;" id="data-box">
                <h1 class="text-center mt-4">Suporte Técnico - Feedback</h1>
                <div class="container d-flex w-100 h-auto pe-5 mt-5">
                    <a href="register.php" class="ms-auto me-0" style="width: 45px;">
                        <img src="../../img/Admin/add-icon.png" alt="" class="ms-auto me-2" style="width: 45px;">
                    </a>
                </div>
                <div class="row ms-4 me-5 mt-4">
                    <table class="">
                        <thead>
                            <tr id="data-table">
                                <th class="col-md-1 fs-4">ID</th>
                                <th class="col-md-2 fs-4">Nome</th>
                                <th class="col-md-4 fs-4">E-mail</th>
                                <th class="text-end col-md-2 fs-4">Informações</th>
                            </tr>
                                <tr class=" ">
                                    <td class="fs-5 p-1">1</td>
                                    <td class="fs-5 p-1">Teste da silva</td>
                                    <td class="fs-5 p-1">teste@gmail.com</td>
                                    <td class="text-end">
                                        <img src="../../img/Admin/info-icon.png" alt="" style="width: 40px;" class="me-5 mt-2">
                                    </td>
                                </tr>
                        </thead>
                    </table>
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
            <?= require '../../Adm/Componentes/modal.php' ?>
        </div>
    </div>

    <!-- Para usar Mascara  -->
    <script type="text/javascript" src="../../js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="../../js/personalizar.js"></script>
    <script type="text/javascript" src="../../js/modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>