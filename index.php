<?
$dost = false;
if (!isset($_COOKIE['login']))
{
	include('login.php');
	exit;
}
else
{
	$login = $_COOKIE['login'];
	include('config.php');
	$sql = "SELECT * FROM users where login='$login'";
	if($result = $conn->query($sql)){
		$rowsCount = $result->num_rows; // количество полученных строк
		foreach($result as $row){
			$dost = true;
		}
		$result->free();
	}
}
if($dost == false)
{
	include('login.php');
}
?>
<html>
 <head>
  <meta charset="utf-8">
  <title>Тест</title>
 </head>
 <style>
 .button{
 text-decoration:none; 
 text-align:center; 
 padding:9px 100px; 
 border:solid 2px #ffffff; 
 -webkit-border-radius:50px;
 -moz-border-radius:50px; 
 border-radius: 50px; 
 font:28px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#E5FFFF; 
 background-color:#3BA4C7; 
 background-image: -moz-linear-gradient(top, #3BA4C7 0%, #00c4ff 100%); 
 background-image: -webkit-linear-gradient(top, #3BA4C7 0%, #00c4ff 100%); 
 background-image: -o-linear-gradient(top, #3BA4C7 0%, #00c4ff 100%); 
 background-image: -ms-linear-gradient(top, #3BA4C7 0% ,#00c4ff 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00c4ff', endColorstr='#00c4ff',GradientType=0 ); 
 background-image: linear-gradient(top, #3BA4C7 0% ,#00c4ff 100%);   
 -webkit-box-shadow:2px 3px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 2px 3px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:2px 3px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
  }
 .texta 
 {
	width: 90%;
	height: 200px;
	resize: none;
	overflow: auto;

 }
 .numkabinet
 {
	width: 120px;
 }
 	input{
		display: block;
	}

	::-webkit-input-placeholder {
		text-align:center;
	}

	:-moz-placeholder { /* Firefox 18- */
		text-align:center;  
	}

	::-moz-placeholder {  /* Firefox 19+ */
		text-align:center;  
	}

	:-ms-input-placeholder {  
		text-align:center; 
	}
 </style>
	<body style="background-image: url('img/549496625.jpg')">
		<center>
			<div style="border: 4px double black; width: 450px; margin-top: 100px; background-image: url('img/background_login_auth.png')">
			
			<form action="add.php">
				<p><textarea  class="texta" style="text-align:center;font-size: 20px;" placeholder="Опишите проблему" required name="trouble" type=""></textarea></p>
				<p><input name="login" type="hidden" value = "<?echo $_COOKIE["login"]?>"></p>
				<br>
				<button href="" style="background-image: url(img/background_login_auth.png); color:black" class="button"/>Отправить</button>
			</form>
				<a href="logout.php" style="color:black">Выйти из аккаунта</a>
				<br>
			<br>
			</div>
			<br><br><br><br><br><br>
			<div style="border: 4px double black; width: 450px; margin-top: 100px; background-image: url('img/background_login_auth.png')">
				<p>Отправленные проблемы (Нерешенные)</p>
				<ol>
				<?
				include('config.php');
				$dost = false;
				$sql = "SELECT * FROM zaivki where login='$login' and hidd = 0";
				if($result = $conn->query($sql)){
				$rowsCount = $result->num_rows; // количество полученных строк
				foreach($result as $row){
					echo "<li>".$row['trouble']."</li>";
				}
				}
				$result->free();
				?>
					
				</ol>  
			</div>
		</center>
	</body>
</html>