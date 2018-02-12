<?php
	
	$link=@mysql_connect("localhost","root","");
	
	if($link)
	{
		$db=mysql_select_db("newCms");
		if(!$db)
			{
				die("Error: ".mysql_error());
			}
	}
	
?>