<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>

<div class="container-reserve">
    <div class="reservation flex-row-desktop">
        <div>
            <h2 class="reservation__h2 h2">Maak een</h2>
            <h1 class="reservation__h1 h1">Reservatie</h1>

            <?php if ($page->paragraph()->isNotEmpty()) : ?>
                <p class="reservation__p p"><?= $page->paragraph() ?></p>
            <?php endif; ?>

            <div class="reservation__buttoncontainer">
                <a class="reservation__buttoncontainer__button button-small">Reserveer nu <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>



        <div class="reservation__imgcontainer">
            <?php if($img = $page->imageFablab()->toFile()): ?>
                <img class="reservation__imgcontainer__img" src="<?= $img->url() ?>">
            <?php endif; ?>
        </div>
    </div>



    <div class="info flex-row-desktop">
        <?php if ($page->items()->isNotEmpty()) : ?>

            <?php $items = $page->items()->toStructure(); ?>

            <?php foreach ($items as $item) : ?>
                <div class="info__item flex-row">

                    <div class="info__item__iconContainer">
                        <?php //TO PICK AN ITEM ?>
                        <?php if ($item->identifier() == "Agenda") : ?>
                            <i class="info__item__iconContainer__icon fa fa-calendar" aria-hidden="true"></i>
                        <?php elseif ($item->identifier() == "Personen") : ?>
                            <i class="info__item__iconContainer__icon fa fa-users" aria-hidden="true"></i>
                        <?php else : ?>
                            <i class="info__item__iconContainer__icon fa fa-cc-mastercard" aria-hidden="true"></i>
                        <?php endif; ?>
                    </div>



                    <div class="info__item__text">
                        <h3 class="h3"><?= $item->title() ?></h3>
                        <p class="p"><?= $item->text() ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

        <?php endif; ?>
    </div>
</div>

<?php snippet('general/footer') ?>