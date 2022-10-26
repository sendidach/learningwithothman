<?php

require($_SERVER['DOCUMENT_ROOT'] . '/firstcrud/includes/connect.php');
require($_SERVER['DOCUMENT_ROOT'] . '/firstcrud/functions/functions.php');

if (isset($_GET['action'])){
    $action = $_GET['action'];
    if ($action=='delete'){
        if (isset($_GET['id'])){
            $userid = $_GET['id'];
            if (deleteUser($userid)){
                header('Location: '.$_SERVER['SERVER_HOST'] . '/firstcrud/users.php');
            } else {
                echo 'User not Deleted';
            }
        }

    }
} elseif($_POST['action']){
    $action = $_POST['action'];
    if($action == 'insert'){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $birth = $_POST['birth'];
        $submit = $_POST['insert'];
        if (addUser($fname, $lname, $email, $phone, $birth)) {
            header('Location: '.$_SERVER['SERVER_HOST'] . '/firstcrud/users.php');
        } else {
            echo "error";
        }
    }
}


?>