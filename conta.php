<?php

if(isset($_COOKIE["login"])){
    if($_COOKIE["tipo"] == "cliente"){
        header("location: conta_cliente.php");

    } else{
        header("location: conta_empresa.php");
    }
}
else{
    header("location: login.php");
}

?>