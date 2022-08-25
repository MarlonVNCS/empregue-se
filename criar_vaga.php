<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    

</head>
<body class="bg-dark text-light">
    <div class="container" style="max-width: 26.5rem;">
        <header class="py-5 text-center">
            <div>
                <a href="https://github.com/MarlonVNCS/empregue-se">
                    <img class="d-block mx-auto mb-4" src="https://bulma.io/images/placeholders/128x128.png" alt="" width="110" height="110">
                </a> 
            </div>
            <h2>Empregue-se</h2>

        </header>
        <div class="row">
            <div class="text-center">
                <h4>Vaga de emprego</h4>
            </div>
            <form method="POST" class="needs-validation">
                <div class="mb-3">
                    <label for="nome_vaga" class="form-label">Nome da vaga</label>
                    <input class="form-control" id="nome_vaga" type="text" placeholder=" Aviãozinho das pizzas" > <!-- não deixa alterar o q esta na caixa de texto readonly-->
                    
                </div>
                <div class="mb-3">
                    <label for="nome_empresa" class="form-label">Nome da empresa</label>
                    <input class="form-control" id="nome_empresa" type="text" placeholder="Ciro das massas"> 
                    
                </div>
                

                <div class="mb-3">
                    <label for="descrição" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descrição" rows="4" placeholder="levar a vida com leveza" ></textarea>
                </div>
                <div class="mb-3">
                    <label for="vagas_ofertadas" class="form-label">Vagas ofertadas</label>
                    <input class="form-control" id="vagas_ofertadas" type="number" placeholder="1" min="1" > 
                    
                </div>
                   
                <div class="mb-3">
                    <label for="endereco" class="form-label">Area</label>
                    <input class="form-control" id="endereco" type="text" placeholder="Rua dos perdidos 1005" > 
                    
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
