<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>



    <div class="container-contact contact-container">
        <div class="contact-container__contact sectionOne">
            <div class="contact-container__contact__flexbox">
                <div class="contact-container__contact__flexbox__data">

                    <?php if($page->pageTitle()->isNotEmpty()): ?>
                        <h1 class="contact-container__contact__flexbox__title h1"><?= $page->pageTitle() ?></h1>
                    <?php endif; ?>

                    <?php if($page->address()->isNotEmpty()): ?>
                        <a class="contact-container__contact__flexbox__data__link" href="https://www.google.be/maps/place/Salesianenlaan+90,+2660+Antwerpen/@51.1732441,4.3693704,17z/data=!3m1!4b1!4m5!3m4!1s0x47c3f150286bde31:0x540bf1fb6f744868!8m2!3d51.1732441!4d4.3715591" target="_blank"><i class="fa fa-map-marker location-icon" aria-hidden="true"></i> <?= $page->address() ?></a>
                    <?php endif; ?>

                    <?php if($page->email()->isNotEmpty()): ?>
                        <a class="contact-container__contact__flexbox__data__link" href="mailto: <?= $page->email() ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?= $page->email() ?></a>
                    <?php endif; ?>



                    <div class="footer__content__block__socialsflexbox socials-grey">
                        <?php snippet('general/socials') ?>
                    </div>



                    <div class="contact-container__reserve">

                        <?php if($page->reserveTitle()->isNotEmpty()): ?>
                            <h2 class="contact-container__reserve__title h2"><?= $page->reserveTitle() ?></h2>
                        <?php endif; ?>

                        <?php if($page->reserveText()->isNotEmpty()): ?>
                            <p class="contact-container__reserve__paragraph p">
                                <?= $page->reserveText() ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>



                <?php snippet('contact/contact-form') ?>
            </div>
        </div>



        <?php //GENERAL INFO MARK + ESTHER ?>
        <div class="contact-container__general">
            <?php if($page->generalTitle()->isNotEmpty()): ?>
                <h2 class="contact-container__general__title h2"><?= $page->generalTitle() ?></h2>
            <?php endif; ?>

            <?php if($page->generalText()->isNotEmpty()): ?>
                <p class="contact-container__general__paragraph p">
                    <?= $page->generalText() ?>
                </p>
            <?php endif; ?>

            <div class="contact-container__general__flexbox">
            
                <?php //EMPLOYEES ?>
                <?php $employees = $page->employees()->toStructure(); ?>

                <?php foreach ($employees as $employee): ?>
                    <?php if($image = $employee->image()->toFile()): ?>
                        <?php $image = $employee->image()->toFile(); ?>
                    <?php endif; ?>



                    <div class="contact-container__general__flexbox__left">
                        <?php if($image->url() !== ''): ?>
                            <img class="contact-container__general__flexbox__left__img img" src="<?= $image->url() ?>" alt="Employee FabLab profile picture">
                        <?php endif; ?>

                        <?php if($employee->name()->isNotEmpty()): ?>
                            <h3 class="contact-container__general__flexbox__left__title h3"><?= $employee->name() ?></h3>
                        <?php endif; ?>

                        <?php if($employee->function()->isNotEmpty()): ?>
                            <p class="contact-container__general__flexbox__left__function p"><?= $employee->function() ?></p>
                        <?php endif; ?>

                        <?php if($employee->tel()->isNotEmpty()): ?>
                            <a class="contact-container__general__flexbox__left__contact" href="tel: <?= $employee->tel() ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?= $employee->tel() ?></a>
                        <?php  endif; ?>

                        <?php if($employee->email()->isNotEmpty()): ?>
                            <a class="contact-container__general__flexbox__left__contact" href="mailto: <?= $employee->email() ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?=$employee->email()?></a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>



        <?php snippet('contact/tabbar-accessibility') ?>

        <?php snippet('contact/maps') ?>
    </div>

    
    
<?php snippet('general/footer')?>

<?= js('build/js/general/tabbar.js') ?>
<?= js('build/js/contact/contact-form-validation.js') ?>