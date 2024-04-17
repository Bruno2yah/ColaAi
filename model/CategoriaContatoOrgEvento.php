<?php

class CategoriaContatoOrgEvento {
    public $id, $categoria, $idContatoOrganizacaoEvento;

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

public function getIdContatoOrganizacaoEvento() {
    return $this->idContatoOrganizacaoEvento;
}

public function setIdContatoOrganizacaoEvento($idContatoOrganizacaoEvento) {
    $this->idContatoOrganizacaoEvento = $idContatoOrganizacaoEvento;
}
}

?>
