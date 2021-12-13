<!-- Modal delete -->
<div class="modal fade deleteUsuario-<?= $usuario->id ?>" id="deleteUsuario-<?= $usuario->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header cabecalho">
                <h5 class="modal-title" id="exampleModalLabel">Deletar Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="POST" action="usuario/delete">
                    Certeza que deseja excluir?
                    <p> </p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary modbut" data-dismiss="modal">Cancelar</button>
                        <input type="hidden" value="<?= $usuario->id ?>" name="id">
                        <button type="submit" class="btn btn-primary modbut">Confirmar</button>
                    </div>
                </form>

            </div>

            
        </div>

    </div>
</div>
<!-- Fim Modal delete -->