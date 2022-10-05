<?php
ob_start();
// recoje las variables SERVER USER y PASS de constant.php
require("constant_vars.php");
require("constant.php");


try {

	$db = new PDO("mysql:host=".SERVER.";dbname=".DB_NAME, USER, PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
	
	echo "DataBase Down";
}


?>