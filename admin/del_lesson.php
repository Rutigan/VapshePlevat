<?php ("lock.php");"blocks/bd.php";/*Соединяемся с базой*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Выберите расширение для паковки" content="text/html; charset=windows-1251">
<title>Страница удаления урока из базы</title>

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

<p>Страница удаления уроков.</p>

<p>Выберите урок для удаления:</p>

<form action="drop_lesson.php" method="post">
<?php 

$result = mysqli_query("SELECT title,id FROM lessons"); 
$myrow = mysqli_fetch_array($result);

{("<p><input name='id' type='radio' value='%s'><label> %s</label></p>",$myrow["id"],$myrow["title"]);
}
($myrow = mysqli_fetch_array($result));

?>

<p><input name="submit" type="submit" value="Удалить урок!"></p>

</form>

</td>
</tr>
</table></td>
</tr>

<!--Подключаем подвал сайта-->
<? include "blocks/footer.php"; ?>

</table>
</body>
</html>
