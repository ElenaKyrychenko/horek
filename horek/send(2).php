<?php
header("Content-type: text/html; charset=utf-8");
//**********************************************
if(empty($_POST['js'])){

$log =="";
$error="no"; //флаг наличия ошибки

		$posName = addslashes($_POST['posName']);
		$posName = htmlspecialchars($posName);
		$posName = stripslashes($posName);
		$posName = trim($posName);

		$posPhone = addslashes($_POST['posPhone']);
		$posPhone = htmlspecialchars($posPhone);
		$posPhone = stripslashes($posPhone);
		$posPhone = trim($posPhone);

//Проверка правильность имени
if(!$posName || strlen($posName)>20 || strlen($posName)<3) {
$log.="<li>Неправильно заполнено поле \"Ваше имя\" (3-15 символов)!</li>"; $error="yes"; }
//Проверка телефона
function isPhone($posPhone) {
    return(preg_match("/^[0-9-+ ]+$/i", $posPhone));
    }

if($posPhone == '') {
	$log .= "<li>Пожалуйста, введите Ваш телефон!</li>";
	$error = "yes";
    }

else if(!isPhone($posPhone))
    {
	$log .= "<li>Вы ввели неправильный телефон. Пожалуйста, введите его в формате +38-0ХХ-ХХХ-ХХ-ХХ !</li>";
	$error = "yes";
    }

sleep(2);

//Если нет ошибок отправляем email
if($error=="no")
{
//Отправка письма админу о новом комментарии
$to = "Alen444ik@ukr.net";//Ваш e-mail адрес
$mes = "Человек по имени $posName оставил Вам свой телефон: $posPhone ";

$from = $posName;
$sub = "Просьба обратного звонка";
mail($to, $sub, $mes);
echo "1"; //Всё Ok!
}
else//если ошибки есть
{
		echo "<span style='font: 14px Verdana;'><font color=#FF3333><strong>Ошибка !</strong></font></span><ul style='list-style: none; font: 12px Verdana; color:#000; border:1px solid #c00; border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px; background-color:#fff; padding:2px; margin:2px 4px;'>".$log."</ul><br />"; //Нельзя отправлять пустые сообщения

}
}
