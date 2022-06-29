<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>



<div class="container container-what-is-fablab">
    <div>
        <div class="flex-row-desktop">
            <div class="introduction introduction-wif">

                <?php if ($page->whatIsFablabTitle()->isNotEmpty()) : ?>
                    <h1 class="title h1"><?= $page->whatIsFablabTitle() ?></h1>
                <?php endif; ?>



                <?php if ($page->whatIsFablabText()->isNotEmpty()) : ?>
                    <p class="introduction__p p"><?= $page->whatIsFablabText() ?></p>
                <?php endif; ?>



                <?php //GET INFO FROM CONTACTPAGE ?>
                <?php if ($contactpage = page('contact')) : ?>
                    <?php $employees = $contactpage->employees()->toStructure(); ?>
                <?php endif; ?>



                <?php //TEAM FABLAB MOBILE ?>
                <div class="team">
                    <div class="team__titlecontainer">
                        <h2 class="team__titlecontainer__title h2">Team Fablab</h2>
                    </div>



                    <div class="team__container">
                        <?php foreach ($employees as $employee): ?>
                            <div class="employee flex-row">

                                <div>
                                    <?php if ($employeeImg = $employee->image()->toFile()) : ?>
                                        <img class="team__container__img" src="<?= $employeeImg->url() ?>" alt="Picture employee FabLab">
                                    <?php endif; ?>
                                </div>

                                <div>
                                    <?php if ($employee->name()->isNotEmpty()) : ?>
                                        <h3 class="team__container__title h3"><?= $employee->name() ?></h3>
                                    <?php endif; ?>

                                    <?php if ($employee->function()->isNotEmpty()) : ?>
                                        <p class="team__container__function p"><?= $employee->function() ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <?php if ($employee->biography()->isNotEmpty()) : ?>
                                <p class="team__container__biography p"><?= $employee->biography() ?></p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>



                <?php if ($page->wordFablabTitle()->isNotEmpty()) : ?>
                    <h1 class="introduction__title wif-title h1"><?= $page->wordFablabTitle() ?></h1>
                <?php endif; ?>

                <?php if ($page->wordFablabText()->isNotEmpty()) : ?>
                    <p class="p"><?= $page->wordFablabText() ?></p>
                <?php endif; ?>



                <h1 class="h1-what-is-fablab">
                    <span>Fabrication</span>
                    <span>laboratory</span>
                </h1>
            </div>

            



            <?php //TEAM FABLAB DESKTOP ?>
            <div class="team-desktop">
                <div>
                    <div class="team-desktop__titlecontainer">
                        <h2 class="team-desktop__titlecontainer__title h2">Team Fablab</h2>
                    </div>

                    <div class="team-desktop__container">
                        <?php foreach ($employees as $employee) : ?>
                            <div class="employee flex-row">
                                <?php if ($employeeImg = $employee->image()->toFile()) : ?>
                                    <img class="team-desktop__container__img" src="<?= $employeeImg->crop(150)->url() ?>" alt="Picture employee FabLab">
                                <?php endif; ?>

                                <div>
                                    <?php if ($employee->name()->isNotEmpty()) : ?>
                                        <h3 class="team-desktop__container__title h3"><?= $employee->name() ?></h3>
                                    <?php endif; ?>

                                    <?php if ($employee->function()->isNotEmpty()) : ?>
                                        <p class="team-desktop__container__function p"><?= $employee->function() ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <?php if ($employee->biography()->isNotEmpty()) : ?>
                                <p class="team-desktop__container__biography p"><?= $employee->biography() ?></p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php snippet('general/footer')?>