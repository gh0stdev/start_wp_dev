<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package SegaPrototype
 */

get_header();
?>


    <div class="content-inner">
        <h1 class="page-title page-title_mb page-title_reverse container">
            результаты
            <span class="page-title__span">поиска</span>
        </h1>


        <div class="search-page container">

            <?php if ( have_posts() ) : ?>

            <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'search' );

			endwhile;

		    else:

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

        </div>
    </div>

<?php
get_footer();
