<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SegaPrototype
 */

get_header();
?>

    <div class="content-inner">

        <?php if ( have_posts() ) : ?>

            <ul itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
                <?php true_breadcrumbs(); ?>
            </ul>


            <?php
                the_archive_title( '<h1 class="page-title page-title_mb page-title_reverse container">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
            ?>

            <div class="news-wrap container">
                <div class="news-wrap__list ajax-list">
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();

                        /*
                         * Include the Post-Type-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', 'list');

                    endwhile;

                    ?>
                </div>
            </div>

           <?php

            the_posts_navigation();

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>
    </div>

<?php
get_footer();
