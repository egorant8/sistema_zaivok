
  <h2>Таблица выполненых заявок</h2>
  <table border="1">
   		<tr>
    	<?
    		//CProducts->zap_header();
			$obj = new CProducts();
			$obj->zap_header_s();
    		//CProducts::zap_header();

    	?>
   		</tr>
	   	<?
			$obj->zap_tabl_(100);
	   	?>
  </table>