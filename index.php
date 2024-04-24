<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once __DIR__ . '/vendor/autoload.php';
    $settings = require_once __DIR__ . '/settings.php';
    require_once __DIR__ . '/functions.php';

    $body = "<h1>Письмо с сайта</h1>\n
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, esse ipsa itaque laudantium necessitatibus reprehenderit soluta? A accusamus alias aliquid, eius enim ipsum maxime mollitia perferendis quae, quod, suscipit unde?";

    $attachments = [
     
    ];

    // Використання функції send_mail для відправлення листа
    $result = send_mail($settings['mail_settings_prod'], ['clayz190013@gmail.com'], 'Письмо с сайта', $body, $attachments);

    $message = $result ? "Повідомлення відправлено!" : "Помилка при відправці.";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Відправка пошти</title>
</head>
<body>

<form method="post">
    <button type="submit" name="sendMailBtn">Відправити лист</button>
</form>

<?php
if (isset($message)) {
    echo $message;
}
?>

</body>
</html>
