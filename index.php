<?php
$user = 'root';
$pass = 'root';



try{
   $db = new PDO ('mysql:host=127.0.0.1;db_othman',$user,$pass);
   echo '<h1>Succesful Connection to the DB</h1>';
   $query = 'SELECT * FROM tb_users';
   $statement = $db->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll();
   $statement->closeCursor();      

    foreach($results as $r){
            echo $r['work'] . '<br />';
    }

}
catch (PDOException $e){
   print "Erreur " . $e->getMessage() . "<br/>";
   die;
}