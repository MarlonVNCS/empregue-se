<?php
    require_once("menu_principal.php");
    $id_vaga = $_GET["id"];
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
?>
<div class="row">
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

        <h1 style= "height: 50px;" class="h3">Descrição: <?php echo($descri); ?></h1>
        <hr class="dropdown-divider">

        <h1 style= "height: 50px;" class="h3">Numero de Vagas Disponíveis: <?php echo($total); ?></h1>
        <hr class="dropdown-divider">

        <h1 style= "height: 50px;" class="h3">Area: <?php  ?></h1>
    


</div>

</div>


        <div class="row">
            <div class="d-grid gap-2 col-4 mx-auto">
                <a href="vagas_candidatadas.php" class="btn btn-light btn-lg btn-block" type="submit">Voltar</a>
            </div>
        </div>
    </form>
</div>
</div>
</body>

</html>