<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise Pendente</title>
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
                <h1 class="text-center">Análise de registro - Pendente</h1>
                <div class="container" style="height: 40px;">
                    
                </div>
                <div class="row ms-4 me-5 mt-5">
                    <table class="">
                        <thead>
                        <tr id="data-table">
                            <th class="col-md-1 fs-5">ID</th>
                            <th class="col-md-2 fs-5">Nome</th>
                            <th class="col-md-3 fs-5">E-mail</th>
                            <th class="col-md-1 fs-5">CNPJ</th>
                            <th class="col-md-2 fs-5 text-center">Aceitar</th>
                            <th class="text-center col-md-1 fs-5">Negar</th>
                            <th class="text-end col-md-1 fs-5">Informações</th>
                        </tr>
                        <tr>
                            <td class="pt-3 col-md-1">01</td>
                            <td class="pt-3 col-md-2">Organização</td>
                            <td class="pt-3 col-md-2">Organização@teste.com</td>
                            <td class="pt-3 col-md-3">XX. XXX. XXX/0001-XX.</td>
                            <td class="pt-3 col-md-2 text-center"><img src="../../img/Admin/aceitar-icon.png" alt="" style="width: 35px;"></td>
                            <td class="pt-3 col-md-2 text-center">
                                <img src="../../img/Admin/excluir-icon.png" alt="" style="width: 30px;">
                            </td>
                            <td class="pt-3 col-md-3 text-center">
                                <img src="../../img/Admin/info-icon.png" alt="" style="width: 40px;">
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