<?php

require '../vendor/autoload.php';

// создание Экземпляра, с методами отправки почты
//var_dump($mailer = new SimpleMail());

// отправка письма
var_dump(SimpleMail::make()
->setTo('kozyrev054@gmail.com', 'Sasha')              // кому отправляем, ($email, $name) 
->setFrom('kozyrev054@gmail.com', 'Admin')    // от кого отправляем, ($fromEmail, $fromName)
->setSubject('Лучшая тема')              // тема
->setMessage('Привет, как дела')              // сообщение
->send());
