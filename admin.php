<?php 
require_once 'blocks/bd.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Выберите расширение для паковки" content="text/html; charset=windows-1251">
<title>Админ</title>
<meta name="description" content="<?php echo $myrow ['meta_d']; ?>">
<meta name="keywords" content="<?php echo $myrow ['meta_k']; ?>">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body style="background-image: url(img/bg.gif);">
<table width="690" align="center" style="background: white; border-radius:5px;">
<!--Подключаем шапку сайта-->
<?php include "blocks/header.php"; ?>
<tr><td><table width="690"><tr>
<!--Подключаем левое меню сайта-->
<? include "blocks/left.php"; ?>
<td class="right" valign="top">
<table>
    <?php
$lessons = mysqli_query($db, 'SELECT * FROM `lessons`');
$lessons = mysqli_fetch_all($lessons);
foreach ($lessons as $lesson){
}    ?>
</table>
<h3>Добавить новый блог</h3>
<form action="vendor/create.php" method="post">
    <p>Title</p>
    <input type="text" name="title">
    <p>Date</p>
    <input type="date" name="date">
    <p>Description</p>
    <textarea name="description"></textarea>
    <p>Text</p>
    <textarea name="text"></textarea>
    <p>Author</p>
    <textarea name="author"></textarea><br><br>
    <button type="submit">Добавить</button>
</form>
<?php echo $myrow ['text']; ?>
</td></tr></table></td></tr>
<!--Подключаем подвал сайта-->
<? include "blocks/footer.php"; ?>
</table></body></html>

