<?php

class AnaliseOrganizacaoEvento {
    public $id, $situacao, $idAdmin,$idOrganizacaoEvento;

    // Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getSituacao() {
        return $this->situacao;
    }

    public function setSituacao($situacao) {
        $this->situacao = $situacao;
    }

    public function getIdAdmin() {
        return $this->idAdmin;
    }

    public function setIdAdmin($idAdmin) {
        $this->idAdmin = $idAdmin;
    }

    public function getIdOrganizacaoEvento() {
        return $this->idOrganizacaoEvento;
    }

    public function setIdOrganizacaoEvento($idOrganizacaoEvento) {
        $this->idOrganizacaoEvento = $idOrganizacaoEvento;
    }
}

?>
