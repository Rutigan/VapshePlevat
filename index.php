<?php "blocks/bd.php";
require_once('./blocks/bd.php');
$result = mysqli_query ($db,"SELECT title,meta_d,meta_k,text FROM settings 
WHERE page='index'");
$myrow = mysqli_fetch_array($result);
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
<body style="background-image: url(img/bg.gif);">
<table width="690" align="center" style="background: white; border-radius:5px;">
<!--Подключаем шапку сайта-->
<?php include "blocks/header.php"; ?>
<tr><td><table width="690"><tr>
<!--Подключаем левое меню сайта-->
<? include "blocks/left.php"; ?>
<td class="right" valign="top">
<?php echo $myrow ['text']; ?>
</td></tr></table></td></tr>
<!--Подключаем подвал сайта-->
<? include "blocks/footer.php"; ?>
</table>
</body>
</html>

