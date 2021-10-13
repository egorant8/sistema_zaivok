<?
class CProducts
{
	public function zap_tabl_($ogr_vivod)
	{
		include('config.php');
		
		$results=mysqli_query($conn,"SELECT * from `zaivki` where hidd='1'");
		while($rows=mysqli_fetch_array($results))
		{
	    	echo "<tr>";
			$result=mysqli_query($conn,"SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'zaivki' AND TABLE_NAME = 'zaivki'; ");
			while($row=mysqli_fetch_array($result))
			{			
				if ('hidd' <> $row['COLUMN_NAME']) 
				{
					if ('trouble' == $row['COLUMN_NAME'])
					{
						echo "<td style='text-align: center;width: 90%'>";
						echo $rows[$row['COLUMN_NAME']];
						echo "</td>";
					}
					else
					{
						if('metka' != $row['COLUMN_NAME'])
						{
							echo "<td>";
							echo $rows[$row['COLUMN_NAME']];
							echo "</td>";
						}
						else
						{
							
							echo "<td>";
							echo "<center><button onclick='delete_rows(".$rows['id'].");'>X</button></center>";
							echo "</td>";
						}
						
					}
				}
				else
				{
				}
			}
			echo "</tr>";
		}
		mysqli_close($conn);
	}


	
	public function zap_tabl($ogr_vivod)
	{
		$obj = new CProducts();
		include('config.php');
		
		$results=mysqli_query($conn,"SELECT * from `zaivki` where hidd='0' ORDER BY `zaivki`.`metka` DESC");
		while($rows=mysqli_fetch_array($results))
		{
	    	echo "<tr>";
			$result=mysqli_query($conn,"SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'zaivki' AND TABLE_NAME = 'zaivki'; ");
			while($row=mysqli_fetch_array($result))
			{			
				if ('hidd' <> $row['COLUMN_NAME']) 
				{
					if ('trouble' == $row['COLUMN_NAME'])
					{
						if($rows['metka'] >= 1)
						{
							echo "<td style='text-align: center; background-color:red; width: 90%'>";
							echo $rows[$row['COLUMN_NAME']];
							$obj->comment($rows['id']);
							echo "</td>";
						}
						else
						{
							echo "<td style='text-align: center; width: 90%'>";
							echo $rows[$row['COLUMN_NAME']];
							$obj->comment($rows['id']);
							echo "</td>";
						}
					}
					else
					{
						if('metka' == $row['COLUMN_NAME'])
						{
							echo "<td onclick='countss(".$rows['id'].", \"+\");'>";
							echo "<center><button onclick='countss(".$rows['id'].", \"+\");'>+</button></center>";
							echo "</td>";
						}
						else
						{
							echo "<td>";
							echo $rows[$row['COLUMN_NAME']];
							echo "</td>";
						}
					}
				}
				else
				{
					echo "<td>";
					echo "<button onclick='hidd_tovar(".$rows['id'].");'>Выполнено</button>";
					echo "</td>";
				}
			}
			echo "</tr>";
		}
		mysqli_close($conn);
	}
	public function comment($id)
	{
		include('config.php');
		echo "<br>";
		$results=mysqli_query($conn,"SELECT * from `komment` where id_zaivki=$id");
		if($results != '')
		{
			$i = 0;
			while($row=mysqli_fetch_array($results))
			{
				if($i==0)
				{
					echo "<ol style='text-align:left'>";
					$i = 1;
				}
				echo "<li>".$row['text_']."</li>";
			}
			echo "</ol>";
		}
		else
		{
			
		}
		
		echo "<input placeholder='Комментарий' id='cn$id'><button onclick='we$id()'>Отправить</button>";
		echo "<script>function we$id(){document.location.href = 'admin/add_comm.php?id=$id&text='+document.getElementById('cn$id').value;}</script>";
	}

	public function zap_header()
	{
		include('config.php');
		$result=mysqli_query($conn,"SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'zaivki' AND TABLE_NAME = 'zaivki';");
		while($row=mysqli_fetch_array($result))
		{			
		    echo "<th>";
		    echo $row['COLUMN_NAME'];
			echo "</th>";
		}
		mysqli_close($conn);
	}
	public function zap_header_s()
	{
		include('config.php');
		$result=mysqli_query($conn,"SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'zaivki' AND TABLE_NAME = 'zaivki';");
		while($row=mysqli_fetch_array($result))
		{			
			if($row['COLUMN_NAME'] != 'hidd')
			{
				if($row['COLUMN_NAME'] != 'metka')
				{
					echo "<th>";
					echo $row['COLUMN_NAME'];
					echo "</th>";
				}
				
			}
		    
		}
					echo "<th>";
					echo 'Delete';
					echo "</th>";
		mysqli_close($conn);
	}
}
?>