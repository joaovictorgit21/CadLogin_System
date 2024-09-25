<?php

require_once "model/Database.php";

    class User {
       
        public static function findByEmail($email) {
            $conn = Database::getConnection();

            $stmt = $conn ->prepare("SELECT * FROM usuarios WHERE email = :email");
            $stmt->execute(["email" => $email]);
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        public static function find($id) {
            $conn = Database::getConnection();

            $stmt = $conn ->prepare("SELECT * FROM usuarios WHERE id = :id");
            $stmt->execute(["id" => $id]);
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public static function create($data) {
            $conn = Database::getConnection();
            $stmt = $conn->prepare("INSERT INTO usuarios(name, email, senha, perfil) VALUES (:name, :email, :password, :perfil)");
            $stmt->execute($data);
        }
    }
?>