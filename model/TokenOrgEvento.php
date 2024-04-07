<?php 
    class TokenOrgEvento{
        public $id, $valor, $idOrgEvento;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this-> id = $id;
        }

        public function getValor(){
            return $this->valor;
        }
        public function setValor($valor){
            $this-> valor = $valor;
        }

        public function getIdOrgoEvento(){
            return $this->idOrgEvento;
        }
        public function setIdOrgEvento($idOrgEvento){
            $this-> idOrgEvento = $idOrgEvento;
        } 
        public function generateToken(){
            return bin2hex((random_bytes(6)));
        } 
    }

?>