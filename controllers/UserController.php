<?php 

session_start();

class UserController{


    public function index(){
        $loader = new \Twig\Loader\FilesystemLoader('views/admin');
        $twig = new \Twig\Environment($loader, [
            'auto_reload' => true,
        ]);
        $template = $twig->load('dashboard.php');
        $parameters['username'] = $_SESSION['user']['username'];

        return $template->render($parameters);
    }

    public static function logout(){
        unset($_SESSION['user']);
        session_destroy();

        header('Location: http://localhost:8080/Treinamento2020/');
    }

    public function create(){
    }

    public function store(){
    }

    public function edit($id){
    }

    public function profile(){
    }

    public function update($id){
    }

    public function delete($id){
    }

    public static function all(){
    }
    
    public function check(){
    }

    public static function verifyLogin(){
    }
    
    public static function verifyAdmin(){
    }

 

    public static function get($id){
    }
}