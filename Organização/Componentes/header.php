<div class="header d-flex justify-content-between align-items-center">
    <img src="../../img/Login/Cola AI logo.png" class="ms-2" alt="">
    <div class="perfil-box d-flex justify-content-center align-items-center">
    <a href="#" class="text-white d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="../../img/Organizacao/<?=$authUserOrg['imagemOrganizacaoEvento']? $authUserOrg['imagemOrganizacaoEvento']: 'userPadrao.png';?>" width="50" height="50" alt="" class="rounded-circle" id="icon-pfp">
    </a>
    <ul class="dropdown-menu text-small">
          <li><a class="dropdown-item" href="">Perfil</a></li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="logoff.php">Sair</a></li>
        </ul>
    </div>
</div>