<?php
require ('includes/connect.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <title>Learning with Othman</title>
</head>
<body>
   <div class="container">
      <h1>Welcome to Learning with Othman </h1>
   
<?php
// Remote DB

// $user = 'maxmind_sendidach';
// $pass = '4042Juice';

// Local DB

$error = null;



try{
   

   // QUERY TO DISPLAY TABLE AS OBJ 

   $query = $db->query('SELECT * FROM tb_users');
   $users = ($query->fetchAll(PDO::FETCH_OBJ));
  
}
catch (PDOException $e){
   $error = $e->getMessage();
} 

if ($error) {
   ?> <div class="alert alert-danger" role="alert"><?= $error ?></div> 
   <?php
} else {
   foreach ($users as $user) {?>
      <pre>
        <?php print_r ($user)?>
   </pre>
      <?php
   }
}




?>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>