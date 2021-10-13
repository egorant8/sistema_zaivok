<?
include('../config.php');
$ID = $_GET['id'];
$result = mysqli_query($conn,"select id,metka from zaivki where `id`=".$ID);
while($row=mysqli_fetch_array($result))
{
	$results=mysqli_query($conn,"DELETE FROM `zaivki` WHERE `zaivki`.`id` = ".$ID);
	header('Location: ../admin.php');
	exit;
}
?>