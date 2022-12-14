<?php require_once("menu_login.php")?>
<link rel="stylesheet" href="estilo.css">

<div class="row">
    <form method="POST">
        <div class="box">
            <div class="form">
                <h2>Criar conta</h2>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="mb-3">
                    <label for="nascimento">Data de nascimento</label>
                    <input type="date" class="form-control" id="nascimento" name="nascimento">
                </div>
                <div class="mb-3">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX">
                </div>
                <div class="mb-3">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
                </div>
                <div class="mb-3">
                    <label for="sexo">Gênero</label>
                    <select class="form-select" name="sexo">
                        <option value="m">Masculino</option>
                        <option value="f">Feminino</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="email@exemplo.com">
                </div>
                <div class="mb-3">
                    <label for="formacao">Formação Acadêmica</label>
                    <select class="form-select" name="formacao">
                        <?php
                                $conn = mysqli_connect("localhost", "root", "", "empregue_se");

                                if ($conn){
                                    $sql = "SELECT * FROM formacaoacademica ORDER BY id ASC";
                                    $registros = mysqli_query($conn, $sql);

                                    if(mysqli_num_rows($registros) >0 ){

                                        while ($registro =  mysqli_fetch_array($registros)) {
                                        echo("<option value='$registro[id]'>$registro[descricao]</option>");
                                        }
                                    }
                                }
                            ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button class="btn btn-light btn-lg btn-block" type="submit" name="cria">Criar</button>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="login.php" class="btn btn-light btn-lg btn-block" type="submit">Voltar</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    if(isset($_POST["cria"])){
            $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
            $nasc =mysqli_real_escape_string($conn,  $_POST["nascimento"]);
            $telefone = mysqli_real_escape_string($conn, $_POST["telefone"]);
            $cpf =mysqli_real_escape_string($conn,  $_POST["cpf"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $senha =mysqli_real_escape_string($conn,  $_POST["senha"]);
            $id_formacao =mysqli_real_escape_string($conn, $_POST["formacao"]);
            $sexo=mysqli_real_escape_string($conn, $_POST["sexo"]);

            $sal="DsVg$3";
                $junta=$sal.$senha;
                $cripto_senha=hash("sha512",$junta);

            if($conn){
                $sql = "INSERT INTO cliente(nome,cpf,nascimento, telefone, email,senha,sexo,id_formacaoAcademica) VALUES ('$nome','$cpf', '$nasc','$telefone','$email','$cripto_senha','$sexo',$id_formacao)";
                if(mysqli_query($conn, $sql)){
                    echo ("
                    <script>
                    alert('Conta criada com sucesso');
                    location.href = 'login.php';
                    </script>");
                }
            }

    }
    mysqli_close($conn);
    ?>

</body>

</html>