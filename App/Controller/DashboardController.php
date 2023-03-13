<?php

    namespace App\Controller;

    class DashboardController{
    
        public function index(){
            echo 'Logado com sucesso <a href="http://localhost/my/login_php/dashboard/logout">Fazer Logout</a>';
        }

        public function logout(){
            unset($_SESSION['usr']);
            session_destroy();
            header('Location: http://localhost/my/login_php');
        }
    }