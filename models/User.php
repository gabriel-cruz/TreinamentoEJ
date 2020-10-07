<?php

use DB\Connection;

class User{
    private $id;
    private $name;
    private $email;
    private $type;
    private $password;

    public function __construct($id, $name, $email /*, $type*/){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        //$this->type = $type;
    }

    public function validate(){
        $connection = Connection::getConnection();
        
        $sql = 'SELECT * FROM users WHERE email = :email';

        $stmt = $connection->prepare($sql);
        $stmt->bindValue(':email', $this->email);
        $stmt->execute();

        if($stmt->rowCount()){
            $result = $stmt->fetch();
        

            if($result['password'] === $this->password){
                $_SESSION['user'] = array(
                    'id_user' => $result['id'], 
                    'username' => $result['name']
                );

                return true;
            }
    
        }

        throw new \Exception('Login failed');
    }

    public static function all(){
        $connection = Connection::getConnection();

        $sql = "SELECT * FROM users";

        $stmt = $connection->prepare($sql);
        $stmt->execute();
        
        $users = [];
        if($stmt->rowCount()){
            for($i = 0; $i < $stmt->rowCount(); $i++){
                $user = $stmt->fetch();
                $users[$i] = new User($user['id'], $user['name'], $user['email']);
               
            }
     
            return $users;
        }

        return false;
    }

    
    public static function create($name, $email, $password, $password_confirmation){
        $connection = Connection::getConnection();

        $sql = "INSERT INTO users (name, email, password) values ('{$name}', '{$email}', '{$password}')";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
    }

    public static function update($id, $name, $email, $password){
        $connection =  Connection::getConnection();

        $sql = "update users set name = '{$name}', email = '{$email}', password = '{$password}' where id = '{$id}'";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
    }

    public static function delete($id){
        $connection =  Connection::getConnection();

        $sql = "delete from users where id = '{$id}'";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
    }

    public static function find($email, $password){
        $connection =  Connection::getConnection();

        $sql = "select * from users where id = '{$id}'";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
    }


    public function getId(){
        return $this->id;
    }
    
    public function getType(){
        return $this->type;
    }

    public function getName(){
        return $this->name;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getPassword(){
        return $this->password;
    }

    public function setType($name){
        $this->name = $name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }
}