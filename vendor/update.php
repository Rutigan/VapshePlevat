<?php
require_once '../blocks/bd.php';

$id = $_POST['id'];
$title = $_POST['title'];
$meta_d = $_POST['meta_d'];
$meta_k = $_POST['meta_k'];
$date = $_POST['date'];
$description = $_POST['description'];
$text = $_POST['text'];
$author = $_POST['author'];

mysqli_query($db, "UPDATE `products` SET `title`='$title', `date`='$date', 
`description` = '$description', `text`='$text', `author`='$author' WHERE 
`lessons`.`id`='$id' ");


?>

