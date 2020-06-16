<?php
// Файлы PHPMailer
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

// Переменные, которые отправляет пользователь
$formName = $_POST['form_name'];
$url = $_POST['url'];
$select_lang = $_POST['select_lang'];

$file = $_FILES['myFile'];

// Формирование самого письма
$title = 'Заявка с сайта '.$_SERVER['SERVER_NAME'] . ' ' . $_POST['form'];
        
    // ponos
    $body .= '<p>'.$formName.'</p>';
    $body .= '<p>'.$url.'</p>';

    if(isset($select_lang) && $select_lang !== '')
        $body .= '<p>Предпочтительный язык: '.$select_lang.'</p>';

    if(isset($_POST['name']) && $_POST['name'] !== '') {
        $body .= '<h2>Личная информация</h2>';
        $body .= '<p>Имя: '.$_POST['name'].'</p>';
    }
    if(isset($_POST['last_name']) && $_POST['last_name'] !== '')
        $body .= '<p>Фамилия: '.$_POST['last_name'].'</p>';
    if(isset($_POST['phone']) && $_POST['phone'] !== '')
        $body .= '<p>Телефон: '.$_POST['phone'].'</p>';
    if(isset($_POST['email']) && $_POST['email'] !== '')
        $body .= '<p>Email: '.$_POST['email'].'</p>';
    if(isset($_POST['adress']) && $_POST['adress'] !== '')
        $body .= '<p>Полный адрес: '.$_POST['adress'].'</p>';
    if(isset($_POST['message']) && $_POST['message'] !== '')
        $body .= '<p>Сообщение: '.$_POST['message'].'</p>';
    if(isset($_POST['company_name']) && $_POST['company_name'] !== '') {
        $body .= '<h2>Информация о компании</h2>';
        $body .= '<p>Имя компании: '.$_POST['company_name'].'</p>';
    }
    if(isset($_POST['company_industry']) && $_POST['company_industry'] !== '')
        $body .= '<p>Промышленность: '.$_POST['company_industry'].'</p>';
    if(isset($_POST['company_email']) && $_POST['company_email'] !== '')
        $body .= '<p>Электронная почта компании: '.$_POST['company_email'].'</p>';
    if(isset($_POST['company_phone']) && $_POST['company_phone'] !== '')
        $body .= '<p>Мобильный телефон компании: '.$_POST['company_phone'].'</p>';
    if(isset($_POST['company_number']) && $_POST['company_number'] !== '')
        $body .= '<p>Номер компании: '.$_POST['company_number'].'</p>';
    if(isset($_POST['company_nds']) && $_POST['company_nds'] !== '')
        $body .= '<p>Номер НДС: '.$_POST['company_nds'].'</p>';


    if(isset($_POST['project_start']) && $_POST['project_start'] !== '') {
        $body .= '<h2>Информация о проекте</h2>';
        $body .= '<p>Предпочтительная дата начала проекта: '.$_POST['project_start'].'</p>';
    }

    if(isset($_POST['project_budget']) && $_POST['project_budget'] !== '')
        $body .= '<p>Примерный бюджет: '.$_POST['project_budget'].'</p>';
    if(isset($_POST['website']) && $_POST['website'] !== '')
        $body .= '<p>URL предпочитаемого веб-сайта: '.$_POST['website'].'</p>';
    if(isset($_POST['has_hosting']) && $_POST['has_hosting'] !== '')
        $body .= '<p>У Вас уже есть веб-хостинг?: '.$_POST['has_hosting'].'</p>';
    if(isset($_POST['site_type']) && $_POST['site_type'] !== '')
        $body .= '<p>Тип сайта: '.$_POST['site_type'].'</p>';
    if(isset($_POST['project_services']) && $_POST['project_services'] !== '')
        $body .= '<p>Какие услуги вы предоставляете? '.$_POST['project_services'].'</p>';
        
    if(isset($_POST['functions']) && $_POST['functions'] !== '') {
        $body .= '<strong>Функции сайта вам понадобятся?</strong>';
        foreach($_POST['functions'] as $value) {
            $body .= '<p>'.$value.'</p>';   
        } 
    }

    if(isset($_POST['spam']) && $_POST['spam'] !== '')
        $body .= '<p>'.$_POST['spam'].'</p>';

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'formsendersmtp@gmail.com'; // Логин на почте
    $mail->Password   = '3avB91mjZw'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('formsendersmtp@gmail.com', $_SERVER['SERVER_NAME']); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('work-biznesrost24@yandex.by');  

    // Прикрипление файлов к письму
    if (!empty($file['name'][0])) {
        for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
            $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
            $filename = $file['name'][$ct];
            if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
                $mail->addAttachment($uploadfile, $filename);
                $rfile[] = "Файл $filename прикреплён";
            } else {
                $rfile[] = "Не удалось прикрепить файл $filename";
            }
        }   
    }
    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;    

    // Проверяем отравленность сообщения
    if ($mail->send()) {
        $result = "success";
    } 
    else {
        $result = "error";
    }

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);