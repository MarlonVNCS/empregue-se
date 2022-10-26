<?php
    require_once("menu_principal.php");
    $id_vaga = $_SESSION["id_vaga"];
    $conn = mysqli_connect("127.0.0.1", "root", "", "empregue_se");
    if($conn){
        $sql = "SELECT * FROM vaga WHERE id = $id_vaga";
        $Consulta_vaga = mysqli_query($conn,$sql);
        if(mysqli_num_rows($Consulta_vaga) == 1){
            $vaga = mysqli_fetch_array($Consulta_vaga);
            
            $nome = $vaga['nome'];
            $descri = $vaga['descricao'];
            $quanti = $vaga['quantidade'];
            $status = $vaga['status'];
            $total = $quanti - $status;
            $empresa = $vaga['id_empresa'];
            $cidade = $vaga['id_cidade'];
        }else{header("location: index.php");}
    }else{echo("Falha na coneção");}

    if(isset($_SESSION["tipo"])){
        $tipo_usuario = $_SESSION["tipo"];
    }else{
        $tipo_usuario = "Não logado";
    }
    


    function edit_vaga($tipo_usuario){
        if($tipo_usuario == "empresa"){
            echo("Editar");
        } else if($tipo_usuario == "cliente"){
            echo("Candidatar");
        } else{
            echo("Logar");
        }
    }

    function editar($tipo_usuario){
        if(isset($_SESSION["editar"]) && $tipo_usuario == "empresa"){   
            echo("");
        }else{
            echo("readonly");
        }
    
    }
?>
<div class="container" style="max-width: 36.5rem;">
    <div class="text-center">
        <h4>Vaga</h4>
    </div>
    <form method="POST" class="needs-validation">
        <div class="mb-3">
            <label for="nome_vaga" class="form-label">Nome da vaga</label>
            <input class="form-control" type="text" value="<?php echo($nome);?>" <?php editar($tipo_usuario);?>>
            <!-- não deixa alterar o q esta na caixa de texto readonly-->

        </div>
        <div class="mb-3">
            <label for="nome_empresa" class="form-label">Empresa</label>
            <?php
                        $conn = mysqli_connect("127.0.0.1", "root", "", "empregue_se");
                        if($conn){
                            $sql = "SELECT * FROM empresa WHERE id = $empresa";
                            $Consulta_empresa = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($Consulta_empresa) == 1){
                                $empre = mysqli_fetch_array($Consulta_empresa);
                                $nomeempresa = $empre["nome"];
                            }
                        }
                    ?>
            <input class="form-control" type="text" value="<?php echo($nomeempresa);?>" <?php editar($tipo_usuario);?>>

        </div>


        <div class="mb-3">
            <label for="descrição" class="form-label">Descrição</label>
            <input class="form-control" type="text" value="<?php echo($descri);?>" <?php editar($tipo_usuario);?>>
        </div>
        <div class="mb-3">
            <label for="vagas_ofertadas" class="form-label">Vagas ofertadas</label>
            <input class="form-control" type="number" value="<?php echo($total);?>" <?php editar($tipo_usuario);?>>

        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Area</label>
            <input class="form-control" type="text" value="Dados da vaga" <?php editar($tipo_usuario);?>>

        </div>

        <div class="row">
            <div class="d-grid gap-2 col-3 mx-auto">
                <button class="btn btn-light btn-lg btn-block" name="candi" type="submit"><?php edit_vaga($tipo_usuario);?></button>
            </div>
            <div class="d-grid gap-2 col-3 mx-auto">
                <a href="index.php" class="btn btn-light btn-lg btn-block" type="submit">Cancelar</a>
            </div>
        </div>
    </form>
    <?php
                if(isset($_POST["candi"])){
                    //pra editar os campos
                    if(!isset($_SESSION["editar"])){
                        $_SESSION["editar"] = "aa";
                        echo ("<script>location.href = 'ver_vaga.php';</script>");
                    }else{
                        unset($_SESSION["editar"]);

                    }
                    
                    if($tipo_usuario != "empresa"){
                        if(!(isset($_SESSION['login']) && isset($_SESSION['tipo']))){
                            $_SESSION["pag"] = $_SERVER['REQUEST_URI'];
                            echo ("<script>location.href = 'login.php';</script>");
                        }
                        else{
                            $sql = "INSERT INTO candidato_vaga (id_vaga,id_cliente) VALUE ('$id_vaga','$_SESSION[login]')";
                            if(mysqli_query($conn, $sql)){
                                echo ("
                                <script>
                                alert('Você se candidatou a vaga');
                                location.href = 'index.php';
                                </script>");
                            }
                        }

                    }

                }
                        
            ?>
</div>
</div>
</body>

</html>