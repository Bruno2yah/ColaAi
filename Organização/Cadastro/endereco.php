<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Endereço</title>
    <link rel="stylesheet" href="../../css/styleCadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
</head>
<body class="w-100">
    <div class="header d-flex justify-content-center align-items-center">
        <img src="../../img/Login/Cola AI logo.png" alt="">
    </div>
    <div class="box-center container-fluid w-100">
        <div class="row h-100 justify-content-center vw-100 align-items-center">
            <div class="form-box col-11 col-sm-9 col-md-5 rounded-4">
                <form action="complemento.php" method="post">
                    <div class="title-box h-25 p-4 pb-0 pt-5 text-start">
                        <h1 class="fw-bold fs-3" id="title-cadastro">Qual é o endereço da Organização?</h1>
                    </div>
                    <div class="text-termos">
                        <p class="fs-4 ps-4 pe-4 mb-5">Recomendamos que envie dados atualizados.</p>
                    </div>
                    <div class="row mb-5 ps-md-4 pe-md-5 g-5">
                        <div class="input-box col-sm-8">
                            <input type="text" class="input-group" name="enderecoOrganizacaoEvento" placeholder="Digite o endereço">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="input-group " placeholder="N°">
                        </div>
                    </div>
    
                    <div class="w-100  justify-content-end align-items-end d-flex pe-md-5" id="btn-box">
                        <button type="submit" class="border-0 rounded-3 fs-4 mb-4">Prosseguir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>
</html>