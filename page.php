<?php
/**
 * The template for displaying all pages
 * @package SegaPrototype
 */

get_header();
?>

    <ul itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
        <?php true_breadcrumbs(); ?>
    </ul>

	<div id="primary" class="content-inner">
        <div class="container">
            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </div>
	</div><!-- #main -->

<?php
get_footer();
