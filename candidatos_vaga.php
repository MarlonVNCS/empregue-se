<?php  
require_once("barra.php");
?>
    
    <div class="container" style="max-width: 50.5rem;">
        <div class="d-inline-flex gap-5 justify-content-center" >

            <div class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px">
                <label >Escolaridade</label>
                <label class="list-group-item d-flex gap-2">
                <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked="">
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Ensino fundamental
                    </font></font><small class="d-block text-muted"><font style="vertical-align: inherit;"></font></small>
                </span>
                </label>
                <label class="list-group-item d-flex gap-2">
                <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Ensino médio
                    </font></font><small class="d-block text-muted"><font style="vertical-align: inherit;"></font></small>
                </span>
                </label>
                <label class="list-group-item d-flex gap-2">
                <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Ensino superior
                    </font></font><small class="d-block text-muted"><font style="vertical-align: inherit;"></font></small>
                </span>
                </label>

                <li><hr class="dropdown-divider"></li>
                <label >Cidade</label>
                    <label class="list-group-item d-flex gap-2">
                    <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked="">
                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        id cidade
                        </font></font><small class="d-block text-muted"><font style="vertical-align: inherit;"></font></small>
                    </span>
                    </label>
                    <label class="list-group-item d-flex gap-2">
                    <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        id cidade
                        </font></font><small class="d-block text-muted"><font style="vertical-align: inherit;"></font></small>
                    </span>
                    </label>
                    <label class="list-group-item d-flex gap-2">
                    <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        id cidade
                        </font></font><small class="d-block text-muted"><font style="vertical-align: inherit;"></font></small>
                    </span>
                    </label>
            </div>

            <div class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px">
                <?php 
                // primeiro é preciso buscar as informacoes do registro a ser editado
                //$id_vaga = $_GET['id_vaga'];
                $id_vaga=2;

                
                        $conn = mysqli_connect("127.0.0.1", "root", "", "empregue_se"); // abre a conexão com o banco de dados
                        
                        if ($conn == false){
                            die("Houve um erro ao conectar com o banco de dados");
                            
                        }


                    if ($conn) {
                        $sql = "SELECT * FROM vaga WHERE id = $id_vaga";

                        $resultado = mysqli_query($conn, $sql);

                        // a edicao vai retornar apenas uma linha, pois a busca é pela primary key da tabela
                        if (mysqli_num_rows($resultado) == 1) {

                            // pega os dados relativo a linha que retornou e armazenada na variável abaixo
                            $vaga = mysqli_fetch_array($resultado);

                            // pegando o valor dos campos e salvando em variaveis para preencher o formulário
                            $nome 	= $vaga["nome"];
                            $quantidade= $vaga["quantidade"];
                            $status=$vaga["status"];
                            

                        } else {
                            echo ("Contato não encontrado");
                        }
                    } else {
                        die("Falha na conexão " . mysqli_connect_error() );
                    }
                ?>
                
            
                <p>
                    
                    <a href="#" class="btn btn-primary my-2">
                        <?php 
                        $disponiveis=$quantidade-$status;
                    
                        echo ("$nome");echo (" Vagas disponiveis: $disponiveis");

                        
                        ?>
                    
                    </a>
                
                </p>

                <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ordenar por 
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">A-Z</a></li>
                            <li><a class="dropdown-item" href="#">Idade</a></li>
                        </ul>
                    </div>

            </div>
            
            
        </div>
        <div>
            
        </div>
    
</div>
