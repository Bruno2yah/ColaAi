<?php

class Publicacao {
    public $id, $titulo, $descricao,$link, $imagem, $idEvento;

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

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getLink() {
        return $this->link;
    }

    public function setLink($link) {
        $this->link = $link;
    }

    public function getIdEvento() {
        return $this->idEvento;
    }

    public function setIdEvento($idEvento) {
        $this->idEvento = $idEvento;
    }
    public function getImagem(){
        return $this->imagem;
    }
    public function setImagem($imagem){
        $this-> imagem = $imagem;
    }

    public function salvarImagem($novo_nome){
        if(empty($_FILES['foto']['size']) != 1){
            if($novo_nome == ""){
                $novo_nome = md5(time()). ".jpg";
            }
            $diretorio = "../../img/Organizacao/";
            $nomeCompleto = $diretorio.$novo_nome;
            move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto);
            return $novo_nome;
        }
        else{
            return $novo_nome;
        }
    }
}
?>
