
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens Arquivados</title>
    <link rel="stylesheet" href="../../css/styleAdm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
</head>
<body>
    <?php
    include('../Componentes/header.php');
    ?>
    <div class="container-fluid vw-100">
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
                <h1 class="text-center">Veja aqui todos as seus itens arquivados!</h1>
                <div class="w-100 d-flex flex-column mt-5 pe-5">
                    <div class="dropdown ms-auto me-0">
                        <h1 class="fs-5 ms-auto me-0">Item</h1>
                        <a class="btn btn-body-primary border-1 border dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Selecione
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Eventos</a></li>
                            <li><a class="dropdown-item" href="#">Publicações   </a></li>
                        </ul>
                    </div>
                </div>
                <div class="row ms-4 me-5 mt-2">
                    <table class="">
                        <thead>
                        <tr id="data-table">
                            <th class="col-md-1 fs-5">ID</th>
                            <th class="col-md-5 fs-5">Título do Evento/Publicação</th>
                            <th class="col-md-1 text-center fs-5">Informações</th>
                            <th class="col-md-1 text-center fs-5">Restaurar</th>
                        </tr>
                        <tr>
                            <td class="pt-3 col-md-1">01</td>
                            <td class="pt-3 col-md-1">Organização</td>
                            <td class="pt-3 col-md-1 text-center">
                                <img src="../../img/Admin/info-icon.png" alt="" style="width: 40px;">
                            </td>
                            <td class="pt-3 col-md-1 text-center">
                                <a class="dropdown-item" onclick="modalRestaurar(1,1)">
                                    <img src="../../img/Organizacao/restaurar-icon.png" alt=""  style="width: 35px;">
                                </a>
                            </td>
                        </tr>
                        </thead>
                    </table>
                </div>

                <div class="modal fade" id="modalRestaurar" role="dialog" data-bs-backdrop="false">
                        <div class=" modal-dialog modal-dialog-centered">
                            <div class="modal-content ">
                                <div class="modal-body" style="color: #a6a6a6;">
                                    <form action="process.php" method="post">
                                        <input type="hidden" class="form-control" id="idDeletar" name="id" type="text">
                                        <h1 class="text-center fs-2 fw-bold">Restaurar este item <br> da organização?</h1>
                                        <p class="fs-5 m-0">Quando clicar em <span style="text-decoration: underline; color:#6D9EAF">restaurar</span>
                                        automaticamente a seu item irá voltar ao menu da sua categoria e também irá aparecer para os usuários da plataforma.</p>
                                        <div class="d-flex justify-content-between mt-5"> 
                                            <a href="" class="fs-4 mt-auto mb-2" style="color: #6D9EAF">Cancelar</a>
                                            <button type="submit" class="btn-adm rounded rounded-3 border-0 fs-4 col-3" value="DELETE" name="acao">Restaurar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                    <?= require '../../Adm/Componentes/modal.php' ?>
            </div>

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