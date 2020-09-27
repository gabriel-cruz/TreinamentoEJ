<?php 

class HomeController{

    public function login(){
        $loader = new \Twig\Loader\FilesystemLoader('views');
        $twig = new \Twig\Environment($loader, [
            'auto_reload' => true,
        ]);
        $template =$twig->load('login.php');

        return $template->render();
    }

    public function index(){
    }
}