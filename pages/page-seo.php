<?php
/*
* Template name: SEO optimization
*/

get_header();
?>

<div class="template-area" id="site-development-page">
    <div class="header">
        <div class="container">
            <div class="custom-row">
                <div class="col c1">
                    <h1 class="h1"><?the_title()?></h1>

                    <ul class="ul-primary">
                        <li>Получайте посетителей на сайт значительно дешевле платной рекламы</li>
                        <li>Оптимизируем все типы сайтов от лендингов до интернет магазинов</li>
                        <li>Сблюдаем все новые требования Google в 2020</li>
                    </ul>

                    <div class="btn btn-primary" data-fancybox data-src="#calc-price-modal">Запросить расчет стоимости</div>
                </div>
                <div class="col c2">
                    <div class="devices">
                        <div class="macbook-wrapper">
                            <img data-src="<?php bloginfo('template_url') ?>/src/img/seo.png" alt="Macbook" class="macbook lazy">
                        </div>
                        <!-- /.macbook-wrapper -->

                        <div class="decor">
                            <img data-src="<?php bloginfo('template_url') ?>/src/img/home-page/decor.svg" alt="dots" class="decor-big lazy">
                            <img data-src="<?php bloginfo('template_url') ?>/src/img/home-page/decor-small.svg" alt="dots" class="decor-small lazy">
                        </div>
                    </div>
                    
                    <div class="rectangle"></div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>

    <div class="section gray">
        <div class="container">
            <?php get_template_part('template-parts/section-projects'); ?>
        </div>
        <!-- /.container -->
    </div>
   
    
    <div class="section">
        <div class="container">
            <?php get_template_part( 'template-parts/section-seo-price'); ?>
        </div>
        <!-- /.container -->
    </div>

    <div class="section gray" id="our-features">
        <div class="container">
            <div class="h2">Дополнительные услуги</div>

            <div class="features row">
                <?php get_template_part( 'template-parts/features/virus'); ?>

                <?php get_template_part( 'template-parts/features/monitoring'); ?>
               
                <?php get_template_part( 'template-parts/features/hosting'); ?>

                <?php get_template_part( 'template-parts/features/site-development'); ?>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /#our-features.section -->
</div>
<!-- /#cost-page.template-area -->

<?php
get_footer();