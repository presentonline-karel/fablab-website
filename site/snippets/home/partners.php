<div class="home-container__partners">
    <h2 class="home-container__partners__title h2">Partners</h2>

    <div class="flexbox-row">
        <?php
        $partners = $page->partners()->toStructure();

        foreach ($partners as $partner): ?>
            <a href="<?= $partner->website() ?>" target="_blank"><img class="home-container__partners__img" src="<?= $partner->logo()->toFile()->url() ?>" alt="Logo partner"></a>
        <?php endforeach;?>
    </div>
</div>