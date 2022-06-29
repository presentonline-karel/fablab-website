<?php
$transportItems = $page->accessibility()->toStructure();
?>

<div class="contact-tabscontainer">
    <h2 class="contact-tabscontainer__title h2">Bereikbaarheid</h2>

    <div class="tabscontainer">
        <div class="tabscontainer__tabs tabs-contact">
            <div class="tabscontainer__tabs__tabheader">
                <div class="tabscontainer__tabs__tabheader__item tabheader-item-contact active">
                    <i class="fa fa-bicycle" aria-hidden="true"></i>
                </div>
                <div class="tabscontainer__tabs__tabheader__item tabheader-item-contact">
                    <i class="fa fa-train" aria-hidden="true"></i>
                </div>
                <div class="tabscontainer__tabs__tabheader__item tabheader-item-contact">
                    <i class="fa fa-bus" aria-hidden="true"></i>
                </div>
                <div class="tabscontainer__tabs__tabheader__item tabheader-item-contact">
                    <i class="fa fa-car" aria-hidden="true"></i>
                </div>
            </div>



            <div class="tabscontainer__tabs__tabindicatorcontact tabindicator"></div>



            <div class="tabscontainer__tabs__tabbody tabbody-contact">
                <?php foreach($transportItems as $item): ?>
                    <div class="tabscontainer__tabs__tabbody__item tabbody-item-contact">
                        <h3 class="tabscontainer__tabs__tabbody__item__title h3"><?= $item->vehicle() ?></h3>
                        <p class="tabscontainer__tabs__tabbody__item__paragraph p"><?= $item->description() ?></p>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>