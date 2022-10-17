<?php
$user = 'maxmind_sendidach';
$pass = '4042Juice';

// $user = 'sendidach';
// $pass = '4042Juice!';



try{
   $db = new PDO ('mysql:host=127.0.0.1;maxmind_achraf',$user,$pass);
   echo '<h1>Succesful Connection to the DB</h1>';
   foreach ($db->query('SELECT * FROM tb_users') as $row) {
      print_r($row);
   }
}
catch (PDOException $e){
   print "Erreur: " . $e->getMessage() . "<br/>";
   die;
}