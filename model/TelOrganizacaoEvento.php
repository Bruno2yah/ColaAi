<?php 
    class TelOrganizacaoEvento{
        public $id, $numTel, $idOrganizacaoEvento;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this-> id = $id;
        }

        public function getNumTel(){
            return $this->numTel;
        }
        public function setNumTel($numTel){
            $this-> numTel = $numTel;
        }

        public function getIdOrganizacaoEvento(){
            return $this->idOrganizacaoEvento;
        }
        public function setIdOrganizacaoEvento($idOrganizacaoEvento){
            $this-> idOrganizacaoEvento = $idOrganizacaoEvento;
        }  
        
    }

?>