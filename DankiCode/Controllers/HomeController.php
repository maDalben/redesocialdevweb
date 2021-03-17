<?php

    namespace DankiCode\Controllers;

    class HomeController{

        public function index(){
            if(isset($_SESSION['login'])){
                //Renderiza a home do usuário
                \DankiCode\Views\MainView::render('home');

            }else{
                //Renderizar para criar conta
                \DankiCode\Views\MainView::render('login');

            }
        }
    }

?>
