<div class="inner-section" id="single">
    <div class="single-container">
        <div class="heading">
            <div class="title">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <div class="subtitle"><?php the_field('project_description') ?></div>
            </div>
            <!-- /.title -->
            <div class="description">
                <div class="values">
                    <div class="name">Тип Проекта:</div>
                    <div class="property">
                        <?php 
                            $terms = get_the_terms( $post->ID, 'type' ); 
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
                    <a target="_blank" href="http://<?php the_field('site_link') ?>"><?php the_field('site_link') ?></a>
                </div>
                <!-- /.values -->
                <div class="values">
                    <div class="name">Хостинг:</div>
                    <a target="_blank" href="http://<?php the_field('host_link') ?>"><?php the_field('host_link') ?></a>
                </div>
                <!-- /.values -->
                <div class="values">
                    <div class="name">Мониторинг:</div>
                    <div class="property">
                        <?php echo get_field('monitoring') ? 'Активирован' : 'Не активирован'?>
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

        <?php
            $image = get_field('main_image');
            if( $image ):
                $url = $image['url'];
                $alt = $image['alt'];

                $size = 'project_full';
                $thumb = $image['sizes'][ $size ];
        ?>
        <div class="main-image" data-fancybox="main" href="<?php echo esc_url($thumb); ?>">
            <img data-src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" class="lazy" />
        </div>
        <!-- /.main-image -->    
        <?php endif; ?> 
        
        <div class="project-features">
            <div class="project-feature">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/single/icon-1.svg" alt="adaptive" class="lazy" />
                <p>Адаптивный дизайн</p>
            </div>
            <!-- /.project-feature -->
            <div class="project-feature">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/single/icon-2.svg" alt="seo" class="lazy" />
                <p>СЕО оптимизация</p>
            </div>
            <!-- /.project-feature -->
            <div class="project-feature">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/single/icon-3.svg" alt="secure" class="lazy" />
                <p>Защита+</p>
            </div>
            <!-- /.project-feature -->
            <div class="project-feature">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/single/icon-4.svg" alt="hosting" class="lazy" />
                <p>На нашем хостинге</p>
            </div>
            <!-- /.project-feature -->
        </div>
        <!-- /.features -->

        <?php
            $image = get_field('mockup_image');
            if( $image ):
                $url = $image['url'];
                $alt = $image['alt'];

                $size = 'max';
                $thumb = $image['sizes'][ $size ];
        ?>
        <a class="mockup-image" data-aos="fade-up" data-fancybox="mockup" href="<?php echo esc_url($thumb); ?>">
            <img data-src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" class="lazy" />
        </a>
        <!-- /.main-image -->   
        <?php endif; ?>
        
        <div class="text-center like-this">
            <div class="h2">Понравился сайт? <div class="link" data-fancybox data-src="#i-want-modal">Заказать разработку аналогичного!</div></div>
        </div>
        <!-- /.text-center -->

    </div>
    <!-- /.single-container -->
</div>
<!-- /.inner-page-section -->