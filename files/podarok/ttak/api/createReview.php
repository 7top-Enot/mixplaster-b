<?php

$uploadDir = 'komimg/';

$name = $_POST['2'];
$email = $_POST['3'];
$review = $_POST['4'];
$img = 'komimg/nophoto.jpeg';
if (!empty($_FILES['6']['name'])) {
    $uploadfile = $uploadDir.basename($_FILES['6']['name']);
    move_uploaded_file($_FILES['6']['tmp_name'], $uploadfile);
    $img=$uploadfile;
}


$db = new PDO('mysql:host=localhost;dbname=mixplaster_akbur', 'mixplaster_akbur', 'TzRP7L8w');



$statement = $db->prepare('INSERT INTO reviews (title, descr, img, status, email)
    VALUES (:title, :descr, :img, :status, :email)');
$statement->execute([
    'title' => $name,
    'descr' => $review,
    'img' => $img,
    'status' => '1',
    'email' => $email,
]);
$rId = $db->lastInsertId();

// $stmt = $db->prepare("SELECT * FROM reviews WHERE title=? AND status = 1");
// $stmt->execute([$name]);
//
// $freview = $stmt->fetch();
$href = 'http://штукатурыч.рф/ttak/api/confirmReview.php?id='.$rId;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$site = "brskff@yandex.ru";
$to = "brskff@yandex.ru";

$subject = $form;
$headers = "MIME-Version: 1.0\nContent-type: text/html; charset=utf-8\nFrom: $site\n";

$imgHref = 'http://штукатурыч.рф/ttak/api/'.$img;

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
            <img src=\"$imgHref\" style=\"max-width:156px;\"></img>
            <span>Имя:</span> $name<br>
            <span>Отзыв:</span> $review<br>
            <a href=\"$href\" target=\"_blank\">ПОДТВЕРДИТЬ</a>
        </p>

    </div>
</body>
</html>
";

mail($to, $subject, $message, $headers);

http_response_code(201);

echo json_encode(array("status" => $freview['id']), JSON_UNESCAPED_UNICODE);


?>