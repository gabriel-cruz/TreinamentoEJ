<?php 
    require_once "../../DB/Connection.php";
    require_once "../../models/User.php";
    require_once "../../controllers/UserController.php";
    UserController::verifyLogin();
?>
<div class="content_area">
    Bem vindo, {{username}}

    <a href="/Treinamento2020/user/logout">Sair</a>
</div>

<br>
<br>
<div>
        <a href="/Treinamento2020/user/all">Listagem de usuários</a>
        <a href="/Treinamento2020/user/create">Cadastrar novo usuário</a>
        <a href="/Treinamento2020/user/profile">Meu Perfil</a>
</div>