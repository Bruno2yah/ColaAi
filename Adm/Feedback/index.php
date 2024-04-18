
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
    <div class="hamburger-wrapper">
            <div class="hamburger" onclick="toggleSidebar() , toggleHamburger()">
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
        <div class="row vw-100 h-auto">
            <?php
            include('../Componentes/menu.php')
            ?>
            <div class="info-box col-md-9 " style="color: #a6a6a6;" id="data-box">
            
                <h1 class="text-center mt-4">Suporte Técnico - Feedback</h1>
                <div class="container d-flex w-100 pe-5 mt-5" style="height: 50px;">
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
                                    <td class="fs-5 p-1 pt-3">1</td>
                                    <td class="fs-5 p-1 pt-3">Teste da silva</td>
                                    <td class="fs-5 p-1 pt-3">teste@gmail.com</td>
                                    <td class="text-end pt-3">
                                    <a class="dropdown-item" onclick="modalInfo(1,1)">
                                                <img src="../../img/Admin/info-icon.png" alt="" style="width: 40px;" class="me-5 mt-2">
                                        </a>
                                    </td>
                                </tr>
                        </thead>
                    </table>
                </div>
                <div class="modal fade" id="modalInfo" role="dialog"data-bs-backdrop="false"    >
                        <div class=" modal-dialog modal-dialog-centered">
                            <div class="modal-content ">
                                <div class="modal-header infoModalHeader">
                                    <h1 class="modal-title fs-3" id="exampleModalLabel">Informações do Feedback</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="color: #a6a6a6;">
                                    <form action="process.php" method="post">
                                        <input type="hidden" class="form-control" id="idDeletar" name="id" type="text">
                                        <div class="d-flex m-0" style="height: 30px;">
                                            <p class="m-0 fw-bold fs-5">Nome do Usuário: </p> <p class="ms-2 fs-5" >aa</p>
                                        </div>
                                        <div class="d-flex m-0" style="height: 30px;">
                                            <p class="m-0 fw-bold fs-5">E-mail: </p><p class="ms-2 fs-5">aaa</p>
                                        </div>
                                        <div class="d-flex m-0" style="height: 30px;">
                                            <p class="m-0 fw-bold fs-5">Título: </p><p class="ms-2 fs-5">aaa</p>
                                        </div>
                                        <p class="m-0 fw-bold fs-5">Descrição: </p>
                                        <div class="desc-box w-100 rounded rounded-3 mb-1 p-1">
                                            <p>aaa</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>

                    <?= require '../../Adm/Componentes/modal.php' ?>
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
    <!-- Para usar Mascara  -->
    <script type="text/javascript" src="../../js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="../../js/personalizar.js"></script>
    <script type="text/javascript" src="../../js/modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>