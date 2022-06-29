<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>




<div class="container container-blog">
    <h1 class="h1"><?= $page->Subtitle()->html() ?></h1>

    <div class="container-blog__tag-filter">
        <?php //GET CURRENT URL 
        ?>
        <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

        <div class="tag-container">
            <div class="tags">
                              
                    <?php foreach($tags as $tag): ?>
                        
                        <a class="container-blog__tag-filter__button-tag" href="<?= url($page->url(), ['params' => ['tag' => $tag]]) ?>">
                            <?= html($tag) ?>
                        </a>
                        <?php endforeach ?>
            </div>

            <div class="tag-container__button">
                <a id="remove-tag" class="container-blog__tag-filter__button-tag" href="https://fablab.karel.decoene.nxtmediatech.eu/blog">Verwijder tags</a>
            </div>
        </div>
    </div>



    <hr class="lineTags">
    <?php foreach ($tags as $tag) : ?>
        <?php if (strpos($url, $tag) !== false) : ?>
            <br>
            <p class="tag-id__p"> Blogposts over
                <b> <?php echo $tag; ?> </b>
            </p>
        <?php endif ?>
    <?php endforeach ?>



    <?php //ALL BLOGS MOBILE ?>
    <div class="blog-wrapper">
        <?php foreach ($articles as $article) : ?>
            <article class="blog-wrapper__blog-overview">
                <a href="<?= $article->url() ?>">
                    <div>
                        <?php if ($img = $article->image()) : ?>
                            <img class="blog-wrapper__blog-overview__img img" src="<?= $img->url() ?>" alt="<?= $img->alt() ?>">
                        <?php endif; ?>

                        <div class="text-wrapper-mobile">
                            <h2 class="blog-wrapper__blog-overview__text-wrapper__title h2"><?= $article->title()->html() ?></h2>
                            <p class="blog-wrapper__blog-overview__text-wrapper__p p"><?= $article->blogText()->excerpt(70) ?></p>
                        </div>
                    </div>

                    <div class="blog-wrapper__blog-overview__text-wrapper">
                        <a class="blog-wrapper__blog-overview__text-wrapper__link button-small" href="<?= $article->url() ?>">Lees artikel</a>
                    </div>
                </a>
            </article>
        <?php endforeach ?>
    </div>



    <?php //ALL BLOGS DESKTOP 
    ?>
    <div class="blog-wrapper-desktop">
        <?php foreach ($articles as $article) : ?>
            <article class="blog-wrapper__blog-overview">
                <a href="<?= $article->url() ?>">
                    <div>
                        <?php if ($img = $article->image()) : ?>
                            <img class="blog-wrapper__blog-overview__img img" src="<?= $img->url() ?>" alt="<?= $img->alt() ?>">
                        <?php endif; ?>

                        <div class="blog-wrapper__blog-overview__text-wrapper">
                            <h2 class="blog-wrapper__blog-overview__text-wrapper__title h2"><?= $article->title()->html() ?></h2>
                            <p class="blog-wrapper__blog-overview__text-wrapper__p p"><?= $article->blogText()->excerpt(70) ?></p>
                        </div>
                    </div>

                    <div>
                        <a class="blog-wrapper__blog-overview__text-wrapper__link button-small" href="<?= $article->url() ?>">Lees artikel</a>
                    </div>
                </a>
            </article>
        <?php endforeach ?>
    </div>
</div>



<?php snippet('general/footer') ?>

