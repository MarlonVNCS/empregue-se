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