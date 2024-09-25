<?php
class UserController {
    public function registerUser() {
        // verifica se a requisição é do tipo POST (se o form foi enviado)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // pega os dados do formulário e organiza em um Array
            $dataUser = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
                'perfil' => $_POST['perfil']
            ];

            UserModel::create($dataUser);
            header('Location: index.php');
        } else {
            include 'view/RegisterView.php';
        }
    }
}

?>