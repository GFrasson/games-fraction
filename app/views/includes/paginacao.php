<nav class="paginacao" aria-label="Navegação de página exemplo">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="produtos?pagina=<?= $paginaAtual > 1 ? $paginaAtual -1 : 1 ?>" aria-label="Anterior">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Anterior</span>
            </a>
        </li>
        
        <?php  for($pagina=0;$pagina < $quantPaginas;$pagina++) : ?>
        <li class="page-item"><a class="page-link" href="produtos?pagina=<?= $pagina +1 ?>"><?= $pagina +1 ?></a></li>
        <?php endfor; ?>
        <li class="page-item">

            <a class="page-link" href="produtos?pagina=<?= $paginaAtual < $quantPaginas ? $paginaAtual + 1 : $quantPaginas ?>" aria-label="Próximo">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Próximo</span>
            </a>
        </li>
    </ul>
</nav>