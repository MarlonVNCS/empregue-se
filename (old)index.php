<?php

    if(isset($_COOKIE['login']) && isset($_COOKIE['tipo'])){
        if($_COOKIE['tipo'] == "empresa"){
            header("location: empresa.php");
        } else{
            header("location: cliente.php");
        }
    } else{
        header("location: login.php");
    }


?>