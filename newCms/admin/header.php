<?php
	session_start();
	include("connect.php");
		if(!isset($_SESSION['LOGIN']) || empty($_SESSION['LOGIN']))
		{
			header("location: login.php");
			exit();
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>

<body>
    <div class="row-fluid">
    	<div class="container main">
        <div class="row-fluid">
        	<h3 class="span5 pull-right" style="text-align:right;">Welecome <?php echo $_SESSION['FULLNAME'] ?></h3>
        </div>
        <br class="clearfix" />
        	<div class="row-fluid">
            	<div class="span3">
                  <ul class="nav nav-tabs nav-stacked">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="print.php">Veiw All Post</a></li>
                        <li><a href="catadd.php">Add New Category</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>