<?php
	session_start();
	include("connect.php");
	$error='';
	
	if(isset($_SESSION['LOGIN']) || !empty($_SESSION['LOGIN']))
		{
			header("location: index.php");
			exit();
		}
	
	if(isset($_POST['logBtn']))
	{
		$user=trim($_POST['username']);
		$pass=trim($_POST['password']);	
		
		if($user=="")
			$error="User Name Missing";
		if($pass=="")
			$error="Password Is Missing";
		if($error=="")
		{
			$sql="SELECT * FROM user_table WHERE username='".$user."' AND user_password='{$pass}' LIMIT 1";
			$sql=mysql_query($sql);
			
			if(mysql_num_rows($sql)>0)
			{
				$info=mysql_fetch_array($sql);
				$_SESSION['LOGIN']=$info['uid'];
				$_SESSION['USERNAME']=$info['username'];
				$_SESSION['FULLNAME']=$info['name'];
				$_SESSION['EMAIL']=$info['email'];
				session_write_close();
				header("location: index.php");
				exit();
			}
			else
			{
				$error="Inavlide User or Password";
			}
			
		}
		
	}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title><link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
</head>

<body>
<div class="row-fluid">
<br />
<br />
<br />
<br />
<br class="clearfix" />
	<div class="span6 offset3">
    <?php echo '<p class="label-warning">'.$error.'</p>';  ?>
    	    <form class="form-horizontal" action="" method="post">
    <div class="control-group">
    <label class="control-label" for="inputEmail">User Name</label>
    <div class="controls">
    <input type="text" name="username" id="inputEmail" placeholder="User Name">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
    <input type="password" name="password" id="inputPassword" placeholder="Password">
    </div>
    </div>
    <div class="control-group">
    <div class="controls">
<button type="submit" name="logBtn" class="btn">Sign in</button>
    </div>
    </div>
    </form>
    </div>
</div>
</body>
</html>