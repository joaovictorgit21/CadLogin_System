<?php

require_once 'model/UserModel.php';
    class AuthController {
        public function loginUser() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $user = UserModel::findByEmail($email);

                if (password_verify($password, $user['senha'])) {
                    session_start();
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['perfil'] = $user['perfil'];

                    header('Location: index.php?action=dashboard');
                } else {
                    include 'view/LoginView.php';
                }
            } else {
                include 'view/LoginView.php';
            }
        }

        public function logoutUser() {
            // inicia a sessão do usuário para destruir
            session_start();

            // Destroi todas as infos da sessão
            session_destroy();

            // Redireciona o usuário para a página inicial
            header('Location: index.php');  
        }
    }
?>