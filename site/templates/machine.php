<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>



<div class="container-machine main arrow-watch-item">
    <div class="breadcrumb breadcrump-margin" itemprop="breadcrumb">
        <?php snippet('general/breadcrumb-content') ?>
    </div>



    <div class="machine-banner">
        <h1 class="machine-banner__title h1"><?= $page->title() ?></h1>
        <a class="machine-banner__button button-small button-reserveer" href="https://reservaties.fablabkdg.be" target="_blank">Reserveer</a>
    </div>



    <!-- MACHINE CONTENT -->
    <div class="machine-image-wrapper">
        <section class="machine-wrapper">

            <!-- MACHINE TABLE INFO -->
            <table class="table machine-wrapper__info">

                <?php if ($page->type()->isNotEmpty()) : ?>
                    <tr class="table__table-row machine-wrapper__info__row">
                        <td class="table__table-row__table-data">Type</td>
                        <td class="table__table-row__table-data"><?= $page->type() ?></td>
                    </tr>
                <?php endif ?>

                <?php if ($page->manufactur()->isNotEmpty()) : ?>
                    <tr class="table__table-row machine-wrapper__info__row">
                        <td class="table__table-row__table-data">Fabrikant</td>
                        <td class="table__table-row__table-data"><?= $page->manufactur() ?></td>
                    </tr>
                <?php endif ?>

                <?php if ($page->buildVolume()->isNotEmpty()) : ?>
                    <tr class="table__table-row machine-wrapper__info__row">
                        <td class="table__table-row__table-data">Build Volume</td>
                        <td class="table__table-row__table-data"><?= $page->buildVolume() ?></td>
                    </tr>
                <?php endif ?>

                <?php if ($page->nozzle()->isNotEmpty()) : ?>
                    <tr class="table__table-row machine-wrapper__info__row">
                        <td class="table__table-row__table-data">Nozzle</td>
                        <td class="table__table-row__table-data"><?= $page->nozzle() ?></td>
                    </tr>
                <?php endif ?>

                <?php if ($page->filament()->isNotEmpty()) : ?>
                    <tr class="table__table-row machine-wrapper__info__row">
                        <td class="table__table-row__table-data">Filament</td>
                        <td class="table__table-row__table-data"><?= $page->filament() ?></td>
                    </tr>
                <?php endif ?>

                <?php if ($page->layerHeights()->isNotEmpty()) : ?>
                    <tr class="table__table-row machine-wrapper__info__row">
                        <td class="table__table-row__table-data">Layer Heights</td>
                        <td class="table__table-row__table-data"><?= $page->layerHeights() ?></td>
                    </tr>
                <?php endif ?>

                <?php if ($page->layerResolution()->isNotEmpty()) : ?>
                    <tr class="table__table-row machine-wrapper__info__row">
                        <td class="table__table-row__table-data">Layer Resolution</td>
                        <td class="table__table-row__table-data"><?= $page->layerResolution() ?></td>
                    </tr>
                <?php endif ?>

                <?php if ($page->bed()->isNotEmpty()) : ?>
                    <tr class="table__table-row machine-wrapper__info__row">
                        <td class="table__table-row__table-data">Bed</td>
                        <td class="table__table-row__table-data"><?= $page->bed() ?></td>
                    </tr>
                <?php endif ?>
            </table>



            <!-- MACHINE IMAGES -->
            <?php if ($page->images()->isNotEmpty()) : ?>
                <img class="machine-wrapper__img img" src="<?= $page->images()->first()->url() ?>" alt="<?= $page->images()->first()->alt() ?>">
            <?php endif ?>



            <!-- MACHINE FILETYPES -->
            <?php if ($page->filetypes()->isNotEmpty()) : ?>
                <div class="machine-wrapper__file-types">
                    <h2 class="machine-wrapper__file-types_title h2">
                        Supported File Types
                    </h2>
                    <p class="machine-wrapper__file-types_p p"><?= $page->filetypes() ?></p>
                </div>
            <?php endif ?>



            <!-- MACHINE FILETYPES -->
            <?php if ($page->extraSpecs()->isNotEmpty()) : ?>
                <div class="machine-wrapper__file-types">
                    <h2 class="machine-wrapper__file-types_title h2">
                        Extra info
                    </h2>
                    <p class="machine-wrapper__file-types_p p"><?= $page->extraSpecs() ?></p>
                </div>
            <?php endif ?>



            <!-- SOFTWARE -->
            <div class="machine-wrapper__file-types">
                <h2 class="machine-wrapper__file-types_title h2">
                    Software
                </h2>
                <?php if ($page->software()->isNotEmpty()) : ?>
                    <a class="software-link" href="<?= $page->software() ?>" target="_blank">Link naar de software</a>
                <?php endif; ?>
            </div>



            <!-- MACHINE MANUALS -->
            <?php if ($page->documents()->filterBy('extension', 'pdf')->isNotEmpty()) : ?>
                <div class="machine-wrapper__manual-wrapper">
                    <h2 class="machine-wrapper__manual-wrapper__title h2">Handleiding</h2>
                    <ul class="machine-wrapper__manual-wrapper__list">
                        <?php foreach ($page->documents()->filterBy('extension', 'pdf') as $pdf) : ?>
                            <li class="machine-wrapper__manual-wrapper__list__item">
                                <a class="machine-wrapper__manual-wrapper__list__item__link" href="<?= $pdf->url() ?>" target="_blank">
                                    <?= $pdf->filename() ?> / PDF
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>



            <!-- MACHINE TUTORIALS -->
            <?php if ($page->tutorials()->isNotEmpty()) : ?>
                <div class="machine-wrapper__tutorial-wrapper">
                    <h2 class="machine-wrapper__tutorial-wrapper__title h2">Tutorials</h2>
                    <div class="machine-wrapper__tutorial-wrapper__video-wrapper">
                        <?php
                        $items = $page->tutorials()->toStructure();

                        foreach ($items as $item) : ?>
                            <div class="machine-wrapper__tutorial-wrapper__video-wrapper__video">
                                <?= youtube($item->url()->html()) ?>
                                <h3 class="machine-wrapper__tutorial-wrapper__h3 h3"><?= $item->title()->html() ?></h3>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif ?>



            <!-- CREATIONS -->
            <div class="machine-wrapper__file-types">
                <h2 class="machine-wrapper__file-types_title h2">
                    Creaties
                </h2>
                <?php if ($page->creation()->isNotEmpty()) : ?>
                    <a class="software-link" href="<?= $page->creation() ?>" target="_blank">Bekijk enkele creaties</a>
                <?php endif; ?>
            </div>
        </section>



        <!-- MACHINE IMAGE DESKTOP -->
        <?php if ($page->images()->isNotEmpty()) : ?>
            <img class="machine-wrapper__img-desktop img" src="<?= $page->images()->first()->url() ?>" alt="<?= $page->images()->first()->alt() ?>">
        <?php endif ?>
    </div>



    <?php snippet('general/arrow-to-top') ?>
</div>



<?php snippet('general/footer') ?>

<?php //js('build/js/arrowShower.js') 
?>