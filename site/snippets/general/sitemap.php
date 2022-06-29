<?php
    $sitemap = $site->navigationLinks()->toStructure();
    
    foreach ($sitemap as $link): ?>
        <a class="footer__content__block__link" href="<?= $link->page()->toPage()->url() ?>"><?= $link->anchor() ?></a>
    <?php endforeach; ?>