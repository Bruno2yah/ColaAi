<style>
    .navcs{
        background-color: #111;
        width: 100%;
    }

    ul{
        color: #767171;
    }

    li{
        font-size: 20pt;
        color: #767171;
    }

    .nav-link{
        color: #767171;
        transition: 0.5s;
    }

    .nav-link:hover{
        color: #FE5720;
    }

    @media (max-width: 991px){
        .nav-item{
        border-bottom: 1px solid #FE5720;
    }
    }
    @media (min-width: 992px){
        .nvs{
          margin-left: 5%;
    }
    }
</style>

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-0">
      <div class="container-fluid navcs">
        <a class="navbar-brand" href="#">
          <img src="./logo.png" class="img-fluid" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nvs" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto" style="color: #767171;">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Equipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>