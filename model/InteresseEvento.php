<?php
class InteresseEvento {
    public $id, $interesseEvento, $idEvento;

    // Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getInteresseEvento() {
        return $this->interesseEvento;
    }

    public function setInteresseEvento($interesseEvento) {
        $this->interesseEvento = $interesseEvento;
    }
    public function getIdEvento() {
        return $this->idEvento;
    }

    public function setIdEvento($idEvento) {
        $this->idEvento = $idEvento;
    }
}
?>