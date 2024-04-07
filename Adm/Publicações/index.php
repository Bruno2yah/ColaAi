
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organização - Publicações</title>
    <link rel="stylesheet" href="../../css/styleAdm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
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
            <div class="info-box col-md-9  d-flex flex-column" style="color: #a6a6a6; background-blend-mode: darken; background-color: #E8E8E8;" id="data-box">
                <h1 class="text-center mt-4">Organização - Publicações</h1>
                <div class="row h-auto me-auto ms-auto g-5 mt-3" style="width: 80%;">
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="bg-white text-center rounded rounded-4" id="event-card">
                            <img src="../../img/Admin/userPadrao.png" alt="" class="p-2 rounded rounded-4 img-fluid" style="width: 250px;">
                            <h2 class="fs-3 fw-normal">Nome do post</h2>
                            <button class="border border-0 rounded-2 fs-4 m-4 mt-5 col-8">Saiba mais</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="../../js/personalizar.js"></script>
    <script type="text/javascript" src="../../js/modal.js"></script>
</body>
</html>