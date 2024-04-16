<?php
class PublicacaoArquivado {
    public $id, $estadoPublicacao, $idEvento;

    // Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getEstadoPublicacao() {
        return $this->estadoPublicacao;
    }

    public function setEstadoEvento($estadoPublicacao) {
        $this->estadoPublicacao = $estadoPublicacao;
    }
    public function getIdEvento() {
        return $this->idEvento;
    }

    public function setIdEvento($idEvento) {
        $this->idEvento = $idEvento;
    }
}
?>