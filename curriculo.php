<?php require_once("validar.php");
require_once("menu_principal.php");


$id_cli=$_SESSION['login'];

$conn = mysqli_connect("127.0.0.1", "root", "", "empregue_se");
if($conn){
    $sql = "SELECT * FROM cliente WHERE id = $id_cli";
    $Consulta = mysqli_query($conn,$sql);
    if(mysqli_num_rows($Consulta) == 1){
        $curriculo = mysqli_fetch_array($Consulta);
        
        $nome = $curriculo['nome'];
        $cpf = $curriculo['cpf'];
        $nasc = $curriculo['nascimento'];
        $tel = $curriculo['telefone'];
        $end = $curriculo['endereco'];
        $email = $curriculo['email'];
        $area = $curriculo['areaDeAtuacao'];
        $expe = $curriculo['experiencia'];
        $sexo = $curriculo['sexo'];

    }else{header("location: login.php");}
}else{echo("Falha na conexão");}

function op_sexo($sexo, $op){
    if($sexo == $op){
        echo("selected");
    }
}

function editar(){
    if(!isset($_SESSION["editar"])){
        echo("readonly");
    } else{
        echo "";
    }
    
}



?>
<div class="row" style="margin: 2%;">
    <div class="text-center">
        <h4>Currículo</h4>
    </div>
    <form method="POST" class="needs-validation">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input class="form-control" <?php editar()?> type="text" name='nome' value="<?php echo($nome);?>">
        </div>
        <div class="row">
            <div class="col">
                <label form="idade" class="form-label">Nascimento</label>
                <input class="form-control" type="date" name='nasc' <?php editar()?> value="<?php echo($nasc);?>">
            </div>
            <div class="col">
                <label form="sexo" <?php editar()?> class="form-label">Sexo</label>
                <select class="form-control" type="text" name='sexo' value="<?php echo($sexo);?>">
                    <option value='m' <?php editar()?> <?php op_sexo($sexo, "m")?>>Masculino</option>
                    <option value='f' <?php editar()?> <?php op_sexo($sexo, "f")?>>Feminino</option>
                    <option value='n' <?php editar()?> <?php op_sexo($sexo, "n")?>>Prefiro não responder</option>
                </select>
                <!-- placeholder="Last name" aria-label="Last name"-->
            </div>
        </div>

        <div class="mb-3">
            <label for="area_atuacao" class="form-label">Área de atuação</label>
            <input class="form-control" <?php editar()?> name="area" rows="4" value="<?php echo($area);?>"></input>
        </div>

        <div class="mb-3">
            <label for="formacao_academica" class="form-label">Formação acadêmica</label>
            <input class="form-control" <?php editar()?> name="formacao_academica" rows="4"
                value="Dados do currículo"></input>
        </div>

        <div class="mb-3">
            <label for="experiencia" class="form-label">Experiência</label>
            <input class="form-control" <?php editar()?> name="expe" rows="4" value="<?php echo($expe);?>"></input>
        </div>

        <div class="row">
            <div class="col">
                <label form="email" class="form-label">Email</label>
                <input class="form-control" <?php editar()?> type="text" name='email' value="<?php echo($email);?>">
            </div>
            <div class="col">
                <label form="numero_telefone" class="form-label">Número de telefone</label>
                <input class="form-control" <?php editar()?> type="text" name='tel' value="<?php echo($tel);?>">
            </div>
        </div>


        <div class="row">
            <div class="d-grid gap-2 col-3 mx-auto" style="margin: 15px;">
                <button class="btn btn-light btn-lg btn-block" type="submit" name="edit">Editar</button>
            </div>
            <div class="d-grid gap-2 col-3 mx-auto" style="margin: 15px;">
                <button class="btn btn-light btn-lg btn-block" type="submit" name="voltar">Voltar</button>
            </div>
        </div>
        <?php
                    if(isset($_POST["voltar"])){
                        if(isset($_SESSION["editar"])){
                            unset($_SESSION["editar"]);
                        }
                        echo ("<script>location.href = 'index.php';</script>");
                    }

                    if(isset($_POST["edit"])){

                        //pra editar os campos
                        if(!isset($_SESSION["editar"])){
                            $_SESSION["editar"] = "aa";
                            echo ("<script>location.href = 'curriculo.php';</script>");
                        }else{
                            unset($_SESSION["editar"]);

                            $nome=$_POST['nome'];
                            $nasc=$_POST['nasc'];
                            $tel=$_POST['tel'];
                            $email=$_POST['email'];
                            $area=$_POST['area'];
                            $expe=$_POST['expe'];
                            $sexo=$_POST['sexo'];
                            if($conn){
                                    $sql = "UPDATE cliente SET nome = '$nome', nascimento = '$nasc', telefone='$tel',email='$email', areaDeAtuacao = '$area', experiencia = '$expe', sexo = '$sexo' WHERE id = '$id_cli'";
                                
                                    if (mysqli_query($conn, $sql)){
                                        //echo ("<script>alert('Curriculo criado com sucesso');location.href = 'conta_cliente.php';</script>");
                                        echo ("<script>location.href = 'curriculo.php';</script>");
                                    }else{echo("Tudo errado");}
                                
                            }
                            echo ("<script>location.href = 'curriculo.php';</script>");
                        }
                    
                    }
                    
                    mysqli_close($conn);
                ?>
    </form>
</div>
</div>
</body>

</html>