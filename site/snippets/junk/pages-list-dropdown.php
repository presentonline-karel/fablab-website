<?php // MOBILE MENU ?>
<?php /*
<ul class="header__menu__navlinks nav-links nav-links-mobile">
    <?php foreach ($site->children()->listed() as $subpage): ?>
        <li class="header__menu__navlinks__item">
            <a class="header__menu__navlinks__item__link <?php if ($subpage->isOpen()) {echo ("active");}?>" href="<?=$subpage->url()?>"><?=$subpage->title()?></a>
        </li>
    <?php endforeach?>
</ul>

<?php // DESKTOP MENU ?>
<ul class="header__menu__navlinks nav-links nav-links-desktop">
    <?php foreach ($site->children()->listed() as $subpage): ?>
        <?php if ($subpage->title() != "Machines"): ?>
            <li class="header__menu__navlinks__item">
                <a class="header__menu__navlinks__item__link <?php if ($subpage->isOpen()) {echo ("active");}?>" href="<?=$subpage->url()?>"><?=$subpage->title()?></a>
            </li>
        <?php else: ?>
            <div class="header__menu__navlinks__dropdown dropdown">
                <button class="header__menu__navlinks__dropdown__button dropbtn">Machines <i class="fa fa-caret-down" aria-hidden="true"></i></button>
                <ul class="header__menu__navlinks__dropdown__list dropdown-content">
                    <?php $categories = page('categories')->children()->listed();
                    foreach ($categories as $category): ?>
                        <li class="header__menu__navlinks__dropdown__list__item"><a class="header__menu__navlinks__dropdown__list__item__link" href="<?=$category->url()?>"><?=$category->title()?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
        <?php endif;?>
    <?php endforeach?>
</ul>

<div class="header__menu__burger burger">
    <div class="header__menu__burger__line line1"></div>
    <div class="header__menu__burger__line line2"></div>
    <div class="header__menu__burger__line line3"></div>
</div> */ ?>