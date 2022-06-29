<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>

    
    
    <div class="container container-house-rules">
        <h1 class="container__title h1">Huisregels</h1>



        <?php $houseRules = $page->pdf()->ToFile(); ?>
        <a class="container__link link" href="<?= $houseRules->url() ?>" download><i class="fa fa-file-text" aria-hidden="true"></i> Download huisregels als PDF</a>



        <?php if($page->introduction()->isNotEmpty()): ?>
            <div class="container__block">
                <p class="container__p p"><?= $page->introduction() ?></p>
            </div>
        <?php endif; ?>

        <?php if($page->introduction()->isNotEmpty()): ?>
            <div class="container__block">
                <h2 class="container__block__title h2">Openingsuren</h2>
                <p class="container__p p"><?= $page->openinghours() ?></p>
            </div>
        <?php endif; ?>

        <?php if($page->generalOpeninghours()->isNotEmpty()): ?>
            <div class="container__block">
                <h2 class="container__block__title h2">Algemeen</h2>
                <p class="container__p p"><?= $page->generalOpeninghours() ?></p>
            </div>
        <?php endif; ?>

        <?php if($page->openLabMoments()->isNotEmpty()): ?>
            <div class="container__block">
                <h2 class="container__block__title h2">Open Lab Momenten</h2>
                <p class="container__p p"><?= $page->openLabMoments() ?></p>
            </div>
        <?php endif; ?>

        <?php if($page->signin()->isNotEmpty()): ?>
            <div class="container__block">
                <h2 class="container__block__title h2">Aanmelden</h2>
                <p class="container__p p"><?= $page->signin() ?></p>
            </div>
        <?php endif; ?>

        <?php if($page->toolsquare()->isNotEmpty()): ?>
            <div class="container__block">
                <h2 class="container__block__title h2">Toolsquare</h2>
                <p class="container__p p"><?= $page->toolsquare() ?></p><br>

                <?php if($page->toolsquareLink()->isNotEmpty()): ?>
                    <a class="container__link link" href="<?= $page->toolsquareLink() ?>">Toolsquare registratiepagina</a>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if($page->usageMachines()->isNotEmpty()): ?>
            <div class="container__block">
                <h2 class="container__block__title h2">Gebruik Machines</h2>
                <p class="container__p p"><?= $page->usageMachines() ?></p>
            </div>
        <?php endif; ?>

        <?php if($page->cleanliness()->isNotEmpty()): ?>
            <div class="container__block">
                <h2 class="container__block__title h2">Orde, Netheid</h2>
                <p class="container__p p"><?= $page->cleanliness() ?></p>
            </div>
        <?php endif; ?>

        <?php if($page->machinecost()->isNotEmpty()): ?>
            <div class="container__block">
                <h2 class="container__block__title h2">Machinekosten & materialen</h2>
                <p class="container__p p"><?= $page->machinecost() ?></p>
            </div>
        <?php endif; ?>



        <?php snippet('general/arrow-to-top') ?>
    </div>



<?php snippet('general/footer')?>

<?php //js('build/js/arrowShower.js') ?>