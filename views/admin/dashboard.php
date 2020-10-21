<?php 
    require_once "../../DB/Connection.php";
    require_once "../../models/User.php";
    require_once "../../controllers/UserController.php";
    UserController::verifyLogin();
?>

<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="http://localhost:8080/Treinamento2020/views/css/dashboard.css">
        <link rel="stylesheet" type="text/css" href="http://localhost:8080/Treinamento2020/views/bootstrap/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale">

    </head>

    <body>
        <header>
            <nav id=nav class="navbar navbar-expand-lg navbar-light bg-primary" style="background-color: #17a2b8">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" >Bem vindo, {{username}} <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Listagem de Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar Novo Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Meu Perfil</a>
                </li>
                <div class="content_area">
                    <li class="nav-item">
                        <a class="nav-link" href="/Treinamento2020/user/logout">Sair</a>
                    </li>
                </div>
                </ul>
            </div>
            </nav>

        </header>

        <section class="box_dashboard">
        </section>
    </body>
</html>






<!-- <div class="content_area">
    Bem vindo, {{username}}

    <a href="/Treinamento2020/user/logout">Sair</a>
</div>

<br>
<br> -->


<!-- <div>
        <a href="/Treinamento2020/user/all">Listagem de usuários</a>
        <a href="/Treinamento2020/user/create">Cadastrar novo usuário</a>
        <a href="/Treinamento2020/user/profile">Meu Perfil</a>
</div> -->