<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>



    <div class="container container-faq">
        <section class="accordion-wrapper">
            <h1 class="accordion-wrapper__title title h1">FAQs</h2>



            <?php $faqs = $page->FAQs()->toStructure(); ?>
            <?php foreach($faqs as $faq): ?>
                <div class="accordion-item faq">
                    <div class="accordion-item__question question">

                        <?php if($faq->question()->isNotEmpty()): ?>
                            <h3 class="accordion-item__question__title h3"><?= $faq->question() ?></h3>
                        <?php endif; ?>

                        <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                        <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                    </div>



                    <div class="accordion-item__answer answer p">
                        <?php if($faq->answer()->isNotEmpty()): ?>
                            <p class="accordion-item__answer__paragraph"><?= $faq->answer() ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach ?>
        </section>
    </div>



<?php snippet('general/footer')?>

<?= js('build/js/general/accordion.js') ?>