<?php
    require_once '../../model/Conexao.php';
    
    class BoloDao{
        public static function insert($bolo){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbBolo (nomeBolo, saborBolo, coberturaBolo, decoracaoBolo, descBolo, pesoBolo,especificacaoBolo, valorBolo, fotoBolo) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $bolo->getNomeBolo());
            $stmt->bindValue(2, $bolo->getSaborBolo());
            $stmt->bindValue(3, $bolo->getCoberturaBolo());
            $stmt->bindValue(4, $bolo->getDecoracaoBolo());
            $stmt->bindValue(5, $bolo->getDescBolo());
            $stmt->bindValue(6, $bolo->getPesoBolo());
            $stmt->bindValue(7, $bolo->getEspecificacaoBolo());
            $stmt->bindValue(8, $bolo->getValorBolo());
            $stmt->bindValue(9, $bolo->getFotoBolo());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbBolo";
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
            valorBolo = ? 
            fotoBolo = ? 
            WHERE idBolo = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $bolo->getNomeBolo());
            $stmt->bindValue(2, $bolo->getSaborBolo());
            $stmt->bindValue(3, $bolo->getCoberturaBolo());
            $stmt->bindValue(4, $bolo->getDecoracaoBolo());
            $stmt->bindValue(5, $bolo->getDescBolo());
            $stmt->bindValue(6, $bolo->getPesoBolo());
            $stmt->bindValue(7, $bolo->getEspecificacaoBolo());
            $stmt->bindValue(8, $bolo->getValorBolo());
            $stmt->bindValue(9, $bolo->getFotoBolo());
            $stmt->bindValue(10, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
    }
?>