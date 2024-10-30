<?php
    require 'controller/AuthController.php';
    require 'controller/UserController.php';
    require 'controller/DashBoardController.php';

    $AuthController = new AuthController();
    $UserController = new UserController();
    $DashBoardController = new DashBoardController();

    $action = $_GET['action'] ?? 'loginUser';

    switch($action) {
        case 'LoginView':
            $AuthController->loginUser();
            break;
        case 'RegisterView':
            $UserController->registerUser();
            break;
        case 'dashboard':
            $DashBoardController->index();
            break;
        case 'Logout':
            $AuthController->logoutUser();
            break;
        case 'list':
            $UserController->listUsers();
        case 'edit':
            $id = $_GET['id'];
            $UserController->editUser($id);
            break;
        default:
            $AuthController->loginUser();
            break;
    }
?>