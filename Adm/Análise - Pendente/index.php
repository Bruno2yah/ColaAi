<?php
    require_once('../../dao/OrganizacaoDao.php');
    require_once '../../model/Mensagem.php';
    $organizacao = OrganizacaoDao::selectAll(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise Pendente</title>
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
    <div class="container-fluid vw-100">
        <div class="row vw-100">
            <?php
                include('../Componentes/menu.php')
            ?>
            <div class="info-box col-md-9 pt-4" style="color: #a6a6a6;" id="data-box">
                <h1 class="text-center mt-4">Análise de registro - Pendente</h1>
                <div class="container mt-5" style="height: 40px;">
                    
                </div>
                <div class="row ms-4 me-5 mt-4">
                    <table class="">
                        <thead>
                        <tr id="data-table">
                            <th class="col-md-1 fs-4">ID</th>
                            <th class="col-md-1 fs-4">Nome</th>
                            <th class="col-md-2 fs-4">E-mail</th>
                            <th class="col-md-2 fs-4">CNPJ</th>
                            <th class="text-center col-md-1 fs-4">Informações</th>
                            <th class="col-md-2 fs-4 text-center">Aceitar</th>
                            <th class="text-center col-md-1 fs-4">Negar</th>

                        </tr>
                        <?php foreach ($organizacao as $organizacao) : ?>
                                <tr class="mt-1">
                                    <td class="fs-5 p-1"><?= $organizacao['idOrganizacaoEvento']; ?></td>
                                    <td class="fs-5 p-1"><?= $organizacao['nomeOrganizacaoEvento']; ?></td>
                                    <td class="fs-5 p-1"><?= $organizacao['emailOrganizacaoEvento']; ?></td>
                                    <td class="fs-5 p-1"><?= $organizacao['cnpjOrganizacaoEvento']; ?></td>
                                    <td class="text-center">
                                    <img src="../../img/Admin/info-icon.png" alt="" style="width: 30px;">
                                    </td>
                                    <td class="text-center">
                                        <img src="../../img/Admin/excluir-icon.png" alt="" style="width: 30px;">
                                    </td>
                                    <td class="text-center">
                                    <button type="submit" class="dropdown-item"><img src="../../img/Admin/aceitar-icon.png" alt="" style="width: 30px;" >
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="../../js/personalizar.js"></script>
    <script type="text/javascript" src="../../js/modal.js"></script>
</body>
</html>