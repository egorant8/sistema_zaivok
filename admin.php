<?
include('admin/CProducts.php');
?>

<!DOCTYPE html>
<html>
<head>
	<script src="/js/hidden.js"></script>
	<meta charset="utf-8">
	<title>Админ</title>
</head>
<body style="background-image: url('img/549496625.jpg')">


<style>
ul {
  list-style: none; /*убираем маркеры списка*/
}
a {
  text-decoration: none; /*убираем подчеркивание текста ссылок*/
}
li {
  float:center; /*Размещаем список горизонтально для реализации меню*/
  margin-right:10px; /*Добавляем отступ у пунктов меню*/
}
</style>

<center>
<div style=" background-image: url('img/background_login_auth.png'); border: 4px double black; width: 1000px; margin-top: 100px;">
	<ul>
		<li><a href="?g=tablz.php">Таблица заявок</a></li>
		<li><a href="?g=tablz-end.php">Таблица выполненых заявок</a></li>
	</ul>
	<br>
	<?
		if($_GET['g'] == 'tablz-end.php')
		{
			include('tablz-end.php');
		}
		else
		{
			include('tablz.php');
		}
		
	?>
  <br>
  <br>
  </div>
</center>
</body>
</html>