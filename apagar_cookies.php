<?php

setcookie("login", "", time()-300);

setcookie("tipo", "", time()-300);

echo("<script>alert('Cookies apagados!')</script>")
?>