<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>



<div class="container container-article article-wrapper">

    <!-- BLOGPOST CONTENT -->
    <section class="content-article">
        <h1 class="content-article__title h1"><?= $page->title()->html() ?></h1>



        <!-- HEADER -->
        <?php if ($page->youtubeUrl()->isNotEmpty()) : ?>
            <div class="youtube-video">
                <iframe width="100%" height="100%" src="<?= $page->youtubeUrl() ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        <?php elseif ($image = $page->bannerImg()->toFile()) : ?>
            <img class="content-article__image" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
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
                    <?php $url = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
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



        <!-- BLOGTEXT -->
        <?php if ($page->blogText()->isNotEmpty()) : ?>
            <p class="content-article__text-wrapper__p p"><?= $page->blogText() ?></p>
        <?php endif; ?>



        <!-- SUBPHOTO1 -->
        <div class="content-article__text-wrapper__subphoto">
            <?php if ($firstSubPhoto = $page->firstSubPicture()->toFile()) : ?>
                <img src="<?= $firstSubPhoto->url() ?>">
            <?php endif; ?>
        </div>

        <!-- SUBTEXT1 -->
        <?php if ($page->firstSubBlogText()->isNotEmpty()) : ?>
            <p class="content-article__text-wrapper__p p"><?= $page->firstSubBlogText() ?></p>
        <?php endif; ?>



        <!-- SUBPHOTO2 -->
        <div class="content-article__text-wrapper__subphoto">
            <?php if ($secondSubPicture = $page->secondSubPicture()->toFile()) : ?>
                <img src="<?= $secondSubPicture->url() ?>">
            <?php endif; ?>
        </div>

        <!-- SUBTEXT2 -->
        <?php if ($page->secondSubBlogText()->isNotEmpty()) : ?>
            <p class="content-article__text-wrapper__p p"><?= $page->secondSubBlogText() ?></p>
        <?php endif; ?>



        <!-- SUBPHOTO3 -->
        <div class="content-article__text-wrapper__subphoto">
            <?php if ($thirdSubPicture = $page->thirdSubPicture()->toFile()) : ?>
                <img src="<?= $thirdSubPicture->url() ?>">
            <?php endif; ?>
        </div>

        <!-- SUBTEXT3 -->
        <?php if ($page->thirdSubBlogText()->isNotEmpty()) : ?>
            <p class="content-article__text-wrapper__p p"><?= $page->thirdSubBlogText() ?></p>
        <?php endif; ?>



        <!-- AUTHOR -->
        <p class="content-article__text-wrapper__p__date p">Gepubliceerd op <?= $page->Date()->toDate('d-m-Y') ?></p>



        <?php if ($page->workshop()->isNotEmpty()) : ?>
            <?php $workshop = $page->workshop()->ToStructure(); ?>

            <?php foreach ($workshop as $workshopitem) : ?>
                <a class="content-article__text-wrapper__a" href="<?= $workshopitem->link() ?>" target="_blank">Schrijf je in voor de <?= $workshopitem->anchor() ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            <?php endforeach; ?>
        <?php endif; ?>



        <!-- <div class="carousel-article">
            <?php //snippet('junk/carousel') 
            ?>
        </div> -->



        <section class="carousel">
            <?php if ($page->creations()->isNotEmpty()) : ?>
                <h2 class="carousel__title h2">Creaties</h2>

                <?php $creations = $page->creations()->toStructure(); ?>

                <div class="carousel__creations">
                    <?php foreach ($creations as $creation) : ?>
                        <?php $image = $creation->creationImage()->toFile(); ?>
                        <div>
                            <a href="<?= $image->url() ?>" data-lightbox="creations" data-title="<?= $creation->creationsText() ?> - <?= $creation->creationsCreator() ?>" data-alt="Creation"><img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>"></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
    </section>



    <?php //RELATED BLOGPOSTS 
    ?>
    <?php $related = $page->related()->toPages(); ?>
    <?php if ($related->count() > 0) : ?>

        <section class="related-articles">
            <h2 class="related-articles__title h2">Gerelateerde blogposts</h2>

            <div class="related-articles__items blog-wrapper-related">
                <?php foreach ($related as $article) : ?>

                    <article class="related-articles__items__blogpost blog-wrapper__blog-overview">
                        <a class="related-articles__items__blogpost__link article-related" href="<?= $article->url() ?>">
                            <?php if ($img = $article->image()) : ?>
                                <img class="related-articles__items__blogpost__link__img img-related" src="<?= $img->url() ?>" alt="<?= $img->alt() ?>">
                            <?php endif; ?>

                            <h2 class="related-articles__items__blogpost__link__title h2-related h2"><?= $article->title()->html() ?></h2>
                        </a>
                    </article>

                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>
</div>



<?php snippet('general/footer') ?>

<?= js('build/js/blog/sharebuttons.js') ?>
<?= js('build/js/blog/article-shareModal.js') ?>
<?= js('build/js/blog/article-copiedModal.js') ?>
<?= js('build/js/general/lightbox-plus-jquery.js') ?>