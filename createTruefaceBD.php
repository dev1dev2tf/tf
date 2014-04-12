<?php
	include_once "inc/lib.inc.php";
 
	// создадим базу данных trueface
	$db = new Mysqli('localhost', 'root' , 'ghjchjc');
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
 	
	$sqlCrGossip = "CREATE TABLE IF NOT EXISTS gossip (
															id INT(10)  NOT NULL AUTO_INCREMENT,	
															topic char NOT NULL,
															keywords char NOT NULL,
															gtext char  NOT NULL,
															date int(15) NOT NULL,
															
															PRIMARY KEY(id)
																)";
 
  	if ($db->query($sqlCrGossip) === TRUE) {
	 	echo "table gossip created<br />";
	 	} 
 
 	$sqlCrComments = "CREATE TABLE IF NOT EXISTS comments (
															id INT(10)  NOT NULL AUTO_INCREMENT,																
															msg char  NOT NULL,
															date int(15) NOT NULL,
															
															PRIMARY KEY(id)
																)";
 
   	if ($db->query($sqlCrComments) === TRUE) {
	 	echo "table comments created<br />";
	 	}
	
	
	
	
	
	

?>