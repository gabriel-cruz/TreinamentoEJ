<?php 
    require_once "../../DB/Connection.php";
    require_once "../../models/User.php";
    require_once "../../controllers/UserController.php";
    UserController::verifyLogin();
?>
<a href="/Treinamento2020/user/logout">Sair</a>

<br>
<br>
<div>
        <a href="/Treinamento2020/user/index">Listagem de usuários</a>
        <a href="/Treinamento2020/user/create.php">Cadastrar novo usuário</a>
        <a href="/Treinamento2020/user/profile">Meu Perfil</a>
</div>