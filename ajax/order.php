<?php

include '../app/conf.php';
include '../vendor/autoload.php';

use App\GPMailer;

// input
$name  = mb_substr(@$_POST['name'], 0, 40);
$phone = mb_substr(@$_POST['phone'], 0, 30);
$mech  = mb_substr(@$_POST['interest'], 0, 100);

// gpmailer variables
$site_domain = SITE_DOMAIN;
$from_email = $to_email = 'test@mail.ru';
$from_name  = $name;
$cc_email   = 'bairdarmaev@yandex.ru';
$subject    = 'Заявка с сайта ' . $site_domain;
$date       = date('j F Y, H:i');

$body    = <<<EOF
Вам поступила заявка с сайта {$site_domain} от [{$date}]<br>
--------------------------------------------------------------------------------------------------------------------<br>
<table>
    <tr>
        <td>Имя</td>
        <td>{$name}</td>
    </tr>
    <tr>
        <td>Номер телефона</td>
        <td>{$phone}</td>
    </tr>
</table>

--------------------------------------------------------------------------------------------------------------------<br>
<br>
Это сообщение сформировано автоматически<br>
EOF;

if ($name && $phone) {
    if (GPMailer::sendSmtp($from_email, $from_name, $to_email, $cc_email, $subject, $body, MAIL_HOST, MAIL_PORT, MAIL_USERNAME, MAIL_PASSWORD)) {
        echo json_encode(array(
                            'errorCode' => 0
                            ));
    }
    else{
        echo json_encode(array(
                            'errorCode' => 1, 
                            'errorMessage' => "Заявка не добавлена"
                            ));
    }
}
else {
    echo json_encode(array(
                        'errorCode' => 1, 
                        'errorMessage' => "Некорректно заполнены поля"
                        ));
}