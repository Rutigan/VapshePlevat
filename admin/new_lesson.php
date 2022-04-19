<?php include ("lock.php");?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Выберите расширение для паковки" content="text/html; charset=windows-1251">
<title>Страница добавления нового урока в базу</title>

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

<p>Страница добавления нового урока.</p>
<form name="form1" method="post" action="add_lesson.php">
<p>
<label>Введите название урока<br>
<input type="text" name="title" id="title">
</label>
</p>

<p>
<label>Введите краткое описание урока<br>
<input type="text" name="meta_d" id="meta_d">
</label>
</p>

<p>
<label>Введите ключевые слова<br>
<input type="text" name="meta_k" id="meta_k">
</label>
</p>

<p>
<label>Введите дату добавления урока<br>
<input name="date" type="text" id="date" value="2011-05-09">
</label>
</p>
<p>
<label>Введите краткое описание урока с тэгами абзацев<br>
<textarea name="description" id="description" cols="40"></textarea>
</label>
</p>
<p>
<label>Введите полный текст урока с тэгами абзацев<br>
<textarea name="text" id="text" cols="40" rows="20"></textarea>
</label>
</p>
<p>
<label>Введите автора урока <br>
<input type="text" id="author" name="author">
</label>
</p>
<p>
<label>
<input type="submit" name="submit" id="submit" value="Занести урок в базу">
</label>
</p>
</form><p>&nbsp;</p></td>
</tr>
</table></td>
</tr>

<!--Подключаем подвал сайта-->
<? include "blocks/footer.php"; ?>

</table>
</body>
</html>
