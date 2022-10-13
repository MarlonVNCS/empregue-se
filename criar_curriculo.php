<?php require_once("validar.php");
require_once("menu_principal.php");
session_start();
$id_cli=$_SESSION['id_cliente'];

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
        if($sexo == "m"){
            $sexo = "Masculino";
        }else{$sexo = "Feminino";}

    }else{header("location: login.php");}
}else{echo("Falha na conexão");}




?>
        <div class="row" style="margin: 2%;">
            <div class="text-center">
                <h4>Currículo</h4>
            </div>
            <form method="POST" class="needs-validation">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input class="form-control" type="text" name='nome1'  value="<?php echo($nome);?>">
                    
                </div>
                <div class="row">
                    <div class="col">
                    <label form="idade" class="form-label">Nascimento</label>
                    <input class="form-control" type="date" name='nasc1' value="<?php echo($nasc);?>">
                    </div>
                    <div class="col">
                        <label form="sexo" class="form-label">Sexo</label>
                        <input class="form-control" type="text" name='sexo1' value="<?php echo($sexo);?>">
                        <!-- placeholder="Last name" aria-label="Last name"-->
                    </div>
                </div>

                <div class="mb-3">
                    <label for="area_atuacao" class="form-label">Área de atuação</label>
                    <input class="form-control" name="area1" rows="4" value="<?php echo($area);?>"></input>
                </div>

                <div class="mb-3">
                    <label for="formacao_academica" class="form-label">Formação acadêmica</label>
                    <input class="form-control" name="formacao_academica" rows="4" value="Dados do currículo"></input>
                </div>

                <div class="mb-3">
                    <label for="experiencia" class="form-label">Experiência</label>
                    <input class="form-control" name="expe1" rows="4" value="<?php echo($expe);?>"></input>
                </div>

                <div class="row">
                    <div class="col">
                        <label form="email" class="form-label">Email</label>
                        <input class="form-control" type="text" name='email1' value="<?php echo($email);?>">
                    </div>
                    <div class="col">
                        <label form="numero_telefone" class="form-label">Número de telefone</label>
                            <input class="form-control" type="text" name='tel1' value="<?php echo($tel);?>">
                        </div>
                    </div>
                    
                    
                    <div class="row"> 
                        <div class="d-grid gap-2 col-3 mx-auto" style="margin: 15px;">
                            <button class="btn btn-light btn-lg btn-block" type="submit" name="atualiza">Atualizar</button>
                        </div>  
                    <div class="d-grid gap-2 col-3 mx-auto" style="margin: 15px;">
                        <a href="conta_cliente.php" class="btn btn-light btn-lg btn-block" type="submit">Voltar</a>
                    </div>
                </div>
                <?php
                    if(isset($_POST["atualiza"])){
                        $nome1=$_POST['nome1'];
                        $nasc1=$_POST['nasc1'];
                        $tel1=$_POST['tel1'];
                        $email1=$_POST['email1'];
                        $area1=$_POST['area1'];
                        $expe1=$_POST['expe1'];
                        $sexo1=$_POST['sexo1'];
                        if($conn){
                            if($sexo1 == 'Masculino' || $sexo1 == 'masculino' || $sexo1 == 'Feminino' || $sexo1 == 'feminino'){
                                if($sexo1 == 'Masculino' || $sexo1 == 'masculino'){
                                    $sexo1 = "m";
                                }else if($sexo1 == 'Feminino' || $sexo1 == 'feminino'){
                                    $sexo1 = "f";
                                }else{
                                    echo("erro no cadastro");
                                    header("location: conta_cliente.php");
                                }
                              //echo $sql = "UPDATE cliente SET nome = '$nome1', cpf = '$cpf1', nascimento = '$nasc1', telefone='$tel',endereco ='$end',email='$email', areaDeAtuacao = '$area', experiencia = '$expe', sexo='$sexo' WHERE id = '$id_cli'";
                                $sql = "UPDATE cliente SET nome = '$nome1', nascimento = '$nasc1', telefone='$tel1',email='$email1', areaDeAtuacao = '$area1', experiencia = '$expe1', sexo = '$sexo1' WHERE id = '$id_cli'";
                            
                                if (mysqli_query($conn, $sql)){
                                    echo ("
                                    <script>
                                    alert('Curriculo criado com sucesso');
                                    location.href = 'conta_cliente.php';
                                    </script>");
                                }else{echo("Tudo errado");}
                            }
                        }
                    
                    }
                    mysqli_close($conn);
                ?>
            </form>
        </div>
    </div>
</body>
</html>