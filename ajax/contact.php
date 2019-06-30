<?php

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    $phone = '';
    $msg = '';

    if (isset($_REQUEST['phone'])){
        $phone = strip_tags(trim($_REQUEST['phone']));
    }

    if (isset($_REQUEST['msg'])){
        $msg = strip_tags(trim($_REQUEST['msg']));
    }

    $message =
        'Номер телефона: '. $phone .
        ' Комментарий: ' . $msg;

    mail('bnhs3068@mail.ru', 'Новая заявка с сайта', $message);
    mail('animadei@mail.ru', 'Новая заявка с сайта', $message);

}