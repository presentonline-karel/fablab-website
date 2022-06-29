<?php

    // Socials structure -> Array
    $socials = $site->socials()->toStructure();

        // Loop through socials
        foreach ($socials as $social): 

            // Facebook
            if($social->social() == "facebook"): ?>
                <a class="footer__content__block__socialsflexbox__social" href="<?= $social->url() ?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
        
            <?php
            // Instagram
            elseif ($social->social() == "instagram"): ?>
                <a class="footer__content__block__socialsflexbox__social" href="<?= $social->url() ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>

            <?php
            // LinkedIn
            elseif ($social->social() == "linkedin"): ?>
                <a class="footer__content__block__socialsflexbox__social" href="<?= $social->url() ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        
            <?php
            // Youtube
            elseif ($social->social() == "youtube"): ?>
                <a class="footer__content__block__socialsflexbox__social" href="<?= $social->url() ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
        
            <?php
            // Pinterest
            elseif ($social->social() == "pinterest"): ?>
                <a class="footer__content__block__socialsflexbox__social" href="<?= $social->url() ?>" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
        
            <?php
            // Reddit
            elseif ($social->social() == "reddit"): ?>
                <a class="footer__content__block__socialsflexbox__social" href="<?= $social->url() ?>" target="_blank"><i class="fa fa-reddit-square" aria-hidden="true"></i></a>
        
            <?php
            //KdG website
            elseif ($social->social() == "kdg"): ?>
                <a class="footer__content__block__socialsflexbox__social" href="<?= $social->url() ?>" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i></a>
        
        <?php 
            endif;
        endforeach;
        ?>