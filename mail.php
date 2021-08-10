<?php

$name = $_POST['name'];
$phone = $_POST['email'];
$image = $_POST['image']


$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'parkerari@mail.ru';
$mail->Password = '#dty564hg1234';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('parkerari@mail.ru');
$mail->addAddress('Aristageck@gmail.com');


$mail->isHTML(true);

$mail->Subject = 'Заявка с сайта';
$mail->Body    = '' .$name. 'Оставил заявку' .phone. .image;
$mail->AltBody = '';

if(!$mail->send()) {
  echo 'Error';
} else {
  header('location: thanks-you.html');
}

?>
