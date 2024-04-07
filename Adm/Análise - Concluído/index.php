<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise Completa</title>
    <link rel="stylesheet" href="../../css/styleAdm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
</head>
<body>
    <?php
    include('../Componentes/header.php');
    ?>
    <div class="container-fluid vw-100">
        <div class="row vw-100">
            <?php
                include('../Componentes/menu.php')
            ?>
            <div class="info-box col-md-9 pt-4" style="color: #a6a6a6;" id="data-box">
                <h1 class="text-center">Análise de registro - Concluídos</h1>
                <div class="container pe-5 d-flex flex-column mt-5">
                    <h1 class="fs-5 ms-auto me-4 ">Categoria</h1>
                    <div class="dropdown ms-auto">
                    <a class="btn btn-body-primary border-1 border dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Selecione
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Aceito</a></li>
                        <li><a class="dropdown-item" href="#">Negado</a></li>gi
                    </ul>
                    </div>
                </div>
                <div class="row ms-4 me-5 mt-2">
                    <table class="">
                        <thead>
                        <tr id="data-table">
                            <th class="col-md-1 fs-5">ID</th>
                            <th class="col-md-2 fs-5">Nome</th>
                            <th class="col-md-3 fs-5">E-mail</th>
                            <th class="col-md-2 fs-5">CNPJ</th>
                            <th class="col-md-5 text-end fs-5 pe-3">Situação</th>
                        </tr>
                        <tr>
                            <td class="pt-3 col-md-1">01</td>
                            <td class="pt-3 col-md-2">Organização</td>
                            <td class="pt-3 col-md-2">Organização@teste.com</td>
                            <td class="pt-3 col-md-3">XX. XXX. XXX/0001-XX.</td>
                            <td class="pt-3 col-md-2 text-end pe-4">
                                <p class="fs-5 text-success fw-semibold">Aceito</p>
                            </td>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>
</html>