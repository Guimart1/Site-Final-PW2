<?php

class Admin{
    public static Admin $id, $nome, $sobrenome, $dataNasc, $email, $senha, $foto, $cpf, $token;

    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function setNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }
    public function getNasc(){
        return $this->dataNasc;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function getSenha(){
        return $this->senha;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function setFoto($foto){
        $this->foto = $foto;
    }
    public function getFoto(){
        return $this->foto;
    }
    public function generateToken(){ 
        $token = bin2hex(random_bytes(16));
        return $token;
    }
    public function setToken($token){
        $this->token = $token;
    }
    public function getToken(){
        return $this->token;
    }

    public  function salvarImagem($novo_nome){
        //a foto vem com a extenção] $_FILES
        if(empty($_FILES['foto']['size']) != 1){
            //pegar as extensão do arquivo
            if($novo_nome ==""){
                $novo_nome = md5(time()).".jpg";
            }
            $diretorio = "../../img/user/";
            $nomeCompleto = $diretorio.$novo_nome;

            move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto);
            return $novo_nome;
        }else{
            return $novo_nome;
        }
    }


}
?>