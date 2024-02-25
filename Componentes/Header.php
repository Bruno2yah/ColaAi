<Header class = "w-100" style = "height: 10vh; background-color: #fff4c6">
    <div class = "row w-100 h-100">
        <div class = "col-2 h-100 justify-content-center align-items-center d-flex pt-1">
            <img src="../../img/Admin/Logo.png" class = "img-fluid w-75 h-100"  alt="">
        </div>
        <div class = "col-8"></div>
        <div class = "col-2 h-100 justify-content-center align-items-center d-flex">
            <div class="dropdown text-end">
                <a href="#" class="text-white d-block link-body-emphasis text-decoration-none "
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../img/Admin/<?=$authUser['imagemAdmin']? $authUser['imagemAdmin']: 'userPadrao.jpg';?>" alt="foto user" width="50" height="50" class="rounded-circle">
                <i class="bi bi-chevron-down" style = "color: black;"></i>
                </a>
                <ul class="dropdown-menu text-small">
                <a href="#" class="dropdown-item"><?=$authUser['nomeAdmin'];?></a>
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../Login/">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</Header>