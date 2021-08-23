<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SegaPrototype
 */

?>




<div class="news-wrap__item ajax-item" id="post-<?php the_ID(); ?>">
    <a href="<?= get_permalink() ?>" class="news-item js-lazy" style="display: block; background-image: url(<?php echo the_post_thumbnail_url('original', array('class' => 'goods-single-thumb')); ?>);">
        <div class="news-item__content-wrap">
            <div class="news-item__text-wrap">
                <h4 class="news-item__title"><?= the_title('', '') ?></h4>
                <p class="news-item__date"></p>
                <p class="news-item__desc js-news-slider-desc" style="float: none; position: static;"></p>
            </div>
            <button class="news-item__button">подробнее</button>
        </div>
    </a>
</div>
</div>

