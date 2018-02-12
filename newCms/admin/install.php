<?php
include("connect.php");
	
	$sql="CREATE TABLE IF NOT EXISTS category_info(
		cid int NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(cid),
		category_name varchar(32)
	);";
	
	if(!mysql_query($sql))
	die(mysql_error());
	
		$sql="CREATE TABLE IF NOT EXISTS blog_post(
		id int NOT NULL  	AUTO_INCREMENT,
		PRIMARY KEY(id),
		title varchar(256),
		category int NOT NULL,
		blog_psot varchar(10000000)
	);";
	
	if(!mysql_query($sql))
	die(mysql_error());
	
	$sql="CREATE TABLE IF NOT EXISTS user_table(
		uid int NOT NULL  	AUTO_INCREMENT,
		PRIMARY KEY(uid),
		username varchar(32),
		user_password varchar(32),
		name varchar(64),
		email varchar(64)
	);";
	
	if(!mysql_query($sql))
	die(mysql_error());
	
	if(!mysql_query("INSERT INTO user_table VALUES('','admin','12345','Shahriyear','me@shahriyear.com')"))
	die(mysql_error());
	
	echo "Install Succsess";
?>