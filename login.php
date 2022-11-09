<?php require_once("menu_login.php")?>
<div class="row">
    <div class="text-center">
        <h4>Fazer login</h4>
    </div>
    <form method="POST" class="needs-validation">
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="email@exemplo.com" name="email">
        </div>
        <div class="mb-3">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha">
            <a class="text-light text-decoration-none" href="">Esqueceu sua senha?</a>
        </div>
        <div class="d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-light btn-lg btn-block" type="submit" name="enviar" value="Enviar">Acessar</button>
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

                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $email_valido = false;

                    $conn = mysqli_connect("127.0.0.1","root","","empregue_se");

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

<div class="text-warning">
    <!-- Essa classe só ta para destacar o texto enquanto n arrumamos o botão-->
    <button id="possui" class="text-warning btn" type="button">Não possui conta?</button> <br>
    <div id="contas"></div>
</div>
</div>


</body>

</html>