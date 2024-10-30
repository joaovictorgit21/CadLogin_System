<?php
require_once 'Routes.php';

    class DashBoardController {
        public function index() {
            session_start();

            if (!isset($_SESSION['id'])) {
                header('Location: index.php');
                exit;
            }

            include 'view/DashBoardView.php';
        }
    }
?>