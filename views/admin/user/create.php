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
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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