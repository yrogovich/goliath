<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Goliath-theme
 */

get_header();
?>

<?php get_template_part( 'template-parts/section-breadcrumbs'); ?>

<main id="primary" class="site-main archive-main">
    <div class="header">
        <div class="container">
            <h1>Ознакомьтесь с нашим портфолио</h1>

            <?php get_template_part( 'template-parts/terms-type' ); ?>
        </div>
    </div>
    <!-- /.header -->

    <div class="single-container">
        <div class="archive-portfolio">
            <?php if ( have_posts() ) : ?>

                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /*
                    * Include the Post-Type-specific template for the content.
                    * If you want to override this in a child theme, then include a file
                    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                    */

                    echo '<div class="bordered" data-aos="fade-up">';
                    get_template_part( 'template-parts/card', get_post_type() );
                    echo '</div>';

                endwhile;

                the_posts_navigation();

            endif;
            ?>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();