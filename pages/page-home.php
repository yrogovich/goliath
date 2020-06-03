<?php
/*
* Template name: Home page
*/

get_header();
?>

<div class="template-area" id="home-page">

    <div class="header">
        <div class="container">
            <div class="custom-row">
                <div class="col c1">
                    <h1 class="h1">Создаем и продвигаем веб сайты</h1>

                    <ul class="ul-primary">
                        <li>8 лет опыта</li>
                        <li>Более 300 проектов</li>
                        <li>Уникальный, не шаблонный дизайн</li>
                        <li>SEO подготовка всех сайтов</li>
                    </ul>

                    <div class="btn btn-primary">Запросить расчет стоимости</div>
                </div>
                <div class="col c2">
                    <div class="devices">
                        <div class="macbook-wrapper">
                            <img data-src="<?php bloginfo('template_url') ?>/src/img/home-page/Macbook.png" alt="Macbook" class="macbook lazy">
                        </div>
                        <!-- /.macbook-wrapper -->
                        <div class="ipad-wrapper">
                            <img data-src="<?php bloginfo('template_url') ?>/src/img/home-page/iPad.png" alt="iPad" class="ipad lazy">
                        </div>
                        <!-- /.ipad-wrapper -->
                        <div class="iphone-wrapper">
                            <img data-src="<?php bloginfo('template_url') ?>/src/img/home-page/iPhone.png" alt="iPhone" class="iphone lazy">
                        </div>
                        <!-- /.iphone-wrapper -->

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


</div>
<!-- /#home-page.template-area -->

<?php
get_footer();