<?php
if(session_id() == '') {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empregue-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/criar_contas.js"></script>
    <script src="js/masks.js"></script>
    <script src="js\jQuery-Mask-Plugin-master\src\jquery.mask.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

</head>

<body class="bg-dark text-light">
    <header class="text-center">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Empregue-se</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="conta.php">Conta</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Contatos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="https://ifrs.edu.br/rolante/">IFRS Campus Rolante</a>
                                </li>
                                <li><a class="dropdown-item" href="https://linktr.ee/empregue">Redes sociais</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://github.com/MarlonVNCS/empregue-se">Github</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <div class="btn-group">
                            <button class="btn btn-secondary btn" name="conta" type="button">
                                Conta
                            </button>
                            <button type="button" class="btn btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-lg-end">
                                <?php validar()?> 
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                    function validar(){
                        if(isset($_SESSION["login"])){
                            if($_SESSION["tipo"] == "cliente"){

                                echo('<li><a class="dropdown-item" href="curriculo.php">Curriculo</a>
                                </li>
                                <li><a class="dropdown-item" href="vagas_candidatadas.php">Vagas candidatadas</a></li>
                                <li>
                                <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout.php">Sair</a>
                                </li>
                                ');
                            } else if($_SESSION["tipo"] == "empresa"){
                                echo('<li><a class="dropdown-item" href="index.php">Vagas</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Conta</a></li>
                                <li>
                                <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout.php">Sair</a>
                                </li>
                                ');
                            }
                        }else{
                            echo('<li>
                                    <a class="dropdown-item" href="login.php">Entrar/Criar conta</a>
                                </li>
                                ');
                        }

                    }
                    
                ?>
            </div>
        </nav>
    </header>