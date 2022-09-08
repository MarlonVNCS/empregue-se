<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/criar_contas.js"></script>
    <script src="js/masks.js"></script>
    <script src="js\jQuery-Mask-Plugin-master\src\jquery.mask.js"></script>

</head>
<body class="bg-dark text-light">
    <div class="container" style="max-width: 26.5rem;">
        <header class="py-5 text-center">
            <div>
                <a href="index.php">
                    <img class="d-block mx-auto mb-4" src="https://bulma.io/images/placeholders/128x128.png" alt="" width="110" height="110">
                </a> 
            </div>
            <h2>Empregue-se</h2>
        </header>

        <?php
            if(isset($_COOKIE['login']) && isset($_COOKIE['tipo'])){
                echo('<form method="POST"><button name="logout" class="text-warning btn" type="submit" >Sair da conta</button> </form>');
            } else{
                if(!strpos($_SERVER['REQUEST_URI'], "login.php") && !strpos($_SERVER['REQUEST_URI'], "cadastro")){
                    header("location: index.php");
                }
            }
        
        ?>

        <?php

            if(isset($_POST['logout']) == true){
                setcookie("login", "", time()-300);
                setcookie("tipo", "", time()-300);
                header("location: index.php");
            }
        
        ?>