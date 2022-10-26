<?php

$dsn = 'mysql:dbname=db_othman;host=localhost';
$user = 'sendidach';
$pass = '4042Juice!';

try {

	 // CONNECT TO DB
	 $pdo = new PDO ($dsn,$user,$pass);
// 	 echo '<div class="alert alert-success" role="alert">
// 	 Connection to DB Successful!
//    </div>';

} catch (PDOException $e) {
	$error = $e->getMessage();
}
?>