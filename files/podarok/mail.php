<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$form = $_POST['form'];

$site = "shtukaturich@info.ru";
$to = "shtukaturich@yandex.ru";
$subject = "Новая заявка ($phone)";
$headers = "MIME-Version: 1.0\nContent-type: text/html; charset=utf-8\nFrom: $site\n";

$message = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <style>
        h5, p {
            font: 400 17px/1.4 Calibri;
            padding: 0 0 7px;
            margin: 0 0 6px;
            border-bottom: 1px solid #ddd;
            max-width: 705px;
		}
        h5 {
			font-size: 21px;
			font-weight: 600;
        }
        p span {
            color:#999;
        }
        div {
            padding: 10px 0 0;
        }
    </style>
</head>
<body>
    <div>
        <p>
            <span>Имя:</span> $name<br>
            <span>Телефон:</span> $phone<br>
            <span>Форма:</span> $form<br>
        </p>
    </div>
</body>
</html>
";

mail($to, $subject, $message, $headers);

header('Location: thanks.html');

?>
