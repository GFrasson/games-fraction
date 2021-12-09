<!-- Modal Edit -->
<div class="modal fade editUsuario-<?= $usuario->id ?>" id="editUsuario-<?= $usuario->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header cabecalho">
                <h5 class="modal-title" id="exampleModalLabel">Editar Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="POST" action="usuario/update">

                    <div class="form-group">
                    <label class="required" for="input-nome">Nome:</label>
                    <input type="text" name="nome" value="<?= $usuario->nome ?>" class="form-control" id="nome" placeholder="Nome">
                    </div>

                    <div class="form-group">
                    <label for="input-nome" >Email:</label>
                    <input type="text" name="email" value="<?= $usuario->email ?>" class="form-control" id="email" required placeholder="Email">
                    </div>

                    <div class="form-group">
                    <label for="descricao">Senha</label>
                    <input type="password" name="senha"  class="form-control" id="senha" placeholder="***">
                    </div>

                    <p> </p>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary modbut" data-dismiss="modal">Fechar</button>
                        <input type="hidden" value="<?= $usuario->id ?>" name="id">
                        <button type="submit" class="btn btn-primary modbut">Confirmar</button>
                    </div>
                </form>

            </div>

            

        </div>

    </div>
</div>
<!-- Fim Modal Edit -->