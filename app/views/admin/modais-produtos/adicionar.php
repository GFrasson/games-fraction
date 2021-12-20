 <!-- Modal Adiconar Produto -->
 <div class="modal fade addProduto" id="addProduto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data" action="produtos/create">

                        <div class="form-group">
                            <label for="input-nome">Nome Produto</label>
                            <input type="text" class="form-control" id="input-nome" placeholder="" name="nome">
                        </div>

                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="input-nome">Preço</label>
                            <input type="number" class="form-control" name="preco" id="input-nome" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Fotos do produto:</label>
                            <input multiple type="file" name="txtimagem[]" class="form-control-file" id="exampleFormControlFile1">
                            
                        </div>

                        <div class="form-group">
                            <select name="categoria">
                                <option value="" selected>Escolha uma categoria</option>
                                <?php foreach($categorias as $categoria):?>
                                    <option value="<?= $categoria->id?>"><?= $categoria->nome_categoria?></option>
                                <?php endforeach;?>
                            </select>

                        </div>
                        <p> </p>

                        <button type="submit" class="btn btn-primary modbut">Enviar</button>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary modbut" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary modbut">Confirmar</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Fim Modal Adicionar Produto -->