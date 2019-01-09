<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Order</title>
	<meta http-equiv="Refresh" content="1; URL=https://site-uslugi.ru/ps/">
</head>

<body>

	<?php 
$sendto   = "rrotatew@gmail.com"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertext = $_POST['text']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usermail =$_POST['email'];

// Формирование заголовка письма
$subject  = "Order From website";
$headers  = "From: " . strip_tags($username) . "\r\n";
$headers .= "Reply-To: ". strip_tags($username) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='height:300px;font-family:Arial,sans-serif,Rasa;'>";
$msg .= "<h1 style='color:black;font-weight:bold;border-bottom:2px solid #000000;'>Order</h1>\r\n";
$msg .= "<p><strong>Name:</strong>".$username."</p>";
$msg .= "<p><strong>Email:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Text:</strong> ".$usertext."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	print('<script language=javascript>
    swal("Успешно!", "Заявка отправлена!", "success")
</script>');
} else {
	print('<script language=javascript>
    swal("Ошибка!", "Заявка не отправлена!", "error")
</script>');
}

?>

</body>

</html>
