<?php
session_start();
		if(!isset($_SESSION['LOGIN']) || empty($_SESSION['LOGIN']))
		{
			header("location: login.php");
			exit();
		}
		
		if(!isset($_GET['id']) || empty($_GET['id']))
		{
			header("location: print.php");
			exit();
		}
include("connect.php");
	
	$query=mysql_query("DELETE FROM blog_post WHERE id=".$_GET['id']);
	if($query)
	{
			header("location: print.php");
			exit();
	}
	else
	{
		die("error ".mysql_error());
	}
	

?>