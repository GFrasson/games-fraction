<!-- Modal View -->
<div class="modal fade viewUsuario-<?= $usuario->id ?>" id="viewUsuario-<?= $usuario->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header cabecalho">
                <h5 class="modal-title" id="exampleModalLabel">Visualizar Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- <form> -->

                <div class="form-group">
                    <label for="input-nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" disabled placeholder="<?= $usuario->nome ?>">
            
                </div>

                <div class="form-group">
                    <label for="input-nome" >Email:</label>
                    <input type="text" class="form-control" id="nome" disabled placeholder="<?= $usuario->email ?>">
                </div>

                <p> </p>

                <!-- </form> -->

            </div>
            
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary modbut" data-dismiss="modal">Fechar</button>
            </div>
        </div>

    </div>
</div>
<!-- Fim Modal view -->
