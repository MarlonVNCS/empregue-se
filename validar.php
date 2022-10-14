<?php
session_start();
    if(!(isset($_SESSION['login']) && isset($_SESSION['tipo']))){
        header("location: index.php");
        
    }

?>