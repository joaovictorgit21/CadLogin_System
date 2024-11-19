<?php

require_once 'model/UserModel.php';

class AuthController {
    public function loginUser() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Busca o usuário pelo e-mail
            $user = UserModel::findByEmail($email);

            // Verifica se o usuário foi encontrado
            if ($user && is_array($user) && password_verify($password, $user['senha'])) {
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['perfil'] = $user['perfil'];

                // Redireciona para o dashboard
                header('Location: index.php?action=dashboard');
                exit();
            } else {
                // Usuário não encontrado ou senha incorreta
                $error = "E-mail ou senha inválidos.";
                include 'view/LoginView.php';
            }
        } else {
            include 'view/LoginView.php';
        }
    }

    public function logoutUser() {
        // Inicia a sessão do usuário para destruir
        session_start();

        // Destroi todas as informações da sessão
        session_destroy();

        // Redireciona o usuário para a página inicial
        header('Location: index.php');  
        exit();
    }
}
