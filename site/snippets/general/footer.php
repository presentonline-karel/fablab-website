        <footer class="footer">

            <?php // FLEXBOX ?>
            <section class="footer__content">

                <?php // BLOCK ?>
                <div class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer first-title h4">Contact</h4>

                    <?php if ($site->address()->isNotEmpty()): ?>
                        <a class="footer__content__block__link" href="https://www.google.be/maps/place/Salesianenlaan+90,+2660+Antwerpen/@51.1732441,4.3693704,17z/data=!3m1!4b1!4m5!3m4!1s0x47c3f150286bde31:0x540bf1fb6f744868!8m2!3d51.1732441!4d4.3715591" target="_blank"><i class="fa fa-map-marker location-icon" aria-hidden="true"></i><?=$site->address()?></a>
                    <?php endif;?>

                    <?php if ($site->email()->isNotEmpty()): ?>
                        <a class="footer__content__block__link footer__content__block__link-email" href="mailto: <?=$site->email()?>"><i class="fa fa-envelope" aria-hidden="true"></i><?=$site->email()?></a>
                    <?php endif;?>

                    <div class="footer__content__block__socialsflexbox socials-white">
                        <?php snippet('general/socials')?>
                    </div>
                </div>



                <?php // BLOCK - DESKTOP LAYOUT SITEMAP ?>
                <div id="sitemap-desktop" class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer h4">Navigatie</h4>

                    <?php snippet('general/sitemap')?>
                </div>



                <?php // BLOCK - DESKTOP LAYOUT PAGES ?>
                <div id="pages-desktop" class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer h4">Info</h4>

                    <?php snippet('general/infomap')?>
                </div>



                <?php // BLOCK ?>
                <div class="footer__content__block">

                    <?php if ($site->openhoursTitle()->isNotEmpty()): ?>
                        <h4 class="footer__content__block__title h4-footer h4"><?=$site->openhoursTitle()?></h4>
                    <?php endif;?>

                    <div class="footer__content__block__openhours">

                        <?php if ($site->openhoursKdGTitle()->isNotEmpty()): ?>
                            <h5 class="footer__content__block__openhours__title h5-footer h5"><?= $site->openhoursKdGTitle() ?></h5>
                        <?php endif;?>

                        <?php if ($site->openhoursKdGText()->isNotEmpty()): ?>
                            <p class="footer__content__block__openhours__paragraph"><?= $site->openhoursKdGText() ?></p>
                        <?php endif;?>
                    </div>

                    <div class="footer__content__block__openhours">

                        <?php if ($site->openhoursExternTitle()->isNotEmpty()): ?>
                            <h5 class="footer__content__block__openhours__title h5-footer h5"><?= $site->openhoursExternTitle()?> </h5>
                        <?php endif;?>

                        <?php if ($site->openhoursExternText()->isNotEmpty()): ?>
                            <p class="footer__content__block__openhours__paragraph"><?= $site->openhoursExternText() ?></p>
                        <?php endif;?>
                    </div>
                </div>



                <?php // BLOCK - MOBILE LAYOUT SITEMAP + PAGES ?>
                <div class="footer__content__flexbox">
                    <div class="footer__content__flexbox__block">
                        <h4 class="footer__content__block__title h4-footer h4">Navigatie</h4>

                        <?php snippet('general/sitemap')?>
                    </div>

                    <div class="footer__content__flexbox__block">
                        <h4 class="footer__content__block__title h4-footer h4">Info</h4>

                        <?php snippet('general/infomap')?>
                    </div>
                </div>



                <?php // BLOCK ?>
                <?php if($site->partnersFooter()->isNotEmpty()): ?>
                    <?php $partnersFooter = $site->partnersFooter()->toStructure(); ?>
                    <div class="footer__content__block">
                        <h4 class="footer__content__block__title h4-footer h4">Met steun van</h4>

                        <?php foreach($partnersFooter as $partner): ?>
                            <div class="footer__content__block__imageholder">
                                <a href="<?= $partner->website() ?>" target="_blank"><img class="footer__content__block__imageholder__img" src="<?= $partner->logo()->toFile()->url() ?>" alt="KdG logo"></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>



            <section class="footer__copyright">
                &#169; 2021 FabLab KdG.
            </section>
        </footer>





        <footer id="footer-tablet-landscape">
            <?php // FLEXBOX ?>
            <section class="footer__content">

                <?php // BLOCK ?>
                <div class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer first-title h4">Contact</h4>

                    <?php if ($site->address()->isNotEmpty()): ?>
                        <a class="footer__content__block__link" href="https://www.google.be/maps/place/Salesianenlaan+90,+2660+Antwerpen/@51.1732441,4.3693704,17z/data=!3m1!4b1!4m5!3m4!1s0x47c3f150286bde31:0x540bf1fb6f744868!8m2!3d51.1732441!4d4.3715591" target="_blank"><i class="fa fa-map-marker location-icon" aria-hidden="true"></i><?=$site->address()?></a>
                    <?php endif;?>

                    <?php if ($site->email()->isNotEmpty()): ?>
                        <a class="footer__content__block__link footer__content__block__link-email" href="mailto: <?=$site->email()?>"><i class="fa fa-envelope" aria-hidden="true"></i><?=$site->email()?></a>
                    <?php endif;?>

                    <div class="footer__content__block__socialsflexbox socials-white">
                        <?php snippet('general/socials')?>
                    </div>
                </div>



                <?php // BLOCK - DESKTOP LAYOUT SITEMAP ?>
                <div id="sitemap-desktop" class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer h4">Navigatie</h4>

                    <?php snippet('general/sitemap')?>
                </div>



                <?php // BLOCK - DESKTOP LAYOUT PAGES ?>
                <div id="pages-desktop" class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer h4">Info</h4>

                    <?php snippet('general/infomap')?>
                </div>



                <?php // BLOCK ?>
                <div class="footer__content__block">

                    <?php if ($site->openhoursTitle()->isNotEmpty()): ?>
                        <h4 class="footer__content__block__title h4-footer h4"><?=$site->openhoursTitle()?></h4>
                    <?php endif;?>

                    <div class="footer__content__block__openhours">

                        <?php if ($site->openhoursKdGTitle()->isNotEmpty()): ?>
                            <h5 class="footer__content__block__openhours__title h5-footer h5"><?= $site->openhoursKdGTitle() ?></h5>
                        <?php endif;?>

                        <?php if ($site->openhoursKdGText()->isNotEmpty()): ?>
                            <p class="footer__content__block__openhours__paragraph"><?= $site->openhoursKdGText() ?></p>
                        <?php endif;?>
                    </div>

                    <div class="footer__content__block__openhours">

                        <?php if ($site->openhoursExternTitle()->isNotEmpty()): ?>
                            <h5 class="footer__content__block__openhours__title h5-footer h5"><?= $site->openhoursExternTitle()?> </h5>
                        <?php endif;?>

                        <?php if ($site->openhoursExternText()->isNotEmpty()): ?>
                            <p class="footer__content__block__openhours__paragraph"><?= $site->openhoursExternText() ?></p>
                        <?php endif;?>
                    </div>
                </div>



                <?php // BLOCK - MOBILE LAYOUT SITEMAP + PAGES ?>
                <div id="sitemap-desktop-mobile" class="footer__content__flexbox">
                    <div class="footer__content__flexbox__block">
                        <h4 class="footer__content__block__title h4-footer h4">Navigatie</h4>

                        <?php snippet('general/sitemap')?>
                    </div>

                    <div class="footer__content__flexbox__block">
                        <h4 class="footer__content__block__title h4-footer h4">Info</h4>

                        <?php snippet('general/infomap')?>
                    </div>
                </div>
            </section>

            <section class="footer-partners">
            <?php // BLOCK ?>
                <?php if($site->partnersFooter()->isNotEmpty()): ?>
                    <?php $partnersFooter = $site->partnersFooter()->toStructure(); ?>
                    <div class="footer__content__block">
                        <h4 class="footer__content__block__title h4-footer h4">Met steun van</h4>

                        <?php foreach($partnersFooter as $partner): ?>
                            <div class="footer__content__block__imageholder">
                                <a href="<?= $partner->website() ?>" target="_blank"><img class="footer__content__block__imageholder__img" src="<?= $partner->logo()->toFile()->url() ?>" alt="KdG logo"></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>



            <section class="footer__copyright">
                &#169; 2021 FabLab KdG.
            </section>
        </footer>



        <?php snippet('general/arrow-to-top') ?>

        <?= js('build/js/general/responsive-nav.js') ?>
        <?= js('build/js/general/arrowShower.js') ?>
        <?php //js('build/js/screenHeight.js') ?>
    </body>
</html>