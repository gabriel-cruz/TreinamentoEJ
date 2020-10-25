<?php 
    require_once "../../../DB/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    UserController::verifyLogin();
    UserController::verifyAdmin();   
?>

<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/Treinamento2020/views/css/form.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
    <body>
        <form action="/Treinamento2020/user/store" method="post">
            <div class="form-group">
                <label for="name">Nome </label>
                <input type="name" name="name" class="form-control" aria-describedby="name">
            </div>
            <div class="form-group">
                <label for="email">Email </label>
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <select class="form-group custom-select" name="type">
                <option selected>Selecione um tipo</option>
                <option value="admin">Administrador</option>
                <option value="user">Usuário comum</option>
            </select>
            <div class="form-group">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" class="form-control" name="password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </body>

</html>
















<!-- <html>
    <form action="/Treinamento2020/user/store" method="post">
        <input name="name" placeholder="name">
        <input type="email" name="email" placeholder="email">
        <select name="type">
            <option value="">Selecione um tipo</option>
            <option value="admin">Administrador</option>
            <option value="user">Usuário comum</option>
        </select>
        <input type="password" name="password">
        <input type="password" name="password_confirmation">
        <button type="submit"> Cadastrar </button>        
    </form>
</html> -->