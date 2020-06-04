<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Goliath-theme
 */

?>
    <div class="container">       
        <div class="switcher-box">
            <input type="checkbox" id="switch" checked/>
            <label for="switch">Toggle</label>
        </div>
    </div>
</div><!-- #page -->

<?php get_template_part('template-parts/modals'); ?>

<!-- <div class="mobile-menu">
	<div class="container">
		<?php
			wp_nav_menu(
				array(
					'menu' => 'Main menu',
					'container' => false, 
				)
			);
		?>
	</div>
</div> -->

<?php wp_footer(); ?>

</body>
</html>
