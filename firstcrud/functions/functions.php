<?php

require ($_SERVER['DOCUMENT_ROOT'].'/firstcrud/includes/connect.php');

//FUNCTION TO CREATE A USER:

function addUser ($fname,$lname ,$email, $phone, $birth){
        global $pdo;
    try {
        $pdoQuery = 'INSERT INTO tb_users (firstname, lastname, email, phone, birth) VALUES (:fname, :lname, :email, :phone, :birth)';

        $pdoQuery_prepare = $pdo->prepare($pdoQuery);

        $pdoQuery_exec = $pdoQuery_prepare->execute([
            ':fname' => $fname,
            ':lname' => $lname,
            ':email' => $email,
            ':phone' => $phone,
            ':birth' => $birth,
        ]);

        if ($pdoQuery_prepare->rowCount()>0) {
            return true;
        } else {
            return false;
        }

    }
    catch(PDOException $e) {
        // $error = $e->getMessage();
        return false;
    }
}


//------------------ END INSERT QUERY --------------------

// FUNCTION TO DELETE USER:

function deleteUser ($userid){
    global $pdo;
    try {
        $pdoQuery = 'DELETE FROM tb_users WHERE id =:userid';

        $pdoQuery_prepare = $pdo->prepare($pdoQuery);

        $pdoQuery_prepare->execute([
            ':userid' => $userid,
           
        ]);

        if ($pdoQuery_prepare->rowCount()>0) {
            return true;
        } else {
            return false;
        }

    }
    catch(PDOException $e) {
        // $error = $e->getMessage();
        return false;
    }
}

//------------------ END DELETE QUERY --------------------

// ------------------QUERY FETCH MULITPLE USERS --------------------

function fetchUsers (){
    global $pdo;
    try {
        $pdoQuery = 'SELECT * FROM tb_users';

        $pdoQuery_prepare = $pdo->prepare($pdoQuery);

        $pdoQuery_prepare->execute([
           
        ]);

        $response = $pdoQuery_prepare->fetchAll(PDO::FETCH_ASSOC);

        return $response;

    }
    catch(PDOException $e) {
        // $error = $e->getMessage();
        return false;
    }
}

//------------------ END DELETE QUERY --------------------


// ------------------QUERY FETCH SINGLE USERS --------------------

function fetchUser($userid){
    global $pdo;
    try {
        $pdoQuery = 'SELECT * FROM tb_users WHERE id = :userid';

        $pdoQuery_prepare = $pdo->prepare($pdoQuery);

        $pdoQuery_prepare->execute([
            ':userid'=>$userid,
        ]);

        $response = $pdoQuery_prepare->fetch(PDO::FETCH_ASSOC);

        return $response;

    }
    catch(PDOException $e) {
        // $error = $e->getMessage();
        return false;
    }
}

//------------------ END DELETE QUERY --------------------




?>