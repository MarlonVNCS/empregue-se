<?php require_once("validar.php");
require_once("menu_principal.php");
//$id_cliente=$_GET["idc"];
session_start();
$id_cie=$_SESSION['id_cliente'];

$conn = mysqli_connect("127.0.0.1", "root", "", "empregue_se");
if($conn){
    $sql = "SELECT * FROM cliente WHERE id = $id_cie";
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
        <div class="row">
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
                    <label form="idade" class="form-label">Nascimento</label>
                      <input class="form-control" type="text" value="<?php echo($nasc);?>" readonly>
                    </div>
                    <div class="col">
                        <label form="sexo" class="form-label">Sexo</label>
                        <input class="form-control" type="text" value="<?php echo($sexo);?>" readonly>
                        <!-- placeholder="Last name" aria-label="Last name"-->
                    </div>
                </div>

                <div class="mb-3">
                    <label for="area_atuacao" class="form-label">Área de atuação</label>
                    <textarea class="form-control" id="area_atuacao" rows="4" placeholder="<?php echo($area);?>" readonly></textarea>
                </div>

                <div class="mb-3">
                    <label for="formacao_academica" class="form-label">Formação acadêmica</label>
                    <textarea class="form-control" id="formacao_academica" rows="4" placeholder="Dados do currículo" readonly></textarea>
                </div>

                <div class="mb-3">
                    <label for="experiencia" class="form-label">Experiência</label>
                    <textarea class="form-control" id="experiencia" rows="4" placeholder="<?php echo($expe);?>" readonly></textarea>
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
                

                <div class="row">   
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="conta_cliente.php" class="btn btn-light btn-lg btn-block" type="submit">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
