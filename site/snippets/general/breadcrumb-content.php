<?php foreach ($site->breadcrumb()->not('home') as $crumb) : ?>
    <?php if ($crumb->isActive()) : ?>
        <span typeof="v:Breadcrumb">
            <span class="breadcrumb-item breadcrumb_last" property="v:title">
                <?php echo $crumb->title() ?>
            </span>
        </span>
    <?php else : ?>
        <span class="breadcrumb-item" typeof="v:Breadcrumb">
            <a href="<?php echo $crumb->url() ?>" rel="v:url" property="v:title">
                <?php echo $crumb->title() ?>
            </a>
        </span> &rsaquo;
    <?php endif ?>
<?php endforeach ?>