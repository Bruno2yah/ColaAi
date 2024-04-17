<?php
class Evento {
    public $id, $nome, $cep, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $data, $faixaEtaria,$periodoEvento,$valor, $desc, $idOrganizacaoEvento, $imagemEvento;

    // Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getUf() {
        return $this->uf;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }
    public function getFaixaEtaria() {
        return $this->faixaEtaria;
    }
    public function setFaixaEtaria($faixaEtaria) {
        $this->faixaEtaria = $faixaEtaria;
    }
    public function getPeriodoEvento() {
        return $this->periodoEvento;
    }

    public function setPeriodoEvento($periodoEvento) {
        $this->periodoEvento = $periodoEvento;
    }
    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
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

    public function getImagemEvento() {
        return $this->imagemEvento;
    }

    public function setImagemEvento($imagemEvento) {
        $this->imagemEvento = $imagemEvento;
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