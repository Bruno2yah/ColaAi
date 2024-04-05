<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessos Cola Aí</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleAcesso.css">
</head>
<body>
    <div class="container-fluid vw-100 vh-100" id="content-screen">
        <div class="row vw-100 h-100">
            <div class="col-md-4 d-flex flex-column justify-content-center z-1" id="painel">
                <div class="text-box ps-md-3 p-2">
                    <h1 class="fw-bold" id="title-acessar">
                        <span id="c-bem">Bem </span><span id="c-vin">vin</span><span id="c-do">do</span><span id="c-a">(a)</span>
                    </h1>
                    <p class="text-acessar fs-4 lh-sm">Faça login com a sua conta e desfrute  de todos os benefícios do Cola Aí.</p>
                </div>
                <div class="btn-box w-100 justify-content-center d-flex flex-column mt-5">
                    <div class="btn-org row w-100 justify-content-center mb-3">
                        <a href="./Login/loginEmail.php" class="d-flex justify-content-center">
                            <button class="border border-0 rounded-4 fs-3 d-flex align-items-center justify-content-evenly col-9">
                                <img src="../img/Organização/e-mail.png" alt="" id="icon-email">
                                <p class="m-0 fs-4">Entrar com o e-mail</p>
                                <div class=""></div>    
                            </button>
                        </a>
                    </div>
                    <div class="btn-adm row w-100 justify-content-center mt-4 mb-md-0 mb-5">
                        <a href="./Login/loginTel.html" class="d-flex justify-content-center">
                            <button class="border border-0 rounded-4 fs-3 d-flex align-items-center justify-content-evenly col-9">
                                <img src="../img/Organização/icon-tel.png" alt="" id="icon-tel">
                                <p class="m-0 fs-4">Entrar com o telefone</p>
                                <div class=""></div>
                            </button>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-md-8 d-flex flex-column justify-content-between " id="logo-box">
                <div class=" h-100 d-flex justify-content-center align-items-center flex-column mb-5">
                    <img src="../img/Acesso/Cola AI logo.png" alt="" id="cola-ai" class="col-7">
                    <h2 id="title-org">Organização</h2>
                    <div class="btn-org row w-100 justify-content-center">
                        <a href="./Cadastro/index.html" class="d-flex justify-content-center">
                            <button class="border border-0 rounded-4 fs-3 d-flex align-items-center justify-content-evenly col-md-4 mt-5" id="btn-cadastro">
                                <img src="../img/Acesso/ORG icon.png" alt="" class="icon-org">
                                <p class="m-0 fs-2">Cadastre-se</p>   
                                <div class=""></div>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> 