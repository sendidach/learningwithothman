<?php
//require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/connect.php");
// require_once($_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php");



$response = [];
$data = [];
$message = '';

if (isset($_POST['action']) && !empty($_POST['action'])) {

   $action =  $_POST['action'];
   if ($action == 'getUsername') {
      $inputvalue = $_POST['inputvalue'];
      $inputvalue = strtoupper($inputvalue);
      $data = $inputvalue;
      $message = 'YOOPIIII!';
      $response['statut'] = 200;
      $response['data'] = $data;
      $response['message'] = $message;

   } elseif ($action == 'getphoneNumber') {
      $inputvalue = $_POST['inputvalue'];
      $data = $inputvalue;
      $message = 'YOOHOOO!';
      $response['statut'] = 200;
      $response['data'] = $data;
      $response['message'] = $message;

   } else { 
      $message = 'This action doesn\'t exist';
      $response['statut'] = 204;
      $response['message'] = $message;
   }

} else {
   $message = 'This method is incorrect';
   $response['statut'] = 206;
   $response['message'] = $message;
}

echo json_encode($response);

