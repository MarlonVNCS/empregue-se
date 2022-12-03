<?php
    require_once("menu_principal.php");
    $id_vaga = $_GET['id'];
    $_SESSION["id_vaga"] = $id_vaga;
    $conn = mysqli_connect("127.0.0.1", "root", "", "empregue_se");
    if($conn){
        $sql = "SELECT * FROM vaga WHERE id = $id_vaga";
        $Consulta_vaga = mysqli_query($conn,$sql);
        if(mysqli_num_rows($Consulta_vaga) == 1){
            $vaga = mysqli_fetch_array($Consulta_vaga);
            
            $nome = $vaga['nome'];
            $area = $vaga['area'];
            $esco = $vaga['escola_min'];
            $descri = $vaga['descricao'];
            $quanti = $vaga['quantidade'];
            $status = $vaga['status'];
            $total = $quanti - $status;
            $empresa = $vaga['id_empresa'];
            $id_cidade = $vaga['id_cidade'];

            $sql = "SELECT * FROM cidade WHERE id = $id_cidade";
            $registros = mysqli_query($conn, $sql);
            if (mysqli_num_rows($registros) > 0){
                $registro = mysqli_fetch_array($registros);
                $cidade = $registro['nome'];
            }

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
<div class="container" style="max-width: 50.0rem;">
    <form method="POST" class="needs-validation">
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
    <div class="col-lg-20">

            <div class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-1 shadow w-220px" style="margin-top: 50px;">

                <h1 class="h1">Informações da vaga</h1>

                
                    <hr class="dropdown-divider">
                    <h1 style= "height: 50px;" class="h3">Nome da Vaga: <?php echo($nome); ?></h1>
                    <hr class="dropdown-divider">

                    <h1 style= "height: 50px;" class="h3">Empresa: <?php echo($nomeempresa); ?></h1>
                    <hr class="dropdown-divider">
                    
                    <h1 style= "height: 50px;" class="h3">Area: <?php echo($area) ?></h1>
                    <hr class="dropdown-divider">

                    <h1 style= "height: 50px;" class="h3">Escolariedade mínima: <?php echo($esco) ?></h1>
                    <hr class="dropdown-divider">

                    <h1 style= "height: 50px;" class="h3">Descrição: <?php echo($descri); ?></h1>
                    <hr class="dropdown-divider">

                    <h1 style= "height: 50px;" class="h3">Numero de Vagas Disponíveis: <?php echo($total); ?></h1>
                    <hr class="dropdown-divider">

                    <h1 style= "height: 50px;" class="h3">Cidade: <?php echo($cidade); ?></h1>
                    <hr class="dropdown-divider">

                


            </div>

        </div>

    <div class="row" style="margin-top: 20px;">

        <div class="d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-light btn-lg btn-block" type="submit" name="candi"><?php edit_vaga($tipo_usuario) ?></button>
        </div>
        <div class="d-grid gap-2 col-3 mx-auto">
            <a href="index.php" class="btn btn-light btn-lg btn-block" type="submit">Voltar</a>
        </div>
    </div>
    </form>
    <?php
                if(isset($_POST["candi"])){
                  
                    
                    if($tipo_usuario != "empresa"){
                        if(!(isset($_SESSION['login']) && isset($_SESSION['tipo']))){
                            $_SESSION["pag"] = $_SERVER['REQUEST_URI'];
                            echo ("<script>location.href = 'login.php?id=$_SESSION[id_vaga]';</script>");
                        }
                        else{
                            $vericacao = "SELECT * FROM candidato_vaga WHERE id_vaga=$id_vaga AND id_cliente=$_SESSION[login];";
                            $verifica = mysqli_query($conn,$vericacao);
                            if(mysqli_num_rows($verifica) > 0){
                                echo ("
                                <script>
                                alert('Você já se candidatou a essa vaga');
                                location.href = 'index.php';
                                </script>");
                            }
                            $sql = "INSERT INTO candidato_vaga (id_vaga,id_cliente) VALUE ('$id_vaga','$_SESSION[login]')";
                            if(mysqli_query($conn, $sql)){
                            
                            }
                            $sql = "UPDATE vaga SET status = $status + 1 WHERE id = $id_vaga";
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