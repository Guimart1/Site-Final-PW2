<?php

class Bolo{
    public static Bolo $idBolo, $nome, $sabor, $cobertura, $decoracao, $desc, $peso, $especificacao, $valor, $fotoBolo;

    
    public function getIdBolo(){
        return $this->idBolo;
    }
    public function setId($idBolo){
        $this->idBolo = $idBolo;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setSabor($sabor){
        $this->sabor = $sabor;
    }
    public function getSabor(){
        return $this->sabor;
    }
    public function setCobertura($cobertura){
        $this->cobertura = $cobertura;
    }
    public function getCobertura(){
        return $this->cobertura;
    }
    public function setDecoracao($decoracao){
        $this->decoracao = $decoracao;
    }
    public function getDecoracao(){
        return $this->decoracao;
    }
    public function setDesc($desc){
        $this->desc = $desc;
    }
    public function getDesc(){
        return $this->desc;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setEspecificacao($especificacao){
        $this->especificacao = $especificacao;
    }
    public function getEspecificacao(){
        return $this->especificacao;
    }
    public function setValor($valor){
        $this->valor = $valor;
    }
    public function getValor(){
        return $this->valor;
    }
    public function setFotoBolo($fotoBolo){
        $this->fotoBolo = $fotoBolo;
    }
    public function getFoto(){
        return $this->fotoBolo;
    }

    public  function salvarImagem($novo_nome){
        //a foto vem com a extenção] $_FILES
        if(empty($_FILES['foto']['size']) != 1){
            //pegar as extensão do arquivo
            if($novo_nome ==""){
                $novo_nome = md5(time()).".jpg";
            }
            $diretorio = "../../img/bolos/";
            $nomeCompleto = $diretorio.$novo_nome;

            move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto);
            return $novo_nome;
        }else{
            return $novo_nome;
        }
    }


}
?>