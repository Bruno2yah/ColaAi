<?php
class EventoArquivado {
    public $id, $estadoEvento, $idEvento;

    // Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getEstadoEvento() {
        return $this->estadoEvento;
    }

    public function setEstadoEvento($estadoEvento) {
        $this->estadoEvento = $estadoEvento;
    }
    public function getIdEvento() {
        return $this->idEvento;
    }

    public function setIdEvento($idEvento) {
        $this->idEvento = $idEvento;
    }
}
?>