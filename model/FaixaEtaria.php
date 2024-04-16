<?php

class FaixaEtaria {
    public $id, $idade, $idEvento;

   // Getters
   public function getId() {
    return $this->id;
}

public function getIdade() {
    return $this->idade;
}

public function getIdEvento() {
    return $this->idEvento;
}

// Setters
public function setId($id) {
    $this->id = $id;
}

public function setIdade($idade) {
    $this->idade = $idade;
}

public function setIdEvento($idEvento) {
    $this->idEvento = $idEvento;
}
}

?>
