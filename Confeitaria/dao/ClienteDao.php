<?php
    require_once '../../model/Conexao.php';
    
    class AdminDao{
        public static function insert($cliente){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbCliente (nomeCliente, sobrenomeCliente, emailCliente, senhaCliente, fotoCliente) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $cliente->getNomeCliente());
            $stmt->bindValue(2, $cliente->getSobrenomeCliente());
            $stmt->bindValue(3, $cliente->getEmailCliente());
            $stmt->bindValue(4, $cliente->getSenhaCliente());
            $stmt->bindValue(5, $cliente->getFotoCliente());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbCliente";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbCLiente WHERE idCliente = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbCliente WHERE idCliente = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $cliente ){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbCliente SET 
            nomeCliente = ?, 
            sobrenomeCliente = ?, 
            emailCliente = ?, 
            senhaCliente = ?, 
            fotoCliente = ?, 
            WHERE idCliente = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $cliente->getNomeCliente());
            $stmt->bindValue(2, $cliente->getSobrenomeCliente());
            $stmt->bindValue(3, $cliente->getCPFCliente());
            $stmt->bindValue(4, $cliente->getNascCliente());
            $stmt->bindValue(5, $cliente->getEmailCliente());
            $stmt->bindValue(6, $cliente->getSenhaCliente());
            $stmt->bindValue(7, $cliente->getFotoCliente());
            $stmt->bindValue(8, $cliente->getToken());
            return $stmt->execute();
        }
        public static function checkCredentials($emailCliente, $senhaCliente){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbCliente WHERE emailCliente = ? and senhaCliente = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $emailCliente);
            $stmt->bindValue(2, $senhaCliente);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

    }
?>