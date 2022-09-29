<?php

    setcookie("login", "", time()-300);
    setcookie("tipo", "", time()-300);
    header("location: index.php");


?>