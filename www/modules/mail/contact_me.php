<?php
// Check for empty fields
if(empty($_POST['name']))   /*   ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))*/
{
    echo "No arguments Provided!";
    return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$avto_marka = strip_tags(htmlspecialchars($_POST['avto_marka']));
$avto_engine_type = strip_tags(htmlspecialchars($_POST['avto_engine_type']));
$avto_kyzov = strip_tags(htmlspecialchars($_POST['avto_kyzov']));
$avto_korobka = strip_tags(htmlspecialchars($_POST['avto_korobka']));
$avto_engine_power = strip_tags(htmlspecialchars($_POST['avto_engine_power']));
$avto_color = strip_tags(htmlspecialchars($_POST['avto_color']));
$avto_probeg = strip_tags(htmlspecialchars($_POST['avto_probeg']));
$avto_money = strip_tags(htmlspecialchars($_POST['avto_money']));

// Create the email and send the message
$to = 'mail@oceanauto.com.ua'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Заявка с сайта от:  $name";
$email_body =
    "Заполнена Форма:\n\n
    Имя: $name\n
    Email: $email_address\n
    Телефон: $phone\n
    Марка: $avto_marka\n
    Тип Двигателя: $avto_engine_type\n
    Тип Кузова: $avto_kyzov\n
    Коробка передач: $avto_korobka\n
    Мощность: $avto_engine_power\n
    Цвет: $avto_color\n
    Пробег: $avto_probeg\n
    Бюджет: $avto_money\n
    Сообщение:\n$message";
$headers = "From: oceanauto.com.ua<$to>\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $to";
mail($to,$email_subject,$email_body,$headers);
if (!filter_var($email_address, FILTER_VALIDATE_EMAIL) === false) {
    $email_subject = "Копия заявки c сайта oceanauto.com.ua";
    mail($email_address,$email_subject,$email_body,$headers);
    echo "$name. Cпасибо, что выбрали нашу команду. Копия заявки отправлена $email_address";
} else {
    echo "$name. Cпасибо, что выбрали нашу команду.";
}
return true;
?>