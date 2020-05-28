<?php 
$name = $_POST['name'];
echo $name;
echo "<br>";
$message = $_POST['message'];
$name = htmlspecialchars($name);
$message = htmlspecialchars($message);
$name = urldecode($name);
$message = urldecode($message);
$name = trim($name);
$message = trim($message);

if(mail("zhenya113@mail.ru", "Отзыв", "Имя: ".$name.". Сообщение: ".$message))
{
	echo "Your message was sent";
} else {
	echo "You message wasn't sent";
}
?>