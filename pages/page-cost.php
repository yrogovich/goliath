<?php
/*
* Template name: Cost
*/

get_header();
?>
<?php get_template_part( 'template-parts/section-breadcrumbs'); ?>

<div class="template-area" id="cost-page">
    <div class="inner-section" id="cost">
        <div class="container">
            <h1 class="h1"><?the_title()?></h1>
            <div class="h2">Стоимость Создания сайтов в Лондоне</div>

            <?php get_template_part( 'template-parts/section-dev-price'); ?>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.inner-section -->

    <div class="section gray">
        <div class="container">
            <div class="h2">Стоимость SEO оптимизации сайтов в Лондоне</div>

            <?php get_template_part( 'template-parts/section-seo-price'); ?>
        </div>
        <!-- /.container -->
    </div>

    <div class="section" id="our-features">
        <div class="container">
            <div class="h2">Дополнительные услуги</div>

            <div class="features row">
                <?php get_template_part( 'template-parts/features/virus'); ?>
                

                <?php get_template_part( 'template-parts/features/monitoring'); ?>
               
                <?php get_template_part( 'template-parts/features/hosting'); ?>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /#our-features.section -->

</div>
<!-- /#cost-page.template-area -->

<?php
get_footer();