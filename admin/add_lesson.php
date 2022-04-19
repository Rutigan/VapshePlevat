<?php ("lock.php");"blocks/bd.php";/*Соединяемся с базой*/
require_once('./blocks/bd.php');
(isset ($_POST['title'])) 		 {$title = $_POST['title']; 
    if ($title == '') {unset ($title);} }

/*Если существует в глобальном массиве $_POST[''title] определенная ячейка, то мы создаем из нее простую переменную. Если переменная пустая, то ее нужно уничтожить с помощью функции unset*/
if (isset ($_POST['meta_d'])) 		 {$meta_d = $_POST['meta_d']; 
    if ($meta_d == '') {unset ($meta_d);} }(isset ($_POST['meta_k'])) 		 {$meta_k = $_POST['meta_k']; if ($meta_k == '') {unset ($meta_k);} }(isset ($_POST['date'])) 		 {$date = $_POST['date']; if ($date == '') {unset ($date);} }(isset ($_POST['description'])) {$description = $_POST['description']; if ($description == '') {unset ($description);} }(isset ($_POST['text'])) 		 {$text = $_POST['text']; if ($text == '') {unset ($text);} }(isset ($_POST['author'])) 		 {$author = $_POST['author']; if ($author == '') {unset ($author);} }

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
(isset ($title) && isset ($meta_d) && isset ($meta_k) && isset ($date) && isset ($description) && isset ($text) && isset ($author))

{
/*Здесь пишем, что можно заносить информацию в базу*/
$result = mysqli_query ("INSERT INTO lessons (title, meta_d,meta_k,date,description,text,author) VALUES ('$title','$meta_d','$meta_k','$date','$description','$text','$author')");
($result == 'true') {echo "<p>Ваш урок успешно добавлен!</p>";}

else {echo "<p>Ваш урок не добавлен!</p>";}

}

{"<p>Вы ввели не всю информацию, поэтому урок не может быть добавлен в базу</p>";
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
