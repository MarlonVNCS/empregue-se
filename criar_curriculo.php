<?php require_once("menu.php")?>
        <div class="row">
            <div class="text-center">
                <h4>Currículo</h4>
            </div>
            <form method="POST" class="needs-validation">
               
                <div class="mb-3">
                    <label for="area_atuacao" class="form-label">Área de atuação</label>
                    <textarea class="form-control" id="area_atuacao" rows="6" placeholder="Dados do currículo" name="area_atuacao"></textarea>
                </div>
                <div class="mb-3">
                    <label for="experiencia" class="form-label">Experiência</label>
                    <textarea class="form-control" id="experiencia" rows="6" placeholder="Dados do currículo" name="experiencia"></textarea>
                </div>

                <div class="col">
                    <label form="endereco" class="form-label">Endereço</label>
                    <input class="form-control" type="text" value="Dados do currículo" name="endereco">
                </div>
                   <br>
                   
                <div class="row">   
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button class="btn btn-light btn-lg btn-block" type="submit" name="cria">Criar</button>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button class="btn btn-light btn-lg btn-block" type="submit" name="cancela">Cancelar</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "empregue_se");
        if(isset($_POST["cria"])){
            $area = $_POST["area_atuacao"];
            $experiencia = $_POST["experiencia"];
            $endereco =$_POST["endereco"];
            $id_email = $_GET['id_email'];
            if($conn){
                $sql = "UPDATE cliente SET areaDeAtuacao = '$area', experiencia = '$experiencia', endereco='$endereco' WHERE email = '$id_email'";
                if (mysqli_query($conn, $sql)){
                    echo ("
                    <script>
                    alert('Curruculo criado com sucesso');
                    location.href = 'login.php';
                    </script>");
                }
            }
        
        }
        mysqli_close($conn);
    ?>
</body>
</html>
