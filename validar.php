<?php
    if(!isset($_COOKIE['login']) && isset($_COOKIE['tipo'])){
        if(!strpos($_SERVER['REQUEST_URI'], "login.php") && !strpos($_SERVER['REQUEST_URI'], "cadastro")){
            header("location: index.php");
        }
    }

?>