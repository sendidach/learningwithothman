<?php
$user = 'mamp';
$pass = 'root';



try{
   $db = new PDO ('mysql:host=localhost;db_othman',$user,$pass);
   // foreach($db->query('SELECT * FROM tb_users') as $row) 
   // {
   //  echo($row);
   // }

   $stmt = $db->query("SELECT * FROM tb_users");
   print_r($stmt);
}
catch (PDOException $e){
   print "Erreur " . $e->getMessage() . "<br/>";
   die;
}