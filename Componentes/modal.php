<?php
require_once(__DIR__ ."../../model/Mensagem.php");
  $mensagem = new Mensagem();
  $flashMessage = $mensagem->getMensagem();
  if(!empty($flashMessage["mensagem"])) {
      $mensagem->clearMensagem();
  }
?>

<?php if(!empty($flashMessage["mensagem"])){ ?>
<div class="modal fade" id="modalPadrao" role="dialog">
  <div class=" modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header <?= $flashMessage["tipo"] ?>  text-white">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cherry Estética</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body  ">
        <p><?= $flashMessage["mensagem"]?></p>
        <div class=" text-end">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">ok</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>