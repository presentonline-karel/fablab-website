<?php snippet('general/header') ?>

<?php snippet('menu/menu-white')?>



<div class="container container-article article-wrapper">

    <?php //BLOGPOST CONTENT ?>
    <section class="content-article">
        <h1 class="content-article__title h1"><?=$page->title()->html()?></h1>

        <?php if($img = $page->image()): ?>
            <img src="<?=$img->url()?>" alt="<?=$img->alt()?>">
        <?php endif; ?>



        <!-- Trigger/Open The Modal -->
        <button id="myBtn"><i class="fa fa-share"></i> Delen</button>

            <div id="myModal" class="modal">

            <div class="modal-content">
                <div class="modal-content__header">
                    <span class="close">&times;</span>
                    <p class="modal-content__header__title">Delen</p>
                </div>

                <div class="modal-content__socials">
                    <a href="#" class="modal-content__socials__item facebook-button"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="modal-content__socials__item twitter-button"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="modal-content__socials__item whatsapp-button"><i class="fa fa-whatsapp"></i></a>
                </div>

                <div class="modal-content__linksection">
                    <?php $url = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];?>
                    <p class="modal-content__linksection__link"><?= $url ?></p>

                    <button id="url" class="modal-content__linksection__link__copy-button"><i class="fa fa-files-o" aria-hidden="true"></i> Link kopieren</button>

                    <div class="modal-copied">
                        <div class="modal-content-copied">
                            <p class="copied-p p">Link gekopieerd</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <p class="content-article__text-wrapper__p p"><?=$page->blogText()?></p>

        <?php if ($page->workshop()->isNotEmpty()): ?>
            <?php $workshop = $page->workshop()->ToStructure();?>

            <?php foreach ($workshop as $workshopitem): ?>
                <a class="content-article__text-wrapper__a" href="<?=$workshopitem->link()?>" target="_blank">Schrijf je in voor de <?=$workshopitem->anchor()?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            <?php endforeach;?>
        <?php endif;?>

        <p class="content-article__text-wrapper__p__date p">Gepubliceerd op <?=$page->Date()->toDate('d-m-Y')?></p>
    </section>



    <?php //RELATED BLOGPOSTS ?>
    <?php $related = $page->related()->toPages(); ?>
    <?php if($related->count() > 0): ?>
        
        <section class="related-articles">
            <h2 class="related-articles__title h2">Gerelateerde blogposts</h2>

            <div class="related-articles__items blog-wrapper-related">
                <?php foreach ($related as $article): ?>

                    <article class="related-articles__items__blogpost blog-wrapper__blog-overview">
                        <a class="related-articles__items__blogpost__link article-related" href="<?=$article->url()?>">
                            <?php if($img = $article->image()): ?>
                                <img class="related-articles__items__blogpost__link__img img-related" src="<?=$img->url()?>" alt="<?= $img->alt() ?>">
                            <?php endif; ?>

                            <h2 class="related-articles__items__blogpost__link__title h2-related h2"><?=$article->title()->html()?></h2>
                        </a>
                    </article>

                <?php endforeach;?>
            </div>

        </section>
    <?php endif;?>
</div>



<?php snippet('general/footer')?>

<?=js('build/js/blog/sharebuttons.js')?>
<?= js('build/js/blog/article-shareModal.js') ?>
<?= js('build/js/blog/article-copiedModal.js') ?>