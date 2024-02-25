<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
    <link rel="stylesheet" href="../css/styleLogin.css">
</head>

<body class="container d-flex justify-content-center align-items-center">
    <main class="w-100 h-75 d-flex flex-row row">
        <div class="col-md-6 col-12 h-100 justify-content-center align-items-center d-flex flex-column">
            <img src="../img/Login/Logo.png" class="img-fluid logo" alt="">
            <span>Administrador</span>
        </div>
        <div class="col-md-6 col-12 h-100 justify-content-center align-items-center d-flex flex-row">
            <div class="box p-4 d-flex flex-column align-items-center justify-content-center">

                <form action="valida_login.php" method="post" >
                    <div class="col-12 d-flex justify-content-center mb-3">
                        <img src="../img/Login/login.png" class="img-fluid imageLogin" alt="">
                    </div>
                    <div class="col-12 d-flex flex-column justify-content-center mb-4">
                        <label for="email" class="mb-1">E-mail:</label>
                        <input type="email" class="#" id="email" name="email" aria-describedby="emailHelp" placeholder="name@example.com" required>
                    </div>
                    <div class="col-12 d-flex flex-column justify-content-center mb-4">
                        <label for="email" class="mb-1">Senha:</label>
                        <div class="orgSenha d-flex">
                            <input type="password" name="senha" id="password" class="inputSenha" placeholder="senha" required>
                            <i class="bi bi-eye" id="btnSenha" onclick="MostrarSenha()"></i>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column justify-content-end align-items-end">
                        <button class="me-2" type="submit">Entrar</button>
                    </div>
                    <?php
                    if (isset($_GET['login']) && $_GET['login'] == "erro") {
                    ?>
                        <div class="text-danger">
                            Usuário ou senha Inválido(s)
                        </div>

                    <?php
                    }

                    ?>
                    <?php
                    if (isset($_GET['login']) && $_GET['login'] == "erro2") {
                    ?>
                        <div class="text-danger">
                            Usuário não fez o login!
                        </div>

                    <?php
                    }

                    ?>
                </form>
            </div>
        </div>
    </main>
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>