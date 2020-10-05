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

    public function check(){
        try{
            $user = new User();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->validate();

            header('Location: http://localhost:8080/Treinamento2020/user/index');
        }
        catch(\Exception $e){
            header('Location: http://localhost:8080/Treinamento2020/');
        }      
    }
}