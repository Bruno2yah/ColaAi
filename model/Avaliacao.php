<?php 
    class Avaliacao {
        public $id, $titulo, $desc, $idOrganizacaoEvento; 
    
        
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
    
        public function getIdOrganizacaoEvento() {
            return $this->idOrganizacaoEvento;
        }
    
        public function setIdOrganizacaoEvento($idOrganizacaoEvento) {
            $this->idOrganizacaoEvento = $idOrganizacaoEvento;
        }
    }
    




?>