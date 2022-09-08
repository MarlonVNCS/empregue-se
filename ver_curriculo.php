<?php require_once("menu.php")?>
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
