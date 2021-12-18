<!-- Modal Edit -->
<div class="modal fade editProduto-<?=$produto->id;?>" id="editProduto-<?=$produto->id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header cabecalho">
                        <h5 class="modal-title" id="exampleModalLabel">Editar produto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="produtos/editar"  enctype="multipart/form-data"  method="POST">
                            <input hidden type="number" value="<?= $produto->id ?>" name="id">
                            <div class="form-group">
                                <label for="input-nome">Nome do produto:</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="<?=$produto->nome_produto;?>">
                            </div>

                            <div class="form-group">
                                <label for="input-nome">Descrição do produto:</label>
                                <input type="text" class="form-control" id="nome" name="descricao" required value="<?=$produto->descricao;?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Fotos do produto:</label>
                                <input multiple type="file" class="form-control-file" name="txtimagem[]" id="exampleFormControlFile1">

                            </div>
                            <div class="form-group">
                                <label for="descricao">Preço do Produto:</label>
                                <input type="text" class="form-control" id="nome" name="preco" value="<?=$produto->preco;?>">
                            </div>


                            <div class="form-group">
                                <label for="descricao">Categoria:</label>
                                <!-- <input type="text" class="form-control" id="nome" placeholder="> -->
                                <select name="categoria">
                                <option value="<?= $produto->categoria_idcategoria?>">Escolha uma categoria</option>
                                <?php foreach($categorias as $categoria):?>
                                    <option value="<?php $categoria->id?>"><?= $categoria->nome_categoria?></option>
                                <?php endforeach;?>
                            </select>

                            </div>
                            <p> </p>
                    </div>

                    <p> </p>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary modbut" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary modbut">Confirmar</button>
                </div>
                    </form>

                </div>
               
            </div>

        </div>
    </div>
    <!-- Fim Modal Edit -->