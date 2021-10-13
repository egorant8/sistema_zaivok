<?
include('../config.php');
$results=mysqli_query($conn,"UPDATE `zaivki` SET `hidd` = '1' WHERE `zaivki`.`ID` = ".$_GET['id']);
header('Location: ../admin.php');

?>