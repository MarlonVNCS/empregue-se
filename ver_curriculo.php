<?php require_once("validar.php");
require_once("menu_principal.php");?>
<?php
    session_start();
    $id_cli=$_SESSION['login'];

    $conn = mysqli_connect("localhost", "root", "", "empregue_se");
    if($conn){
        $sql = "SELECT * FROM cliente WHERE id = $id_cli";
        $consulta = mysqli_query($conn,$sql);
        if(mysqli_num_rows($consulta) == 1){
            $curriculo = mysqli_fetch_array($consulta);
            
            $nome = $curriculo['nome'];
            $cpf = $curriculo['cpf'];
            $nasc = $curriculo['nascimento'];
            $idade = date('Y')-$nasc;
            $tel = $curriculo['telefone'];
            $end = $curriculo['endereco'];
            $email = $curriculo['email'];
            $area = $curriculo['areaDeAtuacao'];
            $expe = $curriculo['experiencia'];
            $sexo = $curriculo['sexo'];
            if($sexo == "m"){
                $sexo = "Masculino";
            }else if($sexo == 'f'){
                $sexo = "Feminino";
            }else{
                $sexo="Prefiro não dizer";}
                
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
                    <input class="form-control" type="text" value="<?php echo($nome);?>" readonly> <!-- não deixa alterar o q esta na caixa de texto readonly-->
                    
                </div>
                <div class="row">
                    <div class="col">
                    <label form="idade" class="form-label">Idade</label>
                    <input class="form-control" type="text" value="<?php echo($idade);?>" readonly>
                    </div>
                    <div class="col">
                        <label form="sexo" class="form-label">Sexo</label>
                        <input class="form-control" type="text" value="<?php echo($sexo);?>" readonly>
                        <!-- placeholder="Last name" aria-label="Last name"-->
                    </div>
                </div>

                <div class="mb-3">
                    <label for="area_atuacao" class="form-label">Área de atuação</label>
                    <input class="form-control" id="area_atuacao" rows="4" value="<?php echo($area);?>" readonly></input>
                </div>

                <div class="mb-3">
                    <label for="formacao_academica" class="form-label">Formação acadêmica</label>
                    <input class="form-control" id="formacao_academica" rows="4" value="Dados" readonly></input>
                </div>

                <div class="mb-3">
                    <label for="experiencia" class="form-label">Experiência</label>
                    <input class="form-control" id="experiencia" rows="4" value="<?php echo($expe);?>" readonly></input>
                </div>

                <div class="row">
                    <div class="col">
                        <label form="email" class="form-label">Email</label>
                        <input class="form-control" type="text" value="<?php echo($email);?>" readonly>
                    </div>
                    <div class="col">
                        <label form="numero_telefone" class="form-label">Número de telefone</label>
                            <input class="form-control" type="text" value="<?php echo($tel);?>" readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input class="form-control" type="text" value="<?php echo($end);?>" readonly> 
                    
                </div>

                <div class="row">   
                    <div class="d-grid gap-2 col-3 mx-auto" style="margin: 15px;">
                    <a class="btn btn-light btn-lg btn-block" type="submit" name="voltar" href="conta_cliente.php" value="">Voltar</a> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
