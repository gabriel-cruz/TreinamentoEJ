<?php 

class Router{
    private $url;
    private $controller;
    private $method;
    private $param;

    private $user;

    public function __construct(){
        $this->user = $_SESSION['user'] ?? null;
    }

    public function start($request){        
        if(isset($request['url'])){
            $this->url = explode('/', $request['url']);

            $this->controller = ucfirst($this->url[0] . "Controller");
            array_shift($this->url);

            if(isset($this->url[0])){
                $this->method = $this->url[0];
                array_shift($this->url);
                if(isset($this->url[0])){
                    $this->param = $this->url;                    
                }
            }        
        }

        if($this->user){
            $permission = ['UserController']; //dashboard

            if(!isset($this->controller) || !in_array($this->controller, $permission)){
                $this->controller = 'UserController';
                $this->method = 'index';
            }

        }else{
            $permission = ['HomeController']; //login

            if(!isset($this->controller) || !in_array($this->controller, $permission)){
                $this->controller = 'HomeController';
                $this->method = 'login';
            }
        }
        
 
        return call_user_func([new $this->controller, $this->method], $this->param);
    }
}