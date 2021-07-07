<?php
    include_once "models/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="signin.css" rel="stylesheet">
    <title>Login</title>
    <style>
            .container {
            position: absolute;
            top: 0; bottom: 0;
            left: 0; right: 0;
            margin: auto; text-align: center; 
        }
    </style> 
</head>
<body>
    <main class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-3">
                <form action="<?=$GLOBALS['project_index'];?>controllers/users/users.php" method="POST">
                    <img class="mb-4" src="documentation/img/logo_AZ.png" alt="" width="72" height="72">
                    <input type="hidden" name="action" value="register">
                    <h1 class="h3 mb-3 fw-normal">Cadastro</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="user_name" placeholder="nome">
                        <label for="floatingInput">Nome de usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="user_email" placeholder="nome@exemplo.com">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3" >
                        <input type="password" class="form-control" name="user_password" placeholder="Senha">
                        <label for="floatingPassword">Senha</label>
                    </div>
                    <div class="mb-3">
                        <a href="index.php">Já tenho uma conta</a>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Cadastre-se</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2021 All rights reserved</p>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>