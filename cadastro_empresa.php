<?php require_once("menu_login.php")?>
<link rel="stylesheet" href="estilo.css">

<div class="row">
    <form method="POST">
        <div class="box1">
            <div class="form">
                <h2>Cadastro empresa</h2>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="mb-3">
                    <label for="Endereço" class="form-label">Endereço</label>
                    <input type="text" class="form-control" name="Endereço">
                </div>
                <div class="mb-3">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="00.000.000/0000-00">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="email@exemplo.com">
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
        </div>
    </form>
</div>
<?php
    $conn = mysqli_connect("localhost", "root", "", "empregue_se");
        if(isset($_POST["cria"])){
            $nome =  mysqli_real_escape_string($conn, $_POST["nome"]);
            $cnpj =  mysqli_real_escape_string($conn, $_POST["cnpj"]);
            $email =  mysqli_real_escape_string($conn, $_POST["email"]);
            $senha =  mysqli_real_escape_string($conn, $_POST["senha"]);
            $endereco = mysqli_real_escape_string($conn, $_POST["endereco"]);

            $salt="DsVg$3";
                $junta=$salt.$senha;
                $cripto_senha=hash("sha512",$junta);

            if($conn){
                $sql = "INSERT INTO empresa(nome,cnpj,endereco,email,senha) VALUES ('$nome','$cnpj', '$endereco','$email','$cripto_senha')";
                if (mysqli_query($conn, $sql)){
                    echo ("
                    <script>
                    alert('Empresa criada com sucesso');
                    location.href = 'login.php';
                    </script>");
                }
            }

        }
    mysqli_close($conn);
    ?>
</body>

</html>