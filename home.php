<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/homeStyle.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/Avaliacoes.css">  

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@339&display=swap" rel="stylesheet">
    
    <title>Magma - home</title>
</head>
<body style="background-color: white; padding: 0;">
    <?php
        require_once "./componentes/nav.php";
    ?>
    <div class="row-md-6 vh-100 d-flex justify-content-center d-flex align-items-center">
      <div class="cover-Image d-flex w-100 h-100 p-3 flex-column mx-auto d-flex justify-content-center d-flex align-items-center"></div>
      <div class="cover-container d-flex w-100 h-100 p-3 flex-column mx-auto d-flex justify-content-center d-flex align-items-center">
        <img src="./img/magmaText.png" class="magmaImg m-5">
        <main class="px-4 row d-flex justify-content-between align-items-center" style="padding-top: 300px">
          <div class="col-md-3 col-sm-3 tituloCover">
            <p class="text-start m-1" style="color: black; font-size: 7vh; line-height: 1;font-weight: bold; font-family: 'Josefin Sans', sans-serif;">Sites e aplicativos sob medida</p>
            <p class="lead">
              <p href="#" class="btn btn-lg btn-dark fw-bold border-white bg-orange" style="width: 300px; height: 60px; border-radius: 45px; font-size: 35px; font-family: 'Josefin Sans', sans-serif;">Saiba Mais</p>
            </p>
          </div>
          <div class="col-md-6 col-sm-6 d-flex justify-content-end align-items-end">
              <img src="./img/Person.png" alt="Man with notebook" style="width: 600px; max-width: 100%; height: auto; ">
          </div>
        </main>
      </div>
    </div>
    <div class="d-flex justify-content-center d-flex align-items-center">
      <div class="cover-2 d-flex w-100 h-100 p-3 flex-column mx-auto d-flex justify-content-center d-flex align-items-center">
      <main class="px-3 p-5">
              <div class="row d-flex justify-content-center d-flex align-items-center">
                  <div class="col-xs-4 col-sm-4 col-md-4">
                      <p class="lead text-center m-4" style="color: black; font-size: 6vh; font-weight: bold; font-family: 'Josefin Sans', sans-serif;">Desenvolvemos para todas as plataformas</p>
                  </div>
                  <div class="col-xs-7 col-sm-7 col-md-7">
                    <img src="./img/Platforms.png" alt="plataformas" style="width: 900px; max-width: 100%; height: auto;">
                  </div>
              </div>
          </main>
      </div>
    </div>
    <div class="d-flex justify-content-center d-flex align-items-center">
      <div class="cover-2 d-flex w-100 h-100 flex-column mx-auto d-flex justify-content-center d-flex align-items-center">
      <img src="./img/detailLeft.png" class="detailLeft">
      <img src="./img/detailRight.png" class="detailRight">
        <main class="px-3 p-5">
            <p class="text-center" style="font-size: 50px; font-family: 'Josefin Sans', sans-serif; font-weight: bold;">Quem Somos</p>
            <div class="row d-flex justify-content-center d-flex align-items-center">
                <div class="col-xs-7 col-sm-7 col-md-7">
                    <p class="lead text-center m-4" style="color: black; font-size: 2.5vh; font-weight: normal; font-family: 'Josefin Sans', sans-serif;">A empresa Magma é voltada ao setor de técnologia da informação, sendo especializada no desenvolvimento de 
                    sistemas web, apps e software sob medida para empresas de pequeno e médio porte.</p>
                </div>
            </div>
            <img src="./img/linhaTempo.png" alt="plataformas" style="width: 1200px; max-width: 100%; height: auto;">
        </main>
      </div>
    </div>
    <div class="d-flex justify-content-center d-flex align-items-center">
      <div class="cover-3 d-flex w-100 h-100 flex-column mx-auto d-flex justify-content-center d-flex align-items-center">
        <main class="px-5 p-5">
            <p class="text-center" style="font-size: 50px; font-family: 'Josefin Sans', sans-serif; font-weight: bold;">Nossos Projetos</p>
            <div class="row d-flex justify-content-center d-flex align-items-center">
                <div class="col-xs-3 col-sm-3 col-md-3">
                  <img src="./img/projeto.png" alt="plataformas" style="width: 800px; max-width: 100%; height: auto; padding-top: 35px;">
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                  <img src="./img/projeto.png" alt="plataformas" style="width: 800px; max-width: 100%; height: auto; padding-top: 35px;">
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                  <img src="./img/projeto.png" alt="plataformas" style="width: 800px; max-width: 100%; height: auto; padding-top: 35px;">
                </div>  
            </div>
        </main>
      </div>
    </div>
    <div class="d-flex justify-content-center d-flex align-items-center">
      <div class="cover-2 d-flex w-100 h-100 flex-column mx-auto d-flex justify-content-center d-flex align-items-center">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3" style="padding: 30px; font-family: 'Josefin Sans', sans-serif; font-weight: bold; font-size: 50px">Equipe</h1>  
        <div id="carouselExampleInterval" class="carousel carousel-dark slide w-100 h-100" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                        <img class="img-fluid" src="./pessoas/bruna.png">
                        </div>
                        <div class="team-content">
                        <h3 class="name">Bruna Luiza</h3>
                        <h4 class="title">Desenvolvedora Front-end</h4>
                        </div>
                        <ul class="social">
                        <li><a href="#" class="fa fa-instagram" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                    </div>
                    </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                        <img class="img-fluid" src="./pessoas/bruno.png">
                        </div>
                        <div class="team-content">
                        <h3 class="name">Bruno Geanini</h3>
                        <h4 class="title">Desenvolvedor Front-end</h4>
                        </div>
                        <ul class="social">
                        <li><a href="#" class="fa fa-instagram" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                    </div>
                    </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                        <img class="img-fluid" src="./pessoas/carlos.png">
                        </div>
                        <div class="team-content">
                        <h3 class="name">Carlos Eduardo</h3>
                        <h4 class="title">DBA</h4>
                        </div>
                        <ul class="social">
                        <li><a href="#" class="fa fa-instagram" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                    </div>
                    </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                        <img class="img-fluid" src="./pessoas/guilherme.png">
                        </div>
                        <div class="team-content">
                        <h3 class="name">Guilherme Martins</h3>
                        <h4 class="title">Desenvolvedor</h4>
                        </div>
                        <ul class="social">
                        <li><a href="#" class="fa fa-instagram" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                        <img class="img-fluid" src="./pessoas/murilo.png">
                        </div>
                        <div class="team-content">
                        <h3 class="name">Murilo Dholfy</h3>
                        <h4 class="title">Desenvolvedor Front-end</h4>
                        </div>
                        <ul class="social">
                        <li><a href="#" class="fa fa-instagram" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                    </div>
                    </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                        <img class="img-fluid" src="./pessoas/nycolly.png">
                        </div>
                        <div class="team-content">
                        <h3 class="name">Nycolly Pereira</h3>
                        <h4 class="title">DBA & Designer</h4>
                        </div>
                        <ul class="social">
                        <li><a href="#" class="fa fa-instagram" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                    </div>
                    </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                        <img class="img-fluid" src="./pessoas/otavio.png">
                        </div>
                        <div class="team-content">
                        <h3 class="name">Otávio Ferreira</h3>
                        <h4 class="title">Desenvolvedor Front-end</h4>
                        </div>
                        <ul class="social">
                        <li><a href="#" class="fa fa-instagram" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                    </div>
                    </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                      <div class="picture">
                        <img class="img-fluid" src="./pessoas/raphael.png">
                        </div>
                        <div class="team-content">
                        <h3 class="name">Raphael Pereira</h3>
                        <h4 class="title">Desenvolvedor Back-end</h4>
                        </div>
                        <ul class="social">
                        <li><a href="#" class="fa fa-instagram" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="carousel-item">
                <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                      <div class="picture">
                        <img class="img-fluid" src="./pessoas/ruan.png">
                        </div>
                        <div class="team-content">
                        <h3 class="name">Ruan Santos</h3>
                        <h4 class="title">Desenvolvedor Front-End</h4>
                        </div>
                        <ul class="social">
                        <li><a href="#" class="fa fa-instagram" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                    </div>
                    </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid" src="./pessoas/stephanie.png">
                        </div>
                        <div class="team-content">
                        <h3 class="name">Stephanie Medeiros</h3>
                        <h4 class="title">Gerente de Projetos</h4>
                        </div>
                        <ul class="social">
                        <li><a href="#" class="fa fa-instagram" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                    </div>
                    </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                      <div class="picture">
                        <img class="img-fluid" src="./pessoas/victor.jpg">
                        </div>
                        <div class="team-content">
                        <h3 class="name">Victor David</h3>
                        <h4 class="title">DBA</h4>
                        </div>
                        <ul class="social">
                        <li><a href="#" class="fa fa-instagram" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                        <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev" style="z-index: 5;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next" style="z-index: 5;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <img src="./img/detailLeft2.png" class="detailLeft2" style="width: 200px; max-width: 40%; height: auto; ">
        <main class="px-4">
            <p class="text-center" style="font-size: 50px; font-family: 'Josefin Sans', sans-serif; font-weight: bold; padding-top: 60px">Fale Conosco</p>
            <div class="row d-flex justify-content-center d-flex align-items-center">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <form class="row">
                      <div class="col-6 mb-3">
                        <p class="text-start" style="font-size: 30px; font-family: 'Josefin Sans', sans-serif; font-weight: bold; margin: 0px 0px 0px;">Nome:<p>
                        <input type="name" class="form-control" id="exampleFormControlInput1" style="border-width: 3px; border-color: black; border-radius: 15px; height: 5vh; font-size: 20px; box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                      </div>
                      <div class="col-6 mb-3">
                        <p class="text-start" style="font-size: 30px; font-family: 'Josefin Sans', sans-serif; font-weight: bold; margin: 0px 0px 0px">Sobrenome:<p>
                        <input type="name" class="form-control" id="exampleFormControlInput1" style="border-width: 3px; border-color: black; border-radius: 15px; height: 5vh; font-size: 20px; box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                      </div>
                      <div class="col-12 mb-3">
                        <p class="text-start" style="font-size: 30px; font-family: 'Josefin Sans', sans-serif; font-weight: bold; margin: 0px 0px 0px">Email:<p>
                        <input type="email" class="form-control" id="exampleFormControlInput1" style="border-width: 3px; border-color: black; border-radius: 15px; height: 5vh; font-size: 20px; box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                      </div>
                      <div class="mb-3">
                        <p class="text-start" style="font-size: 30px; font-family: 'Josefin Sans', sans-serif; font-weight: bold; margin: 0px 0px 0px">Mensagem:</p>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  style="border-width: 3px; border-color: black; border-radius: 15px; height: 100px; font-size: 20px; box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></textarea>
                      </div>
                      <p class="lead">
                        <p href="#" class="btn btn-lg btn-dark fw-bold border-white bg-orange" style="width: 150px; height: 50px; border-radius: 45px; font-size: 30px; font-family: 'Josefin Sans', sans-serif; margin-left: 10px">Enviar</p>
                      </p>
                    </form>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <img src="./img/person2.png" alt="plataformas" style="width: 400px; max-width: 60%; height: auto; bottom:0;">
                  <img src="./img/detailRight3.png" class="detailRight2" style="width: 600px; max-width: 70%; height: auto;">
                </div>
            </div>
        </main>
      </div>
    </div>
    <?php
      require_once "./componentes/footer.php";
    ?>
  </body>
</html>