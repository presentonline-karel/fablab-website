<?php $infomap = $site->infoLinks()->toStructure();

    foreach ($infomap as $link): ?>
        <a class="footer__content__block__link" href="<?= $link->page()->toPage()->url() ?>"><?= $link->anchor() ?></a>
    <?php endforeach; ?>