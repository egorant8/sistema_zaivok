<?
if (isset($_GET['trouble']))
{
	$datetoday = date("y.m.d");
	$trouble = $_GET['trouble'];
	$name = $_GET['login'];
	include('config.php');
	$dost = false;
	 $sql = "SELECT * FROM zaivki WHERE trouble = '$trouble' and login = '$name' and hidd = 0";
    if($result = $conn->query($sql))
	{
        if($result->num_rows == 0)
		{
            $sql = "INSERT INTO zaivki (login, trouble, hidd, data, metka) VALUES ('$name', '$trouble', 0,'$datetoday', 0)";
			if($conn->query($sql)){
				echo "<center>Заявка успешно отправлена, через 5 секунд вы будете перенаправлены обратно</center>";
				echo "<script>setTimeout(function(){  window.location.href = '/'; }, 5 * 1000);</script>";
			} else{
				echo "Ошибка: " . $conn->error;
			}
        }
		else
		{
			echo "<center>Невозможно отправить повторно заявку. Через 5 секунд вы будете перенаправлены обратно</center>";
			echo "<script>setTimeout(function(){  window.location.href = '/'; }, 5 * 1000);</script>";
		}
	}
	
    $conn->close();

}


?>