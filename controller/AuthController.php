<?php
    class AuthController {
        public function LoginUser() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $useremail = $_POST['email'];
                $password = $_POST['password'];

                $user = User::findByEmail($useremail);

                if ($user && password_verify($password, $user['password'])) {
                    session_start();

                    $_SESSION['usuario_id'] = $user['id'];
                    $_SESSION['perfil'] = $user['perfil'];
                    header('Pow');
                }
            }
        }
    }
?>