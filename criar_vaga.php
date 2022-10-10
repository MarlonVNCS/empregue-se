<?php require_once("validar.php");
require_once("menu_principal.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empregue-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/criar_contas.js"></script>
    <script src="js/masks.js"></script>
    <script src="js\jQuery-Mask-Plugin-master\src\jquery.mask.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body class="bg-dark text-light">
        <div class="row">
            <div class="text-center">
                <h4>Vaga de emprego</h4>
            </div>
            <form method="POST" class="needs-validation">
                <div class="mb-3">
                    <label for="nome_vaga" class="form-label">Nome da vaga</label>
                    <input class="form-control" id="nome_vaga" type="text" placeholder="" > <!-- não deixa alterar o q esta na caixa de texto readonly-->
                    
                </div>
                <div class="mb-3">
                    <label for="nome_empresa" class="form-label">Nome da empresa</label>
                    <input class="form-control" id="nome_empresa" type="text" placeholder=""> 
                    
                </div>
                

                <div class="mb-3">
                    <label for="descrição" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descrição" rows="4" placeholder="" ></textarea>
                </div>
                <div class="mb-3">
                    <label for="vagas_ofertadas" class="form-label">Vagas ofertadas</label>
                    <input class="form-control" id="vagas_ofertadas" type="number" placeholder="" min="1" > 
                    
                </div>
                   
                <div class="mb-3">
                    <label for="endereco" class="form-label">Area</label>
                    <input class="form-control" id="endereco" type="text" placeholder="" > 
                    
                </div>

                <div class="row">   
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-light btn-lg btn-block" type="submit">Criar</button>
                    </div>
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <button class="btn btn-light btn-lg btn-block" type="submit">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
