<?php
session_start();
				unset($_SESSION['LOGIN']);
				unset($_SESSION['USERNAME']);
				unset($_SESSION['FULLNAME']);
				unset($_SESSION['EMAIL']);

			header("location: login.php");
			exit();
?>