<!-- Урок 11-12. Слайд 16. Задание 1. -->

<?php

$to = 'lov3helm@gmail.com';
$from = trim($_POST['email']);

$subject = 'Новое письмо';

$message = htmlspecialchars($_POST['message']);
$message = 'От: ' . $from . "\r\n" .
    trim($message);

// $headers = "From: $from" . "\r\n" .
//     "Reply-To: $from" . "\r\n" .
//     "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message)) {
    echo 'Письмо отправлено';
} else {
    echo 'Письмо не отправлено';
}
