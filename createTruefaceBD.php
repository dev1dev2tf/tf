<?php
	include_once "inc/lib.inc.php";
 
	// создадим базу данных trueface
	$db = new Mysqli('localhost', 'root' , '129300');
	$sqlDB = "CREATE DATABASE IF NOT EXISTS trueface";
	
	$db->query($sqlDB);
 $db->close();
	
//задем в нашу базу данных и создадим таблицы
	$db = new DB();
	
 
// таблица пользователей 

	$sqlCrUser = "CREATE TABLE IF NOT EXISTS users (
																id INT(10) NOT NULL AUTO_INCREMENT,
																name char(16) NOT NULL,
																surname char(16) NOT NULL,
																passHash char(40) NOT NULL,
																email char(30) NOT NULL,
																
																PRIMARY KEY(id)
																
																)";
	if ($db->query($sqlCrUser) === TRUE) {
	 echo "table users created<br />";
	} 
 
 
 
 
 
 
 
	
	
	
	
	
	

?>