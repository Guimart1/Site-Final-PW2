<?php
    require_once '../../model/Conexao.php';
    
    class AdminDao{
        public static function insert($admin){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbAdm (nomeAdm, sobrenomeAdm, dataNascAdm, cpfAdm, emailAdm, senhaAdm, fotoAdm, tokenAdm) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $admin->getNome());
            $stmt->bindValue(2, $admin->getSobrenome());
            $stmt->bindValue(3, $admin->getNasc());
            $stmt->bindValue(4, $admin->getCpf());
            $stmt->bindValue(5, $admin->getEmail());
            $stmt->bindValue(6, $admin->getSenha());
            $stmt->bindValue(7, $admin->getFoto());
            $stmt->bindValue(8, $admin->getToken());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbAdm";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($idAdm){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbAdm WHERE idAdm = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $idAdm);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($idAdm){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbAdm WHERE idAdm = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $idAdm);
            return  $stmt->execute();
        }
        public static function update($idAdm, $admin ){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbAdm SET 
            nomeAdm = ?, 
            sobrenomeAdm = ?, 
            cpfAdm  = ?,
            dataNascAdm = ?, 
            emailAdm = ?, 
            senhaAdm = ?, 
            fotoAdm = ?, 
            tokenAdm = ? 
            WHERE idAdm = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $admin->getNome());
            $stmt->bindValue(2, $admin->getSobrenome());
            $stmt->bindValue(3, $admin->getCPF());
            $stmt->bindValue(4, $admin->getNasc());
            $stmt->bindValue(5, $admin->getEmail());
            $stmt->bindValue(6, $admin->getSenha());
            $stmt->bindValue(7, $admin->getFoto());
            $stmt->bindValue(8, $admin->getToken());
            $stmt->bindValue(9, $idAdm); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
        public static function checkCredentials($emailAdm, $senhaAdm){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbAdm WHERE emailAdm = ? and senhaAdm = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $emailAdm);
            $stmt->bindValue(2, $senhaAdm);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

    }
?>