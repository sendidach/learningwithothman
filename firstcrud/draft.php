<?php

require($_SERVER['DOCUMENT_ROOT'].'/firstcrud/includes/connect.php');
require($_SERVER['DOCUMENT_ROOT'].'/firstcrud/functions/functions.php');


// $userid = $GET_['id'];

// $query = $pdo->query('SELECT * FROM tb_users WHERE id = :userid');

// $users = ($query->fetchAll(PDO::FETCH_BOTH));

// print_r($users);

print_r(fetchUser(1));