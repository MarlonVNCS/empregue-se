<?php
require_once("menu_principal.php");

?>

<div class="container" style="max-width: 60.0rem; margin-left: 20%;">
    <div class="row">
        <div class="col-lg-9">

            <div class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px" style="margin-top: 80px;">
                <?php 
                    $conn = mysqli_connect("localhost", "root", "", "empregue_se"); // abre a conexão com o banco de dados
                        
                    if ($conn == false){
                        die("Houve um erro ao conectar com o banco de dados");
                            
                    }
                    else{
                        if($_SESSION["tipo"] == "empresa"){
                            $id_empresa=$_SESSION["login"];
                            $sql = "SELECT * FROM vaga WHERE id_empresa=$id_empresa";
                            $resultado = mysqli_query($conn, $sql);

                            while ($vaga =  mysqli_fetch_array($resultado)) {

                                $nome = $vaga["nome"];
                                $quantidade = $vaga["quantidade"];
                                $status = $vaga["status"];
                                $disponiveis=$quantidade-$status;
                                echo("<a href='candidatos_vaga.php?id=$vaga[id]' class='btn btn-primary my-2'>
                                Vaga: $nome // Vagas disponiveis: $disponiveis</a>");                                                                          
                            }

                        }else{                    
                            $sql = "SELECT candidato_vaga.id_cliente,candidato_vaga.id_vaga,vaga.nome,vaga.quantidade,vaga.status FROM vaga, candidato_vaga WHERE id_cliente=$_SESSION[login] and id = id_vaga;";
                            $resultado = mysqli_query($conn, $sql);
                                        
                            while ($vaga =  mysqli_fetch_array($resultado)) {
                                $id = $vaga["id_vaga"];
                                $nome = $vaga["nome"];
                                $quantidade = $vaga["quantidade"];
                                $status = $vaga["status"];
                                $disponiveis=$quantidade-$status;
                                echo("<a href='mostrar_vagas_candidatadas.php?id=$id' class='btn btn-primary my-2'>
                                Vaga: $nome // Vagas disponiveis: $disponiveis</a>");       
                                
                            }
                            
                        }
                        if($_SESSION['tipo'] == 'empresa'){
                            echo('<a href="index.php" class="btn btn-primary my-2" type="submit">Voltar</a>'); 
                        }
                }
                ?><!--
                <div class="row" style="margin-top: 20px;">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="index.php" class="btn btn-light btn-lg btn-block" type="submit">Voltar</a>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</div>