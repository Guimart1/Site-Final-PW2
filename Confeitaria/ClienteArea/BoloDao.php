<?php
    require_once '../model/Conexao.php';
    
    class BoloDao{
        public static function insert($bolo){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbbolo (nomeBolo, saborBolo, coberturaBolo, decoracaoBolo, descBolo, pesoBolo,especificacaoBolo, valorBolo, fotoBolo) VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $bolo->getNome());
            $stmt->bindValue(2, $bolo->getSabor());
            $stmt->bindValue(3, $bolo->getCobertura());
            $stmt->bindValue(4, $bolo->getDecoracao());
            $stmt->bindValue(5, $bolo->getDesc());
            $stmt->bindValue(6, $bolo->getPeso());
            $stmt->bindValue(7, $bolo->getEspecificacao());
            $stmt->bindValue(8, $bolo->getValor());
            $stmt->bindValue(9, $bolo->getFoto());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbbolo";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbBolo WHERE idBolo = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbBolo WHERE idBolo = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $bolo ){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbBolo SET 
            nomeBolo = ?, 
            saborBolo = ?, 
            coberturaBolo  = ?,
            decoracaoBolo = ?, 
            descBolo = ?, 
            pesoBolo = ?, 
            especificacaoBolo = ?, 
            valorBolo = ? ,
            fotoBolo = ? 
            WHERE idBolo = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $bolo->getNome());
            $stmt->bindValue(2, $bolo->getSabor());
            $stmt->bindValue(3, $bolo->getCobertura());
            $stmt->bindValue(4, $bolo->getDecoracao());
            $stmt->bindValue(5, $bolo->getDesc());
            $stmt->bindValue(6, $bolo->getPeso());
            $stmt->bindValue(7, $bolo->getEspecificacao());
            $stmt->bindValue(8, $bolo->getValor());
            $stmt->bindValue(9, $bolo->getFoto());
            $stmt->bindValue(10, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
    }
?>