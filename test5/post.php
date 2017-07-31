<?php
include 'data.php';

$name = $_POST['name'];
$phone = $_POST['phone'];

$text = 'Заявка на покупку Power Bank от ' . $name . ' .Номер телефона: ' .$phone;

$res = mail($email, 'Заявка Power Bank', $text);

?>

<script type='text/javascript'>
document.location.href = 'index.php'; 
</script>";}