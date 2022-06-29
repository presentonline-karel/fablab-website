<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>



<?php //CATEGORIE WRAPPER 
?>
<div class="container container-categories categories-wrapper">
    <?php if($page->titlePage()->isNotEmpty()): ?>
        <h2 class="categories-wrapper__h2 h2"><?= $page->titlePage() ?></h2>
    <?php endif; ?>

    <?php if($page->paragraph()->isNotEmpty()): ?>
        <p class="categories-wrapper__p p"><?= $page->paragraph() ?></p>
    <?php endif; ?>

    <?php //CATEGORIE LIST ?>
    <ul class="categories-wrapper__machines">
        <?php foreach ($page->children()->listed() as $category) : ?>

            <?php //CATEGORY LIST ITEM ?>
            <li class="categories-wrapper__machines__category">
                <a href="<?= $category->url() ?>">
                    <figure>
                        <?php if ($thumbnail = $category->thumbnail()->ToFile()) : ?>
                            <?= $thumbnail->crop(280) ?>
                        <?php endif; ?>

                        <figcaption class="h2-categories"><?= $category->title() ?></figcaption>
                    </figure>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>



<?php snippet('general/footer') ?>