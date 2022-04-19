<?php ("lock.php");"blocks/bd.php";/*Соединяемся с базой*/
require_once('./blocks/bd.php');
(isset($_POST['id'])) {$id = $_POST['id'];}

$result = mysqli_query ($db,"SELECT title,meta_d,meta_k,text FROM settings WHERE page='index'");

$myrow = mysqli_fetch_array ($result);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Выберите расширение для паковки" content="text/html; charset=windows-1251">
<title>Обработчик</title>

<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="690" align="center" style="background: white; border-radius:5px;">

<!--Подключаем шапку сайта-->
<?php include "blocks/header.php"; ?>
<tr>
<td><table width="690">
<tr>
	 
<!--Подключаем левое меню сайта-->
<? include "blocks/left.php"; ?>

<td class="right" valign="top">

<?php 
(isset ($id))

{
$result = mysqli_query ("DELETE FROM lessons WHERE id='$id'");
($result == 'true') {echo "<p>Ваш урок успешно удален!</p>";}

else {echo "<p>Ваш урок не удален!</p>";}

}


{"<p>Вы запустили данный файл без параметра id, поэтому удалить урок невозможно! (Скорее всего Вы не выбрали радиокнопку на предыдущем шаге)</p>";
}
?>
</td>
</tr>
</table></td>
</tr>

<!--Подключаем подвал сайта-->
<? include "blocks/footer.php"; ?>

</table>
</body>
</html>
