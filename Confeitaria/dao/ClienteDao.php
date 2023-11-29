<?php
    require_once '../../model/Conexao.php';
    
    class ClienteDao{
        public static function insert($cliente){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbCliente (nomeCliente, sobrenomeCliente, emailCliente, senhaCliente, fotoCliente, tokenCliente) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $cliente->getNomeCliente());
            $stmt->bindValue(2, $cliente->getSobrenomeCliente());
            $stmt->bindValue(3, $cliente->getEmailCliente());
            $stmt->bindValue(4, $cliente->getSenhaCliente());
            $stmt->bindValue(5, $cliente->getFotoCliente());
            $stmt->bindValue(6, $cliente->getTokenCliente());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbCliente";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($idCliente){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbCLiente WHERE idCliente = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $idCliente);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($idCliente){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbCliente WHERE idCliente = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $idCliente);
            return  $stmt->execute();
        }
        public static function update($idCliente, $cliente ){
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
            $stmt->bindValue(3, $cliente->getEmailCliente());
            $stmt->bindValue(4, $cliente->getSenhaCliente());
            $stmt->bindValue(5, $cliente->getFotoCliente());
            $stmt->bindValue(6, $cliente->getTokenCliente());
            $stmt->bindValue(7, $idCliente);
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