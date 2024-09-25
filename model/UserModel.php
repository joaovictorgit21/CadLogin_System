<?php

require_once "model/Database.php";

    class UserModel {
       
        public static function findByEmail($email) {
            $conn = DatabaseModel::getConnection();

            $stmt = $conn ->prepare("SELECT * FROM usuarios WHERE email = :email");
            $stmt->execute(["email" => $email]);
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        public static function find($id) {
            $conn = DatabaseModel::getConnection();

            $stmt = $conn ->prepare("SELECT * FROM usuarios WHERE id = :id");
            $stmt->execute(["id" => $id]);
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public static function create($data) {
            $conn = DatabaseModel::getConnection();
            $stmt = $conn->prepare("INSERT INTO usuarios(name, email, senha, perfil) VALUES (:name, :email, :password, :perfil)");
            $stmt->execute($data);
        }
    }
?>