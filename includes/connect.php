<?php
ob_start();
// recoje las variables SERVER USER y PASS de constant.php
require("constant_vars.php");
require("constant.php");

$dsn = 'mysql:dbname=db_othman;host=localhost';
$user = 'sendidach';
$pass = '4042Juice!';

try {

	 // CONNECT TO DB
	 $db = new PDO ($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

} catch (PDOException $e) {
	
	echo "DataBase Down";
}


?>