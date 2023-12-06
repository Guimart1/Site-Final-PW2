<?php
    require_once(__DIR__ . '../../model/Conexao.php');

    class AvaliacaoBoloDao{
        public static function insert($avaliacaoBolo){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbAvaliacaoBolo (tituloDepoimento, textoDepoimento, statusDepoimento, idCliente, idBolo) VALUES (?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $avaliacaoBolo->getTituloDepoimento());
            $stmt->bindValue(2, $avaliacaoBolo->getTextoDepoimento());
            $stmt->bindValue(3, $avaliacaoBolo->getStatusDepoimento());
            $stmt->bindValue(4, $avaliacaoBolo->getIdCliente());
            $stmt->bindValue(5, $avaliacaoBolo->getIdBolo());
            $stmt->execute();
        }
        public static function selectBoloId($id){
            $conexao = Conexao::conectar();
            $query = "SELECT  tbAvaliacaoBolo.tituloDepoimento, tbAvaliacaoBolo.textoDepoimento ,tbCliente.nomeCliente, tbCliente.fotoCliente from tbAvaliacaoBolo 
            INNER JOIN tbCliente
            ON tbAvaliacaoBolo.idCliente = tbCliente.idCliente
            where tbAvaliacaoBolo.idBolo = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbAvaliacaoBolo";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($idDepoimento){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbAvaliacaoBolo WHERE idDepoimento = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $idDepoimento);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($idDepoimento){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbAvaliacaoBolo WHERE idDepoimento = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $idDepoimento);
            return  $stmt->execute();
        }
        public static function update($idDepoimento, $avaliacaoBolo){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbAvaliacaoBolo SET 
            tituloDepoimento = ?, 
            textoDepoimento = ?,
            statusDepoimento = ?,
            idCliente = ?, 
            idBolo = ?
            WHERE idDepoimento = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $avaliacaoBolo->getTituloDepoimento());
            $stmt->bindValue(2, $avaliacaoBolo->getTextoDepoimento());
            $stmt->bindValue(3, $avaliacaoBolo->getStatusDepoimento());
            $stmt->bindValue(4, $avaliacaoBolo->getIdCliente());
            $stmt->bindValue(4, $avaliacaoBolo->getIdBolo());
            $stmt->bindValue(5, $idDepoimento); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
    }
?>