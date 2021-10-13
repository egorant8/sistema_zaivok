function hidd_tovar(id)
{
	window.location = '/js/hidden.php?id='+id;
}
function countss(id, countss)
{
	if (countss == '+') 
	{
		window.location = '/js/add_count.php?id='+id;
	}
}

function countss_(id, countss)
{
		window.location = '/js/minus_count.php?id='+id;
}

function delete_rows(id, countss)
{
		window.location = '/js/delete_rows.php?id='+id;
}
