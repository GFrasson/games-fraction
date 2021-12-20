<div class="modal fade viewProduto-<?= $produto->id; ?>" id="viewProduto-<?= $produto->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Visualizar produtos</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <h5><b>Nome do produto:</b> <?= $produto->nome_produto; ?></h5>
                <h5><b>Descrição do produto:</b> <?= $produto->descricao; ?></h5>
                <h5><b>Fotos do produto:</b>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <?php for ($i = 0; $i < count($produto->imagens); $i++) : ?>
                                <div class="carousel-item<?= $i == 0 ? ' active' : ' ' ?>">
                                    <img class="d-block w-100" src="<?php echo "../../../../public/img/" . $produto->imagens[$i]->nome_imagem ?>" alt="Primeiro Slide">
                                </div>
                            <?php endfor; ?>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </h5>
                <h5><b>Preço do produto:</b> R$ <?= $produto->preco; ?></h5>
                <h5><b>Categoria do produto:</b> <?= $produto->categoria_idcategoria; ?></h5>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>

</div>