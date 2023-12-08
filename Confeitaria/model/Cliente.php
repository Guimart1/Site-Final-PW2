<?php

class Cliente{
    public static Cliente $idCliente, $nomeCliente, $sobrenomeCliente, $emailCliente, $senhaCliente, $fotoCliente, $tokenCliente;

    
    public function getIdCliente(){
        return $this->idCliente;
    }
    public function setIdCliente($idCliente){
        $this->idCliente = $idCliente;
    }
    public function setNomeCliente($nomeCliente){
        $this->nomeCliente = $nomeCliente;
    }
    public function getNomeCliente(){
        return $this->nomeCliente;
    }
    public function setSobrenomeCliente($sobrenomeCliente){
        $this->sobrenomeCliente = $sobrenomeCliente;
    }
    public function getSobrenomeCliente(){
        return $this->sobrenomeCliente;
    }
    public function setEmailCliente($emailCliente){
        $this->emailCliente = $emailCliente;
    }
    public function getEmailCliente(){
        return $this->emailCliente;
    }
    public function setSenhaCliente($senhaCliente){
        $this->senhaCliente = $senhaCliente;
    }
    public function getSenhaCliente(){
        return $this->senhaCliente;
    }
    public function setFotoCliente($fotoCliente){
        $this->fotoCliente = $fotoCliente;
    }
    public function getFotoCliente(){
        return $this->fotoCliente;
    }

    public function salvarImagem($novo_nome){
        //a foto vem com a extenção] $_FILES
        if(empty($_FILES['foto']['size']) != 1){
            //pegar as extensão do arquivo
            if($novo_nome ==""){
                $novo_nome = md5(time()).".jpg";
            }
            $diretorio = "../../img/cliente/";
            $nomeCompleto = $diretorio.$novo_nome;

            move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto);
            return $novo_nome;
        }else{
            return $novo_nome;
        }
    }

    public function generateToken(){ 
        $token = bin2hex(random_bytes(16));
        return $token;
    }
    public function setTokenCliente($tokenCliente){
        $this->tokenCliente = $tokenCliente;
    }
    public function getTokenCliente(){
        return $this->tokenCliente;
    }

}
?>