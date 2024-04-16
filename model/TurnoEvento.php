<?php
class TurnoEvento{
    public $id, $periodoEvento, $idEvento;

    // Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPeriodoEvento() {
        return $this->periodoEvento;
    }

    public function setPeriodoEvento($periodoEvento) {
        $this->periodoEvento = $periodoEvento;
    }
    public function getIdEvento() {
        return $this->idEvento;
    }

    public function setIdEvento($idEvento) {
        $this->idEvento = $idEvento;
    }
}
?>