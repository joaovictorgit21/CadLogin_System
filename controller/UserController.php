<?php

class UserController {
    public function registerUser() {
        // verifica se a requisição é do tipo POST (se o form foi enviado)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // pega os dados do formulário e organiza em um Array
            $dataUser = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
                'perfil' => $_POST['perfil']
            ];

            UserModel::create($dataUser);
            header('Location: index.php');  
        } else {
            include 'view/RegisterView.php';
        }
    }

    public function listUsers() {
        $users = UserModel::all();
        include 'view/ListUserView.php';
    }

    public function editUser($id) {
        
        if (!isset($_SESSION)) {
            session_start();
        }

        if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor') {
            $dataUser = UserModel::find($id);

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $dataUser = [
                    'nome' => $_POST['nome'],
                    'email' => $_POST['email'],
                    'perfil' => $_POST['perfil']
                ];
                
                UserModel::update($id, $dataUser);
                header('Location: index.php?action=list');
            } else {
                include 'view/EditUserView.php';                                                                                                                                                                                                                                                                                                                                                                                                    
            }
        } else {
            echo 'Você não tem permissão para editar usuários!';
        }
    }

    public function delete($id) {
        UserModel::delete($id);
        header('Location: index.php?action=list');
    }
}
?>