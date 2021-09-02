<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SegaPrototype
 */


$description = carbon_get_theme_option('sp_footer_desc');
$footer_address = carbon_get_theme_option('sp_footer_address');
$footer_office = carbon_get_theme_option('sp_footer_office');
$footer_scripts = carbon_get_theme_option('sp_footer_scripts');
$footer_copy = carbon_get_theme_option('sp_footer_copy');
$work_time = carbon_get_theme_option('sp_work_time');
$phone = carbon_get_theme_option('sp_phone');
$email = carbon_get_theme_option('sp_email');

$soc_in = carbon_get_theme_option('sp_footer_soc_in');
$soc_fa = carbon_get_theme_option('sp_footer_soc_fa');
$soc_yo = carbon_get_theme_option('sp_footer_soc_yo');
$soc_vk = carbon_get_theme_option('sp_footer_soc_vk');

?>


<?php wp_footer(); ?>

<footer class="footer">
    <div class="footer__container container">
        <div class="footer__col footer__col_socials">

            <div class="footer__links-block">
                <?php if(!empty($soc_in)): ?>
                    <a href="<?= $soc_in ?>" target="_blank"
                       class="footer__links-item footer__links-item_1"></a>
                <?php endif; ?>

                <?php if(!empty($soc_fa)): ?>
                    <a href="<?= $soc_fa ?>" target="_blank"
                       class="footer__links-item footer__links-item_2"></a>
                <?php endif; ?>

                <?php if(!empty($soc_yo)): ?>
                    <a href="<?= $soc_yo ?>" target="_blank"
                       class="footer__links-item footer__links-item_3"></a>
                <?php endif; ?>

                <?php if(!empty($soc_vk)): ?>
                    <a href="<?= $soc_vk ?>" target="_blank"
                       class="footer__links-item footer__links-item_4"></a>
                <?php endif; ?>
            </div>

            <div class="footer__links-block">
                <span class="footer__pay-system-item footer__pay-system-item_visa"></span>
                <span class="footer__pay-system-item footer__pay-system-item_mir"></span>
                <span class="footer__pay-system-item footer__pay-system-item_mastercard"></span>
            </div>
        </div>

        <div class="footer__col footer__col_main">

            <div class="footer__info-block">
                <div class="footer__address-column">
                    <div class="footer__address">
                        <div class="footer__address-descr">
                            <?= $footer_office ?>
                        </div>
                        <p class="footer__address-line">
                            <?= $footer_address ?>
                        </p>
                    </div>
                    <a href="mailto: <?= $email ?>" class="footer__mail"><?= $email ?></a>
                </div>

                <div class="footer__internet-shop-column">
                </div>
                <div class="footer__call-center-column">
                    <p class="footer__call-center-phone"><?= $phone ?></p>
                    <p class="footer__internet-shop-timetable">Работаем без выходных<br>с 10.00 до 19.00</p>
                    
                </div>
            </div>
            <div class="footer-col-multimenu">
                <?php sp_catalog_footer_menu(); ?>
           </div>
            <div class="footer__menu-wrap">
                <?php sp_static_footer_menu(); ?>
            </div>
            <!--noindex-->
            <p class="footer__info">
                <?= $description ?>
            </p>
            <!--/noindex-->
            <div class="footer__bottom-line">

                <p class="footer__rights">
                    <?= $footer_copy ?>
                </p>
            </div>
        </div>
    </div>
</footer>


<div class="mobile-menu" id="mobile-menu">
   
    <div class="mobile-menu__main-part">
        <a href="#" class="mobile-menu__close" id="mobile-menu-close"></a>
        <div class="mobile-menu__list-wrap">
            <?php sp_mobile_menu(); ?>
        </div>
    </div>
</div>

<div style="display: none;">
    <div class="box-modal" id="design-request-popup">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup">

               


               




            </div>

        </div>
    </div>

    <div class="box-modal box-modal__kitchen" id="design-request-kitchen-popup">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">


            <div class="test-popup">










            </div>

        </div>
    </div>

    <div class="box-modal box-modal__kitchen" id="call-get-size">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">


            <div class="test-popup">


            </div>

        </div>
    </div>



    <div class="box-modal" id="testimonial-popup">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup">
               
            </div>

        </div>
    </div>


    <div class="box-modal" id="thank-you">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup test-popup_thank-you">
                
            </div>

        </div>
    </div>

    </div>

   




   



</div>



<?php

$sp_footer_scripts = carbon_get_theme_option('sp_footer_scripts');

echo $sp_footer_scripts;

?>

</body>
</html>
