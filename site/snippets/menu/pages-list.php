<ul class="header__menu__navlinks nav-links">
    <?php foreach ($site->children()->listed() as $subpage): ?>
        <li class="header__menu__navlinks__item">
            <a class="header__menu__navlinks__item__link <?php if ($subpage->isOpen()) {echo ("active");}?>" href="<?=$subpage->url()?>"><?=$subpage->title()?></a>
        </li>
    <?php endforeach?>
</ul>

<div class="header__menu__burger burger">
    <div class="header__menu__burger__line line1"></div>
    <div class="header__menu__burger__line line2"></div>
    <div class="header__menu__burger__line line3"></div>
</div>