<?php require_once("menu_login.php")?>
<link rel="stylesheet" href="style.css">
<div class="row">
    <form method="POST">
        <div class="box">
            <div class="form">
                <h2>Login</h2>
                <div class="inputBox">
                    <input type="text" required="required" id="email" name="email">
                    <span>Usuario</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" required="required" id="senha" name="senha">
                    <span>Senha</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="#">Esqueceu a senha</a>
                </div>
                <input type="submit" name="enviar" value="Entrar">
                <div class="links">
                    <a id="possui" href="#">Criar conta</a>
                        <div id="contas"></div>
                </div>
            </div>
        </div>
    </form>
</div>
    <div id="php" class="text-danger">
        <?php
            session_start();
                if(isset($_POST['enviar']) == true){
                    if(empty($_POST['email'])){
                        echo("Por favor, preencha o email.<br>");
                    } else{
                    if(empty($_POST['senha'])){
                        echo("Por favor, preencha a senha.");
                    }else{

                    $conn = mysqli_connect("localhost","root","","empregue_se");

                    $email =mysqli_real_escape_string($conn,  $_POST['email']);
                    $senha =mysqli_real_escape_string($conn,  $_POST['senha']);
                    $email_valido = false;

                    

                    if($conn){
                        $sql = "SELECT id, email, senha FROM empresa";
                        $registros = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($registros) > 0){
                            while ($registro = mysqli_fetch_array($registros) ){
                                if($registro['email'] == $email){
                                    $email_valido = true;
                                    if($registro['senha'] == $senha){
                                        /*setcookie("login", $registro["id"]);
                                        setcookie("tipo", "empresa");*/

                                        $_SESSION["login"] = $registro['id'];
                                        $_SESSION["tipo"] = "empresa";
                                        if(isset($_SESSION["pag"])){
                                            $pagina = $_SESSION["pag"];
                                        } else{
                                            $pagina = "index.php";
                                        }
                                        unset($_SESSION["pag"]);
                                        header("location: $pagina");
                                    } else{
                                        echo("Senha incorreta");
                                    }
                                }
                            }
                            
                        }
                        $sql = "SELECT id, email, senha FROM cliente";
                        $registros = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($registros) > 0){
                            while ($registro = mysqli_fetch_array($registros) ){
                                if($registro['email'] == $email){
                                    $email_valido = true;
                                    if($registro['senha'] == $senha){
                                        /*etcookie("login", $registro["id"]);
                                        setcookie("tipo", "cliente");*/
                                        
                                        $_SESSION["login"] = $registro['id'];
                                        $_SESSION["tipo"] = "cliente";

                                        if(isset($_SESSION["pag"])){
                                            $pagina = $_SESSION["pag"];
                                        } else{
                                            $pagina = "index.php";
                                        }
                                        
                                        unset($_SESSION["pag"]);
                                        header("location: $pagina");
                                    } else{
                                        echo("Senha incorreta");
                                    }
                                }
                            }
                            
                        }
                        if(!$email_valido){
                            echo("Conta não existente.");
                        }
                    }
                    
                }}}
                ?>
    </div>
</body>
</html>