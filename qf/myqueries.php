<?php
//require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/connect.php");
// require_once($_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php");
$response = [];

if (isset($_POST)){
   $action =  $_POST['action'];
   $inputvalue = $_POST['inputvalue'];

   $inputvalue = strtoupper($inputvalue);
   
    $response['action'] = $action;
    $response['inputvalue'] = $inputvalue;

    
   echo json_encode($response);
}