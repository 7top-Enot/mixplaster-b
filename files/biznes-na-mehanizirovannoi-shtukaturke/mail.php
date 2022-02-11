<?php

// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $form = $_POST['form'];

$out = json_decode(file_get_contents('php://input'));
$email = $out->email;
$phone = $out->phone;
$site = "mehbusines@info.ru";
$to = "mixplaster@yandex.ru, zayavki-mixplaster@yandex.ru";

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
            <span>Имя:</span> $email<br>
            <span>Телефон:</span> $phone<br>
        </p>
    </div>
</body>
</html>
";

mail($to, $subject, $message, $headers);

$data = ["success" => "true"];
echo json_encode($data);

?>