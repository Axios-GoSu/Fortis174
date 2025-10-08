<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$forma = $_POST['forma'];
$address = 'cuchaev.den@yandex.ru';
$sub = "Заявка с сайта ".$_SERVER['HTTP_HOST']."";
$mes = "\n Имя: $name \n Телефон $phone  \n Форма: $forma \n IP: ".$_SERVER["REMOTE_ADDR"]."\n $from";
$verify = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:zakaz");
$URL="form-ok.php?name=$name&phone=$phone";
if ($verify == 'true')
{
echo("<meta http-equiv=\"REFRESH\" content=\"0; URL='$URL'\">");
}
else
{
echo "<p>Произошла ошибка попробуйте заполнить форму повторно!</p>";
}
?>
