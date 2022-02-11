
<?php 

if (isset($_POST['tel'])) {

  $errors = array();


    if($_POST['phone'] == ''){
      $errors[] = 'Введите номер телефона!';
    }


  if(empty($errors)){

$recepient = "mixplaster@yandex.ru, zayavki-mixplaster@yandex.ru"; 
$sitename = "12 Reasons ru"; 

$usermail = "info@mursaloff.com"; 



$phone = $_POST['phone']; 

$phone = stripslashes($phone); 



// Формирование заголовка письма 

$pagetitle = "Новая заявка с сайта \"$sitename\""; 

$headers = "From: " . strip_tags($usermail) . "\r\n"; 

$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n"; 

$headers .= "MIME-Version: 1.0\r\n"; 

$headers .= "Content-Type: text/html;charset=utf-8 \r\n"; 

$message = "<html><body style='font-family:Arial,sans-serif;'>"; 

$message .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Завка была отправлена со страницы 12 причин почему выбирают Mix Plaster </h2>\r\n"; 

$message .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n"; 

$message .= "</body></html>"; 


$mail = mail($recepient, $pagetitle, $message, $headers);

  ?><script ENGINE="text/javascript">
location.replace("thanks.html");
</script>
<?php

}
   else {
     echo '<span style= "font-size: 20px; margin-left:240px; color: red; margin-top: -30px; display:block;">'.$errors['0'] .'</span>';
   }
}  
    
?>