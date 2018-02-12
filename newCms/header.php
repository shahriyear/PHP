<?php
	include("admin/connect.php");
	
	function limit_words($txt,$word)
	{
		$return='';
		$arry=explode(" ",$txt);
		for($i=0;$i<=$word;$i++)
		{
			$return.=$arry[$i]." ";
		}
		return $return;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
	<div class="row-fluid">
    	<div class="container main">
        	    <div class="navbar">
                    <div class="navbar-inner">
                    <a class="brand" href="#">Title</a>
                        <ul class="nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        </ul>
                 </div>
    		</div>