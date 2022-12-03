<?php
require_once("menu_principal.php");

?>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-9">

            <div class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px">
                <?php 
                    $conn = mysqli_connect("127.0.0.1", "root", "", "empregue_se"); // abre a conexão com o banco de dados
                        
                    if ($conn == false){
                        die("Houve um erro ao conectar com o banco de dados");
                            
                    }
                    else{
                        $id_vaga = $_GET["id"];

                            $sql = "SELECT * FROM candidato_vaga WHERE id_vaga = $id_vaga";
                            $resultado = mysqli_query($conn, $sql);

                            while ($vaga =  mysqli_fetch_array($resultado)) {
    
                                $id_cliente_vaga = $vaga["id_cliente"];
                                $_SESSION["id_vaga"] = $id_vaga;
                                $sql = $sql = "SELECT * FROM cliente WHERE id = $id_cliente_vaga";
                                $result = mysqli_query($conn, $sql);

                                while ($cliente =  mysqli_fetch_array($result)) {
                                    
                                    $id_cliente = $cliente["id"];
                                    $nome = $cliente["nome"];
                                    $sexo = $cliente["sexo"];


                                    echo("<a href='curriculo.php?id=$id_cliente' class='btn btn-primary my-2'>
                                    Cliente: $nome // Sexo: $sexo</a>");          
                                
                                }                                                                                                     
                         }
                         if($_SESSION['tipo'] == 'empresa'){
                            echo('<a href="vagas_candidatadas.php" class="btn btn-primary my-2" type="submit">Voltar</a>'); 
                        }
                    }
                         



                ?>



            </div>

        </div>




    </div>

</div>