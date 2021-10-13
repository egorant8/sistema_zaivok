<?
$dost = true;
if (isset($_POST['login']))
{
	$login = $_POST['login'];
	$password = $_POST['pass'];
	include('config.php');
	$dost = false;
	$sql = "SELECT * FROM users where login='$login' and password = '$password'";
	if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    foreach($result as $row){
		setcookie("login", $row["login"]);
		header('Location: /');
    }
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}

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
 padding:11px 32px; 
 border:solid 1px #004F72; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:31px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#ffffff; 
 background-color:#c73b3b; 
 background-image: -moz-linear-gradient(top, #c73b3b 0%, #b80b0b 100%); 
 background-image: -webkit-linear-gradient(top, #c73b3b 0%, #b80b0b 100%); 
 background-image: -o-linear-gradient(top, #c73b3b 0%, #b80b0b 100%); 
 background-image: -ms-linear-gradient(top, #c73b3b 0% ,#b80b0b 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b80b0b', endColorstr='#b80b0b',GradientType=0 ); 
 background-image: linear-gradient(top, #c73b3b 0% ,#b80b0b 100%);   
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
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
	<body style="background-image: url('img/background_login_main.jpg')">
		<center>
			<div style="border: 4px double black; width: 300px; margin-top: 100px; background-image: url('img/background_login_auth.png')">
			<?php if(!$dost){?><p style="Color:Red">Не правильный логин или пароль</p><?}?>
			<form action="" method="post">
				<br>
				<input type="login" required name="login" style="text-align:center; width: 200px; height: 30px; font-size: 20px;" placeholder="Логин">
				<br><br>
				<input type="password" required name="pass" style="text-align:center; width: 200px; height: 30px; font-size: 20px;" placeholder="Пароль">
				<br><br><br>
				<button href="" class="button"/>Отправить</button>
			</form>
			</div>
			<br><br><br><br><br><br>
		</center>
	</body>
</html>