<?php

class AvaliacaoBolo{
    public static AvaliacaoBolo $idDepoimento, $tituloDepoimento, $textoDepoimento, $statusDepoimento, $idCliente, $idBolo;

    
    public function getIdDepoimento(){
        return $this->idDepoimento;
    }
    public function setIdDepoimento($idDepoimento){
        $this->idDepoimento = $idDepoimento;
    }
    public function setTituloDepoimento($tituloDepoimento){
        $this->tituloDepoimento = $tituloDepoimento;
    }
    public function getTituloDepoimento(){
        return $this->tituloDepoimento;
    }
    public function setTextoDepoimento($textoDepoimento){
        $this->textoDepoimento = $textoDepoimento;
    }
    public function getTextoDepoimento(){
        return $this->textoDepoimento;
    }
    public function setStatusDepoimento($statusDepoimento){
        $this->statusDepoimento = $statusDepoimento;
    }
    public function getStatusDepoimento(){
        return $this->statusDepoimento;
    }
    public function getIdCliente(){
        return $this->idCliente;
    }
    public function setIdCliente($idCliente){
        $this->idCliente = $idCliente;
    }
    public function getIdBolo(){
        return $this->idBolo;
    }
    public function setIdBolo($idBolo){
        $this->idBolo = $idBolo;
    }
}
?>