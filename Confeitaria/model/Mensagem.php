<?php
class Mensagem{
    public static Mensagem $msg;


    public function setMensagem($msg){
    $this->msg=$msg;
    }
    public function getMensagem(){
        return $this->msg;
    }

}
?>