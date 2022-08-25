<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/criar_contas.js"></script>

</head>
<body class="bg-dark text-light">
    <div class="container" style="max-width: 26.5rem;">
        <header class="py-5 text-center">
            <div>
                <a href="login.html">
                    <img class="d-block mx-auto mb-4" src="https://bulma.io/images/placeholders/128x128.png" alt="" width="110" height="110">
                </a> 
            </div>
            <h2>Empregue-se</h2>
            <p class="lead">Encontre o emprego que você tanto quer!</p>
        </header>
        <div class="row">
            <div class="text-center">
                <h4>Fazer login</h4>
            </div>
            <form method="POST" class="needs-validation">
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email@exemplo.com" name="email">
                </div>
                <div class="mb-3">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha">
                    <a class="text-light text-decoration-none" href="">Esqueceu sua senha?</a>
                </div>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="btn btn-light btn-lg btn-block" type="submit" name="enviar" value="Enviar">Acessar</button> 
                </div>
            </form>
        </div>
        <div id="php" class="text-danger">
            <?php
                if(isset($_POST['enviar']) == true){
                    if(empty($_POST['email'])){
                        echo("Por favor, preencha o email.<br>");
                    } else{
                    if(empty($_POST['senha'])){
                        echo("Por favor, preencha a senha.");
                    }else{

                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $email_valido = false;

                    $conn = mysqli_connect("127.0.0.1","root","","empregue_se");

                    if($conn){
                        $sql = "SELECT email, senha FROM empresa";
                        $registros = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($registros) > 0){
                            while ($registro = mysqli_fetch_array($registros) ){
                                if($registro['email'] == $email){
                                    $email_valido = true;
                                    if($registro['senha'] == $senha){
                                        header("location: criar_vaga.html");
                                    } else{
                                        echo("Senha incorreta");
                                    }
                                }
                            }
                            
                        }
                        
                        $sql = "SELECT email, senha FROM cliente";
                        $registros = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($registros) > 0){
                            while ($registro = mysqli_fetch_array($registros) ){
                                if($registro['email'] == $email){
                                    $email_valido = true;
                                    if($registro['senha'] == $senha){
                                        header("location: criar_curriculo.html");
                                    } else{
                                        echo("Senha incorreta");
                                    }
                                }
                            }
                            
                        }

                        if(!$email_valido){
                            echo("Conta não existente.");
                        }
                    }
                    
                }}}
                ?>
        </div>
        
        <div class="text-warning"> <!-- Essa classe só ta para destacar o texto enquanto n arrumamos o botão-->
            <button id="possui" class="text-warning btn" type="button" >Não possui conta?</button> <br>
            <div id="contas"></div>
        </div>
    </div>
    

</body>
</html>