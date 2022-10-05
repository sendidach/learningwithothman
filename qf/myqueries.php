<?php
//require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/connect.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php");

$response = [];
$data = [];

if (isset($_POST['action']) && !empty($_POST['action'])) {

    $action = $_POST['action'];

    if ($action == 'loadUsers') {
        $myVar = 'Positive';

        if ($myVar == 'Positive') {
            
            $data = $myVar;

            $response['data'] = $data;
            $response['message'] = ' MdP actialisé correctement';
            $response['status'] = 200;
 
        } else {

            $response['data'] = $data;
            $response['message'] = $db->errorInfo();
            $response['status'] = 204;

        }


    } else {
        $response['data'] = $data;
        $response['message'] = 'Veuillez verifier votre requete';
        $response['status'] = 206;
    }
} else {

    $response['data'] = $data;
    $response['message'] = 'requete incomplete, contactez votre administrateur avec le code suivant : P_ACTION 321F45';
    $response['status'] = 404;
}

echo json_encode($response);