<?
include('../config.php');
$ID = $_GET['id'];
$result = mysqli_query($conn,"select id,metka from zaivki where `id`=".$ID);
while($row=mysqli_fetch_array($result))
{
	$count = $row['metka'] + 1;
	$results=mysqli_query($conn,"UPDATE `zaivki` SET `metka` = '".$count."' WHERE `id` = ".$ID);
	header('Location: ../admin.php');
	exit;
}
?>