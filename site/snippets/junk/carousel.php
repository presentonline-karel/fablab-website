<section class="carousel">
    <?php if($page->creations()->isNotEmpty()): ?>
        <h2 class="carousel__title h2">Creaties</h2>

        <?php $creations = $page->creations()->toStructure(); ?>

        <div class="carousel__creations">
            <?php foreach($creations as $creation): ?>
                <?php $image = $creation->creationImage()->toFile(); ?>
                <div>
                    <a href="<?= $image->url() ?>" data-lightbox="creations" data-title="<?= $creation->creationsText() ?> - <?= $creation->creationsCreator() ?>" data-alt="Creation"><img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>"></a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>