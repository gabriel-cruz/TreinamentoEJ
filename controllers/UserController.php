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

    public function renderIndex(){
        $loader = new \Twig\Loader\FilesystemLoader('views/admin/user');
        $twig = new \Twig\Environment($loader, [
            'auto_reload' => true,
        ]);
        $template =$twig->load('index.php');

        return $template->render();
    }

    public static function logout(){
        unset($_SESSION['user']);
        session_destroy();

        header('Location: http://localhost:8080/Treinamento2020/');
    }

    public static function all(){
        
        return User::all();
    }

    public function create(){
        $loader = new \Twig\Loader\FilesystemLoader('views/admin/user');
        $twig = new \Twig\Environment($loader, [
            'auto_reload' => true,
        ]);
        $template =$twig->load('create.php');

        return $template->render();
    }

    public function store(){
        if($_POST["password"] == $_POST["password_confirmation"]){
            User::create($_POST["name"], $_POST["email"], $_POST["password"], $_POST["password_confirmation"]);
            header("Location: http://localhost:8080/Treinamento2020/user/index");
        }

        else{
            header("Location: http://localhost:8080/Treinamento2020/user/create");
        }
    }

    public function edit($id){
    }

    public function profile(){
    }

    public function update($id){
    }

    public function delete($id){
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