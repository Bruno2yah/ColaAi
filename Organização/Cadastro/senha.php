<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['senhaOrganizacaoEvento'])) {
    $_SESSION['senhaOrganizacaoEvento'] = trim($_POST['senhaOrganizacaoEvento']);

    header("Location:analise.php");
    exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Senha</title>
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
                <form action="process.php" method="post">
                    <input type="hidden" value="CADASTRAR" name="acao">
                    <div class="title-box p-4 pb-0 pt-5 text-start">
                        <h1 class="fw-bold fs-3" id="title-cadastro">Crie uma senha para a Organização</h1>
                    </div>
                    <div class="text-termos">
                        <p class="fs-5 ps-4">Senha com no <span style="color: #6D9EAF;">mínimo 8 caracteres</span>, entre eles contendo: @#$%&*! </p>
                    </div>
                    
                    <div class="input-box mb-5 ps-md-4 pe-md-5">
                        <div class="orgSenha d-flex">
                            <input type="password" name="senhaOrganizacaoEvento" id="password" class="inputSenha col-12 fs-5" placeholder="Digite a sua senha">
                            <i class="bi bi-eye col1" id="btnSenha" onclick="MostrarSenha()"></i>
                        </div>
                    </div>
                    <div class="input-box  mb-3 ps-md-4 pe-md-5">
                        <div class="orgSenha d-flex">
                            <input type="password" name="senhaOrganizacaoEvento" id="password1" class="inputSenha col-12 fs-5" placeholder="Confirme a sua senha">
                            <i class="bi bi-eye col1" id="btnSenha1" onclick="MostrarSenha2()"></i>
                        </div>
                        <script>
                        function myFunction() {
                        var x = document.getElementById("password");
                        var y = document.getElementById("password1")
                        if (x.type === "password") {
                            x.type = "text";
                            y.type = "text";
                        } else {
                            x.type = "password";
                            y.type = "password";
                        }
                        }
                    </script>
                    </div>
                    <div class="w-100  justify-content-end align-items-end d-flex pe-md-5 mt-5 mb-4" id="btn-box">
                        <button type="submit" class="border-0 rounded-3 fs-4" value="CADASTRAR">Prosseguir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>
</html>