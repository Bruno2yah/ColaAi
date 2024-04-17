<?php

class CategoriaContatoUsuario {
    public $id, $categoria, $idContatoUsuario;

   // Getters e Setters
   public function getId() {
    return $this->id;
}

public function setId($id) {
    $this->id = $id;
}

public function getCategoria() {
    return $this->categoria;
}

public function setCategoria($categoria) {
    $this->categoria = $categoria;
}

public function getIdContatoUsuario() {
    return $this->idContatoUsuario;
}

public function setIdContatoOrganizacaoEvento($idContatoUsuario) {
    $this->idContatoUsuario = $idContatoUsuario;
}
}

?>
