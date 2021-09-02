<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SegaPrototype
 */

?>

<ul itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
    <?php true_breadcrumbs(); ?>
</ul>

<div class="content-inner">

    <?php the_title('<h1 class="page-title page-title_mb page-title_reverse container">', '</h1>') ?>

    <div class="news-inner-top">
        <div class="news-inner-top__text-block container">
            <?php
                the_content();
            ?>
        </div>
    </div>

</div>
