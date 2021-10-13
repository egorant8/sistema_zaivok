<?
include('../config.php');
$results=mysqli_query($link,"UPDATE `products` SET `hidd` = '0' WHERE `products`.`ID` = ".$_GET['id']);
header('Location: ../');

?>