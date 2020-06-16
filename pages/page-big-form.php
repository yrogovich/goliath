<?php
/*
* Template name: Big form
*/

get_header();
?>
<?php get_template_part( 'template-parts/section-breadcrumbs'); ?>

<div class="template-area" id="big-form-page">
    <div class="inner-section" >
        <div class="container">
            <h1 class="h1"><?the_title()?></h1>
        

            <div class="big-form">
                <form action="" method="post" class="multipart-form" enctype="multipart/form-data">
                    <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                    <input type="hidden" name="form_name" value="Заявка на создание сайта">
                
                    <div class="input-wrapper">
                        <label>Предпочтительный язык</label>
                        <select name="select_lang">
                            <option>Любой</option>
                            <option>Русский</option>
                            <option>Английский</option>
                            <option>Мультиязычный</option>
                        </select>
                    </div>  
                    
                    <div class="h2">Личные данные</div>

                    <div class="input-row">
                        <div class="input-wrapper">
                            <label>Имя*</label>
                            <input type="text" name="name" placeholder="Иван" required>
                        </div>
                        <div class="input-wrapper">
                            <label>Фамилия*</label>
                            <input type="text" name="last_name" placeholder="Петров" required>
                        </div>
                    </div>
                    <!-- /.input-row -->

                    <div class="input-row">
                        <div class="input-wrapper">
                            <label>Ваша электронная почта*</label>
                            <input type="email" name="email" placeholder="info@email.com" required>
                        </div>
                        <div class="input-wrapper">
                            <label>Ваш мобильный телефон*</label>
                            <input type="text" name="phone" placeholder="+1 234 5678 910" required>
                        </div>
                    </div>
                    <!-- /.input-row -->

                    <div class="input-wrapper">
                        <label>Ваш полный адрес*</label>
                        <input type="text" name="adress" placeholder="7 Swynford Gardens, NW4 4XL London, UK" required>
                    </div>

                    <div class="h2">Информация о компании</div>

                    <div class="input-row">
                        <div class="input-wrapper">
                            <label>Название компании*</label>
                            <input type="text" name="company_name" placeholder="Goliath" required>
                        </div>
                        <div class="input-wrapper">
                            <label>Промышленность*</label>
                            <input type="text" name="company_industry" placeholder="Создание сайтов" required>
                        </div>
                    </div>
                    <!-- /.input-row -->

                    <div class="input-row">
                        <div class="input-wrapper">
                            <label>Электронная почта компании*</label>
                            <input type="email" name="company_email" placeholder="info@company.com" required>
                        </div>
                        <div class="input-wrapper">
                            <label>Мобильный телефон компании*</label>
                            <input type="text" name="company_phone" placeholder="+1 234 5678 910" required>
                        </div>
                    </div>
                    <!-- /.input-row -->

                    <div class="input-row">
                        <div class="input-wrapper">
                            <label>Номер компании</label>
                            <input type="number" name="company_number" placeholder="123456789">
                        </div>
                        <div class="input-wrapper">
                            <label>Номер НДС</label>
                            <input type="number" name="company_nds" placeholder="123456789">
                        </div>
                    </div>
                    <!-- /.input-row -->

                    <div class="h2">Информация о проекте</div>

                    <div class="input-row">
                        <div class="input-wrapper">
                            <label>Предпочтительная дата начала проекта</label>
                            <select name="project_start">
                                <option>Не указана</option>
                                <option>Дата 1</option>
                                <option>Дата 2</option>
                            </select>
                        </div>
                        <div class="input-wrapper">
                            <label>Примерный бюджет</label>
                            <select name="project_budget">
                                <option>Не указан</option>
                                <option>до 600£</option>
                                <option>до 1500£</option>
                                <option>до 2500£</option>
                                <option>более 2500£</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.input-row -->

                    <div class="input-row">
                        <div class="input-wrapper">
                            <label>URL предпочитаемого веб-сайта или существующий</label>
                            <input type="text" name="website" placeholder="www.mywebsite.com">
                        </div>
                        <div class="input-wrapper">
                            <label>У Вас уже есть веб-хостинг?</label>

                            <div class="radio-row">
                                <label>
                                    <input type="radio" name="has_hosting" checked>
                                    <span class="custom-radio"></span>
                                    <span class="text">Нет</span>
                                </label>
                                <label>
                                    <input type="radio" name="has_hosting">
                                    <span class="custom-radio"></span>
                                    <span class="text">Да</span>
                                </label>
                            </div>
                            <!-- /.radio-row -->
                        </div>
                    </div>
                    <!-- /.input-row -->

                    <div class="attachment">
                        <div class="attachment-area">
                            <div class="area-text">
                                <div class="h3">Загрузка файлов</div>
                                <p>Прикрепите файлы для вашего сайта (Логотип компании, тексты, изображения, видео и т.д.)</p>
                                <img src="<?php bloginfo('template_url') ?>/src/img/icons/file-upload.svg" alt="file-upload">
                                <div class="h4">Перетащите файлы сюда для загрузки.</div>
                                <div class="link">Или выберите фаил в проводнике</div>
                            </div>
                            <ul class="attachment-list">
                            </ul>
                            <!-- /.attachment-list -->
                            <input type="file" name="myFile[]" multiple>
                        </div>
                        <!-- /.attachment-area -->
                    </div>
                    <!-- /#attachment -->

                    <div class="input-wrapper">
                        <label>Тип сайта</label>
                        <select name="site_type">
                            <option>Любой</option>
                            <option>Лэндинг</option>
                            <option>Корпаративный сайт</option>
                            <option>Интернет магазин</option>
                        </select>
                    </div>  

                    <div class="input-wrapper">
                        <label>Какие услуги вы предоставляете?</label>
                        <textarea name="project_services" placeholder="Пример: мы создаем целевые страницы, небольшие веб-сайты, большие веб-сайты, интернет-магазины, оптимизированные для SEO, безопасные, современные дизайны"></textarea>
                    </div>

                    
                    <div class="checkbox-row">
                        <label>Функции сайта вам понадобятся?</label>

                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Настройка хостинга и домена">
                            <span>Настройка хостинга и домена</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Google мой бизнес настройки">
                            <span>Google мой бизнес настройки</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Настройка деловой электронной почты">
                            <span>Настройка деловой электронной почты</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Система резервного копирования">
                            <span>Система резервного копирования</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Мультиязычный сайт">
                            <span>Мультиязычный сайт</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Брандмауэр и безопасность">
                            <span>Брандмауэр и безопасность</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Контактные формы">
                            <span>Контактные формы</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Система бронирования">
                            <span>Система бронирования</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Подходит для мобильных устройств и планшетов">
                            <span>Подходит для мобильных устройств и планшетов</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Платежная система">
                            <span>Платежная система</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Онлайн чат">
                            <span>Онлайн чат</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Структура недвижимости">
                            <span>Структура недвижимости</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Кнопка WhatsApp на сайте">
                            <span>Кнопка WhatsApp на сайте</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Политика конфиденциальности будет написана">
                            <span>Политика конфиденциальности будет написана</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="SEO дружественный">
                            <span>SEO дружественный</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Условия и положения будут написаны">
                            <span>Условия и положения будут написаны</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Расширенная настройка SEO">
                            <span>Расширенная настройка SEO</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Гугл Аналитика">
                            <span>Гугл Аналитика</span>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="functions[]" value="Другой">
                            <span>Другой</span>
                        </label>
                    </div>
                    <!-- /.input-row -->

                    <div class="input-wrapper">
                        <label>Любая дополнительная информация, которую мы должны знать</label>
                        <textarea name="project_additional_info" placeholder="Пример: Разработка сайта на самописной CMS"></textarea>
                    </div>

                    <div class="footnote">GOLIATH WEB SERVICES обязуется защищать и уважать вашу конфиденциальность, и мы будем использовать вашу личную информацию только для управления вашей учетной записью и для предоставления продуктов и услуг, которые вы запрашивали у нас. Время от времени мы хотели бы связаться с вами о наших продуктах и ​​услугах, а также о другом контенте, который может вас заинтересовать. Если вы даете согласие на то, чтобы мы связывались с вами для этой цели, поставьте галочку ниже, чтобы указать, как вы хотите, чтобы мы связывались с вами:</div>

                    <label class="custom-checkbox small footnote">
                        <input type="checkbox" name="spam" checked value="Я согласен получать другие сообщения от веб-сервисов GOLIATH">
                        <span>Я согласен получать другие сообщения от веб-сервисов GOLIATH. <br> Чтобы предоставить вам запрошенный контент, нам нужно хранить и обрабатывать ваши личные данные. Если вы даете согласие на хранение ваших личных данных для этой цели, установите флажок ниже.</span>
                    </label>

                    <label class="custom-checkbox small footnote">
                        <input type="checkbox" checked required>
                        <span>Я согласен разрешить GOLIATH WEB SERVICES хранить и обрабатывать мои личные данные.*</span>
                    </label>

                    <div class="footnote">Вы можете отказаться от этих сообщений в любое время. Для получения дополнительной информации о том, как отказаться от подписки, о нашей политике конфиденциальности и о том, как мы стремимся защищать и уважать вашу конфиденциальность, ознакомьтесь с нашей Политикой конфиденциальности.</div>

                    <button class="btn btn-primary">Отправить заявку</button>
                </form>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.inner-section -->

</div>
<!-- /#cost-page.template-area -->

<?php
get_footer();