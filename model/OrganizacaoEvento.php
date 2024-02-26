<?php 
    class OrganizacaoEvento{
        public $id, $nome, $cnpj, $cep, $log, $bairro, $num, $cidade, $uf, $email, $senha, $link, $tel, $imagem;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this-> id = $id;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this-> nome = $nome;
        }

        public function getCnpj(){
            return $this->cnpj;
        }
        public function setCnpj($cnpj){
            $this-> cnpj = $cnpj;
        }
        public function getCep(){
            return $this->cep;
        }
        public function setCep($cep){
            $this-> cep = $cep;
        }
        public function getLog(){
            return $this->log;
        }
        public function setLog($log){
            $this-> log = $log;
        }
        public function getBairro(){
            return $this->bairro;
        }
        public function setbairro($bairro){
            $this-> bairro = $bairro;
        }
        public function getNum(){
            return $this->num;
        }
        public function setNum($num){
            $this-> num = $num;
        }
        public function getCidade(){
            return $this->cidade;
        }
        public function setCidade($cidade){
            $this-> cidade = $cidade;
        }
        public function getUf(){
            return $this->uf;
        }
        public function setUf($uf){
            $this-> uf = $uf;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this-> email = $email;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this-> senha = $senha;
        }
        public function getLink(){
            return $this->link;
        }
        public function setLink($link){
            $this-> link = $link;
        } 
        public function getTel(){
            return $this->tel;
        }
        public function setTel($tel){
            $this-> tel = $tel;
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