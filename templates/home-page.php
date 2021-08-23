<?php
/**
 * Template Name: Главная страница
 */

$sliders = carbon_get_the_post_meta( 'sp_slides' );
$features = carbon_get_the_post_meta( 'sp_features' );
$two_slider = carbon_get_the_post_meta( 'sp_two_slider' );

$two_slider = '';

get_header(); ?>

<div class="content-inner">

    <div class="top-slider top-slider_main-page">
        <div class="top-slider__itself swiper-container swiper-container_mainpage" id="top-main-slider">
            <div class="swiper-wrapper">
                <?php foreach ($sliders as $slide): ?>
                    <a href="<?= $slide['url'] ?>" class="swiper-slide">
                        <div class="main-slide">
                            <div class="main-slide__inner" style="background-image: url(<?php echo wp_get_attachment_image_url($slide['image'], 'original'); ?>)">
                                <div class="main-slide__inner_mobile" style="background-image: url(<?php echo wp_get_attachment_image_url($slide['image'], 'original'); ?>)"></div>
                                <div class="container">
                                    <div class="top-slider__content">
                                        <div class="top-slider__slide-col">
                                            <div class="top-slider__slide-row">

                                                <div class="top-slider__content-item">
                                                </div>
                                            </div>
                                            <div class="top-slider__slide-row">
                                            <span class="top-slider__content-item-round
                                            top-slider__content-item-round_tr"></span>
                                                <div class="top-slider__content-item top-slider__content-item_vat">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>

            </div>
            <button class="top-slider__button top-slider__button_black-and-white top-slider__button_left
            top-slider__button_left_black-and-white"></button>
            <button class="top-slider__button top-slider__button_black-and-white top-slider__button_right
            top-slider__button_right_black-and-white"></button>

        </div>
    </div>

    <div class="benefits-new">
        <?php foreach ($features as $feature): ?>

            <div class="benefits-new-item">
                <a href="<?= $feature['url'] ?>" class="benefits-new-item-img">
                    <img src="<?php echo wp_get_attachment_image_url($feature['image'], 'original'); ?>" alt="<?= $feature['title'] ?>">
                </a>
                <a href="<?= $feature['url'] ?>" class="benefits-new-item-name">
                    <?= $feature['title'] ?>
                </a>
            </div>

        <?php endforeach; ?>
    </div>

    <div class="good-slider swiper-container swiper-container_mainpage js-cards-container" id="good-slider">

        <?php foreach ($two_slider as $slide): ?>

            <div class="swiper-wrapper ">
                <div class="swiper-slide">
                    <div class="good-slider__item">
                        <div class="good-slider__image-block">
                            <div class="good-slider__image-block-inner">
                                <a href="<?= $slide['url'] ?>" class="good-slider__image-block-inner2" style="background-image: url('<?php echo wp_get_attachment_image_url($slide['image'], 'original'); ?>')">
                                </a>
                            </div>
                        </div>
                        <div class="good-slider__text-part">
                            <h2 class="good-slider__title">
                                <a href="<?= $slide['url'] ?>">
                                    <?= $slide['title'] ?>
                                </a>
                            </h2>
                            <div class="good-slider__desc container">
                                <p class="good-slider__desc-text">
                                    <?= $slide['description'] ?>
                                </p>
                            </div>
                            <div class="good-slider__button-block">
                                <a href="<?= $slide['url'] ?>" class="btn btn_green js-good-slider-button" data-tex-desc="Подробнее" data-text-response="подробнее">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>





        <button class="good-slider__button_black-and-white good-slider__button-prev
        good-slider__button-prev_black-and-white "></button>
        <button class="good-slider__button_black-and-white good-slider__button-next
        good-slider__button-next_black-and-white"></button>
    </div>

    <div class="container single-section">

        <?php

        while ( have_posts() ) : the_post();?>

        <div class="row">
            <?php if ( is_order_received_page() ) :?>
            <div class="col-md-6 col-md-offset-3">
                <?php endif; ?>
                <?php if ( is_wc_endpoint_url('lost-password') ) :?>
                <div class="col-md-5 col-md-offset-4">
                    <?php endif; ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <div class="entry-content">
                            <?php

                            the_content();
                            ?>
                        </div><!-- .entry-content -->

                    </article><!-- #post-<?php the_ID(); ?> -->
                    <?php

                    if ( is_order_received_page() ) :
                    ?>
                </div>
            </div>
        <?php endif;
        endwhile; // End of the loop.
        ?>

    </div>

</div>
<?php

$script_map = carbon_get_the_post_meta( 'script_map' );

?>

<div class="mapper-address">
    <?= $script_map ?>
</div>


<?
get_footer();