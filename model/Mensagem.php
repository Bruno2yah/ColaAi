<?php
class Mensagem {
    public function setMensagem($mensagem, $tipo) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION["mensagem"] = $mensagem;
        $_SESSION["tipo"] = $tipo;
    }

    public function getMensagem() {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!empty($_SESSION["mensagem"])) {
            return [
                "mensagem" => $_SESSION["mensagem"],
                "tipo" => $_SESSION["tipo"]
            ];
        } else {
            return false;
        }
    }

    public function clearMensagem() {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION["mensagem"] = "";
        $_SESSION["tipo"] = "";
    }
}
?>
