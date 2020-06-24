<div class="h2">Наши проекты</div>

<div class="projects row">
    <?php 
    // задаем нужные нам критерии выборки данных из БД
    $args = array(
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'post_type' => 'portfolio',
    );
    $query = new WP_Query( $args );

    // Цикл
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();

            get_template_part( 'template-parts/card', get_post_type() );
        }
    }
    // Возвращаем оригинальные данные поста. Сбрасываем $post.
    wp_reset_postdata();
    ?>
</div>
<!-- /.projects -->
<div class="text-center">
    <a href="<?=get_home_url(null, 'portfolio')?>" class="btn btn-primary">Показать еще</a>
</div>