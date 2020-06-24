<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Goliath-theme
 */

get_header();
?>

	<?php get_template_part( 'template-parts/section-breadcrumbs'); ?>

	<main id="primary" class="site-main single-main">

		<?php
		while ( have_posts() ) :
			the_post();
			
			?> 

			<div class="inner-section" id="single"> 
			
			<?php
			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="prev btn btn-primary-mirrored">' . esc_html__( 'Предыдущий проект', 'goliath-theme' ) . '</span>',
					'next_text' => '<span class="next btn btn-primary">' . esc_html__( 'Следующий проект', 'goliath-theme' ) . '</span>',
				)
			);
			?> 
			</div>
			<!-- /.inner-page-section -->
			
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
