<?php
require_once("menu_principal.php");

?>

<div class="container py-5">
    <div class="row">

        <div class="col-lg-3">


            <div class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px">

                <h1 class="h2">Filtros</h1>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <label>Escolaridade</label>
                <label class="list-group-item d-flex gap-2">
                    <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked="">
                    <span><label style="vertical-align: inherit;"><label style="vertical-align: inherit;">
                                Ensino fundamental
                            </label></label><small class="d-block text-muted"><label
                                style="vertical-align: inherit;"></label></small>
                    </span>
                </label>
                <label class="list-group-item d-flex gap-2">
                    <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                    <span><label style="vertical-align: inherit;"><label style="vertical-align: inherit;">
                                Ensino médio
                            </label></label><small class="d-block text-muted"><label
                                style="vertical-align: inherit;"></label></small>
                    </span>
                </label>
                <label class="list-group-item d-flex gap-2">
                    <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                    <span><label style="vertical-align: inherit;"><label style="vertical-align: inherit;">
                                Ensino superior
                            </label></label><small class="d-block text-muted"><label
                                style="vertical-align: inherit;"></label></small>
                    </span>
                </label>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <label>Cidade</label>
                <?php  
                            // abre a conexao com o banco de dados
                            $conn = mysqli_connect("localhost", "root", "", "empregue_se");

                            if ($conn){
                            $sql = "SELECT * FROM cidade ORDER BY nome ASC";
                            $registros = mysqli_query($conn, $sql);

                                if(mysqli_num_rows($registros) >0 ){
                                    

                                    while ($registro =  mysqli_fetch_array($registros)) {
                                        echo("
                                        <label class='list-group-item d-flex gap-2'>
                                        <input class='form-check-input flex-shrink-0' type='checkbox' value='' name ='box'>
                                        <option value='$registro[id]'>$registro[nome]</option>
                                        </label>
                                        ");
                                        
                                    }
                                }
                            }
                        ?>


                </label>
            </div>

        </div>

        <div class="col-lg-9">

            <div class="dropdown d-flex flex-row-reverse">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Ordenar por
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">A-Z</a></li>
                    <li><a class="dropdown-item" href="#">Idade</a></li>
                </ul>
            </div>

            <div class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px">
                <?php 
                    $conn = mysqli_connect("127.0.0.1", "root", "", "empregue_se"); // abre a conexão com o banco de dados
                        
                    if ($conn == false){
                        die("Houve um erro ao conectar com o banco de dados");
                            
                    }
                    else{
                        if(isset($_SESSION['tipo'])){
                            if($_SESSION['tipo'] == 'empresa'){    
                                $id_empresa=$_SESSION["login"];
                                $sql = "SELECT * FROM vaga WHERE id_empresa=$id_empresa";
                                $resultado = mysqli_query($conn, $sql);
                            }else{
                                $sql = "SELECT * FROM vaga ORDER BY nome ASC";
                                $resultado = mysqli_query($conn, $sql);
                            }
                                    
                        }else{
                            $sql = "SELECT * FROM vaga ORDER BY nome ASC";
                            $resultado = mysqli_query($conn, $sql);
                        }
                        while ($vaga =  mysqli_fetch_array($resultado)) {

                            $nome = $vaga["nome"];
                            $quantidade = $vaga["quantidade"];
                            $status = $vaga["status"];
                            $disponiveis=$quantidade-$status;
                            echo("<a href='ver_vaga.php?id=$vaga[id]' class='btn btn-primary my-2'>
                            Vaga: $nome // Vagas disponiveis: $disponiveis</a>");                                                                          
                        }
                    }



                ?>



            </div>

        </div>




    </div>
    <div>

    </div>

</div>