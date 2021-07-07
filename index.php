<?php
    session_start();
    if(isset($_SESSION[md5("user_data")])){
        header("location: admin.php?op=home");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="signin.css" rel="stylesheet">
    <link rel="icon" href="documentation/img/az.ico"/>
    <title>Login</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Staatliches&display=swap");
        .container {
            position: absolute;
            top: 0; bottom: 0;
            left: 0; right: 0;
            margin: auto; text-align: center; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <div style="color: white; padding-left: 40px; font-family: 'Staatliches', cursive; font-size: 24px;">
                ArmaZen 1.0
            </div>
            <div style="padding-right: 40px">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Registrar-se</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-3">
                <form action="controllers/login.php" method="POST">
                    <img class="mb-4" src="documentation/img/logo_AZ.png" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 fw-normal">Login</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" placeholder="nome@exemplo.com">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3" >
                        <input type="password" class="form-control" name="senha" placeholder="Senha">
                        <label for="floatingPassword">Senha</label>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Lembre meu Login
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2021 All rights reserved</p>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>