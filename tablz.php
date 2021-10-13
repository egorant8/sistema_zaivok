<h2>Таблица заявок</h2>
	<div style=" background-image: url('img/background_login_auth.png'); border: 4px double black; width: 900px;">
	<table border="1">
   		<tr>
    	<?
    		//CProducts->zap_header();
			$obj = new CProducts();
			$obj->zap_header();
    		//CProducts::zap_header();

    	?>
   		</tr>
	   	<?
			$obj->zap_tabl(100);
	   	?>
  </table>
  </div>