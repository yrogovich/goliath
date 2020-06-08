<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				goliath_theme_posted_on();
				goliath_theme_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php goliath_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'goliath-theme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'goliath-theme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php goliath_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<div class="inner-section" id="single">
    <div class="single-container">
        <div class="heading">
            <div class="title">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <div class="subtitle"><?php get_field('project_description') ?></div>
            </div>
            <!-- /.title -->
            <div class="description">
                <div class="values">
                    <div class="name">Тип Проекта:</div>
                    <div class="property">
                        <?php 
                            $terms = get_the_terms( $post->ID, 'category' ); 
                            if( $terms ){
                                $term = array_shift( $terms );
                                echo $term->name;
                            }
                        ?>
                    </div>
                </div>
                <!-- /.values -->
                <div class="values">
                    <div class="name">Адрес сайта:</div>
                    <a href="http://<?php the_field('site_link') ?>"><?php the_field('site_link') ?></a>
                </div>
                <!-- /.values -->
                <div class="values">
                    <div class="name">Хостинг:</div>
                    <a href="http://<?php the_field('host_link') ?>"><?php the_field('host_link') ?></a>
                </div>
                <!-- /.values -->
                <div class="values">
                    <div class="name">Мониторинг:</div>
                    <div class="property">
                        <?php get_field('monitoring') ? 'Активирован' : 'Не активирован'?>
                    </div>
                </div>
                <!-- /.values -->
                <div class="values">
                    <div class="name">Год Создания:</div>
                    <div class="property">
                        <?php the_date( 'Y' ); ?>
                    </div>
                </div>
                <!-- /.values -->
            </div>
            <!-- /.description -->
        </div>
    </div>
    <!-- /.single-container -->
</div>
<!-- /.inner-page-section -->