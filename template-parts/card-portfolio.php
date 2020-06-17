<div class="project">
    <a href="<?php the_permalink() ?>">
        <div class="h3"><?php the_title(); ?></div>
        <div class="img-wrapper">
            <?php
                $image = get_field('main_image');
                if( $image ):
                    $url = $image['url'];
                    $alt = $image['alt'];

                    $size = 'project_thumbinail';
                    $thumb = $image['sizes'][ $size ];
            ?>
                <img data-src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" class="lazy" />
            <?php endif; ?>
        </div>
    </a> 
    <!-- .link -->
    <div class="couple">
        <?php if(get_field('site_link')) : ?>
            <a href="http://<?php the_field('site_link') ?>" target="_blank" class="link"><?php the_field('site_link') ?></a>
        <?php endif; ?>

        <span class="small">
        <?php 
            $terms = get_the_terms( $post->ID, 'category' ); 
            if( $terms ){
                $term = array_shift( $terms );
                echo $term->name;
            }
        ?>
        </span>
    </div>
    <!-- /.couple -->
</div>
<!-- /.project -->