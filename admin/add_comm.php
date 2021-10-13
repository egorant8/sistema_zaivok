<?
include('../config.php');
$ID = $_GET['id'];
$text=$_GET['text'];
$count = $row['metka'] + 1;
$results=mysqli_query($conn,"INSERT INTO `komment` (`id`, `id_zaivki`, `text_`) VALUES (NULL, '$ID', '$text');");
header('Location: ../admin.php');
exit;
?>