<?php

    if(isset($_POST['enviar']) == true){
        if(empty($_POST['email'])){
            echo("Por favor, preencha o email.");
        } 
        if(empty($_POST['senha'])){
            echo("Por favor, preencha a senha.");
        }

        echo("<script>alert('bah')</script>");
        
    } else{
        header("location: ../login.html");
    }

?>