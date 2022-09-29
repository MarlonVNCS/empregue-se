<?php require_once("validar.php");
require_once("menu_principal.php");?>
        <div class="row">
            <div class="text-center">
                <h4>Vaga</h4>
            </div>
            <form method="POST" class="needs-validation">
                <div class="mb-3">
                    <label for="nome_vaga" class="form-label">Nome da vaga</label>
                    <input class="form-control" type="text" value="Dados da vaga" readonly> <!-- não deixa alterar o q esta na caixa de texto readonly-->
                    
                </div>
                <div class="mb-3">
                    <label for="nome_empresa" class="form-label">Empresa</label>
                    <input class="form-control" type="text" value="Dados da vaga" readonly> 
                    
                </div>
                

                <div class="mb-3">
                    <label for="descrição" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descrição" rows="4" placeholder="Dados da vaga" readonly></textarea>
                </div>
                <div class="mb-3">
                    <label for="vagas_ofertadas" class="form-label">Vagas ofertadas</label>
                    <input class="form-control" type="number" value="0" readonly> 
                    
                </div>
                   
                <div class="mb-3">
                    <label for="endereco" class="form-label">Area</label>
                    <input class="form-control" type="text" value="Dados da vaga" readonly> 
                    
                </div>

                <div class="row">   
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-light btn-lg btn-block" type="submit">Candidatar-se</button>
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
