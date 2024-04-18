<?php
require_once '../../dao/PublicacaoDao.php';
$publicacoes = PublicacaoDao::selectAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicações - Organização</title>
    <link rel="stylesheet" href="../../css/styleAdm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
</head>
<body>
<?php
    session_start();
    // Verificar se o índice 'Autenticado' existe ou é igual a 'SIM'
    if (!isset($_SESSION['AutenticaoOrg']) || $_SESSION['AutenticaoOrg'] != 'SIM') {
        // Redirecionar para o login com um erro2 se não estiver autenticado
        header('Location: loginEmail.php?login=erro2');
        exit();
    }

    //o usuário está autenticado
    $authUserOrg = $_SESSION['userOrg'];
    ?>
    <?php
    include('../Componentes/header.php');
    ?>
    <div class="container-fluid vw-100 ">
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
        <div class="row vw-100">
            <?php
                include('../Componentes/menu.php')
            ?>
            <div class="info-box col-md-9 pt-4" style="color: #a6a6a6;" id="data-box">
                <h1 class="text-center mt-4">Veja aqui todas as suas publicações!</h1>
                <div class="container d-flex w-100 h-auto mt-5 me-5">
                    <a href="register.php" class="ms-auto me-0" style="width: 45px;">
                        <img src="../../img/Admin/add-icon.png" alt="" class="ms-auto" style="width: 45px;">
                    </a>
                </div>  
                <div class="row ms-4 me-5 mt-4">
                    <table class="">
                        <thead>
                        <tr id="data-table">
                            <th class="col-md-1 fs-4">ID</th>
                            <th class="col-md-4 fs-4">Nome da Publicação</th>
                            <th class="text-center col-md-1 fs-4">Informações</th>
                            <th class="text-center col-md-1 fs-4">Arquivar</th>
                            <th class="text-center col-md-1 fs-4 text-center">Alterar</th>
                            <th class="text-center col-md-1 fs-4">Excluir</th>

                        </tr>
                             <?php foreach ($publicacoes as $Publicacao) : ?>
                                <tr class="mt-1">
                                    <td class="fs-5 pt-3"><?= $Publicacao['idPublicacao']; ?></td>
                                    <td class="fs-5 pt-3"><?= $Publicacao['tituloPublicacao']; ?></td>
                                    <td class="text-center pt-3">
                                        <a class="dropdown-item" onclick="modalInfo(<?=$Publicacao['idPublicacao'] ?>,'idInfo')">
                                            <img src="../../img/Admin/info-icon.png" alt="" style="width: 40px;">
                                        </a>
                                    </td>
                                    <td class="text-center fs-5 pt-3">
                                    <a class="dropdown-item" onclick="">
                                        <img src="../../img/Organizacao/arquivar-icon.png" alt="" style="width: 40px;">
                                        </a>
                                    </td>
                                    <td class="text-center pt-3">
                                    <form action="process.php" method="POST">
                                            <input type="hidden" class="form-control" id="acao" name="acao" value="SELECTID">
                                            <input type="hidden" class="form-control" id="id" name="id" value="<?=$Publicacao['idPublicacao']?>">
                                            <button type="submit" class="dropdown-item"><img src="../../img/Admin/editar-icon.png" alt="" style="width: 35px;">
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center pt-3">
                                    <a class="dropdown-item" onclick="modalRemover(<?=$Publicacao['idPublicacao'] ?>,'idDeletar')">
                                        <img src="../../img/Admin/excluir-icon.png" alt="" style="width: 30px;">
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>  
                        </thead>
                    </table>
                </div>
            </div>
            <div class="modal fade" id="modalInfo" role="dialog" data-bs-backdrop="false">
                    <div class=" modal-dialog modal-dialog-centered">
                        <div class="modal-content ">
                            <div class="modal-header infoModalHeader">
                                <h1 class="modal-title fs-3" id="exampleModalLabel">Informações da Publicação</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="color: #a6a6a6;">
                                <form action="process.php" method="post">
                                    <input type="hidden" class="form-control" id="idInfo" name="id" type="text">
                                    <div class="d-flex m-0" style="height: 35px;">
                                        <p class="m-0 fw-bold fs-5">Nome da publicação: </p> <p class="ms-2 fs-5" >aa</p>
                                    </div> 

                                    <div class="d-flex m-0">
                                        <p class="m-0 fw-bold fs-5">Arquívos de mídia: </p>
                                    </div> 
                                    <div id="carouselExample" class="carousel slide mb-2">
                                        <div class="carousel-inner rounded rounded-3">
                                            <div class="carousel-item active">
                                            <img src="../../img/Admin/eventoPadrao.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="../../img/Admin/eventoPadrao.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="../../img/Admin/eventoPadrao.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="../../img/Admin/eventoPadrao.png" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                        </div>


                                    <p class="m-0 fw-bold fs-5">Descrição: </p>
                                    <div class="desc-box w-100 rounded rounded-3 mb-3 p-1">
                                        <p>aaa</p>
                                    </div>

                                </form>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal fade" id="modalAceitar" role="dialog"data-bs-backdrop="false"    >
                        <div class=" modal-dialog modal-dialog-centered">
                            <div class="modal-content ">
                                <div class="modal-body" style="color: #a6a6a6;">
                                    <form action="process.php" method="post">
                                        <input type="hidden" class="form-control" id="idDeletar" name="id" type="text">
                                        <h1 class="text-center fs-2 fw-bold">Aceitar o cadastro<br> da organização?</h1>
                                        <p class="fs-5 m-0">Quando clicar em <span style="text-decoration: underline; color:#93CC4C">aceitar</span> 
                                        a organização receberá um e-mail de acesso para concluír o seu cadastro.</p>
                                        <div class="d-flex justify-content-between mt-5"> 
                                            <a href="" class="fs-4 mt-auto mb-2" style="color: #6D9EAF">Cancelar</a>
                                            <button type="submit" class="btn-adm rounded rounded-3 border-0 fs-4 col-3" value="?" name="acao">Aceitar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
            </div>
            <div class="modal fade" id="modalExcluir" role="dialog"data-bs-backdrop="false"    >
                        <div class=" modal-dialog modal-dialog-centered">
                            <div class="modal-content ">
                                <div class="modal-body" style="color: #a6a6a6;">
                                    <form action="process.php" method="post">
                                        <input type="hidden" class="form-control" id="idDeletar" name="id" type="text">
                                        <h1 class="text-center fs-2 fw-bold">Excluir publicação<br> da organização?</h1>
                                        <p class="fs-5 m-0">Quando clicar em <span style="text-decoration: underline; color:#FF3131">excluir</span>
                                            a ação não poderá ser desfeita, na qual fará a publicação deixar de existir.</p>
                                        <div class="d-flex justify-content-between mt-5"> 
                                            <a href="" class="fs-4 mt-auto mb-2" style="color: #6D9EAF">Cancelar</a>
                                            <button type="submit" class="btn-adm rounded rounded-3 border-0 fs-4 col-3" value="DELETE" name="acao">Excluir</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
            <?= require '../../Adm/Componentes/modal.php' ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('show');
        }
    </script>
    <script type="text/javascript" src="../../js/personalizar.js"></script>
    <script type="text/javascript" src="../../js/modal.js"></script>
</body>
</html>