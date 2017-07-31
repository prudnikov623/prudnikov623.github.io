<?php
include 'data.php';

$name = $_POST['name'];
$phone = $_POST['phone'];

$text = 'Заявка на покупку HD Recorder от ' . $name . ' .Номер телефона: ' .$phone;

mail($email, 'Заявка HD Recorder', $text);

?>

<script type='text/javascript'>
document.location.href = 'index.php'; 
</script>";}