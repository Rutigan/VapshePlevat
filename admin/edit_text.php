<?php("lock.php");"blocks/bd.php";/*Соединяемся с базой*/(isset($_GET['id'])){$id=$_GET['id'];}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Выберите расширение для паковки" content="text/html; charset=windows-1251">
<title>Страница редактирования текстов страниц</title>

<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="690" align="center">

<!--Подключаем шапку сайта-->
<?php include "blocks/header.php"; ?>
<tr>
<td><table width="690">
<tr>
	 
<!--Подключаем левое меню сайта-->
<? include "blocks/left.php"; ?>
<td class="right" valign="top">

<p><strong>Страница редактирования других страниц сайта</strong></p>

<p><strong>Выберите страницу для редактирования</strong></p>

<? 
(!isset($id))

{
$result = mysqli_query("SELECT title,id FROM settings"); 
$myrow = mysqli_fetch_array($result);

{("<p><a href='edit_text.php?id=%s'>%s</a></p>",$myrow["id"],$myrow["title"]);
}
($myrow = mysqli_fetch_array($result));

}
{
$result = mysqli_query("SELECT * FROM settings WHERE id=$id"); 
$myrow = mysqli_fetch_array($result);
<<<HERE
<form name="form1" method="post" action="update_text.php">
<p>
<label>Введите название страницы<br>
<input value="$myrow[title]" type="text" name="title" id="title">
</label>
</p>
<p>
<label>Введите краткое описание страницы<br>
<input value="$myrow[meta_d]" type="text" name="meta_d" id="meta_d">
</label>
</p>
<p>
<label>Введите ключевые слова для страницы<br>
<input value="$myrow[meta_k]" type="text" name="meta_k" id="meta_k">
</label>
</p>
<p>
<label>Введите полный текст страницы с тэгами
<textarea name="text" id="text" cols="40" rows="20">$myrow[text]</textarea>
</label>
</p>
<input name="id" type="hidden" value="$myrow[id]">
<p>
<label>
<input type="submit" name="submit" id="submit" value="Сохранить изменения">
</label>
</p>
</form>;
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
