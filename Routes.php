<?php
    require 'controller/AuthController.php';
    require 'controller/UserController.php';
    require 'controller/DashBoardController.php';

    $AuthController = new $AuthController();
    $UserController = new $UserController();
    $DashBoardController = new $DashBoardController();

    $action = $_GEt['action'] ?? 'loginUser';

    switch($action) {
        case 'loginUser':
            $AuthController->LoginUser();
    }
?>