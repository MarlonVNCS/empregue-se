<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo</title>
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
                <h4>Currículo</h4>
            </div>
            <form method="POST" class="needs-validation">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input class="form-control" type="text" value="Dados do currículo" readonly> <!-- não deixa alterar o q esta na caixa de texto readonly-->
                    
                </div>
                <div class="row">
                    <div class="col">
                    <label form="idade" class="form-label">Idade</label>
                      <input class="form-control" type="text" value="Dados do currículo" readonly>
                    </div>
                    <div class="col">
                        <label form="sexo" class="form-label">Sexo</label>
                        <input class="form-control" type="text" value="Dados do currículo" readonly>
                        <!-- placeholder="Last name" aria-label="Last name"-->
                    </div>
                </div>

                <div class="mb-3">
                    <label for="area_atuacao" class="form-label">Área de atuação</label>
                    <textarea class="form-control" id="area_atuacao" rows="4" placeholder="Dados do currículo" readonly></textarea>
                </div>

                <div class="mb-3">
                    <label for="formacao_academica" class="form-label">Formação acadêmica</label>
                    <textarea class="form-control" id="formacao_academica" rows="4" placeholder="Dados do currículo" readonly></textarea>
                </div>

                <div class="mb-3">
                    <label for="experiencia" class="form-label">Experiência</label>
                    <textarea class="form-control" id="experiencia" rows="4" placeholder="Dados do currículo" readonly></textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <label form="email" class="form-label">Email</label>
                        <input class="form-control" type="text" value="Dados do currículo" readonly>
                    </div>
                    <div class="col">
                        <label form="numero_telefone" class="form-label">Número de telefone</label>
                            <input class="form-control" type="text" value="Dados do currículo" readonly>
                    </div>
                </div>
                   
                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input class="form-control" type="text" value="Dados do currículo" readonly> 
                    
                </div>

                <div class="row">   
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button class="btn btn-light btn-lg btn-block" type="submit">Contatar</button>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button class="btn btn-light btn-lg btn-block" type="submit">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>