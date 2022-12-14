<?php require_once("validar.php");
require_once("menu_principal.php");

if(isset($_SESSION["tipo"])){
    $id=$_SESSION['login'];
    $tipo = $_SESSION["tipo"];

    $conn = mysqli_connect("127.0.0.1", "root", "", "empregue_se");
    if($conn){
        $sql = "SELECT * FROM $tipo WHERE id = $id";
        $Consulta = mysqli_query($conn,$sql);
        if(mysqli_num_rows($Consulta) == 1){
            $dados = mysqli_fetch_array($Consulta);

            $email = $dados['email'];
            $senha = $dados['senha'];


        }else{header("location: login.php");}
}else{echo("Falha na conexão");}

}else{header("location: login.php");}


function editar(){
    if(!isset($_SESSION["editar"])){
        echo("readonly");
    } else{
        echo "";
    }
    
}

?>

<div class="row" style="max-width: 30.0rem; margin: auto;">
    <div class="" style="margin-top: 40px; align-items: center;">
        <div class="text-center">
            <h4>Conta</h4>
        </div>
        <form method="POST" class="needs-validation">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" <?php editar()?> type="text" name='email' value="<?php echo($email);?>">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input class="form-control" <?php editar()?> name="senha" rows="4" value=""></input>
            </div>


            <div class="row">
                <div class="d-grid gap-2 col-3 mx-auto" style="margin: 17px;">
                    <button class="btn btn-light btn-lg btn-block" type="submit" name="edit">Editar</button>
                </div>
                <div class="d-grid gap-2 col-3 mx-auto" style="margin: 17px;">
                    <button class="btn btn-light btn-lg btn-block" type="submit" name="voltar">Voltar</button>
                </div>
            </div>
            </div>
                <?php
                    if(isset($_POST["voltar"])){
                        if(isset($_SESSION["editar"])){
                            unset($_SESSION["editar"]);
                        }
                        header("location: index.php");
                    }

                    if(isset($_POST["edit"])){
                        
                        //pra editar os campos
                        if(!isset($_SESSION["editar"])){
                            $_SESSION["editar"] = "aa";
                            header("location: conta.php");
                        }else{
                            unset($_SESSION["editar"]);
                            
                            $email= mysqli_real_escape_string($conn, $_POST['email']);
                            $senha= mysqli_real_escape_string($conn, $_POST['senha']);
                            $salt="DsVg$3";
                                $junta = $salt.$senha;
                                $cripto_senha=hash("sha512",$junta);
                            if(empty($senha) || empty($email)){
                                echo ("<script>alert('Preencha os campos');location.href = 'conta.php'</script>");
                            }else{
                                if($conn){
                                        $sql = "UPDATE $tipo SET email='$email', senha = '$cripto_senha' WHERE id = '$id'";
                                    
                                        if (mysqli_query($conn, $sql)){
                                            echo ("<script>alert('Conta atualizada com sucesso');location.href = 'conta.php';</script>");
                                        }else{echo("Tudo errado");}
                                    
                                }

                            }
                            //header("location: conta.php");
                        }
                    }
                    mysqli_close($conn);
                ?>
            </div>
        </form>
</div>
</body>

</html>