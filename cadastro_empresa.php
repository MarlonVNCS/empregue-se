<?php require_once("menu_login.php")?>
<div class="row">
    <div class="text-center">
        <h4>Cadastro empresa</h4>
    </div>
    <form method="POST" class="needs-validation">
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
        <div class="d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-light btn-lg btn-block" type="submit" name='cria'>Criar</button>
        </div>
    </form>
    <div class="text-warning">
        <a href="login.php" style="font-size:110%;" class="text-warning text-decoration-none">Voltar</a>
        <div id="contas"></div>
    </div>
</div>
</div>
<?php
    $conn = mysqli_connect("localhost", "root", "", "empregue_se");
        if(isset($_POST["cria"])){
            $nome =  mysqli_real_escape_string($conn, $_POST["nome"]);
            $cnpj =  mysqli_real_escape_string($conn, $_POST["cnpj"]);
            $email =  mysqli_real_escape_string($conn, $_POST["email"]);
            $senha =  mysqli_real_escape_string($conn, $_POST["senha"]);
            $endereco = mysqli_real_escape_string($conn, $_POST["endereco"]);
            if($conn){
                $sql = "INSERT INTO empresa(nome,cnpj,endereco,email,senha) VALUES ('$nome','$cnpj', '$endereco','$email','$senha')";
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