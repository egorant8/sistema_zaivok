<?
include('../config.php');
include('../config.php');
$ID = $_GET['id'];
$result = mysqli_query($link,"select ID,PRODUCT_QUANTITY from products where `ID`=".$ID);
while($row=mysqli_fetch_array($result))
{
	if ($row['PRODUCT_QUANTITY'] == "0") 
	{
		echo "<script type=\"text/javascript\">alert('Нет товаров для вычитания')</script>";
		echo "<script type=\"text/javascript\">window.location = '../'</script>";
		exit;
	}
	else
	{
		$count = $row['PRODUCT_QUANTITY'] - 1;
		$results=mysqli_query($link,"UPDATE `products` SET `PRODUCT_QUANTITY` = '".$count."' WHERE `products`.`ID` = ".$ID);
	}
	header('Location: ../');
	exit;
}
?>