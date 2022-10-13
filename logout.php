<?php
    session_start();
    /*setcookie("login", "", time()-300);
    setcookie("tipo", "", time()-300);*/
    session_destroy();
    header("location: index.php");


?>