<?php
require_once '../../dao/EventoDao.php';
$eventos = EventoDao::selectAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos - Organização</title>
    <link rel="stylesheet" href="../../css/styleAdm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
</head>
<body>
    <?php
    session_start();
    include('../Componentes/header.php');
    ?>
    <div class="container-fluid vw-100 ">
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
        <div class="row vw-100">
            <?php
                include('../Componentes/menu.php')
            ?>
            <div class="info-box col-md-9 pt-4" style="color: #a6a6a6;" id="data-box">
                <h1 class="text-center mt-4">Veja aqui todos os seus eventos!</h1>
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
                            <th class="col-md-3 fs-4">Nome do Evento</th>
                            <th class="text-center col-md-2 fs-4">Informações</th>
                            <th class="text-center col-md-1 fs-4">Arquivar</th>
                            <th class="text-center col-md-1 fs-4 text-center">Alterar</th>
                            <th class="text-center col-md-1 fs-4">Excluir</th>

                        </tr>
                        <?php foreach ($eventos as $Eventos) : ?>  
                                <tr class="mt-1">
                                    <td class="fs-5 pt-3"><?= $Eventos['idEvento']; ?></td>
                                    <td class="fs-5 pt-3"><?= $Eventos['nomeEvento']; ?></td>
                                    <td class="text-center pt-3">
                                        <a class="dropdown-item" onclick="modalInfo(<?=$Eventos['idEvento'] ?>,'modalInfo')">
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
                                            <input type="hidden" class="form-control" id="id" name="id" value="<?=$Eventos['idEvento']?>">
                                            <button type="submit" class="dropdown-item"><img src="../../img/Admin/editar-icon.png" alt="" style="width: 35px;">
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center pt-3">
                                    <a class="dropdown-item" onclick="modalRemover(<?=$Eventos['idEvento'] ?>,'idDeletar')">
                                        <img src="../../img/Admin/excluir-icon.png" alt="" style="width: 30px;">
                                        </a>
                                    </td>
                                </tr>
                        <?php endforeach; ?>    
                        </thead>
                    </table>
                </div>
                <div class="modal fade" id="modalInfo" role="dialog"data-bs-backdrop="false"    >
                        <div class=" modal-dialog modal-dialog-centered">
                            <div class="modal-content ">
                                <div class="modal-header infoModalHeader">
                                    <h1 class="modal-title fs-3" id="exampleModalLabel">Informações do Evento</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="color: #a6a6a6;">
                                    <form action="process.php" method="post">
                                        <input type="hidden" class="form-control" id="" name="id" type="text">
                                        <div class="d-flex m-0" style="height: 30px;">
                                            <p class="m-0 fw-bold fs-5">Nome do Evento: </p> <p class="ms-2 fs-5" >aa</p>
                                        </div>
                                        <div class="d-flex m-0" style="height: 30px;">
                                            <p class="m-0 fw-bold fs-5">CEP: </p><p class="ms-2 fs-5">aaa</p>
                                        </div>
                                        <div class="d-flex m-0 justify-content-between" style="height: 30px;">
                                            <div class="d-flex">
                                                <p class="m-0 fw-bold fs-5">Endereço: </p><p class="ms-2 fs-5">aaa</p>
                                            </div>
                                            <div class="me-auto ms-auto d-flex">
                                                <p class="m-0 fw-bold fs-5">Nº: </p><p class="ms-2 fs-5">000</p>
                                            </div>
                                        </div>
                                        <div class="d-flex m-0" style="height: 30px;">
                                            <p class="m-0 fw-bold fs-5">Complemento: </p><p class="ms-2 fs-5">Rua dos coitados</p>
                                        </div>
                                        <div class="d-flex m-0" style="height: 30px;">
                                            <p class="m-0 fw-bold fs-5">Bairro: </p><p class="ms-2 fs-5">aaa</p>
                                        </div>
                                        
                                        <div class="d-flex m-0 justify-content-between" style="height: 30px;">
                                            <div class="d-flex">
                                                <p class="m-0 fw-bold fs-5">Cidade: </p><p class="ms-2 fs-5">aaa</p>
                                            </div>
                                            <div class="me-auto ms-auto d-flex">
                                                <p class="m-0 fw-bold fs-5">UF: </p><p class="ms-2 fs-5">000</p>
                                            </div>
                                        </div>
                                        <div class="d-flex m-0" style="height: 30px;">
                                            <p class="m-0 fw-bold fs-5">Faixa etária: </p><p class="ms-2 fs-5">aaa</p>
                                        </div>
                                        <div class="d-flex m-0" style="height: 30px;">
                                            <p class="m-0 fw-bold fs-5">Turno: </p><p class="ms-2 fs-5">aaa</p>
                                        </div>
                                        <div class="d-flex m-0" style="height: 30px;">
                                            <p class="m-0 fw-bold fs-5">Bairro: </p><p class="ms-2 fs-5">aaa</p>
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
            <div class="modal fade" id="modalExcluir" role="dialog"data-bs-backdrop="false"    >
                        <div class=" modal-dialog modal-dialog-centered">
                            <div class="modal-content ">
                                <div class="modal-body" style="color: #a6a6a6;">
                                    <form action="process.php" method="post">
                                        <input type="hidden" class="form-control" id="idDeletar" name="id" type="text">
                                        <h1 class="text-center fs-2 fw-bold">Excluir evento<br> da organização?</h1>
                                        <p class="fs-5 m-0">Quando clicar em <span style="text-decoration: underline; color:#FF3131">excluir</span>
                                            a ação não poderá ser desfeita, na qual fará o evento deixar de existir.</p>
                                        <div class="d-flex justify-content-between mt-5"> 
                                            <a href="" class="fs-4 mt-auto mb-2" style="color: #6D9EAF">Cancelar</a>
                                            <button type="submit" class="btn-adm rounded rounded-3 border-0 fs-4 col-3" value="DELETE" name="acao">Excluir</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
            <?= require '../Componentes/modal.php' ?>
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
    <script>
        function toggleHamburger() {
                var hamburger = document.querySelector('.hamburger'); // Selecionando o ícone do hambúrguer corretamente
                hamburger.classList.toggle('showHamburger');
            }
    </script>
    <script type="text/javascript" src="../../js/personalizar.js"></script>
    <script type="text/javascript" src="../../js/modal.js"></script>
</body>
</html>