<?php

class ContatoUsuario {
    public $id, $titulo, $desc, $idUsuario;

   // Getters e Setters
   public function getId() {
    return $this->id;
}

public function setId($id) {
    $this->id = $id;
}

public function getTitulo() {
    return $this->titulo;
}

public function setTitulo($titulo) {
    $this->titulo = $titulo;
}

public function getDesc() {
    return $this->desc;
}

public function setDesc($desc) {
    $this->desc = $desc;
}

public function getIdUsuario() {
    return $this->idUsuario;
}

public function setIdUsuario($idUsuario) {
    $this->idUsuario = $idUsuario;
}
}

?>
