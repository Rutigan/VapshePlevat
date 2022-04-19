<?php "blocks/bd.php";/*Соединяемся с базой*/
(isset($_GET['id'])) {$id = $_GET['id'];}


$result = mysqli_query ($db,"SELECT * FROM lessons WHERE id='$id'");

$myrow = mysqli_fetch_array ($result);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Выберите расширение для паковки" content="text/html; charset=windows-1251">
<title><?php echo $myrow ['title']; ?></title>
<meta name="description" content="<?php echo $myrow ['meta_d']; ?>">
<meta name="keywords" content="<?php echo $myrow ['meta_k']; ?>">

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
<p class="view_title"><?php echo $myrow ['title']; ?></p>
<p class="view_date">Дата добавления: <?php echo $myrow['date']; ?></p>
<p class="view_date">Автор: <?php echo $myrow['author']; ?></p>
<p><?php echo $myrow ['text']; ?></p>
	 
	 
	 
	 <p>&nbsp;</p></td>
</tr>
</table></td>
</tr>

<!--Подключаем подвал сайта-->
<? include "blocks/footer.php"; ?>

</table>
</body>
</html>
