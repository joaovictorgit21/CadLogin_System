<?php

require_once 'model/UserModel.php';
    class AuthController {
        public function loginUser() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $user = UserModel::findByEmail($email);

                if ($user && password_verify($password, $user['password'])) {
                    session_start();

                    $_SESSION['usuario_id'] = $user['id'];
                    $_SESSION['perfil'] = $user['perfil'];
                    header('Location: index.php?action=dashborad');
                } else {
                    echo 'Invalid email or password';
                }
            } else {
                include 'view/LoginView.php';
            }
        }
    }
?>