<?php("lock.php");"blocks/bd.php";/*Соединяемся с базой*/(isset($_GET['id'])){$id=$_GET['id'];}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Выберите расширение для паковки" content="text/html; charset=windows-1251">
<title>Страница редактирования уроков</title>

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

<td class="right" valign="top">>Страница редактирования уроков</p>
<? require_once('./blocks/bd.php');
(!isset($id))

{
$result = mysqli_query("SELECT title,id FROM lessons"); 
$myrow = mysqli_fetch_array($result);

{("<p><a href='edit_lesson.php?id=%s'>%s</a></p>",$myrow["id"],$myrow["title"]);
}
($myrow = mysqli_fetch_array($result));

}


{

$result = mysqli_query("SELECT * FROM lessons WHERE id=$id"); 
$myrow = mysqli_fetch_array($result);
<<<HERE

<form name="form1" method="post" action="update_lesson.php">
<p>
<label>Введите название урока<br>
<input value="$myrow[title]" type="text" name="title" id="title">
</label>
</p>
<p>
<label>Введите краткое описание урока<br>
<input value="$myrow[meta_d]" type="text" name="meta_d" id="meta_d">
</label>
</p>
<p>
<label>Введите ключевые слова для урока<br>
<input value="$myrow[meta_k]" type="text" name="meta_k" id="meta_k">
</label>
</p>
<p>
<label>Введите дату добавления урока<br>
<input value="$myrow[date]" name="date" type="text" id="date" value="2007-01-27">
</label>
</p>
<p>
<label>Ведите краткое описание урока с тэгами абзацев
<textarea name="description" id="description" cols="40" rows="5">$myrow[description]</textarea>
</label>
</p>
<p>
<label>Введите полный текст урока с тэгами
<textarea name="text" id="text" cols="40" rows="20">$myrow[text]</textarea>
</label>
</p>
<p>
<label>Введите автора урока<br>
<input value="$myrow[author]" type="text" name="author" id="author">
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
