<?php
$to = ''; //Почта получателя, через запятую можно указать сколько угодно адресов
$subject = 'Заявка с сайта '.$_SERVER['SERVER_NAME'] . ' ' . $_POST['form']; //Заголовок сообщения
$message = '
        <html>
            <head>
                <title>'.$subject.'</title>
            </head>
            <body>';
        $message .= '<p>'.$_POST['form_name'].'</p>';
        $message .= '<p>'.$_POST['url'].'</p>';

        if(isset($_POST['select_lang']) && $_POST['select_lang'] !== '')
            $message .= '<p>Предпочтительный язык: '.$_POST['select_lang'].'</p>';

        if(isset($_POST['name']) && $_POST['name'] !== '')
            $message .= '<h2>Личная информация</h2>';
            $message .= '<p>Имя: '.$_POST['name'].'</p>';
        if(isset($_POST['last_name']) && $_POST['last_name'] !== '')
            $message .= '<p>Фамилия: '.$_POST['last_name'].'</p>';
        if(isset($_POST['phone']) && $_POST['phone'] !== '')
            $message .= '<p>Телефон: '.$_POST['phone'].'</p>';
        if(isset($_POST['email']) && $_POST['email'] !== '')
            $message .= '<p>Email: '.$_POST['email'].'</p>';
        if(isset($_POST['adress']) && $_POST['adress'] !== '')
            $message .= '<p>Полный адрес: '.$_POST['adress'].'</p>';
        if(isset($_POST['message']) && $_POST['message'] !== '')
            $message .= '<p>Сообщение: '.$_POST['message'].'</p>';

        if(isset($_POST['company_name']) && $_POST['company_name'] !== '')
            $message .= '<h2>Информация о компании</h2>';
            $message .= '<p>Имя: '.$_POST['company_name'].'</p>';
        if(isset($_POST['company_industry']) && $_POST['company_industry'] !== '')
            $message .= '<p>Промышленность: '.$_POST['company_industry'].'</p>';
        if(isset($_POST['company_email']) && $_POST['company_email'] !== '')
            $message .= '<p>Электронная почта компании: '.$_POST['company_email'].'</p>';
        if(isset($_POST['company_phone']) && $_POST['company_phone'] !== '')
            $message .= '<p>Мобильный телефон компании: '.$_POST['company_phone'].'</p>';
        if(isset($_POST['company_number']) && $_POST['company_number'] !== '')
            $message .= '<p>Номер компании: '.$_POST['company_number'].'</p>';
        if(isset($_POST['company_nds']) && $_POST['company_nds'] !== '')
            $message .= '<p>Номер НДС: '.$_POST['company_nds'].'</p>';


        if(isset($_POST['project_start']) && $_POST['project_start'] !== '')
            $message .= '<h2>Информация о проекте</h2>';
            $message .= '<p>Предпочтительная дата начала проекта: '.$_POST['project_start'].'</p>';

        if(isset($_POST['project_budget']) && $_POST['project_budget'] !== '')
            $message .= '<p>Примерный бюджет: '.$_POST['project_budget'].'</p>';
        if(isset($_POST['website']) && $_POST['website'] !== '')
            $message .= '<p>URL предпочитаемого веб-сайта: '.$_POST['website'].'</p>';
        if(isset($_POST['has_hosting']) && $_POST['has_hosting'] !== '')
            $message .= '<p>У Вас уже есть веб-хостинг?: '.$_POST['has_hosting'].'</p>';
        if(isset($_POST['site_type']) && $_POST['site_type'] !== '')
            $message .= '<p>Тип сайта: '.$_POST['site_type'].'</p>';
        if(isset($_POST['project_services']) && $_POST['project_services'] !== '')
            $message .= '<p>Какие услуги вы предоставляете? '.$_POST['project_services'].'</p>';
        if(isset($_POST['functions']) && $_POST['functions'] !== '')
            $message .= '<strong>Функции сайта вам понадобятся?</strong>';
            foreach($_POST['functions'] as $value) { // прокручиваемся через боксы 
                $message .= '<p>'.$value.'</p>';   
            } 
        if(isset($_POST['project_additional_info']) && $_POST['project_additional_info'] !== '')
            $message .= '<p>Любая дополнительная информация, которую мы должны знать: '.$_POST['project_additional_info'].'</p>';


$message .= '                 
            </body>
        </html>'; 
$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: form@".$_SERVER['SERVER_NAME']."\r\n"; 

if(isset($_POST['name']) && $_POST['name'] !== '') {
    mail($to, $subject, $message, $headers); 
}
